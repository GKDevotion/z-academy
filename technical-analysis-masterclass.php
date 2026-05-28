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
            min-width: 160px;
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
              Technical Analysis <em><br>Masterclass</em>
          </h1>
          <p class="sub">
              Complete guide to chart reading and price action.
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
                      <div class="lbl">Modules</div>
                  </div>
              </div>
              <div class="float-stat">
                  <div class="ico"><i class="bi bi-play-btn-fill"></i></div>
                  <div>
                      <div class="val">80+</div>
                      <div class="lbl">Concepts</div>
                  </div>
              </div>
              <div class="float-stat">
                  <div class="ico"><i class="bi bi-award-fill"></i></div>
                  <div>
                      <div class="val">∞</div>
                      <div class="lbl">Practice</div>
                  </div>
              </div>
              <div class="float-stat d-none">
                  <div class="ico"><i class="bi bi-currency-dollar"></i></div>
                  <div>
                      <div class="val">100K</div>
                      <div class="lbl">Units of Base Currency</div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <div class="hdiv"></div>
  
  <style>
    :root{
      --black:#0d0d0d;
      --red:#C0392B;
      --white:#ffffff;
      --g1:#f5f5f5;
      --g2:#ebebeb;
      --g3:#d4d4d4;
      --g4:#a3a3a3;
      --g5:#737373;
      --g6:#404040;
      --text:#1a1a1a;
    } 
  
    /* PROGRESS */
    .progress-bar{height:3px;background:var(--g2);}
    .progress-fill{
      height:100%;
      background:var(--zed-primary);
      transition:width 0.4s ease;
    }

    /* NAV */
    .nav{
      display:flex;
      background:var(--white);
      border-bottom:1px solid var(--g2);
      overflow-x:auto;
      justify-content: center;
      gap: 0px;
    }
    .nav-btn{
      font-family: 'Poppins', serif;
      font-size:1rem;
      letter-spacing:1px;
      text-transform:uppercase;
      background:none;
      border:none;
      color:var(--g4);
      padding:0.8rem 1.1rem;
      cursor:pointer;
      border-bottom:2px solid transparent;
      white-space:nowrap;
      transition:all 0.2s;
    }
    .nav-btn:hover{color:var(--text);}
    .nav-btn.active{
      color:var(--black);
      border-bottom-color:var(--zed-primary);
    }

    /* MODULE */
    .module{display:none;animation:fadeIn 0.25s ease;}
    .module.active{display:block;}
    @keyframes fadeIn{from{opacity:0;transform:translateY(6px)}to{opacity:1;transform:translateY(0)}}

    .mod-header{background:var(--g1);border-bottom:1px solid var(--g2);padding:1.5rem 2rem;display:flex;align-items:flex-start;gap:1rem;}
    .mod-num{
      font-family: 'Poppins', serif;
      font-size:3.5rem;
      color:var(--zed-secondary);
      line-height:1;
      min-width:58px;
    }
    .mod-badge{
      font-family: 'Poppins', serif;
      font-size:1rem;
      color:var(--zed-secondary);
      letter-spacing:2px;
      text-transform:uppercase;
      margin-bottom:0.3rem;
    }
    .mod-title{
      font-family: 'Poppins', serif;
      font-size:1.8rem;
      color:var(--black);
      letter-spacing:1px;
    }
    .mod-desc{ 
      color:var(--zed-secondary);
      font-style:italic;
      margin-top:0.2rem;
    }

    .mod-body{padding:1.5rem 2rem;background:var(--white);}
    .section{margin-bottom:2rem;}
    .section-title{
      font-family: 'Poppins', serif;
      font-size:1.25rem;
      color:var(--black);
      letter-spacing:2px;
      text-transform:uppercase;
      border-left:3px solid var(--zed-primary);
      padding-left:0.7rem;
      margin-bottom:1rem;
    }

    /* CARDS */
    .concepts{display:grid;grid-template-columns:repeat(auto-fit,minmax(195px,1fr));gap:0.75rem;}
    .concept{background:var(--g1);border:1px solid var(--g2);border-left:3px solid var(--g6);padding:1rem;border-radius:2px;}
    .concept h4{
      font-family: 'Poppins', serif;
      font-size:1rem;
      color:var(--g6);
      text-transform:uppercase;
      letter-spacing:1px;
      margin-bottom:0.4rem;
    }
    .concept p{ 
      color:var(--zed-secondary);
      line-height:1.55;
    }

    /* LIST */
    .rules{list-style:none;display:flex;flex-direction:column;gap:0.45rem;}
    .rules li{
      display:flex;
      gap:0.75rem;
      align-items:flex-start; 
      color:var(--zed-secondary);
      line-height:1.5;
      padding:0.6rem 0.85rem;
      background:var(--g1);
      border-left:2px solid var(--g3);
    }
    .rules li::before{content:attr(data-n);font-family:'Bebas Neue',sans-serif;font-size:1.1rem;color:var(--black);min-width:18px;}

    /* INDICATOR CARD */
    .ind-card{background:var(--g1);border:1px solid var(--g2);padding:1rem 1.25rem;border-radius:2px;}
    .ind-name{font-family:'Bebas Neue',sans-serif;font-size:1.1rem;color:var(--black);letter-spacing:1px;margin-bottom:0.5rem;}
    .ind-detail{font-size:0.93rem;color:#444;line-height:1.6;}
    .tag{display:inline-block;font-family: 'Poppins', serif;font-size:10px;background:var(--g2);color:var(--g6);padding:2px 8px;border-radius:1px;margin:2px 2px 0 0;letter-spacing:1px;border:1px solid var(--g3);}

    /* PATTERN */
    .pattern-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:0.75rem;}
    .pattern{background:var(--g1);border:1px solid var(--g2);padding:1rem;border-radius:2px;text-align:center;}
    .pattern-name{
      font-family: 'Poppins', serif;
      color:var(--g6);
      text-transform:uppercase;
      letter-spacing:1px;
      margin-bottom:0.5rem;
    }
    .pattern-sig{ 
      color:var(--g5);
      margin-top:0.4rem;
    }

    /* R:R */
    .rr-visual{background:var(--g1);border:1px solid var(--g2);padding:1.5rem;border-radius:2px;margin-bottom:1rem;}
    .rr-label{font-family: 'Poppins', serif;font-size:11px;color:var(--g5);margin-bottom:0.25rem;text-transform:uppercase;letter-spacing:1px;}
    .rr-bar{position:relative;height:14px;border-radius:2px;margin:0.4rem 0;}
    .loss-bar{background:var(--g3);width:33%;}
    .gain-bar{background:var(--black);width:100%;}

    /* CHECKLIST */
    .checklist{display:flex;flex-direction:column;gap:0.45rem;}
    .check-item{display:flex;align-items:flex-start;gap:0.75rem;padding:0.75rem 1rem;background:var(--g1);border:1px solid var(--g2);border-radius:2px;cursor:pointer;transition:border-color 0.2s;}
    .check-item:hover{border-color:var(--g4);}
    .check-item.checked{
      border-left:3px solid var(--zed-primary);
      background:var(--g2);
    }
    .check-box{width:16px;height:16px;border:1.5px solid var(--g3);border-radius:2px;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-top:2px;transition:all 0.2s;}
    .check-item.checked .check-box{
      background:var(--zed-primary);
      border-color:var(--zed-primary);
    }
    .check-mark{font-size:10px;color:white;display:none;}
    .check-item.checked .check-mark{display:block;}
    .check-text{
      font-size:0.95rem;
      color:#333;
      line-height:1.5;
    }
    .check-cat{font-family: 'Poppins', serif;font-size:10px;color:var(--g5);text-transform:uppercase;letter-spacing:1px;margin-top:0.2rem;}

    /* FOOTER */
    .footer{padding:1.25rem 2rem;border-top:1px solid var(--g2);display:flex;justify-content:space-between;align-items:center;background:var(--g1);}
    .btn-nav{font-family: 'Poppins', serif;font-size:11px;letter-spacing:1px;text-transform:uppercase;padding:0.6rem 1.25rem;cursor:pointer;border-radius:2px;}
    .btn-prev{background:none;border:1px solid var(--g3);color:var(--g5);}
    .btn-prev:hover{border-color:var(--black);color:var(--black);}
    .btn-next{
      background:var(--zed-primary);
      border:1px solid var(--zed-primary);
      color:#fff;
    }
    .btn-next:hover{
      background:var(--zed-primary);
    }
    .mod-indicator{font-family: 'Poppins', serif;font-size:11px;color:var(--g5);}

    .chart-bg{background:var(--g1);border:1px solid var(--g2);padding:1rem;border-radius:2px;margin-bottom:1rem;}
    .formula-box{background:var(--g1);border:1px solid var(--g2);border-left:4px solid var(--black);padding:1rem 1.25rem;border-radius:2px;font-family: 'Poppins', serif;font-size:13px;color:var(--text);}

    table.rr-table{
      width:100%;
      border-collapse:collapse;
      font-family: 'Poppins', serif; 
    }
    table.rr-table th{padding:8px;text-align:left;color:var(--black);border-bottom:1px solid var(--g3);}
    table.rr-table th:not(:first-child){text-align:center;}
    table.rr-table td{padding:8px;text-align:center;border-bottom:1px solid var(--g2);}
    table.rr-table td:first-child{text-align:left;color:var(--g5);}
    .neg{color:var(--g4);}
    .pos{color:var(--black);font-weight:500;}
    .strong{color:var(--black);font-weight:700;}

    @media(max-width:600px){
      .hero-title{font-size:2.4rem;}
      .mod-num{font-size:2.5rem;min-width:44px;}
      .concepts{grid-template-columns:1fr;}
    }
  </style>

  <div class="container">
    <div class="progress-bar"><div class="progress-fill" id="prog" style="width:8.3%"></div></div>

    <nav class="nav">
      <button class="nav-btn active" onclick="show(0)">Intro</button>
      <button class="nav-btn" onclick="show(1)">Candles</button>
      <button class="nav-btn" onclick="show(2)">Structure</button>
      <button class="nav-btn" onclick="show(3)">S&R</button>
      <button class="nav-btn" onclick="show(4)">Trends</button>
      <button class="nav-btn" onclick="show(5)">Patterns</button>
      <button class="nav-btn" onclick="show(6)">Charts</button>
      <button class="nav-btn" onclick="show(7)">Indicators</button>
      <button class="nav-btn" onclick="show(8)">Breakout</button>
      <button class="nav-btn" onclick="show(9)">Entry/SL/TP</button>
      <button class="nav-btn" onclick="show(10)">R:R Ratio</button>
      <button class="nav-btn" onclick="show(11)">Checklist</button>
    </nav>

    <!-- M0 INTRO -->
    <div class="module active" id="m0">
      <div class="mod-header"><div class="mod-num">01</div><div><div class="mod-badge">Module 1 — Foundation</div><div class="mod-title">Introduction to Technical Analysis</div><div class="mod-desc">The scientific method to understand price action</div></div></div>
      <div class="mod-body">
        <div class="section">
          <div class="section-title">What is Technical Analysis?</div>
          <div class="concepts">
            <div class="concept"><h4>Definition</h4><p>Technical Analysis forecasts future price direction by studying past price data and volume. Core belief: <em>everything is already reflected in the price.</em></p></div>
            <div class="concept"><h4>Fundamental vs Technical</h4><p>Fundamental: analyzing company value (earnings, balance sheet). Technical: studying chart patterns and price movement. Traders primarily use technical.</p></div>
            <div class="concept"><h4>3 Core Assumptions</h4><p><strong>1.</strong> Market discounts everything<br><strong>2.</strong> Prices move in trends<br><strong>3.</strong> History repeats itself</p></div>
            <div class="concept"><h4>Time Frames</h4><p>Scalping: 1–5 min<br>Day Trading: 15min–1hr<br>Swing Trading: 4hr–Daily<br>Position Trading: Weekly–Monthly</p></div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Markets & Instruments</div>
          <ul class="rules">
            <li data-n="→">Forex (EUR/USD, GBP/USD) — most liquid market, open 24/5, largest in the world</li>
            <li data-n="→">Crypto (BTC, ETH) — open 24/7, high volatility, very accessible for retail traders</li>
            <li data-n="→">Stocks — company shares traded during exchange hours, great for swing trading</li>
            <li data-n="→">Commodities — Gold, Oil, Silver — driven by global demand and supply dynamics</li>
            <li data-n="→">Indices — Nifty 50, S&P 500 — barometers of overall market health</li>
          </ul>
        </div>
        <div class="section">
          <div class="section-title">Dow Theory — The Foundation of TA</div>
          <ul class="rules">
            <li data-n="1">Markets move in three trends: Primary (months–years), Secondary (weeks–months), Minor (days–weeks)</li>
            <li data-n="2">Markets have 3 phases: Accumulation → Public Participation → Distribution</li>
            <li data-n="3">Volume must confirm the trend — volume should increase in the direction of trend</li>
            <li data-n="4">A trend remains in force until it clearly reverses — don't fight it prematurely</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- M1 CANDLES -->
    <div class="module" id="m1">
      <div class="mod-header"><div class="mod-num">02</div><div><div class="mod-badge">Module 2 — Core Skill</div><div class="mod-title">Candlestick Charts</div><div class="mod-desc">Learn to read Japanese candlesticks like a pro</div></div></div>
      <div class="mod-body">
        <div class="section">
          <div class="section-title">Anatomy of a Candlestick</div>
          <div style="display:grid;grid-template-columns:auto 1fr;gap:1.5rem;align-items:start;">
            <div>
              <svg viewBox="0 0 130 220" width="130">
                <line x1="65" y1="10" x2="65" y2="52" stroke="#a3a3a3" stroke-width="2"/>
                <rect x="28" y="52" width="74" height="110" fill="#0d0d0d" rx="2"/>
                <line x1="65" y1="162" x2="65" y2="208" stroke="#a3a3a3" stroke-width="2"/>
                <text x="6" y="18" fill="#a3a3a3" font-size="10" font-family="monospace">High</text>
                <text x="6" y="78" fill="#ffffff" font-size="10" font-family="monospace">Open</text>
                <text x="6" y="148" fill="#ffffff" font-size="10" font-family="monospace">Close</text>
                <text x="6" y="200" fill="#a3a3a3" font-size="10" font-family="monospace">Low</text>
              </svg>
            </div>
            <div>
              <ul class="rules" style="margin-bottom:1rem;">
                <li data-n="O">Open — price at which the candle opened for that period</li>
                <li data-n="H">High — highest price reached during the period</li>
                <li data-n="L">Low — lowest price reached during the period</li>
                <li data-n="C">Close — price at which the candle closed</li>
              </ul>
              <div style="display:flex;gap:1.5rem;padding:1rem;background:var(--g1);border:1px solid var(--g2);">
                <div style="display:flex;align-items:center;gap:0.5rem;"><div style="width:20px;height:32px;background:var(--black);border-radius:2px;"></div><div style="font-size:0.85rem;color:#555;font-family:monospace;"><strong>BEARISH</strong><br>Close &lt; Open<br>Filled black</div></div>
                <div style="display:flex;align-items:center;gap:0.5rem;"><div style="width:20px;height:32px;background:var(--white);border:2px solid var(--black);border-radius:2px;"></div><div style="font-size:0.85rem;color:#555;font-family:monospace;"><strong>BULLISH</strong><br>Close &gt; Open<br>Hollow/white</div></div>
              </div>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Key Candle Types</div>
          <div class="concepts">
            <div class="concept"><h4>Marubozu</h4><p>No wicks at all. Pure buying or selling pressure from open to close. Strong trend continuation signal.</p></div>
            <div class="concept"><h4>Doji</h4><p>Open and close are almost equal. Signals market indecision. Potential reversal hint when appearing at extremes.</p></div>
            <div class="concept"><h4>Spinning Top</h4><p>Small body with wicks on both sides. Buyers and sellers balanced. Signals consolidation or pause in trend.</p></div>
            <div class="concept"><h4>Hammer</h4><p>Small body at top, long lower wick. Bullish reversal at support. Buyers rejected lower prices strongly.</p></div>
            <div class="concept"><h4>Shooting Star</h4><p>Small body at bottom, long upper wick. Bearish reversal at resistance. Sellers pushed price back down hard.</p></div>
            <div class="concept"><h4>Long Wick Candle</h4><p>One extremely long wick. Shows strong rejection of that price level. Price tested but could not sustain there.</p></div>
          </div>
        </div>
      </div>
    </div>

    <!-- M2 STRUCTURE -->
    <div class="module" id="m2">
      <div class="mod-header"><div class="mod-num">03</div><div><div class="mod-badge">Module 3 — Price Logic</div><div class="mod-title">Market Structure</div><div class="mod-desc">Understanding how and why markets move</div></div></div>
      <div class="mod-body">
        <div class="section">
          <div class="section-title">The 3 Market Phases</div>
          <div class="chart-bg">
            <svg viewBox="0 0 580 170" style="width:100%;overflow:visible;">
              <polyline points="20,148 60,118 100,128 140,88 180,98 220,58 260,68" fill="none" stroke="#0d0d0d" stroke-width="2.5"/>
              <polyline points="260,68 300,63 340,78 380,66 420,80 460,70" fill="none" stroke="#737373" stroke-width="2.5"/>
              <polyline points="460,70 500,100 540,88 580,128" fill="none" stroke="#d4d4d4" stroke-width="2.5"/>
              <text x="100" y="165" fill="#0d0d0d" font-size="12" font-family="'Bebas Neue',monospace" letter-spacing="1">UPTREND</text>
              <text x="310" y="165" fill="#737373" font-size="12" font-family="'Bebas Neue',monospace" letter-spacing="1">SIDEWAYS</text>
              <text x="492" y="165" fill="#d4d4d4" font-size="12" font-family="'Bebas Neue',monospace" letter-spacing="1">DOWNTREND</text>
              <text x="140" y="82" fill="#0d0d0d" font-size="10" font-family="monospace">HH</text>
              <text x="100" y="126" fill="#0d0d0d" font-size="10" font-family="monospace">HL</text>
              <text x="220" y="52" fill="#0d0d0d" font-size="10" font-family="monospace">HH</text>
              <text x="500" y="97" fill="#a3a3a3" font-size="10" font-family="monospace">LL</text>
            </svg>
          </div>
          <div class="concepts">
            <div class="concept"><h4>Uptrend (Bullish)</h4><p><strong>HH + HL</strong> — Higher Highs and Higher Lows. Price steps up progressively. Strategy: buy the dips at Higher Lows.</p></div>
            <div class="concept"><h4>Downtrend (Bearish)</h4><p><strong>LH + LL</strong> — Lower Highs and Lower Lows. Price steps down progressively. Strategy: sell the rallies at Lower Highs.</p></div>
            <div class="concept"><h4>Sideways (Ranging)</h4><p>Price bounces between a defined range. No clear HH-HL or LH-LL. Trade the boundaries — buy support, sell resistance.</p></div>
            <div class="concept"><h4>Market Structure Break</h4><p>When price breaks a prior Higher High or Lower Low — structure shifts. This is a powerful signal for entries and exits.</p></div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Smart Money Concepts (SMC)</div>
          <ul class="rules">
            <li data-n="1">Order Block — the candle from which a big move originated. Represents institutional buy/sell zones.</li>
            <li data-n="2">Fair Value Gap (FVG) — price moved so fast that a gap was left. Price tends to return to fill these gaps.</li>
            <li data-n="3">Liquidity Pools — areas where retail stop losses cluster. Smart money hunts these levels before reversing.</li>
            <li data-n="4">Change of Character (ChoCH) — first sign of trend reversal. Occurs before a full structure shift.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- M3 S&R -->
    <div class="module" id="m3">
      <div class="mod-header"><div class="mod-num">04</div><div><div class="mod-badge">Module 4 — Key Levels</div><div class="mod-title">Support and Resistance</div><div class="mod-desc">Identifying the floor and ceiling of the market</div></div></div>
      <div class="mod-body">
        <div class="section">
          <div class="section-title">Core Concepts</div>
          <div class="concepts">
            <div class="concept"><h4>Support</h4><p>A price level where buyers are strong enough to prevent further decline. Demand exceeds supply — the "floor" of price.</p></div>
            <div class="concept"><h4>Resistance</h4><p>A price level where sellers are strong enough to prevent further rise. Supply exceeds demand — the "ceiling" of price.</p></div>
            <div class="concept"><h4>Role Reversal</h4><p>When support breaks it becomes resistance. When resistance breaks it becomes support. One of the most reliable concepts in TA.</p></div>
            <div class="concept"><h4>Strength of Levels</h4><p>The more times price has touched and respected a level, the stronger it is. Older well-tested levels carry more weight.</p></div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Support & Resistance in Action</div>
          <div class="chart-bg">
            <svg viewBox="0 0 580 185" style="width:100%;overflow:visible;">
              <line x1="0" y1="45" x2="580" y2="45" stroke="#0d0d0d" stroke-width="1.5" stroke-dasharray="7,4"/>
              <text x="480" y="38" fill="#0d0d0d" font-size="11" font-family="monospace">RESISTANCE</text>
              <line x1="0" y1="155" x2="580" y2="155" stroke="#737373" stroke-width="1.5" stroke-dasharray="7,4"/>
              <text x="10" y="172" fill="#737373" font-size="11" font-family="monospace">SUPPORT</text>
              <polyline points="10,155 40,128 75,155 110,105 145,155 175,85 205,55 230,45 255,62 278,45 300,68 325,45 355,88 385,45 410,68 440,45 465,70 495,45 530,70 560,45" fill="none" stroke="#a3a3a3" stroke-width="1.5"/>
            </svg>
          </div>
        </div>
        <div class="section">
          <div class="section-title">How to Draw S/R Levels</div>
          <ul class="rules">
            <li data-n="1">Start with Weekly/Daily chart — identify major levels first before zooming into lower timeframes</li>
            <li data-n="2">Draw zones, not exact lines — price is not precise, zones capture the area of interest better</li>
            <li data-n="3">Round numbers (1.2000, 50,000) act as natural S/R — psychological levels where orders cluster</li>
            <li data-n="4">Previous Highs/Lows are the most powerful S/R — institutional orders sit at these levels</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- M4 TRENDS -->
    <div class="module" id="m4">
      <div class="mod-header"><div class="mod-num">05</div><div><div class="mod-badge">Module 5 — Trend Trading</div><div class="mod-title">Trendlines and Channels</div><div class="mod-desc">Trade with the trend — the most reliable edge in trading</div></div></div>
      <div class="mod-body">
        <div class="section">
          <div class="section-title">Drawing Trendlines</div>
          <div class="chart-bg">
            <svg viewBox="0 0 580 185" style="width:100%;overflow:visible;">
              <line x1="25" y1="175" x2="390" y2="22" stroke="#0d0d0d" stroke-width="2"/>
              <line x1="78" y1="175" x2="443" y2="22" stroke="#a3a3a3" stroke-width="1.5" stroke-dasharray="5,3"/>
              <polyline points="45,168 78,145 102,162 142,125 164,143 205,103 232,120 272,82 304,98 342,60 372,76 402,45" fill="none" stroke="#404040" stroke-width="2"/>
              <text x="12" y="16" fill="#0d0d0d" font-size="11" font-family="monospace">RESISTANCE LINE</text>
              <text x="180" y="182" fill="#a3a3a3" font-size="11" font-family="monospace">SUPPORT TRENDLINE</text>
              <line x1="435" y1="18" x2="575" y2="100" stroke="#d4d4d4" stroke-width="1.5"/>
              <polyline points="445,22 468,48 488,32 510,64 530,48 558,80 578,65" fill="none" stroke="#d4d4d4" stroke-width="1.5"/>
              <text x="445" y="112" fill="#d4d4d4" font-size="10" font-family="monospace">DOWNTREND</text>
            </svg>
          </div>
          <div class="concepts">
            <div class="concept"><h4>Uptrend Line</h4><p>Connect 2+ Higher Lows. Acts as dynamic support. Price bouncing here = buying opportunity. Break = trend weakening.</p></div>
            <div class="concept"><h4>Downtrend Line</h4><p>Connect 2+ Lower Highs. Acts as dynamic resistance. Price rejected here = selling opportunity. Break = trend weakening.</p></div>
            <div class="concept"><h4>Channel Trading</h4><p>Draw parallel lines to form a channel. Buy the channel bottom, sell the channel top. Breakout signals a major move.</p></div>
            <div class="concept"><h4>Trendline Break</h4><p>When price closes confidently beyond a trendline the trend may be changing. Wait for a retest to confirm before trading.</p></div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Channel Types</div>
          <ul class="rules">
            <li data-n="↗">Ascending Channel — Higher highs + higher lows. Bullish. Buy the lows within the channel.</li>
            <li data-n="↘">Descending Channel — Lower highs + lower lows. Bearish. Sell the highs within the channel.</li>
            <li data-n="→">Horizontal Channel (Rectangle) — Ranging market. Buy support, sell resistance with tight stops.</li>
            <li data-n="★">Wedge Patterns — Converging channels that signal a breakout in the opposite direction to the wedge.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- M5 CANDLESTICK PATTERNS -->
    <div class="module" id="m5">
      <div class="mod-header"><div class="mod-num">06</div><div><div class="mod-badge">Module 6 — Pattern Recognition</div><div class="mod-title">Candlestick Patterns</div><div class="mod-desc">High-probability signals from price action formations</div></div></div>
      <div class="mod-body">
        <div class="section">
          <div class="section-title">Bullish Reversal Patterns</div>
          <div class="pattern-grid">
            <div class="pattern">
              <div class="pattern-name">Hammer</div>
              <svg viewBox="0 0 40 80" width="40" style="display:block;margin:0 auto;"><line x1="20" y1="5" x2="20" y2="26" stroke="#a3a3a3" stroke-width="1.5"/><rect x="12" y="26" width="16" height="13" fill="#0d0d0d" rx="1"/><line x1="20" y1="39" x2="20" y2="72" stroke="#a3a3a3" stroke-width="1.5"/></svg>
              <div class="pattern-sig">Bullish reversal at bottom</div>
            </div>
            <div class="pattern">
              <div class="pattern-name">Bullish Engulfing</div>
              <svg viewBox="0 0 60 80" width="60" style="display:block;margin:0 auto;"><rect x="18" y="30" width="12" height="20" fill="#a3a3a3" rx="1"/><rect x="33" y="18" width="14" height="44" fill="#0d0d0d" rx="1"/></svg>
              <div class="pattern-sig">Large candle engulfs prior one</div>
            </div>
            <div class="pattern">
              <div class="pattern-name">Morning Star</div>
              <svg viewBox="0 0 80 80" width="80" style="display:block;margin:0 auto;"><rect x="5" y="20" width="18" height="35" fill="#a3a3a3" rx="1"/><rect x="30" y="46" width="14" height="8" fill="#d4d4d4" rx="1"/><rect x="50" y="25" width="18" height="30" fill="#0d0d0d" rx="1"/></svg>
              <div class="pattern-sig">3-candle bullish reversal</div>
            </div>
            <div class="pattern">
              <div class="pattern-name">Piercing Line</div>
              <svg viewBox="0 0 60 80" width="60" style="display:block;margin:0 auto;"><rect x="12" y="20" width="14" height="35" fill="#a3a3a3" rx="1"/><rect x="30" y="34" width="14" height="30" fill="#0d0d0d" rx="1"/></svg>
              <div class="pattern-sig">Closes above 50% of prior candle</div>
            </div>
            <div class="pattern">
              <div class="pattern-name">Dragonfly Doji</div>
              <svg viewBox="0 0 40 80" width="40" style="display:block;margin:0 auto;"><line x1="20" y1="18" x2="20" y2="22" stroke="#0d0d0d" stroke-width="2"/><line x1="20" y1="22" x2="20" y2="68" stroke="#a3a3a3" stroke-width="1.5"/><line x1="12" y1="20" x2="28" y2="20" stroke="#0d0d0d" stroke-width="2"/></svg>
              <div class="pattern-sig">Buyers rejected lower prices fully</div>
            </div>
            <div class="pattern">
              <div class="pattern-name">Bullish Harami</div>
              <svg viewBox="0 0 60 80" width="60" style="display:block;margin:0 auto;"><rect x="10" y="18" width="16" height="44" fill="#a3a3a3" rx="1"/><rect x="30" y="30" width="14" height="20" fill="#0d0d0d" rx="1"/></svg>
              <div class="pattern-sig">Small candle inside large bearish</div>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Bearish Reversal Patterns</div>
          <div class="pattern-grid">
            <div class="pattern">
              <div class="pattern-name">Shooting Star</div>
              <svg viewBox="0 0 40 80" width="40" style="display:block;margin:0 auto;"><line x1="20" y1="8" x2="20" y2="50" stroke="#a3a3a3" stroke-width="1.5"/><rect x="12" y="50" width="16" height="13" fill="#0d0d0d" rx="1"/><line x1="20" y1="63" x2="20" y2="68" stroke="#a3a3a3" stroke-width="1.5"/></svg>
              <div class="pattern-sig">Bearish reversal at top</div>
            </div>
            <div class="pattern">
              <div class="pattern-name">Bearish Engulfing</div>
              <svg viewBox="0 0 60 80" width="60" style="display:block;margin:0 auto;"><rect x="18" y="26" width="12" height="22" fill="#d4d4d4" rx="1" stroke="#a3a3a3" stroke-width="1"/><rect x="33" y="15" width="14" height="44" fill="#0d0d0d" rx="1"/></svg>
              <div class="pattern-sig">Large dark candle engulfs prior</div>
            </div>
            <div class="pattern">
              <div class="pattern-name">Evening Star</div>
              <svg viewBox="0 0 80 80" width="80" style="display:block;margin:0 auto;"><rect x="5" y="25" width="18" height="30" fill="#d4d4d4" rx="1" stroke="#a3a3a3" stroke-width="1"/><rect x="30" y="18" width="14" height="10" fill="#d4d4d4" rx="1" stroke="#a3a3a3" stroke-width="1"/><rect x="50" y="20" width="18" height="35" fill="#0d0d0d" rx="1"/></svg>
              <div class="pattern-sig">3-candle bearish reversal</div>
            </div>
            <div class="pattern">
              <div class="pattern-name">Dark Cloud Cover</div>
              <svg viewBox="0 0 60 80" width="60" style="display:block;margin:0 auto;"><rect x="12" y="30" width="14" height="30" fill="#d4d4d4" rx="1" stroke="#a3a3a3" stroke-width="1"/><rect x="28" y="18" width="14" height="28" fill="#0d0d0d" rx="1"/></svg>
              <div class="pattern-sig">Closes below 50% of prior candle</div>
            </div>
            <div class="pattern">
              <div class="pattern-name">Gravestone Doji</div>
              <svg viewBox="0 0 40 80" width="40" style="display:block;margin:0 auto;"><line x1="20" y1="10" x2="20" y2="56" stroke="#a3a3a3" stroke-width="1.5"/><line x1="20" y1="56" x2="20" y2="60" stroke="#0d0d0d" stroke-width="2"/><line x1="12" y1="58" x2="28" y2="58" stroke="#0d0d0d" stroke-width="2"/></svg>
              <div class="pattern-sig">Sellers rejected higher prices fully</div>
            </div>
            <div class="pattern">
              <div class="pattern-name">Hanging Man</div>
              <svg viewBox="0 0 40 80" width="40" style="display:block;margin:0 auto;"><line x1="20" y1="8" x2="20" y2="26" stroke="#a3a3a3" stroke-width="1.5"/><rect x="12" y="26" width="16" height="13" fill="#0d0d0d" rx="1"/><line x1="20" y1="39" x2="20" y2="70" stroke="#a3a3a3" stroke-width="1.5"/></svg>
              <div class="pattern-sig">Hammer shape at top = bearish</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- M6 CHART PATTERNS -->
    <div class="module" id="m6">
      <div class="mod-header"><div class="mod-num">07</div><div><div class="mod-badge">Module 7 — Advanced Patterns</div><div class="mod-title">Chart Patterns</div><div class="mod-desc">Multi-candle formations that predict big moves</div></div></div>
      <div class="mod-body">
        <div class="section">
          <div class="section-title">Reversal Patterns</div>
          <div class="concepts">
            <div class="concept"><h4>Head & Shoulders</h4><p>Left shoulder → Head (highest peak) → Right shoulder. Neckline break = bearish signal. Target = head-to-neckline distance projected down.</p></div>
            <div class="concept"><h4>Inverse H&S</h4><p>Upside-down Head & Shoulders. Bullish reversal after downtrend. Neckline break = buy signal. One of the most reliable patterns.</p></div>
            <div class="concept"><h4>Double Top (M Pattern)</h4><p>Price hits the same resistance twice then fails. Neckline break = sell. Bearish. Target = pattern height measured down.</p></div>
            <div class="concept"><h4>Double Bottom (W Pattern)</h4><p>Price touches same support twice then holds. Neckline break = buy. Bullish. Target = pattern height measured up.</p></div>
            <div class="concept"><h4>Triple Top/Bottom</h4><p>Three tests of the same level. Even stronger than double top/bottom. Less common but very high probability signal.</p></div>
            <div class="concept"><h4>Rounding Bottom</h4><p>Gradual U-shaped recovery. Slow accumulation over time. Breakout of the rim = strong bullish signal. Also called "Saucer."</p></div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Continuation Patterns</div>
          <div class="concepts">
            <div class="concept"><h4>Bull / Bear Flag</h4><p>Strong impulsive move (flagpole) + brief parallel consolidation (flag). Breakout continues in the direction of the pole.</p></div>
            <div class="concept"><h4>Pennant</h4><p>Strong move followed by a converging triangle consolidation. Similar to flag but triangular shape. Breakout = continuation.</p></div>
            <div class="concept"><h4>Symmetrical Triangle</h4><p>Higher lows + lower highs converging. A coiling spring. Breakout can go either way — volume confirms direction.</p></div>
            <div class="concept"><h4>Ascending Triangle</h4><p>Flat top + rising bottoms. Bullish bias. Buyers getting more aggressive. Usually breaks to the upside.</p></div>
            <div class="concept"><h4>Descending Triangle</h4><p>Flat bottom + falling tops. Bearish bias. Sellers getting more aggressive. Usually breaks to the downside.</p></div>
            <div class="concept"><h4>Cup & Handle</h4><p>U-shaped cup + small handle consolidation. Breakout = bullish. Minimum target = cup depth added to breakout point.</p></div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Pattern Trading Rules</div>
          <ul class="rules">
            <li data-n="1">Confirm on Higher Time Frame first — Daily or 4H patterns are far more reliable than 5-minute patterns</li>
            <li data-n="2">Volume confirmation is mandatory — real breakouts show a volume spike, not a quiet drift</li>
            <li data-n="3">Fake breakouts are extremely common — wait for candle close beyond the level before acting</li>
            <li data-n="4">Measure your target: the height of the pattern = minimum expected move after the breakout</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- M7 INDICATORS -->
    <div class="module" id="m7">
      <div class="mod-header"><div class="mod-num">08</div><div><div class="mod-badge">Module 8 — Technical Indicators</div><div class="mod-title">Moving Averages, RSI, MACD</div><div class="mod-desc">Using indicators to filter and confirm trade signals</div></div></div>
      <div class="mod-body">
        <div class="section">
          <div class="section-title">Moving Averages (MA)</div>
          <div class="ind-card" style="margin-bottom:0.75rem;">
            <div class="ind-name">SMA vs EMA — Which to Use?</div>
            <div class="ind-detail">
              <strong>SMA (Simple MA):</strong> Average of the last N candles. Slower to react. Best for identifying long-term trends.<br>
              <strong>EMA (Exponential MA):</strong> Gives more weight to recent prices. Faster reaction. Better for active traders.<br><br>
              <strong>Key MA Levels:</strong><br>
              <span class="tag">20 EMA</span> Short-term dynamic support/resistance<br>
              <span class="tag">50 EMA</span> Medium-term trend direction<br>
              <span class="tag">200 EMA</span> Long-term trend — the most watched level globally<br><br>
              <strong>Golden Cross:</strong> 50MA crosses above 200MA → Strong bullish signal<br>
              <strong>Death Cross:</strong> 50MA crosses below 200MA → Strong bearish signal
            </div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">RSI — Relative Strength Index</div>
          <div class="ind-card" style="margin-bottom:0.75rem;">
            <div class="ind-name">Momentum Oscillator: 0 to 100</div>
            <div class="ind-detail">
              <strong>Formula:</strong> 100 − [100 ÷ (1 + Avg Gain ÷ Avg Loss)]<br><br>
              <span class="tag">Above 70</span> Overbought — selling pressure may build<br>
              <span class="tag">Below 30</span> Oversold — buying opportunity may emerge<br>
              <span class="tag">50 Line</span> Trend bias — above 50 = bullish, below 50 = bearish<br><br>
              <strong>RSI Divergence (Most Powerful Signal):</strong><br>
              — Bullish: Price makes lower low, RSI makes higher low → reversal upward<br>
              — Bearish: Price makes higher high, RSI makes lower high → reversal downward<br><br>
              <em style="color:var(--g5);">Default period: 14. In strong trends, overbought/oversold can persist for a long time.</em>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">MACD — Moving Average Convergence Divergence</div>
          <div class="ind-card" style="margin-bottom:0.75rem;">
            <div class="ind-name">Trend + Momentum in One Indicator</div>
            <div class="ind-detail">
              <strong>Components:</strong><br>
              <span class="tag">MACD Line</span> 12 EMA minus 26 EMA<br>
              <span class="tag">Signal Line</span> 9 EMA of the MACD Line<br>
              <span class="tag">Histogram</span> MACD minus Signal — visualizes momentum strength<br><br>
              <strong>Signals:</strong><br>
              — MACD crosses above Signal Line → Buy signal<br>
              — MACD crosses below Signal Line → Sell signal<br>
              — Histogram expanding = momentum increasing<br>
              — Zero line cross = trend direction change confirmed<br><br>
              <em style="color:var(--g5);">MACD divergence works the same way as RSI divergence and is equally powerful.</em>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Combining Indicators Effectively</div>
          <ul class="rules">
            <li data-n="1">Never rely on a single indicator — always confirm with at least one other tool or price action signal</li>
            <li data-n="2">Price action always comes first — indicators confirm the trade, they don't create it</li>
            <li data-n="3">Bollinger Bands + RSI: Price at band extremes + RSI divergence = high-probability reversal setup</li>
            <li data-n="4">200 EMA + MACD: Use 200 EMA for trend direction, MACD crossover for entry timing</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- M8 BREAKOUT -->
    <div class="module" id="m8">
      <div class="mod-header"><div class="mod-num">09</div><div><div class="mod-badge">Module 9 — Entry Strategy</div><div class="mod-title">Breakout and Retest</div><div class="mod-desc">The safest and most reliable way to trade breakouts</div></div></div>
      <div class="mod-body">
        <div class="section">
          <div class="section-title">The Breakout–Retest Sequence</div>
          <div class="chart-bg">
            <svg viewBox="0 0 580 200" style="width:100%;overflow:visible;">
              <line x1="0" y1="88" x2="580" y2="88" stroke="#0d0d0d" stroke-width="1.5" stroke-dasharray="7,4"/>
              <text x="10" y="80" fill="#0d0d0d" font-size="11" font-family="monospace">RESISTANCE LEVEL</text>
              <polyline points="20,158 60,128 92,138 130,108 162,120 200,92 232,88 265,82 295,88" fill="none" stroke="#a3a3a3" stroke-width="1.5"/>
              <polyline points="295,88 330,65 370,45 400,32" fill="none" stroke="#0d0d0d" stroke-width="2.5"/>
              <text x="308" y="28" fill="#0d0d0d" font-size="11" font-family="monospace" font-weight="500">BREAKOUT ↑</text>
              <polyline points="400,32 428,58 455,88 472,82" fill="none" stroke="#404040" stroke-width="2"/>
              <circle cx="455" cy="88" r="5" fill="#0d0d0d"/>
              <text x="460" y="105" fill="#0d0d0d" font-size="11" font-family="monospace">RETEST</text>
              <text x="446" y="122" fill="#737373" font-size="10" font-family="monospace">→ BUY HERE</text>
              <polyline points="472,82 505,60 540,42 578,28" fill="none" stroke="#0d0d0d" stroke-width="2"/>
            </svg>
          </div>
          <div class="concepts">
            <div class="concept"><h4>Breakout</h4><p>When price confidently closes beyond a key level. Requires strong volume and conviction. Fakeouts are very common — be patient.</p></div>
            <div class="concept"><h4>Retest</h4><p>After breaking out, price returns to the broken level. This is the ideal entry point — best risk/reward with confirmation built in.</p></div>
            <div class="concept"><h4>Successful Retest</h4><p>Price touches the broken level and bounces — confirms role reversal. Enter on the bounce candle, SL just beyond the level.</p></div>
            <div class="concept"><h4>Failed Retest</h4><p>Price breaks back through the level on retest. Confirms a fakeout. Exit quickly or consider a trade in the opposite direction.</p></div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Breakout Trading Rules</div>
          <ul class="rules">
            <li data-n="1">Always wait for a candle CLOSE beyond the level — a wick through is not a breakout, only a test</li>
            <li data-n="2">Enter on the retest — aggressive breakout entries carry more risk and worse risk/reward ratios</li>
            <li data-n="3">Place SL just beyond the broken level — if the level fails to hold, the trade idea is invalid</li>
            <li data-n="4">Identify on Higher Time Frame, execute on Lower Time Frame — improves entry precision significantly</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- M9 ENTRY SL TP -->
    <div class="module" id="m9">
      <div class="mod-header"><div class="mod-num">10</div><div><div class="mod-badge">Module 10 — Trade Management</div><div class="mod-title">Entry, Stop Loss & Take Profit</div><div class="mod-desc">Knowing exactly where to enter, exit and protect your capital</div></div></div>
      <div class="mod-body">
        <div class="section">
          <div class="section-title">Entry Types</div>
          <div class="concepts">
            <div class="concept"><h4>Aggressive Entry</h4><p>Enter immediately on breakout or pattern signal. Higher risk, potentially higher reward. More false signals. Suitable for experienced traders.</p></div>
            <div class="concept"><h4>Conservative Entry</h4><p>Wait for retest confirmation before entering. Lower risk, slightly smaller reward. Fewer setups, higher quality. Recommended for beginners.</p></div>
            <div class="concept"><h4>Scaled Entry (DCA)</h4><p>Build the position in parts. 50% at entry zone, add on retest. Improves average entry price and reduces emotional pressure.</p></div>
            <div class="concept"><h4>Limit Order Entry</h4><p>Pre-set your entry at a specific price level. Eliminates emotional decision-making. Trade executes even while you are away.</p></div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Stop Loss Placement</div>
          <ul class="rules">
            <li data-n="★">Structure-based SL — place just beyond the previous swing low/high. The most logical SL placement in all of TA.</li>
            <li data-n="★">ATR-based SL — use Average True Range × 1.5–2 as your SL distance. Adapts to current market volatility.</li>
            <li data-n="★">Key Level SL — just beyond the nearest S/R zone. If the level breaks, the trade idea is invalid — exit cleanly.</li>
            <li data-n="✗">Never: Tight SL clipped by normal noise. SL should mark where the trade is WRONG, not where you feel safe.</li>
          </ul>
        </div>
        <div class="section">
          <div class="section-title">Take Profit Strategies</div>
          <div class="concepts">
            <div class="concept"><h4>Next S/R Level</h4><p>The nearest significant resistance (long) or support (short) becomes your first TP. Clean, logical and widely respected.</p></div>
            <div class="concept"><h4>Measured Move</h4><p>Pattern height measured from breakout = minimum target. H&S, flags, triangles all have predictable measured targets.</p></div>
            <div class="concept"><h4>Fibonacci Extensions</h4><p>1.272 and 1.618 extension levels are strong TP targets. Use Fibonacci retracements for entry, extensions for profit targets.</p></div>
            <div class="concept"><h4>Partial Profit Taking</h4><p>Close 50% at TP1, move SL to break-even, let remaining run to TP2. Locks in profit while giving the trade room to extend.</p></div>
          </div>
        </div>
      </div>
    </div>

    <!-- M10 RR -->
    <div class="module" id="m10">
      <div class="mod-header"><div class="mod-num">11</div><div><div class="mod-badge">Module 11 — Risk Management</div><div class="mod-title">Risk-to-Reward Ratio</div><div class="mod-desc">The single most important concept for long-term profitability</div></div></div>
      <div class="mod-body">
        <div class="section">
          <div class="section-title">What is Risk:Reward?</div>
          <div class="rr-visual">
            <div class="rr-label">Potential Loss — 1R (e.g. $100)</div>
            <div class="rr-bar loss-bar"></div>
            <div class="rr-label" style="margin-top:1.25rem;">Potential Gain — 3R (e.g. $300)</div>
            <div class="rr-bar gain-bar"></div>
            <div style="margin-top:1.25rem;font-family:'Bebas Neue',sans-serif;font-size:1.6rem;color:var(--black);letter-spacing:1px;">RISK : REWARD = 1 : 3</div>
            <div style="font-size:0.9rem;color:var(--g5);margin-top:0.25rem;">SL = 100 pips away, TP = 300 pips away. Risk $100 to potentially make $300.</div>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Win Rate vs R:R Matrix</div>
          <div style="background:var(--g1);border:1px solid var(--g2);padding:1rem;border-radius:2px;overflow-x:auto;margin-bottom:0.75rem;">
            <table class="rr-table">
              <tr><th>Win Rate</th><th>1:1 R:R</th><th>1:2 R:R</th><th>1:3 R:R</th></tr>
              <tr><td>30% Wins</td><td class="neg">−40%</td><td class="neg">−10%</td><td class="pos">+20%</td></tr>
              <tr><td>40% Wins</td><td class="neg">−20%</td><td class="pos">+20%</td><td class="strong">+60%</td></tr>
              <tr><td>50% Wins</td><td class="neg">0%</td><td class="strong">+50%</td><td class="strong">+100%</td></tr>
              <tr><td>60% Wins</td><td class="pos">+20%</td><td class="strong">+80%</td><td class="strong">+140%</td></tr>
            </table>
          </div>
          <p style="font-size:0.92rem;color:var(--g5);font-style:italic;">With just 40% win rate and 1:3 R:R, you still grow your account by 60%. This is the power of risk management.</p>
        </div>
        <div class="section">
          <div class="section-title">Position Sizing Formula</div>
          <div class="formula-box">
            Position Size = Risk Amount ÷ (Entry Price − Stop Loss Price)<br><br>
            <span style="color:var(--g5);">Example: $10,000 account · 1% risk = $100 risk<br>
            Entry = $50.00 · SL = $49.00 · Gap = $1.00<br>
            Position Size = $100 ÷ $1.00 = <strong style="color:var(--black);">100 shares</strong></span>
          </div>
        </div>
        <div class="section">
          <div class="section-title">Core Risk Management Rules</div>
          <ul class="rules">
            <li data-n="1">Risk max 1–2% of your account per trade. After 10 consecutive losses you still have 80–90% of your capital.</li>
            <li data-n="2">Never take a trade with less than 1:2 R:R. Below this, a small losing streak wipes consistent gains.</li>
            <li data-n="3">Always calculate position size using the formula — never guess or use the same lot size every trade.</li>
            <li data-n="4">Drawdown rule: After 5–6 consecutive losses, stop trading. Review your journal before returning to the market.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- M11 CHECKLIST -->
    <div class="module" id="m11">
      <div class="mod-header"><div class="mod-num">12</div><div><div class="mod-badge">Module 12 — Pre-Trade Protocol</div><div class="mod-title">Technical Analysis Checklist</div><div class="mod-desc">Check all 12 boxes before executing any trade</div></div></div>
      <div class="mod-body">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:1rem;">
          <div class="section-title" style="margin-bottom:0;">Pre-Trade Checklist</div>
          <div id="checkCount" style="font-family: 'Poppins', serif;font-size:11px;color:var(--g5);">0 / 12 checked</div>
        </div>
        <div class="checklist">
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Did I confirm the Higher Time Frame (Weekly/Daily) trend direction?</div><div class="check-cat">Trend Analysis</div></div></div>
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Have I identified the current market structure (HH/HL or LH/LL)?</div><div class="check-cat">Market Structure</div></div></div>
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Are key Support and Resistance levels clearly drawn on my chart?</div><div class="check-cat">Key Levels</div></div></div>
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Is my entry area clearly defined — retest, breakout, or pattern signal?</div><div class="check-cat">Entry Planning</div></div></div>
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Is my Stop Loss placed logically — beyond market structure, not arbitrary?</div><div class="check-cat">Stop Loss</div></div></div>
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Have I set Take Profit 1 and Take Profit 2 at clear levels?</div><div class="check-cat">Profit Targets</div></div></div>
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Is the Risk:Reward ratio at least 1:2 or better?</div><div class="check-cat">R:R Check</div></div></div>
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Is there a candlestick pattern or indicator confirmation supporting this trade?</div><div class="check-cat">Confirmation Signal</div></div></div>
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Does volume support the breakout or momentum of this move?</div><div class="check-cat">Volume Analysis</div></div></div>
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Have I calculated my exact position size to risk only 1–2% of my account?</div><div class="check-cat">Position Sizing</div></div></div>
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Are there any high-impact news events scheduled during this trade?</div><div class="check-cat">News Check</div></div></div>
          <div class="check-item" onclick="toggleCheck(this)"><div class="check-box"><span class="check-mark">✓</span></div><div><div class="check-text">Have I written the full trade plan in my trading journal before entering?</div><div class="check-cat">Trade Journal</div></div></div>
        </div>
        <div id="checkResult" style="margin-top:1.5rem;display:none;">
          <div style="background:var(--g1);border:2px solid var(--black);padding:1rem 1.25rem;border-radius:2px;font-family:'Bebas Neue',sans-serif;font-size:1.3rem;color:var(--black);letter-spacing:1px;text-align:center;">
            ✓ ALL CHECKS COMPLETE — TRADE READY TO EXECUTE
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <button class="btn-nav btn-prev" onclick="prevMod()">← Previous</button>
      <div class="mod-indicator" id="modIndicator">1 / 12</div>
      <button class="btn-nav btn-next" onclick="nextMod()">Next →</button>
    </div>
  </div>

  <script>
    let cur=0;
    function show(n){
      document.querySelectorAll('.module').forEach(m=>m.classList.remove('active'));
      document.querySelectorAll('.nav-btn').forEach(b=>b.classList.remove('active'));
      document.getElementById('m'+n).classList.add('active');
      document.querySelectorAll('.nav-btn')[n].classList.add('active');
      cur=n;
      document.getElementById('modIndicator').textContent=(n+1)+' / 12';
      document.getElementById('prog').style.width=((n+1)/12*100)+'%';
    }
    
    function nextMod(){if(cur<11)show(cur+1);}
    function prevMod(){if(cur>0)show(cur-1);}
    function toggleCheck(el){
      el.classList.toggle('checked');
      const c=document.querySelectorAll('.check-item.checked').length;
      document.getElementById('checkCount').textContent=c+' / 12 checked';
      document.getElementById('checkResult').style.display=c===12?'block':'none';
    }
  </script>

<?php
include_once ('elements/footer.php');
?>