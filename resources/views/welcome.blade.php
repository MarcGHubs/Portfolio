<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MARC VILLANUEVA | AI & GAMES</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet">

        <style>
            :root {
                --red: #ff2d2d;
                --bg: #050505;
            }

            body {
                background-color: var(--bg);
                color: #fff;
                font-family: 'Instrument Sans', sans-serif;
                margin: 0;
                overflow: hidden; /* For the intro animation */
            }

            /* Welcome Layout */
            .welcome-wrapper {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 2rem;
                position: relative;
            }

            /* Nav Styling */
            nav {
                position: absolute;
                top: 2rem;
                right: 2rem;
                z-index: 10;
            }

            nav a {
                font-family: 'Syncopate', sans-serif;
                font-size: 0.6rem;
                letter-spacing: 2px;
                text-decoration: none;
                color: #666;
                padding: 0.5rem 1rem;
                border: 1px solid rgba(255,255,255,0.05);
                transition: 0.3s;
                margin-left: 10px;
            }

            nav a:hover {
                color: var(--red);
                border-color: var(--red);
            }

            /* Center Content */
            .hero-content {
                text-align: center;
                max-width: 800px;
                z-index: 2;
            }

            .glitch-portal {
                font-family: 'Syncopate', sans-serif;
                font-size: clamp(1.5rem, 8vw, 4rem);
                letter-spacing: -2px;
                line-height: 0.9;
                margin-bottom: 2rem;
                position: relative;
                color: #fff;
            }

            .hero-subtitle {
                font-family: 'Syncopate', sans-serif;
                font-size: 0.7rem;
                color: var(--red);
                letter-spacing: 5px;
                margin-bottom: 3rem;
                opacity: 0.8;
            }

            /* Entrance Button */
            .enter-btn {
                display: inline-block;
                padding: 1.5rem 4rem;
                border: 1px solid var(--red);
                color: #fff;
                text-decoration: none;
                font-family: 'Syncopate', sans-serif;
                font-size: 0.8rem;
                letter-spacing: 4px;
                transition: 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
                background: transparent;
                position: relative;
                overflow: hidden;
            }

            .enter-btn:hover {
                background: var(--red);
                box-shadow: 0 0 30px rgba(255, 45, 45, 0.3);
            }

            /* Decorative Elements */
            .bg-grid {
                position: absolute;
                inset: 0;
                background-image: 
                    linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
                background-size: 50px 50px;
                z-index: 1;
            }

            .scanline {
                width: 100%;
                height: 100px;
                z-index: 3;
                background: linear-gradient(0deg, rgba(0, 0, 0, 0) 0%, rgba(255, 45, 45, 0.05) 50%, rgba(0, 0, 0, 0) 100%);
                opacity: 0.1;
                position: absolute;
                bottom: 100%;
                animation: scanline 8s linear infinite;
            }

            @keyframes scanline {
                0% { bottom: 100%; }
                100% { bottom: -100%; }
            }

            /* Intro Animation Overlay */
            #boot-overlay {
                position: fixed;
                inset: 0;
                background: #000;
                z-index: 100;
                display: flex;
                padding: 3rem;
                font-family: monospace;
                font-size: 0.8rem;
                color: var(--red);
                flex-direction: column;
                pointer-events: none;
            }
        </style>
    </head>
    <body>
        <div id="boot-overlay">
            <div id="boot-text"></div>
        </div>

        <div class="bg-grid"></div>
        <div class="scanline"></div>

        <div class="welcome-wrapper">
            @if (Route::has('login'))
                <nav>
                    @auth
                        <a href="{{ url('/dashboard') }}">DASHBOARD</a>
                    @else
                        <a href="{{ route('login') }}">LOGIN</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">REGISTER</a>
                        @endif
                    @endauth
                </nav>
            @endif

            <main class="hero-content">
                <div class="hero-subtitle">SYSTEM VERSION 2026.03</div>
                <h1 class="glitch-portal">
                    MV.DEV<br>SYSTEMS
                </h1>
                <p style="color: #666; max-width: 400px; margin: 0 auto 3rem; font-size: 0.9rem; line-height: 1.6;">
                    Architecting high-performance machine intelligence and immersive virtual environments.
                </p>
               <a href="{{ route('home') }}" class="enter-btn">
        INITIALIZE ARCHIVE
    </a>
            </main>
        </div>

        <script>
            // Terminal Boot Script
            const bootText = [
                "> INITIALIZING KERNEL...",
                "> LOADING AI_ENGINE_MODULE...",
                "> CONNECTING TO SAN_PEDRO_NODE...",
                "> AUTHENTICATING MV.DEV...",
                "> ACCESS GRANTED.",
                "> BOOTING INTERFACE..."
            ];

            const bootContainer = document.getElementById('boot-text');
            const overlay = document.getElementById('boot-overlay');

            let i = 0;
            function typeBoot() {
                if (i < bootText.length) {
                    let p = document.createElement('p');
                    p.textContent = bootText[i];
                    p.style.margin = "5px 0";
                    bootContainer.appendChild(p);
                    i++;
                    setTimeout(typeBoot, 400);
                } else {
                    setTimeout(() => {
                        overlay.style.transition = "opacity 1s ease";
                        overlay.style.opacity = "0";
                        document.body.style.overflow = "auto";
                        setTimeout(() => overlay.remove(), 1000);
                    }, 500);
                }
            }

            window.onload = typeBoot;
        </script>
    </body>
</html>