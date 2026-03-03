@extends('layouts.app')

@section('content')

<div id="scroll-progress"></div>

<div class="bg-fx-container">
    <div class="grid-perspective-container">
        <div class="grid-floor"></div>
    </div>
    <div class="scanline"></div>
    <div class="vignette"></div>
</div>

<div id="nav-wrapper">
    <nav id="tactical-nav">
        <div class="nav-content">
            <div class="nav-logo">MV.<span class="glitch-fast">DEV</span></div>
            <div class="nav-links">
                <a href="#about"><span class="nav-idx">/01</span> PHILOSOPHY</a>
                <a href="#projects"><span class="nav-idx">/02</span> ARCHIVE</a>
                <a href="#contact" class="nav-cta">CONNECT</a>
            </div>
        </div>
    </nav>
</div>

<header class="hero-header">
    <div class="bg-watermark">ARCHITECT</div>
    
    <div class="section-container">
        <div class="hero-main-layout">
            
            <div class="hero-data-col" data-aos="fade-right">
                <div class="status-box">
                    <div class="pulse-dot"></div>
                    <span class="status-code">NODE_ACTIVE: 127.0.0.1</span>
                </div>
                
                <div class="hero-name-wrap">
                    <span class="hero-pre">SYSTEM_USER:</span>
                    <h1 class="glitch-name" data-text="MV.DEV">MV.DEV</h1>
                    <div class="tagline-marquee">
                        <span>DATA_ANALYST // GAME_DEV // FULL-STACK // </span>
                        <span>DATA_ANALYST // GAME_DEV // FULL-STACK // </span>
                    </div>
                </div>

                <div class="hero-description-card">
                    <p>
                        Building <span class="accent">Smart Web & Mobile Systems</span> that blend 
                        <span class="accent">Real-Time Technology</span>, 
                        <span class="accent">AI Integration</span>, and 
                        <span class="accent">Modern User Experience</span>.
                    </p>
                    <div class="btn-group">
                        <a href="#projects" class="tactical-btn">
                            <span class="btn-label">DATA_ARCHIVE</span>
                            <span class="btn-icon">_</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="hero-visual-col" data-aos="zoom-out" data-aos-delay="200">
                <div class="hud-container">
                    <div class="hud-frame">
                        <div class="hud-photo-area">
                            <img src="{{ asset('images/profile.jpg') }}" alt="Marc Villanueva" class="profile-main">
                            <div class="hud-glitch-overlay"></div>
                        </div>
                        <div class="hud-scan-line"></div>
                    </div>
                    <div class="hud-tag t-1">RANK: CUM_LAUDE</div>
                    <div class="hud-tag t-2">LOC: 14.35° N</div>
                    <div class="hud-tag t-3">V.2.0.26</div>
                </div>
            </div>

        </div>
    </div>

    <div class="hero-footer-stats">
        <div class="stat-block">
            <span class="s-val">1.42</span>
            <span class="s-label">GPA_STABILITY</span>
        </div>
        <div class="stat-block">
            <span class="s-val">2.026</span>
            <span class="s-label">BUILD_VERSION</span>
        </div>
        <div class="stat-block">
            <span class="s-val">8+</span>
            <span class="s-label">CORE_ENGINES</span>
        </div>
    </div>
</header>

