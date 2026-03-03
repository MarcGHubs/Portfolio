# 1. Use PHP with Apache
FROM php:8.2-apache

# 2. Install dependencies AND Node.js 22 (Required for Vite 6+)
RUN apt-get update && apt-get install -y \
    libpng-dev zlib1g-dev libxml2-dev libzip-dev zip unzip curl \
    && curl -sL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs \
    && docker-php-ext-install gd pdo_mysql zip

# 3. Enable Apache Rewrite for Laravel
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# 4. Copy code and install everything
COPY . /var/www/html
WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev

# Clean install of NPM packages to fix the Tailwind binding error
RUN rm -rf node_modules package-lock.json \
    && npm install \
    && npm run build

# 5. Permissions
RUN chown -R www-data:www-data storage bootstrap/cache