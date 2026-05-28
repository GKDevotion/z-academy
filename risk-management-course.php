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
                Risk <em>Management</em>
            </h1>
            <p class="sub">
                Learn the rules that keep professional traders alive in the markets.
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



    

<style> 
:root{

  --zed-primaryL:#FEF0F2;
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
@keyframes fadeIn{from{opacity:0}to{opacity:1}}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.45}}
@keyframes barIn{from{width:0}to{width:100%}}
@keyframes slideL{from{opacity:0;transform:translateX(-10px)}to{opacity:1;transform:translateX(0)}}

.fu{opacity:0;animation:fadeUp .55s ease forwards}
.d1{animation-delay:.07s}.d2{animation-delay:.14s}.d3{animation-delay:.22s}.d4{animation-delay:.30s}.d5{animation-delay:.38s}.d6{animation-delay:.46s}
 
.htag{background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.45);font-size:10px;padding:4px 11px;border-radius:20px;letter-spacing:.04em}
.kpi-strip{display:grid;grid-template-columns:repeat(4,1fr);border-top:1px solid rgba(255,255,255,.07);margin:0 -2rem}
.kpi{padding:1.1rem .5rem;text-align:center;border-right:1px solid rgba(255,255,255,.06)}
.kpi:last-child{border-right:none}
.kv{font-family:'Bebas Neue',sans-serif;font-size:2rem;color:#fff;line-height:1;letter-spacing:.04em}
.kv.r{color:var(--zed-primary)}
.kl{font-size:10px;color:var(--G400);letter-spacing:.09em;text-transform:uppercase;margin-top:3px}

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
.prog-fill{height:100%;background:var(--zed-primary);width:0%;transition:width .6s cubic-bezier(.4,0,.2,1)}
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
.mod{background:#fff;border-left:3px solid transparent;transition:border-color .25s}
.mod+.mod{border-top:1px solid var(--G100)}
.mod.active{border-left-color:var(--zed-primary)}
.mod.done{
  border-left-color:var(--zed-primary);
}
.mod-hd{display:flex;align-items:center;gap:12px;padding:.95rem 1.5rem;cursor:pointer;transition:background .15s;user-select:none}
.mod-hd:hover{background:var(--G50)}
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
.mod.active .micon{background:var(--zed-primary);border-color:var(--zed-primary);color:#fff}
.mod.done .micon{
  background:var(--zed-primary);
  border-color:var(--zed-primary);
  color:#fff;
}
.mmeta{flex:1;min-width:0}
.mt{
  font-size: 1.5rem;
  font-weight:500;
  color:var(--BK);
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
.chev{font-size:16px;color:var(--G200);transition:transform .25s,color .2s}
.mod.open .chev{transform:rotate(90deg);color:var(--zed-primary)}

/* ── BODY ── */
.mbody{max-height:0;overflow:hidden;transition:max-height .42s cubic-bezier(.4,0,.2,1)}
.mbody.open{max-height:1400px}
.minner{padding:1.1rem 1.5rem 1.5rem 4.5rem;border-top:1px solid var(--G50)}
.intro{ 
  color:var(--zed-secondary);
  line-height:1.8;
  margin-bottom:1.2rem;
  max-width:510px;
}

/* ── FORMULA ── */
.fbox{display:flex;align-items:center;gap:12px;background:var(--BK);border-radius:4px;padding:.85rem 1.1rem;margin-bottom:1.2rem}
.flbl{font-size:10px;color:var(--G400);letter-spacing:.09em;text-transform:uppercase;white-space:nowrap;flex-shrink:0}
.fdiv{width:1px;height:18px;background:rgba(255,255,255,.12);flex-shrink:0}
.feq{font-size:12.5px;color:#fff;font-weight:400;line-height:1.5}
.feq b{color:var(--zed-primary)}

/* ── STAT GRID ── */
.sgrid{display:grid;grid-template-columns:repeat(3,1fr);gap:8px;margin-bottom:1.2rem}
.sbox{background:var(--G50);border:1px solid var(--G100);border-radius:4px;padding:.7rem .8rem;text-align:center}
.sbox.hi{background:var(--zed-primaryL);border-color:#FACDD3}
.sv{font-family:'Bebas Neue',sans-serif;font-size:1.6rem;color:var(--BK);line-height:1}
.sv.r{color:var(--zed-primary)}
.sk{font-size:10px;color:var(--G400);letter-spacing:.05em;text-transform:uppercase;margin-top:3px}

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
.rdot{width:5px;height:5px;background:var(--zed-primary);border-radius:50%;flex-shrink:0;margin-top:6px;animation:pulse 2.5s ease infinite}

/* ── TWO COL ── */
.two{display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:1.2rem}
.tbox{background:var(--G50);border:1px solid var(--G100);border-radius:4px;padding:.8rem 1rem}
.tbox.danger{background:var(--zed-primaryL);border-color:#FACDD3}
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
.tbox.danger .tbox-row i{color:var(--zed-primary)}
.tbox-row i{
  color:var(--zed-secondary)
}

/* ── CHECKLIST ── */
.clwrap{margin-bottom:1rem}
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
.ci:hover{background:var(--G50)}
.cbox{width:17px;height:17px;border:1.5px solid var(--G200);border-radius:3px;flex-shrink:0;display:flex;align-items:center;justify-content:center;font-size:11px;transition:all .2s;color:#fff}
.ci.checked .cbox{background:var(--zed-primary);border-color:var(--zed-primary)}
.ci.checked .clbl{text-decoration:line-through;color:var(--G400)}

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
  color:var(--BK);
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
  color:var(--BK);
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
.fi.open .fq-ic{transform:rotate(180deg);color:var(--zed-primary)}
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
  color:var(--BK);
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

</style>

  <div class="container">
   
 
    <div class="zed-sec-head mt-5 mb-3">  
          <h2 class="zed-sec-title">Core Lessons — Risk Management</h2> 
          <div class="underline"></div>
    </div>
        
    <div class="prog">
      <span class="prog-lbl">Course Progress</span>
      <div class="prog-bar"><div class="prog-fill" id="pbar"></div></div>
      <span class="prog-pct" id="ppct">0 / 12</span>
    </div>

    <!-- LESSON 1 -->
    <div class="mod active open" data-id="1">
      <div class="mod-hd" onclick="tog(1)">
        <div class="mn">01</div>
        <div class="micon"><i class="ti ti-help-circle" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">What is Risk Management?</div><div class="ms">The foundation of professional trading</div></div>
        <div class="mright"><span class="badge b-start">Start Here</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody open">
        <div class="minner">
          <p class="intro">Risk management is the systematic process of identifying, measuring and controlling the financial risk in every trade. It is not about avoiding losses — losses are inevitable. It is about ensuring no single loss, or series of losses, can end your trading career.</p>
          <div class="two">
            <div class="tbox">
              <div class="tbox-title"><i class="ti ti-circle-check" aria-hidden="true"></i> What it IS</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>A structured set of rules applied before every trade</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Pre-defined limits on loss per trade and per day</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>A framework for long-term capital preservation</div>
            </div>
            <div class="tbox danger">
              <div class="tbox-title"><i class="ti ti-circle-x" aria-hidden="true"></i> What it is NOT</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>A way to guarantee winning trades</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Optional or situational — it is always applied</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Something you figure out after a big loss</div>
            </div>
          </div>
          <div class="rcard">
            <div class="rtitle"><i class="ti ti-award" aria-hidden="true"></i> Why it matters</div>
            <div class="rrow"><div class="rdot"></div>Over 80% of retail traders lose money — poor risk management is the primary cause</div>
            <div class="rrow"><div class="rdot"></div>A trader with an average strategy but great risk management outlasts a brilliant trader with none</div>
            <div class="rrow"><div class="rdot"></div>Capital preservation is the number one objective — profit follows discipline</div>
          </div>
          <button class="btndone" onclick="markDone(1)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
        </div>
      </div>
    </div>

    <!-- LESSON 2 -->
    <div class="mod" data-id="2">
      <div class="mod-hd" onclick="tog(2)">
        <div class="mn">02</div>
        <div class="micon"><i class="ti ti-percentage" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">Risk Per Trade</div><div class="ms">Defining exactly how much you risk on each position</div></div>
        <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody">
        <div class="minner">
          <p class="intro">Risk per trade is the fixed percentage of your total account balance you are willing to lose on any single trade. This number must be decided in advance and never deviated from — regardless of how confident you feel about a setup.</p>
          <div class="fbox">
            <span class="flbl">Formula</span><div class="fdiv"></div>
            <span class="feq">Risk Amount ($) = <b>Account Balance × Risk %</b></span>
          </div>
          <div class="sgrid">
            <div class="sbox hi"><div class="sv r">1%</div><div class="sk">Conservative</div></div>
            <div class="sbox"><div class="sv">2%</div><div class="sk">Standard</div></div>
            <div class="sbox"><div class="sv" style="color:var(--G400)">3%+</div><div class="sk">Aggressive</div></div>
          </div>
          <div class="rcard">
            <div class="rtitle"><i class="ti ti-list-check" aria-hidden="true"></i> Rules</div>
            <div class="rrow"><div class="rdot"></div>Risk 1–2% per trade maximum — this is the professional standard</div>
            <div class="rrow"><div class="rdot"></div>Calculate dollar risk before placing any trade — never estimate</div>
            <div class="rrow"><div class="rdot"></div>Maintain the same % regardless of confidence level or recent wins</div>
            <div class="rrow"><div class="rdot"></div>Small consistent risk keeps you alive through long losing streaks</div>
          </div>
          <button class="btndone" onclick="markDone(2)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
        </div>
      </div>
    </div>

    <!-- LESSON 3 -->
    <div class="mod" data-id="3">
      <div class="mod-hd" onclick="tog(3)">
        <div class="mn">03</div>
        <div class="micon"><i class="ti ti-ruler-2" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">Lot Size Calculation</div><div class="ms">Sizing every position with precision</div></div>
        <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody">
        <div class="minner">
          <p class="intro">Lot size determines how much money moves per pip. Even the best trade setup fails if the lot size is wrong. Always calculate — never guess. This single skill prevents more blown accounts than any other.</p>
          <div class="fbox">
            <span class="flbl">Formula</span><div class="fdiv"></div>
            <span class="feq">Lot Size = <b>Risk ($) ÷ (Stop Loss Pips × Pip Value)</b></span>
          </div>
          <div class="rcard">
            <div class="rtitle"><i class="ti ti-table" aria-hidden="true"></i> Lot Reference</div>
            <div class="rrow"><div class="rdot"></div>Standard Lot = 100,000 units — ~$10 per pip on major pairs</div>
            <div class="rrow"><div class="rdot"></div>Mini Lot = 10,000 units — ~$1 per pip</div>
            <div class="rrow"><div class="rdot"></div>Micro Lot = 1,000 units — ~$0.10 per pip</div>
            <div class="rrow"><div class="rdot"></div>Example: $1,000 account, 1% risk ($10), 20 pip SL, $1 pip value → 0.05 lots</div>
            <div class="rrow"><div class="rdot"></div>Always verify pip value per instrument — it varies across pairs and brokers</div>
          </div>
          <button class="btndone" onclick="markDone(3)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
        </div>
      </div>
    </div>

    <!-- LESSON 4 -->
    <div class="mod" data-id="4">
      <div class="mod-hd" onclick="tog(4)">
        <div class="mn">04</div>
        <div class="micon"><i class="ti ti-adjustments-horizontal" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">Position Sizing</div><div class="ms">Scaling trade size to your account and risk tolerance</div></div>
        <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody">
        <div class="minner">
          <p class="intro">Position sizing is the process of determining exactly how large each trade should be relative to your account. It ties together your risk %, stop loss distance and pip value into one precise number. It is the engine of disciplined trading.</p>
          <div class="fbox">
            <span class="flbl">Process</span><div class="fdiv"></div>
            <span class="feq"><b>Step 1:</b> Define risk % → <b>Step 2:</b> Set SL → <b>Step 3:</b> Calculate lot size</span>
          </div>
          <div class="rcard">
            <div class="rtitle"><i class="ti ti-settings" aria-hidden="true"></i> Key Principles</div>
            <div class="rrow"><div class="rdot"></div>Position size must always be derived from your stop loss — not your opinion of the trade</div>
            <div class="rrow"><div class="rdot"></div>Never increase position size to compensate for a wider stop loss</div>
            <div class="rrow"><div class="rdot"></div>Reduce size during drawdown periods — protect remaining capital</div>
            <div class="rrow"><div class="rdot"></div>Scale up only after consistent profitability over 50+ trades — not before</div>
          </div>
          <button class="btndone" onclick="markDone(4)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
        </div>
      </div>
    </div>

    <!-- LESSON 5 -->
    <div class="mod" data-id="5">
      <div class="mod-hd" onclick="tog(5)">
        <div class="mn">05</div>
        <div class="micon"><i class="ti ti-scale" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">Risk-to-Reward Ratio</div><div class="ms">Building positive expectancy into every trade</div></div>
        <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody">
        <div class="minner">
          <p class="intro">Risk-to-Reward ratio compares how much you stand to lose versus how much you stand to gain. A trader with a 40% win rate and a 1:2 R:R is profitable. A trader with a 60% win rate and a 1:0.5 R:R is losing money. The math is the edge.</p>
          <div class="fbox">
            <span class="flbl">R:R Ratio</span><div class="fdiv"></div>
            <span class="feq">R:R = <b>Target Distance ÷ Stop Loss Distance</b></span>
          </div>
          <div class="sgrid">
            <div class="sbox"><div class="sv" style="color:var(--G400)">1:1</div><div class="sk">Minimum</div></div>
            <div class="sbox"><div class="sv">1:2</div><div class="sk">Standard</div></div>
            <div class="sbox hi"><div class="sv r">1:3</div><div class="sk">Ideal</div></div>
          </div>
          <div class="rcard">
            <div class="rtitle"><i class="ti ti-math" aria-hidden="true"></i> Key Rules</div>
            <div class="rrow"><div class="rdot"></div>Never enter a trade with less than a 1:1.5 Risk-to-Reward ratio</div>
            <div class="rrow"><div class="rdot"></div>At 1:2 R:R — you only need to win 34% of trades to break even</div>
            <div class="rrow"><div class="rdot"></div>Place your target at the next logical structure level — not an arbitrary number</div>
            <div class="rrow"><div class="rdot"></div>Calculate R:R before entry — if it does not qualify, skip the trade entirely</div>
          </div>
          <button class="btndone" onclick="markDone(5)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
        </div>
      </div>
    </div>

    <!-- LESSON 6 -->
    <div class="mod" data-id="6">
      <div class="mod-hd" onclick="tog(6)">
        <div class="mn">06</div>
        <div class="micon"><i class="ti ti-barrier-block" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">Stop Loss Placement</div><div class="ms">Where to place your stop and why it matters</div></div>
        <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody">
        <div class="minner">
          <p class="intro">Stop loss placement is both a risk control tool and a market structure decision. A stop placed at the wrong level gets triggered by normal price movement. A stop placed correctly only fires when your trade idea is actually wrong.</p>
          <div class="two">
            <div class="tbox">
              <div class="tbox-title"><i class="ti ti-circle-check" aria-hidden="true"></i> Correct placement</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Behind a swing high or swing low</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Below key support or above key resistance</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Outside the structure — beyond the invalidation level</div>
            </div>
            <div class="tbox danger">
              <div class="tbox-title"><i class="ti ti-circle-x" aria-hidden="true"></i> Wrong placement</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Flat $ or pip amount with no structure basis</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Too tight — hit by normal volatility</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Moved further away to avoid being stopped out</div>
            </div>
          </div>
          <div class="rcard">
            <div class="rtitle"><i class="ti ti-list-check" aria-hidden="true"></i> Stop Loss Rules</div>
            <div class="rrow"><div class="rdot"></div>Set your stop loss BEFORE entering the trade — always</div>
            <div class="rrow"><div class="rdot"></div>Never move a stop loss further away to avoid a loss</div>
            <div class="rrow"><div class="rdot"></div>Trail your stop to protect profits as the trade moves in your favour</div>
            <div class="rrow"><div class="rdot"></div>When your stop is triggered, accept the loss — your trade idea was invalidated</div>
          </div>
          <button class="btndone" onclick="markDone(6)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
        </div>
      </div>
    </div>

    <!-- LESSON 7 -->
    <div class="mod" data-id="7">
      <div class="mod-hd" onclick="tog(7)">
        <div class="mn">07</div>
        <div class="micon"><i class="ti ti-trending-down" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">Drawdown Management</div><div class="ms">Surviving losing periods without destroying your account</div></div>
        <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody">
        <div class="minner">
          <p class="intro">Drawdown is the reduction of your account from its peak to a trough. Every trader — including the best in the world — experiences drawdowns. The goal is not to eliminate them, but to manage their depth so recovery remains realistic.</p>
          <div class="sgrid">
            <div class="sbox hi"><div class="sv r">10%</div><div class="sk">Reduce Size</div></div>
            <div class="sbox"><div class="sv">20%</div><div class="sk">Stop &amp; Review</div></div>
            <div class="sbox"><div class="sv" style="color:var(--G400)">30%+</div><div class="sk">Critical Zone</div></div>
          </div>
          <div class="rcard">
            <div class="rtitle"><i class="ti ti-chart-line" aria-hidden="true"></i> Drawdown Rules</div>
            <div class="rrow"><div class="rdot"></div>At 10% drawdown — halve your position size immediately</div>
            <div class="rrow"><div class="rdot"></div>At 20% drawdown — stop trading, review your strategy and journal</div>
            <div class="rrow"><div class="rdot"></div>To recover a 50% drawdown you must make a 100% gain — avoid getting there</div>
            <div class="rrow"><div class="rdot"></div>Drawdown is psychological — reduced size protects both capital and mindset</div>
            <div class="rrow"><div class="rdot"></div>Never try to trade out of a drawdown by increasing risk — this compounds it</div>
          </div>
          <button class="btndone" onclick="markDone(7)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
        </div>
      </div>
    </div>

    <!-- LESSON 8 -->
    <div class="mod" data-id="8">
      <div class="mod-hd" onclick="tog(8)">
        <div class="mn">08</div>
        <div class="micon"><i class="ti ti-clock-pause" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">Overtrading Control</div><div class="ms">Why less trades often means more profit</div></div>
        <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody">
        <div class="minner">
          <p class="intro">Overtrading is one of the most common — and most destructive — habits in retail trading. It is driven by boredom, revenge, FOMO and the illusion that more trades equals more profit. It does not. Discipline means waiting for only A-grade setups.</p>
          <div class="two">
            <div class="tbox danger">
              <div class="tbox-title"><i class="ti ti-alert-triangle" aria-hidden="true"></i> Signs of overtrading</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Trading out of boredom or routine</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Entering trades to "make back" a loss</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Taking setups that do not meet your criteria</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Multiple trades open in the same direction</div>
            </div>
            <div class="tbox">
              <div class="tbox-title"><i class="ti ti-circle-check" aria-hidden="true"></i> How to fix it</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Set a maximum daily trade limit (e.g. 3 trades)</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Only trade A-grade setups — define them in writing</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Stop trading after daily loss limit is hit</div>
              <div class="tbox-row"><i class="ti ti-point" aria-hidden="true"></i>Journal every trade — track your emotional state</div>
            </div>
          </div>
          <button class="btndone" onclick="markDone(8)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
        </div>
      </div>
    </div>

    <!-- LESSON 9 -->
    <div class="mod" data-id="9">
      <div class="mod-hd" onclick="tog(9)">
        <div class="mn">09</div>
        <div class="micon"><i class="ti ti-shield" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">Account Protection Rules</div><div class="ms">Hard limits that safeguard your entire trading career</div></div>
        <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody">
        <div class="minner">
          <p class="intro">Account protection rules are non-negotiable boundaries that exist to ensure no single session, week, or emotional decision can end your trading career. They are the last line of defence between a bad day and a blown account.</p>
          <div class="sgrid">
            <div class="sbox hi"><div class="sv r">3%</div><div class="sk">Max Daily Loss</div></div>
            <div class="sbox"><div class="sv">5%</div><div class="sk">Max Weekly Loss</div></div>
            <div class="sbox"><div class="sv">10%</div><div class="sk">Max Monthly Loss</div></div>
          </div>
          <div class="rcard">
            <div class="rtitle"><i class="ti ti-lock" aria-hidden="true"></i> Protection Rules</div>
            <div class="rrow"><div class="rdot"></div>Stop trading the moment your daily loss limit is hit — no exceptions</div>
            <div class="rrow"><div class="rdot"></div>Never trade capital you cannot afford to lose emotionally or financially</div>
            <div class="rrow"><div class="rdot"></div>Withdraw a portion of profits regularly — do not let all gains sit at risk</div>
            <div class="rrow"><div class="rdot"></div>After 3 consecutive losses — mandatory pause before next trade</div>
            <div class="rrow"><div class="rdot"></div>Never add to a losing position — averaging down turns losses into disasters</div>
          </div>
          <button class="btndone" onclick="markDone(9)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
        </div>
      </div>
    </div>

    <!-- LESSON 10 -->
    <div class="mod" data-id="10">
      <div class="mod-hd" onclick="tog(10)">
        <div class="mn">10</div>
        <div class="micon"><i class="ti ti-alert-triangle" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">Risk Management Mistakes</div><div class="ms">The errors that silently destroy trading accounts</div></div>
        <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody">
        <div class="minner">
          <p class="intro">Most trading accounts are not blown by one catastrophic trade. They are slowly eroded by repeating the same small mistakes over and over. Recognising these patterns is the first step to eliminating them permanently.</p>
          <div class="rcard">
            <div class="rtitle"><i class="ti ti-x" aria-hidden="true"></i> The Most Costly Mistakes</div>
            <div class="rrow"><div class="rdot"></div>Moving stop loss further away to avoid a loss — this removes your safety net</div>
            <div class="rrow"><div class="rdot"></div>Increasing position size after a win — emotional sizing, not calculated sizing</div>
            <div class="rrow"><div class="rdot"></div>Trading without a stop loss — one bad trade can wipe an entire account</div>
            <div class="rrow"><div class="rdot"></div>Revenge trading after a loss — emotional decisions compound the damage</div>
            <div class="rrow"><div class="rdot"></div>Risking more because the setup "feels certain" — all setups carry equal uncertainty</div>
            <div class="rrow"><div class="rdot"></div>Ignoring daily loss limits — no rule means no protection</div>
            <div class="rrow"><div class="rdot"></div>Not tracking trades in a journal — patterns cannot be fixed if they are unseen</div>
          </div>
          <button class="btndone" onclick="markDone(10)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
        </div>
      </div>
    </div>

    <!-- LESSON 11 -->
    <div class="mod" data-id="11">
      <div class="mod-hd" onclick="tog(11)">
        <div class="mn">11</div>
        <div class="micon"><i class="ti ti-notebook" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">Trading Plan Rules</div><div class="ms">The written rules every professional trader lives by</div></div>
        <div class="mright"><span class="badge b-open">Lesson</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody">
        <div class="minner">
          <p class="intro">A trading plan is a written document that defines exactly how you trade — before you are in a trade, before you are emotional and before the market is moving. Without it, you are improvising. With it, you are executing a system.</p>
          <div class="rcard">
            <div class="rtitle"><i class="ti ti-file-text" aria-hidden="true"></i> Your Plan Must Include</div>
            <div class="rrow"><div class="rdot"></div>The markets and timeframes you trade — and only those</div>
            <div class="rrow"><div class="rdot"></div>Your exact entry criteria — what constitutes an A-grade setup</div>
            <div class="rrow"><div class="rdot"></div>Your risk per trade % and maximum daily loss limit</div>
            <div class="rrow"><div class="rdot"></div>Where stop losses are placed and under what conditions they are moved</div>
            <div class="rrow"><div class="rdot"></div>Your target setting method and minimum R:R requirement</div>
            <div class="rrow"><div class="rdot"></div>Your review process — weekly journal review and monthly performance audit</div>
            <div class="rrow"><div class="rdot"></div>Conditions under which you will stop trading for the day, week, or month</div>
          </div>
          <button class="btndone" onclick="markDone(11)"><i class="ti ti-check" aria-hidden="true"></i> Mark Complete</button>
        </div>
      </div>
    </div>

    <!-- LESSON 12 -->
    <div class="mod" data-id="12">
      <div class="mod-hd" onclick="tog(12)">
        <div class="mn">12</div>
        <div class="micon"><i class="ti ti-clipboard-check" aria-hidden="true"></i></div>
        <div class="mmeta"><div class="mt">Risk Checklist</div><div class="ms">Run through this before every single trade</div></div>
        <div class="mright"><span class="badge b-final">Final</span><i class="ti ti-chevron-right chev" aria-hidden="true"></i></div>
      </div>
      <div class="mbody">
        <div class="minner">
          <p class="intro">This is your pre-trade protocol. Every box must be checked before entering a position. If even one box cannot be checked, the trade does not happen. Discipline at this stage is what separates consistent traders from gamblers.</p>
          <div class="clstat" id="clstat">0 of 10 checked</div>
          <div class="clwrap" id="clwrap">
            <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I have defined my exact risk % for this trade</span></div>
            <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">My lot size has been calculated — not estimated</span></div>
            <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">My stop loss is placed at a logical market structure level</span></div>
            <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">This trade has a minimum 1:1.5 Risk-to-Reward ratio</span></div>
            <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I have NOT reached my daily loss limit today</span></div>
            <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I am not over-leveraged across my current open positions</span></div>
            <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">This setup meets my written A-grade criteria</span></div>
            <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I am not trading out of boredom, FOMO, or emotion</span></div>
            <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I have not had 3 consecutive losses today without a break</span></div>
            <div class="ci" onclick="chk(this)"><div class="cbox"></div><span class="clbl">I will accept the outcome of this trade — win or loss</span></div>
          </div>
          <button class="btndone" onclick="markDone(12)"><i class="ti ti-trophy" aria-hidden="true"></i> Complete Course</button>
        </div>
      </div>
    </div>

  </div>

  <div class="container">
 
      <div class="zed-sec-head mt-5 mb-5">  
            <h2 class="zed-sec-title">Risk Management Frequently Asked Questions— FAQ</h2> 
            <div class="underline"></div>
      </div>

      <div class="faq-wrap">
        <div class="faq-top d-none">
          <i class="ti ti-message-question" aria-hidden="true"></i>
          <h2></h2>
        </div>
        <div class="faq-note">Professional answers to the most common risk management questions — optimised for search, voice and AI discovery.</div>

        <div class="fi">
          <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is risk management in trading and why is it important?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
          <div class="fa"><div class="fa-inner">Risk management in trading is the structured practice of controlling financial exposure on every trade through predefined rules — including stop losses, position sizing and daily loss limits. <b>It is important because over 80% of retail traders lose money and poor risk management is the primary cause.</b> A trader with an average strategy but excellent risk management will outlast a talented trader with none.</div></div>
        </div>

        <div class="fi">
          <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How much should a beginner risk per trade?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
          <div class="fa"><div class="fa-inner">Beginners should risk no more than <b>1% of their total account balance per trade.</b> This means that even after 10 consecutive losing trades, only 10% of the account is lost — preserving enough capital to continue, learn and improve. As consistency improves over 50–100 documented trades, risk can be gradually increased to a maximum of 2%.</div></div>
        </div>

        <div class="fi">
          <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is the best Risk-to-Reward ratio for trading?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
          <div class="fa"><div class="fa-inner">The professional standard is a minimum of <b>1:2 Risk-to-Reward</b>, meaning you aim to gain twice what you risk. At 1:2 R:R, you only need a 34% win rate to be profitable. A 1:3 ratio is ideal. The critical rule is that no trade should be entered with less than a 1:1.5 ratio — if the target does not meet this threshold, the trade is skipped.</div></div>
        </div>

        <div class="fi">
          <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is drawdown in trading and how do I manage it?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
          <div class="fa"><div class="fa-inner">Drawdown is the percentage decline from an account's peak to its current value. <b>All traders experience drawdown — including professionals.</b> The key is managing its depth. At 10% drawdown, reduce position size by half. At 20%, stop trading and review your strategy. Recovering a 50% drawdown requires a 100% gain — which is why avoiding deep drawdowns is a primary objective, not an afterthought.</div></div>
        </div>

        <div class="fi">
          <div class="fq" onclick="faqTog(this)"><span class="fq-txt">How do I calculate lot size for a trade?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
          <div class="fa"><div class="fa-inner">The formula is: <b>Lot Size = Risk Amount ($) ÷ (Stop Loss in Pips × Pip Value).</b> Example: $2,000 account, 1% risk = $20 at risk. Stop loss = 20 pips. Pip value = $1 (mini lot on EUR/USD). Lot size = $20 ÷ (20 × $1) = 1.0 mini lots (0.10 standard lots). Always use a lot size calculator and verify pip value per instrument before entering the market.</div></div>
        </div>

        <div class="fi">
          <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is overtrading and how do I stop it?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
          <div class="fa"><div class="fa-inner">Overtrading is taking more trades than your strategy warrants — typically driven by boredom, FOMO, or the urge to recover losses. <b>It is one of the fastest ways to erode a trading account.</b> To stop it: define your A-grade setup criteria in writing, set a maximum of 2–3 trades per day, stop trading once the daily loss limit is reached and journal every trade including your emotional state at entry.</div></div>
        </div>

        <div class="fi">
          <div class="fq" onclick="faqTog(this)"><span class="fq-txt">Where should I place my stop loss?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
          <div class="fa"><div class="fa-inner">Stop losses should always be placed at a <b>logical market structure level</b> — behind a swing high or swing low, beyond a key support or resistance zone, or at the point where your trade idea is clearly invalidated. A stop should not be placed based on a fixed pip amount or dollar figure. The structure dictates the stop — the stop then dictates the lot size, not the other way around.</div></div>
        </div>

        <div class="fi">
          <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What should a trading plan include for risk management?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
          <div class="fa"><div class="fa-inner">A complete trading plan must include: <b>risk % per trade, maximum daily and weekly loss limits, entry criteria for A-grade setups, stop loss placement rules, minimum R:R requirement, position sizing method, conditions for stopping trading and a weekly review process.</b> Without a written plan, every trading decision is made emotionally in real time — which is the definition of gambling.</div></div>
        </div>

        <div class="fi">
          <div class="fq" onclick="faqTog(this)"><span class="fq-txt">What is Zed Capital and who is this course designed for?</span><i class="ti ti-chevron-down fq-ic" aria-hidden="true"></i></div>
          <div class="fa"><div class="fa-inner">Zed Capital is a professional trading education platform focused on building disciplined, structured traders. <b>This Risk Management Course is Course 3 of the Core Trading Series</b> and is designed for traders at every level — from complete beginners building their first framework to intermediate traders looking to eliminate the emotional errors that are costing them money. All content reflects professional and institutional trading standards.</div></div>
        </div>
      </div>

  </div>
    
<script>
    const done = new Set();

    function tog(id){
      document.querySelectorAll('.mod').forEach(m=>{
        const mid=+m.dataset.id, body=m.querySelector('.mbody');
        if(mid===id){
          const wasOpen=body.classList.contains('open');
          body.classList.toggle('open',!wasOpen);
          m.classList.toggle('open',!wasOpen);
        } else {
          body.classList.remove('open');
          m.classList.remove('open');
        }
      });
    }

    function markDone(id){
      done.add(id);
      const m=document.querySelector(`.mod[data-id="${id}"]`);
      if(m){
        m.classList.add('done');
        m.classList.remove('active','open');
        m.querySelector('.mbody').classList.remove('open');
        const b=m.querySelector('.badge');
        b.className='badge b-done';
        b.textContent='Done';
      }
      const pct=Math.round((done.size/12)*100);
      document.getElementById('pbar').style.width=pct+'%';
      document.getElementById('ppct').textContent=done.size+' / 12';
      document.getElementById('hk3').textContent=done.size;
      const next=id+1;
      if(next<=12){
        const nm=document.querySelector(`.mod[data-id="${next}"]`);
        if(nm){ nm.classList.add('active'); tog(next); }
      }
      if(id===12) setTimeout(()=>sendPrompt('I have completed the Zed Capital Risk Management Course. Please summarise what I have learned and tell me what course I should take next.'),400);
    }

    function chk(el){
      el.classList.toggle('checked');
      el.querySelector('.cbox').textContent=el.classList.contains('checked')?'✓':'';
      const all=document.querySelectorAll('#clwrap .ci').length;
      const n=document.querySelectorAll('#clwrap .ci.checked').length;
      const st=document.getElementById('clstat');
      if(n===all){ st.textContent='All clear — you are ready to trade.'; st.style.color='var(--zed-primary)'; st.style.fontWeight='600'; }
      else { st.textContent=n+' of '+all+' checked'; st.style.color='var(--G400)'; st.style.fontWeight='500'; }
    }

    function faqTog(qel){
      const fi=qel.closest('.fi'), fa=fi.querySelector('.fa'), isOpen=fa.classList.contains('open');
      document.querySelectorAll('.fi').forEach(f=>{ f.classList.remove('open'); f.querySelector('.fa').classList.remove('open'); });
      if(!isOpen){ fi.classList.add('open'); fa.classList.add('open'); }
    }

    (function(){
      let n1=0,n2=0,t1=12,t2=60;
      const iv=setInterval(()=>{
        n1=Math.min(n1+1,t1); n2=Math.min(n2+2,t2);
        document.getElementById('hk1').textContent=n1;
        document.getElementById('hk2').textContent=n2;
        if(n1>=t1&&n2>=t2) clearInterval(iv);
      },40);
    })();
</script>

 
<?php
include_once ('elements/footer.php');
?>