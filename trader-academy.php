<?php 
include_once ('elements/header.php');
?>
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
            max-width: 520px;
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
            <div class="hero-badge"><i class="bi bi-mortarboard-fill"></i> Professional Trading Education</div>
            <h1>
                Trade Like<br>a <em>Pro</em>
            </h1>
            <p class="sub">
                Master technical analysis, risk management, and market psychology across every asset class.
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
    
    <div class="hdiv"></div>
    
    <!-- ─── COURSES ────────────────────────────────────────── -->
    <section class="sec sec-alt" id="courses">
    <div class="container">
        <div class="row align-items-end mb-5">
        <div class="col-lg-6">
            <span class="sec-label reveal">Featured Courses</span>
            <h2 class="sec-title reveal">Pick Your Learning Path</h2>
            <p class="sec-sub reveal">Three structured programs from beginner to advanced — all taught by professional traders.</p>
        </div>
        <div class="col-lg-6 text-lg-end mt-3 mt-lg-0 reveal">
            <a href="#" class="btn btn-ghost">View All Courses <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
        </div>
        <div class="row g-4">
        <!-- Forex Mastery -->
        <div class="col-md-4 reveal">
            <div class="course-card">
            <div class="course-level">Beginner</div>
            <div class="course-icon">📊</div>
            <h4>Forex Mastery</h4>
            <p>Learn the secrets of the currency markets with live session recordings and real trade examples.</p>
            <ul class="topic-list" style="margin-bottom:.5rem;">
                <li><i class="bi bi-dot"></i>Forex market structure</li>
                <li><i class="bi bi-dot"></i>Currency pair analysis</li>
                <li><i class="bi bi-dot"></i>Entry & exit strategies</li>
            </ul>
            <div class="course-footer">
                <div class="course-price">$199</div>
                <a href="#" class="enroll-link">Enroll <i class="bi bi-arrow-right"></i></a>
            </div>
            </div>
        </div>
        <!-- Price Action Pro -->
        <div class="col-md-4 reveal reveal-delay-1">
            <div class="course-card">
            <div class="course-level">Intermediate</div>
            <div class="course-icon">🕯️</div>
            <h4>Price Action Pro</h4>
            <p>Master candlestick patterns and liquidity zones without indicators. Pure price reading.</p>
            <ul class="topic-list" style="margin-bottom:.5rem;">
                <li><i class="bi bi-dot"></i>Candlestick mastery</li>
                <li><i class="bi bi-dot"></i>Supply & demand zones</li>
                <li><i class="bi bi-dot"></i>Smart money concepts</li>
            </ul>
            <div class="course-footer">
                <div class="course-price">$149</div>
                <a href="#" class="enroll-link">Enroll <i class="bi bi-arrow-right"></i></a>
            </div>
            </div>
        </div>
        <!-- Trading Psychology -->
        <div class="col-md-4 reveal reveal-delay-2">
            <div class="course-card">
            <div class="course-level">Advanced</div>
            <div class="course-icon">🧠</div>
            <h4>Trading Psychology</h4>
            <p>Control your emotions and develop the discipline of a winning trader — the edge most ignore.</p>
            <ul class="topic-list" style="margin-bottom:.5rem;">
                <li><i class="bi bi-dot"></i>Fear & greed control</li>
                <li><i class="bi bi-dot"></i>Trade journaling system</li>
                <li><i class="bi bi-dot"></i>Mindset building</li>
            </ul>
            <div class="course-footer">
                <div class="course-price">$99</div>
                <a href="#" class="enroll-link">Enroll <i class="bi bi-arrow-right"></i></a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    
    <!-- ─── MARQUEE ────────────────────────────────────────── -->
    <div class="marquee-section">
    <div class="marquee-track mb-3" id="mq1">
        <span class="marquee-tag"><i class="bi bi-graph-up"></i>Stocks</span>
        <span class="marquee-tag"><i class="bi bi-currency-bitcoin"></i>Crypto</span>
        <span class="marquee-tag"><i class="bi bi-bar-chart-steps"></i>Futures</span>
        <span class="marquee-tag"><i class="bi bi-gem"></i>Metals</span>
        <span class="marquee-tag"><i class="bi bi-droplet-fill"></i>Commodities</span>
        <span class="marquee-tag"><i class="bi bi-bank2"></i>Economics</span>
        <span class="marquee-tag"><i class="bi bi-activity"></i>Technical Analysis</span>
        <span class="marquee-tag"><i class="bi bi-receipt-cutoff"></i>Taxes</span>
        <span class="marquee-tag"><i class="bi bi-graph-up"></i>Stocks</span>
        <span class="marquee-tag"><i class="bi bi-currency-bitcoin"></i>Crypto</span>
        <span class="marquee-tag"><i class="bi bi-bar-chart-steps"></i>Futures</span>
        <span class="marquee-tag"><i class="bi bi-gem"></i>Metals</span>
        <span class="marquee-tag"><i class="bi bi-droplet-fill"></i>Commodities</span>
        <span class="marquee-tag"><i class="bi bi-bank2"></i>Economics</span>
        <span class="marquee-tag"><i class="bi bi-activity"></i>Technical Analysis</span>
        <span class="marquee-tag"><i class="bi bi-receipt-cutoff"></i>Taxes</span>
    </div>
    <div class="marquee-track rev" id="mq2">
        <span class="marquee-tag"><i class="bi bi-shield-check"></i>Risk Management</span>
        <span class="marquee-tag"><i class="bi bi-cash-coin"></i>Position Sizing</span>
        <span class="marquee-tag"><i class="bi bi-arrow-repeat"></i>Swing Trading</span>
        <span class="marquee-tag"><i class="bi bi-lightning-charge"></i>Scalping</span>
        <span class="marquee-tag"><i class="bi bi-clock-history"></i>Day Trading</span>
        <span class="marquee-tag"><i class="bi bi-globe2"></i>Forex Pairs</span>
        <span class="marquee-tag"><i class="bi bi-newspaper"></i>Fundamental Analysis</span>
        <span class="marquee-tag"><i class="bi bi-cpu"></i>Algo Trading</span>
        <span class="marquee-tag"><i class="bi bi-shield-check"></i>Risk Management</span>
        <span class="marquee-tag"><i class="bi bi-cash-coin"></i>Position Sizing</span>
        <span class="marquee-tag"><i class="bi bi-arrow-repeat"></i>Swing Trading</span>
        <span class="marquee-tag"><i class="bi bi-lightning-charge"></i>Scalping</span>
        <span class="marquee-tag"><i class="bi bi-clock-history"></i>Day Trading</span>
        <span class="marquee-tag"><i class="bi bi-globe2"></i>Forex Pairs</span>
        <span class="marquee-tag"><i class="bi bi-newspaper"></i>Fundamental Analysis</span>
        <span class="marquee-tag"><i class="bi bi-cpu"></i>Algo Trading</span>
    </div>
    </div>
    
    <!-- ─── TOPICS SECTION ────────────────────────────────── -->
    <section class="sec" id="topics">
    <div class="container">
        <div class="text-center mb-5">
        <span class="sec-label reveal">All Asset Classes</span>
        <h2 class="sec-title reveal">Explore Every Market</h2>
        <p class="sec-sub mx-auto reveal">Deep-dive education on every tradeable asset class — from equities to crypto to commodities.</p>
        </div>
        <div class="row g-4">
    
        <!-- Stocks -->
        <div class="col-sm-6 col-lg-3 reveal">
            <div class="topic-card">
            <div class="t-icon ti-blue"><i class="bi bi-graph-up-arrow"></i></div>
            <h5>Stocks</h5>
            <p>Equities, ETFs, IPOs, and long-term value investing strategies.</p>
            <ul class="topic-list">
                <li><i class="bi bi-dot"></i>Stock Market Structure</li>
                <li><i class="bi bi-dot"></i>Value vs Growth Stocks</li>
                <li><i class="bi bi-dot"></i>Earnings & Dividends</li>
                <li><i class="bi bi-dot"></i>ETF & Index Funds</li>
            </ul>
            <span class="topic-chip tc-blue">Equities</span>
            </div>
        </div>
    
        <!-- Futures -->
        <div class="col-sm-6 col-lg-3 reveal reveal-delay-1">
            <div class="topic-card">
            <div class="t-icon ti-orange"><i class="bi bi-bar-chart-steps"></i></div>
            <h5>Futures</h5>
            <p>Trade contracts on indices, energy, metals, and agricultural goods.</p>
            <ul class="topic-list">
                <li><i class="bi bi-dot"></i>Futures Contract Basics</li>
                <li><i class="bi bi-dot"></i>Margin & Leverage</li>
                <li><i class="bi bi-dot"></i>Rollover & Expiry</li>
                <li><i class="bi bi-dot"></i>Hedging with Futures</li>
            </ul>
            <span class="topic-chip tc-orange">Derivatives</span>
            </div>
        </div>
    
        <!-- Crypto -->
        <div class="col-sm-6 col-lg-3 reveal reveal-delay-2">
            <div class="topic-card">
            <div class="t-icon ti-purple"><i class="bi bi-currency-bitcoin"></i></div>
            <h5>Crypto</h5>
            <p>Bitcoin, altcoins, DeFi, on-chain analysis, and crypto risk management.</p>
            <ul class="topic-list">
                <li><i class="bi bi-dot"></i>Blockchain Fundamentals</li>
                <li><i class="bi bi-dot"></i>BTC & ETH Analysis</li>
                <li><i class="bi bi-dot"></i>DeFi & Altcoins</li>
                <li><i class="bi bi-dot"></i>On-chain Metrics</li>
            </ul>
            <span class="topic-chip tc-purple">Digital Assets</span>
            </div>
        </div>
    
        <!-- Commodities -->
        <div class="col-sm-6 col-lg-3 reveal reveal-delay-3">
            <div class="topic-card">
            <div class="t-icon ti-green"><i class="bi bi-droplet-fill"></i></div>
            <h5>Commodities</h5>
            <p>Crude oil, natural gas, agricultural products, and energy markets.</p>
            <ul class="topic-list">
                <li><i class="bi bi-dot"></i>Crude Oil & Gas Trading</li>
                <li><i class="bi bi-dot"></i>Supply & Demand Cycles</li>
                <li><i class="bi bi-dot"></i>Seasonal Patterns</li>
                <li><i class="bi bi-dot"></i>Commodity Indices</li>
            </ul>
            <span class="topic-chip tc-green">Energy & Agri</span>
            </div>
        </div>
    
        <!-- Metals -->
        <div class="col-sm-6 col-lg-3 reveal">
            <div class="topic-card">
            <div class="t-icon ti-gold"><i class="bi bi-gem"></i></div>
            <h5>Metals</h5>
            <p>Gold, silver, platinum, copper — safe haven behavior and industrial demand.</p>
            <ul class="topic-list">
                <li><i class="bi bi-dot"></i>Gold as Safe Haven</li>
                <li><i class="bi bi-dot"></i>Silver Volatility</li>
                <li><i class="bi bi-dot"></i>Industrial Metals</li>
                <li><i class="bi bi-dot"></i>Metals vs USD Correlation</li>
            </ul>
            <span class="topic-chip tc-gold">Precious & Base</span>
            </div>
        </div>
    
        <!-- Economics -->
        <div class="col-sm-6 col-lg-3 reveal reveal-delay-1">
            <div class="topic-card">
            <div class="t-icon ti-red"><i class="bi bi-bank2"></i></div>
            <h5>Economics</h5>
            <p>Macro fundamentals, central bank policy, interest rates, and global events.</p>
            <ul class="topic-list">
                <li><i class="bi bi-dot"></i>Central Bank Policy</li>
                <li><i class="bi bi-dot"></i>Interest Rate Impact</li>
                <li><i class="bi bi-dot"></i>CPI, GDP & NFP</li>
                <li><i class="bi bi-dot"></i>Economic Calendar</li>
            </ul>
            <span class="topic-chip tc-red">Macro</span>
            </div>
        </div>
    
        <!-- Technical Analysis -->
        <div class="col-sm-6 col-lg-3 reveal reveal-delay-2">
            <div class="topic-card">
            <div class="t-icon ti-teal"><i class="bi bi-activity"></i></div>
            <h5>Technical Analysis</h5>
            <p>Chart patterns, indicators, and price action tools used by professional traders.</p>
            <ul class="topic-list">
                <li><i class="bi bi-dot"></i>Chart Patterns</li>
                <li><i class="bi bi-dot"></i>RSI, MACD, EMA</li>
                <li><i class="bi bi-dot"></i>Fibonacci & Pivots</li>
                <li><i class="bi bi-dot"></i>Multi-timeframe Analysis</li>
            </ul>
            <span class="topic-chip tc-teal">Charting</span>
            </div>
        </div>
    
        <!-- Taxes -->
        <div class="col-sm-6 col-lg-3 reveal reveal-delay-3">
            <div class="topic-card">
            <div class="t-icon ti-sky"><i class="bi bi-receipt-cutoff"></i></div>
            <h5>Taxes</h5>
            <p>Capital gains, trading tax obligations, deductions, and compliance for traders.</p>
            <ul class="topic-list">
                <li><i class="bi bi-dot"></i>Capital Gains Tax</li>
                <li><i class="bi bi-dot"></i>Short vs Long-term Rates</li>
                <li><i class="bi bi-dot"></i>Crypto Tax Reporting</li>
                <li><i class="bi bi-dot"></i>Trader vs Investor Status</li>
            </ul>
            <span class="topic-chip tc-sky">Tax & Compliance</span>
            </div>
        </div>
    
        </div>
    </div>
    </section>
    
    <div class="hdiv"></div>
    
    <!-- ─── WHY US ─────────────────────────────────────────── -->
    <section class="sec sec-dark" id="why">
    <div class="container">
        <div class="text-center mb-5">
        <span class="sec-label reveal">Why TraderPro</span>
        <h2 class="sec-title reveal">The Edge That Pays Off</h2>
        <p class="sec-sub mx-auto reveal">Built by full-time traders, not academics. Every lesson is rooted in live-market experience.</p>
        </div>
        <div class="row g-3">
        <div class="col-sm-6 col-lg-3 reveal">
            <div class="why-card">
            <div class="w-icon"><i class="bi bi-broadcast-pin"></i></div>
            <h6>Live Sessions</h6>
            <p>Weekly live trade rooms where you watch real trades executed in real time.</p>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 reveal reveal-delay-1">
            <div class="why-card">
            <div class="w-icon"><i class="bi bi-people"></i></div>
            <h6>Private Community</h6>
            <p>Access a private Discord of 12,000+ traders sharing setups and feedback.</p>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 reveal reveal-delay-2">
            <div class="why-card">
            <div class="w-icon"><i class="bi bi-journal-check"></i></div>
            <h6>Trade Journal</h6>
            <p>Structured journaling system to track, review, and improve every trade.</p>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3 reveal reveal-delay-3">
            <div class="why-card">
            <div class="w-icon"><i class="bi bi-infinity"></i></div>
            <h6>Lifetime Access</h6>
            <p>Pay once. Access all lessons, updates, and future content forever.</p>
            </div>
        </div>
        </div>
    </div>
    </section>
    
    <!-- ─── TESTIMONIALS ──────────────────────────────────── -->
    <section class="sec sec-alt" id="testimonials">
    <div class="container">
        <div class="text-center mb-5">
        <span class="sec-label reveal">Student Reviews</span>
        <h2 class="sec-title reveal">What Traders Are Saying</h2>
        </div>
        <div class="row g-4">
        <div class="col-md-4 reveal">
            <div class="testi-card">
            <div class="stars">★★★★★</div>
            <blockquote>"The Price Action Pro course changed the way I see charts. I stopped relying on 5 indicators and just read the market. Best investment in my trading career."</blockquote>
            <div class="testi-author">
                <div class="testi-avatar">RK</div>
                <div><div class="testi-name">Rahul Kothari</div><div class="testi-role">Forex Trader · Mumbai</div></div>
            </div>
            </div>
        </div>
        <div class="col-md-4 reveal reveal-delay-1">
            <div class="testi-card">
            <div class="stars">★★★★★</div>
            <blockquote>"The Economics and Macro section helped me understand WHY markets move — not just how. Completely elevated my fundamental analysis game."</blockquote>
            <div class="testi-author">
                <div class="testi-avatar">SP</div>
                <div><div class="testi-name">Sneha Patel</div><div class="testi-role">Equity Trader · Ahmedabad</div></div>
            </div>
            </div>
        </div>
        <div class="col-md-4 reveal reveal-delay-2">
            <div class="testi-card">
            <div class="stars">★★★★☆</div>
            <blockquote>"I had no idea about trading taxes until this course. Saved me a lot of money just from the Crypto Tax section alone. Highly recommend for serious traders."</blockquote>
            <div class="testi-author">
                <div class="testi-avatar">AM</div>
                <div><div class="testi-name">Arjun Mehta</div><div class="testi-role">Crypto Trader · Surat</div></div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    
    <!-- ─── CTA BAND ───────────────────────────────────────── -->
    <section class="cta-band" id="enroll">
    <div class="container position-relative" style="z-index:2;">
        <h2>Ready to Trade<br>Like a Pro?</h2>
        <p>Join 12,000+ students building real skills across Stocks, Crypto, Forex, Futures, and more.</p>
        <a href="#courses" class="btn btn-white">Start Learning Today <i class="bi bi-arrow-right ms-1"></i></a>
    </div>
    </section>

    <script>
    // Navbar scroll shadow
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 40);
    });
    
    // Intersection Observer scroll-reveal
    const revealEls = document.querySelectorAll('.reveal');
    const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            io.unobserve(e.target);
        }
        });
    }, { threshold: 0.12 });
    revealEls.forEach(el => io.observe(el));
    </script>
<?php
include_once ('elements/footer.php');
?>