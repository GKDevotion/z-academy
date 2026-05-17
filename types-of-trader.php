<?php 
include_once ('elements/header.php');
?>

    <style>
        
        /* ─── CUSTOM CURSOR ────────────────────────────────── */
        .cursor { position: fixed; pointer-events: none; z-index: 9999; mix-blend-mode: multiply; transition: transform .15s ease; }
        .cursor-dot { width: 8px; height: 8px; background: var(--zed-primary); border-radius: 50%; position: fixed; top: 0; left: 0; transform: translate(-50%,-50%); transition: transform .1s ease; pointer-events: none; z-index: 9999; }
        .cursor-ring { width: 36px; height: 36px; border: 1.5px solid var(--zed-primary); border-radius: 50%; position: fixed; top: 0; left: 0; transform: translate(-50%,-50%); transition: transform .18s ease, width .3s, height .3s; pointer-events: none; z-index: 9998; }
        body.cursor-grow .cursor-ring { width: 56px; height: 56px; background: var(--zed-light-red-hover); }

        /* ─── TICKER ───────────────────────────────────────── */
        .ticker-bar { background: var(--zed-dark-text); overflow: hidden; padding: .38rem 0; position: relative; z-index: 100; }
        .ticker-inner { display: flex; width: max-content; animation: tickRun 28s linear infinite; }
        .ticker-inner:hover { animation-play-state: paused; }
        .t-item { padding: 0 2rem;  font-size: .68rem; font-weight: 500; letter-spacing: .06em; color: rgba(255,255,255,.35); white-space: nowrap; }
        .t-item .hi { color: rgba(255,255,255,.7); font-weight: 700; }
        .t-item .up { color: #4ade80; } .t-item .dn { color: #f87171; }
        @keyframes tickRun { from { transform: translateX(0); } to { transform: translateX(-50%); } }

        /* ─── HERO ─────────────────────────────────────────── */
        .hero {
        min-height: 72vh;
        background: var(--zed-border-color);
        display: flex; align-items: center;
        position: relative; overflow: hidden;
        }

        /* animated grid */
        .hero::before {
        content: '';
        position: absolute; inset: 0;
        background-image:
            linear-gradient(rgba(232,17,26,.06) 1px, transparent 1px),
            linear-gradient(90deg, rgba(232,17,26,.06) 1px, transparent 1px);
        background-size: 60px 60px;
        animation: gridShift 20s linear infinite;
        }
        @keyframes gridShift { from { background-position: 0 0; } to { background-position: 60px 60px; } }
        /* radial glow */
        .hero::after {
        content: '';
        position: absolute; top: -100px; left: -100px;
        width: 600px; height: 600px;
        background: radial-gradient(circle, rgba(232,17,26,.18) 0%, transparent 65%);
        animation: glowFloat 8s ease-in-out infinite;
        }
        @keyframes glowFloat { 0%,100% { transform: translate(0,0); } 50% { transform: translate(80px, 40px); } }

        .hero-content { position: relative; z-index: 2; padding: 100px 0 80px; }
        .hero-eyebrow {
        display: inline-flex; align-items: center; gap: .55rem;
        border: 1px solid rgba(232,17,26,.25);
        color: var(--zed-primary);  font-size: .68rem; font-weight: 500;
        letter-spacing: .16em; text-transform: uppercase;
        padding: .32rem .9rem; border-radius: 4px;
        margin-bottom: 1.5rem;
        animation: fadeUp .6s ease both;
        }
        .hero h1 {
         font-size: clamp(3.2rem, 7vw, 6.5rem);
        font-weight: 400; line-height: 1.0; color: #fff;
        letter-spacing: -.02em;
        animation: fadeUp .7s .1s ease both;
        }
        .hero h1 em { font-style: italic; color: var(--zed-primary); }
        .hero p.sub {
        font-size: 1.05rem;
        max-width: 500px; line-height: 1.68; margin: 1.3rem 0 2.2rem;
        animation: fadeUp .7s .2s ease both;
        }
        .hero-cta { animation: fadeUp .7s .3s ease both; }
        .btn-start {
        display: inline-flex; align-items: center; gap: .6rem;
        background: var(--zed-primary); color: #fff; border: none;
        border-radius: 6px; font-size: .9rem; font-weight: 600;
        padding: .85rem 2.2rem;
        box-shadow: 0 8px 28px rgba(232,17,26,.35);
        transition: background .25s, transform .2s, box-shadow .25s;
        cursor: pointer; text-decoration: none;
        }
        .btn-start:hover { background: var(--zed-primary-hover); color: #fff; transform: translateY(-2px); box-shadow: 0 14px 36px rgba(232,17,26,.45); }
        .btn-outline-dark { display: inline-flex; align-items: center; gap: .5rem; background: var(--zed-dark-text); color: var(--zed-light-bg); border: 1px solid rgba(255,255,255,.2); border-radius: 6px; font-size: .9rem; font-weight: 500; padding: .85rem 2rem; transition: border-color .25s, color .25s, background .25s; cursor: pointer; text-decoration: none; }
        .btn-outline-dark:hover { border-color: var(--zed-dark-text); color: var(--zed-dark-text); background: rgba(255,255,255,.05); }

        /* hero floating stats */
        .hero-stats {
        display: flex; gap: 1.2rem; flex-wrap: wrap;
        margin-top: 3.5rem;
        animation: fadeUp .7s .45s ease both;
        }
        .hstat {
        background: rgba(255,255,255,.06); border: 1px solid var(--zed-primary);
        border-radius: 8px; padding: .75rem 1.2rem;
        transition: background .3s;
        }
        .hstat:hover { background: rgba(255,255,255,.1); }
        .hstat .val {  font-size: 1.5rem; color: #fff; }
        .hstat .val span { color: var(--zed-primary); }
        .hstat .lbl {  font-size: .7rem;  letter-spacing: .12em; text-transform: uppercase; margin-top: .15rem; }

        /* hero illustration side */
        .hero-visual { position: relative; z-index: 2; display: flex; justify-content: center; align-items: center; }
        .hero-ring { width: 380px; height: 380px; border-radius: 50%; border: 1px solid rgba(232,17,26,.15); position: relative; animation: spinRing 20s linear infinite; }
        .hero-ring::before { content: ''; position: absolute; inset: 20px; border-radius: 50%; border: 1px solid rgba(232,17,26,.1); }
        @keyframes spinRing { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
        .ring-icon { position: absolute; width: 48px; height: 48px; border-radius: 50%; background: rgba(232,17,26,.15); border: 1px solid rgba(232,17,26,.3); display: flex; align-items: center; justify-content: center; color: var(--zed-primary); font-size: 1.1rem; animation: counterSpin 20s linear infinite; }
        @keyframes counterSpin { from { transform: rotate(0deg); } to { transform: rotate(-360deg); } }
        .r-i1 { top: -24px; left: 50%; transform: translateX(-50%) rotate(0deg); }
        .r-i2 { top: 50%; right: -24px; transform: translateY(-50%); }
        .r-i3 { bottom: -24px; left: 50%; transform: translateX(-50%); }
        .r-i4 { top: 50%; left: -24px; transform: translateY(-50%); }
        .ring-center { position: absolute; inset: 40px; border-radius: 50%; background: rgba(232,17,26,.06); border: 1px solid rgba(232,17,26,.12); display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; animation: counterSpin 20s linear infinite; }
        .ring-center i { font-size: 2.5rem; color: var(--zed-primary); opacity: .6; }
        .ring-center span {  font-size: 1rem; color: rgba(255,255,255,.5); margin-top: .3rem; }

        @media (max-width:991px) { .hero-visual { display: none; } }

        @keyframes fadeUp { from { opacity: 0; transform: translateY(28px); } to { opacity: 1; transform: translateY(0); } }

        /* ─── INTRO SECTION ────────────────────────────────── */
        .intro-sec { padding: 80px 0 60px; text-align: center; }
        .intro-sec h2 {  font-size: clamp(2rem, 4.5vw, 3.5rem); color: var(--zed-dark-text); letter-spacing: -.02em; }
        .intro-sec p { font-size: 1rem; color: var(--zed-secondary); max-width: 580px; margin: 1rem auto 0; line-height: 1.7; }

        /* ─── TRADER TYPE CARDS ────────────────────────────── */
        .types-section { padding: 20px 0 80px; }

        .trader-card {
        background: var(--zed-light-bg);
        border: 1.5px solid var(--zed-border-color);
        border-radius: 20px;
        padding: 2rem;
        height: 100%;
        position: relative;
        overflow: hidden;
        transition: transform .4s cubic-bezier(.2,.8,.2,1), box-shadow .4s, border-color .3s;
        cursor: pointer;
        }
        .trader-card::before {
        content: '';
        position: absolute; top: 0; left: 0; right: 0; height: 4px;
        background: var(--card-clr, var(--zed-primary));
        transform: scaleX(0); transform-origin: left;
        transition: transform .4s ease;
        }
        .trader-card:hover { transform: translateY(-10px); box-shadow: 0 28px 64px rgba(0,0,0,.1); border-color: transparent; }
        .trader-card:hover::before { transform: scaleX(1); }

        /* bg number watermark */
        .card-num {
        position: absolute; top: 1.2rem; right: 1.5rem;
         font-size: 5rem; font-weight: 400;
        color: rgba(0,0,0,.03); line-height: 1; pointer-events: none;
        }

        /* icon */
        .card-icon-wrap {
        width: 56px; height: 56px; border-radius: 14px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.5rem; margin-bottom: 1.1rem;
        transition: transform .3s;
        }
        .trader-card:hover .card-icon-wrap { transform: scale(1.1) rotate(-5deg); }

        .card-label {
         font-size: .65rem; font-weight: 500;
        letter-spacing: .14em; text-transform: uppercase;
        color: var(--card-clr, var(--zed-primary));
        margin-bottom: .35rem;
        }
        .trader-card h3 {  font-size: 1.45rem; color: var(--zed-dark-text); margin-bottom: .6rem; letter-spacing: -.01em; }
        .trader-card p { font-size: .87rem; color: var(--zed-secondary); line-height: 1.72; margin-bottom: 1.3rem; }

        /* traits list */
        .traits { list-style: none; padding: 0; margin: 0 0 1.4rem; }
        .traits li { display: flex; align-items: center; gap: .55rem; font-size: .83rem; color: #444; padding: .3rem 0; border-bottom: 1px solid rgba(0,0,0,.04); }
        .traits li:last-child { border: none; }
        .traits li i { font-size: .65rem; color: var(--card-clr, var(--zed-primary)); flex-shrink: 0; }

        /* card footer */
        .card-foot { display: flex; align-items: center; justify-content: space-between; padding-top: 1rem; border-top: 1px solid var(--zed-border-color); }
        .tf-meta {  font-size: .65rem; color: var(--zed-secondary); letter-spacing: .06em; text-transform: uppercase; }
        .tf-meta strong { color: var(--card-clr, var(--zed-primary)); font-size: .75rem; }
        .learn-link {
        display: inline-flex; align-items: center; gap: .35rem;
        font-size: .82rem; font-weight: 600; color: var(--card-clr, var(--zed-primary));
        text-decoration: none; background: none; border: none; cursor: pointer;
        transition: gap .2s;
        }
        .learn-link:hover { gap: .65rem; }

        /* hover glow bg */
        .trader-card .card-glow {
        position: absolute; inset: 0; border-radius: 20px;
        background: radial-gradient(circle at 50% 0%, var(--card-glow, rgba(232,17,26,.06)) 0%, transparent 60%);
        opacity: 0; transition: opacity .35s;
        pointer-events: none;
        }
        .trader-card:hover .card-glow { opacity: 1; }

        /* ─── MARQUEE ───────────────────────────────────────── */
        .mq-band { background: var(--zed-dark-text); padding: 2.4rem 0; overflow: hidden; }
        .mq-row { overflow: hidden; }
        .mq-row + .mq-row { margin-top: .75rem; }
        .mq-track { display: flex; gap: 1rem; width: max-content; animation: mqRun 20s linear infinite; }
        .mq-track.rev { animation-direction: reverse; animation-duration: 17s; }
        .mq-tag { display: flex; align-items: center; gap: .5rem; background: rgba(255,255,255,.05); border: 1px solid rgba(255,255,255,.07); color: rgba(255,255,255,.55); border-radius: 6px; padding: .42rem 1.1rem; font-size: .78rem; font-weight: 500; white-space: nowrap; flex-shrink: 0; }
        .mq-tag i { color: var(--zed-primary); font-size: .68rem; }
        @keyframes mqRun { from { transform: translateX(0); } to { transform: translateX(-50%); } }

        /* ─── 5 STEPS ───────────────────────────────────────── */
        .steps-section { padding: 88px 0; background: var(--zed-light-bg); }
        .steps-section h2 {  font-size: clamp(2rem, 4.5vw, 3.4rem); color: var(--zed-dark-text); text-align: center; letter-spacing: -.02em; margin-bottom: .6rem; }
        .steps-section .lead-p { text-align: center; color: var(--zed-secondary); font-size: .95rem; max-width: 500px; margin: 0 auto 4rem; line-height: 1.65; }

        .step-item {
        display: flex; flex-direction: column; align-items: flex-start;
        padding: 1.8rem;
        background: var(--zed-light-bg); border: 1.5px solid var(--zed-border-color); border-radius: 16px;
        position: relative; height: 100%;
        transition: transform .35s, box-shadow .35s, border-color .3s;
        }
        .step-item:hover { transform: translateY(-6px); box-shadow: 0 20px 52px rgba(0,0,0,.08); border-color: rgba(232,17,26,.22); }
        .step-circle {
        width: 44px; height: 44px; border-radius: 50%;
        background: var(--zed-primary); color: #fff;
         font-size: 1.1rem;
        display: flex; align-items: center; justify-content: center;
        margin-bottom: 1rem; flex-shrink: 0;
        box-shadow: 0 6px 16px rgba(232,17,26,.28);
        }
        .step-item h5 {  font-size: 1.05rem; color: var(--zed-dark-text); margin-bottom: .4rem; }
        .step-item p { font-size: .82rem; color: var(--zed-secondary); line-height: 1.65; margin: 0; }

        /* ─── COMPARISON TABLE ─────────────────────────────── */
        .compare-section { padding: 80px 0; background: var(--zed-light-bg); }
        .cmp-table { width: 100%; border-collapse: separate; border-spacing: 0; border-radius: 14px; overflow: hidden; border: 1.5px solid var(--zed-border-color); }
        .cmp-table thead { background: var(--zed-dark-text); }
        .cmp-table thead th { padding: 1rem 1.2rem;  font-size: .72rem; font-weight: 500; color: rgba(255,255,255,.65); letter-spacing: .08em; text-transform: uppercase; }
        .cmp-table thead th:first-child { color: #fff; }
        .cmp-table thead th.active { color: var(--zed-primary); background: rgba(232,17,26,.12); }
        .cmp-table tbody tr { background: var(--zed-light-bg); transition: background .2s; }
        .cmp-table tbody tr:hover { background: var(--zed-light-bg); }
        .cmp-table tbody tr:not(:last-child) td { border-bottom: 1px solid var(--zed-border-color); }
        .cmp-table tbody td { padding: .85rem 1.2rem; font-size: .84rem; color: var(--zed-dark-text); }
        .cmp-table tbody td:first-child { font-weight: 600; color: var(--zed-dark-text); }
        .cmp-table tbody td.active { background: rgba(232,17,26,.03); }
        .ck { color: var(--green); font-size: 1rem; }
        .cx { color: #d1d5db; font-size: 1rem; }
        .dot-r { display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: var(--zed-primary); }
        .dot-g { display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: var(--green); }
        .dot-a { display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: var(--amber); }

        /* ─── QUIZ SECTION ─────────────────────────────────── */
        .quiz-section { padding: 88px 0; background: var(--zed-light-bg); }
        .quiz-wrap { background: var(--zed-light-bg); border: 1.5px solid var(--zed-border-color); border-radius: 20px; padding: 2.8rem; max-width: 700px; margin: 0 auto; }
        .quiz-step { display: none; }
        .quiz-step.active { display: block; animation: fadeUp .4s ease; }
        .quiz-q {  font-size: 1.35rem; color: var(--zed-dark-text); margin-bottom: 1.4rem; letter-spacing: -.01em; }
        .quiz-opts { display: flex; flex-direction: column; gap: .6rem; }
        .quiz-opt {
        display: flex; align-items: center; gap: .9rem;
        padding: .9rem 1.2rem;
        background: var(--zed-light-bg); border: 1.5px solid var(--zed-border-color);
        border-radius: 10px; cursor: pointer; font-size: .9rem; color: var(--zed-dark-text);
        transition: border-color .2s, background .2s, transform .15s;
        
        }
        .quiz-opt:hover { border-color: rgba(232,17,26,.4); background: rgba(232,17,26,.04); transform: translateX(4px); }
        .quiz-opt.selected { border-color: var(--zed-primary); background: rgba(232,17,26,.06); color: var(--zed-dark-text); font-weight: 600; }
        .quiz-opt .opt-dot { width: 18px; height: 18px; border: 2px solid var(--zed-border-color); border-radius: 50%; flex-shrink: 0; transition: all .2s; }
        .quiz-opt.selected .opt-dot { background: var(--zed-primary); border-color: var(--zed-primary); box-shadow: 0 0 0 3px rgba(232,17,26,.2); }
        .quiz-progress { height: 4px; background: var(--zed-border-color); border-radius: 2px; margin-bottom: 1.6rem; overflow: hidden; }
        .quiz-prog-fill { height: 100%; background: var(--zed-primary); border-radius: 2px; transition: width .5s cubic-bezier(.4,0,.2,1); }
        .quiz-nav { display: flex; justify-content: space-between; align-items: center; margin-top: 1.5rem; }
        .btn-quiz-next { background: var(--zed-primary); color: #fff; border: none; border-radius: 8px; font-size: .88rem; font-weight: 600; padding: .7rem 1.8rem; cursor: pointer; transition: background .25s, transform .15s; }
        .btn-quiz-next:hover { background: var(--zed-primary-hover); transform: translateY(-1px); }
        .btn-quiz-back { background: transparent; color: var(--zed-secondary); border: 1.5px solid var(--zed-border-color); border-radius: 8px; font-size: .88rem; padding: .7rem 1.4rem; cursor: pointer; transition: border-color .2s, color .2s; }
        .btn-quiz-back:hover { border-color: var(--zed-dark-text); color: var(--zed-dark-text); }
        .quiz-result { text-align: center; padding: 1rem 0; }
        .quiz-result-icon { width: 72px; height: 72px; background: rgba(232,17,26,.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.2rem; font-size: 2rem; color: var(--zed-primary); }
        .quiz-result h3 {  font-size: 1.8rem; color: var(--zed-dark-text); margin-bottom: .5rem; }
        .quiz-result p { font-size: .9rem; color: var(--zed-secondary); line-height: 1.65; max-width: 420px; margin: 0 auto 1.5rem; }
        .quiz-retry { background: transparent; border: 1.5px solid var(--zed-border-color); color: var(--zed-secondary); border-radius: 8px; font-size: .85rem; padding: .6rem 1.4rem; cursor: pointer; transition: border-color .2s, color .2s; }
        .quiz-retry:hover { border-color: var(--zed-dark-text); color: var(--zed-dark-text); }

        /* ─── WHY SECTION ──────────────────────────────────── */
        .why-section { padding: 80px 0; background: var(--zed-dark-text); }
        .why-card { background: rgba(255,255,255,.04); border: 1px solid var(--zed-primary-hover); border-radius: 14px; padding: 1.5rem; transition: background .3s, border-color .3s, transform .3s; }
        .why-card:hover { background: rgba(255,255,255,.07); border-color: var(--zed-primary); transform: translateY(-4px); }
        .why-icon { width: 44px; height: 44px; background: rgba(232,17,26,.12); color: var(--zed-primary); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.15rem; margin-bottom: .85rem; }
        .why-card h6 {  font-size: 1rem; color: #fff; margin-bottom: .3rem; }
        .why-card p { font-size: .81rem; color: rgba(255,255,255,.38); margin: 0; line-height: 1.62; }

        /* ─── CTA BAND ─────────────────────────────────────── */
        .cta-band {
        padding: 80px 0; text-align: center;
        background: var(--zed-light-bg);
        border-top: 1px solid var(--zed-border-color);
        position: relative; overflow: hidden;
        }
        .cta-band::before { content: ''; position: absolute; inset: 0; background-image: radial-gradient(circle, rgba(232,17,26,.04) 1px, transparent 1px); background-size: 36px 36px; }
        .cta-band h2 {  font-size: clamp(2rem, 4.5vw, 3.4rem); color: var(--zed-dark-text); letter-spacing: -.02em; position: relative; z-index: 1; }
        .cta-band p { color: var(--zed-secondary); max-width: 460px; margin: .8rem auto 2.2rem; line-height: 1.65; position: relative; z-index: 1; }
        .btn-big { background: var(--zed-primary); color: #fff; border: none; border-radius: 8px; font-size: 1rem; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; padding: 1rem 3rem; box-shadow: 0 10px 32px rgba(232,17,26,.32); transition: background .25s, transform .2s, box-shadow .25s; cursor: pointer; position: relative; z-index: 1; }
        .btn-big:hover { background: var(--zed-primary-hover); color: #fff; transform: translateY(-3px); box-shadow: 0 16px 40px rgba(232,17,26,.42); }
        .disclaimer { font-size: .75rem; color: rgba(0,0,0,.3); margin-top: 1rem; position: relative; z-index: 1; }

        /* ─── SCROLL REVEAL ────────────────────────────────── */
        .rv { opacity: 0; transform: translateY(28px); transition: opacity .7s ease, transform .7s ease; }
        .rv.in { opacity: 1; transform: translateY(0); }
        .rv-d1 { transition-delay: .07s; } .rv-d2 { transition-delay: .14s; } .rv-d3 { transition-delay: .21s; } .rv-d4 { transition-delay: .28s; }
    </style>
  
    <!-- CURSOR -->
    <div class="cursor-dot d-none" id="cursorDot"></div>
    <div class="cursor-ring d-none" id="cursorRing"></div>

    <!-- HERO -->
    <section class="hero">
    <div class="container">
        <div class="row align-items-center gy-5">
        <div class="col-lg-7 hero-content">
            <div class="hero-eyebrow"><i class="bi bi-bar-chart-fill"></i> Trading Education Series</div>
            <h1>Types of<br><em>Traders</em></h1>
            <p class="sub">Discover the key traits of different types of traders to find your ideal fit. Are you a fast-paced scalper, a patient position trader, or somewhere in between?</p>
            <div class="hero-cta d-flex gap-3 flex-wrap">
            <a href="#types" class="btn-start"><i class="bi bi-arrow-down"></i> Explore Types</a>
            <a href="#quiz" class="btn-outline-dark"><i class="bi bi-question-circle"></i> Find My Style</a>
            </div>
            <div class="hero-stats">
            <div class="hstat"><div class="val">6<span>+</span></div><div class="lbl">Trader Types</div></div>
            <div class="hstat"><div class="val">5<span>.</span></div><div class="lbl">Steps to Choose</div></div>
            <div class="hstat"><div class="val">Free<span>.</span></div><div class="lbl">Style Quiz</div></div>
            </div>
        </div>
        <div class="col-lg-5 hero-visual">
            <div class="hero-ring">
            <div class="ring-icon r-i1"><i class="bi bi-lightning-charge-fill"></i></div>
            <div class="ring-icon r-i2"><i class="bi bi-graph-up-arrow"></i></div>
            <div class="ring-icon r-i3"><i class="bi bi-cpu-fill"></i></div>
            <div class="ring-icon r-i4"><i class="bi bi-globe2"></i></div>
            <div class="ring-center">
                <i class="bi bi-bar-chart-line-fill"></i>
                <span>Your Style</span>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- INTRO -->
    <section class="intro-sec">
    <div class="container">
        <p class="rv" style="font-family:var(--mono);font-size:.68rem;color:var(--zed-primary);letter-spacing:.18em;text-transform:uppercase;margin-bottom:.7rem">What is your trading style?</p>
        <h2 class="rv">Every trader has a style.<br>Find yours.</h2>
        <p class="rv">The biggest mistake new traders make is copying someone else's style. A scalper's edge is a position trader's nightmare. Understanding your personality, time availability, and risk appetite is the first step to consistent profitability.</p>
    </div>
    </section>

    <!-- TRADER TYPE CARDS -->
    <section class="types-section" id="types">
    <div class="container">
        <div class="row g-4">

        <!-- 1 FOREX -->
        <div class="col-md-6 rv">
            <div class="trader-card" style="--card-clr:var(--blue);--card-glow:rgba(26,86,232,.07)">
            <div class="card-glow"></div>
            <div class="card-num">01</div>
            <div class="card-icon-wrap" style="background:rgba(26,86,232,.1);color:var(--blue)"><i class="bi bi-globe2"></i></div>
            <div class="card-label">Currency Markets</div>
            <h3>Forex Traders</h3>
            <p><span style="color:var(--blue);font-weight:600">Forex traders buy and sell currency pairs</span> to profit from price changes. This fast-paced environment requires a solid grasp of market trends and timing. Whether you are a beginner or a professional trader, focusing on market analysis and risk management is crucial.</p>
            <ul class="traits">
                <li><i class="bi bi-chevron-right"></i>Trade 24 hours across 4 global sessions</li>
                <li><i class="bi bi-chevron-right"></i>Focus on EUR/USD, GBP/USD, USD/JPY pairs</li>
                <li><i class="bi bi-chevron-right"></i>Use leverage of up to 30:1 (regulated)</li>
                <li><i class="bi bi-chevron-right"></i>Central bank decisions drive price action</li>
            </ul>
            <div class="card-foot">
                <div class="tf-meta">Timeframe: <strong>Minutes to Days</strong></div>
                <a href="#compare" class="learn-link" style="color:var(--blue)">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
            </div>
        </div>

        <!-- 2 DAY -->
        <div class="col-md-6 rv rv-d1">
            <div class="trader-card" style="--card-clr:var(--zed-primary);--card-glow:rgba(232,17,26,.07)">
            <div class="card-glow"></div>
            <div class="card-num">02</div>
            <div class="card-icon-wrap" style="background:rgba(232,17,26,.1);color:var(--zed-primary)"><i class="bi bi-calendar-day-fill"></i></div>
            <div class="card-label">Intraday</div>
            <h3>Day Traders</h3>
            <p>Day traders are all about frequency and speed, aiming to capture quick profits within a day. They make multiple trades within a single session, close all positions before the market closes to avoid overnight risks. If you enjoy action and are quick at making decisions, day trading might be the perfect match for you.</p>
            <ul class="traits">
                <li><i class="bi bi-chevron-right"></i>All positions closed by market close</li>
                <li><i class="bi bi-chevron-right"></i>Require Level 2 quotes and fast execution</li>
                <li><i class="bi bi-chevron-right"></i>5–20 trades per session is common</li>
                <li><i class="bi bi-chevron-right"></i>High focus, discipline and screen time</li>
            </ul>
            <div class="card-foot">
                <div class="tf-meta">Timeframe: <strong>Minutes to Hours</strong></div>
                <a href="#compare" class="learn-link" style="color:var(--zed-primary)">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
            </div>
        </div>

        <!-- 3 SWING -->
        <div class="col-md-6 rv">
            <div class="trader-card" style="--card-clr:var(--green);--card-glow:rgba(20,160,90,.07)">
            <div class="card-glow"></div>
            <div class="card-num">03</div>
            <div class="card-icon-wrap" style="background:rgba(20,160,90,.1);color:var(--green)"><i class="bi bi-arrow-left-right"></i></div>
            <div class="card-label">Multi-Day</div>
            <h3>Swing Traders</h3>
            <p>Swing traders hold positions over a few days, capitalising on short-term trends without the day-to-day rush. They often use technical analysis to identify potential entry and exit points, allowing them to potentially profit from market swings without the daily stress of active trading. Ideal for those who want balance and don't mind holding positions overnight.</p>
            <ul class="traits">
                <li><i class="bi bi-chevron-right"></i>Hold positions 2–10 days typically</li>
                <li><i class="bi bi-chevron-right"></i>Use daily and 4H charts primarily</li>
                <li><i class="bi bi-chevron-right"></i>1–5 trades per week is typical</li>
                <li><i class="bi bi-chevron-right"></i>Compatible with a full-time job</li>
            </ul>
            <div class="card-foot">
                <div class="tf-meta">Timeframe: <strong>Days to Weeks</strong></div>
                <a href="#compare" class="learn-link" style="color:var(--green)">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
            </div>
        </div>

        <!-- 4 SCALPING -->
        <div class="col-md-6 rv rv-d1">
            <div class="trader-card" style="--card-clr:var(--amber);--card-glow:rgba(217,119,6,.07)">
            <div class="card-glow"></div>
            <div class="card-num">04</div>
            <div class="card-icon-wrap" style="background:rgba(217,119,6,.1);color:var(--amber)"><i class="bi bi-lightning-charge-fill"></i></div>
            <div class="card-label">Ultra Short-Term</div>
            <h3>Scalping Traders</h3>
            <p>Scalpers jump in and out of trades within seconds, capturing small price changes to make small profits quickly. This style is perfect for those who enjoy fast-paced environments and are comfortable with the rapid turnover of trades. Requires extreme focus, low latency execution, and iron discipline.</p>
            <ul class="traits">
                <li><i class="bi bi-chevron-right"></i>Hold trades for seconds to minutes</li>
                <li><i class="bi bi-chevron-right"></i>50–200 trades per session possible</li>
                <li><i class="bi bi-chevron-right"></i>Target 3–10 pips per trade</li>
                <li><i class="bi bi-chevron-right"></i>Requires ultra-low spread brokers</li>
            </ul>
            <div class="card-foot">
                <div class="tf-meta">Timeframe: <strong>Seconds to Minutes</strong></div>
                <a href="#compare" class="learn-link" style="color:var(--amber)">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
            </div>
        </div>

        <!-- 5 POSITION -->
        <div class="col-md-6 rv">
            <div class="trader-card" style="--card-clr:var(--purple);--card-glow:rgba(124,58,237,.07)">
            <div class="card-glow"></div>
            <div class="card-num">05</div>
            <div class="card-icon-wrap" style="background:rgba(124,58,237,.1);color:var(--purple)"><i class="bi bi-graph-up"></i></div>
            <div class="card-label">Long-Term</div>
            <h3>Position Traders</h3>
            <p>Position traders hold trades for weeks or months, focusing on major trends and big-picture moves. To achieve this, they rely on fundamental analysis and broader economic indicators to guide their decisions. As a result, this approach is great for investors who prefer a hands-off, strategic trading style.</p>
            <ul class="traits">
                <li><i class="bi bi-chevron-right"></i>Hold positions weeks to months</li>
                <li><i class="bi bi-chevron-right"></i>Use weekly and monthly charts</li>
                <li><i class="bi bi-chevron-right"></i>Fundamental + macro analysis driven</li>
                <li><i class="bi bi-chevron-right"></i>Low transaction costs, minimal screen time</li>
            </ul>
            <div class="card-foot">
                <div class="tf-meta">Timeframe: <strong>Weeks to Months</strong></div>
                <a href="#compare" class="learn-link" style="color:var(--purple)">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
            </div>
        </div>

        <!-- 6 ALGO -->
        <div class="col-md-6 rv rv-d1">
            <div class="trader-card" style="--card-clr:var(--teal);--card-glow:rgba(8,145,178,.07)">
            <div class="card-glow"></div>
            <div class="card-num">06</div>
            <div class="card-icon-wrap" style="background:rgba(8,145,178,.1);color:var(--teal)"><i class="bi bi-cpu-fill"></i></div>
            <div class="card-label">Automated</div>
            <h3>Algorithmic Traders</h3>
            <p>Algorithmic traders automate their strategies, letting software make precision trades 24/7. This approach is ideal for data-driven individuals who trust in numbers and technology. Furthermore, by removing human emotions from the equation, algorithmic trading can enhance efficiency and consistency.</p>
            <ul class="traits">
                <li><i class="bi bi-chevron-right"></i>Strategies coded in Python, MQL5, Pine</li>
                <li><i class="bi bi-chevron-right"></i>Back-test on 10+ years of data</li>
                <li><i class="bi bi-chevron-right"></i>Eliminates emotional decision-making</li>
                <li><i class="bi bi-chevron-right"></i>~70% of institutional volume is algo-driven</li>
            </ul>
            <div class="card-foot">
                <div class="tf-meta">Timeframe: <strong>Any — Automated</strong></div>
                <a href="#compare" class="learn-link" style="color:var(--teal)">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
            </div>
        </div>

        </div>
    </div>
    </section>

    <!-- MARQUEE -->
    <div class="mq-band">
    <div class="mq-row"><div class="mq-track">
        <span class="mq-tag"><i class="bi bi-lightning-charge-fill"></i>Scalping</span>
        <span class="mq-tag"><i class="bi bi-calendar-day-fill"></i>Day Trading</span>
        <span class="mq-tag"><i class="bi bi-arrow-left-right"></i>Swing Trading</span>
        <span class="mq-tag"><i class="bi bi-graph-up"></i>Position Trading</span>
        <span class="mq-tag"><i class="bi bi-globe2"></i>Forex</span>
        <span class="mq-tag"><i class="bi bi-cpu-fill"></i>Algo Trading</span>
        <span class="mq-tag"><i class="bi bi-bar-chart-fill"></i>Indices</span>
        <span class="mq-tag"><i class="bi bi-gem"></i>Metals</span>
        <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Commodities</span>
        <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto</span>
        <span class="mq-tag"><i class="bi bi-lightning-charge-fill"></i>Scalping</span>
        <span class="mq-tag"><i class="bi bi-calendar-day-fill"></i>Day Trading</span>
        <span class="mq-tag"><i class="bi bi-arrow-left-right"></i>Swing Trading</span>
        <span class="mq-tag"><i class="bi bi-graph-up"></i>Position Trading</span>
        <span class="mq-tag"><i class="bi bi-globe2"></i>Forex</span>
        <span class="mq-tag"><i class="bi bi-cpu-fill"></i>Algo Trading</span>
        <span class="mq-tag"><i class="bi bi-bar-chart-fill"></i>Indices</span>
        <span class="mq-tag"><i class="bi bi-gem"></i>Metals</span>
        <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Commodities</span>
        <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto</span>
    </div></div>
    <div class="mq-row"><div class="mq-track rev">
        <span class="mq-tag"><i class="bi bi-clock"></i>Seconds Hold</span>
        <span class="mq-tag"><i class="bi bi-shield-check"></i>Risk Management</span>
        <span class="mq-tag"><i class="bi bi-graph-down-arrow"></i>Short Selling</span>
        <span class="mq-tag"><i class="bi bi-activity"></i>Technical Analysis</span>
        <span class="mq-tag"><i class="bi bi-newspaper"></i>Fundamental Analysis</span>
        <span class="mq-tag"><i class="bi bi-cash-coin"></i>Position Sizing</span>
        <span class="mq-tag"><i class="bi bi-pie-chart"></i>Portfolio Mgmt</span>
        <span class="mq-tag"><i class="bi bi-binoculars"></i>Price Action</span>
        <span class="mq-tag"><i class="bi bi-clock"></i>Seconds Hold</span>
        <span class="mq-tag"><i class="bi bi-shield-check"></i>Risk Management</span>
        <span class="mq-tag"><i class="bi bi-graph-down-arrow"></i>Short Selling</span>
        <span class="mq-tag"><i class="bi bi-activity"></i>Technical Analysis</span>
        <span class="mq-tag"><i class="bi bi-newspaper"></i>Fundamental Analysis</span>
        <span class="mq-tag"><i class="bi bi-cash-coin"></i>Position Sizing</span>
        <span class="mq-tag"><i class="bi bi-pie-chart"></i>Portfolio Mgmt</span>
        <span class="mq-tag"><i class="bi bi-binoculars"></i>Price Action</span>
    </div></div>
    </div>

    <!-- COMPARISON TABLE -->
    <section class="compare-section" id="compare">
    <div class="container">
        <div class="text-center mb-5 rv">
        <p style="font-family:var(--mono);font-size:.65rem;color:var(--zed-primary);letter-spacing:.18em;text-transform:uppercase;margin-bottom:.6rem">Side by Side</p>
        <h2 style="font-family:var(--serif);font-size:clamp(2rem,4.5vw,3.2rem);color:var(--zed-dark-text);letter-spacing:-.02em">Compare All Trader Types</h2>
        <p style="color:var(--zed-secondary);max-width:480px;margin:.8rem auto 0;font-size:.9rem;line-height:1.65">Use this table to identify which trading style fits your lifestyle, risk tolerance and available time.</p>
        </div>
        <div class="table-responsive rv">
        <table class="cmp-table">
            <thead>
            <tr>
                <th>Attribute</th>
                <th>Forex</th>
                <th>Day Trader</th>
                <th class="active">Swing</th>
                <th>Scalper</th>
                <th>Position</th>
                <th>Algo</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>Hold Duration</td><td>Min–Days</td><td>Minutes–Hours</td><td class="active">Days–Weeks</td><td>Sec–Min</td><td>Weeks–Months</td><td>Any</td></tr>
            <tr><td>Trades/Week</td><td>5–25</td><td>25–100</td><td class="active">2–8</td><td>100–500</td><td>1–4</td><td>Unlimited</td></tr>
            <tr><td>Screen Time</td><td>Medium</td><td>High</td><td class="active">Low–Medium</td><td>Very High</td><td>Very Low</td><td>Minimal</td></tr>
            <tr><td>Risk Per Trade</td><td>1–2%</td><td>0.5–1%</td><td class="active">1–2%</td><td>0.1–0.5%</td><td>2–5%</td><td>Varies</td></tr>
            <tr><td>Works Full-Time?</td><td><i class="bi bi-check-circle-fill ck"></i></td><td><i class="bi bi-x-circle cx"></i></td><td class="active"><i class="bi bi-check-circle-fill ck"></i></td><td><i class="bi bi-x-circle cx"></i></td><td><i class="bi bi-check-circle-fill ck"></i></td><td><i class="bi bi-check-circle-fill ck"></i></td></tr>
            <tr><td>Capital Needed</td><td>Low</td><td>Medium</td><td class="active">Medium</td><td>Medium</td><td>High</td><td>Varies</td></tr>
            <tr><td>Stress Level</td><td><span class="dot-a"></span> Medium</td><td><span class="dot-r"></span> High</td><td class="active"><span class="dot-g"></span> Low</td><td><span class="dot-r"></span> Very High</td><td><span class="dot-g"></span> Very Low</td><td><span class="dot-g"></span> Low</td></tr>
            <tr><td>Beginner Friendly?</td><td><i class="bi bi-check-circle-fill ck"></i></td><td><i class="bi bi-x-circle cx"></i></td><td class="active"><i class="bi bi-check-circle-fill ck"></i></td><td><i class="bi bi-x-circle cx"></i></td><td><i class="bi bi-check-circle-fill ck"></i></td><td><i class="bi bi-x-circle cx"></i></td></tr>
            </tbody>
        </table>
        </div>
    </div>
    </section>

    <!-- 5 STEPS -->
    <section class="steps-section" id="steps">
    <div class="container">
        <p class="rv" style="font-family:var(--mono);font-size:.65rem;color:var(--zed-primary);letter-spacing:.18em;text-transform:uppercase;text-align:center;margin-bottom:.6rem">Your Roadmap</p>
        <h2 class="rv">5 steps to choosing<br>your trading type</h2>
        <p class="lead-p rv">Follow this framework before picking a trading style. Skipping any step is why most traders end up switching styles repeatedly and losing money in the process.</p>

        <div class="row g-4">
        <div class="col-md-6 col-xl-4 rv">
            <div class="step-item">
            <div class="step-circle">1</div>
            <h5>Find your fit</h5>
            <p>Align your strategy with your personality, from day trading to long-term trading. Introverted and analytical? Position or swing. High energy and decisive? Scalping or day trading.</p>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 rv rv-d1">
            <div class="step-item">
            <div class="step-circle">2</div>
            <h5>Stay consistent</h5>
            <p>Switching styles can lead to poor results, so focus on what works best for you. Give any strategy a minimum 3-month live testing period before judging its viability.</p>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 rv rv-d2">
            <div class="step-item">
            <div class="step-circle">3</div>
            <h5>Master timing</h5>
            <p>Effective trading depends on knowing when to act, with day, swing and position trading each requiring unique time commitments. Scalping demands full market hours — are you available?</p>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 rv">
            <div class="step-item">
            <div class="step-circle">4</div>
            <h5>Self-awareness is key</h5>
            <p>Success is closely connected with knowing yourself, learning and adapting to market changes. Track your emotional reactions to losses — this reveals your true risk tolerance.</p>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 rv rv-d1">
            <div class="step-item">
            <div class="step-circle">5</div>
            <h5>Use your tools wisely</h5>
            <p>Great traders manage risks and leverage tools to protect their capital. Every style requires different tools — scalpers need Level 2 data; position traders need macro research platforms.</p>
            </div>
        </div>
        <div class="col-md-6 col-xl-4 rv rv-d2">
            <div class="step-item" style="border-color:rgba(232,17,26,.22);background:linear-gradient(135deg,rgba(232,17,26,.04) 0%,var(--zed-light-bg) 100%)">
            <div class="step-circle" style="background:var(--green)">✓</div>
            <h5>Now take the quiz</h5>
            <p>Answer 5 quick questions and we'll match you with your ideal trader type based on your lifestyle, goals and personality — no account needed.</p>
            <a href="#quiz" class="btn-start mt-3" style="font-size:.82rem;padding:.65rem 1.6rem"><i class="bi bi-arrow-right me-1"></i>Start Quiz</a>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- WHY SECTION -->
    <section class="why-section">
    <div class="container">
        <div class="text-center mb-5">
        <p class="rv" style="font-family:var(--mono);font-size:.65rem;color:var(--zed-primary);letter-spacing:.18em;text-transform:uppercase;margin-bottom:.6rem">Key Principles</p>
        <h2 class="sec-h rv" style="font-family:var(--serif);font-size:clamp(2rem,4.5vw,3.2rem);color:#fff;letter-spacing:-.02em">Why Knowing Your Type<br>Changes Everything</h2>
        </div>
        <div class="row g-3">
        <div class="col-sm-6 col-xl-3 rv"><div class="why-card"><div class="why-icon"><i class="bi bi-emoji-smile-fill"></i></div><h6>Reduces Emotional Trading</h6><p>When your style matches your personality, you stop fighting your instincts. Decisions become process-based, not emotion-based.</p></div></div>
        <div class="col-sm-6 col-xl-3 rv rv-d1"><div class="why-card"><div class="why-icon" style="background:rgba(37,99,235,.12);color:var(--blue)"><i class="bi bi-clock-fill"></i></div><h6>Fits Your Lifestyle</h6><p>A swing trader can hold a full-time job. A scalper cannot. Knowing this prevents career-threatening decisions about quitting your job too early.</p></div></div>
        <div class="col-sm-6 col-xl-3 rv rv-d2"><div class="why-card"><div class="why-icon" style="background:rgba(20,160,90,.12);color:var(--green)"><i class="bi bi-shield-fill-check"></i></div><h6>Optimises Risk Management</h6><p>Each style has a different optimal risk-per-trade, position sizing, and stop-loss placement. Style-specific rules protect your capital.</p></div></div>
        <div class="col-sm-6 col-xl-3 rv rv-d3"><div class="why-card"><div class="why-icon" style="background:rgba(124,58,237,.12);color:var(--purple)"><i class="bi bi-arrow-up-circle-fill"></i></div><h6>Builds Consistency</h6><p>The fastest path to consistent profits is committing to one approach for 6+ months. Style confusion is the #1 reason traders plateau.</p></div></div>
        </div>
    </div>
    </section>

    <!-- QUIZ -->
    <section class="quiz-section" id="quiz">
    <div class="container">
        <div class="text-center mb-5 rv">
        <p style="font-family:var(--mono);font-size:.65rem;color:var(--zed-primary);letter-spacing:.18em;text-transform:uppercase;margin-bottom:.6rem">Interactive</p>
        <h2 style="font-family:var(--serif);font-size:clamp(2rem,4.5vw,3.2rem);color:var(--zed-dark-text);letter-spacing:-.02em">What Type of Trader Are You?</h2>
        <p style="color:var(--zed-secondary);max-width:440px;margin:.7rem auto 0;font-size:.9rem;line-height:1.65">Answer 5 questions. We'll match you to your ideal trading style in seconds.</p>
        </div>

        <div class="quiz-wrap rv">
        <div class="quiz-progress"><div class="quiz-prog-fill" id="qProg" style="width:0%"></div></div>
        <p id="qNum" style="font-family:var(--mono);font-size:.65rem;color:var(--zed-secondary);letter-spacing:.1em;text-transform:uppercase;margin-bottom:1rem">Question 1 of 5</p>

        <!-- Q1 -->
        <div class="quiz-step active" id="q1">
            <p class="quiz-q">How much time can you dedicate to trading daily?</p>
            <div class="quiz-opts">
            <div class="quiz-opt" data-val="scalper"><div class="opt-dot"></div>6–8 hours — I want to be fully immersed, watching every tick</div>
            <div class="quiz-opt" data-val="day"><div class="opt-dot"></div>3–5 hours — I can dedicate most of my morning/afternoon</div>
            <div class="quiz-opt" data-val="swing"><div class="opt-dot"></div>30–60 minutes — I check charts before/after work</div>
            <div class="quiz-opt" data-val="position"><div class="opt-dot"></div>10–15 minutes — I prefer a weekly review approach</div>
            <div class="quiz-opt" data-val="algo"><div class="opt-dot"></div>Minimal — I'd rather automate and let software do the work</div>
            </div>
        </div>

        <!-- Q2 -->
        <div class="quiz-step" id="q2">
            <p class="quiz-q">How do you react to a sudden 2% loss on a position?</p>
            <div class="quiz-opts">
            <div class="quiz-opt" data-val="scalper"><div class="opt-dot"></div>I close it immediately — I never hold losing positions beyond my stop</div>
            <div class="quiz-opt" data-val="swing"><div class="opt-dot"></div>I stay calm — I planned for this, my stop loss is already set</div>
            <div class="quiz-opt" data-val="day"><div class="opt-dot"></div>I analyse quickly and decide — cut or add based on price action</div>
            <div class="quiz-opt" data-val="position"><div class="opt-dot"></div>I barely notice — my thesis is intact and I hold with conviction</div>
            <div class="quiz-opt" data-val="algo"><div class="opt-dot"></div>My system handles it — emotions are out of the equation</div>
            </div>
        </div>

        <!-- Q3 -->
        <div class="quiz-step" id="q3">
            <p class="quiz-q">What does your ideal trading week look like?</p>
            <div class="quiz-opts">
            <div class="quiz-opt" data-val="scalper"><div class="opt-dot"></div>Hundreds of small trades, each targeting 5–10 pips</div>
            <div class="quiz-opt" data-val="day"><div class="opt-dot"></div>10–30 trades — busy sessions, all flat by close</div>
            <div class="quiz-opt" data-val="swing"><div class="opt-dot"></div>3–5 well-researched setups, entered and managed calmly</div>
            <div class="quiz-opt" data-val="position"><div class="opt-dot"></div>1–2 major macro positions, reviewed weekly</div>
            <div class="quiz-opt" data-val="algo"><div class="opt-dot"></div>My system runs — I review performance logs, not charts</div>
            </div>
        </div>

        <!-- Q4 -->
        <div class="quiz-step" id="q4">
            <p class="quiz-q">Which statement describes you best?</p>
            <div class="quiz-opts">
            <div class="quiz-opt" data-val="algo"><div class="opt-dot"></div>"I love data, coding and building systematic rules — humans are too emotional"</div>
            <div class="quiz-opt" data-val="position"><div class="opt-dot"></div>"I study global economics and invest in multi-month trends like Warren Buffett"</div>
            <div class="quiz-opt" data-val="swing"><div class="opt-dot"></div>"I want to trade professionally but also have a life outside the market"</div>
            <div class="quiz-opt" data-val="day"><div class="opt-dot"></div>"I thrive under pressure, I love the fast-paced energy of active markets"</div>
            <div class="quiz-opt" data-val="forex"><div class="opt-dot"></div>"I'm fascinated by macroeconomics, currencies and global market dynamics"</div>
            </div>
        </div>

        <!-- Q5 -->
        <div class="quiz-step" id="q5">
            <p class="quiz-q">What is your primary trading goal?</p>
            <div class="quiz-opts">
            <div class="quiz-opt" data-val="scalper"><div class="opt-dot"></div>Daily consistent income — I want to profit every single session</div>
            <div class="quiz-opt" data-val="day"><div class="opt-dot"></div>Replace my job income through active full-time trading</div>
            <div class="quiz-opt" data-val="swing"><div class="opt-dot"></div>Supplement my income with 15–30% annual returns while working</div>
            <div class="quiz-opt" data-val="position"><div class="opt-dot"></div>Long-term wealth building — beat the market over 3–5 years</div>
            <div class="quiz-opt" data-val="algo"><div class="opt-dot"></div>Build a passive trading income through automated systems</div>
            </div>
        </div>

        <!-- RESULT -->
        <div class="quiz-step" id="qResult">
            <div class="quiz-result">
            <div class="quiz-result-icon" id="resultIcon"><i class="bi bi-award-fill"></i></div>
            <h3 id="resultTitle">You're a Swing Trader!</h3>
            <p id="resultDesc">You prefer balance — researching setups carefully, entering with conviction and holding through multi-day moves without the stress of screen-watching. Swing trading suits your lifestyle and psychology perfectly.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#types" class="btn-start" style="font-size:.85rem;padding:.7rem 1.8rem"><i class="bi bi-arrow-up"></i>View All Types</a>
                <button class="quiz-retry" onclick="restartQuiz()"><i class="bi bi-arrow-repeat me-1"></i>Retake Quiz</button>
            </div>
            </div>
        </div>

        <!-- NAV -->
        <div class="quiz-nav" id="quizNav">
            <button class="btn-quiz-back" id="btnBack" onclick="prevQ()" style="display:none"><i class="bi bi-arrow-left me-1"></i>Back</button>
            <button class="btn-quiz-next" id="btnNext" onclick="nextQ()" disabled>Next <i class="bi bi-arrow-right ms-1"></i></button>
        </div>
        </div>
    </div>
    </section>

    <!-- CTA BAND -->
    <section class="cta-band">
    <div class="container">
        <h2>Ready to Start Trading?</h2>
        <p>Now that you know your trading style, apply what you've learned. Join our live webinar and start building your strategy with expert guidance.</p>
        <a href="#" class="btn-big d-inline-block text-decoration-none">Start Trading</a>
        <p class="disclaimer">All trading involves risk. It is possible to lose all your capital.</p>
    </div>
    </section>

    <script>
    // ── CUSTOM CURSOR
    const dot  = document.getElementById('cursorDot');
    const ring = document.getElementById('cursorRing');
    document.addEventListener('mousemove', e => {
        dot.style.transform  = `translate(${e.clientX - 4}px, ${e.clientY - 4}px)`;
        ring.style.transform = `translate(${e.clientX - 18}px, ${e.clientY - 18}px)`;
    });
    document.querySelectorAll('a,button,.trader-card,.quiz-opt').forEach(el => {
        el.addEventListener('mouseenter', () => document.body.classList.add('cursor-grow'));
        el.addEventListener('mouseleave', () => document.body.classList.remove('cursor-grow'));
    });

    // ── NAVBAR SCROLL
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => nav.classList.toggle('raised', scrollY > 40));

    // ── SCROLL REVEAL
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold: 0.09 });
    document.querySelectorAll('.rv').forEach(el => io.observe(el));

    // ── QUIZ LOGIC
    const steps   = ['q1','q2','q3','q4','q5','qResult'];
    const scores  = { scalper:0, day:0, swing:0, position:0, algo:0, forex:0 };
    const answers = [];
    let current   = 0;

    const results = {
        scalper:  { title: "You're a Scalping Trader!", icon: 'bi-lightning-charge-fill', color: '#d97706', desc: "Your instincts are fast, your attention is laser-sharp and you love the action. Scalping matches your high-energy personality — but remember: discipline and low spreads are non-negotiable." },
        day:      { title: "You're a Day Trader!",      icon: 'bi-calendar-day-fill',     color: '#E8111A', desc: "You thrive under pressure, can make quick decisions and want active market exposure without overnight risk. Day trading is your arena — master one session and one setup first." },
        swing:    { title: "You're a Swing Trader!",    icon: 'bi-arrow-left-right',      color: '#14a05a', desc: "You prefer balance — researching setups carefully, entering with conviction and holding through multi-day moves. Swing trading suits your lifestyle and psychology perfectly." },
        position: { title: "You're a Position Trader!", icon: 'bi-graph-up',              color: '#7c3aed', desc: "You think in months, not minutes. Macro analysis and patience are your edge. Position trading gives you maximum signal quality and minimal noise — the Warren Buffett approach." },
        algo:     { title: "You're an Algorithmic Trader!", icon: 'bi-cpu-fill',           color: '#0891b2', desc: "Data over emotion. Systems over guesswork. You're built for algo trading — build, back-test, deploy and let your strategy work 24/7 without you watching every candle." },
        forex:    { title: "You're a Forex Trader!",   icon: 'bi-globe2',               color: '#1a56e8', desc: "Global macro fascinates you, and currency markets are the perfect playground. Learn to read central bank policy, economic data and currency pair correlations for a powerful edge." },
    };

    function updateProgress() {
        const pct = current === 0 ? 0 : (current / 5 * 100);
        document.getElementById('qProg').style.width = pct + '%';
        const qn = document.getElementById('qNum');
        if (current < 5) qn.textContent = `Question ${current + 1} of 5`;
        else qn.textContent = 'Your Result';
        document.getElementById('btnBack').style.display = current > 0 && current < 5 ? 'flex' : 'none';
        document.getElementById('btnNext').disabled = !answers[current];
    }

    document.querySelectorAll('.quiz-opt').forEach(opt => {
        opt.addEventListener('click', function() {
        const parent = this.closest('.quiz-step');
        parent.querySelectorAll('.quiz-opt').forEach(o => o.classList.remove('selected'));
        this.classList.add('selected');
        answers[current] = this.dataset.val;
        document.getElementById('btnNext').disabled = false;
        });
    });

    function showStep(idx) {
        document.querySelectorAll('.quiz-step').forEach(s => s.classList.remove('active'));
        document.getElementById(steps[idx]).classList.add('active');
        document.getElementById('quizNav').style.display = idx === 5 ? 'none' : 'flex';
        updateProgress();
    }

    function nextQ() {
        if (!answers[current]) return;
        scores[answers[current]] = (scores[answers[current]] || 0) + 1;
        current++;
        if (current === 5) { showResult(); return; }
        showStep(current);
    }

    function prevQ() {
        if (current === 0) return;
        current--;
        showStep(current);
    }

    function showResult() {
        const best = Object.entries(scores).sort((a,b) => b[1]-a[1])[0][0];
        const r = results[best];
        document.getElementById('resultTitle').textContent = r.title;
        document.getElementById('resultDesc').textContent  = r.desc;
        const icon = document.getElementById('resultIcon');
        icon.innerHTML = `<i class="bi ${r.icon}"></i>`;
        icon.style.background = `rgba(0,0,0,.06)`;
        icon.style.color = r.color;
        showStep(5);
        document.getElementById('quizNav').style.display = 'none';
    }

    function restartQuiz() {
        current = 0;
        Object.keys(scores).forEach(k => scores[k] = 0);
        answers.length = 0;
        document.querySelectorAll('.quiz-opt').forEach(o => o.classList.remove('selected'));
        document.getElementById('btnNext').disabled = true;
        document.getElementById('quizNav').style.display = 'flex';
        showStep(0);
    }

    updateProgress();
    </script>
    
<?php
include_once ('elements/footer.php');
?>