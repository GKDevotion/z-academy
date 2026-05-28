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
                Trade With<em><br>Precision</em>
            </h1>
            <p class="sub">
               Move beyond basic concepts and build a complete strategy toolkit. This course covers professional-grade setups — from market structure and breakouts to multi-timeframe analysis and backtesting.
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
                        <div class="val">12</div>
                        <div class="lbl">Lessons</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-play-btn-fill"></i></div>
                    <div>
                        <div class="val">75</div>
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
                        <div class="val">Advance</div>
                        <div class="lbl">Level</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="hdiv"></div>

    <style>  
            :root{ 
                --Rd:#9B0E24;
                --RL:#FEF0F2;
                --BK:#0f0f0f;
                --W:#fff;
                --G50:#F7F7F7;
                --G100:#EFEFEF;
                --G200:#D5D5D5;
                --G400:#999;
                --G600:#555;
                --G800:#222;
                --GR:#16A34A;
                --GRL:#F0FDF4;
                --GRB:#BBF7D0;
                --AM:#D97706;
                --AML:#FFFBEB;
                --AMB:#FDE68A;
            } 

            @keyframes fadeUp{
                from{
                    opacity:0;
                    transform:translateY(22px)
                }to
                {
                    opacity:1;
                    transform:translateY(0)
                }
            }
            @keyframes pulse{
                0%,100%{
                    opacity:1;
                }50%{
                    opacity:.4;
                }
            }
            @keyframes barGrow{
                from{
                    width:0;
                }to{
                    width:var(--w,100%)
                }
            }
            @keyframes candleUp{
                from{
                    transform:scaleY(0);
                    transform-origin:bottom
                }to{
                    transform:scaleY(1);
                    transform-origin:bottom;
                }
            }
            @keyframes candleDown{
                from{
                    transform:scaleY(0);
                    transform-origin:top;
                }to{
                    transform:scaleY(1);
                    transform-origin:top
                }
            }
            @keyframes drawLine{
                from{
                    stroke-dashoffset:200;
                }to{
                    stroke-dashoffset:0;
                }
            }
            @keyframes glowPulse{
                0%,100%{
                    opacity:.6
                }50%{
                    opacity:1;
                }
            }

            .fu{
                opacity:0;
                animation:fadeUp .6s ease forwards;
            } 
            .d1{
                animation-delay:.07s;
            }
            .d2{
                animation-delay:.15s;
            }
            .d3{
                animation-delay:.23s;
            }
            .d4{
                animation-delay:.31s;
            }
            .d5{
                animation-delay:.39s;
            }
        
            /* ── PROGRESS ── */
            .prog{
                background:#fff;
                border-bottom:1px solid var(--G100);
                padding:.85rem 2rem;
                display:flex;
                align-items:center;
                gap:12px
            }
            .prog-bar{
                flex:1;
                height:3px;
                background:var(--G100);
                border-radius:2px;
                overflow:hidden
            }
            .prog-fill{
                height:100%;
                background:var(--zed-primary);
                width:0%;
                transition:width .6s cubic-bezier(.4,0,.2,1)
            }
            .prog-lbl{
                font-size:1rem;
                color:var(--G400);
                white-space:nowrap
            }
            .prog-pct{
                font-size:1rem;
                font-weight:600;
                margin-bottom: 10px;
                color:var(--zed-primary);
                min-width:40px;
                text-align:right
            } 

            /* ── SECTION LABEL ── */
            .slbl{
                padding: .5rem 1.6rem;
                font-family: 'Poppins', serif;
                background:var(--G50);
                border-top:1px solid var(--G100);
                border-bottom:1px solid var(--G100);
                font-size:1rem;
                font-weight:600;
                letter-spacing:.11em;
                text-transform:uppercase;
                color:var(--G400);
                display:flex;
                align-items:center;
                gap:7px
            }
            .slbl i{
                font-size:30px;
                color:var(--zed-secondary); 
            }

            /* ── MODULE ── */
            .mod{
                background:#fff;
                border-left:3px solid transparent;
                transition:border-color .25s;
            }

            .mod+.mod{
                border-top:1px solid var(--G100);
            }

            .mod.active{
                border-left-color:var(--zed-primary);
            }

            .mod.done{
                border-left-color:var(--G200)
            }

            .mod-hd{
                display:flex;
                align-items:center;
                gap:12px;
                padding:.95rem 1.5rem;
                cursor:pointer;
                transition:background .15s;
                user-select:none;
            }

            .mod-hd:hover{
                background:var(--G50);
            }
            .mn{
                font-family:'Bebas Neue',sans-serif;
                font-size:2.5rem;
                color:var(--G200);
                min-width:24px;
                line-height:1;
                transition:color .2s;
                flex-shrink:0;
            }
            .mod.active .mn{
                color:var(--zed-primary);
            }
            .micon{
                width:36px;
                height:36px;
                border-radius:4px;
                background:var(--G50);
                border:1px solid var(--G100);
                display:flex;
                align-items:center;
                justify-content:center;
                font-size:22px;
                color:var(--zed-primary);
                flex-shrink:0;
                transition:all .25s;
            }
            .mod.active .micon{
                background:var(--zed-primary);
                border-color:var(--zed-primary);
                color:#fff;
            }
            .mod.done .micon{
                background:var(--zed-primary);
                border-color:var(--zed-primary);
                color:#fff;
            }

            .mmeta{
                flex:1;
                min-width:0;
            }
            .mt{
                font-size: 1.5rem;
                font-weight:500;
                color:var(--zed-dark-text);
                line-height:1.3;
            }
            .ms{
                font-size:0.8rem;
                color:var(--G400);
                margin-top:1px;
                font-family: 'Poppins', serif;
                overflow:hidden;
                text-overflow:ellipsis;
                white-space:nowrap;
            }
            .mright{
                display:flex;
                align-items:center;
                gap:8px;
                flex-shrink:0;
            }
            .badge{
                font-size:1rem;
                font-weight:600;
                letter-spacing:.06em;
                text-transform:uppercase;
                padding:3px 8px;
                background: var(--G50);
                color: var(--G200);
                border: 1px solid var(--G100);
                border-radius:2px;
            }
            .b-start{
                background:var(--zed-primaryL);
                color:var(--zed-primaryd)
            }
            .b-done{
                background:var(--G100);
                color:var(--G400)
            }
            .b-open{
                background:var(--G50);
                color:var(--G200);
                border:1px solid var(--G100)
            }
            .b-final{
                background: var(--zed-primary);
                color:#fff;
            }
            .chev{
                font-size:16px;
                color:var(--G200);
                transition:transform .25s,color .2s;
            }
            .mod.open .chev{
                transform:rotate(90deg);
                color:var(--zed-primary);
            } 
            /* ── BODY ── */
            .mbody{
                max-height:0;
                overflow:hidden;
                transition:max-height .42s cubic-bezier(.4,0,.2,1);
            } 
            .mbody.open{
                max-height:1400px;
            } 
            .minner{
                padding:1.1rem 1.5rem 1.5rem 4.5rem;
                border-top:1px solid var(--G50);
            }
            .intro{ 
                color:var(--zed-secondary);
                line-height:1.8;
                margin-bottom:1.2rem;
                max-width:510px;
            } 
            /* ── FORMULA ── */
            .fbox{
                display:flex;
                align-items:center;
                gap:12px;
                background:var(--zed-dark-text);
                border-radius:4px;
                padding:.85rem 1.1rem;
                margin-bottom:1.2rem;
            } 
            .flbl{
                font-size:10px;
                color:var(--G400);
                letter-spacing:.09em;
                text-transform:uppercase;
                white-space:nowrap;
                flex-shrink:0;
            } 
            .fdiv{
                width:1px;
                height:18px;
                background:rgba(255,255,255,.12);
                flex-shrink:0;
            } 
            .feq{
                font-size:12.5px;
                color:#fff;
                font-weight:400;
                line-height:1.5;
            } 
            .feq b{
                color:var(--zed-primary);
            } 
            /* ── STAT GRID ── */
            .sgrid{
                display:grid;
                grid-template-columns:repeat(3,1fr);
                gap:8px;
                margin-bottom:1.2rem;
            } 
            .sbox{
                background:var(--G50);
                border:1px solid var(--G100);
                border-radius:4px;
                padding:.7rem .8rem;
                text-align:center;
            } 
            .sbox.hi{
                background:var(--zed-primaryL);
                border-color:#FACDD3;
            } 
            .sv{
                font-family:'Bebas Neue',sans-serif;
                font-size:1.6rem;
                color:var(--zed-dark-text);
                line-height:1;
            } 
            .sv.r{
                color:var(--zed-primary);
            } 
            .sk{
                font-size:10px;
                color:var(--G400);
                letter-spacing:.05em;
                text-transform:uppercase;
                margin-top:3px;
            } 
            /* ── RULES CARD ── */
            .rcard{
                background:var(--G50);
                border-left:3px solid var(--zed-primary);
                border-radius:0 4px 4px 0;
                padding:.85rem 1rem;
                margin-bottom:1.2rem;
            }
            .rtitle{
                font-size:1rem;
                font-weight:600;
                letter-spacing:.1em;
                text-transform:uppercase;
                color:var(--zed-primary);
                margin-bottom:.65rem;
                display:flex;
                align-items:center;
                gap:6px;
            } 
            .rtitle i{
                font-size:22px;
            }
            .rrow{
                display:flex;
                align-items:flex-start;
                gap:8px;
                padding:3px 0; 
                color:var(--zed-secondary);
                line-height:1.65;
            } 
            .rdot{
                width:5px;
                height:5px;
                background:var(--zed-primary);
                border-radius:50%;
                flex-shrink:0;
                margin-top:6px;
                animation:pulse 2.5s ease infinite;
            } 
            /* ── TWO COL ── */
            .two{
                display:grid;
                grid-template-columns:1fr 1fr;
                gap:8px;
                margin-bottom:1.2rem;
            } 
            .tbox{
                background:var(--G50);
                border:1px solid var(--G100);
                border-radius:4px;
                padding:.8rem 1rem;
            } 
            .tbox.danger{
                background:var(--zed-primaryL);
                border-color:#FACDD3;
            }
            .tbox-title{
                font-size:1rem;
                font-weight:600;
                letter-spacing:.08em;
                text-transform:uppercase; 
                margin-bottom:.5rem;
                display:flex;
                align-items:center;
                gap:5px;
            }
            .tbox.danger .tbox-title{
                color:var(--zed-primary)
            }
            .tbox-row{ 
                color:var(--zed-secondary);
                padding:2px 0;
                display:flex;
                align-items:flex-start;
                gap:6px;
                line-height:1.5;
            }
            .tbox-row i{
                font-size:13px;
                flex-shrink:0;
                margin-top:1px
            }
            .tbox.danger .tbox-row i{
                color:var(--zed-primary);
            }
            .tbox-row i{
                color:var(--zed-secondary)
            } 
            /* ── CHECKLIST ── */
            .clwrap{
                margin-bottom:1rem;
            }
            .clstat{
                font-size: 1rem;
                color: var(--G400);
                font-weight:500;
                padding: 4px 8px;
                margin-bottom: 6px;
                transition: color .3s;
            }
            .ci{
                display:flex;
                align-items:center;
                gap:10px;
                padding:5px 8px;
                border-radius:4px;
                cursor:pointer;
                transition:background .15s; 
                color:var(--G600);
            }
            .ci:hover{
                background:var(--G50);
            }
            .cbox{
                width:17px;
                height:17px;
                border:1.5px solid var(--G200);
                border-radius:3px;
                flex-shrink:0;
                display:flex;
                align-items:center;
                justify-content:center;
                font-size:11px;transition:all .2s;
                color:#fff;
            }
            .ci.checked .cbox{
                background:var(--zed-primary);
                border-color:var(--zed-primary);
            } 
            .ci.checked .clbl{
                text-decoration:line-through;
                color:var(--G400);
            } 
            /* ── CTA ── */
            .btndone{
                display:inline-flex;
                align-items:center;
                gap:7px;
                background:var(--zed-primary);
                color:#fff;
                font-size:11px;
                font-weight:600;
                letter-spacing:.07em;
                text-transform:uppercase;
                padding:9px 18px;
                border-radius:2px;
                border:none;
                cursor:pointer;
                transition:background .2s,transform .1s;
                margin-top:.3rem;
            } 
            .btndone:hover{
                background:var(--zed-primary);
            }
            .btndone:active{
                transform:scale(.97);
            }
            .btndone i{
                font-size:14px;
            }

            /* ── FAQ ── */
            .faq-wrap{
                background:#fff;
                margin-top:1px;
            }
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
            .fq{
                display:flex;
                align-items:flex-start;
                justify-content:space-between;
                padding:.9rem 2rem;
                cursor:pointer;
                gap:12px;
                transition:background .15s;
            }
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
            .fi.open .fq-ic{
                transform:rotate(180deg);
                color:var(--zed-primary);
            } 
            .fa{
                max-height:0;
                overflow:hidden;
                transition:max-height .35s ease;
            } 
            .fa.open{
                max-height:400px;
            }
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
                color: black;
            }

              /* STEP FLOW */
            .steps{
                display:flex;
                flex-direction:column;
                gap:6px;
                margin-bottom:1.2rem;
            }
            .step{
                display:flex;
                align-items:flex-start;
                gap:12px;
                padding:.7rem 1rem;
                background:var(--G50);
                border:1px solid var(--G100);
                border-radius:4px;
                transition:border-color .2s;
            }
            .step:hover{
                border-color:var(--zed-secondary);
            }
            .step-num{
                font-family: poppins, sans-serif;
                font-size:1.5rem;
                color:var(--zed-primary);
                min-width:20px;
                line-height:1.5;
                flex-shrink:0;
            }
            .step-body{
                flex:1;
            }
            .step-title{
                font-size:1rem;
                font-weight:500;
                color:var(--zed-dark-text);
                margin-bottom:1px;
            }
            .step-desc{ 
                color:var(--zed-secondary);
                line-height:1.5;
            }

            /* LEVEL VISUAL */
            .level-visual{
                background:var(--zed-dark-text);
                border-radius:4px;
                padding:1rem;
                margin-bottom:1.2rem;
            }
            .lv-title{
                font-size:10px;
                color:var(--G400);
                letter-spacing:.09em;
                text-transform:uppercase;
                margin-bottom:.8rem;
            }
            .lv-row{
                display:flex;
                align-items:center;
                gap:8px;
                margin-bottom:6px;
            }
            .lv-line{
                flex:1;
                height:2px;
                border-radius:1px;
            }
            .lv-tag{
                font-size:10px;
                font-weight:600;
                letter-spacing:.06em;
                text-transform:uppercase;
                padding:2px 7px;
                border-radius:2px;
                white-space:nowrap;
            }
            .lv-res{
                background:rgba(200,16,46,.25);
                color:var(--R)
            }
            .lv-res-line{
                background:var(--R);
            }
            .lv-sup{
                background:rgba(22,163,74,.25);
                color:#16A34A
            }
            .lv-sup-line{
                background:#16A34A;
            }
            .lv-zone{
                background:rgba(217,119,6,.2);
                color:var(--AM)
            }
            .lv-zone-line{
                background:var(--AM);
                height:6px;
                opacity:.5;
            }
            .lv-price{
                font-size:10px;
                color:var(--G400);
            }

            /* TF GRID */
            .tf-grid{
                display:grid;
                grid-template-columns:repeat(3,1fr);
                gap:8px;margin-bottom:1.2rem;
            }
            .tf-box{
                background:var(--G50);
                border:1px solid var(--G100);
                border-radius:4px;
                padding:.8rem;
            }
            .tf-box.primary{
                border-color:var(--zed-primary);
                background:var(--RL);
            }
            .tf-name{
                font-family:'Bebas Neue',sans-serif;
                font-size:1.1rem;
                color:var(--zed-dark-text);
                letter-spacing:.04em;
                margin-bottom:3px;
            }
            .tf-box.primary .tf-name{
                color:var(--zed-primary);
            }
            .tf-role{
                font-size:1rem;
                font-weight:600;
                letter-spacing:.07em;
                text-transform:uppercase;
                color:var(--G400);
                margin-bottom:6px;
            }
            .tf-box.primary .tf-role{
                color:var(--zed-primarys);
            }
            .tf-desc{ 
                color:var(--zed-secondary);
                line-height:1.5;
            }

    </style>

      <div class="container">  
            
            <div class="zed-sec-head mt-5 mb-3">  
                <h2 class="zed-sec-title">Core Lessons | Advanced Trading Strategies</h2> 
                <div class="underline"></div>
            </div>

            <div class="prog">
                <span class="prog-lbl">Course Progress</span>
                <div class="prog-bar"><div class="prog-fill" id="pbar"></div></div>
                <span class="prog-pct" id="ppct">0 / 12</span>
            </div>
            
            <!-- L1 -->
            <div class="mod active open" data-id="1">
                <div class="mod-hd" onclick="tog(1)">
                    <div class="mn">01</div>
                    <div class="micon"><i class="ti ti-building" aria-hidden="true"></i></div>
                    <div class="mmeta"><div class="mt">Market Structure Strategy</div><div class="ms">Reading the market's blueprint before placing any trade</div></div>
                    <div class="mright"><span class="badge b-start">Start Here</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
                </div>

                <div class="mbody open">

                    <div class="minner">
                        <p class="intro">Market structure is the foundation of all price action trading. Before applying any strategy, you must understand whether the market is forming higher highs and higher lows (bullish), lower highs and lower lows (bearish), or ranging. Every professional entry is taken in the context of structure — never against it.</p>

                        <div class="chart-visual">

                            <div class="chart-label"><i class="ti ti-chart-line" aria-hidden="true"></i> Bullish market structure — higher highs, higher lows</div>
                                <svg viewBox="0 0 300 80" width="100%" height="70">
                                <polyline points="10,70 50,50 70,58 110,35 130,43 170,20 190,28 230,10 250,16" stroke="#16A34A" stroke-width="2" fill="none" stroke-dasharray="200" stroke-dashoffset="200" style="animation:drawLine 1.2s ease forwards .3s"/>
                                <circle cx="10" cy="70" r="3" fill="#16A34A" opacity=".7"/>
                                <circle cx="70" cy="58" r="3" fill="#16A34A" opacity=".7"/>
                                <circle cx="130" cy="43" r="3" fill="#16A34A" opacity=".7"/>
                                <circle cx="190" cy="28" r="3" fill="#16A34A" opacity=".7"/>
                                <text x="12" y="78" fill="#16A34A" font-size="8" opacity=".8">HL</text>
                                <text x="72" y="67" fill="#16A34A" font-size="8" opacity=".8">HL</text>
                                <text x="132" y="52" fill="#16A34A" font-size="8" opacity=".8">HL</text>
                                <circle cx="50" cy="50" r="3" fill="#C8102E" opacity=".7"/>
                                <circle cx="110" cy="35" r="3" fill="#C8102E" opacity=".7"/>
                                <circle cx="170" cy="20" r="3" fill="#C8102E" opacity=".7"/>
                                <circle cx="230" cy="10" r="3" fill="#C8102E" opacity=".7"/>
                                <text x="40" y="46" fill="#C8102E" font-size="8" opacity=".8">HH</text>
                                <text x="100" y="31" fill="#C8102E" font-size="8" opacity=".8">HH</text>
                                <text x="160" y="16" fill="#C8102E" font-size="8" opacity=".8">HH</text>
                                </svg>
                            </div>

                            <div class="two">

                                <div class="tbox good">
                                    <div class="tbox-title"><i class="ti ti-trending-up" aria-hidden="true"></i> Bullish structure</div>
                                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Higher highs (HH) and higher lows (HL)</div>
                                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Bias: look for long setups only</div>
                                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Enter at HL — not at HH breakouts</div>
                                </div>

                                <div class="tbox danger">
                                    <div class="tbox-title"><i class="ti ti-trending-down" aria-hidden="true"></i> Bearish structure</div>
                                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Lower highs (LH) and lower lows (LL)</div>
                                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Bias: look for short setups only</div>
                                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Enter at LH — not at LL breakdowns</div>
                                </div>
                            </div>
                            
                            <div class="rcard">
                                <div class="rtitle"><i class="ti ti-list-check" aria-hidden="true"></i> Structure rules</div>
                                <div class="rrow"><div class="rdot"></div>Always identify structure on the higher timeframe before entering on lower</div>
                                <div class="rrow"><div class="rdot"></div>A break of structure (BOS) signals a potential trend change — never ignore it</div>
                                <div class="rrow"><div class="rdot"></div>In a range, do not trade the middle — only trade from the extreme edges</div>
                                <div class="rrow"><div class="rdot"></div>Structure is invalidated when a significant swing point is broken — exit or reassess</div>
                            </div>

                            <button class="btndone" onclick="markDone(1)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
                        </div>

                    </div>

                </div>

            <!-- L2 -->
            <div class="mod" data-id="2">

                <div class="mod-hd" onclick="tog(2)">
                    <div class="mn">02</div>
                    <div class="micon"><i class="ti ti-bolt" aria-hidden="true"></i></div>
                    <div class="mmeta"><div class="mt">Breakout Strategy</div><div class="ms">Trading the moment price breaks a key level with momentum</div></div>
                    <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
                </div>

                <div class="mbody">
                    <div class="minner">
                        <p class="intro">A breakout occurs when price moves decisively beyond a significant level — a resistance zone, consolidation range, or prior swing high — with increased momentum and volume. Trading breakouts requires distinguishing between genuine breaks and false breaks (fakeouts) that trap impulsive traders.</p>

                        <div class="chart-visual">

                            <div class="chart-label"><i class="ti ti-chart-line" aria-hidden="true"></i> Breakout above resistance — genuine vs false</div>
                                <svg viewBox="0 0 300 80" width="100%" height="70">
                                <line x1="10" y1="35" x2="280" y2="35" stroke="#C8102E" stroke-width="1" stroke-dasharray="4,3" opacity=".6"/>
                                <text x="282" y="38" fill="#C8102E" font-size="8">Res</text>
                                <polyline points="10,65 40,60 70,58 100,55 130,52 160,50 190,36 210,28 240,20 270,15" stroke="#16A34A" stroke-width="2" fill="none" stroke-dasharray="300" stroke-dashoffset="300" style="animation:drawLine 1.4s ease forwards .2s"/>
                                <line x1="185" y1="35" x2="185" y2="28" stroke="#fff" stroke-width="1" stroke-dasharray="2,2" opacity=".4"/>
                                <text x="140" y="47" fill="#999" font-size="8">Consolidation</text>
                                <text x="196" y="33" fill="#16A34A" font-size="8">Break ↑</text>
                                </svg>
                            </div>

                            <div class="sgrid">
                                <div class="sbox ok"><div class="sv g">Real</div><div class="sk">Strong close beyond level</div></div>
                                <div class="sbox hi"><div class="sv r">Fake</div><div class="sk">Wick beyond, closes back</div></div>
                                <div class="sbox warn"><div class="sv a">Wait</div><div class="sk">Confirm with retest</div></div>
                            </div>

                            <div class="rcard">
                                <div class="rtitle"><i class="ti ti-list-check" aria-hidden="true"></i> Breakout entry rules</div>
                                <div class="rrow"><div class="rdot"></div>Wait for a clean candle close beyond the level — not a wick</div>
                                <div class="rrow"><div class="rdot"></div>Higher-than-average momentum on the breakout candle increases validity</div>
                                <div class="rrow"><div class="rdot"></div>Stop loss: placed back inside the broken level, not beyond the candle low</div>
                                <div class="rrow"><div class="rdot"></div>Target: measure the height of the prior range and project it from the breakout point</div>
                                <div class="rrow"><div class="rdot"></div>Avoid breakout entries during low-liquidity sessions — fakeouts are more common</div>
                            </div>

                            <button class="btndone" onclick="markDone(2)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>

                        </div>

                    </div>
                </div>

            <!-- L3 -->
            <div class="mod" data-id="3">
                <div class="mod-hd" onclick="tog(3)">
                    <div class="mn">03</div>
                    <div class="micon"><i class="ti ti-arrow-back-up" aria-hidden="true"></i></div>
                    <div class="mmeta"><div class="mt">Break and Retest Strategy</div><div class="ms">Entering after confirmation — the professional's breakout entry</div></div>
                    <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
                </div>

                <div class="mbody">
                    <div class="minner">
                        <p class="intro">The Break and Retest strategy eliminates the fakeout problem by waiting for price to break a level, pull back to that level (now flipped from resistance to support, or vice versa) and confirm rejection before entering. It provides a superior Risk-to-Reward entry compared to chasing the initial breakout.</p>
                        <div class="steps">
                            <div class="step"><div class="step-num">01</div><div class="step-body"><div class="step-title">Identify the key level</div><div class="step-desc">Mark a significant resistance (for longs) or support (for shorts) — the level must be clean and well-tested</div></div></div>
                            <div class="step"><div class="step-num">02</div><div class="step-body"><div class="step-title">Wait for a clean break with close</div><div class="step-desc">Price must close convincingly beyond the level — a wick does not count as a break</div></div></div>
                            <div class="step"><div class="step-num">03</div><div class="step-body"><div class="step-title">Wait for the retest</div><div class="step-desc">Price returns to the broken level — which has now flipped. Resistance becomes support. Support becomes resistance.</div></div></div>
                            <div class="step"><div class="step-num">04</div><div class="step-body"><div class="step-title">Confirm rejection — then enter</div><div class="step-desc">Look for a rejection candle (pin bar, engulfing, or strong close) at the flipped level before placing the trade</div></div></div>
                            <div class="step"><div class="step-num">05</div><div class="step-body"><div class="step-title">Set stop below the flipped level</div><div class="step-desc">If price breaks back below the flipped support — the setup is invalidated. Stop goes there.</div></div></div>
                        </div>
                        <button class="btndone" onclick="markDone(3)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
                    </div>
                </div>
                
            </div>

            <!-- L4 -->
            <div class="mod" data-id="4">
            <div class="mod-hd" onclick="tog(4)">
                <div class="mn">04</div>
                <div class="micon"><i class="ti ti-wall" aria-hidden="true"></i></div>
                <div class="mmeta"><div class="mt">Support and Resistance Strategy</div><div class="ms">Trading the market's most reliable recurring levels</div></div>
                <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
            </div>
            <div class="mbody">
                <div class="minner">
                <p class="intro">Support and resistance levels are price zones where buying or selling pressure has historically been significant enough to halt or reverse a move. They represent the collective memory of the market — and the more times a level has been tested and held, the more significant it becomes.</p>
                <div class="level-visual">
                    <div class="lv-title">Key level structure</div>
                    <div class="lv-row"><div class="lv-line lv-res-line"></div><div class="lv-tag lv-res">Resistance</div><div class="lv-price">1.2850</div></div>
                    <div class="lv-row"><div class="lv-line lv-zone-line"></div><div class="lv-tag lv-zone">Premium Zone</div><div class="lv-price">1.2780–1.2820</div></div>
                    <div class="lv-row" style="margin-top:4px"><div class="lv-line" style="background:rgba(255,255,255,.15)"></div><div class="lv-tag" style="background:rgba(255,255,255,.08);color:#999">Price</div><div class="lv-price">1.2730</div></div>
                    <div class="lv-row" style="margin-top:4px"><div class="lv-line lv-zone-line"></div><div class="lv-tag lv-zone">Discount Zone</div><div class="lv-price">1.2640–1.2680</div></div>
                    <div class="lv-row"><div class="lv-line lv-sup-line"></div><div class="lv-tag lv-sup">Support</div><div class="lv-price">1.2600</div></div>
                </div>
                <div class="rcard">
                    <div class="rtitle"><i class="ti ti-list-check" aria-hidden="true"></i> S&R trading rules</div>
                    <div class="rrow"><div class="rdot"></div>Mark levels from the highest timeframe available — H4, Daily, Weekly are most significant</div>
                    <div class="rrow"><div class="rdot"></div>A level with 3 or more clean touches carries more weight than a level tested once</div>
                    <div class="rrow"><div class="rdot"></div>Do not enter the moment price touches a level — wait for a rejection candle to confirm</div>
                    <div class="rrow"><div class="rdot"></div>A broken support becomes resistance — and vice versa (role reversal)</div>
                    <div class="rrow"><div class="rdot"></div>The more confluences at a level (S/R + round number + Fibonacci), the higher the probability</div>
                </div>
                <button class="btndone" onclick="markDone(4)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
                </div>
            </div>
            </div>

            <!-- L5 -->
            <div class="mod" data-id="5">
            <div class="mod-hd" onclick="tog(5)">
                <div class="mn">05</div>
                <div class="micon"><i class="ti ti-trending-up" aria-hidden="true"></i></div>
                <div class="mmeta"><div class="mt">Trend Continuation Strategy</div><div class="ms">Trading with the dominant momentum — not against it</div></div>
                <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
            </div>
            <div class="mbody">
                <div class="minner">
                <p class="intro">Trend continuation setups are among the highest-probability trades available. Instead of trying to catch reversals, this strategy identifies an established trend and enters during a natural pause or consolidation — joining the dominant direction with the wind at your back.</p>
                <div class="sgrid">
                    <div class="sbox ok"><div class="sv g">70%</div><div class="sk">Win rate — trend trades</div></div>
                    <div class="sbox warn"><div class="sv a">45%</div><div class="sk">Win rate — counter-trend</div></div>
                    <div class="sbox hi"><div class="sv r">3×</div><div class="sk">Risk — trading against trend</div></div>
                </div>
                <div class="rcard green">
                    <div class="rtitle"><i class="ti ti-list-check" aria-hidden="true"></i> Trend continuation entry criteria</div>
                    <div class="rrow"><div class="rdot"></div>Confirm the trend on the higher timeframe — H4 or Daily must show clear direction</div>
                    <div class="rrow"><div class="rdot"></div>Wait for a pullback to a key level — moving average, prior structure, or Fibonacci zone</div>
                    <div class="rrow"><div class="rdot"></div>Look for a momentum shift at the pullback level — confirming buyers (or sellers) stepping back in</div>
                    <div class="rrow"><div class="rdot"></div>Enter in the direction of the trend — never counter-trend at these points</div>
                    <div class="rrow"><div class="rdot"></div>Target: the next significant structure level in the direction of the trend</div>
                </div>
                <button class="btndone" onclick="markDone(5)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
                </div>
            </div>
            </div>

            <!-- L6 -->
            <div class="mod" data-id="6">
            <div class="mod-hd" onclick="tog(6)">
                <div class="mn">06</div>
                <div class="micon"><i class="ti ti-arrow-curve-right" aria-hidden="true"></i></div>
                <div class="mmeta"><div class="mt">Pullback Trading Strategy</div><div class="ms">Entering trends at optimal value — not at momentum peaks</div></div>
                <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
            </div>
            <div class="mbody">
                <div class="minner">
                <p class="intro">Pullback trading is the discipline of waiting for price to retrace within an established trend before entering — rather than chasing breakouts at the worst possible risk. It offers superior entry prices, tighter stops and better Risk-to-Reward ratios than impulsive breakout chasing.</p>
                <div class="steps">
                    <div class="step"><div class="step-num">01</div><div class="step-body"><div class="step-title">Confirm the trend direction</div><div class="step-desc">Use H4 or Daily for trend bias — only trade pullbacks in the direction of the dominant trend</div></div></div>
                    <div class="step"><div class="step-num">02</div><div class="step-body"><div class="step-title">Identify the pullback zone</div><div class="step-desc">Mark the 38.2%–61.8% Fibonacci retracement, moving average confluence, or prior broken structure as the target pullback area</div></div></div>
                    <div class="step"><div class="step-num">03</div><div class="step-body"><div class="step-title">Wait — do not anticipate</div><div class="step-desc">Let price come to the zone — entering too early is the most common pullback trading mistake</div></div></div>
                    <div class="step"><div class="step-num">04</div><div class="step-body"><div class="step-title">Confirm rejection at the zone</div><div class="step-desc">A pin bar, engulfing candle, or momentum shift confirms that the pullback is ending and trend is resuming</div></div></div>
                    <div class="step"><div class="step-num">05</div><div class="step-body"><div class="step-title">Enter with tight stop and clear target</div><div class="step-desc">Stop below the pullback zone. Target: the next structural high (in uptrend) or low (in downtrend)</div></div></div>
                </div>
                <button class="btndone" onclick="markDone(6)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
                </div>
            </div>
            </div>

            <!-- L7 -->
            <div class="mod" data-id="7">
            <div class="mod-hd" onclick="tog(7)">
                <div class="mn">07</div>
                <div class="micon"><i class="ti ti-layers-intersect" aria-hidden="true"></i></div>
                <div class="mmeta"><div class="mt">Multi-Timeframe Analysis</div><div class="ms">Aligning higher and lower timeframes for maximum confluence</div></div>
                <div class="mright"><span class="badge b-adv">Advanced</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
            </div>
            <div class="mbody">
                <div class="minner">
                <p class="intro">Multi-Timeframe Analysis (MTFA) is the process of analysing the same instrument across multiple timeframes — from a macro view down to a precise entry level. Trading without it is like navigating with a street map while ignoring the motorway network above it.</p>
                <div class="tf-grid">
                    <div class="tf-box">
                    <div class="tf-name">Weekly / Daily</div>
                    <div class="tf-role">Macro Bias</div>
                    <div class="tf-desc">Determine the overall trend direction and mark the highest-significance structure levels</div>
                    </div>
                    <div class="tf-box primary">
                    <div class="tf-name">H4 / H1</div>
                    <div class="tf-role">Setup Timeframe</div>
                    <div class="tf-desc">Identify the actual trade setup — breakout, pullback, or retest — aligned with the macro bias</div>
                    </div>
                    <div class="tf-box">
                    <div class="tf-name">M15 / M5</div>
                    <div class="tf-role">Entry Precision</div>
                    <div class="tf-desc">Find the exact entry candle — the trigger that confirms the setup and tightens the stop</div>
                    </div>
                </div>
                <div class="rcard">
                    <div class="rtitle"><i class="ti ti-list-check" aria-hidden="true"></i> MTFA rules</div>
                    <div class="rrow"><div class="rdot"></div>Never trade a lower timeframe setup that conflicts with the higher timeframe trend</div>
                    <div class="rrow"><div class="rdot"></div>The higher the timeframe alignment, the higher the probability of the setup</div>
                    <div class="rrow"><div class="rdot"></div>If Daily is bearish — do not take H1 long setups, regardless of how clean they look</div>
                    <div class="rrow"><div class="rdot"></div>Use the macro timeframe for bias, the mid timeframe for setup, the lower for entry — always in that order</div>
                </div>
                <button class="btndone" onclick="markDone(7)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
                </div>
            </div>
            </div>

            <!-- L8 -->
            <div class="mod" data-id="8">
            <div class="mod-hd" onclick="tog(8)">
                <div class="mn">08</div>
                <div class="micon"><i class="ti ti-eye" aria-hidden="true"></i></div>
                <div class="mmeta"><div class="mt">Price Action Confirmation</div><div class="ms">Reading candlestick signals before every entry</div></div>
                <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
            </div>
            <div class="mbody">
                <div class="minner">
                <p class="intro">Price action confirmation is the final filter before entering any trade. A level alone is not enough — price must show a clear rejection or momentum shift at that level before you enter. The confirmation candle is your evidence that institutional participants are reacting to the level.</p>
                <div class="chart-visual">
                    <div class="chart-label"><i class="ti ti-chart-candle" aria-hidden="true"></i> Key confirmation candle patterns</div>
                    <div style="display:flex;gap:20px;padding:0 4px;align-items:flex-end;height:65px">
                    <div style="text-align:center;flex:1">
                        <div style="display:flex;flex-direction:column;align-items:center;height:55px;justify-content:flex-end">
                        <div style="width:1px;height:8px;background:#16A34A"></div>
                        <div style="width:10px;height:30px;background:#16A34A;border-radius:1px"></div>
                        <div style="width:1px;height:15px;background:#16A34A"></div>
                        </div>
                        <div style="font-size:9px;color:#16A34A;margin-top:3px">Bullish Pin</div>
                    </div>
                    <div style="text-align:center;flex:1">
                        <div style="display:flex;flex-direction:column;align-items:center;height:55px;justify-content:flex-end">
                        <div style="width:1px;height:5px;background:#C8102E"></div>
                        <div style="width:10px;height:30px;background:#C8102E;border-radius:1px"></div>
                        <div style="width:1px;height:18px;background:#C8102E"></div>
                        </div>
                        <div style="font-size:9px;color:#C8102E;margin-top:3px">Bearish Pin</div>
                    </div>
                    <div style="text-align:center;flex:1">
                        <div style="display:flex;flex-direction:column;align-items:center;height:55px;justify-content:flex-end">
                        <div style="width:1px;height:4px;background:#999"></div>
                        <div style="width:10px;height:8px;background:#16A34A;border-radius:1px"></div>
                        <div style="width:10px;height:20px;background:#C8102E;border-radius:1px;margin-top:1px"></div>
                        <div style="width:1px;height:4px;background:#999"></div>
                        </div>
                        <div style="font-size:9px;color:#16A34A;margin-top:3px">Engulfing</div>
                    </div>
                    <div style="text-align:center;flex:1">
                        <div style="display:flex;flex-direction:column;align-items:center;height:55px;justify-content:flex-end">
                        <div style="width:1px;height:10px;background:#D97706"></div>
                        <div style="width:10px;height:3px;background:#D97706;border-radius:1px"></div>
                        <div style="width:1px;height:10px;background:#D97706"></div>
                        </div>
                        <div style="font-size:9px;color:#D97706;margin-top:3px">Doji</div>
                    </div>
                    <div style="text-align:center;flex:1">
                        <div style="display:flex;flex-direction:column;align-items:center;height:55px;justify-content:flex-end">
                        <div style="width:1px;height:3px;background:#16A34A"></div>
                        <div style="width:10px;height:35px;background:#16A34A;border-radius:1px"></div>
                        <div style="width:1px;height:2px;background:#16A34A"></div>
                        </div>
                        <div style="font-size:9px;color:#16A34A;margin-top:3px">Strong Close</div>
                    </div>
                    </div>
                </div>
                <div class="rcard">
                    <div class="rtitle"><i class="ti ti-list-check" aria-hidden="true"></i> Confirmation rules</div>
                    <div class="rrow"><div class="rdot"></div>Wait for the candle to fully close — never enter on a candle still forming</div>
                    <div class="rrow"><div class="rdot"></div>A bullish pin bar at support with a long lower wick shows strong rejection of lower prices</div>
                    <div class="rrow"><div class="rdot"></div>A bearish engulfing candle at resistance shows strong rejection of higher prices</div>
                    <div class="rrow"><div class="rdot"></div>A strong momentum close (no wick in the direction of travel) signals conviction</div>
                    <div class="rrow"><div class="rdot"></div>One clear confirmation candle is sufficient — waiting for more reduces your R:R unnecessarily</div>
                </div>
                <button class="btndone" onclick="markDone(8)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
                </div>
            </div>
            </div>

            <!-- L9 -->
            <div class="mod" data-id="9">
            <div class="mod-hd" onclick="tog(9)">
                <div class="mn">09</div>
                <div class="micon"><i class="ti ti-news" aria-hidden="true"></i></div>
                <div class="mmeta"><div class="mt">News Trading Risk</div><div class="ms">Managing your exposure during high-impact economic events</div></div>
                <div class="mright"><span class="badge b-adv">Advanced</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
            </div>
            <div class="mbody">
                <div class="minner">
                <p class="intro">High-impact news events — Non-Farm Payrolls, interest rate decisions, CPI releases — create extreme, unpredictable price movement. Spreads widen, slippage increases and stop losses may not execute at the intended price. News is not a strategy — it is a risk to be managed.</p>
                <div class="two">
                    <div class="tbox danger">
                    <div class="tbox-title"><i class="ti ti-alert-triangle" aria-hidden="true"></i> High-impact events</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Non-Farm Payrolls (NFP) — first Friday of month</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Central bank interest rate decisions</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>CPI / inflation data releases</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>GDP reports and employment data</div>
                    </div>
                    <div class="tbox warn">
                    <div class="tbox-title"><i class="ti ti-shield" aria-hidden="true"></i> Protection protocol</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Check the economic calendar every morning</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Close open positions 30 min before red events</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Do not open new trades during the event window</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Wait 15–30 min post-news for price to stabilise</div>
                    </div>
                </div>
                <div class="rcard amber">
                    <div class="rtitle"><i class="ti ti-clock" aria-hidden="true"></i> News trading rules</div>
                    <div class="rrow"><div class="rdot"></div>Never trade the news spike directly — the initial move is almost always a trap</div>
                    <div class="rrow"><div class="rdot"></div>The tradeable move comes after the market digests the data — 15–60 minutes post-release</div>
                    <div class="rrow"><div class="rdot"></div>If already in a trade, move stop to breakeven before the event — protect open profit</div>
                    <div class="rrow"><div class="rdot"></div>Treat red-flag news as a trading pause — not an opportunity</div>
                </div>
                <button class="btndone" onclick="markDone(9)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
                </div>
            </div>
            </div>

            <!-- L10 -->
            <div class="mod" data-id="10">
            <div class="mod-hd" onclick="tog(10)">
                <div class="mn">10</div>
                <div class="micon"><i class="ti ti-target" aria-hidden="true"></i></div>
                <div class="mmeta"><div class="mt">Entry and Exit Rules</div><div class="ms">Defining the exact mechanics of every trade</div></div>
                <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
            </div>
            <div class="mbody">
                <div class="minner">
                <p class="intro">Entry and exit rules are the operational layer of your strategy. Without them precisely defined in writing, every trade becomes a decision made in real-time under pressure — which is the definition of emotional trading. Your rules must answer every possible question before the trade begins.</p>
                <div class="two">
                    <div class="tbox good">
                    <div class="tbox-title"><i class="ti ti-login" aria-hidden="true"></i> Entry rules — must define</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>The exact candle pattern required (pin bar, engulfing, etc.)</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>The timeframe of the entry candle</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>The level or zone it must occur at</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>The higher timeframe alignment required</div>
                    </div>
                    <div class="tbox good">
                    <div class="tbox-title"><i class="ti ti-logout" aria-hidden="true"></i> Exit rules — must define</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Stop loss placement — the exact logic</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Target level — structure-based, not arbitrary</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Trailing stop method — fixed, ATR, or structure</div>
                    <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Partial profit taking — percentage and at what level</div>
                    </div>
                </div>
                <div class="rcard">
                    <div class="rtitle"><i class="ti ti-alert-triangle" aria-hidden="true"></i> The non-negotiables</div>
                    <div class="rrow"><div class="rdot"></div>Every trade must have a stop loss and a target defined at the moment of entry</div>
                    <div class="rrow"><div class="rdot"></div>Never move a stop further away — only towards breakeven or into profit</div>
                    <div class="rrow"><div class="rdot"></div>Exit at your pre-defined target — do not let greed extend the trade beyond the plan</div>
                    <div class="rrow"><div class="rdot"></div>If the trade has not reached its target after a defined time — reassess and exit if conditions change</div>
                </div>
                <button class="btndone" onclick="markDone(10)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
                </div>
            </div>
            </div>

            <!-- L11 -->
            <div class="mod" data-id="11">
            <div class="mod-hd" onclick="tog(11)">
                <div class="mn">11</div>
                <div class="micon"><i class="ti ti-history" aria-hidden="true"></i></div>
                <div class="mmeta"><div class="mt">Backtesting Basics</div><div class="ms">Proving your strategy works before risking real capital</div></div>
                <div class="mright"><span class="badge b-adv">Advanced</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
            </div>
            <div class="mbody">
                <div class="minner">
                <p class="intro">Backtesting is the process of applying your strategy to historical price data to measure its performance before risking live capital. It transforms opinion into evidence — replacing "I think this works" with "this strategy produced a 2.1 R expectancy over 200 trades across 12 months."</p>
                <div class="steps">
                    <div class="step"><div class="step-num">01</div><div class="step-body"><div class="step-title">Define your strategy rules in writing</div><div class="step-desc">Every entry criterion, exit rule and filter must be written down — if it is not written, it cannot be tested consistently</div></div></div>
                    <div class="step"><div class="step-num">02</div><div class="step-body"><div class="step-title">Select your instrument and timeframe</div><div class="step-desc">Test on the exact pair and timeframe you intend to trade live — results from EUR/USD H4 do not automatically transfer to GBP/JPY M15</div></div></div>
                    <div class="step"><div class="step-num">03</div><div class="step-body"><div class="step-title">Go back at least 12 months of data</div><div class="step-desc">Markets cycle through trending, ranging and volatile phases — your strategy must be tested across all of them</div></div></div>
                    <div class="step"><div class="step-num">04</div><div class="step-body"><div class="step-title">Log every signal — including skipped ones</div><div class="step-desc">Record win/loss, R:R achieved, entry reason and whether the setup fully met criteria. Minimum 50 trades for statistical validity</div></div></div>
                    <div class="step"><div class="step-num">05</div><div class="step-body"><div class="step-title">Analyse and calculate your edge</div><div class="step-desc">Win rate × average win − loss rate × average loss = expectancy per trade. A positive expectancy means a viable strategy</div></div></div>
                </div>
                <div class="sgrid sgrid-2">
                    <div class="sbox ok"><div class="sv g">50+</div><div class="sk">Minimum trades to validate</div></div>
                    <div class="sbox"><div class="sv">12m</div><div class="sk">Minimum data period</div></div>
                </div>
                <button class="btndone" onclick="markDone(11)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
                </div>
            </div>
            </div>

            <!-- L12 -->
            <div class="mod" data-id="12">
            <div class="mod-hd" onclick="tog(12)">
                <div class="mn">12</div>
                <div class="micon"><i class="ti ti-clipboard-check" aria-hidden="true"></i></div>
                <div class="mmeta"><div class="mt">Strategy Checklist</div><div class="ms">Run through this before every single trade entry</div></div>
                <div class="mright"><span class="badge b-final">Final</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
            </div>
            <div class="mbody">
                <div class="minner">
                <p class="intro">This is your complete pre-trade strategy validation protocol. Every point must be confirmed before a position is opened. One unchecked box is sufficient reason to skip the trade. A setup that passes every filter is an A-grade trade — and A-grade trades are the only ones worth taking.</p>
                <div class="clstat" id="clstat">0 of 12 checked</div>
                <div class="clwrap" id="clwrap">
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I have identified the market structure on H4 or Daily — trend direction is clear</span></div>
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">This trade is aligned with the higher timeframe bias — not counter to it</span></div>
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">The setup is occurring at a significant, well-tested level — not a random price</span></div>
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I have a price action confirmation candle — fully closed, not still forming</span></div>
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">This setup meets my written strategy criteria — 100%, not 80%</span></div>
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">My stop loss is placed at a logical structural level — not a random pip amount</span></div>
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">My Risk-to-Reward ratio is a minimum of 1:1.5 — calculated, not estimated</span></div>
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">My lot size has been calculated based on my account risk % — not guessed</span></div>
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I have checked the economic calendar — no red-flag news event in the next 2 hours</span></div>
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I have not hit my daily loss limit today</span></div>
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">My emotional state is calm — I am executing a plan, not acting on impulse</span></div>
                    <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I will accept the outcome of this trade — win or loss — without deviation from the plan</span></div>
                </div>
                <button class="btndone" onclick="markDone(12)"><i class="ti ti-trophy" aria-hidden="true"></i> Complete Course</button>
                </div>
            </div>
            </div>
    </div>

    <div class="container"> 

        <div class="zed-sec-head mt-5 mb-3">  
            <h2 class="zed-sec-title">Advanced Trading Strategies | FAQ</h2> 
            <div class="underline"></div>
        </div>
        
        <div class="faq-wrap">
        
        <div class="faq-note">Professional answers optimised for Google search, AI assistants and voice search — covering the most searched questions on advanced trading strategies.</div>

        <div class="fi">
            <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is market structure in trading and why does it matter?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
            <div class="fa"><div class="fa-inner">Market structure is the pattern of highs and lows that price creates over time — defining whether a market is in an uptrend (higher highs, higher lows), downtrend (lower highs, lower lows), or range. <b>It matters because every professional entry should be taken in alignment with structure — never against it.</b> A trader who ignores structure is entering trades without understanding the broader context the market is operating in.</div></div>
        </div>

        <div class="fi">
            <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is the difference between a breakout and a break and retest?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
            <div class="fa"><div class="fa-inner">A breakout entry is taken at the moment price moves beyond a key level — carrying the risk of entering a fakeout. A break and retest entry waits for price to break the level, pull back to it (now flipped — resistance becomes support or vice versa) and show a rejection before entering. <b>The break and retest offers a tighter stop, better R:R and lower fakeout risk</b> — making it the preferred entry method for most professional price action traders.</div></div>
        </div>

        <div class="fi">
            <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How do you use multi-timeframe analysis in trading?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
            <div class="fa"><div class="fa-inner">Multi-timeframe analysis uses three timeframes simultaneously: a macro timeframe (Daily or Weekly) to define trend direction and major structure, a mid timeframe (H4 or H1) to identify the specific trade setup and a lower timeframe (M15 or M5) to pinpoint the entry candle. <b>The golden rule is that lower timeframe setups must align with — never contradict — the higher timeframe bias.</b> Alignment across all three timeframes produces the highest-probability trades.</div></div>
        </div>

        <div class="fi">
            <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is a pullback in trading and how do you trade it?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
            <div class="fa"><div class="fa-inner">A pullback is a temporary retracement of price against the dominant trend — moving in the opposite direction before resuming the original direction. <b>To trade it: confirm the trend on the higher timeframe, identify a key pullback zone (Fibonacci 38.2–61.8%, moving average, or prior structure), wait for price to reach that zone, then wait for a rejection candle before entering in the trend direction.</b> Pullback trading offers better entry prices and tighter stops than breakout chasing.</div></div>
        </div>

        <div class="fi">
            <div class="fq" onclick="faqTog(this)"><span class="fq-txt">Should I trade during news events?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
            <div class="fa"><div class="fa-inner">For most traders — particularly those who are intermediate level — <b>trading during high-impact news events should be avoided.</b> Spreads widen dramatically, slippage means stop losses do not execute at the intended price and the initial price spike is almost always a market-maker trap that reverses quickly. The professional approach is to close or protect open positions 30 minutes before a red-flag event and wait 15–30 minutes after the release for price to stabilise before considering new entries.</div></div>
        </div>

        <div class="fi">
            <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How do you backtest a trading strategy?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
            <div class="fa"><div class="fa-inner">To backtest a strategy: write every entry and exit rule in precise detail, select your target instrument and timeframe, scroll back through at least 12 months of historical data and log every signal your rules would have generated — including the ones you would have skipped. Record win/loss, R:R achieved and entry conditions for each. <b>A minimum of 50 trades is required for statistical validity.</b> Calculate your expectancy: (Win Rate × Average Win) − (Loss Rate × Average Loss). A positive result confirms a viable edge.</div></div>
        </div>

        <div class="fi">
            <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What price action patterns are best for trade confirmation?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
            <div class="fa"><div class="fa-inner">The most reliable price action confirmation patterns are: <b>the pin bar</b> (a long wick showing rejection of a level with a small body), <b>the engulfing candle</b> (a candle that completely encompasses the prior candle's body, showing a decisive shift in momentum) and <b>a strong momentum close</b> (a full-bodied candle with minimal wicks closing at or near its high or low). All three must occur at a significant level — at random price they carry no predictive value.</div></div>
        </div>

        <div class="fi">
            <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is support and resistance in trading?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
            <div class="fa"><div class="fa-inner">Support is a price level or zone where buying pressure has historically been strong enough to halt a declining move and push price back up. Resistance is the opposite — where selling pressure has consistently prevented further upward movement. <b>The more times a level has been tested and respected, the greater its significance.</b> When a support level is broken convincingly, it typically flips to become resistance — a concept called role reversal that forms the basis of the break and retest strategy.</div></div>
        </div>

        <div class="fi">
            <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is Zed Capital's Advanced Trading Strategies course designed for?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
            <div class="fa"><div class="fa-inner">This course — <b>Course 5 of Zed Capital's Core Trading Series</b> — is designed for intermediate to advanced traders who already understand the basics of risk management and trading psychology and are ready to build a professional strategy framework. It covers market structure, seven specific strategy types, multi-timeframe analysis, price action confirmation, news risk management, entry and exit rules and backtesting — providing a complete, systematic approach to identifying and executing high-probability trades.</div></div>
        </div>
        </div>

    </div>

    <script>
        
        const done=new Set();
        function tog(id){
        document.querySelectorAll('.mod').forEach(m=>{
            const mid=+m.dataset.id,body=m.querySelector('.mbody');
            if(mid===id){const o=body.classList.contains('open');body.classList.toggle('open',!o);m.classList.toggle('open',!o);}
            else{body.classList.remove('open');m.classList.remove('open');}
        });
        }
        function markDone(id){
        done.add(id);
        const m=document.querySelector(`.mod[data-id="${id}"]`);
        if(m){m.classList.add('done');m.classList.remove('active','open');m.querySelector('.mbody').classList.remove('open');const b=m.querySelector('.badge');b.className='badge b-done';b.textContent='Done';}
        const pct=Math.round((done.size/12)*100);
        document.getElementById('pbar').style.width=pct+'%';
        document.getElementById('ppct').textContent=done.size+' / 12';
        document.getElementById('hk3').textContent=done.size;
        const nx=id+1;
        if(nx<=12){const nm=document.querySelector(`.mod[data-id="${nx}"]`);if(nm){nm.classList.add('active');tog(nx);}}
        if(id===12)setTimeout(()=>sendPrompt('I have completed the Zed Capital Advanced Trading Strategies course. Please summarise my key learnings and recommend the next course in the series.'),400);
        }
        function chk(el){
        el.classList.toggle('checked');
        el.querySelector('.cbox').textContent=el.classList.contains('checked')?'✓':'';
        const all=document.querySelectorAll('#clwrap .ci').length;
        const n=document.querySelectorAll('#clwrap .ci.checked').length;
        const st=document.getElementById('clstat');
        if(n===all){st.textContent='All criteria confirmed — this is an A-grade setup. You may enter.';st.style.color='var(--zed-primary)';st.style.fontWeight='600';}
        else{st.textContent=n+' of '+all+' checked';st.style.color='var(--G400)';st.style.fontWeight='500';}
        }
        function faqTog(qel){
        const fi=qel.closest('.fi'),fa=fi.querySelector('.fa'),isOpen=fa.classList.contains('open');
        document.querySelectorAll('.fi').forEach(f=>{f.classList.remove('open');f.querySelector('.fa').classList.remove('open');});
        if(!isOpen){fi.classList.add('open');fa.classList.add('open');}
        };

    </script>
 
<?php
include_once ('elements/footer.php');
?>