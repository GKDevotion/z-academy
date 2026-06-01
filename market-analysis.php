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
              margin-top: 50px;
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
              min-width: 150px;
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
            <div class="hero-badge mt-4 d-none"><i class="bi bi-mortarboard-fill"></i> Professional Trading Education</div>
            <h1>
                Read the<em> <br>Markets</em>Trade with Clarity
            </h1>
            <p class="sub">
                Master daily market analysis across Forex, Gold and Indices. Understand technical setups, fundamental drivers and key support/resistance zones — every single trading day.
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
                        <div class="val">9</div>
                        <div class="lbl">Lessons</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-play-btn-fill"></i></div>
                    <div>
                        <div class="val">55</div>
                        <div class="lbl">Minutes</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-award-fill"></i></div>
                    <div>
                        <div class="val">0</div>
                        <div class="lbl">Completed</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-currency-dollar"></i></div>
                    <div>
                        <div class="val">Intermediate</div>
                        <div class="lbl">Level</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="hdiv"></div>
  
    <style> 
        :root { 
            --Rd: #9b0e24;
            --RL: rgba(200, 16, 46, 0.08);
            --RM: rgba(200, 16, 46, 0.15);
            --W: #ffffff;
            --G50: #f7f8fa;
            --G100: #eceef2;
            --G150: #e2e5ea;
            --G200: #d0d4dc;
            --G300: #b0b8c4;
            --G400: #8892a0;
            --G500: #636e7d;
            --G600: #465060;
            --G700: #2d3748;
            --G800: #1a2333;
            --GR: #00b870;
            --AM: #e8960a;
            --BL: #3b7dd8;
            --navy: #1a2a4a;
            --navy2: #16213e;
        }

        /* KEYFRAMES */
        @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(22px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
        }
        @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
        }
        @keyframes pulse {
        0%,
        100% {
            opacity: 1;
        }
        50% {
            opacity: 0.25;
        }
        }
        @keyframes float {
        0%,
        100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
        }
        @keyframes traceL {
        from {
            stroke-dashoffset: 2000;
        }
        to {
            stroke-dashoffset: 0;
        }
        }
        @keyframes scaleUp {
        from {
            transform: scale(0);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
        }
        @keyframes ticker {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-50%);
        }
        }
        @keyframes barIn {
        from {
            width: 0;
        }
        to {
            width: var(--bw, 100%);
        }
        }
        @keyframes barInH {
        from {
            height: 0;
        }
        to {
            height: var(--bh, 100%);
        }
        }
        @keyframes rotateFull {
        to {
            transform: rotate(360deg);
        }
        }
        @keyframes shimmer {
        0%,
        100% {
            opacity: 0.7;
        }
        50% {
            opacity: 1;
        }
        }
        @keyframes priceTick {
        0% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-4px);
        }
        100% {
            transform: translateY(0);
        }
        }
        @keyframes greenPulse {
        0%,
        100% {
            box-shadow: 0 0 0 0 rgba(0, 184, 112, 0.4);
        }
        50% {
            box-shadow: 0 0 0 8px rgba(0, 184, 112, 0);
        }
        }
        @keyframes candleGrow {
        from {
            transform: scaleY(0);
            transform-origin: bottom;
        }
        to {
            transform: scaleY(1);
        }
        }

        /* Mini market cards */
        .mini-markets {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
        margin-top: 1rem;
        }
        .mm-card {
        background: rgba(255, 255, 255, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        padding: 0.75rem 0.9rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }
        .mm-pair {
        font-size: 12px;
        font-weight: 700;
        color: #fff;
        }
        .mm-name {
        font-size: 9.5px;
        color: rgba(255, 255, 255, 0.35);
        margin-top: 1px;
        }
        .mm-right {
        text-align: right;
        }
        .mm-price {
        font-size: 12px;
        font-weight: 700;
        color: #fff;
        }
        .mm-chg {
        font-size: 10px;
        font-weight: 700;
        }
        .mm-chg.up {
        color: var(--GR);
        }
        .mm-chg.dn {
        color: var(--zed-primary);
        }

        /* STRIP */
        .hero-strip {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        border-top: 1px solid rgba(255, 255, 255, 0.07);
        margin-top: 2.5rem;
        }

        .hs {
        padding: 1.15rem 1rem;
        text-align: center;
        border-right: 1px solid rgba(255, 255, 255, 0.07);
        transition: background 0.25s;
        cursor: default;
        }
        .hs:hover {
        background: rgba(200, 16, 46, 0.07);
        }
        .hs:last-child {
        border-right: none;
        }
        .hv {
        font-size: 1.9rem;
        font-weight: 800;
        color: #fff;
        line-height: 1;
        margin-bottom: 4px;
        }
        .hv.r {
        color: var(--zed-primary);
        }
        .hl {
        font-size: 10px;
        color: rgba(255, 255, 255, 0.3);
        letter-spacing: 0.09em;
        text-transform: uppercase;
        }

        /* TICKER */
        .ticker-bar {
        background: var(--zed-primary);
        overflow: hidden;
        padding: 0.44rem 0;
        position: relative;
        }
        .ticker-bar::before,
        .ticker-bar::after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        width: 50px;
        z-index: 2;
        pointer-events: none;
        }
        .ticker-bar::before {
        left: 0;
        background: linear-gradient(90deg, var(--zed-primary), transparent);
        }
        .ticker-bar::after {
        right: 0;
        background: linear-gradient(-90deg, var(--zed-primary), transparent);
        }
        .t-track {
        display: flex;
        white-space: nowrap;
        animation: ticker 32s linear infinite;
        }
        .t-item {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 0 2.5rem;
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: 0.09em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.75);
        }
        .t-item i {
        font-size: 12px;
        color: rgba(255, 255, 255, 0.45);
        }

        /* PROGRESS */
        .prog-bar {
        background: var(--W);
        border-bottom: 2px solid var(--G100);
        padding: 0.72rem 0;
        position: sticky;
        top: 0;
        z-index: 100;
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.07);
        }
        .pb-row {
        /* max-width: 1100px; */
        margin: 0 auto;
        /* padding: 0 2rem; */
        display: flex;
        align-items: center;
        gap: 14px;
        }
        .pb-lbl {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--G400);
        white-space: nowrap;
        }
        .pb-track {
        flex: 1;
        height: 4px;
        background: var(--G100);
        border-radius: 2px;
        overflow: hidden;
        }
        .pb-fill {
        height: 100%;
        background: linear-gradient(90deg, var(--zed-primary), #e84060);
        width: 0%;
        transition: width 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 2px;
        }
        .pb-pct {
        font-size: 12px;
        font-weight: 700;
        color: var(--zed-primary);
        min-width: 36px;
        text-align: right;
        }
        .pb-cnt {
        font-size: 11px;
        color: var(--G400);
        white-space: nowrap;
        }
        /* LAYOUT */
        .page {
        /* max-width: 1100px; */
        margin: 0 auto;
        padding: 0 2rem;
        }
        .layout {
        display: grid;
        grid-template-columns: 1fr 320px;
        gap: 2.5rem;
        padding: 2.5rem 0 5rem;
        align-items: start;
        }

        /* SEC LABEL */
        .sec-lbl {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 1.4rem;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.13em;
        text-transform: uppercase;
        color: var(--G400);
        }
        .sec-lbl i {
        font-size: 13px;
        color: var(--G300);
        }
        .sec-lbl::after {
        content: "";
        flex: 1;
        height: 1px;
        background: var(--G100);
        }

        /* MODULE */
        .mod {
        background: var(--W);
        border: 1px solid var(--G150);
        border-radius: 14px;
        margin-bottom: 10px;
        border-left: 4px solid transparent;
        transition:
            border-color 0.25s,
            box-shadow 0.25s,
            transform 0.18s;
        overflow: hidden;
        }
        .mod:hover {
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.09);
        transform: translateY(-1px);
        }
        .mod.active {
        border-left-color: var(--zed-primary);
        box-shadow: 0 4px 20px rgba(200, 16, 46, 0.1);
        }
        .mod.done {
        border-left-color: var(--zed-primary);
        }
        .mod-hd {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 1rem 1.3rem;
        cursor: pointer;
        transition: background 0.14s;
        user-select: none;
        }
        .mod-hd:hover {
        background: var(--G50);
        }
        .mn {
        font-size: 2rem;
        font-weight: 800;
        color: var(--G200);
        min-width: 22px;
        line-height: 1;
        transition: color 0.22s;
        flex-shrink: 0;
        }
        .mod.active .mn {
        color: var(--zed-primary);
        }
        .mod.done .mn {
        color: var(--zed-primary);
        }
        .mico {
        width: 38px;
        height: 38px;
        border-radius: 9px;
        background: var(--G50);
        border: 1px solid var(--G150);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 17px;
        color: var(--G400);
        flex-shrink: 0;
        transition: all 0.25s;
        }

        .mod.active .mico {
        background: var(--zed-primary);
        border-color: var(--zed-primary);
        color: #fff;
        box-shadow: 0 3px 12px rgba(200, 16, 46, 0.28);
        }
        .mod.done .mico {
        background: #fff;
        border-color: var(--zed-primary);
        color: var(--zed-primary);
        }
        .mmeta {
        flex: 1;
        min-width: 0;
        }
        .mtitle {
        font-size: 1.5rem;
        font-weight: 500;
        /* font-family: poppins, sans-serif; */
        color: var(--zed-dark-text);
        line-height: 1.3;
        }
        .msub {
        font-size: 1rem;
        color: var(--zed-secondary);
        margin-top: 2px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        }
        .mright {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-shrink: 0;
        }
        .badge {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        padding: 3px 9px;
        border-radius: 100px;
        }
        .b-s {
        background: rgba(232,17,26,.08);
        color: var(--zed-primary);
        border: 1px solid rgba(200, 16, 46, 0.22);
        }
        .b-l {
        background: var(--G50);
        color: var(--G400);
        border: 1px solid var(--G200);
        }
        .b-f {
        background: var(--zed-primary);
        color: #fff;
        }
        .b-d {
        background: rgba(0, 184, 112, 0.1);
        color: var(--GR);
        border: 1px solid rgba(0, 184, 112, 0.25);
        }
        .mchev {
        font-size: 18px;
        color: var(--G300);
        transition:
            transform 0.25s,
            color 0.22s;
        }
        .mod.open .mchev {
        transform: rotate(90deg);
        color: var(--zed-primary);
        }

        /* BODY */
        .mbody {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.48s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .mbody.open {
        max-height: 4000px;
        }
        .minner {
        padding: 1.4rem 1.3rem 1.8rem 5.2rem;
        border-top: 1px solid var(--G100);
        background: var(--G50);
        }

        /* TEXT */
        .l-sub {
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: 0.13em;
        text-transform: uppercase;
        color: var(--zed-primary);
        margin-bottom: 0.4rem;
        }
        .l-head {
        font-size: 1.05rem;
        font-weight: 700;
        line-height: 1.4;
        margin-bottom: 0.5rem;
        letter-spacing: -0.01em;
        }
        .l-body {
        color: var(--zed-secondary);
        line-height: 1.82;
        margin-bottom: 1.2rem;
        }
        .l-body b {
        color: var(--zed-dark-text);
        font-weight: 600;
        }

        /* DARK CHART BOX */
        .cbox {
        background: #fff;
        border-radius: 12px;
        padding: 1.2rem;
        margin-bottom: 1.2rem;
        border: 1px solid var(--zed-primary);
        position: relative;
        overflow: hidden;
        }

        .cbox::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 1px;
        background: linear-gradient(
            90deg,
            transparent,
            rgba(200, 16, 46, 0.6),
            transparent
        );
        }
        .cb-head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.9rem;
        }
        .cb-lbl {
        color: var(--zed-primary);
        letter-spacing: 0.08em;
        text-transform: uppercase;
        display: flex;
        align-items: center;
        gap: 6px;
        }
        .cb-lbl i {
        font-size: 1.5rem;
        color: var(--zed-primary);
        }
        .cb-sub {
        font-size: 10px;
        color: rgba(255, 255, 255, 0.18);
        font-weight: 600;
        }

        /* MARKET TICKER CARDS */
        .market-strip {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
        margin-bottom: 1.2rem;
        }
        .mkt-card {
        background: var(--W);
        border: 1px solid var(--G150);
        border-radius: 10px;
        padding: 0.85rem 1rem;
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.06);
        transition: all 0.22s;
        position: relative;
        overflow: hidden;
        }
        .mkt-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--zed-primary);
        border-radius: 3px 3px 0 0;
        }
        .mkt-card:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        transform: translateY(-2px);
        }
        .mc-sym {
        font-size: 1rem;
        font-weight: 800;
        color: var(--zed-dark-text);
        margin-bottom: 2px;
        }
        .mc-name {
        color: var(--G400);
        margin-bottom: 0.5rem;
        }
        .mc-price {
        font-size: 1.1rem;
        font-weight: 800;
        color: var(--zed-dark-text);
        margin-bottom: 2px;
        }
        .mc-chg {
        font-size: 0.78rem;
        font-weight: 700;
        }
        .mc-chg.up {
        color: var(--zed-primary);
        }
        .mc-chg.dn {
        color: var(--zed-primary);
        }
        .mc-bar {
        height: 4px;
        background: var(--G100);
        border-radius: 2px;
        overflow: hidden;
        margin-top: 0.5rem;
        }
        .mc-bar-fill {
        height: 100%;
        border-radius: 2px;
        animation: barIn 1.2s ease forwards 0.4s;
        width: 0;
        }

        /* STAT GRID */
        .sgrid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
        margin-bottom: 1.2rem;
        }
        .sgrid.two {
        grid-template-columns: 1fr 1fr;
        }
        .sbox {
        background: var(--W);
        border: 1px solid var(--G150);
        border-radius: 10px;
        padding: 0.75rem 0.85rem;
        text-align: center;
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.06);
        transition: all 0.22s;
        }
        .sbox:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.09);
        }
        .sbox.r {
        /* background: rgba(200, 16, 46, 0.05); */
        border-color: #ff0000;
        }
        .sbox.g {
        /* background: rgba(0, 184, 112, 0.05); */
        border-color: #ff0000;
        }
        .sbox.a {
        /* background: rgba(232, 150, 10, 0.05); */
        border-color: var(--zed-primary);
        }
        .sbox.b { 
        border-color: var(--zed-primary);
        }
        .sv {
        font-size: 1.55rem;
        font-weight: 800;
        color: var(--zed-dark-text);
        line-height: 1;
        }
        .sbox.r .sv {
        color: var(--zed-primary);
        }
        .sbox.g .sv {
        color: var(--zed-primary);
        }
        .sbox.a .sv {
        color: var(--zed-primary);
        }
        .sbox.b .sv {
        color: var(--zed-primary);
        }
        .sk { 
        color: var(--zed-secondary);
        letter-spacing: 0.05em;
        text-transform: uppercase;
        margin-top: 4px;
        }

        /* TWO COL */
        .two {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 8px;
        margin-bottom: 1.2rem;
        }
        .tc {
        background: var(--W);
        border: 1px solid var(--G150);
        border-radius: 10px;
        padding: 0.85rem 1rem;
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.06);
        transition: all 0.22s;
        }
        .tc:hover {
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }
        .tc.r {
        /* background: rgba(200, 16, 46, 0.04); */
        border-color: rgba(200, 16, 46, 0.18);
        }
        .tc.g {
        /* background: rgba(200, 16, 46, 0.04); */
        border-color: rgba(200, 16, 46, 0.18);
        }
        .tc.a {
        /* background: rgba(232, 150, 10, 0.04); */
        border-color: rgba(200, 16, 46, 0.18);
        }
        .tc-h {
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: 0.09em;
        text-transform: uppercase;
        color: var(--G400);
        margin-bottom: 0.55rem;
        display: flex;
        align-items: center;
        gap: 5px;
        }
        .tc.r .tc-h {
        color: var(--zed-primary);
        }
        .tc.g .tc-h {
        color: var(--zed-primary);
        }
        .tc.a .tc-h {
        color: var(--zed-primary);
        }
        .tc-row {
        color: var(--zed-secondary);
        padding: 2px 0;
        display: flex;
        align-items: flex-start;
        gap: 6px;
        line-height: 1.6;
        }
        .tc-row::before {
        content: "";
        width: 4px;
        height: 4px;
        border-radius: 50%;
        flex-shrink: 0;
        margin-top: 7px;
        background: var(--zed-primary);
        }
        .tc.r .tc-row::before {
        background: var(--zed-primary);
        }
        .tc.g .tc-row::before {
        background: var(--zed-primary);
        }

        /* RULES CARD */
        .rules {
        border-left: 4px solid var(--zed-primary);
        background: var(--W);
        border-radius: 0 10px 10px 0;
        padding: 0.9rem 1.1rem;
        margin-bottom: 1.2rem;
        border-top: 1px solid var(--G150);
        border-right: 1px solid var(--G150);
        border-bottom: 1px solid var(--G150);
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.05);
        }

        .rules.g {
        border-left-color: var(--GR);
        }
        .rules.a {
        border-left-color: var(--AM);
        }
        .rules.b {
        border-left-color: var(--zed-primary);
        }
        .r-title {
        font-size: 1rem;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--zed-primary);
        margin-bottom: 0.72rem;
        display: flex;
        align-items: center;
        gap: 6px;
        }
        .rules.g .r-title {
        color: var(--GR);
        }
        .rules.a .r-title {
        color: var(--AM);
        }
        .rules.b .r-title {
        color: var(--zed-primary);
        }
        .r-title i {
        font-size: 13px;
        }
        .rrow {
        display: flex;
        align-items: flex-start;
        gap: 9px;
        padding: 3px 0;
        font-size: 0.8rem;
        line-height: 1.7;
        }
        .rrow b {
        color: var(--zed-dark-text);
        font-weight: 600;
        }
        .rdot {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        flex-shrink: 0;
        margin-top: 7px;
        background: var(--zed-primary);
        animation: pulse 3s ease infinite;
        }
        .rules.g .rdot {
        background: var(--GR);
        }
        .rules.a .rdot {
        background: var(--AM);
        }
        .rules.b .rdot {
        background: var(--zed-primary);
        }

        /* STEPS */
        .steps {
        display: flex;
        flex-direction: column;
        gap: 7px;
        margin-bottom: 1.2rem;
        position: relative;
        }
        .steps::before {
        content: "";
        position: absolute;
        left: 20px;
        top: 20px;
        bottom: 20px;
        width: 1px;
        background: linear-gradient(
            180deg,
            rgba(200, 16, 46, 0.4),
            rgba(200, 16, 46, 0.05)
        );
        z-index: 0;
        }
        .step {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 0.8rem 1rem;
        background: var(--W);
        border: 1px solid var(--G150);
        border-radius: 10px;
        transition: 0.22s;
        position: relative;
        z-index: 1;
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.05);
        }
        .step:hover {
        border-color: rgba(200, 16, 46, 0.3);
        box-shadow: 0 4px 14px rgba(200, 16, 46, 0.08);
        transform: translateX(3px);
        }
        .step-n {
        width: 25px;
        height: 25px;
        background: var(--zed-primary);
        color: #fff;
        font-size: 0.8rem;
        font-weight: 800;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 3px 10px rgba(200, 16, 46, 0.28);
        }
        .step-t {
        font-size: 0.82rem;
        font-weight: 700;
        color: var(--zed-dark-text);
        margin-bottom: 1px;
        }
        .step-d {
        color: var(--zed-secondary);
        line-height: 1.55;
        }

        /* NEWS TABLE */
        .news-table {
        background: var(--W);
        border: 1px solid var(--G150);
        border-radius: 11px;
        overflow: hidden;
        margin-bottom: 1.2rem;
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.05);
        }
        .nt-head {
        display: grid;
        grid-template-columns: 80px 1fr 90px 90px;
        gap: 0;
        background: var(--G50);
        border-bottom: 1px solid var(--G100);
        }
        .nt-hcell {
        padding: 0.6rem 0.9rem;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--G400);
        }
        .nt-row {
        display: grid;
        grid-template-columns: 80px 1fr 90px 90px;
        gap: 0;
        border-bottom: 1px solid var(--G100);
        transition: background 0.15s;
        }
        .nt-row:last-child {
        border-bottom: none;
        }
        .nt-row:hover {
        background: var(--G50);
        }
        .nt-cell {
        padding: 0.65rem 0.9rem;
        font-size: 1rem;
        color: var(--G600);
        display: flex;
        align-items: center;
        }
        .impact {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.05em;
        text-transform: uppercase;
        padding: 3px 8px;
        border-radius: 100px;
        }
        .imp-h {
        background: rgba(200, 16, 46, 0.1);
        color: var(--zed-primary);
        }
        .imp-m {
        background: #eeeeee;
        color: var(--zed-secondary);
        }
        .imp-l {
        background: rgba(0, 184, 112, 0.1);
        color: var(--GR);
        }
        .fore-pos {
        font-weight: 700;
        color: var(--zed-secondary);
        }
        .fore-neg {
        font-weight: 700;
        color: var(--zed-primary);
        }

        /* SR ZONES */
        .sr-visual {
        background: #fff;
        border-radius: 12px;
        padding: 1.2rem;
        margin-bottom: 1.2rem;
        border: 1px solid var(--zed-primary);
        }
        .sr-head {
        font-size: 15px;
        color: var(--zed-primary);
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 1rem;
        }
        .sr-item {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 8px;
        }
        .sr-line {
        flex: 1;
        height: 2px;
        border-radius: 1px;
        position: relative;
        overflow: hidden;
        }
        .sr-line::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 0;
        border-radius: 1px;
        animation: barIn 1.2s ease forwards 0.5s;
        }
        .sr-label {
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        padding: 3px 10px;
        border-radius: 100px;
        white-space: nowrap;
        min-width: 80px;
        text-align: center;
        }
        .sr-price {
        font-size: 0.78rem;
        font-weight: 600;
        min-width: 58px;
        text-align: right;
        }
        .sr-r {
        /* background: rgba(200, 16, 46, 0.2); */
        color: var(--zed-primary);
        border: 1px solid rgba(200, 16, 46, 0.3);
        }
        .sr-rline {
        background: rgba(200, 16, 46, 0.35);
        }
        .sr-rline::after {
        background: var(--zed-primary);
        }
        .sr-rprice {
        color: #ff6b8a;
        }
        .sr-s {
        /* background: rgba(0, 184, 112, 0.15); */
        color: var(--zed-dark-text);
        border: 1px solid rgba(0, 184, 112, 0.25);
        }
        .sr-sline {
        background: rgba(0, 184, 112, 0.3);
        }
        .sr-sline::after {
        background: var(--zed-dark-text);
        }
        .sr-sprice {
        color: var(--zed-dark-text);
        }
        .sr-z {
        /* background: rgba(232, 150, 10, 0.15); */
        color: var(--zed-secondary);
        border: 1px solid rgba(232, 150, 10, 0.25);
        }
        .sr-zline {
        background: rgba(232, 150, 10, 0.25);
        height: 8px !important;
        opacity: 0.7;
        }
        .sr-zline::after {
        background: var(--zed-secondary);
        }
        .sr-zprice {
        color: var(--zed-secondary);
        }
        .sr-p {
        background: rgba(255, 255, 255, 0.07);
        color: rgba(255, 255, 255, 0.4);
        }
        .sr-pline {
        background: rgba(255, 255, 255, 0.14);
        }
        .sr-pline::after {
        display: none;
        }
        .sr-pprice {
        color: rgba(255, 255, 255, 0.35);
        }

        /* CHECKLIST */
        .cl-status {
        font-size: 0.78rem;
        color: var(--G400);
        font-weight: 600;
        padding: 4px 8px;
        margin-bottom: 7px;
        transition: all 0.3s;
        }
        .cl-wrap {
        margin-bottom: 1rem;
        }
        .ci {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 6px 10px;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.18s;
        font-size: 0.82rem;
        color: var(--G600);
        border: 1px solid transparent;
        }
        .ci:hover {
        background: var(--W);
        border-color: var(--G200);
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.05);
        }
        .ci.checked {
        background: rgba(0, 184, 112, 0.05);
        border-color: rgba(0, 184, 112, 0.2);
        }
        .ci-box {
        width: 18px;
        height: 18px;
        border: 2px solid var(--G200);
        border-radius: 4px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        font-weight: 700;
        color: #fff;
        transition: 0.22s;
        }
        .ci.checked .ci-box {
        background: var(--GR);
        border-color: var(--GR);
        box-shadow: 0 2px 8px rgba(0, 184, 112, 0.28);
        }
        .ci.checked .ci-text {
        text-decoration: line-through;
        color: var(--G300);
        }

        /* BTN */
        .btn-done {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: var(--zed-primary);
        color: #fff;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        padding: 9px 20px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        transition: 0.22s;
        margin-top: 0.4rem;
        box-shadow: 0 3px 12px rgba(200, 16, 46, 0.22);
        }
        .btn-done:hover {
        background: var(--Rd);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(200, 16, 46, 0.32);
        }
        .btn-done:active {
        transform: scale(0.97);
        }
        .btn-done i {
        font-size: 15px;
        }

        /* SIDEBAR */
        .sidebar {
        position: sticky;
        top: 100px;
        height: fit-content;
        }
        .sb-card {
        background: var(--W);
        border: 1px solid var(--G150);
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 12px;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.07);
        }
        .sb-hd {
        background: linear-gradient(135deg, var(--zed-dark-text));
        padding: 1.1rem 1.3rem;
        display: flex;
        align-items: center;
        gap: 9px;
        position: relative;
        overflow: hidden;
        }
        .sb-hd::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(
            90deg,
            transparent,
            var(--zed-primary),
            transparent
        );
        }
        .sb-hd i {
        font-size: 17px;
        color: var(--zed-primary);
        }
        .sb-hd h3 {
        font-size: 1rem;
        font-weight: 700;
        color: #fff;
        }
        .sb-body {
        padding: 1.1rem 1.3rem;
        }
        .cs-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.52rem 0;
        border-bottom: 1px solid var(--G100);
        }
        .cs-row:last-child {
        border-bottom: none;
        }
        .cs-l {
        color: var(--zed-dark-text);
        display: flex;
        align-items: center;
        gap: 5px;
        }
        .cs-l i {
        font-size: 15px;
        color: var(--zed-secondary);
        }
        .cs-v {
        font-size: 0.78rem;
        font-weight: 700;
        color: var(--zed-dark-text);
        }
        .cs-v.r {
        color: var(--zed-primary);
        }
        .cs-v.g {
        color: var(--GR);
        }
        .sb-nav {
        padding: 0.6rem 0;
        }
        .sb-nav-lbl {
        font-size: 0.9rem;
        font-weight: 700;
        letter-spacing: 0.11em;
        text-transform: uppercase;
        color: var(--zed-dark-text);
        padding: 0.3rem 1.3rem 0.7rem;
        display: flex;
        align-items: center;
        gap: 7px;
        }
        .sb-nav-lbl::after {
        content: "";
        flex: 1;
        height: 1px;
        background: var(--G100);
        }
        .sb-item {
        display: flex;
        align-items: center;
        gap: 9px;
        padding: 0.52rem 1.3rem;
        cursor: pointer;
        transition: 0.18s;
        border-left: 3px solid transparent;
        }
        .sb-item:hover {
        background: var(--G50);
        border-left-color: var(--G200);
        }
        .sb-item.active {
        background: rgba(200, 16, 46, 0.05);
        border-left-color: var(--zed-primary);
        }
        .sb-item.done {
        background: rgba(0, 184, 112, 0.04);
        border-left-color: var(--GR);
        }
        .sb-n {
        font-size: 0.78rem;
        font-weight: 800;
        color: var(--zed-secondary);
        min-width: 16px;
        flex-shrink: 0;
        }
        .sb-item.active .sb-n {
        color: var(--zed-primary);
        }
        .sb-item.done .sb-n {
        color: var(--GR);
        }
        .sb-text {
        color: var(--zed-dark-text);
        flex: 1;
        line-height: 1.3;
        }
        .sb-item.active .sb-text {
        color: var(--zed-primary);
        font-weight: 600;
        }
        .sb-item.done .sb-text {
        color: var(--G400);
        }
        .sb-tick {
        font-size: 13px;
        color: var(--GR);
        }

        /* FAQ */
        .faq-sec {
        background: var(--W);
        border-top: 2px solid var(--G100);
        padding: 4rem 0;
        }
        .faq-wrap {
        /* max-width: 1100px; */
        margin: 0 auto;
        /* padding:0 2rem; */
        }
        .faq-hd {
        text-align: center;
        margin-bottom: 2.5rem;
        }
        .faq-hd h2 {
        font-size: 1.9rem;
        font-weight: 800;
        color: var(--zed-dark-text);
        letter-spacing: -0.015em;
        margin-bottom: 0.5rem;
        }
        .faq-hd h2 span {
        color: var(--zed-primary);
        }
        .faq-hd p {
        font-size: 0.875rem;
        color: var(--G500);
        max-width: 440px;
        margin: 0 auto;
        line-height: 1.7;
        }
        .faq-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0;
        border: 1px solid var(--G150);
        border-radius: 12px;
        overflow: hidden;
        background: var(--G150);
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.05);
        }
        .fi {
        background: var(--W);
        }
        .fq {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 1rem 1.3rem;
        cursor: pointer;
        gap: 12px;
        transition: background 0.14s;
        }
        /* .fq:hover{background:var(--G50)} */
        .fq-t {
        font-size: 0.85rem;
        font-weight: 600;
        color: var(--zed-dark-text);
        flex: 1;
        line-height: 1.5;
        }
        .fq-ico {
        font-size: 16px;
        color: var(--G300);
        transition:
            transform 0.25s,
            color 0.2s;
        flex-shrink: 0;
        margin-top: 1px;
        }
        .fi.open .fq-ico {
        transform: rotate(180deg);
        color: var(--zed-primary);
        }
        /* .fi.open .fq{background:rgba(200,16,46,.04)}  */
        .fa {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.32s ease;
        }
        .fa.open {
        max-height: 400px;
        }
        .fa-i {
        padding: 0.2rem 1.3rem 1.1rem;
        font-size: 0.82rem;
        color: var(--G600);
        line-height: 1.85;
        border-top: 1px solid var(--G100);
        }
        .fa-i b {
        color: var(--zed-dark-text);
        font-weight: 600;
        }

        /* FOOTER */
        .footer {
        background: linear-gradient(135deg, var(--navy), var(--navy2));
        padding: 3rem 0 1.8rem;
        border-top: 3px solid var(--zed-primary);
        }
        .foot {
        max-width: 1100px;
        margin: 0 auto;
        padding: 0 2rem;
        }
        .fg {
        display: grid;
        grid-template-columns: 1.7fr 1fr 1fr 1fr;
        gap: 2.5rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        margin-bottom: 1.8rem;
        }
        .f-logo {
        font-size: 1.35rem;
        font-weight: 800;
        color: #fff;
        margin-bottom: 0.65rem;
        }
        .f-logo span {
        color: var(--zed-primary);
        }
        .f-tag {
        font-size: 0.78rem;
        color: rgba(255, 255, 255, 0.35);
        line-height: 1.7;
        max-width: 200px;
        }
        .f-col h4 {
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.28);
        margin-bottom: 0.85rem;
        }
        .f-col ul {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 6px;
        }
        .f-col a {
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.42);
        text-decoration: none;
        transition: color 0.2s;
        }
        .f-col a:hover {
        color: var(--zed-primary);
        }
        .fb {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 8px;
        }
        .fc {
        font-size: 0.72rem;
        color: rgba(255, 255, 255, 0.2);
        }
        .fl {
        display: flex;
        gap: 1.2rem;
        flex-wrap: wrap;
        }
        .fl a {
        font-size: 0.72rem;
        color: rgba(255, 255, 255, 0.2);
        text-decoration: none;
        transition: color 0.2s;
        }
        .fl a:hover {
        color: rgba(255, 255, 255, 0.5);
        }

        @media (max-width: 900px) {
        .layout {
            grid-template-columns: 1fr;
        }
        .sidebar {
            position: static;
        }
        .hero-wrap {
            grid-template-columns: 1fr;
        }
        .hero-panel {
            display: none;
        }
        }
        @media (max-width: 640px) {
        .hero-strip {
            grid-template-columns: 1fr 1fr;
        }
        .faq-grid {
            grid-template-columns: 1fr;
        }
        .fg {
            grid-template-columns: 1fr 1fr;
        }
        .market-strip,
        .two,
        .sgrid {
            grid-template-columns: 1fr 1fr;
        }
        .nt-head,
        .nt-row {
            grid-template-columns: 70px 1fr 80px;
        }
        }

    </style>
    
    <!-- PROGRESS -->
    <div class="prog-bar">
        <div class="container">
            <div class="pb-row">
                <span class="pb-lbl">Progress</span>
                <div class="pb-track"><div class="pb-fill" id="pbar"></div></div>
                <span class="pb-pct" id="ppct">0%</span>
                <span class="pb-cnt" id="pcnt">0 / 9</span>
            </div>
        </div>
    </div>

    <!-- MAIN LAYOUT -->
    <div class="page">
        <div class="container">

            <div class="layout">

                <main> 

                    <div class="zed-sec-head mt-5 mb-3">  
                        <h2 class="zed-sec-title">Core Lessons | Market Analysis</h2> 
                        <div class="underline"></div>
                    </div>

                    <style>
                        .underline {
                            width: 75px;
                            height: 4px;
                            background-color: var(--zed-primary);
                            margin: 10px 0  0;
                            padding: 4px;
                        } 
                        .zed-sec-title {
                            font-family: 'Poppins', serif;
                            font-size: 2.5rem;
                            font-weight: 700;
                            margin-bottom: 25px;
                            color: var(--zed-dark-text);
                        }
                    </style>
                    <!-- L1 DAILY MARKET OVERVIEW -->
                    <article class="mod active open rv" data-id="1">
                        <div class="mod-hd" id="m1" onclick="tog(1)">
                        <div class="mn">01</div><div class="mico"><i class="ti ti-world"></i></div>
                        <div class="mmeta"><div class="mtitle">Daily Market Overview</div><div class="msub">How to read the market before every trading session</div></div>
                        <div class="mright"><span class="badge b-s">Start Here</span><i class="ti ti-chevron-right mchev"></i></div>
                        </div>
                        <div class="mbody open">
                        <div class="minner">
                            <div class="l-sub">Market Structure</div>
                            <h2 class="l-head">Start Every Day With a Complete Market Picture.</h2>
                            <p class="l-body">A Daily Market Overview is a structured scan of the most important financial markets before the trading session begins. <b>It tells you what moved overnight, what the overall bias is and where the key levels sit</b> — so every decision you make during the day is informed, not reactive.</p>

                            <!-- ANIMATED MULTI-MARKET CHART -->
                            <div class="cbox">
                            <div class="cb-head"><span class="cb-lbl"><i class="ti ti-chart-line"></i>Multi-Market Daily Snapshot</span><span class="cb-sub">Indicative · Not Financial Advice</span></div>
                            <svg viewBox="0 0 520 140" width="100%" height="130" aria-label="Daily market overview showing EUR/USD, Gold and US30">
                                <defs>
                                <linearGradient id="dg1" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="rgba(184, 83, 0, 0.2)"/><stop offset="100%" stop-color="rgba(0,184,112,0)"/></linearGradient>
                                <linearGradient id="dg2" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="rgba(232,150,10,.2)"/><stop offset="100%" stop-color="rgba(232,150,10,0)"/></linearGradient>
                                </defs>
                                <!-- Grid -->
                                <line x1="0" y1="35" x2="520" y2="35" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <line x1="0" y1="75" x2="520" y2="75" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <line x1="0" y1="115" x2="520" y2="115" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <!-- EUR/USD -->
                                <path d="M10,120 L40,112 L70,116 L100,104 L130,109 L160,95 L190,100 L220,86 L250,91 L280,76 L310,81 L340,65 L370,70 L400,55 L430,60 L460,45 L490,50 L515,42" stroke="#ff0000" stroke-width="2" fill="none" stroke-dasharray="1000" stroke-dashoffset="1000" style="animation:traceL 2.5s ease forwards .3s"/>
                                <path d="M10,120 L40,112 L70,116 L100,104 L130,109 L160,95 L190,100 L220,86 L250,91 L280,76 L310,81 L340,65 L370,70 L400,55 L430,60 L460,45 L490,50 L515,42 L515,140 L10,140Z" fill="url(#dg1)" style="opacity:0;animation:fadeIn .5s ease forwards 2.7s"/>
                                <!-- Gold overlaid -->
                                <path d="M10,130 L40,122 L70,126 L100,115 L130,120 L160,108 L190,112 L220,98 L250,103 L280,89 L310,94 L340,78 L370,83 L400,68 L430,73 L460,58 L490,63 L515,55" stroke="#000" stroke-width="1.5" fill="none" opacity=".65" stroke-dasharray="1000" stroke-dashoffset="1000" style="animation:traceL 2.5s ease forwards .8s"/>
                                <!-- US30 -->
                                <path d="M10,128 L40,120 L70,122 L100,108 L130,114 L160,100 L190,106 L220,90 L250,97 L280,82 L310,88 L340,72 L370,78 L400,62 L430,68 L460,52 L490,58 L515,48" stroke="#7b7b7b" stroke-width="1.5" fill="none" opacity=".55" stroke-dasharray="5,4" stroke-dashoffset="1000" style="animation:traceL 2.5s ease forwards 1.2s"/>
                                <!-- Legend -->
                                <circle cx="12" cy="17" r="4" fill="#ff0000"/><text x="20" y="20" fill="#ff0000" font-size="9" font-weight="700" font-family="Inter">EUR/USD</text>
                                <circle cx="80" cy="17" r="4" fill="#ff0000"/><text x="88" y="20" fill="#ff0000" font-size="9" font-weight="700" font-family="Inter">XAU/USD (Gold)</text>
                                <circle cx="185" cy="17" r="4" fill="#ff0000"/><text x="193" y="20" fill="#ff0000" font-size="9" font-weight="700" font-family="Inter">US30 (Dow)</text>
                                <!-- Live dot -->
                                <circle cx="515" cy="42" r="5" fill="#ff0000" style="animation:pulse 1.5s ease infinite 3s;opacity:0;animation-fill-mode:both"/>
                            </svg>
                            </div>

                            <div class="market-strip">
                            <div class="mkt-card" style="--mc:#00B870"><div class="mc-sym">EUR/USD</div><div class="mc-name">Forex · Major</div><div class="mc-price">1.0854</div><div class="mc-chg up">▲ +0.23% Bullish</div><div class="mc-bar"><div class="mc-bar-fill" style="background:var(--zed-primary);--bw:72%;width:72%"></div></div></div>
                            <div class="mkt-card" style="--mc:#E8960A"><div class="mc-sym">XAU/USD</div><div class="mc-name">Gold · Commodity</div><div class="mc-price">$2,338</div><div class="mc-chg up">▲ +0.41% Bullish</div><div class="mc-bar"><div class="mc-bar-fill" style="background:var(--zed-primary);--bw:65%;width:65%"></div></div></div>
                            <div class="mkt-card" style="--mc:#C8102E"><div class="mc-sym">US30</div><div class="mc-name">Dow Jones · Index</div><div class="mc-price">39,420</div><div class="mc-chg dn">▼ −0.18% Bearish</div><div class="mc-bar"><div class="mc-bar-fill" style="background:var(--zed-primary);--bw:38%;width:38%"></div></div></div>
                            </div>

                            <div class="rules b">
                            <div class="r-title"><i class="ti ti-list-check"></i>Daily Overview — What to Check Every Morning</div>
                            <div class="rrow"><div class="rdot"></div><b>Session performance overnight:</b> what moved, by how much and in which direction</div>
                            <div class="rrow"><div class="rdot"></div><b>Overall market bias:</b> is risk-on or risk-off sentiment dominating across major assets</div>
                            <div class="rrow"><div class="rdot"></div><b>Key level proximity:</b> is price near a major support, resistance, or decision zone</div>
                            <div class="rrow"><div class="rdot"></div><b>News calendar:</b> what high-impact events are scheduled today — mark them before trading</div>
                            <div class="rrow"><div class="rdot"></div><b>Correlation check:</b> Gold, Dollar and equity indices often move in predictable relationships</div>
                            </div>
                            <button class="btn-done" onclick="markDone(1)"><i class="ti ti-check"></i>Mark Complete</button>
                        </div>
                        </div>
                    </article>

                    <!-- L2 FOREX MARKET ANALYSIS -->
                    <article class="mod rv" data-id="2">
                        <div class="mod-hd" onclick="tog(2)">
                        <div class="mn">02</div><div class="mico"><i class="ti ti-currency-euro"></i></div>
                        <div class="mmeta"><div class="mtitle">Forex Market Analysis</div><div class="msub">Reading currency pairs — structure, bias and key setups</div></div>
                        <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                        </div>
                        <div class="mbody">
                        <div class="minner">
                            <div class="l-sub">Currency Markets</div>
                            <h2 class="l-head">Forex Analysis Is the Foundation of Every Trade Decision.</h2>
                            <p class="l-body">Forex market analysis combines reading price structure, identifying trend direction, locating high-probability entry zones and aligning with the broader macro environment. <b>Without a clear analytical framework, every trade is a guess.</b></p>

                            <!-- FOREX ANALYSIS CHART -->
                            <div class="cbox">
                            <div class="cb-head"><span class="cb-lbl"><i class="ti ti-currency-euro"></i>EUR/USD — Trend Structure Analysis</span><span class="cb-sub">H4 Chart</span></div>
                            <svg viewBox="0 0 520 145" width="100%" height="135" aria-label="EUR/USD trend structure showing higher highs and higher lows with resistance and support zones">
                                <!-- Grid -->
                                <line x1="0" y1="35" x2="520" y2="35" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <line x1="0" y1="75" x2="520" y2="75" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <line x1="0" y1="115" x2="520" y2="115" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <!-- Resistance zone -->
                                <rect x="0" y="28" width="520" height="12" fill="rgba(200,16,46,.12)"/>
                                <text x="440" y="23" fill="rgba(200,16,46,.7)" font-size="8.5" font-weight="700" font-family="Inter">RESISTANCE ZONE</text>
                                <!-- Support zone -->
                                <rect x="0" y="108" width="520" height="12" fill="rgba(200,16,46,.12)"/>
                                <text x="450" y="132" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter">SUPPORT ZONE</text>
                                <!-- Price path (bullish structure) -->
                                <path d="M10,122 L45,108 L65,115 L100,98 L120,105 L155,85 L175,93 L210,72 L230,80 L265,58 L285,67 L320,45 L340,53 L375,35 L395,42 L430,28 L460,35 L490,22 L515,18" stroke="#ff0000" stroke-width="2.5" fill="none" stroke-dasharray="1100" stroke-dashoffset="1100" style="animation:traceL 3s ease forwards .3s"/>
                                <!-- HH markers -->
                                <circle cx="100" cy="98" r="4" fill="#ff0000" style="animation:scaleUp .3s ease forwards 1s;opacity:0;transform-origin:100px 98px"/>
                                <circle cx="210" cy="72" r="4" fill="#ff0000" style="animation:scaleUp .3s ease forwards 1.4s;opacity:0;transform-origin:210px 72px"/>
                                <circle cx="320" cy="45" r="4" fill="#ff0000" style="animation:scaleUp .3s ease forwards 1.8s;opacity:0;transform-origin:320px 45px"/>
                                <circle cx="430" cy="28" r="4" fill="#ff0000" style="animation:scaleUp .3s ease forwards 2.2s;opacity:0;transform-origin:430px 28px"/>
                                <text x="86" y="93" fill="rgba(184, 0, 0, 0.8)" font-size="8" font-family="Inter" font-weight="600" style="animation:fadeIn .3s ease forwards 1s;opacity:0">HH</text>
                                <text x="196" y="67" fill="rgba(184, 0, 0, 0.8)" font-size="8" font-family="Inter" font-weight="600" style="animation:fadeIn .3s ease forwards 1.4s;opacity:0">HH</text>
                                <text x="306" y="40" fill="rgba(184, 0, 0, 0.8)" font-size="8" font-family="Inter" font-weight="600" style="animation:fadeIn .3s ease forwards 1.8s;opacity:0">HH</text>
                                <!-- HL markers -->
                                <circle cx="65" cy="115" r="3" fill="rgba(184, 0, 0, 0.8)" style="animation:scaleUp .3s ease forwards 1.2s;opacity:0;transform-origin:65px 115px"/>
                                <circle cx="175" cy="93" r="3" fill="rgba(184, 0, 0, 0.8)" style="animation:scaleUp .3s ease forwards 1.6s;opacity:0;transform-origin:175px 93px"/>
                                <circle cx="285" cy="67" r="3" fill="rgba(184, 0, 0, 0.8)" style="animation:scaleUp .3s ease forwards 2s;opacity:0;transform-origin:285px 67px"/>
                                <text x="53" y="128" fill="rgba(184, 0, 0, 0.8)" font-size="8" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.2s;opacity:0">HL</text>
                                <text x="163" y="106" fill="rgba(184, 0, 0, 0.8)" font-size="8" font-family="Inter" style="animation:fadeIn .3s ease forwards 1.6s;opacity:0">HL</text>
                                <text x="273" y="80" fill="rgba(184, 0, 0, 0.8)" font-size="8" font-family="Inter" style="animation:fadeIn .3s ease forwards 2s;opacity:0">HL</text>
                                <!-- Entry arrow -->
                                <path d="M460,50 L460,35" stroke="#ff0000" stroke-width="1.5" stroke-dasharray="3,2" style="animation:fadeIn .5s ease forwards 2.5s;opacity:0"/>
                                <text x="465" y="50" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter" style="animation:fadeIn .5s ease forwards 2.5s;opacity:0">BUY ZONE</text>
                            </svg>
                            </div>

                            <div class="steps">
                            <div class="step"><div class="step-n">1</div><div><div class="step-t">Identify the higher timeframe trend</div><div class="step-d">Check H4 and Daily — is price making HH/HL (bullish) or LH/LL (bearish)? This is your non-negotiable bias.</div></div></div>
                            <div class="step"><div class="step-n">2</div><div><div class="step-t">Mark key support and resistance levels</div><div class="step-d">Identify prior swing highs, lows and horizontal levels from Daily chart. These are your decision zones.</div></div></div>
                            <div class="step"><div class="step-n">3</div><div><div class="step-t">Check for confluence</div><div class="step-d">Does price sit near a Fibonacci level, moving average, or round number? Multiple confluences raise probability.</div></div></div>
                            <div class="step"><div class="step-n">4</div><div><div class="step-t">Define the entry zone and wait</div><div class="step-d">Identify where you would enter on H1 or M15. Wait for price to come to you — never chase entries.</div></div></div>
                            <div class="step"><div class="step-n">5</div><div><div class="step-t">Set stop, target and R:R before entry</div><div class="step-d">Calculate lot size based on stop distance. Minimum 1:1.5 R:R required. If it does not qualify — skip it.</div></div></div>
                            </div>
                            <button class="btn-done" onclick="markDone(2)"><i class="ti ti-check"></i>Mark Complete</button>
                        </div>
                        </div>
                    </article>

                    <!-- L3 GOLD MARKET ANALYSIS -->
                    <article class="mod rv" data-id="3">
                        <div class="mod-hd" onclick="tog(3)">
                        <div class="mn">03</div><div class="mico"><i class="ti ti-square-rounded-letter-g"></i></div>
                        <div class="mmeta"><div class="mtitle">Gold Market Analysis</div><div class="msub">XAU/USD — structure, drivers and price zones</div></div>
                        <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                        </div>
                        <div class="mbody">
                        <div class="minner">
                            <div class="l-sub">Commodity Market</div>
                            <h2 class="l-head">Gold is the World's Safe Haven. Know When it Moves.</h2>
                            <p class="l-body">Gold (XAU/USD) is one of the most widely traded instruments in the world. It moves on a unique combination of <b>USD strength, geopolitical risk, inflation data and real interest rates.</b> Understanding these drivers is essential before analysing any Gold chart.</p>

                            <!-- GOLD CANDLE CHART -->
                            <div class="cbox">
                            <div class="cb-head"><span class="cb-lbl"><i class="ti ti-square-rounded-letter-g"></i>XAU/USD — Gold Candlestick Chart</span><span class="cb-sub">Daily Chart</span></div>
                            <svg viewBox="0 0 520 145" width="100%" height="135" aria-label="Gold candlestick chart with support and resistance levels">
                                <!-- Grid -->
                                <line x1="0" y1="35" x2="520" y2="35" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <line x1="0" y1="75" x2="520" y2="75" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <line x1="0" y1="115" x2="520" y2="115" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <!-- Resistance -->
                                <line x1="0" y1="30" x2="520" y2="30" stroke="#ff0000" stroke-width="1.5" stroke-dasharray="6,4"/>
                                <text x="440" y="26" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter">RES $2,380</text>
                                <!-- Support -->
                                <line x1="0" y1="112" x2="520" y2="112" stroke="#ff0000" stroke-width="1.5" stroke-dasharray="6,4"/>
                                <text x="445" y="127" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter">SUP $2,290</text>
                                <!-- Candles (animated) -->
                                <g style="animation:fadeIn .4s ease forwards .5s;opacity:0">
                                <!-- Bullish candles -->
                                <line x1="32" y1="112" x2="32" y2="90" stroke="#7b7b7b" stroke-width="1.5"/><rect x="27" y="96" width="10" height="16" rx="1" fill="#7b7b7b"/>
                                <line x1="65" y1="106" x2="65" y2="82" stroke="#7b7b7b" stroke-width="1.5"/><rect x="60" y="88" width="10" height="18" rx="1" fill="#7b7b7b"/>
                                <line x1="130" y1="95" x2="130" y2="70" stroke="#7b7b7b" stroke-width="1.5"/><rect x="125" y="76" width="10" height="19" rx="1" fill="#7b7b7b"/>
                                <line x1="163" y1="88" x2="163" y2="62" stroke="#7b7b7b" stroke-width="1.5"/><rect x="158" y="68" width="10" height="20" rx="1" fill="#7b7b7b"/>
                                <line x1="260" y1="72" x2="260" y2="48" stroke="#7b7b7b" stroke-width="1.5"/><rect x="255" y="54" width="10" height="18" rx="1" fill="#7b7b7b"/>
                                <line x1="325" y1="62" x2="325" y2="38" stroke="#7b7b7b" stroke-width="1.5"/><rect x="320" y="44" width="10" height="18" rx="1" fill="#7b7b7b"/>
                                <line x1="390" y1="52" x2="390" y2="28" stroke="#7b7b7b" stroke-width="1.5"/><rect x="385" y="34" width="10" height="18" rx="1" fill="#7b7b7b"/>
                                <line x1="455" y1="45" x2="455" y2="22" stroke="#7b7b7b" stroke-width="1.5"/><rect x="450" y="28" width="10" height="17" rx="1" fill="#7b7b7b"/>
                                <line x1="488" y1="40" x2="488" y2="18" stroke="#7b7b7b" stroke-width="1.5"/><rect x="483" y="24" width="10" height="16" rx="1" fill="#7b7b7b"/>
                                <!-- Bearish candles -->
                                <line x1="98" y1="92" x2="98" y2="72" stroke="#ff0000" stroke-width="1.5"/><rect x="93" y="76" width="10" height="16" rx="1" fill="#ff0000"/>
                                <line x1="196" y1="78" x2="196" y2="58" stroke="#ff0000" stroke-width="1.5"/><rect x="191" y="62" width="10" height="16" rx="1" fill="#ff0000"/>
                                <line x1="228" y1="70" x2="228" y2="50" stroke="#ff0000" stroke-width="1.5"/><rect x="223" y="54" width="10" height="16" rx="1" fill="#ff0000"/>
                                <line x1="293" y1="60" x2="293" y2="40" stroke="#ff0000" stroke-width="1.5"/><rect x="288" y="44" width="10" height="16" rx="1" fill="#ff0000"/>
                                <line x1="358" y1="50" x2="358" y2="30" stroke="#ff0000" stroke-width="1.5"/><rect x="353" y="34" width="10" height="16" rx="1" fill="#ff0000"/>
                                <line x1="422" y1="44" x2="422" y2="24" stroke="#ff0000" stroke-width="1.5"/><rect x="417" y="28" width="10" height="16" rx="1" fill="#ff0000"/>
                                </g>
                                <!-- Price label -->
                                <text x="12" y="17" fill="#ff0000" font-size="9" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 1.2s;opacity:0">XAU/USD · $2,338 · Bullish Structure</text>
                            </svg>
                            </div>

                            <div class="sgrid">
                            <div class="sbox a"><div class="sv">$2,338</div><div class="sk">Gold Current Price</div></div>
                            <div class="sbox g"><div class="sv">$2,380</div><div class="sk">Next Resistance</div></div>
                            <div class="sbox r"><div class="sv">$2,290</div><div class="sk">Key Support Level</div></div>
                            </div>
                            <div class="two">
                            <div class="tc g"><div class="tc-h"><i class="ti ti-trending-up"></i>Gold Bullish Factors</div><div class="tc-row">USD weakening — inverse correlation</div><div class="tc-row">Rising geopolitical tensions globally</div><div class="tc-row">High inflation — store of value demand</div><div class="tc-row">Central bank gold buying at record levels</div></div>
                            <div class="tc r"><div class="tc-h"><i class="ti ti-trending-down"></i>Gold Bearish Factors</div><div class="tc-row">USD strengthening on hawkish Fed data</div><div class="tc-row">Rising real interest rates — higher yields</div><div class="tc-row">Risk-on environment — equities rallying</div><div class="tc-row">Falling inflation expectations (CPI drops)</div></div>
                            </div>
                            <button class="btn-done" onclick="markDone(3)"><i class="ti ti-check"></i>Mark Complete</button>
                        </div>
                        </div>
                    </article>

                    <!-- L4 INDICES ANALYSIS -->
                    <article class="mod rv" data-id="4">
                        <div class="mod-hd" onclick="tog(4)">
                        <div class="mn">04</div><div class="mico"><i class="ti ti-chart-area"></i></div>
                        <div class="mmeta"><div class="mtitle">Indices Market Analysis</div><div class="msub">US30, SPX500, NAS100 — reading global equity markets</div></div>
                        <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                        </div>
                        <div class="mbody">
                        <div class="minner">
                            <div class="l-sub">Equity Indices</div>
                            <h2 class="l-head">Indices Tell You the Story of the Entire Economy.</h2>
                            <p class="l-body">Equity indices measure the aggregate performance of a basket of stocks. Trading them gives you exposure to the broad direction of entire economies. <b>US30, SPX500 and NAS100 are the three most traded indices in the world</b> — each with a distinct character and set of drivers.</p>

                            <!-- INDICES COMPARISON CHART -->
                            <div class="cbox">
                            <div class="cb-head"><span class="cb-lbl"><i class="ti ti-chart-area"></i>Major Indices — Comparative Performance</span><span class="cb-sub">Weekly View</span></div>
                            <svg viewBox="0 0 520 140" width="100%" height="130" aria-label="US30, SPX500 and NAS100 comparative chart">
                                <line x1="0" y1="40" x2="520" y2="40" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <line x1="0" y1="80" x2="520" y2="80" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <line x1="0" y1="120" x2="520" y2="120" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <!-- US30 -->
                                <path d="M10,118 L55,105 L100,110 L145,95 L190,100 L235,83 L280,88 L325,72 L370,77 L415,60 L460,65 L510,50" stroke="#ff0000" stroke-width="2" fill="none" stroke-dasharray="900" stroke-dashoffset="900" style="animation:traceL 2.5s ease forwards .3s"/>
                                <!-- SPX500 -->
                                <path d="M10,115 L55,102 L100,107 L145,91 L190,96 L235,78 L280,83 L325,66 L370,71 L415,54 L460,59 L510,44" stroke="#7b7b7b" stroke-width="2" fill="none" stroke-dasharray="900" stroke-dashoffset="900" style="animation:traceL 2.5s ease forwards .7s"/>
                                <!-- NAS100 -->
                                <path d="M10,112 L55,98 L100,103 L145,86 L190,91 L235,72 L280,78 L325,60 L370,65 L415,47 L460,52 L510,38" stroke="#000" stroke-width="2" fill="none" stroke-dasharray="900" stroke-dashoffset="900" style="animation:traceL 2.5s ease forwards 1.1s"/>
                                <!-- Legend -->
                                <rect x="10" y="12" width="12" height="3" rx="1" fill="#ff0000"/><text x="26" y="17" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter">US30 Dow Jones</text>
                                <rect x="135" y="12" width="12" height="3" rx="1" fill="#ff0000"/><text x="151" y="17" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter">SPX500 S&amp;P 500</text>
                                <rect x="265" y="12" width="12" height="3" rx="1" fill="#ff0000"/><text x="281" y="17" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter">NAS100 Nasdaq</text>
                                <!-- Dots -->
                                <circle cx="510" cy="50" r="4" fill="#ff0000" style="animation:pulse 1.5s ease infinite 3s;opacity:0;animation-fill-mode:both"/>
                                <circle cx="510" cy="44" r="4" fill="#7b7b7b" style="animation:pulse 1.5s ease infinite 3.2s;opacity:0;animation-fill-mode:both"/>
                                <circle cx="510" cy="38" r="4" fill="#000" style="animation:pulse 1.5s ease infinite 3.4s;opacity:0;animation-fill-mode:both"/>
                            </svg>
                            </div>

                            <div class="market-strip">
                            <div class="mkt-card" style="--mc:var(--zed-primary)"><div class="mc-sym">US30</div><div class="mc-name">Dow Jones Industrial</div><div class="mc-price">39,420</div><div class="mc-chg dn">▼ −0.18%</div><div class="mc-bar"><div class="mc-bar-fill" style="background:var(--zed-primary);--bw:42%;width:42%"></div></div></div>
                            <div class="mkt-card" style="--mc:#00B870"><div class="mc-sym">SPX500</div><div class="mc-name">S&amp;P 500 Index</div><div class="mc-price">5,224</div><div class="mc-chg up">▲ +0.12%</div><div class="mc-bar"><div class="mc-bar-fill" style="background:var(--zed-primary);--bw:60%;width:60%"></div></div></div>
                            <div class="mkt-card" style="--mc:#3B7DD8"><div class="mc-sym">NAS100</div><div class="mc-name">Nasdaq 100 Index</div><div class="mc-price">18,205</div><div class="mc-chg up">▲ +0.28%</div><div class="mc-bar"><div class="mc-bar-fill" style="background:var(--zed-primary);--bw:68%;width:68%"></div></div></div>
                            </div>

                            <div class="rules b">
                            <div class="r-title"><i class="ti ti-list-check"></i>Indices — Key Analysis Points</div>
                            <div class="rrow"><div class="rdot"></div><b>US30 (Dow Jones):</b> 30 blue-chip stocks, most sensitive to rate decisions and economic data</div>
                            <div class="rrow"><div class="rdot"></div><b>SPX500 (S&P 500):</b> broad 500-stock index — the most representative measure of US equity health</div>
                            <div class="rrow"><div class="rdot"></div><b>NAS100 (Nasdaq):</b> tech-heavy, most volatile — highly sensitive to interest rates and tech earnings</div>
                            <div class="rrow"><div class="rdot"></div>When all three indices decline together — it signals broad risk-off. USD and Gold often benefit</div>
                            <div class="rrow"><div class="rdot"></div>Always check indices direction before trading correlated Forex pairs — they confirm or contradict bias</div>
                            </div>
                            <button class="btn-done" onclick="markDone(4)"><i class="ti ti-check"></i>Mark Complete</button>
                        </div>
                        </div>
                    </article>

                    <!-- L5 TECHNICAL OUTLOOK -->
                    <article class="mod rv" data-id="5">
                        <div class="mod-hd" onclick="tog(5)">
                        <div class="mn">05</div><div class="mico"><i class="ti ti-chart-candle"></i></div>
                        <div class="mmeta"><div class="mtitle">Technical Market Outlook</div><div class="msub">Chart patterns, indicators and price action setups</div></div>
                        <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                        </div>
                        <div class="mbody">
                        <div class="minner">
                            <div class="l-sub">Technical Analysis</div>
                            <h2 class="l-head">The Chart Shows You Everything — If You Know How to Read It.</h2>
                            <p class="l-body">Technical outlook is the process of reading price action, identifying chart patterns and applying indicator confluence to forecast the most probable direction. <b>It is objective, repeatable and entirely based on what price has actually done</b> — not what you think it should do.</p>

                            <!-- TECHNICAL SETUP CHART -->
                            <div class="cbox">
                            <div class="cb-head"><span class="cb-lbl"><i class="ti ti-chart-candle"></i>Price Action Setup — Break &amp; Retest Pattern</span><span class="cb-sub">EUR/USD H4</span></div>
                            <svg viewBox="0 0 520 150" width="100%" height="140" aria-label="Break and retest pattern showing resistance becoming support">
                                <!-- Grid lines -->
                                <line x1="0" y1="40" x2="520" y2="40" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <line x1="0" y1="80" x2="520" y2="80" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <line x1="0" y1="120" x2="520" y2="120" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
                                <!-- Key level -->
                                <line x1="0" y1="72" x2="520" y2="72" stroke="#ff0000" stroke-width="1.5" stroke-dasharray="6,4"/>
                                <text x="440" y="68" fill="#ff0000" font-size="8.5" font-weight="700" font-family="Inter">KEY LEVEL → FLIPPED</text>
                                <!-- Price approaching level -->
                                <path d="M10,130 L45,122 L80,126 L115,115 L150,118 L185,105 L220,108 L255,94 L280,98 L310,74" stroke="rgba(255,255,255,.45)" stroke-width="2" fill="none" stroke-dasharray="700" stroke-dashoffset="700" style="animation:traceL 1.5s ease forwards .3s"/>
                                <!-- Breakout above -->
                                <path d="M310,74 L340,60 L365,52" stroke="#ff0000" stroke-width="2.5" fill="none" stroke-dasharray="200" stroke-dashoffset="200" style="animation:traceL .8s ease forwards 1.8s"/>
                                <!-- Retest to flipped level -->
                                <path d="M365,52 L390,62 L415,72" stroke="rgba(255,255,255,.5)" stroke-width="2" fill="none" stroke-dasharray="200" stroke-dashoffset="200" style="animation:traceL .8s ease forwards 2.6s"/>
                                <!-- Entry and continuation -->
                                <path d="M415,72 L445,55 L475,40 L510,28" stroke="#ff0000" stroke-width="2.5" fill="none" stroke-dasharray="300" stroke-dashoffset="300" style="animation:traceL .9s ease forwards 3.4s"/>
                                <!-- Labels -->
                                <text x="270" y="90" fill="#000" font-size="12" font-family="Inter">Consolidation</text>
                                <text x="332" y="48" fill="#ff0000" font-size="9" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 1.8s;opacity:0">BREAK ↑</text>
                                <text x="378" y="88" fill="#ff0000" font-size="9" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 2.6s;opacity:0">RETEST</text>
                                <text x="450" y="38" fill="#000" font-size="9" font-weight="700" font-family="Inter" style="animation:fadeIn .4s ease forwards 3.4s;opacity:0">ENTRY ↑</text>
                                <!-- Entry circle -->
                                <circle cx="415" cy="72" r="6" fill="rgba(0,184,112,.2)" stroke="#ff0000" stroke-width="2" style="animation:scaleUp .4s ease forwards 3.4s;opacity:0;transform-origin:415px 72px"/>
                            </svg>
                            </div>

                            <div class="rules">
                            <div class="r-title"><i class="ti ti-chart-candle"></i>Technical Outlook — Key Tools</div>
                            <div class="rrow"><div class="rdot"></div><b>Trend lines:</b> connect significant swing highs/lows to visualise directional momentum and dynamic support/resistance</div>
                            <div class="rrow"><div class="rdot"></div><b>Moving averages (EMA 50/200):</b> price above 200 EMA = macro bullish. Price below = macro bearish. Never ignore this.</div>
                            <div class="rrow"><div class="rdot"></div><b>RSI (Relative Strength Index):</b> above 70 = overbought caution. Below 30 = oversold opportunity. Use for confirmation, not entry.</div>
                            <div class="rrow"><div class="rdot"></div><b>MACD:</b> histogram crossing zero = momentum shift. Divergence with price = potential reversal warning</div>
                            <div class="rrow"><div class="rdot"></div><b>Fibonacci retracements:</b> 38.2%, 50%, 61.8% are the key pullback zones to watch during trending markets</div>
                            </div>
                            <button class="btn-done" onclick="markDone(5)"><i class="ti ti-check"></i>Mark Complete</button>
                        </div>
                        </div>
                    </article>

                    <!-- L6 FUNDAMENTAL OUTLOOK -->
                    <article class="mod rv" data-id="6">
                        <div class="mod-hd" onclick="tog(6)">
                        <div class="mn">06</div><div class="mico"><i class="ti ti-building-bank"></i></div>
                        <div class="mmeta"><div class="mtitle">Fundamental Market Outlook</div><div class="msub">Economic data, central banks and macro drivers</div></div>
                        <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                        </div>
                        <div class="mbody">
                        <div class="minner">
                            <div class="l-sub">Macro Analysis</div>
                            <h2 class="l-head">Understanding Why Markets Move — Not Just How.</h2>
                            <p class="l-body">Fundamental analysis studies the economic and monetary forces that drive asset prices. <b>Central bank policy, inflation data, employment figures and GDP growth</b> are the primary engines of long-term market direction. No technical setup lasts long against a fundamental headwind.</p>

                            <div class="sgrid">
                            <div class="sbox r"><div class="sv" style="font-size:1.1rem">Fed</div><div class="sk">US Central Bank Policy</div></div>
                            <div class="sbox a"><div class="sv" style="font-size:1.1rem">ECB</div><div class="sk">European Central Bank</div></div>
                            <div class="sbox b"><div class="sv" style="font-size:1.1rem">BoE</div><div class="sk">Bank of England</div></div>
                            </div>

                            <div class="two">
                            <div class="tc g">
                                <div class="tc-h"><i class="ti ti-chart-line"></i>Rate Hike Impact</div>
                                <div class="tc-row">Currency strengthens — higher yield attracts capital</div>
                                <div class="tc-row">Gold tends to fall — higher rates increase opportunity cost</div>
                                <div class="tc-row">Equities often fall — borrowing costs increase, earnings compressed</div>
                            </div>
                            <div class="tc g">
                                <div class="tc-h"><i class="ti ti-trending-down"></i>Rate Cut Impact</div>
                                <div class="tc-row">Currency weakens — lower yield reduces capital attraction</div>
                                <div class="tc-row">Gold tends to rise — lower rates reduce opportunity cost</div>
                                <div class="tc-row">Equities often rally — lower borrowing costs boost valuations</div>
                            </div>
                            </div>
                            <div class="rules b">
                            <div class="r-title"><i class="ti ti-list-check"></i>Key Fundamental Indicators to Track</div>
                            <div class="rrow"><div class="rdot"></div><b>CPI (Consumer Price Index):</b> measures inflation. Higher than expected → currency strengthens. Lower → may weaken.</div>
                            <div class="rrow"><div class="rdot"></div><b>NFP (Non-Farm Payrolls):</b> US employment data. Strong jobs = strong USD, often bearish for Gold.</div>
                            <div class="rrow"><div class="rdot"></div><b>GDP Growth Rate:</b> strong growth = hawkish central bank expectations, currency bullish</div>
                            <div class="rrow"><div class="rdot"></div><b>Central bank statements:</b> forward guidance from Fed/ECB/BoE can move markets more than any technical level</div>
                            </div>
                            <button class="btn-done" onclick="markDone(6)"><i class="ti ti-check"></i>Mark Complete</button>
                        </div>
                        </div>
                    </article>

                    <!-- L7 SUPPORT & RESISTANCE ZONES -->
                    <article class="mod rv" data-id="7">
                        <div class="mod-hd" onclick="tog(7)">
                        <div class="mn">07</div><div class="mico"><i class="ti ti-wall"></i></div>
                        <div class="mmeta"><div class="mtitle">Support and Resistance Zones</div><div class="msub">Marking the market's most powerful decision areas</div></div>
                        <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                        </div>
                        <div class="mbody">
                        <div class="minner">
                            <div class="l-sub">Price Levels</div>
                            <h2 class="l-head">These Zones Are Where Markets Make Decisions. Be Ready.</h2>
                            <p class="l-body">Support and resistance zones are price areas where the market has historically paused, reversed, or consolidated. <b>They represent the collective memory of buyers and sellers</b> — and the more times a zone has been tested and respected, the more significant it becomes for future trades.</p>

                            <!-- SR ZONE VISUAL -->
                            <div class="sr-visual">
                            <div class="sr-head">EUR/USD — Key Zone Map (Daily Chart)</div>
                            <div class="sr-item"><div class="sr-line sr-rline"></div><div class="sr-label sr-r">Strong Resistance</div><div class="sr-price sr-rprice">1.0950</div></div>
                            <div class="sr-item" style="margin:.4rem 0"><div class="sr-line sr-zline" style="height:10px"></div><div class="sr-label sr-z">Supply Zone</div><div class="sr-price sr-zprice">1.0900–1.0930</div></div>
                            <div class="sr-item"><div class="sr-line sr-rline" style="opacity:.6"></div><div class="sr-label sr-r" style="opacity:.7">Resistance</div><div class="sr-price sr-rprice" style="opacity:.7">1.0870</div></div>
                            <div class="sr-item"><div class="sr-line sr-pline"></div><div class="sr-label sr-p">Current Price</div><div class="sr-price sr-pprice">1.0854</div></div>
                            <div class="sr-item"><div class="sr-line sr-sline" style="opacity:.7"></div><div class="sr-label sr-s" style="opacity:.7">Support</div><div class="sr-price sr-sprice" style="opacity:.7">1.0820</div></div>
                            <div class="sr-item" style="margin:.4rem 0"><div class="sr-line sr-zline" style="height:10px"></div><div class="sr-label sr-z">Demand Zone</div><div class="sr-price sr-zprice">1.0780–1.0800</div></div>
                            <div class="sr-item"><div class="sr-line sr-sline"></div><div class="sr-label sr-s">Strong Support</div><div class="sr-price sr-sprice">1.0750</div></div>
                            </div>

                            <div class="rules">
                            <div class="r-title"><i class="ti ti-list-check"></i>S&amp;R Zone Rules</div>
                            <div class="rrow"><div class="rdot"></div>Mark zones from the Daily timeframe first — then work down to H4 and H1 for refinement</div>
                            <div class="rrow"><div class="rdot"></div>A zone with 3+ rejections carries significantly more weight than a level tested once</div>
                            <div class="rrow"><div class="rdot"></div>Do not enter the moment price touches a zone — wait for a rejection candle (pin bar, engulfing)</div>
                            <div class="rrow"><div class="rdot"></div>When a resistance zone is broken convincingly — it becomes support. This is role reversal.</div>
                            <div class="rrow"><div class="rdot"></div>Round numbers (1.0800, 1.0900, 2,300 Gold) attract orders — always mark them as additional confluence</div>
                            </div>
                            <button class="btn-done" onclick="markDone(7)"><i class="ti ti-check"></i>Mark Complete</button>
                        </div>
                        </div>
                    </article>

                    <!-- L8 KEY NEWS EVENTS -->
                    <article class="mod rv" data-id="8">
                        <div class="mod-hd" onclick="tog(8)">
                        <div class="mn">08</div><div class="mico"><i class="ti ti-news"></i></div>
                        <div class="mmeta"><div class="mtitle">Key News Events</div><div class="msub">The economic releases that move markets — and how to trade around them</div></div>
                        <div class="mright"><span class="badge b-l">Lesson</span><i class="ti ti-chevron-right mchev"></i></div>
                        </div>
                        <div class="mbody">
                        <div class="minner">
                            <div class="l-sub">Economic Calendar</div>
                            <h2 class="l-head">News Events Can Move the Market 100+ Pips in Seconds. Know Them.</h2>
                            <p class="l-body">High-impact economic releases create extreme, fast price movements that can trigger stops, widen spreads and invalidate technical setups in moments. <b>Knowing what events are scheduled, when they occur and how to manage your positions around them</b> is a critical professional skill.</p>

                            <!-- NEWS TABLE -->
                            <div class="news-table">
                            <div class="nt-head">
                                <div class="nt-hcell">Time UTC</div>
                                <div class="nt-hcell">Event</div>
                                <div class="nt-hcell">Impact</div>
                                <div class="nt-hcell">Forecast</div>
                            </div>
                            <div class="nt-row"><div class="nt-cell">08:30</div><div class="nt-cell">🇺🇸 US CPI (Inflation)</div><div class="nt-cell"><span class="impact imp-h">● High</span></div><div class="nt-cell"><span class="fore-pos">3.2%</span></div></div>
                            <div class="nt-row"><div class="nt-cell">09:00</div><div class="nt-cell">🇪🇺 EUR PMI Manufacturing</div><div class="nt-cell"><span class="impact imp-m">● Med</span></div><div class="nt-cell"><span class="fore-neg">48.8</span></div></div>
                            <div class="nt-row"><div class="nt-cell">12:30</div><div class="nt-cell">🇺🇸 NFP Employment</div><div class="nt-cell"><span class="impact imp-h">● High</span></div><div class="nt-cell"><span class="fore-pos">185K</span></div></div>
                            <div class="nt-row"><div class="nt-cell">14:00</div><div class="nt-cell">🇺🇸 Fed Interest Rate</div><div class="nt-cell"><span class="impact imp-h">● High</span></div><div class="nt-cell"><span class="fore-neg">Hold 5.50%</span></div></div>
                            <div class="nt-row"><div class="nt-cell">15:30</div><div class="nt-cell">🇬🇧 UK Retail Sales</div><div class="nt-cell"><span class="impact imp-m">● Med</span></div><div class="nt-cell"><span class="fore-pos">+0.4%</span></div></div>
                            </div>

                            <div class="two">
                            <div class="tc r">
                                <div class="tc-h"><i class="ti ti-alert-triangle"></i>High-Impact Events</div>
                                <div class="tc-row">Non-Farm Payrolls (NFP) — first Friday monthly</div>
                                <div class="tc-row">Central Bank rate decisions (Fed, ECB, BoE)</div>
                                <div class="tc-row">CPI — US Consumer Price Index (inflation)</div>
                                <div class="tc-row">FOMC press conference statements</div>
                            </div>
                            <div class="tc a">
                                <div class="tc-h"><i class="ti ti-shield"></i>Before News — Protect</div>
                                <div class="tc-row">Check the calendar every morning before session</div>
                                <div class="tc-row">Close or reduce positions 30 min before red events</div>
                                <div class="tc-row">Move open positions to breakeven to protect profit</div>
                                <div class="tc-row">Wait 15–30 min after release — let price stabilise first</div>
                            </div>
                            </div>
                            <button class="btn-done" onclick="markDone(8)"><i class="ti ti-check"></i>Mark Complete</button>
                        </div>
                        </div>
                    </article>

                    <!-- L9 WEEKLY SUMMARY -->
                    <article class="mod rv" data-id="9">
                        <div class="mod-hd" onclick="tog(9)">
                        <div class="mn">09</div><div class="mico"><i class="ti ti-calendar-stats"></i></div>
                        <div class="mmeta"><div class="mtitle">Weekly Market Summary</div><div class="msub">Reviewing the week, extracting lessons and setting up for next week</div></div>
                        <div class="mright"><span class="badge b-f">Final</span><i class="ti ti-chevron-right mchev"></i></div>
                        </div>
                        <div class="mbody">
                        <div class="minner">
                            <div class="l-sub">Weekly Review</div>
                            <h2 class="l-head">The Best Traders Review More Than They Trade.</h2>
                            <p class="l-body">A Weekly Market Summary is the discipline of reviewing everything that happened across the week — what moved, why it moved, what setups triggered and what the overall bias looks like heading into the next session. <b>Traders who review consistently improve faster than those who simply trade more.</b></p>

                            <!-- WEEKLY PERFORMANCE CHART -->
                            <div class="cbox">
                            <div class="cb-head"><span class="cb-lbl"><i class="ti ti-calendar-stats"></i>Weekly Performance Summary — All Markets</span><span class="cb-sub">Mon–Fri Overview</span></div>
                            <svg viewBox="0 0 520 130" width="100%" height="122" aria-label="Weekly market performance bar chart showing Mon-Fri movement">
                                <!-- Grid -->
                                <line x1="40" y1="20" x2="510" y2="20" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                                <line x1="40" y1="50" x2="510" y2="50" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                                <line x1="40" y1="80" x2="510" y2="80" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                                <line x1="40" y1="110" x2="510" y2="110" stroke="rgba(255,255,255,.06)" stroke-width="1"/>
                                <!-- Y axis -->
                                <text x="8" y="24" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">+2%</text>
                                <text x="8" y="54" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">+1%</text>
                                <text x="10" y="84" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">0%</text>
                                <text x="5" y="114" fill="rgba(255,255,255,.3)" font-size="8" font-family="Inter">−1%</text>
                                <!-- EUR/USD bars Mon-Fri -->
                                <rect x="55" y="50" width="18" height="30" rx="2" fill="#ff0000"><animate attributeName="height" from="0" to="30" dur=".8s" begin=".3s" fill="freeze"/><animate attributeName="y" from="80" to="50" dur=".8s" begin=".3s" fill="freeze"/></rect>
                                <rect x="140" y="42" width="18" height="38" rx="2" fill="#ff0000"><animate attributeName="height" from="0" to="38" dur=".8s" begin=".5s" fill="freeze"/><animate attributeName="y" from="80" to="42" dur=".8s" begin=".5s" fill="freeze"/></rect>
                                <rect x="225" y="72" width="18" height="8" rx="2" fill="#C8102E"><animate attributeName="height" from="0" to="8" dur=".8s" begin=".7s" fill="freeze"/></rect>
                                <rect x="310" y="55" width="18" height="25" rx="2" fill="#ff0000"><animate attributeName="height" from="0" to="25" dur=".8s" begin=".9s" fill="freeze"/><animate attributeName="y" from="80" to="55" dur=".8s" begin=".9s" fill="freeze"/></rect>
                                <rect x="395" y="60" width="18" height="20" rx="2" fill="#ff0000"><animate attributeName="height" from="0" to="20" dur=".8s" begin="1.1s" fill="freeze"/><animate attributeName="y" from="80" to="60" dur=".8s" begin="1.1s" fill="freeze"/></rect>
                                <!-- Gold bars (offset) -->
                                <rect x="76" y="44" width="18" height="36" rx="2" fill="#7b7b7b" opacity=".8"><animate attributeName="height" from="0" to="36" dur=".8s" begin=".4s" fill="freeze"/><animate attributeName="y" from="80" to="44" dur=".8s" begin=".4s" fill="freeze"/></rect>
                                <rect x="161" y="68" width="18" height="12" rx="2" fill="#C8102E" opacity=".8"><animate attributeName="height" from="0" to="12" dur=".8s" begin=".6s" fill="freeze"/></rect>
                                <rect x="246" y="50" width="18" height="30" rx="2" fill="#7b7b7b" opacity=".8"><animate attributeName="height" from="0" to="30" dur=".8s" begin=".8s" fill="freeze"/><animate attributeName="y" from="80" to="50" dur=".8s" begin=".8s" fill="freeze"/></rect>
                                <rect x="331" y="58" width="18" height="22" rx="2" fill="#7b7b7b" opacity=".8"><animate attributeName="height" from="0" to="22" dur=".8s" begin="1s" fill="freeze"/><animate attributeName="y" from="80" to="58" dur=".8s" begin="1s" fill="freeze"/></rect>
                                <rect x="416" y="52" width="18" height="28" rx="2" fill="#7b7b7b" opacity=".8"><animate attributeName="height" from="0" to="28" dur=".8s" begin="1.2s" fill="freeze"/><animate attributeName="y" from="80" to="52" dur=".8s" begin="1.2s" fill="freeze"/></rect>
                                <!-- X labels -->
                                <text x="58" y="125" fill="rgba(255,255,255,.4)" font-size="9" font-weight="600" font-family="Inter">Mon</text>
                                <text x="143" y="125" fill="rgba(255,255,255,.4)" font-size="9" font-weight="600" font-family="Inter">Tue</text>
                                <text x="228" y="125" fill="rgba(255,255,255,.4)" font-size="9" font-weight="600" font-family="Inter">Wed</text>
                                <text x="313" y="125" fill="rgba(255,255,255,.4)" font-size="9" font-weight="600" font-family="Inter">Thu</text>
                                <text x="400" y="125" fill="rgba(255,255,255,.4)" font-size="9" font-weight="600" font-family="Inter">Fri</text>
                                <!-- Legend -->
                                <rect x="438" y="12" width="10" height="4" rx="1" fill="#ff0000"/><text x="452" y="17" fill="#ff0000" font-size="12" font-family="Inter">EUR/USD</text>
                                <rect x="438" y="22" width="10" height="4" rx="1" fill="#ff0000"/><text x="452" y="27" fill="#ff0000" font-size="12" font-family="Inter">Gold</text>
                            </svg>
                            </div>

                            <div class="steps">
                            <div class="step"><div class="step-n">1</div><div><div class="step-t">Review every trade taken this week</div><div class="step-d">Were entries, stops and targets all placed at the right levels? Did you follow your plan on every trade?</div></div></div>
                            <div class="step"><div class="step-n">2</div><div><div class="step-t">Identify the week's biggest movers and why</div><div class="step-d">Which pairs moved most? Was it news-driven, technical breakout, or institutional activity? Understand the cause.</div></div></div>
                            <div class="step"><div class="step-n">3</div><div><div class="step-t">Mark the next week's key levels now</div><div class="step-d">Before the weekend ends, identify next week's key S/R zones, round numbers and potential reaction areas</div></div></div>
                            <div class="step"><div class="step-n">4</div><div><div class="step-t">Check the next week's economic calendar</div><div class="step-d">Identify all red-flag events. Plan your sessions around them — know which days to reduce exposure</div></div></div>
                            <div class="step"><div class="step-n">5</div><div><div class="step-t">Set one improvement goal for next week</div><div class="step-d">Based on your week's review — identify one specific thing to improve: entry discipline, patience, risk sizing</div></div></div>
                            </div>
                            <button class="btn-done" onclick="markDone(9)"><i class="ti ti-trophy"></i>Complete Course</button>
                        </div>
                        </div>
                    </article>
                </main>

                <!-- SIDEBAR -->
                <aside class="sidebar">
                    <div class="sb-card">
                        <div class="sb-hd"><i class="ti ti-chart-line"></i><h3>Market Analysis Course</h3></div>
                        <div class="sb-body">
                        <div class="cs-row"><span class="cs-l"><i class="ti ti-books"></i>Total Lessons</span><span class="cs-v r">9</span></div>
                        <div class="cs-row"><span class="cs-l"><i class="ti ti-clock"></i>Duration</span><span class="cs-v">~55 min</span></div>
                        <div class="cs-row"><span class="cs-l"><i class="ti ti-trending-up"></i>Level</span><span class="cs-v">Intermediate</span></div>
                        <div class="cs-row"><span class="cs-l"><i class="ti ti-certificate"></i>Certificate</span><span class="cs-v r">Yes</span></div>
                        <div class="cs-row"><span class="cs-l"><i class="ti ti-currency-dollar"></i>Price</span><span class="cs-v g">Free</span></div>
                        <div class="cs-row"><span class="cs-l"><i class="ti ti-check"></i>Completed</span><span class="cs-v r" id="sbdone">0 / 9</span></div>
                        </div>
                    </div>

                    <div class="sb-card">
                        <div class="sb-nav">
                        <div class="sb-nav-lbl">Lesson Navigator</div>
                        <div class="sb-item active" data-for="1" onclick="jumpTo(1)"><div class="sb-n">01</div><div class="sb-text">Daily Market Overview</div></div>
                        <div class="sb-item" data-for="2" onclick="jumpTo(2)"><div class="sb-n">02</div><div class="sb-text">Forex Market Analysis</div></div>
                        <div class="sb-item" data-for="3" onclick="jumpTo(3)"><div class="sb-n">03</div><div class="sb-text">Gold Market Analysis</div></div>
                        <div class="sb-item" data-for="4" onclick="jumpTo(4)"><div class="sb-n">04</div><div class="sb-text">Indices Analysis</div></div>
                        <div class="sb-item" data-for="5" onclick="jumpTo(5)"><div class="sb-n">05</div><div class="sb-text">Technical Outlook</div></div>
                        <div class="sb-item" data-for="6" onclick="jumpTo(6)"><div class="sb-n">06</div><div class="sb-text">Fundamental Outlook</div></div>
                        <div class="sb-item" data-for="7" onclick="jumpTo(7)"><div class="sb-n">07</div><div class="sb-text">Support &amp; Resistance</div></div>
                        <div class="sb-item" data-for="8" onclick="jumpTo(8)"><div class="sb-n">08</div><div class="sb-text">Key News Events</div></div>
                        <div class="sb-item" data-for="9" onclick="jumpTo(9)"><div class="sb-n">09</div><div class="sb-text">Weekly Summary</div></div>
                        </div>
                    </div>

                </aside>
            </div> 

            <div class="faq-wrap">

                    <div class="zed-sec-head mt-5 mb-5">  
                            <h2 class="zed-sec-title">Risk Management | FAQ</h2> 
                            <div class="underline"></div>
                    </div>
    
                    <div class="fi">

                        <div class="fq" onclick="faqTog(this)">
                            <span class="fq-txt">What is market analysis in trading?</span>
                            <i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i>
                        </div>

                        <div class="fa">
                            <div class="fa-inner">
                                Market analysis is the process of studying price data, economic indicators and market conditions to forecast the most probable direction of an asset. It combines technical analysis (chart reading) and fundamental analysis (economic data) to form a complete, informed view before any trade is placed. Without it, every trading decision is driven by emotion rather than evidence. 
                            </div>
                        </div>
                    </div>

                    <div class="fi">
                        <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How do you analyse the Forex market daily?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                        <div class="fa"><div class="fa-inner">A daily Forex analysis routine includes: checking overnight price movement and session bias, marking key support and resistance levels from Daily/H4 charts, reviewing the economic calendar for red-flag events, checking correlation between USD, Gold and major indices and identifying the highest-probability setups across major pairs. This process should take 20–30 minutes before the session opens.</div></div>
                    </div>

                    <div class="fi">
                        <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What drives the Gold (XAU/USD) price?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                        <div class="fa"><div class="fa-inner">Gold is primarily driven by: USD strength (inverse relationship), real interest rates (higher rates = bearish Gold), geopolitical uncertainty (crisis = bullish Gold), inflation expectations (higher inflation = bullish Gold) and central bank buying. When the Fed signals rate cuts, Gold typically rises. When data shows a strengthening economy, Gold often falls. Always check these drivers before analysing the Gold chart.</div></div>
                    </div>

                    <div class="fi">
                        <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is the difference between technical and fundamental analysis?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                        <div class="fa"><div class="fa-inner">Technical analysis studies price chart patterns, candlestick formations, support/resistance zones and indicators to identify high-probability entry and exit points. Fundamental analysis studies economic data, central bank policy, interest rates and geopolitical events to understand why markets move in a given direction. Professional traders use both together — fundamentals set the long-term bias, technicals provide the precise entry.</div></div>
                    </div>

                    <div class="fi">
                        <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How do support and resistance zones work?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                        <div class="fa"><div class="fa-inner">Support is a price level or zone where buying pressure has historically been strong enough to halt declining moves. Resistance is the opposite — where selling pressure has consistently capped upward movement. The more times a zone has been tested and respected, the more significant it becomes. When a resistance zone is broken convincingly, it typically flips to become support — a concept called role reversal.</div></div>
                    </div>

                    <div class="fi">
                        <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What are the most important news events for Forex traders?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                        <div class="fa"><div class="fa-inner">The highest-impact events for Forex traders are: Non-Farm Payrolls (NFP) — first Friday of every month; Central bank interest rate decisions (Fed, ECB, BoE); CPI inflation data — especially US CPI; GDP growth reports; and FOMC press conferences. These events can move major pairs 50–150+ pips in minutes. Always check the economic calendar before each session and close or protect open positions 30 minutes before high-impact releases.</div></div>
                    </div>

                    <div class="fi">
                        <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How do indices like US30 and SPX500 affect Forex?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                        <div class="fa"><div class="fa-inner">Equity indices and Forex markets are closely correlated. When US indices fall sharply, it typically signals risk-off sentiment — which strengthens the USD and JPY (safe havens), while weakening AUD and risk currencies. When indices rally, it often signals risk-on — weakening USD and strengthening commodity currencies. Gold also tends to rise during equity sell-offs. Always check indices direction before confirming a Forex bias.</div></div>
                    </div>

                    <div class="fi">
                        <div class="fq" onclick="faqTog(this)"><span class="fq-txt">Why is a weekly market review important for traders?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                        <div class="fa"><div class="fa-inner">A weekly review forces you to evaluate your decision-making process objectively — not just your profits or losses. Traders who review consistently identify repeating mistakes and fix them faster than those who simply trade more. A structured weekly review includes: trade-by-trade analysis, identifying the week's key movers and their causes, marking next week's levels, checking the upcoming economic calendar and setting one specific improvement focus for the following week.</div></div>
                    </div>
    
            </div>
        
        
        </div>
    </div>

    <style>
        
        /* ── FAQ ── */
        .faq-wrap{background:#fff;margin-top:1px}
        .faq-top{
        padding:1.4rem 2rem .9rem;
        display:flex;
        align-items:center;
        gap:10px;
        border-bottom:1px solid var(--G100);
        }
        .faq-top h2{
        font-size:1rem;
        font-weight:500;
        color:var(--zed-dark-text);
        }
        .faq-top i{
        font-size:1.5rem;
        color:var(--zed-primary);
        }
        .faq-note{
        padding:.6rem 2rem .8rem;
        font-size:1rem;
        color:var(--G400);
        line-height:1.6;
        border-bottom:1px solid var(--G100)
        }
        .fi{
        border-bottom:1px solid var(--G100);
        display: flex;
        flex-direction: column;
        }
        .fq{display:flex;align-items:flex-start;justify-content:space-between;padding:.9rem 2rem;cursor:pointer;gap:12px;transition:background .15s}
        /* .fq:hover{background:var(--G50)} */
        .fq-txt{
            font-size:1rem;
            font-weight:500;
            color:var(--zed-dark-text);
            flex:1;
            line-height:1.5;
        }
        .fq-ic{
        font-size:1.5rem;
        color:var(--zed-secondary);
        transition:transform .25s,color .2s;
        flex-shrink:0;
        margin-top:2px;
        } 
        .fa{max-height:0;overflow:hidden;transition:max-height .35s ease}
        .fa.open{max-height:400px}
        .fa-inner{
        margin:0 2rem .9rem;
        padding:.8rem 1rem;
        font-family: 'Poppins', serif;
        background:var(--G50);
        border-left:3px solid var(--zed-primary);
        border-radius:0 4px 4px 0; 
        color:var(--zed-secondary);
        font-weight: 400;
        line-height:1.8;
        }
        .fa-inner b{
        color:var(--zed-dark-text);
        font-weight:500;
        
        }

        .underline {
        width: 75px;
        height: 4px;
        background-color: var(--zed-primary);
        margin: 10px 0  0;
        padding: 4px;
        }

        .zed-sec-title {
            font-family: 'Poppins', serif;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 25px;
            color: var(--zed-dark-text);
        }


    </style>
 
    <script>
        const done=new Set(),T=9;
        function tog(id){
        document.querySelectorAll('.mod').forEach(m=>{
            const mid=+m.dataset.id,b=m.querySelector('.mbody');
            if(mid===id){const o=b.classList.contains('open');b.classList.toggle('open',!o);m.classList.toggle('open',!o);}
            else{b.classList.remove('open');m.classList.remove('open');}
        });
        updSb(id);
        }
        function jumpTo(id){
        const m=document.querySelector(`.mod[data-id="${id}"]`);
        if(m){if(!m.querySelector('.mbody').classList.contains('open'))tog(id);setTimeout(()=>m.scrollIntoView({behavior:'smooth',block:'start'}),55);}
        }
        function markDone(id){
        done.add(id);
        const m=document.querySelector(`.mod[data-id="${id}"]`);
        if(m){m.classList.add('done');m.classList.remove('active','open');m.querySelector('.mbody').classList.remove('open');const b=m.querySelector('.badge');b.className='badge b-d';b.textContent='✓ Done';}
        const si=document.querySelector(`.sb-item[data-for="${id}"]`);
        if(si){si.classList.add('done');if(!si.querySelector('.sb-tick')){const t=document.createElement('i');t.className='ti ti-check sb-tick';si.appendChild(t);}}
        updProg();
        const nx=id+1;
        if(nx<=T){const nm=document.querySelector(`.mod[data-id="${nx}"]`);if(nm){nm.classList.add('active');tog(nx);}}
        if(id===T)setTimeout(()=>sendPrompt('I have completed the Zed Capital Market Analysis course. Please summarise the key lessons and recommend what I should study next.'),400);
        }
        function updProg(){
        const pct=Math.round((done.size/T)*100);
        document.getElementById('pbar').style.width=pct+'%';
        document.getElementById('ppct').textContent=pct+'%';
        document.getElementById('pcnt').textContent=done.size+' / '+T;
        document.getElementById('k3').textContent=done.size;
        document.getElementById('sbdone').textContent=done.size+' / '+T;
        }
        function updSb(id){
        document.querySelectorAll('.sb-item').forEach(s=>s.classList.remove('active'));
        const si=document.querySelector(`.sb-item[data-for="${id}"]`);
        if(si)si.classList.add('active');
        } 

        function faqTog(qel){
            const fi=qel.closest('.fi'), fa=fi.querySelector('.fa'), isOpen=fa.classList.contains('open');
            document.querySelectorAll('.fi').forEach(f=>{ f.classList.remove('open'); f.querySelector('.fa').classList.remove('open'); });
            if(!isOpen){ fi.classList.add('open'); fa.classList.add('open'); }
        }
    </script>
    
<?php
include_once ('elements/footer.php');
?>