<section id="about" class="content-section">
    <div class="section-container">
        <div class="dual-grid">
            <div class="grid-label" data-aos="fade-up">
                <span class="entry-num">01</span>
                <h2 class="section-title">BUILDING<br>INTELLIGENT SYSTEMS</h2>
            </div>
            <div class="grid-content" data-aos="fade-left">
                <div class="tech-spec-container">
                    <div class="spec-column">
                        <h4 class="spec-h">CORE_FOCUS</h4>
                        <ul>
                            <li>Full-Stack Web Development</li>
                            <li>Android & Real-Time Applications</li>
                            <li>AI-Powered Mobile Integration</li>
                        </ul>
                    </div>
                    <div class="spec-column">
                        <h4 class="spec-h">TECH_STACK</h4>
                        <ul>
                            <li>Laravel + ASP.NET Core</li>
                            <li>Java (Android) + Firebase</li>
                            <li>TensorFlow Lite + MediaPipe</li>
                            <li>Unity / Unreal Engine</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="content-section darker">
    <div class="section-container">
        <div class="ledger-header" data-aos="fade-right">
            <h2 class="simple-title"><span class="red-text">/</span>PROJECT_ARCHIVE.EXE</h2>
        </div>

        <div class="tactical-ledger">
            @php 
                $projects = [
                    ['01', 'SP RESPONDER', 'AI / Real-time', 'splr.png', 'Mission-critical GPS response ecosystem.'],
                    ['02', 'YATACAFE POS', 'Laravel / SQL', 'yat.png', 'High-traffic inventory orchestration.'],
                    ['03', 'SIGNEASE AI', 'Vision AI', 'sign.png', 'ASL translation via TensorFlow.'],
                    ['04', 'BARD RPG', 'Unity / C#', 'bard.png', '3D Odyssey with portal mechanics.'],
                    ['05', 'TANTEI HIGH', 'Unity 6', 'tantei.png', 'PC Mystery / Environmental logic.'],
                ];
            @endphp

            @foreach($projects as $p)
            <div class="ledger-row" data-aos="fade-up">
                <div class="r-num">{{ $p[0] }}</div>
                <div class="r-info">
                    <div class="r-top">
                        <h3>{{ $p[1] }}</h3>
                        <span class="r-tag">{{ $p[2] }}</span>
                    </div>
                    <p class="r-desc">{{ $p[4] }}</p>
                </div>
                <div class="r-visual">
                    <img src="{{ asset('images/'.$p[3]) }}" alt="Project Build">
                </div>
                <div class="r-link">
                    <a href="#" class="view-link">VIEW_SRC</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="contact" class="content-section">
    <div class="section-container">
        <div class="terminal-shell" data-aos="zoom-in">
            <div class="shell-bar">
                <div class="shell-dots"><span></span><span></span><span></span></div>
                <div class="shell-title">COMMS_PROTOCOL.SH</div>
            </div>
            <div class="shell-body">
                <h2 class="terminal-h">INITIATE_COLLABORATION</h2>
                <p>
                    Ready to build intelligent web systems, real-time Android applications,
                    and immersive game experiences.
                </p>
                <div class="terminal-action">
                    <span class="prompt">></span>
                    <a href="https://www.facebook.com/marcyyyvillanueva" target="_blank" class="blink-link">
                        CONNECT_WITH_ME
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&family=Space+Mono&display=swap');

    :root { 
        --red: #ff2d2d; 
        --red-low: rgba(255, 45, 45, 0.1); 
        --bg: #030303;
        --border: rgba(255,255,255,0.08);
    }

    body { background: var(--bg); color: #fff; font-family: 'Space Mono', monospace; overflow-x: hidden; }

    /* --- SCROLL PROGRESS --- */
    #scroll-progress {
        position: fixed;
        top: 0;
        left: 0;
        height: 3px;
        background: var(--red);
        z-index: 2000;
        width: 0%;
        box-shadow: 0 0 10px var(--red);
    }

    /* --- ENHANCED DYNAMIC ISLAND MORPH --- */
    #nav-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        z-index: 1000;
        pointer-events: none;
    }

    #tactical-nav { 
        width: 100%;
        max-width: 100%;
        padding: 25px 0; 
        background: rgba(0,0,0,0);
        transition: 
            max-width 0.8s cubic-bezier(0.19, 1, 0.22, 1),
            top 0.7s cubic-bezier(0.19, 1, 0.22, 1),
            padding 0.5s ease,
            background 0.4s ease,
            border-radius 0.6s ease;
        border: 1px solid transparent;
        pointer-events: auto;
        position: relative;
        top: 0;
    }

    #tactical-nav.scrolled {
        top: 20px;
        max-width: 580px; 
        padding: 12px 25px;
        background: rgba(10, 10, 10, 0.75);
        backdrop-filter: blur(25px) saturate(1.5);
        -webkit-backdrop-filter: blur(25px) saturate(1.5);
        border-radius: 100px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 15px 35px rgba(0,0,0,0.6);
    }

    #tactical-nav.scrolled:hover {
        max-width: 600px;
        background: rgba(15, 15, 15, 0.9);
        border-color: var(--red);
    }

    .nav-content { 
        max-width: 1200px; 
        margin: 0 auto; 
        padding: 0 40px; 
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
        width: 100%;
        transition: all 0.5s ease;
    }

    #tactical-nav.scrolled .nav-content { padding: 0; max-width: 100%; }

    .nav-logo { font-family: 'Syncopate'; font-weight: 700; color: #fff; letter-spacing: 2px; font-size: 0.8rem; }
    .nav-links { display: flex; gap: 30px; align-items: center; transition: gap 0.5s ease; }
    #tactical-nav.scrolled .nav-links { gap: 20px; }

    .nav-links a { text-decoration: none; color: #888; font-size: 0.6rem; font-family: 'Syncopate'; transition: 0.3s; }
    .nav-links a:hover { color: var(--red); text-shadow: 0 0 10px var(--red); }
    .nav-idx { color: var(--red); margin-right: 5px; opacity: 0.7; }
    .nav-cta { border: 1px solid var(--red); padding: 8px 18px; color: #fff !important; border-radius: 30px; background: transparent; transition: 0.3s ease !important; }
    .nav-cta:hover { background: var(--red); color: #000 !important; }

    /* --- HERO STYLES --- */
    .section-container { max-width: 1200px; margin: 0 auto; padding: 0 40px; }
    .content-section { padding: 120px 0; position: relative; }
    .darker { background: #050505; }

    .hero-header { height: 100vh; display: flex; flex-direction: column; justify-content: center; position: relative; }
    .hero-main-layout { display: flex; align-items: center; justify-content: space-between; gap: 50px; }
    
    .hero-data-col { flex: 1.2; }
    .status-box { display: flex; align-items: center; gap: 10px; margin-bottom: 20px; border-left: 2px solid var(--red); padding-left: 15px; }
    .status-code { font-size: 0.65rem; color: #555; letter-spacing: 2px; }
    .pulse-dot { width: 6px; height: 6px; background: var(--red); border-radius: 50%; animation: pulse 1.5s infinite; }
    @keyframes pulse { 0% { opacity: 1; } 50% { opacity: 0.3; } 100% { opacity: 1; } }
    
    .hero-pre { font-size: 0.8rem; color: var(--red); opacity: 0.8; }
    .glitch-name { font-family: 'Syncopate'; font-size: clamp(3rem, 8vw, 6rem); margin: 0; line-height: 0.9; letter-spacing: -5px; position: relative; }
    
    .tagline-marquee { white-space: nowrap; overflow: hidden; background: var(--red); color: #000; font-weight: bold; font-size: 0.6rem; padding: 4px 0; margin-top: 15px; width: 80%; }
    
    .hero-description-card { margin-top: 40px; max-width: 450px; }
    .hero-description-card p { font-size: 1.1rem; color: #999; line-height: 1.6; }
    
    .tactical-btn { display: inline-flex; align-items: center; gap: 20px; border: 1px solid #333; padding: 15px 30px; text-decoration: none; color: #fff; margin-top: 20px; transition: 0.3s; font-family: 'Syncopate'; font-size: 0.7rem; }
    .tactical-btn:hover { border-color: var(--red); background: var(--red-low); transform: translateY(-3px); }

    .hero-visual-col { flex: 0.8; display: flex; justify-content: center; position: relative; }
    .hud-container { position: relative; width: 340px; height: 420px; }
    .hud-frame { width: 100%; height: 100%; border: 1px solid rgba(255,255,255,0.1); background: rgba(10,10,10,0.5); clip-path: polygon(0 0, 85% 0, 100% 15%, 100% 100%, 15% 100%, 0 85%); position: relative; overflow: hidden; }
    .hud-photo-area { width: 100%; height: 100%; position: relative; background: #111; }
    .profile-main { width: 100%; height: 100%; object-fit: cover; filter: grayscale(1) contrast(1.1); opacity: 0.7; }
    .hud-scan-line { position: absolute; top: 0; left: 0; width: 100%; height: 2px; background: var(--red); box-shadow: 0 0 15px var(--red); animation: scan 4s linear infinite; z-index: 12; }
    @keyframes scan { 0% { top: 0; } 100% { top: 100%; } }
    .hud-tag { position: absolute; background: #000; border: 1px solid var(--red); padding: 4px 10px; font-family: 'Syncopate'; font-size: 0.55rem; color: #fff; z-index: 15; }
    .t-1 { top: -10px; right: 20px; }
    .t-2 { bottom: 40px; left: -30px; transform: rotate(-90deg); }
    .t-3 { bottom: -10px; right: 40px; }

    .hero-footer-stats { position: absolute; bottom: 0; left: 0; width: 100%; display: flex; border-top: 1px solid var(--border); background: rgba(0,0,0,0.5); }
    .stat-block { flex: 1; padding: 30px; border-right: 1px solid var(--border); text-align: center; }
    .s-val { display: block; font-family: 'Syncopate'; font-size: 1.5rem; color: var(--red); }
    .s-label { font-size: 0.55rem; color: #444; letter-spacing: 2px; margin-top: 5px; }

    /* --- ARCHIVE GRID --- */
    .dual-grid { display: grid; grid-template-columns: 1fr 1.5fr; gap: 80px; }
    .entry-num { color: var(--red); font-family: 'Syncopate'; font-size: 1rem; }
    .section-title { font-family: 'Syncopate'; font-size: 2.5rem; margin-top: 10px; letter-spacing: -2px; }
    .tech-spec-container { display: flex; gap: 40px; }
    .spec-h { color: var(--red); font-size: 0.7rem; letter-spacing: 3px; margin-bottom: 20px; }
    .spec-column ul { list-style: none; padding: 0; }
    .spec-column li { color: #888; margin-bottom: 12px; font-size: 0.9rem; border-left: 1px solid #222; padding-left: 15px; }

    /* --- TACTICAL LEDGER --- */
    .ledger-header { margin-bottom: 60px; }
    .simple-title { font-family: 'Syncopate'; font-size: 1.5rem; }
    .red-text { color: var(--red); }
    .ledger-row { display: grid; grid-template-columns: 50px 1fr 150px 120px; align-items: center; padding: 30px; border-bottom: 1px solid var(--border); transition: 0.3s; text-decoration: none; color: inherit; position: relative; overflow: hidden; }
    .ledger-row:hover { background: rgba(255, 255, 255, 0.03); }
    .ledger-row::before { content: ""; position: absolute; left: 0; top: 0; height: 100%; width: 2px; background: var(--red); transform: scaleY(0); transition: 0.3s; }
    .ledger-row:hover::before { transform: scaleY(1); }

    .r-num { color: var(--red); font-size: 0.8rem; font-weight: bold; }
    .r-top { display: flex; align-items: center; }
    .r-top h3 { font-family: 'Syncopate'; margin: 0; font-size: 1.2rem; }
    .r-tag { font-size: 0.6rem; color: #555; text-transform: uppercase; border: 1px solid #222; padding: 2px 8px; margin-left: 15px; }
    .r-desc { color: #666; font-size: 0.85rem; margin: 10px 0 0 0; }
    .r-visual img { width: 120px; height: 60px; object-fit: cover; opacity: 0.1; filter: grayscale(1); transition: 0.5s; border: 1px solid #333; }
    .ledger-row:hover .r-visual img { opacity: 0.8; filter: grayscale(0); border-color: var(--red); }
    .view-link { font-size: 0.6rem; color: #444; text-decoration: none; border: 1px solid #333; padding: 8px; text-align: center; font-family: 'Syncopate'; transition: 0.3s; }
    .view-link:hover { color: var(--red); border-color: var(--red); background: var(--red-low); }

    /* --- TERMINAL --- */
    .terminal-shell { background: #080808; border: 1px solid #222; max-width: 800px; margin: 0 auto; overflow: hidden; }
    .shell-bar { background: #111; padding: 12px 20px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #222; }
    .shell-dots { display: flex; gap: 8px; }
    .shell-dots span { width: 8px; height: 8px; border-radius: 50%; background: #333; }
    .shell-title { font-size: 0.6rem; color: #555; font-family: 'Syncopate'; }
    .shell-body { padding: 80px 60px; text-align: left; }
    .terminal-h { font-family: 'Syncopate'; font-size: 2rem; margin-bottom: 20px; letter-spacing: -1px; }
    .terminal-action { margin-top: 40px; font-size: 1.1rem; display: flex; align-items: center; }
    .prompt { color: var(--red); margin-right: 15px; font-weight: bold; }
    .blink-link { color: #fff; text-decoration: none; border-bottom: 2px solid var(--red); padding-bottom: 5px; font-family: 'Syncopate'; font-size: 0.8rem; }
    .blink-link:hover { background: var(--red); color: #000; }

    /* --- BACKGROUND FX --- */
    .bg-fx-container { position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -2; overflow: hidden; background: #000; }
    .grid-floor { position: absolute; width: 200%; height: 200%; background-image: linear-gradient(to right, rgba(255,255,255,0.03) 1px, transparent 1px), linear-gradient(to bottom, rgba(255,255,255,0.03) 1px, transparent 1px); background-size: 50px 50px; transform: rotateX(60deg); bottom: -50%; left: -50%; transition: transform 0.1s ease-out; }
    .vignette { position: absolute; width: 100%; height: 100%; background: radial-gradient(circle, transparent 20%, #000 90%); pointer-events: none; }
    .scanline { position: absolute; width: 100%; height: 100%; background: linear-gradient(to bottom, transparent 50%, rgba(0,0,0,0.3) 50%); background-size: 100% 4px; pointer-events: none; opacity: 0.1; }
    .bg-watermark { position: absolute; font-family: 'Syncopate'; font-size: 18vw; color: rgba(255,255,255,0.01); top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: -1; font-weight: 900; pointer-events: none; }

    .accent { color: var(--red); }

    /* --- RESPONSIVE UPDATES --- */
    @media (max-width: 992px) {
        .hero-main-layout, .dual-grid { display: flex; flex-direction: column; gap: 40px; }
        .hero-header { height: auto; padding: 140px 0 60px 0; }
        .hero-visual-col { margin-top: 50px; }
        .hud-container { width: 280px; height: 350px; margin: 0 auto; }
        
        /* Fixed Project Ledger for Mobile */
        .ledger-row { 
            grid-template-columns: 40px 1fr auto; 
            padding: 20px 15px; 
            gap: 15px;
        }
        .r-top h3 { font-size: 1rem; }
        .r-visual { display: none; }
        .r-tag { display: none; } /* Hide tag on small screens to save space */
        
        /* Terminal Mobile Fix */
        .shell-body { padding: 40px 25px; }
        .terminal-h { 
            font-size: 1.4rem; 
            line-height: 1.2;
            word-wrap: break-word; /* Prevents overflow */
            overflow-wrap: anywhere; 
        }
        
        #tactical-nav.scrolled { max-width: 90%; }
        
        /* Footer stats fix */
        .hero-footer-stats {
            position: relative;
            flex-wrap: wrap;
            margin-top: 50px;
        }
        .stat-block { 
            padding: 15px; 
            flex: 1 1 33%;
            border-bottom: 1px solid var(--border);
            border-right: 1px solid var(--border);
        }
        .s-val { font-size: 1.1rem; }
    }

    /* Small Phone adjustments */
    @media (max-width: 480px) {
        .glitch-name { font-size: 3.2rem; letter-spacing: -2px; }
        .section-title { font-size: 1.8rem; }
        .nav-links { display: none; } /* Hiding crowded nav on tiny phones */
        .nav-content { justify-content: center; }
        .hero-description-card p { font-size: 0.95rem; }
        .tagline-marquee { width: 100%; }
    }
</style>

<script>
    // Scroll Progress Logic
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        const progress = document.getElementById("scroll-progress");
        if(progress) progress.style.width = scrolled + "%";
    });

    const nav = document.getElementById('tactical-nav');
    
    // Smooth Scroll Trigger for Island Morph
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });

    // Parallax Grid Effect (Only on Desktop for performance)
    if (window.innerWidth > 992) {
        window.addEventListener('mousemove', (e) => {
            const x = (window.innerWidth / 2 - e.pageX) / 45;
            const y = (window.innerHeight / 2 - e.pageY) / 45;
            const grid = document.querySelector('.grid-floor');
            if(grid) {
                grid.style.transform = `rotateX(60deg) translateX(${x}px) translateY(${y}px)`;
            }
        });
    }

    // Smooth anchor navigation
    document.querySelectorAll('a[href^="#"]').forEach(anchor => { 
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);
            if(target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
</script>

@endsection