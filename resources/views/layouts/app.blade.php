<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marc Villanueva | Portfolio</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Syncopate:wght@700&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --bg: #000;
            --red: #ff2d2d;
            --text: #e0e0e0;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            font-family: 'Space Grotesk', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* Tactical Scrollbar */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #000; }
        ::-webkit-scrollbar-thumb { background: #222; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: var(--red); }

        footer {
            padding: 80px 0;
            text-align: center;
            border-top: 1px solid rgba(255,255,255,0.05);
            color: #444;
            font-family: 'Syncopate', sans-serif;
            font-size: 0.65rem;
            letter-spacing: 2px;
            background: #000;
        }
    </style>
</head>
<body>

    @yield('content')

    <footer>
        © {{ date('Y') }} MARC VILLANUEVA • CUM LAUDE (1.42) • SYS_V.2.0.26
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>
</body>
</html>