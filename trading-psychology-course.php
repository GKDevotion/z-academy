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
                Master Your<em> <br>Mindset</em>
            </h1>
            <p class="sub">
                The market does not destroy traders — their own emotions do. Fear and ego are responsible for more losses than any bad strategy.  
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
                        <div class="val">60</div>
                        <div class="lbl">Minutes</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-award-fill"></i></div>
                    <div>
                        <div class="val">5/12</div>
                        <div class="lbl">Completed</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-currency-dollar"></i></div>
                    <div>
                        <div class="val">Free</div>
                        <div class="lbl">Access</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="hdiv"></div>
 

<style>  
        :root
        {  
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
        } 
        @keyframes fadeUp{from{opacity:0;transform:translateY(22px)}to{opacity:1;transform:translateY(0)}}
        @keyframes pulse{0%,100%{opacity:1}50%{opacity:.4}}
        @keyframes scaleIn{from{opacity:0;transform:scale(.96)}to{opacity:1;transform:scale(1)}}
        @keyframes slideRight{from{opacity:0;transform:translateX(-14px)}to{opacity:1;transform:translateX(0)}}
        @keyframes barGrow{from{width:0}to{width:var(--w,100%)}}
        @keyframes breathe{0%,100%{transform:scale(1)}50%{transform:scale(1.03)}}
        
        /* ── PROGRESS ── */
        .prog{
            background:#fff;
            border-bottom:1px solid var(--G100);
            padding:.85rem 2rem;
            display:flex;
            align-items:center;
            gap:12px;
        }
        .prog-bar{flex:1;height:3px;background:var(--G100);border-radius:2px;overflow:hidden}
        .prog-fill{height:100%;background:var(--zed-primary);width:0%;transition:width .6s cubic-bezier(.4,0,.2,1)}
        .prog-lbl{
            font-size:1rem;
            color:var(--zed-secondary);
            white-space:nowrap;
        }
        .prog-pct{font-size:12px;font-weight:600;color:var(--zed-primary);min-width:40px;text-align:right}

        /* ── SECTION LABEL ── */
        .slbl{
            padding: 1.5rem 2rem;
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
            font-size:42px;
            color:var(--zed-secondary);
        }

        /* ── MODULE ── */
        .mod{background:#fff;border-left:3px solid transparent;transition:border-color .25s}
        .mod+.mod{border-top:1px solid var(--G100)}
        .mod.active{border-left-color:var(--zed-primary)}
        .mod.done{border-left-color:var(--G200)}
        .mod-hd{display:flex;align-items:center;gap:12px;padding:.95rem 1.5rem;cursor:pointer;transition:background .15s;user-select:none}
        .mod-hd:hover{background:var(--G50)}
        .mn{
            /* font-family: 'Poppins', serif; */
            font-family: 'Bebas Neue', sans-serif;
            font-size:2.5rem;
            color:var(--G200);
            min-width:24px;
            line-height:1;
            transition:color .2s;
            flex-shrink:0;
        }
        .mod.active .mn{color:var(--zed-primary)}
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
        .mod.active .micon{background:var(--zed-primary);border-color:var(--zed-primary);color:#fff}
        .mod.done .micon{
            background:var(--G100);
            border-color:var(--G100);
            color:var(--G200);
        }
        .mmeta{flex:1;min-width:0}
        .mt{
            font-size:1.5rem;
            font-weight:500;
            color:var(--zed-dark-text);
            line-height:1.3;
        }
        .ms{
            font-size:0.8rem;
            color:var(--zed-secondary);
            margin-top:1px;
            overflow:hidden;
            text-overflow:ellipsis;
            white-space:nowrap;
        }
        .mright{display:flex;align-items:center;gap:8px;flex-shrink:0}
        .badge{
            font-size:1rem;
            font-weight:600;
            letter-spacing:.06em;
            text-transform:uppercase;
            padding:3px 8px;
            border-radius:2px;
        }
        .b-start{
            background:var(--RL);
            color:var(--zed-primary);
        }
        .b-done{background:var(--G100);color:var(--G400)}
        .b-open{background:var(--G50);color:var(--G200);border:1px solid var(--G100)}
        .b-final{
            background:var(--zed-primary);
            color:#fff;
        }
        .chev{font-size:16px;color:var(--G200);transition:transform .25s,color .2s}
        .mod.open .chev{transform:rotate(90deg);color:var(--zed-primary)}

        /* ── BODY ── */
        .mbody{max-height:0;overflow:hidden;transition:max-height .42s cubic-bezier(.4,0,.2,1)}
        .mbody.open{max-height:1600px}
        .minner{padding:1.1rem 1.5rem 1.5rem 4.5rem;border-top:1px solid var(--G50)}
        .intro{ 
            color:var(--zed-secondary);
            line-height:1.8;
            margin-bottom:1.2rem;
            /* max-width:510px; */
        }

        /* ── QUOTE BLOCK ── */
        .qblock{border-left:3px solid var(--zed-primary);padding:.7rem 1rem;margin-bottom:1.2rem;background:var(--G50);border-radius:0 4px 4px 0}
        .qblock p{ 
            color:var(--G800);
            font-style:italic;
            line-height:1.7;
        }
        .qblock cite{
            font-size:0.8rem;
            color:var(--zed-secondary);
            font-style:normal;
            display:block;
            margin-top:4px;
            letter-spacing:.04em;
        }

        /* ── EMOTION METER ── */
        .emeter{margin-bottom:1.2rem}
        .emeter-row{display:flex;align-items:center;gap:10px;margin-bottom:6px}
        .emeter-lbl{font-size:11px;color:var(--G600);min-width:90px;font-weight:500}
        .emeter-bar{flex:1;height:6px;background:var(--G100);border-radius:3px;overflow:hidden}
        .emeter-fill{height:100%;border-radius:3px;animation:barGrow .8s ease forwards}
        .fill-danger{background:var(--zed-primary)}
        .fill-warn{background:#D97706}
        .fill-ok{
                background: var(--zed-secondary);
        }
        .emeter-val{font-size:11px;color:var(--G400);min-width:30px;text-align:right}

        /* ── STAT GRID ── */
        .sgrid{display:grid;grid-template-columns:repeat(3,1fr);gap:8px;margin-bottom:1.2rem}
        .sbox{background:var(--G50);border:1px solid var(--G100);border-radius:4px;padding:.7rem .8rem;text-align:center}
        .sbox.hi{background:var(--RL);border-color:#FACDD3}
        .sbox.ok{background:#F0FDF4;border-color:#BBF7D0}
        .sv{font-family:'Bebas Neue',sans-serif;font-size:1.6rem;color:var(--zed-dark-text);line-height:1}
        .sv.r{color:var(--zed-primary)}
        .sv.g{color:#16A34A}
        .sk{ 
            color:var(--zed-secondary);
            letter-spacing:.05em;
            text-transform:uppercase;
            margin-top:3px;
        }

        /* ── TWO COL ── */
        .two{display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:1.2rem}
        .tbox{background:var(--G50);border:1px solid var(--G100);border-radius:4px;padding:.8rem 1rem}
        .tbox.danger{
            /* background:var(--RL); */
            border-color:var(--zed-primary);
        }
        .tbox.good{
            /* background:#F0FDF4; */
             border-color:var(--zed-primary);
        }
        .tbox-title{
            font-size:1rem;
            font-weight:600;
            letter-spacing:.08em;
            text-transform:uppercase;
            color:var(--G400);
            margin-bottom:.5rem;
            display:flex;
            align-items:center;
            gap:5px;
        }
        .tbox.danger .tbox-title{color:var(--zed-primary)}
        .tbox.good .tbox-title{
            color: var(--zed-primary);
        }
        .tbox-row{ 
            color:var(--zed-secondary);
            padding:2px 0;
            display:flex;
            align-items:flex-start;
            gap:6px;
            line-height:1.55;
        }
        .tbox-row i{
            font-size:20px;
            flex-shrink:0;
            /* margin-top:1px; */
            color:var(--G400);
        }
        .tbox.danger .tbox-row i{color:var(--zed-primary)}
        .tbox.good .tbox-row i{
            color: var(--zed-primary);
        }

        /* ── RULES CARD ── */
        .rcard{background:var(--G50);border-left:3px solid var(--zed-primary);border-radius:0 4px 4px 0;padding:.85rem 1rem;margin-bottom:1.2rem}
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
            font-size:25px;
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
            width:8px;
            height:8px;
            background:var(--zed-primary);
            border-radius:50%;
            flex-shrink:0;
            margin-top:6px;
            animation:pulse 2.5s ease infinite;
        }

        /* ── STEP FLOW ── */
        .steps{display:flex;flex-direction:column;gap:8px;margin-bottom:1.2rem}
        .step{display:flex;align-items:flex-start;gap:12px;padding:.7rem 1rem;background:var(--G50);border:1px solid var(--G100);border-radius:4px}
        .step-num{font-family:'Bebas Neue',sans-serif;font-size:1.3rem;color:var(--zed-primary);min-width:22px;line-height:1;flex-shrink:0}
        .step-body{flex:1}
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

        /* ── CHECKLIST ── */
        .clwrap{margin-bottom:1rem}
        .clstat{
            font-size:1rem;
            color:var(--G400);
            font-weight:500;
            padding:4px 8px;
            margin-bottom:6px;
            transition:color .3s;
        }
        .ci{
            display:flex;
            align-items:center;
            gap:10px;
            padding:5px 8px;
            border-radius:4px;
            cursor:pointer;
            transition:background .15s; 
            color:var(--zed-secondary);
        }
        .ci:hover{background:var(--G50)}
        .cbox{width:17px;height:17px;border:1.5px solid var(--G200);border-radius:3px;flex-shrink:0;display:flex;align-items:center;justify-content:center;font-size:11px;transition:all .2s;color:#fff}
        .ci.checked .cbox{background:var(--zed-primary);border-color:var(--zed-primary)}
        .ci.checked .clbl{text-decoration:line-through;color:var(--G400)}

        /* ── CTA ── */
        .btndone{display:inline-flex;align-items:center;gap:7px;background:var(--zed-primary);color:#fff;font-size:11px;font-weight:600;letter-spacing:.07em;text-transform:uppercase;padding:9px 18px;border-radius:2px;border:none;cursor:pointer;transition:background .2s,transform .1s;margin-top:.3rem}
        .btndone:hover{background:var(--Rd)}
        .btndone:active{transform:scale(.97)}
        .btndone i{font-size:14px}

        /* ── FAQ ── */
        .faq-wrap{background:#fff;margin-top:1px}
        .faq-top{padding:1.4rem 2rem .9rem;display:flex;align-items:center;gap:10px;border-bottom:1px solid var(--G100)}
        .faq-top h2{
            font-size:15px;
            font-weight:500;
            color:var(--zed-dark-text);
        }
        .faq-top i{font-size:20px;color:var(--zed-primary)}
        .faq-note{
            padding:.6rem 2rem .8rem; 
            color:var(--zed-secondary);
            line-height:1.6;
            border-bottom:1px solid var(--G100);
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
        .fq-ic{font-size:16px;color:var(--G400);transition:transform .25s,color .2s;flex-shrink:0;margin-top:2px}
        .fi.open .fq-ic{
            transform:rotate(180deg);
            color:var(--zed-primary);
        }
        .fa{max-height:0;overflow:hidden;transition:max-height .35s ease}
        .fa.open{max-height:500px}
        .fa-inner{
            margin:0 2rem;
            padding:.8rem 1rem;
            background:var(--G50);
            border-left:3px solid var(--zed-primary);
            border-radius:0 4px 4px 0; 
            font-family: 'Poppins', serif;
            font-weight: 400;
            color:var(--zed-secondary);
            line-height:1.8;
        }
        .fa-inner b{
            color:var(--zed-dark-text);
            font-weight:500;
        }

        /* ── FOOTER ── */
        .footer{background:var(--zed-dark-text);padding:1.5rem 2rem;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:10px}
        .brand{font-family:'Bebas Neue',sans-serif;font-size:1.4rem;letter-spacing:.1em;color:#fff}
        .brand span{color:var(--zed-primary)}
        .fbadge{font-size:10px;color:var(--G600);letter-spacing:.08em;text-transform:uppercase;padding:3px 9px;border:1px solid rgba(255,255,255,.08);border-radius:2px}
        .footer-copy{font-size:11px;color:var(--G600);width:100%;border-top:1px solid rgba(255,255,255,.07);padding-top:.8rem}
</style>

    <div class="container">
         
         <div class="zed-sec-head mt-5 mb-5">  
            <h2 class="zed-sec-title">Core Lessons | Trading Psychology</h2> 
            <div class="underline"></div>
        </div>

        <div class="prog mb-3">
            <span class="prog-lbl">Course Progress</span>
            <div class="prog-bar"><div class="prog-fill" id="pbar"></div></div>
            <span class="prog-pct" id="ppct">0 / 12</span>
        </div>

        <!-- L1 -->
        <div class="mod active open" data-id="1">
        <div class="mod-hd" onclick="tog(1)">
            <div class="mn">01</div>
            <div class="micon"><i class="ti ti-help-circle" aria-hidden="true"></i></div>
            <div class="mmeta"><div class="mt">What is Trading Psychology?</div><div class="ms">Understanding the mental side of trading</div></div>
            <div class="mright"><span class="badge b-start">Start Here</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody open">
            <div class="minner">
            <p class="intro">Trading psychology is the study of how a trader's emotions, beliefs and mental state influence their decisions in the market. A trader can have a profitable strategy and still lose money consistently — because emotions override logic at the moment of execution.</p>
            <div class="qblock">
                <p>"The most important organ in trading is not the brain — it is the stomach. Anyone can see a setup. Not everyone can hold through the discomfort of uncertainty."</p>
                <cite>— Professional Trading Principle</cite>
            </div>
            <div class="two">
                <div class="tbox good">
                <div class="tbox-title"><i class="ti ti-circle-check" aria-hidden="true"></i> Psychological edge</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Executing your plan with no deviation</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Accepting losses without emotional reaction</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Staying patient when no setup qualifies</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Reviewing mistakes without self-blame</div>
                </div>
                <div class="tbox danger">
                <div class="tbox-title"><i class="ti ti-circle-x" aria-hidden="true"></i> Psychological leak</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Moving stops, holding losers too long</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Revenge trading after a loss</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Overtrading when bored or anxious</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Letting ego override your trading plan</div>
                </div>
            </div>
            <div class="rcard">
                <div class="rtitle"><i class="ti ti-award" aria-hidden="true"></i> Core insight</div>
                <div class="rrow"><div class="rdot"></div>Studies show that 80% of trading mistakes are psychological — not analytical</div>
                <div class="rrow"><div class="rdot"></div>A winning strategy executed poorly is a losing strategy in practice</div>
                <div class="rrow"><div class="rdot"></div>Mastering your psychology is the final — and hardest — edge in trading</div>
            </div>
            <button class="btndone" onclick="markDone(1)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
            </div>
        </div>
        </div>

        <!-- L2 -->
        <div class="mod" data-id="2">
        <div class="mod-hd" onclick="tog(2)">
            <div class="mn">02</div>
            <div class="micon"><i class="ti ti-flame" aria-hidden="true"></i></div>
            <div class="mmeta"><div class="mt">Fear and Greed in Trading</div><div class="ms">The two emotions that control most retail traders</div></div>
            <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody">
            <div class="minner">
            <p class="intro">Fear and greed are the two most powerful forces in any financial market. They operate in cycles, driving prices to extremes and they operate inside every trader — causing entries that are too late, exits that are too early and positions that are far too large.</p>
            <div class="emeter">
                <div class="emeter-row">
                <span class="emeter-lbl">Fear of loss</span>
                <div class="emeter-bar"><div class="emeter-fill fill-danger" style="--w:88%;width:88%"></div></div>
                <span class="emeter-val">High</span>
                </div>
                <div class="emeter-row">
                <span class="emeter-lbl">Greed / FOMO</span>
                <div class="emeter-bar"><div class="emeter-fill fill-danger" style="--w:82%;width:82%"></div></div>
                <span class="emeter-val">High</span>
                </div>
                <div class="emeter-row">
                <span class="emeter-lbl">Rational control</span>
                <div class="emeter-bar"><div class="emeter-fill fill-ok" style="--w:35%;width:35%"></div></div>
                <span class="emeter-val">Low</span>
                </div>
            </div>
            <div class="two">
                <div class="tbox danger">
                <div class="tbox-title"><i class="ti ti-mood-sad" aria-hidden="true"></i> Fear causes</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Closing winning trades too early</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Missing valid setups out of hesitation</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Moving stop loss to avoid being stopped</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Trading with too small a size due to anxiety</div>
                </div>
                <div class="tbox danger">
                <div class="tbox-title"><i class="ti ti-trending-up" aria-hidden="true"></i> Greed causes</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Holding winners too long, giving back profit</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Over-sizing positions after a winning run</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Chasing price after missing the entry</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Ignoring risk rules because "this trade is sure"</div>
                </div>
            </div>
            <div class="rcard">
                <div class="rtitle"><i class="ti ti-list-check" aria-hidden="true"></i> How to control both</div>
                <div class="rrow"><div class="rdot"></div>Pre-define your entry, stop and target before the market opens</div>
                <div class="rrow"><div class="rdot"></div>Use a checklist — decisions made in advance override emotions in the moment</div>
                <div class="rrow"><div class="rdot"></div>Journal every emotional trade — awareness is the first step to control</div>
            </div>
            <button class="btndone" onclick="markDone(2)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
            </div>
        </div>
        </div>

        <!-- L3 -->
        <div class="mod" data-id="3">
        <div class="mod-hd" onclick="tog(3)">
            <div class="mn">03</div>
            <div class="micon"><i class="ti ti-refresh-alert" aria-hidden="true"></i></div>
            <div class="mmeta"><div class="mt">Revenge Trading</div><div class="ms">Why emotional recovery trading destroys accounts</div></div>
            <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody">
            <div class="minner">
            <p class="intro">Revenge trading is the act of placing a trade — or multiple trades — immediately after a loss, with the primary motivation being to recover that money as fast as possible. It feels rational in the moment. It is never rational. It is one of the fastest ways to turn a manageable loss into a catastrophic one.</p>
            <div class="steps">
                <div class="step"><div class="step-num">01</div><div class="step-body"><div class="step-title">Loss is taken — emotion activates</div><div class="step-desc">The brain registers financial pain and triggers a stress response — the same as a physical threat</div></div></div>
                <div class="step"><div class="step-num">02</div><div class="step-body"><div class="step-title">Urgency to "get it back" overrides logic</div><div class="step-desc">The trader enters another trade immediately — often without setup qualification or risk calculation</div></div></div>
                <div class="step"><div class="step-num">03</div><div class="step-body"><div class="step-title">Second loss deepens the emotional state</div><div class="step-desc">Now two losses trigger a stronger reaction — position size increases, rules are abandoned entirely</div></div></div>
                <div class="step"><div class="step-num">04</div><div class="step-body"><div class="step-title">Compounding losses — account damage done</div><div class="step-desc">What began as a 1–2% loss becomes a 10–20% loss in a single session of unchecked emotion</div></div></div>
            </div>
            <div class="rcard">
                <div class="rtitle"><i class="ti ti-hand-stop" aria-hidden="true"></i> How to stop revenge trading</div>
                <div class="rrow"><div class="rdot"></div>Implement a mandatory 30-minute break after any losing trade</div>
                <div class="rrow"><div class="rdot"></div>Set a maximum of 3 trades per day — when the limit is reached, the session ends</div>
                <div class="rrow"><div class="rdot"></div>Write "No revenge trades" on your trading station — physical reminders work</div>
                <div class="rrow"><div class="rdot"></div>After a loss, close your platform and review your journal before trading again</div>
            </div>
            <button class="btndone" onclick="markDone(3)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
            </div>
        </div>
        </div>

        <!-- L4 -->
        <div class="mod" data-id="4">
        <div class="mod-hd" onclick="tog(4)">
            <div class="mn">04</div>
            <div class="micon"><i class="ti ti-star" aria-hidden="true"></i></div>
            <div class="mmeta"><div class="mt">Overconfidence</div><div class="ms">Why winning streaks are psychologically dangerous</div></div>
            <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody">
            <div class="minner">
            <p class="intro">Overconfidence is what happens after a strong run of winning trades. The trader begins to believe their skill is greater than it is — risk rules loosen, position sizes increase and setups that would normally be skipped are taken. One bad trade wipes out weeks of gains.</p>
            <div class="sgrid">
                <div class="sbox danger hi"><div class="sv r">3+</div><div class="sk">Wins before overconfidence sets in</div></div>
                <div class="sbox"><div class="sv">2×</div><div class="sk">Typical size increase when overconfident</div></div>
                <div class="sbox hi"><div class="sv r">1</div><div class="sk">Trade needed to erase the gains</div></div>
            </div>
            <div class="two">
                <div class="tbox danger">
                <div class="tbox-title"><i class="ti ti-alert-triangle" aria-hidden="true"></i> Warning signs</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Skipping the pre-trade checklist</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Increasing position size beyond your plan</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Taking setups that do not meet your criteria</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Thinking "I can't lose right now"</div>
                </div>
                <div class="tbox good">
                <div class="tbox-title"><i class="ti ti-circle-check" aria-hidden="true"></i> Stay grounded</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Keep the same risk % regardless of recent wins</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Check every trade against your written criteria</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Review your losing trades weekly — humility is protective</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>The market does not care about your streak</div>
                </div>
            </div>
            <button class="btndone" onclick="markDone(4)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
            </div>
        </div>
        </div>

        <!-- L5 -->
        <div class="mod" data-id="5">
        <div class="mod-hd" onclick="tog(5)">
            <div class="mn">05</div>
            <div class="micon"><i class="ti ti-clock" aria-hidden="true"></i></div>
            <div class="mmeta"><div class="mt">Patience and Discipline</div><div class="ms">The two traits that define long-term profitability</div></div>
            <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody">
            <div class="minner">
            <p class="intro">Patience is waiting for A-grade setups and doing nothing when the market offers nothing. Discipline is executing your plan exactly as written — even when emotion pushes you to deviate. Together, they are the foundation of every consistently profitable trader.</p>
            <div class="qblock">
                <p>"The hardest trade to take is the one where you do nothing. Most traders lose money not because they trade badly — but because they trade too often."</p>
                <cite>— Trading Psychology Principle</cite>
            </div>
            <div class="rcard">
                <div class="rtitle"><i class="ti ti-infinity" aria-hidden="true"></i> Patience and discipline rules</div>
                <div class="rrow"><div class="rdot"></div>Only enter trades that meet 100% of your written criteria — not 80%</div>
                <div class="rrow"><div class="rdot"></div>Not trading is a valid and often superior decision — protect your capital</div>
                <div class="rrow"><div class="rdot"></div>Discipline is highest before a trade — that is when your rules must be applied</div>
                <div class="rrow"><div class="rdot"></div>If you deviate from your plan and win, you have still made a mistake — the process matters</div>
                <div class="rrow"><div class="rdot"></div>Track every day you did NOT trade — patience deserves recognition too</div>
            </div>
            <button class="btndone" onclick="markDone(5)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
            </div>
        </div>
        </div>

        <!-- L6 -->
        <div class="mod" data-id="6">
        <div class="mod-hd" onclick="tog(6)">
            <div class="mn">06</div>
            <div class="micon"><i class="ti ti-heart-broken" aria-hidden="true"></i></div>
            <div class="mmeta"><div class="mt">Handling Losses</div><div class="ms">Developing a healthy relationship with losing trades</div></div>
            <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody">
            <div class="minner">
            <p class="intro">Losses are not failures — they are the cost of doing business in trading. Every professional trader loses regularly. The difference is how they respond. A trader who cannot handle losses calmly will eventually self-destruct, regardless of how good their strategy is.</p>
            <div class="two">
                <div class="tbox danger">
                <div class="tbox-title"><i class="ti ti-circle-x" aria-hidden="true"></i> Unhealthy response</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Immediately entering another trade to recover</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Blaming the market, broker, or news</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Severe self-criticism and emotional spiralling</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Abandoning the strategy after one bad trade</div>
                </div>
                <div class="tbox good">
                <div class="tbox-title"><i class="ti ti-circle-check" aria-hidden="true"></i> Professional response</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Step away — give your mind time to reset</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Review the trade objectively — did you follow the plan?</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Log it in your journal and identify what can be learned</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Accept it as a statistical outcome — not a personal failure</div>
                </div>
            </div>
            <div class="rcard">
                <div class="rtitle"><i class="ti ti-brain" aria-hidden="true"></i> Core mindset shift</div>
                <div class="rrow"><div class="rdot"></div>A loss taken according to your plan is a winning decision — regardless of the outcome</div>
                <div class="rrow"><div class="rdot"></div>Judge your trading on process, not on individual trade results</div>
                <div class="rrow"><div class="rdot"></div>No single trade defines you — your system's performance over 100 trades does</div>
            </div>
            <button class="btndone" onclick="markDone(6)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
            </div>
        </div>
        </div>

        <!-- L7 -->
        <div class="mod" data-id="7">
        <div class="mod-hd" onclick="tog(7)">
            <div class="mn">07</div>
            <div class="micon"><i class="ti ti-activity" aria-hidden="true"></i></div>
            <div class="mmeta"><div class="mt">Emotional Risk Control</div><div class="ms">Using psychology as a layer of risk management</div></div>
            <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody">
            <div class="minner">
            <p class="intro">Emotional risk control means recognising that your emotional state directly affects your trading decisions — and building rules specifically to protect your account when your emotions are elevated. Your risk management system must account for the human element.</p>
            <div class="steps">
                <div class="step"><div class="step-num">01</div><div class="step-body"><div class="step-title">Rate your emotional state before each session</div><div class="step-desc">On a scale of 1–10, assess stress, anxiety, fatigue and anger. Score above 6 — do not trade</div></div></div>
                <div class="step"><div class="step-num">02</div><div class="step-body"><div class="step-title">Reduce size when emotional</div><div class="step-desc">If you must trade and emotion is present, halve your normal position size — protect capital first</div></div></div>
                <div class="step"><div class="step-num">03</div><div class="step-body"><div class="step-title">Set emotional circuit breakers</div><div class="step-desc">After 2 consecutive losses in one session — mandatory 60-minute pause before any new trade</div></div></div>
                <div class="step"><div class="step-num">04</div><div class="step-body"><div class="step-title">Physical reset protocol</div><div class="step-desc">Walk, breathe, hydrate — physical state directly influences cognitive clarity and decision quality</div></div></div>
            </div>
            <button class="btndone" onclick="markDone(7)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
            </div>
        </div>
        </div>

        <!-- L8 -->
        <div class="mod" data-id="8">
        <div class="mod-hd" onclick="tog(8)">
            <div class="mn">08</div>
            <div class="micon"><i class="ti ti-calendar-event" aria-hidden="true"></i></div>
            <div class="mmeta"><div class="mt">Building a Trading Routine</div><div class="ms">Structure that eliminates emotional decision-making</div></div>
            <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody">
            <div class="minner">
            <p class="intro">A trading routine removes the need to make decisions under pressure. When your pre-market preparation, execution process and post-market review are structured, emotion has less room to operate. Routine is the architecture of discipline.</p>
            <div class="steps">
                <div class="step"><div class="step-num">AM</div><div class="step-body"><div class="step-title">Pre-market preparation (30 min)</div><div class="step-desc">Review economic calendar, mark key levels, identify valid setups, confirm emotional readiness</div></div></div>
                <div class="step"><div class="step-num">MK</div><div class="step-body"><div class="step-title">Market session execution</div><div class="step-desc">Wait for setups to come to you — execute only A-grade criteria, follow the checklist on every trade</div></div></div>
                <div class="step"><div class="step-num">PM</div><div class="step-body"><div class="step-title">Post-market review (15 min)</div><div class="step-desc">Log all trades in your journal, review decisions objectively, note emotional state at each entry</div></div></div>
                <div class="step"><div class="step-num">WK</div><div class="step-body"><div class="step-title">Weekly performance audit (1 hour)</div><div class="step-desc">Analyse the week's trades for patterns, identify psychological errors, set focus points for next week</div></div></div>
            </div>
            <button class="btndone" onclick="markDone(8)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
            </div>
        </div>
        </div>

        <!-- L9 -->
        <div class="mod" data-id="9">
        <div class="mod-hd" onclick="tog(9)">
            <div class="mn">09</div>
            <div class="micon"><i class="ti ti-notebook" aria-hidden="true"></i></div>
            <div class="mmeta"><div class="mt">Trading Journal for Psychology</div><div class="ms">Your most powerful tool for self-improvement</div></div>
            <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody">
            <div class="minner">
            <p class="intro">A trading journal is not just a record of trade outcomes — it is a psychological diagnostic tool. When used correctly, it reveals the emotional patterns, cognitive biases and habitual mistakes that no chart analysis will ever show you.</p>
            <div class="rcard">
                <div class="rtitle"><i class="ti ti-file-text" aria-hidden="true"></i> What every journal entry must include</div>
                <div class="rrow"><div class="rdot"></div>Date, instrument, direction, entry price, stop loss, target and lot size</div>
                <div class="rrow"><div class="rdot"></div>The reason for the trade — what setup criteria was met</div>
                <div class="rrow"><div class="rdot"></div>Emotional state at entry: calm / anxious / excited / frustrated (rate 1–10)</div>
                <div class="rrow"><div class="rdot"></div>Did you follow your plan exactly? If not — what changed and why?</div>
                <div class="rrow"><div class="rdot"></div>Outcome, R:R achieved and one lesson extracted from this trade</div>
                <div class="rrow"><div class="rdot"></div>Screenshot of the setup with annotations — visual memory accelerates learning</div>
            </div>
            <div class="rcard" style="border-color:var(--zed-primary);">
                <div class="rtitle" style="color:var(--zed-primary);"><i class="ti ti-trending-up" aria-hidden="true"></i> What consistent journaling reveals</div>
                <div class="rrow"><div class="rdot" style="background:var(--zed-primary)"></div>Which setups are genuinely profitable versus which you only think are</div>
                <div class="rrow"><div class="rdot" style="background:var(--zed-primary)"></div>The emotional states that predict your worst trading decisions</div>
                <div class="rrow"><div class="rdot" style="background:var(--zed-primary)"></div>The time of day when your execution is strongest — and weakest</div>
            </div>
            <button class="btndone" onclick="markDone(9)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
            </div>
        </div>
        </div>

        <!-- L10 -->
        <div class="mod" data-id="10">
        <div class="mod-hd" onclick="tog(10)">
            <div class="mn">10</div>
            <div class="micon"><i class="ti ti-crown" aria-hidden="true"></i></div>
            <div class="mmeta"><div class="mt">Confidence vs Ego</div><div class="ms">Understanding the line between strength and self-destruction</div></div>
            <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody">
            <div class="minner">
            <p class="intro">Confidence and ego look identical from the outside — but they produce opposite outcomes. Confidence allows you to execute a valid setup without hesitation. Ego causes you to hold a losing trade because admitting the exit means admitting you were wrong. One builds accounts. The other destroys them.</p>
            <div class="two">
                <div class="tbox good">
                <div class="tbox-title"><i class="ti ti-circle-check" aria-hidden="true"></i> Confidence</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Trusting your process — not your prediction</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Cutting losses quickly — without hesitation</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Asking "was my process correct?" after a loss</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Skipping a trade that does not meet criteria</div>
                </div>
                <div class="tbox danger">
                <div class="tbox-title"><i class="ti ti-circle-x" aria-hidden="true"></i> Ego</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Holding losing trades to avoid being "wrong"</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Boasting about wins, hiding or ignoring losses</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Increasing size to "prove" a losing position</div>
                <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Refusing to accept that the market invalidated your view</div>
                </div>
            </div>
            <div class="rcard">
                <div class="rtitle"><i class="ti ti-brain" aria-hidden="true"></i> The rule</div>
                <div class="rrow"><div class="rdot"></div>The market is always right — your opinion of it is irrelevant once price moves against you</div>
                <div class="rrow"><div class="rdot"></div>Every time you hold a losing trade because of ego, you are choosing pride over capital</div>
                <div class="rrow"><div class="rdot"></div>Humble traders protect their capital — ego-driven traders donate theirs to the market</div>
            </div>
            <button class="btndone" onclick="markDone(10)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
            </div>
        </div>
        </div>

        <!-- L11 -->
        <div class="mod" data-id="11">
        <div class="mod-hd" onclick="tog(11)">
            <div class="mn">11</div>
            <div class="micon"><i class="ti ti-alert-triangle" aria-hidden="true"></i></div>
            <div class="mmeta"><div class="mt">Common Mindset Mistakes</div><div class="ms">The psychological errors that silently drain accounts</div></div>
            <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody">
            <div class="minner">
            <p class="intro">Mindset mistakes are rarely dramatic. They are small, repeated deviations that accumulate over time. Most traders do not realise they are making these mistakes until they review their journal data — by which point the damage is already done.</p>
            <div class="rcard">
                <div class="rtitle"><i class="ti ti-x" aria-hidden="true"></i> The 10 most costly mindset mistakes</div>
                <div class="rrow"><div class="rdot"></div>Treating trading as gambling — expecting fast money without a structured process</div>
                <div class="rrow"><div class="rdot"></div>Ignoring losses mentally — not journaling them, not learning from them</div>
                <div class="rrow"><div class="rdot"></div>Comparing your results to other traders — every trader's journey is different</div>
                <div class="rrow"><div class="rdot"></div>Abandoning a valid strategy after a short losing streak — no edge works 100% of the time</div>
                <div class="rrow"><div class="rdot"></div>Believing you can "feel" when the market will move — intuition without data is just guessing</div>
                <div class="rrow"><div class="rdot"></div>Letting a winning trade define your next decision — each trade is statistically independent</div>
                <div class="rrow"><div class="rdot"></div>Trading when tired, stressed, or emotionally compromised — physical state affects all decisions</div>
                <div class="rrow"><div class="rdot"></div>Seeking validation from social media or trading groups before executing — this is outsourcing your discipline</div>
                <div class="rrow"><div class="rdot"></div>Over-optimising strategy after every loss — confusing normal variance with a broken strategy</div>
                <div class="rrow"><div class="rdot"></div>Not having a written trading plan — without one, every decision is made in real-time emotion</div>
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
            <div class="mmeta"><div class="mt">Psychology Checklist</div><div class="ms">Your pre-session mental readiness protocol</div></div>
            <div class="mright"><span class="badge b-final">Final</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
        </div>
        <div class="mbody">
            <div class="minner">
            <p class="intro">Run through this checklist before every trading session. It takes less than two minutes and functions as a mental firewall between your emotional state and your trading decisions. If you cannot check every box — do not trade today.</p>
            <div class="clstat" id="clstat">0 of 12 checked</div>
            <div class="clwrap" id="clwrap">
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I am physically rested — I have slept adequately</span></div>
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">My emotional state is calm — I rate myself 5 or below on the stress scale</span></div>
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I am not angry, anxious, or distracted by events outside the market</span></div>
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I have reviewed the economic calendar for today's session</span></div>
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I have identified my key levels and potential setups in advance</span></div>
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I will only trade setups that meet 100% of my written criteria</span></div>
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I will not revenge trade if I take a loss today</span></div>
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I will not increase my position size because of yesterday's results</span></div>
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I accept that I may lose today — and that is part of the process</span></div>
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I will stop trading if I hit my daily loss limit — no exceptions</span></div>
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I will log every trade in my journal before the session ends</span></div>
                <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I am trading my plan — not my emotions</span></div>
            </div>
            <button class="btndone" onclick="markDone(12)"><i class="ti ti-trophy" aria-hidden="true"></i> Complete Course</button>
            </div>
        </div>
        </div>
    </div>

    <div class="container">

        <div class="slbl d-none" style="margin-top:1px;">
            <i class="ti ti-help" aria-hidden="true"></i>
            <span>Trading Psychology Frequently Asked Questions | FAQ
            <div class="underline"></div>
            </span>
        </div>

         <div class="zed-sec-head mt-5">  
            <h2 class="zed-sec-title">Trading Psychology Frequently Asked Questions | FAQ</h2> 
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
                color: black;
            }

        </style>

        <div class="faq-wrap">
            <div class="faq-top d-none">
                <i class="ti ti-message-question" aria-hidden="true"></i>
                <h2>Trading Psychology — FAQ</h2>
            </div>
            <div class="faq-note">Professional answers optimised for search engines, AI assistants and voice search — covering the most common questions on trading mindset and emotion control.</div>

            <div class="fi">
                <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is trading psychology and why does it matter?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                <div class="fa"><div class="fa-inner">Trading psychology refers to the emotional and mental factors that influence a trader's decisions in the market. <b>It matters because over 80% of trading mistakes are psychological in origin</b> — not analytical. A trader can have a statistically profitable strategy and still lose money by allowing fear, greed, or ego to override their planned execution at the moment of entry or exit.</div></div>
            </div>

            <div class="fi">
                <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How do fear and greed affect trading decisions?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                <div class="fa"><div class="fa-inner">Fear causes traders to exit winning trades too early, hesitate on valid setups and move stop losses to avoid being stopped out. Greed causes traders to hold winners past their targets, over-size positions after wins and chase price entries they missed. <b>Both emotions bypass the rational, rule-based decision-making that profitable trading requires.</b> The antidote is a written plan that pre-defines every decision before emotion can interfere.</div></div>
            </div>

            <div class="fi">
                <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is revenge trading and how do I stop it?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                <div class="fa"><div class="fa-inner">Revenge trading is placing trades immediately after a loss with the primary goal of recovering that money quickly — rather than waiting for a valid setup. <b>It is driven by emotional pain, not analysis.</b> To stop it: implement a mandatory 30-minute break after any loss, set a maximum of 3 trades per day and close your trading platform when the daily loss limit is reached. Physical distance from the screen is the most effective circuit breaker.</div></div>
            </div>

            <div class="fi">
                <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How do I build discipline as a trader?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                <div class="fa"><div class="fa-inner">Discipline is built through systems, not willpower. <b>Write a trading plan that defines every rule in advance</b> — entry criteria, stop loss rules, maximum daily loss and position sizing. Use a pre-trade checklist before every session. Journal every trade including your emotional state. Discipline is the consistent application of these structures over time — it is a skill developed through repetition, not a personality trait you either have or do not.</div></div>
            </div>

            <div class="fi">
                <div class="fq" onclick="faqTog(this)"><span class="fq-txt">Why do I keep making the same trading mistakes?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                <div class="fa"><div class="fa-inner">Repeated mistakes typically indicate that the behaviour is being driven by an unconscious emotional pattern — not a lack of knowledge. <b>The most effective solution is consistent journaling.</b> When you log every trade with its emotional context, patterns emerge clearly: you may always revenge trade after a Tuesday loss, or always over-size after a winning week. Once the pattern is visible, it can be addressed with a specific rule or circuit breaker.</div></div>
            </div>

            <div class="fi">
                <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What should I write in a trading journal?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                <div class="fa"><div class="fa-inner">Every journal entry should include: instrument, direction, entry/exit prices, lot size, stop loss and target levels, the specific reason for the trade, your emotional state at entry rated 1–10, whether you followed your plan exactly, the outcome and R:R achieved and one lesson extracted. <b>A screenshot of the setup with annotations</b> is highly recommended. Reviewed weekly, this data reveals which setups are genuinely profitable and which emotional states predict your worst decisions.</div></div>
            </div>

            <div class="fi">
                <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is the difference between confidence and ego in trading?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                <div class="fa"><div class="fa-inner">Confidence means trusting your process and executing valid setups without hesitation — including cutting losses quickly when the trade is wrong. Ego means holding a losing position because exiting requires admitting you were wrong. <b>Confidence builds accounts. Ego donates them to the market.</b> The key test: are you making a decision based on what the chart is showing — or based on what you need to be true?</div></div>
            </div>

            <div class="fi">
                <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How does a trading routine improve psychology?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                <div class="fa"><div class="fa-inner">A structured trading routine — pre-market preparation, session execution protocol and post-market review — <b>removes the need to make decisions under emotional pressure.</b> When your actions are pre-decided through routine, emotion has fewer entry points to influence your behaviour. Traders with consistent routines report lower anxiety, fewer impulsive decisions and more consistent execution compared to those who approach each session without structure.</div></div>
            </div>

            <div class="fi">
                <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is Zed Capital's Trading Psychology Course designed to achieve?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
                <div class="fa"><div class="fa-inner">This course — <b>Course 4 of Zed Capital's Core Trading Series</b> — is designed to give traders a complete framework for understanding and managing the psychological forces that drive trading decisions. It covers fear, greed, revenge trading, overconfidence, patience, loss handling, emotional risk control, journaling and the daily psychology checklist. The goal is to help traders execute their strategy with consistency — removing emotion as a variable in their results.</div></div>
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
        if(m){
            m.classList.add('done');
            m.classList.remove('active','open');
            const body=m.querySelector('.mbody');
            if(body) body.classList.remove('open');
            const b=m.querySelector('.badge');
            if(b){
            b.className='badge b-done';
            b.textContent='Done';
            }
        }
        const pct=Math.round((done.size/12)*100);
        const pbar=document.getElementById('pbar');
        if(pbar) pbar.style.width=pct+'%';
        const ppct=document.getElementById('ppct');
        if(ppct) ppct.textContent=done.size+' / 12';
        const hk3=document.getElementById('hk3');
        if(hk3) hk3.textContent=done.size;
        const nx=id+1;
        if(nx<=12){const nm=document.querySelector(`.mod[data-id="${nx}"]`);if(nm){nm.classList.add('active');tog(nx);}}
        if(id===12)setTimeout(()=>sendPrompt('I have completed the Zed Capital Trading Psychology Course. Please summarise the key lessons and recommend what I should study next.'),400);
        }
        function chk(el){
        el.classList.toggle('checked');
        const cbox=el.querySelector('.cbox');
        if(cbox) cbox.textContent=el.classList.contains('checked')?'✓':'';
        const all=document.querySelectorAll('#clwrap .ci').length;
        const n=document.querySelectorAll('#clwrap .ci.checked').length;
        const st=document.getElementById('clstat');
        if(st){
            if(n===all){
            st.textContent='Mindset confirmed — you are ready to trade.';
            st.style.color='var(--zed-primary)';
            st.style.fontWeight='600';
            }
            else{
            st.textContent=n+' of '+all+' checked';
            st.style.color='var(--G400)';
            st.style.fontWeight='500';
            }
        }
        }
        function faqTog(qel){
        const fi=qel.closest('.fi');
        const fa=fi?.querySelector('.fa');
        const isOpen=fa?.classList.contains('open');
        document.querySelectorAll('.fi').forEach(f=>{f.classList.remove('open');f.querySelector('.fa')?.classList.remove('open');});
        if(!isOpen && fi && fa){fi.classList.add('open');fa.classList.add('open');}
        }
        (function(){
        let n1=0,n2=0,t1=12,t2=60;
        const iv=setInterval(()=>{
            n1=Math.min(n1+1,t1);n2=Math.min(n2+2,t2);
            const hk1=document.getElementById('hk1');
            if(hk1) hk1.textContent=n1;
            const hk2=document.getElementById('hk2');
            if(hk2) hk2.textContent=n2;
            if(n1>=t1&&n2>=t2)clearInterval(iv);
        },40);
        })();
    </script>

    
<?php
include_once ('elements/footer.php');
?>