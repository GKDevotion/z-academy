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
                Trading <em>Glossary</em>
            </h1>
            <p class="sub">
                From beginners getting acquainted with investing to seasoned experts — every trader needs a clear grasp of the vocabulary. Browse by category or search instantly.
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
                        <div class="val d-none">12</div>
                        <div class="lbl">12 Lessons</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-play-btn-fill"></i></div>
                    <div>
                        <div class="val d-none">24/5</div>
                        <div class="lbl">Beginner to Advanced</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-award-fill"></i></div>
                    <div>
                        <div class="val d-none">7+</div>
                        <div class="lbl">Forex & Crypto</div>
                    </div>
                </div>
                <div class="float-stat">
                    <div class="ico"><i class="bi bi-currency-dollar"></i></div>
                    <div>
                        <div class="val d-none">100K</div>
                        <div class="lbl">Disciplined Trading</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="hdiv"></div>


    
<?php
include_once ('elements/footer.php');
?>