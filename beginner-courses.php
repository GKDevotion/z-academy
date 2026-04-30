<?php 
include_once ('elements/header.php');
?>

    <style>
        /* ━━━━━━━━━━━━━━━━━━━━━━━━━ TICKER ━━━ */
        .ticker-bar {
            background: var(--zed-dark-text);
            overflow: hidden;
            padding: .42rem 0;
            user-select: none;
        }
        .ticker-inner {
            display: flex;
            width: max-content;
            animation: tickRun 30s linear infinite;
        }
        .ticker-inner:hover { animation-play-state: paused; }
        .t-item {
            padding: 0 2rem;
            font-size: .75rem;
            font-weight: 600;
            color: rgba(255,255,255,.45);
            white-space: nowrap;
            letter-spacing: .04em;
        }
        .t-item .up   { color: #4ade80; }
        .t-item .dn   { color: #f87171; }
        @keyframes tickRun {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }
    
        /* ━━━━━━━━━━━━━━━━━━━━━━━━━ HERO ━━━━ */
        .hero {
          padding: 100px 0 80px;
          text-align: center;
          background: radial-gradient(ellipse 60% 55% at 50% -10%, rgba(232, 17, 26, .07) 0%, transparent 65%), var(--zed-backgound-color);
          position: relative;
          overflow: hidden;
        }
        .hero::before {
          content: '';
          position: absolute;
          inset: 0;
          background-image: repeating-linear-gradient(0deg, transparent, transparent 39px, rgba(0, 0, 0, .03) 39px, rgba(0, 0, 0, .03) 40px), repeating-linear-gradient(90deg, transparent, transparent 39px, rgba(0, 0, 0, .03) 39px, rgba(0, 0, 0, .03) 40px);
          pointer-events: none;
        }
        .hero-pill {
            display: inline-flex; align-items: center; gap: .55rem;
            background: var(--zed-primary); color: #fff;
            font-size: .72rem; font-weight: 800;
            letter-spacing: .15em; text-transform: uppercase;
            padding: .38rem 1.1rem; border-radius: 50px;
            margin-bottom: 1.6rem;
            animation: dropIn .6s ease both;
        }
        .hero h1 {
            font-size: clamp(2.6rem, 6.5vw, 5rem);
            font-weight: 800; line-height: 1.04;
            letter-spacing: -.04em; color: var(--zed-dark-text);
            animation: riseUp .7s .1s ease both;
        }
        .hero h1 em { font-style: normal; color: var(--zed-primary); }
        .hero p.tagline {
            font-size: 1.05rem; 
            color: var(--zed-secondary);
            max-width: 580px; 
            margin: 1.1rem auto 2rem;
            font-weight: 400; 
            line-height: 1.65;
            animation: riseUp .7s .2s ease both;
        }
        .hero-cta { animation: riseUp .7s .3s ease both; }
        .btn-hero {
            background: var(--zed-primary); 
            color: #fff;
            border: none; 
            border-radius: 50px;
            font-size: .95rem; 
            font-weight: 800;
            letter-spacing: .06em; 
            text-transform: uppercase;
            padding: 1rem 3rem;
            box-shadow: 0 10px 32px rgba(232,17,26,.32);
            transition: background .25s, transform .2s, box-shadow .25s;
            text-decoration: none;
        }
        .btn-hero:hover {
            background: var(--zed-primary-hover); 
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 16px 40px rgba(232,17,26,.42);
        }
        .hero-stats {
            display: flex; 
            justify-content: center;
            gap: 2.5rem; 
            flex-wrap: wrap;
            margin-top: 3.5rem;
            animation: riseUp .7s .4s ease both;
        }
        .h-stat .num {
            font-size: 1.9rem; 
            font-weight: 800;
            color: var(--zed-dark-text);
        }
        .h-stat .num span { color: var(--zed-primary); }
        .h-stat .lbl {
            font-size: .72rem; 
            font-weight: 600;
            color: var(--zed-secondary); 
            letter-spacing: .08em;
            text-transform: uppercase;
        }
        /* hero path steps */
        .path-steps {
            display: flex; 
            justify-content: center;
            gap: 0; 
            flex-wrap: wrap;
            margin-top: 3rem;
            animation: riseUp .7s .5s ease both;
        }
        .path-step {
            display: flex; 
            align-items: center; 
            gap: .6rem;
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            border-radius: 12px;
            padding: .65rem 1.1rem;
            font-size: .82rem; 
            font-weight: 600;
            color: var(--zed-dark-text);
            margin: .3rem;
            transition: border-color .25s, box-shadow .25s;
        }
        .path-step:hover {
            border-color: rgba(232,17,26,.35);
            box-shadow: 0 4px 18px rgba(232,17,26,.1);
        }
        .path-step .num {
            width: 22px; 
            height: 22px;
            background: var(--zed-primary); 
            color: #fff;
            border-radius: 50%;
            font-size: .68rem; 
            font-weight: 800;
            display: flex; 
            align-items: center; 
            justify-content: center;
            flex-shrink: 0;
        }
        .path-arrow {
            color: var(--zed-secondary); 
            font-size: .9rem;
            align-self: center; 
            margin: .3rem .2rem;
        }
    
        @keyframes dropIn { from { opacity:0; transform:translateY(-16px); } to { opacity:1; transform:translateY(0); } }
        @keyframes riseUp { from { opacity:0; transform:translateY(28px); } to { opacity:1; transform:translateY(0); } }
    
        /* ━━━━━━━━━━━━━━━━━━━━━━━━━ SECTION BASE ━━━ */
        .sec { padding: 82px 0; }
        .sec-white { background: var(--zed-light-bg); }
        .sec-dark  { background: var(--zed-dark-text); }
        .sec-red   { background: var(--zed-primary); }
    
        .eyebrow {
            display: inline-block;
            font-size: .7rem; 
            font-weight: 800;
            letter-spacing: .2em; 
            text-transform: uppercase;
            color: var(--zed-primary); 
            margin-bottom: .75rem;
        }
        .sec-dark .eyebrow { color: rgba(232,17,26,.75); }
        .sec-red  .eyebrow { color: rgba(255,255,255,.7); }
        .sec-h {
            font-size: clamp(1.8rem, 3.8vw, 2.7rem);
            font-weight: 800; 
            letter-spacing: -.035em;
            color: var(--zed-dark-text); 
            line-height: 1.1;
        }
        .sec-dark .sec-h, .sec-red .sec-h { color: #fff; }
        .sec-p {
            font-size: .93rem; 
            color: var(--zed-secondary);
            font-weight: 400; 
            max-width: 470px;
            line-height: 1.65;
        }
        .sec-dark .sec-p { color: rgba(255,255,255,.4); }
        .sec-red  .sec-p { color: rgba(255,255,255,.72); }
    
        /* divider */
        .hdiv { height: 1px; background: linear-gradient(90deg, transparent, var(--zed-border-color), transparent); }
    
        /* ━━━━━━━━━━━━━━━━━━━━━━━━━ LEVEL CARDS ━━━ */
        .level-card {
            background: var(--zed-light-bg);
            border: 1.5px solid var(--zed-border-color);
            border-radius: 22px;
            padding: 1.6rem;
            height: 100%;
            position: relative;
            overflow: hidden;
            display: flex; flex-direction: column;
            transition: transform .4s cubic-bezier(.2,.8,.2,1), box-shadow .4s, border-color .3s;
        }
        .level-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 64px rgba(0,0,0,.1);
            border-color: rgba(232,17,26,.3);
        }
        .level-card::after {
            content: '';
            position: absolute; 
            bottom: 0; 
            left: 0; 
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--zed-primary), #ff6b6b);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .4s ease;
        }
        .level-card:hover::after { transform: scaleX(1); }
    
        .level-tag {
            display: inline-block;
            background: var(--zed-primary); 
            color: #fff;
            font-size: .68rem; 
            font-weight: 800;
            letter-spacing: .1em; 
            text-transform: uppercase;
            padding: .28rem .75rem; 
            border-radius: 6px;
            margin-bottom: 1rem;
        }
        .level-card h4 {
            font-size: 1.3rem; 
            font-weight: 800;
            color: var(--zed-dark-text); 
            margin-bottom: .5rem;
            letter-spacing: -.02em;
        }
        .level-card .desc {
            font-size: .84rem; 
            color: var(--zed-secondary);
            line-height: 1.65; 
            margin-bottom: 1.1rem;
        }
        .level-card .card-icon {
            position: absolute; 
            top: 1.5rem; 
            right: 1.5rem;
            font-size: 2rem; 
            opacity: .18;
        }
        .check-list { list-style: none; padding: 0; margin: 0 0 1.3rem; }
        .check-list li {
            font-size: .84rem; 
            color: var(--zed-dark-text);
            padding: .32rem 0;
            display: flex; 
            align-items: center; 
            gap: .55rem;
        }
        .check-list li i { color: var(--zed-success-hover); font-size: .85rem; flex-shrink: 0; }
    
        .progress-row {
            display: flex; 
            align-items: center;
            justify-content: space-between;
            font-size: .79rem; 
            font-weight: 600;
            color: var(--zed-secondary); 
            margin-bottom: .4rem;
        }
        .prog-bar {
            height: 5px; 
            background: #ebebeb; 
            border-radius: 3px;
            overflow: hidden; 
            margin-bottom: 1.3rem;
        }
        .prog-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--zed-primary), #ff7070);
            border-radius: 3px;
            width: 0;
            transition: width 1.2s cubic-bezier(.4,0,.2,1);
        }
        .prog-fill.animated { /* width set via inline style on scroll */ }
    
        .btn-module {
            display: block; 
            width: 100%;
            background: var(--zed-primary); 
            color: #fff;
            border: none; 
            border-radius: 12px;
            font-size: .9rem; 
            font-weight: 800;
            padding: .85rem;
            text-align: center; 
            text-decoration: none;
            letter-spacing: .04em;
            margin-top: auto;
            transition: background .25s, transform .2s, box-shadow .25s;
            box-shadow: 0 6px 20px rgba(232,17,26,.22);
        }
        .btn-module:hover {
            background: var(--zed-primary-hover); 
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(232,17,26,.33);
        }
    
        /* ━━━━━━━━━━━━━━━━━━━━━━━━━ MARQUEE ━━━━ */
        .marquee-band {
            background: var(--zed-dark-text);
            padding: 3rem 0;
            overflow: hidden;
        }
        .mq-row { overflow: hidden; }
        .mq-row + .mq-row { margin-top: 1rem; }
        .mq-track {
            display: flex;
            gap: 1.2rem;
            width: max-content;
            animation: mq 24s linear infinite;
        }
        .mq-track.rev { animation-direction: reverse; animation-duration: 20s; }
        .mq-tag {
            display: flex; 
            align-items: center; 
            gap: .55rem;
            background: rgba(255,255,255,.05);
            border: 1px solid rgba(255,255,255,.07);
            color: rgba(255,255,255,.55);
            border-radius: 50px;
            padding: .48rem 1.2rem;
            font-size: .82rem; 
            font-weight: 600;
            white-space: nowrap; 
            flex-shrink: 0;
            transition: background .25s;
        }
        .mq-tag i { color: var(--zed-primary); font-size: .72rem; }
        @keyframes mq { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    
        /* ━━━━━━━━━━━━━━━━━━━━━━━━━ TOPIC CARDS ━━━ */
        .topic-card {
            background: var(--zed-light-bg);
            border: 1.5px solid var(--zed-border-color);
            border-radius: 18px;
            padding: 1.5rem;
            height: 100%;
            transition: transform .35s, box-shadow .35s, border-color .3s;
            position: relative; 
            overflow: hidden;
        }
        .topic-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 22px 52px rgba(0,0,0,.09);
            border-color: var(--accent-clr, rgba(232,17,26,.3));
        }
        .topic-card .t-icon {
            width: 48px; 
            height: 48px;
            border-radius: 13px;
            display: flex; 
            align-items: center; 
            justify-content: center;
            font-size: 1.3rem; 
            margin-bottom: .9rem;
        }
        .topic-card h5 {
            font-size: 1.02rem; 
            font-weight: 800;
            color: var(--zed-dark-text); 
            margin-bottom: .35rem;
            letter-spacing: -.015em;
        }
        .topic-card .tdesc {
            font-size: .81rem; 
            color: var(--zed-secondary);
            line-height: 1.6; 
            margin-bottom: .9rem;
        }
        .sub-list { list-style: none; padding: 0; margin: 0; }
        .sub-list li {
            font-size: .79rem; 
            color: #555;
            padding: .26rem 0;
            border-bottom: 1px solid rgba(0,0,0,.04);
            display: flex; 
            align-items: center; 
            gap: .45rem;
        }
        .sub-list li:last-child { border: none; }
        .sub-list li i { font-size: .55rem; opacity: .45; }
        .chip {
            display: inline-block; 
            margin-top: .85rem;
            font-size: .68rem; 
            font-weight: 700;
            padding: .22rem .7rem; 
            border-radius: 50px;
            letter-spacing: .06em; 
            text-transform: uppercase;
        }
    
        /* color palette */
        .ic-red    { background: rgba(232,17,26,.1);    color: var(--zed-primary); }
        .ic-blue   { background: rgba(59,130,246,.1);   color: #3b82f6; }
        .ic-green  { background: rgba(34,197,94,.1);    color: #16a34a; }
        .ic-gold   { background: rgba(234,179,8,.1);    color: #ca8a04; }
        .ic-purple { background: rgba(139,92,246,.1);   color: #7c3aed; }
        .ic-teal   { background: rgba(20,184,166,.1);   color: #0d9488; }
        .ic-orange { background: rgba(249,115,22,.1);   color: #ea580c; }
        .ic-sky    { background: rgba(14,165,233,.1);   color: #0284c7; }
        .ic-rose   { background: rgba(244,63,94,.1);    color: #e11d48; }
    
        .cp-red    { background: rgba(232,17,26,.08);   color: var(--zed-primary);   border:1px solid rgba(232,17,26,.18); }
        .cp-blue   { background: rgba(59,130,246,.08);  color: #3b82f6;  border:1px solid rgba(59,130,246,.18); }
        .cp-green  { background: rgba(34,197,94,.08);   color: #16a34a;  border:1px solid rgba(34,197,94,.18); }
        .cp-gold   { background: rgba(234,179,8,.08);   color: #ca8a04;  border:1px solid rgba(234,179,8,.18); }
        .cp-purple { background: rgba(139,92,246,.08);  color: #7c3aed;  border:1px solid rgba(139,92,246,.18); }
        .cp-teal   { background: rgba(20,184,166,.08);  color: #0d9488;  border:1px solid rgba(20,184,166,.18); }
        .cp-orange { background: rgba(249,115,22,.08);  color: #ea580c;  border:1px solid rgba(249,115,22,.18); }
        .cp-sky    { background: rgba(14,165,233,.08);  color: #0284c7;  border:1px solid rgba(14,165,233,.18); }
        .cp-rose   { background: rgba(244,63,94,.08);   color: #e11d48;  border:1px solid rgba(244,63,94,.18); }
    
        /* ━━━━━━━━━━━━━━━━━━━━━━━━━ WHY DARK ━━━━ */
        .why-card {
          background: rgba(255, 255, 255, .04);
          border: 1px solid rgba(255, 255, 255, .07);
          border-radius: 16px;
          padding: 1.6rem;
          transition: background .3s, border-color .3s, transform .3s
        }

        .why-card:hover {
          background: rgba(255, 255, 255, .07);
          border-color: var(--zed-primary-hover);
          transform: translateY(-4px)
        }
        .why-icon {
            width: 46px; 
            height: 46px;
            background: rgba(232,17,26,.14);
            color: var(--zed-primary); 
            border-radius: 12px;
            display: flex; 
            align-items: center; 
            justify-content: center;
            font-size: 1.2rem; 
            margin-bottom: .9rem;
        }
        .why-card h6 {
            font-weight: 700; 
            color: #fff; 
            margin-bottom: .3rem;
        }
        .why-card p { font-size: .82rem; color: rgba(255,255,255,.38); margin: 0; line-height: 1.6; }
    
        /* ━━━━━━━━━━━━━━━━━━━━━━━━━ TESTIMONIALS ━━━ */
        .t-card {
            background: var(--zed-light-bg);
            border: 1.5px solid var(--zed-border-color);
            border-radius: 18px;
            padding: 1.8rem;
            height: 100%;
            transition: transform .3s, box-shadow .3s;
        }
        .t-card:hover { transform: translateY(-5px); box-shadow: 0 18px 48px rgba(0,0,0,.08); }
        .stars { color: var(--zed-primary); font-size: .88rem; margin-bottom: .8rem; }
        .t-card q {
            font-size: .88rem; 
            color: var(--zed-dark-text);
            line-height: 1.72; 
            font-style: italic;
            display: block; 
            margin-bottom: 1.2rem;
        }
        .t-author { display: flex; align-items: center; gap: .75rem; }
        .t-av {
            width: 40px; 
            height: 40px;
            background: var(--zed-primary); 
            color: #fff;
            border-radius: 50%;
            display: flex; 
            align-items: center; 
            justify-content: center;
            font-weight: 800; 
            font-size: .88rem;
        }
        .t-name { font-weight: 700; font-size: .86rem; color: var(--zed-dark-text); }
        .t-role { font-size: .74rem; color: var(--zed-secondary); }
    
        /* ━━━━━━━━━━━━━━━━━━━━━━━━━ CTA BAND ━━━━ */
        .cta-band {
            background: var(--zed-primary);
            padding: 72px 0;
            text-align: center;
            position: relative; overflow: hidden;
        }
        .cta-band::before, .cta-band::after {
            content: ''; position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,.06);
        }
        .cta-band::before { width: 420px; height: 420px; top:-160px; left:-110px; }
        .cta-band::after  { width: 320px; height: 320px; bottom:-120px; right:-90px; }
        .cta-band h2 {
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 800; 
            color: #fff;
            letter-spacing: -.04em;
            position: relative; 
            z-index: 1;
        }
        .cta-band p { color: rgba(255,255,255,.72); max-width: 460px; margin: .9rem auto 2rem; position: relative; z-index:1; }
        .btn-white {
            background: #fff; 
            color: var(--zed-primary);
            border: none; 
            border-radius: 50px;
            font-size: .95rem; 
            font-weight: 800;
            padding: .9rem 2.6rem;
            box-shadow: 0 8px 24px rgba(0,0,0,.14);
            transition: transform .2s, box-shadow .25s;
            position: relative; 
            z-index: 1;
            text-decoration: none;
        }
        .btn-white:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 36px rgba(0,0,0,.2);
            color: var(--zed-primary);
        }
    
        /* ━━━━━━━━━━━━━━━━━━━━━━━━━ SCROLL REVEAL ━━━ */
        .rv {
            opacity: 0; transform: translateY(32px);
            transition: opacity .7s ease, transform .7s ease;
        }
        .rv.in { opacity: 1; transform: translateY(0); }
        .rv-d1 { transition-delay: .08s; }
        .rv-d2 { transition-delay: .16s; }
        .rv-d3 { transition-delay: .24s; }
        .rv-d4 { transition-delay: .32s; }
        .rv-d5 { transition-delay: .40s; }
    
        /* scrollbar */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: var(--zed-banner-bg-start); }
        ::-webkit-scrollbar-thumb { background: var(--zed-primary); border-radius: 3px; }
    </style>

    <!-- ─── HERO ─────────────────────────────────────────────── -->
    <section class="hero">
      <div class="container position-relative" style="z-index:1;">
        <div class="hero-pill"><i class="bi bi-rocket-takeoff-fill"></i> Zero to Hero Program</div>
        <h1>Your Trading<br>Journey <em>Starts Here</em></h1>
        <p class="tagline">No experience? No problem. We've designed these foundational courses to take you from absolute beginner to market-ready — at your own pace.</p>
        <div class="hero-cta d-flex justify-content-center gap-3 flex-wrap">
          <a href="#modules" class="btn-hero">Zero to Hero <i class="bi bi-arrow-right ms-2"></i></a>
        </div>
        <div class="hero-stats">
          <div class="h-stat"><div class="num">3<span>+</span></div><div class="lbl">Core Modules</div></div>
          <div class="h-stat"><div class="num">9<span>+</span></div><div class="lbl">Asset Classes</div></div>
          <div class="h-stat"><div class="num">100<span>%</span></div><div class="lbl">Beginner Friendly</div></div>
          <div class="h-stat"><div class="num">Free<span>*</span></div><div class="lbl">To Start</div></div>
        </div>
        <!-- path steps -->
        <div class="path-steps">
          <div class="path-step"><span class="num">1</span> Learn Fundamentals</div>
          <i class="bi bi-chevron-right path-arrow"></i>
          <div class="path-step"><span class="num">2</span> Technical Analysis</div>
          <i class="bi bi-chevron-right path-arrow"></i>
          <div class="path-step"><span class="num">3</span> Risk Management</div>
          <i class="bi bi-chevron-right path-arrow"></i>
          <div class="path-step"><span class="num">4</span> Live Trading</div>
        </div>
      </div>
    </section>
    
    <div class="hdiv"></div>
    
    <!-- ─── LEVEL MODULES ────────────────────────────────────── -->
    <section class="sec" id="modules">
      <div class="container">
        <div class="row align-items-end mb-5">
          <div class="col-lg-7">
            <span class="eyebrow rv">Beginner Curriculum</span>
            <h2 class="sec-h rv">Start With the<br>Right Foundation</h2>
            <p class="sec-p rv">Three structured modules that take you from zero knowledge to confident trade execution.</p>
          </div>
          <div class="col-lg-5 text-lg-end mt-3 mt-lg-0 rv">
            <a href="#" class="btn btn-outline-danger rounded-pill px-4">View All Courses <i class="bi bi-arrow-right ms-1"></i></a>
          </div>
        </div>
    
        <div class="row g-4">
    
          <!-- LEVEL 01 -->
          <div class="col-md-4 rv">
            <div class="level-card">
              <i class="bi bi-seedling card-icon"></i>
              <div class="level-tag">Level 01</div>
              <h4>Trading Fundamentals</h4>
              <p class="desc">What is a pip? How do brokers work? Understanding the global marketplace from scratch.</p>
              <ul class="check-list">
                <li><i class="bi bi-check-square-fill"></i> Market Terminology</li>
                <li><i class="bi bi-check-square-fill"></i> Setting up MetaTrader</li>
                <li><i class="bi bi-check-square-fill"></i> Reading Price Charts</li>
                <li><i class="bi bi-check-square-fill"></i> Understanding Pips & Lots</li>
              </ul>
              <div class="progress-row">
                <span>Difficulty: Beginner</span>
                <span>100%</span>
              </div>
              <div class="prog-bar">
                <div class="prog-fill" data-width="100"></div>
              </div>
              <a href="#" class="btn-module">Start Module 1</a>
            </div>
          </div>
    
          <!-- LEVEL 02 -->
          <div class="col-md-4 rv rv-d2">
            <div class="level-card">
              <i class="bi bi-graph-up card-icon"></i>
              <div class="level-tag">Level 02</div>
              <h4>Technical Analysis 101</h4>
              <p class="desc">Learn to identify trends using Support, Resistance, and basic Moving Averages.</p>
              <ul class="check-list">
                <li><i class="bi bi-check-square-fill"></i> Trendline Secrets</li>
                <li><i class="bi bi-check-square-fill"></i> Support &amp; Resistance</li>
                <li><i class="bi bi-check-square-fill"></i> Intro to Indicators</li>
                <li><i class="bi bi-check-square-fill"></i> Candlestick Patterns</li>
              </ul>
              <div class="progress-row">
                <span>Difficulty: Beginner</span>
                <span>40%</span>
              </div>
              <div class="prog-bar">
                <div class="prog-fill" data-width="40"></div>
              </div>
              <a href="#" class="btn-module">Start Module 2</a>
            </div>
          </div>
    
          <!-- LEVEL 03 -->
          <div class="col-md-4 rv rv-d3">
            <div class="level-card">
              <i class="bi bi-shield-fill card-icon"></i>
              <div class="level-tag">Level 03</div>
              <h4>Risk Management</h4>
              <p class="desc">The most important skill. Learn how to protect your capital and manage lot sizes.</p>
              <ul class="check-list">
                <li><i class="bi bi-check-square-fill"></i> The 1% Rule</li>
                <li><i class="bi bi-check-square-fill"></i> Stop Loss Strategies</li>
                <li><i class="bi bi-check-square-fill"></i> Position Sizing</li>
                <li><i class="bi bi-check-square-fill"></i> Risk-Reward Ratios</li>
              </ul>
              <div class="progress-row">
                <span>Difficulty: Essential</span>
                <span>60%</span>
              </div>
              <div class="prog-bar">
                <div class="prog-fill" data-width="60"></div>
              </div>
              <a href="#" class="btn-module">Start Module 3</a>
            </div>
          </div>
    
        </div>
      </div>
    </section>
    
    <!-- ─── MARQUEE BAND ──────────────────────────────────────── -->
    <div class="marquee-band">
      <div class="mq-row">
        <div class="mq-track" id="mq1">
          <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>Stocks</span>
          <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto</span>
          <span class="mq-tag"><i class="bi bi-bar-chart-steps"></i>Futures</span>
          <span class="mq-tag"><i class="bi bi-gem"></i>Metals</span>
          <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Commodities</span>
          <span class="mq-tag"><i class="bi bi-bank2"></i>Economics</span>
          <span class="mq-tag"><i class="bi bi-activity"></i>Technical Analysis</span>
          <span class="mq-tag"><i class="bi bi-receipt-cutoff"></i>Taxes</span>
          <span class="mq-tag"><i class="bi bi-journal-richtext"></i>Fundamentals</span>
          <span class="mq-tag"><i class="bi bi-safe"></i>Bonds</span>
          <span class="mq-tag"><i class="bi bi-graph-up-arrow"></i>Stocks</span>
          <span class="mq-tag"><i class="bi bi-currency-bitcoin"></i>Crypto</span>
          <span class="mq-tag"><i class="bi bi-bar-chart-steps"></i>Futures</span>
          <span class="mq-tag"><i class="bi bi-gem"></i>Metals</span>
          <span class="mq-tag"><i class="bi bi-droplet-fill"></i>Commodities</span>
          <span class="mq-tag"><i class="bi bi-bank2"></i>Economics</span>
          <span class="mq-tag"><i class="bi bi-activity"></i>Technical Analysis</span>
          <span class="mq-tag"><i class="bi bi-receipt-cutoff"></i>Taxes</span>
          <span class="mq-tag"><i class="bi bi-journal-richtext"></i>Fundamentals</span>
          <span class="mq-tag"><i class="bi bi-safe"></i>Bonds</span>
        </div>
      </div>
      <div class="mq-row">
        <div class="mq-track rev" id="mq2">
          <span class="mq-tag"><i class="bi bi-shield-check"></i>Risk Management</span>
          <span class="mq-tag"><i class="bi bi-lightning-charge"></i>Scalping</span>
          <span class="mq-tag"><i class="bi bi-clock-history"></i>Day Trading</span>
          <span class="mq-tag"><i class="bi bi-arrow-repeat"></i>Swing Trading</span>
          <span class="mq-tag"><i class="bi bi-cpu"></i>Algo Trading</span>
          <span class="mq-tag"><i class="bi bi-cash-coin"></i>Position Sizing</span>
          <span class="mq-tag"><i class="bi bi-globe2"></i>Forex Pairs</span>
          <span class="mq-tag"><i class="bi bi-pie-chart"></i>Portfolio Mgmt</span>
          <span class="mq-tag"><i class="bi bi-clipboard-data"></i>Earnings</span>
          <span class="mq-tag"><i class="bi bi-building"></i>IPOs & ETFs</span>
          <span class="mq-tag"><i class="bi bi-shield-check"></i>Risk Management</span>
          <span class="mq-tag"><i class="bi bi-lightning-charge"></i>Scalping</span>
          <span class="mq-tag"><i class="bi bi-clock-history"></i>Day Trading</span>
          <span class="mq-tag"><i class="bi bi-arrow-repeat"></i>Swing Trading</span>
          <span class="mq-tag"><i class="bi bi-cpu"></i>Algo Trading</span>
          <span class="mq-tag"><i class="bi bi-cash-coin"></i>Position Sizing</span>
          <span class="mq-tag"><i class="bi bi-globe2"></i>Forex Pairs</span>
          <span class="mq-tag"><i class="bi bi-pie-chart"></i>Portfolio Mgmt</span>
          <span class="mq-tag"><i class="bi bi-clipboard-data"></i>Earnings</span>
          <span class="mq-tag"><i class="bi bi-building"></i>IPOs & ETFs</span>
        </div>
      </div>
    </div>
    
    <!-- ─── TOPIC SECTIONS ───────────────────────────────────── -->
    <section class="sec sec-white" id="topics">
      <div class="container">
        <div class="text-center mb-5">
          <span class="eyebrow rv">All Market Topics</span>
          <h2 class="sec-h rv">Explore Every Asset Class</h2>
          <p class="sec-p mx-auto rv">From equities to crypto to tax compliance — every market, every instrument, one platform.</p>
        </div>
    
        <div class="row g-4">
    
          <!-- STOCKS -->
          <div class="col-sm-6 col-lg-4 rv">
            <div class="topic-card" style="--accent-clr: rgba(59,130,246,.3)">
              <div class="t-icon ic-blue"><i class="bi bi-graph-up-arrow"></i></div>
              <h5>Stocks</h5>
              <p class="tdesc">Equities, ETFs, IPOs and dividend investing — build long-term wealth through the stock market.</p>
              <ul class="sub-list">
                <li><i class="bi bi-dot"></i>Stock Market Structure</li>
                <li><i class="bi bi-dot"></i>Value vs Growth Investing</li>
                <li><i class="bi bi-dot"></i>Earnings & Dividends</li>
                <li><i class="bi bi-dot"></i>ETF & Index Fund Strategies</li>
              </ul>
              <span class="chip cp-blue">Equities</span>
            </div>
          </div>
    
          <!-- FUTURES -->
          <div class="col-sm-6 col-lg-4 rv rv-d1">
            <div class="topic-card" style="--accent-clr: rgba(249,115,22,.3)">
              <div class="t-icon ic-orange"><i class="bi bi-bar-chart-steps"></i></div>
              <h5>Futures</h5>
              <p class="tdesc">Trade contracts on indices, energy, metals, and agricultural goods with leveraged positions.</p>
              <ul class="sub-list">
                <li><i class="bi bi-dot"></i>Futures Contract Basics</li>
                <li><i class="bi bi-dot"></i>Margin & Leverage</li>
                <li><i class="bi bi-dot"></i>Rollover & Expiry Dates</li>
                <li><i class="bi bi-dot"></i>Hedging with Futures</li>
              </ul>
              <span class="chip cp-orange">Derivatives</span>
            </div>
          </div>
    
          <!-- CRYPTO -->
          <div class="col-sm-6 col-lg-4 rv rv-d2">
            <div class="topic-card" style="--accent-clr: rgba(139,92,246,.3)">
              <div class="t-icon ic-purple"><i class="bi bi-currency-bitcoin"></i></div>
              <h5>Crypto</h5>
              <p class="tdesc">Bitcoin, Ethereum, altcoins, DeFi, on-chain analysis and crypto-specific risk management.</p>
              <ul class="sub-list">
                <li><i class="bi bi-dot"></i>Blockchain Fundamentals</li>
                <li><i class="bi bi-dot"></i>BTC & ETH Deep Analysis</li>
                <li><i class="bi bi-dot"></i>DeFi Protocols & Altcoins</li>
                <li><i class="bi bi-dot"></i>On-chain Metrics</li>
              </ul>
              <span class="chip cp-purple">Digital Assets</span>
            </div>
          </div>
    
          <!-- COMMODITIES -->
          <div class="col-sm-6 col-lg-4 rv">
            <div class="topic-card" style="--accent-clr: rgba(34,197,94,.3)">
              <div class="t-icon ic-green"><i class="bi bi-droplet-fill"></i></div>
              <h5>Commodities</h5>
              <p class="tdesc">Crude oil, natural gas, agricultural products and energy markets driven by supply & demand.</p>
              <ul class="sub-list">
                <li><i class="bi bi-dot"></i>Crude Oil & Gas Trading</li>
                <li><i class="bi bi-dot"></i>Supply & Demand Cycles</li>
                <li><i class="bi bi-dot"></i>Seasonal Patterns</li>
                <li><i class="bi bi-dot"></i>Commodity Indices</li>
              </ul>
              <span class="chip cp-green">Energy & Agri</span>
            </div>
          </div>
    
          <!-- METALS -->
          <div class="col-sm-6 col-lg-4 rv rv-d1">
            <div class="topic-card" style="--accent-clr: rgba(234,179,8,.3)">
              <div class="t-icon ic-gold"><i class="bi bi-gem"></i></div>
              <h5>Metals</h5>
              <p class="tdesc">Gold, silver, platinum and copper — safe haven dynamics, inflation hedges, industrial demand.</p>
              <ul class="sub-list">
                <li><i class="bi bi-dot"></i>Gold as a Safe Haven</li>
                <li><i class="bi bi-dot"></i>Silver Volatility Patterns</li>
                <li><i class="bi bi-dot"></i>Industrial Metals (Copper)</li>
                <li><i class="bi bi-dot"></i>Metals vs USD Correlation</li>
              </ul>
              <span class="chip cp-gold">Precious & Base</span>
            </div>
          </div>
    
          <!-- ECONOMICS -->
          <div class="col-sm-6 col-lg-4 rv rv-d2">
            <div class="topic-card" style="--accent-clr: rgba(232,17,26,.3)">
              <div class="t-icon ic-red"><i class="bi bi-bank2"></i></div>
              <h5>Economics</h5>
              <p class="tdesc">Macro fundamentals — central bank policy, interest rates, inflation and global events that move markets.</p>
              <ul class="sub-list">
                <li><i class="bi bi-dot"></i>Central Bank Policy (Fed, ECB)</li>
                <li><i class="bi bi-dot"></i>Interest Rate Impact</li>
                <li><i class="bi bi-dot"></i>CPI, GDP & NFP Reports</li>
                <li><i class="bi bi-dot"></i>Economic Calendar Usage</li>
              </ul>
              <span class="chip cp-red">Macro</span>
            </div>
          </div>
    
          <!-- BONDS -->
          <div class="col-sm-6 col-lg-4 rv">
            <div class="topic-card" style="--accent-clr: rgba(20,184,166,.3)">
              <div class="t-icon ic-teal"><i class="bi bi-safe"></i></div>
              <h5>Bonds</h5>
              <p class="tdesc">Government and corporate bonds, yield curves, and how fixed-income markets influence stocks & currencies.</p>
              <ul class="sub-list">
                <li><i class="bi bi-dot"></i>Bond Basics & Yield</li>
                <li><i class="bi bi-dot"></i>Yield Curve & Inversions</li>
                <li><i class="bi bi-dot"></i>Government vs Corporate</li>
                <li><i class="bi bi-dot"></i>Bonds & Equity Correlation</li>
              </ul>
              <span class="chip cp-teal">Fixed Income</span>
            </div>
          </div>
    
          <!-- FUNDAMENTALS -->
          <div class="col-sm-6 col-lg-4 rv rv-d1">
            <div class="topic-card" style="--accent-clr: rgba(14,165,233,.3)">
              <div class="t-icon ic-sky"><i class="bi bi-journal-richtext"></i></div>
              <h5>Fundamental Analysis</h5>
              <p class="tdesc">Read financial statements, assess company health, and make investment decisions based on real value.</p>
              <ul class="sub-list">
                <li><i class="bi bi-dot"></i>P/E, P/B, EPS Ratios</li>
                <li><i class="bi bi-dot"></i>Balance Sheet Analysis</li>
                <li><i class="bi bi-dot"></i>Earnings Reports</li>
                <li><i class="bi bi-dot"></i>Sector & Industry Analysis</li>
              </ul>
              <span class="chip cp-sky">Valuation</span>
            </div>
          </div>
    
          <!-- TAXES -->
          <div class="col-sm-6 col-lg-4 rv rv-d2">
            <div class="topic-card" style="--accent-clr: rgba(244,63,94,.3)">
              <div class="t-icon ic-rose"><i class="bi bi-receipt-cutoff"></i></div>
              <h5>Taxes</h5>
              <p class="tdesc">Capital gains, crypto tax reporting, trading deductions and compliance — keep more of what you earn.</p>
              <ul class="sub-list">
                <li><i class="bi bi-dot"></i>Short vs Long-term CGT</li>
                <li><i class="bi bi-dot"></i>Crypto Tax Reporting</li>
                <li><i class="bi bi-dot"></i>Trading Deductions</li>
                <li><i class="bi bi-dot"></i>Trader vs Investor Status</li>
              </ul>
              <span class="chip cp-rose">Tax & Compliance</span>
            </div>
          </div>
    
        </div>
      </div>
    </section>
    
    <div class="hdiv"></div>
    
    <!-- ─── WHY US DARK ───────────────────────────────────────── -->
    <section class="sec sec-dark" id="why">
      <div class="container">
        <div class="text-center mb-5">
          <span class="eyebrow rv">Why TraderPro</span>
          <h2 class="sec-h rv">Built for Beginners.<br>Trusted by Pros.</h2>
          <p class="sec-p mx-auto rv">Every lesson is rooted in live market experience — not textbook theory.</p>
        </div>
        <div class="row g-3">
          <div class="col-sm-6 col-xl-3 rv">
            <div class="why-card">
              <div class="why-icon"><i class="bi bi-broadcast-pin"></i></div>
              <h6>Live Trade Rooms</h6>
              <p>Watch professional traders execute real trades weekly in our live sessions.</p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 rv rv-d1">
            <div class="why-card">
              <div class="why-icon"><i class="bi bi-people"></i></div>
              <h6>Private Community</h6>
              <p>Join 12,000+ traders in our Discord — share setups, get feedback, grow together.</p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 rv rv-d2">
            <div class="why-card">
              <div class="why-icon"><i class="bi bi-journal-check"></i></div>
              <h6>Trade Journal System</h6>
              <p>Our structured journaling framework helps you identify patterns in your own trading.</p>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3 rv rv-d3">
            <div class="why-card">
              <div class="why-icon"><i class="bi bi-infinity"></i></div>
              <h6>Lifetime Access</h6>
              <p>Pay once. All lessons, updates and future content are yours forever.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- ─── TESTIMONIALS ──────────────────────────────────────── -->
    <section class="sec sec-white" id="reviews">
      <div class="container">
        <div class="text-center mb-5">
          <span class="eyebrow rv">Student Reviews</span>
          <h2 class="sec-h rv">Real Traders. Real Results.</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-4 rv">
            <div class="t-card">
              <div class="stars">★★★★★</div>
              <q>Module 1 explained everything I was confused about for months — pips, lots, brokers — in a way that actually made sense. I was live trading by the end of week 2.</q>
              <div class="t-author">
                <div class="t-av">RK</div>
                <div><div class="t-name">Rahul Kothari</div><div class="t-role">Beginner Trader · Mumbai</div></div>
              </div>
            </div>
          </div>
          <div class="col-md-4 rv rv-d1">
            <div class="t-card">
              <div class="stars">★★★★★</div>
              <q>The Risk Management module alone was worth it. I used to blow accounts regularly. After the 1% rule and position sizing lessons, my losses are now controlled and predictable.</q>
              <div class="t-author">
                <div class="t-av">SP</div>
                <div><div class="t-name">Sneha Patel</div><div class="t-role">Forex Learner · Ahmedabad</div></div>
              </div>
            </div>
          </div>
          <div class="col-md-4 rv rv-d2">
            <div class="t-card">
              <div class="stars">★★★★☆</div>
              <q>I came in knowing nothing about stocks or crypto. The Economics and Fundamentals sections gave me context that no YouTube video had. Highly recommended for serious beginners.</q>
              <div class="t-author">
                <div class="t-av">AM</div>
                <div><div class="t-name">Arjun Mehta</div><div class="t-role">Crypto Student · Surat</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- ─── CTA BAND ───────────────────────────────────────────── -->
    <section class="cta-band" id="enroll">
      <div class="container">
        <h2>Ready to Go From<br>Zero to Hero?</h2>
        <p>Start with Module 1 for free. No credit card. No experience needed. Just the willingness to learn.</p>
        <a href="#modules" class="btn-white">Start Module 1 Free <i class="bi bi-arrow-right ms-1"></i></a>
      </div>
    </section>

    <script>
      // ── Navbar shadow on scroll
      const nav = document.getElementById('mainNav');
      window.addEventListener('scroll', () => nav.classList.toggle('raised', scrollY > 40));
    
      // ── Scroll reveal
      const rvEls = document.querySelectorAll('.rv');
      const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
          if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
        });
      }, { threshold: 0.1 });
      rvEls.forEach(el => io.observe(el));
    
      // ── Animate progress bars when in view
      const bars = document.querySelectorAll('.prog-fill');
      const barIO = new IntersectionObserver(entries => {
        entries.forEach(e => {
          if (e.isIntersecting) {
            e.target.style.width = e.target.dataset.width + '%';
            barIO.unobserve(e.target);
          }
        });
      }, { threshold: 0.4 });
      bars.forEach(b => barIO.observe(b));
    </script>
<?php
include_once ('elements/footer.php');
?>