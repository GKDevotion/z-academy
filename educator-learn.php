<?php 
include_once ('elements/header.php');
?>
    <style>

        /* --- Animations --- */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        .animate-up { animation: fadeInUp 0.8s ease backwards; }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .floating { animation: float 4s ease-in-out infinite; }
        
        /* --- Components --- */
        .feature-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            border: 1px solid #eee;
            transition: var(--transition);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--card-shadow);
            border-color: var(--zed-backgound-color);
        }
        
        .icon-circle {
            width: 70px; height: 70px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 24px;
            transition: var(--transition);
        }

        .nav-card:hover .icon-circle {
            transform: rotateY(180deg);
            background: var(--dark);
        }

        /* --- Buttons --- */
        .btn-custom {
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: var(--transition);
        }

        .btn-primary-custom {
            background-color: var(--primary);
            color: white;
            border: none;
        }

        .btn-primary-custom:hover {
            background-color: #d60000;
            transform: scale(1.05);
            box-shadow: 0 10px 20px var(--zed-backgound-color);
        }

        .btn-yellow {
            background-color: var(--warning);
            color: var(--dark);
            border: none;
        }

        .btn-yellow:hover {
            background-color: var(--warning);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 189, 46, 0.4);
        }

        .slant-bg {
            background: #fcfcfc;
            clip-path: polygon(0 5%, 100% 0, 100% 95%, 0% 100%);
            padding: 100px 0;
        }

        .img-wrapper {
            position: relative;
            z-index: 1;
        }

        .img-wrapper::before {
            content: '';
            position: absolute;
            width: 50%; 
            height: 90%;
            background: var(--zed-backgound-color);
            border-radius: 50%;
            z-index: -1;
            transform: scale(1.1);
        }

        footer.cta-section {
            background: linear-gradient(45deg, #000 0%, var(--primary) 100%);
            color: white;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .market-ticker {
            animation: scrollText 30s linear infinite;
        }
        @keyframes scrollText {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .step-number {
            font-size: 3rem;
            font-weight: 900;
            color: var(--zed-backgound-color);
            line-height: 1;
            transition: var(--transition);
        }
        .step-number:hover {
            color: var(--primary);
            transform: scale(1.1);
        }
        .accordion-button:not(.collapsed) {
            background-color: var(--zed-backgound-color);
            color: var(--primary);
        }
        .accordion-button:focus {
            box-shadow: none;
            border-color: var(--primary);
        }
    </style>
    <?php
    if( false ){ 
        ?>
        <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
            <div>
                <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Educator <span style="color: var(--primary-teal);">Learn</span> </h1>
                <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Learn from experienced educators and gain practical knowledge to succeed in trading.</p>
                <div class="open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
                    <button class="rounded-pill d-none">ZERO TO HERO</button>
                </div>
            </div>
        </header>
        <?php
    } ?>

    <style>
       
        /* ─── HERO ────────────────────────────────────── */
        .hero {
            padding: 100px 0 80px;
            text-align: center;
            background: radial-gradient(ellipse 60% 55% at 50% -10%, rgba(232,17,26,.07) 0%, transparent 65%),
                var(--zed-backgound-color);
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                repeating-linear-gradient(0deg, transparent, transparent 39px, rgba(0,0,0,.03) 39px, rgba(0,0,0,.03) 40px),
                repeating-linear-gradient(90deg, transparent, transparent 39px, rgba(0,0,0,.03) 39px, rgba(0,0,0,.03) 40px);
            pointer-events: none;
        }
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            background: var(--zed-primary);
            color: #fff;
            font-size: .72rem;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: .35rem 1.1rem;
            border-radius: 50px;
            margin-bottom: 1.6rem;
            animation: fadeDown .6s ease both;
        }
        .hero h1 {
            font-size: clamp(3rem, 7vw, 5.5rem);
            font-weight: 800;
            line-height: 1.0;
            letter-spacing: -.04em;
            color: var(--zed-dark-text);
            animation: fadeUp .7s .1s ease both;
        }
        .hero h1 em { font-style: normal; color: var(--zed-primary); }
        .hero p.sub {
            font-size: 1.1rem;
            color: var(--zed-secondary);
            margin: 1.2rem auto 2.2rem;
            font-weight: 300;
            animation: fadeUp .7s .2s ease both;
        }
        .hero-btns { animation: fadeUp .7s .3s ease both; }
        .btn-red {
            background: var(--zed-primary);
            color: #fff;
            border: none;
            padding: .9rem 2.6rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: .95rem;
            letter-spacing: .02em;
            transition: background .25s, transform .2s, box-shadow .25s;
            box-shadow: 0 8px 28px rgba(232,17,26,.3);
        }
        .btn-red:hover {
            background: var(--primary-red-hover);
            transform: translateY(-3px);
            box-shadow: 0 14px 36px rgba(232,17,26,.4);
            color: var(--zed-dark-text);
        }
        .btn-ghost {
            background: transparent;
            color: var(--zed-dark-text);
            border: 1.5px solid var(--zed-border-color);
            padding: .9rem 2.2rem;
            border-radius: 50px;
            font-weight: 500;
            transition: border-color .25s, background .25s, color .25s;
        }
        .btn-ghost:hover {
            border-color: var(--zed-dark-text);
            background: var(--zed-dark-text);
            color: #fff;
        }
        .hero-floats {
            display: flex;
            justify-content: center;
            gap: 1.2rem;
            margin-top: 3.5rem;
            flex-wrap: wrap;
            animation: fadeUp .7s .4s ease both;
        }
        .float-stat {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: 14px;
            padding: .8rem 1.4rem;
            display: flex;
            align-items: center;
            gap: .8rem;
            box-shadow: 0 2px 16px rgba(0,0,0,.04);
        }
        .float-stat .ico {
            width: 38px; height: 38px;
            background: rgba(232,17,26,.08);
            color: var(--zed-primary);
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem;
        }
        .float-stat .val { font-family: 'Syne', sans-serif; font-weight: 700; font-size: 1.1rem; color: var(--zed-dark-text); }
        .float-stat .lbl { font-size: .75rem; color: var(--zed-secondary); }
    
        /* ─── SECTION COMMON ──────────────────────────── */
        .sec { padding: 80px 0; }
        .sec-alt { background: var(--zed-light-bg); }
        .sec-dark { background: var(--zed-dark-text); }
        .sec-red  { background: var(--zed-primary); }
    
        .sec-label {
            display: inline-block;
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--zed-primary);
            margin-bottom: .8rem;
        }
        .sec-dark .sec-label { color: rgba(232,17,26,.8); }
        .sec-title {
            font-size: clamp(1.9rem, 4vw, 2.8rem);
            font-weight: 800;
            letter-spacing: -.03em;
            color: var(--zed-dark-text);
            margin-bottom: .5rem;
        }
        .sec-dark .sec-title { color: #fff; }
        .sec-red  .sec-title { color: #fff; }
        .sec-sub { color: var(--zed-secondary); font-size: .95rem; font-weight: 300; max-width: 480px; }
        .sec-dark .sec-sub { color: rgba(255,255,255,.45); }
        .sec-red  .sec-sub { color: rgba(255,255,255,.7); }
    
        /* ─── COURSE CARDS ────────────────────────────── */
        .course-card {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: 20px;
            padding: 1.6rem;
            height: 100%;
            position: relative;
            overflow: hidden;
            transition: transform .35s cubic-bezier(.2,.8,.2,1), box-shadow .35s;
        }
        .course-card::before {
            content: '';
            position: absolute;
            left: 0; top: 0; bottom: 0;
            width: 4px;
            background: var(--zed-primary);
            transform: scaleY(0);
            transform-origin: bottom;
            transition: transform .35s ease;
        }
        .course-card:hover { transform: translateY(-8px); box-shadow: 0 24px 56px rgba(0,0,0,.1); }
        .course-card:hover::before { transform: scaleY(1); }
        .course-level {
            font-size: .72rem;
            font-weight: 600;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--zed-secondary);
            text-align: right;
            margin-bottom: .8rem;
        }
        .course-icon {
            width: 54px; 
            height: 54px;
            background: var(--zed-backgound-color);
            border-radius: 14px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1.1rem;
        }
        .course-card h4 {
            font-weight: 700;
            font-size: 1.15rem;
            color: var(--zed-dark-text);
            margin-bottom: .55rem;
        }
        .course-card p { font-size: .85rem; color: var(--zed-secondary); line-height: 1.6; margin-bottom: 1.4rem; }
        .course-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: auto;
            padding-top: 1rem;
            border-top: 1px solid var(--zed-border-color);
        }
        .course-price {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 1.3rem;
            color: var(--zed-dark-text);
        }
        .enroll-link {
            color: var(--zed-primary);
            font-weight: 600;
            font-size: .88rem;
            text-decoration: none;
            display: flex; align-items: center; gap: .3rem;
            transition: gap .2s;
        }
        .enroll-link:hover { gap: .6rem; color: var(--primary-red-hover); }
    
        /* ─── TOPIC GRID ──────────────────────────────── */
        .topic-card {
            background: var(--zed-backgound-color);
            border: 1px solid var(--zed-border-color);
            border-radius: 18px;
            padding: 1.5rem 1.4rem;
            height: 100%;
            transition: transform .3s ease, 
            background .3s, border-color .3s, box-shadow .3s;
            position: relative;
            overflow: hidden;
        }
        .topic-card:hover {
            transform: translateY(-5px);
            background: var(--zed-light-bg);
            border-color: rgba(232,17,26,.25);
            box-shadow: 0 16px 44px rgba(0,0,0,.07);
        }
        .topic-card .t-icon {
            width: 48px; 
            height: 48px;
            border-radius: 13px;
            display: flex; 
            align-items: center; 
            justify-content: center;
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }
        .topic-card h5 {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            color: var(--zed-dark-text);
            margin-bottom: .4rem;
        }
        .topic-card p { font-size: .82rem; color: var(--zed-secondary); line-height: 1.6; margin: 0; }
        .topic-chip {
            display: inline-block;
            font-size: .7rem;
            font-weight: 600;
            padding: .2rem .65rem;
            border-radius: 50px;
            margin-top: .9rem;
        }
        .ti-red    { background: rgba(232,17,26,.1);  color: var(--zed-primary); }
        .ti-blue   { background: rgba(59,130,246,.1); color: #3b82f6; }
        .ti-green  { background: rgba(34,197,94,.1);  color: #16a34a; }
        .ti-gold   { background: rgba(234,179,8,.1);  color: #ca8a04; }
        .ti-purple { background: rgba(139,92,246,.1); color: #7c3aed; }
        .ti-teal   { background: rgba(20,184,166,.1); color: #0d9488; }
        .ti-orange { background: rgba(249,115,22,.1); color: #ea580c; }
        .ti-sky    { background: rgba(14,165,233,.1); color: #0284c7; }
        .tc-red    { background: rgba(232,17,26,.08); color: var(--zed-primary); border: 1px solid rgba(232,17,26,.15); }
        .tc-blue   { background: rgba(59,130,246,.08); color: #3b82f6; border: 1px solid rgba(59,130,246,.15); }
        .tc-green  { background: rgba(34,197,94,.08); color: #16a34a; border: 1px solid rgba(34,197,94,.15); }
        .tc-gold   { background: rgba(234,179,8,.08); color: #ca8a04; border: 1px solid rgba(234,179,8,.15); }
        .tc-purple { background: rgba(139,92,246,.08); color: #7c3aed; border: 1px solid rgba(139,92,246,.15); }
        .tc-teal   { background: rgba(20,184,166,.08); color: #0d9488; border: 1px solid rgba(20,184,166,.15); }
        .tc-orange { background: rgba(249,115,22,.08); color: #ea580c; border: 1px solid rgba(249,115,22,.15); }
        .tc-sky    { background: rgba(14,165,233,.08); color: #0284c7; border: 1px solid rgba(14,165,233,.15); }
    
        /* sub-topics list in topic-card */
        .topic-list { list-style: none; padding: 0; margin: .8rem 0 0; }
        .topic-list li {
            font-size: .8rem;
            color: #666;
            padding: .28rem 0;
            border-bottom: 1px solid rgba(0,0,0,.05);
            display: flex; align-items: center; gap: .5rem;
        }
        .topic-list li:last-child { border: none; }
        .topic-list li i { font-size: .6rem; opacity: .5; }
    
        /* ─── DARK MARQUEE ROW ────────────────────────── */
        .marquee-section { background: var(--zed-dark-text); padding: 3.5rem 0; overflow: hidden; }
        .marquee-track {
            display: flex;
            gap: 1.5rem;
            width: max-content;
            animation: marquee 22s linear infinite;
        }
        .marquee-track.rev { animation-direction: reverse; }
        .marquee-tag {
            display: flex; 
            align-items: center; 
            gap: .6rem;
            background: rgba(255,255,255,.05);
            border: 1px solid rgba(255,255,255,.07);
            color: rgba(255,255,255,.6);
            border-radius: 50px;
            padding: .5rem 1.3rem;
            font-size: .83rem;
            font-weight: 500;
            white-space: nowrap;
            flex-shrink: 0;
        }
        .marquee-tag i { color: var(--zed-primary); font-size: .75rem; }
        @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    
        /* ─── WHY US (dark section) ───────────────────── */
        .why-card {
            background: rgba(255,255,255,.04);
            border: 1px solid rgba(255,255,255,.07);
            border-radius: 16px;
            padding: 1.6rem;
            transition: background .3s, border-color .3s;
        }
        .why-card:hover {
            background: rgba(255,255,255,.07);
            border-color: var(--zed-primary-hover);
        }
        .why-card .w-icon {
            width: 46px; 
            height: 46px;
            background: rgba(232,17,26,.12);
            color: var(--zed-primary);
            border-radius: 12px;
            display: flex; 
            align-items: center; 
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: .9rem;
        }
        .why-card h6 { font-family: 'Syne', sans-serif; font-weight: 700; color: #fff; margin-bottom: .35rem; }
        .why-card p { font-size: .83rem; color: rgba(255,255,255,.4); margin: 0; line-height: 1.6; }
    
        /* ─── TESTIMONIALS ────────────────────────────── */
        .testi-card {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: 18px;
            padding: 1.8rem;
            height: 100%;
            transition: transform .3s, box-shadow .3s;
        }
        .testi-card:hover { transform: translateY(-5px); box-shadow: 0 18px 48px rgba(0,0,0,.08); }
        .stars { color: var(--zed-primary); font-size: .85rem; letter-spacing: .05rem; margin-bottom: .8rem; }
        .testi-card blockquote { font-size: .9rem; color: var(--zed-dark-text); line-height: 1.7; font-style: italic; margin-bottom: 1.2rem; }
        .testi-author { display: flex; align-items: center; gap: .7rem; }
        .testi-avatar {
            width: 40px; height: 40px;
            background: var(--zed-primary);
            color: #fff;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: .9rem;
        }
        .testi-name { font-weight: 600; font-size: .88rem; color: var(--zed-dark-text); }
        .testi-role { font-size: .75rem; color: var(--zed-secondary); }
    
        /* ─── CTA BANNER ──────────────────────────────── */
        .cta-band {
            background: var(--zed-primary);
            padding: 70px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .cta-band::before, .cta-band::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,.07);
        }
        .cta-band::before { width: 400px; height: 400px; top: -150px; left: -100px; }
        .cta-band::after  { width: 300px; height: 300px; bottom: -120px; right: -80px; }
        .cta-band h2 {
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 800;
            color: #fff;
            letter-spacing: -.03em;
        }
        .cta-band p { color: rgba(255,255,255,.75); max-width: 460px; margin: .8rem auto 2rem; }
        .btn-white {
            background: #fff;
            color: var(--zed-primary);
            border: none;
            padding: .9rem 2.4rem;
            border-radius: 50px;
            font-weight: 700;
            transition: transform .2s, box-shadow .25s;
            box-shadow: 0 8px 24px rgba(0,0,0,.15);
        }
        .btn-white:hover { 
            transform: translateY(-3px); 
            box-shadow: 0 14px 36px rgba(0,0,0,.2); 
            color: var(--zed-light-bg); 
        }
    
        /* ─── DIVIDER ─────────────────────────────────── */
        .hdiv { height: 1px; background: linear-gradient(90deg, transparent, var(--zed-border-color), transparent); margin: 0; }
    
        /* ─── SCROLL REVEAL ───────────────────────────── */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity .7s ease, transform .7s ease;
        }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .reveal-delay-1 { transition-delay: .1s; }
        .reveal-delay-2 { transition-delay: .2s; }
        .reveal-delay-3 { transition-delay: .3s; }
        .reveal-delay-4 { transition-delay: .4s; }
    
        /* ─── HERO ANIMATIONS ─────────────────────────── */
        @keyframes fadeUp   { from { opacity: 0; transform: translateY(24px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeDown { from { opacity: 0; transform: translateY(-14px); } to { opacity: 1; transform: translateY(0); } }
    
        /* ─── PULSE DOT ───────────────────────────────── */
        .live-dot {
            display: inline-block;
            width: 8px; height: 8px;
            background: #22c55e;
            border-radius: 50%;
            animation: pulse 1.8s infinite;
            vertical-align: middle;
        }
        @keyframes pulse {
        0%,100% { box-shadow: 0 0 0 0 rgba(34,197,94,.5); }
        50%      { box-shadow: 0 0 0 6px rgba(34,197,94,0); }
        }
    
        /* ─── SCROLLBAR ───────────────────────────────── */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: var(--zed-backgound-color); }
        ::-webkit-scrollbar-thumb { background: var(--zed-primary); border-radius: 3px; }
    </style>
    <!-- ─── HERO ───────────────────────────────────────────── -->
    <section class="hero">
        <div class="container">
            <div class="hero-badge mt-4"><i class="bi bi-mortarboard-fill"></i> Complete Forex Course — Basic to Advanced</div>
            <h1>
                Forex Trading <em>Academy</em>
                <br>
                Zero to Hero
            </h1>
            <p class="sub">
                Theory · Practical · Math · Infographics · Psychology · AI Trading — Everything you need to trade like a professional.
            </p>
            <div class="hero-btns d-flex justify-content-center gap-3 flex-wrap">
                <a href="#courses" class="btn btn-red">
                    Start Learning Now <i class="bi bi-arrow-right ms-1"></i>
                </a>
                <a href="#topics" class="btn btn-ghost">
                    Explore Topics
                </a>
            </div>
            <div class="hero-floats">
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-people-fill"></i></div>
                    <div>
                        <div class="val">12K+</div>
                        <div class="lbl">Active Students</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-play-btn-fill"></i></div>
                    <div>
                        <div class="val">200+</div>
                        <div class="lbl">Video Lessons</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-award-fill"></i></div>
                    <div>
                        <div class="val">8</div>
                        <div class="lbl">Asset Classes</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-currency-dollar"></i></div>
                    <div>
                        <div class="val">Free*</div>
                        <div class="lbl">Start Today</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 bg-dark text-white overflow-hidden">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <div class="market-ticker d-flex gap-5 fw-bold small">
                    <span class="text-nowrap">EUR/USD <span class="text-success">1.0842 ▲ 0.12%</span></span>
                    <span class="text-nowrap">GBP/USD <span class="text-danger">1.2631 ▼ 0.05%</span></span>
                    <span class="text-nowrap">BTC/USD <span class="text-success">68,432.10 ▲ 2.45%</span></span>
                    <span class="text-nowrap">GOLD <span class="text-success">2,154.50 ▲ 0.80%</span></span>
                    <span class="text-nowrap">AUD/USD <span class="text-danger">0.6512 ▼ 0.22%</span></span>
                    <span class="text-nowrap d-none d-md-inline">NAS100 <span class="text-success">18,210.30 ▲ 1.10%</span></span>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-padding py-5 mt-5">
        <div class="container text-center animate-up">
            <h1 class="display-4 fw-bold mb-3">Learn to trade the <span class="text-danger">Financial Markets</span></h1>
            <p class="lead text-muted mx-auto" style="max-width: 750px;">
                Expert-led courses, real-time market insights, and powerful tools designed to give you the ultimate edge in global trading.
            </p>
        </div>
    </section>

    <div class="container mb-5">
        <div class="row g-3 justify-content-center text-center">
            <div class="col-6 col-md-3 col-lg-auto animate-up delay-1">
                <div class="nav-card p-3">
                    <div class="icon-circle"><i class="fa-solid fa-graduation-cap"></i></div>
                    <button class="btn btn-yellow btn-sm w-100 fw-bold">COURSES</button>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-auto animate-up delay-1">
                <div class="nav-card p-3">
                    <div class="icon-circle"><i class="fa-solid fa-play"></i></div>
                    <button class="btn btn-yellow btn-sm w-100 fw-bold">TUTORIALS</button>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-auto animate-up delay-1">
                <div class="nav-card p-3">
                    <div class="icon-circle"><i class="fa-solid fa-file-pdf"></i></div>
                    <button class="btn btn-yellow btn-sm w-100 fw-bold">E-BOOKS</button>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-auto animate-up delay-1">
                <div class="nav-card p-3">
                    <div class="icon-circle"><i class="fa-solid fa-chart-pie"></i></div>
                    <button class="btn btn-yellow btn-sm w-100 fw-bold">CFDS</button>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-auto animate-up delay-1">
                <div class="nav-card p-3">
                    <div class="icon-circle"><i class="fa-solid fa-coins"></i></div>
                    <button class="btn btn-yellow btn-sm w-100 fw-bold">CRYPTO</button>
                </div>
            </div>
        </div>
    </div>

    <section class="slant-bg">
        <div class="container">
            <div class="text-center mb-5 animate-up">
                <h2 class="fw-bold">Expert insights you can trust</h2>
                <div class="bg-danger mx-auto mt-2" style="width: 50px; height: 3px;"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 animate-up delay-1">
                    <div class="feature-card text-center">
                        <i class="fa-solid fa-bolt fs-1 text-danger mb-4"></i>
                        <h4>Essential news</h4>
                        <p class="text-muted small">Real-time economic updates and high-impact market events delivered instantly.</p>
                    </div>
                </div>
                <div class="col-md-4 animate-up delay-1">
                    <div class="feature-card text-center">
                        <i class="fa-solid fa-magnifying-glass-chart fs-1 text-danger mb-4"></i>
                        <h4>Market analysis</h4>
                        <p class="text-muted small">Deep dives into global trends, technical patterns, and asset correlations.</p>
                    </div>
                </div>
                <div class="col-md-4 animate-up delay-1">
                    <div class="feature-card text-center">
                        <i class="fa-solid fa-microphone-lines fs-1 text-danger mb-4"></i>
                        <h4>Expert commentary</h4>
                        <p class="text-muted small">Unique perspectives from seasoned traders to sharpen your mental game.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-custom btn-primary-custom">Explore All Insights</button>
            </div>
        </div>
    </section>

    <section class="container py-5 my-5">
        <div class="row align-items-center">
            <div class="col-lg-6 animate-up">
                <span class="badge bg-danger mb-2">RISK FREE</span>
                <h2 class="display-5 fw-bold mb-4">Practice with <br>$50,000 Virtual Cash</h2>
                <p class="text-muted mb-4">Master the MT4 platform and test your strategies in a live-market environment without spending a single cent of your own capital.</p>
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3 text-danger"><i class="fa-solid fa-circle-check fs-4"></i></div>
                    <div><strong>Full MT4 Access:</strong> All indicators and tools included.</div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="me-3 text-danger"><i class="fa-solid fa-circle-check fs-4"></i></div>
                    <div><strong>No Hidden Fees:</strong> 100% free for the first 30 days.</div>
                </div>
                <button class="btn btn-custom btn-yellow">Start Practicing Now</button>
            </div>
            <div class="col-lg-6 text-center animate-up delay-2">
                <div class="img-wrapper floating mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=400&h=400" class="img-fluid rounded-circle shadow-lg" alt="Trading Specialist">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 text-center">
        <div class="row g-5">
            <div class="col-md-4 animate-up">
                <i class="fa-solid fa-user-tie fs-2 text-danger mb-3"></i>
                <h6>Dedicated Managers</h6>
                <p class="text-muted small">Your own point of contact for every trading need.</p>
            </div>
            <div class="col-md-4 animate-up delay-1">
                <i class="fa-solid fa-headset fs-2 text-danger mb-3"></i>
                <h6>24/7 Support</h6>
                <p class="text-muted small">Whenever the markets are moving, we are here.</p>
            </div>
            <div class="col-md-4 animate-up delay-2">
                <i class="fa-solid fa-language fs-2 text-danger mb-3"></i>
                <h6>14+ Languages</h6>
                <p class="text-muted small">Localized support for a truly global community.</p>
            </div>
        </div>
    </section>

    <section class="section-padding py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Your 4-Step Path to the Markets</h2>
                <p class="text-muted">We don't just give you a platform; we give you a blueprint.</p>
            </div>
            <div class="row g-0">
                <div class="col-md-3 text-center px-4 mb-4">
                    <div class="step-number mb-3">01</div>
                    <h5 class="fw-bold">Learn</h5>
                    <p class="small text-muted">Access over 50+ hours of video tutorials in our Academy.</p>
                </div>
                <div class="col-md-3 text-center px-4 mb-4">
                    <div class="step-number mb-3">02</div>
                    <h5 class="fw-bold">Practice</h5>
                    <p class="small text-muted">Use your $50k demo account to refine your strategy.</p>
                </div>
                <div class="col-md-3 text-center px-4 mb-4">
                    <div class="step-number mb-3">03</div>
                    <h5 class="fw-bold">Analyze</h5>
                    <p class="small text-muted">Utilize our Autochartist tool for automated signals.</p>
                </div>
                <div class="col-md-3 text-center px-4 mb-4">
                    <div class="step-number mb-3">04</div>
                    <h5 class="fw-bold">Execute</h5>
                    <p class="small text-muted">Go live with lightning-fast execution and 0.0 spreads.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h2 class="fw-bold mb-4">Why 60,000+ traders <br>choose <span class="text-danger">Axi</span></h2>
                    <div class="list-group list-group-flush bg-transparent">
                        <div class="list-group-item bg-transparent border-0 px-0">
                            <i class="fa-solid fa-bolt-lightning text-danger me-2"></i> 
                            <strong>Low Spreads:</strong> Competitive pricing from 0.0 pips.
                        </div>
                        <div class="list-group-item bg-transparent border-0 px-0">
                            <i class="fa-solid fa-shield-halved text-danger me-2"></i> 
                            <strong>Regulated:</strong> Multiple licenses for global security.
                        </div>
                        <div class="list-group-item bg-transparent border-0 px-0">
                            <i class="fa-solid fa-trophy text-danger me-2"></i> 
                            <strong>Award Winning:</strong> Voted Best MT4 Broker 2024.
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm p-4">
                        <h5 class="fw-bold mb-4">Common Questions</h5>
                        <div class="accordion accordion-flush" id="tradingFaq">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                                        What is the minimum deposit?
                                    </button>
                                </h2>
                                <div id="q1" class="accordion-collapse collapse" data-bs-parent="#tradingFaq">
                                    <div class="accordion-body text-muted">There is no minimum deposit to open a standard account. Start with what you are comfortable with.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                                        Can I trade on my mobile?
                                    </button>
                                </h2>
                                <div id="q2" class="accordion-collapse collapse" data-bs-parent="#tradingFaq">
                                    <div class="accordion-body text-muted">Yes, our MetaTrader 4 app is available on both iOS and Android.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="cta-section text-center">
        <div class="container animate-up">
            <h2 class="display-6 fw-bold mb-4">Ready to trade your edge?</h2>
            <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                <button class="btn btn-custom btn-outline-light">Try Free Demo</button>
                <button class="btn btn-custom btn-yellow px-5">Open Live Account</button>
            </div>
        </div>
    </footer>


<?php
include_once ('elements/footer.php');
?>