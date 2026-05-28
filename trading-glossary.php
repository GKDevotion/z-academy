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
    </style>
    
    <!-- ─── HERO ───────────────────────────────────────────── -->
    <section class="hero">
        <div class="container">
            <div class="hero-badge mt-4 d-none"><i class="bi bi-mortarboard-fill"></i> Professional Trading Education</div>
            <h1>
                <em>Glossary</em> <br>Of Trading Terms
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
:root {
  --zed-primary: #ff0000;
  --zed-primary-hover: #b80d14;
  --zed-light-red-hover: #ffb5b5;
  --zed-secondary: #7b7b7b;
  --zed-backgound-color: #f7f7f7;
  --zed-icon-color: #e7e7e7;
  --zed-dark-text: #000;
  --zed-light-bg: #fff;
  --zed-card-bg: #fff;
  --zed-banner-bg-start: #f8f9fa;
  --zed-banner-bg-end: #e2e6ea;
  --border-radius-lg: 0.75rem;
  --zed-border-color: #d5d5d5;
  --zed-card-back: #f8f9fa;
  --zed-green-text: #233f57;
  --zed-white-glass-effect: #f8f9facf;
  --zed-success: green;
  --zed-success-hover: #19b57c;
  --float-distance: 14px;
  --float-duration: 4.5s;
  --shadow: 0 4px 24px rgba(10,22,40,0.08);
  --gold: #c9a84c;
  --blue: #1551a0;
  --purple: #7c3aed;
  --purple-s: #faf5ff;
  --teal: #0891b2;
  --teal-s: #ecfeff;
  --green: #166534;
  --green-s: #f0fdf4;
  --navy: #1a2e5a;
  --cyan: #0891b2;
  --amber: #b45309;
  --amber-s: #fffbeb;
  --rose: #a01a45;
  --orange: #c2540a;
  --orange-s: #fff7ed;
  --navy-s: #eff6ff;
  --emerald: #0a7c52;
  --ink: #0d0d0d;
  --ink2: #1e1e1e;
  --muted: #6a6a6a;
  --faint: #aaaaaa;
}
 
.breadcrumb {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 12.5px;
  color: rgba(255,255,255,0.4);
  margin-bottom: 20px;
}
.breadcrumb a { color: rgba(255,255,255,0.55); text-decoration: none; transition: color .15s; }
.breadcrumb a:hover { color: #fff; }
.breadcrumb span { color: rgba(255,255,255,0.75); }
.bc-arrow { color: rgba(255,255,255,0.25); font-size: 10px; }

 
 
.hero-kpis {
  display: flex;
  flex-direction: column;
  gap: 10px;
  align-self: center;
}
.kpi {
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: var(--border-radius-lg); 
  text-align: center;
}
.kpi-n { display: block; font-size: 1.9rem; font-weight: 700; color: #fff; font-family: 'DM Serif Display', serif; line-height: 1; }
.kpi-l { display: block; font-size: 10.5px; color: rgba(255,255,255,.45); text-transform: uppercase; letter-spacing: .08em; margin-top: 4px; }

/* ── SEARCH BAND ── */
.search-band {
  background: var(--ink);
  border-bottom: 1px solid rgba(255,255,255,0.06);
  padding: 18px 0;
  position: sticky;
  top: 0;
  z-index: 200;
}
.search-band-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 36px;
}
.search-box {
  display: flex;
  align-items: center;
  background: rgba(255,255,255,0.07);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: 10px;
  padding: 0 16px;
  gap: 10px;
  transition: border-color .2s, background .2s;
}
.search-box:focus-within {
  background: rgba(255,255,255,0.1);
  border-color: rgba(255,0,0,0.45);
}
.search-box svg { width: 15px; height: 15px; color: rgba(255,255,255,.35); flex-shrink: 0; }
#search-input {
  flex: 1;
  background: none;
  border: none;
  outline: none;
  padding: 13px 0;
  font-size: 14.5px;
  font-family: inherit;
  color: #fff;
}
#search-input::placeholder { color: rgba(255,255,255,.3); }
.search-clear {
  background: rgba(255,255,255,0.08);
  border: none;
  border-radius: 50%;
  width: 20px; height: 20px;
  cursor: pointer;
  color: rgba(255,255,255,.5);
  display: none;
  align-items: center;
  justify-content: center;
  font-size: 11px;
  transition: background .15s;
  flex-shrink: 0;
  font-family: inherit;
}
.search-clear.show { display: flex; }
.search-clear:hover { background: rgba(255,0,0,0.25); color: #fff; }

/* ── FILTER PILLS ── */
.filter-bar {
  max-width: 1200px;
  margin: 0 auto;
  padding: 22px 36px 4px;
  display: flex;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
}
.filter-label {
  font-size: 1rem;
  font-weight: 600;
  color: var(--zed-secondary);
  text-transform: uppercase;
  letter-spacing: .07em;
  margin-right: 4px;
  white-space: nowrap;
}
.pill {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 7px 16px;
  border-radius: 40px;
  border: 1.5px solid var(--zed-border-color);
  background: var(--zed-card-bg);
  font-size: 13.5px;
  font-weight: 500;
  color: var(--ink2);
  cursor: pointer;
  transition: all .18s;
  font-family: inherit;
  white-space: nowrap;
}
.pill:hover { border-color: var(--zed-primary); color: var(--zed-primary); background: rgba(255,0,0,0.04); }
.pill.active { background: var(--zed-primary); border-color: var(--zed-primary); color: #fff; font-weight: 600; } 
.pill-count {
  background: rgba(0,0,0,0.1);
  border-radius: 10px;
  padding: 1px 7px;
  font-size: 11px;
  font-weight: 600;
}
.pill.active .pill-count { background: rgba(255,255,255,0.25); }

/* ── RESULTS INFO ── */
.results-bar {
  max-width: 1200px;
  margin: 0 auto;
  padding: 6px 36px 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  flex-wrap: wrap;
}
.results-text { font-size: 16px; color: var(--muted); }
.results-text strong { color: var(--ink); font-weight: 600; }
.view-toggle {
  display: flex;
  background: #fff;
  border: 1.5px solid var(--zed-border-color);
  border-radius: 8px;
  overflow: hidden;
}
.vtbtn {
  padding: 6px 12px;
  border: none;
  border-right: 1.5px solid var(--zed-border-color);
  background: none;
  cursor: pointer;
  color: var(--muted);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all .15s;
}
.vtbtn:last-child { border-right: none; }
.vtbtn svg { width: 20px; height: 20px; }
.vtbtn.on { background: var(--zed-primary); color: #fff; }
.vtbtn:not(.on):hover { background: var(--zed-backgound-color); color: var(--ink); }

/* ── CONTENT ── */
.content {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 36px 80px;
}

/* ── CATEGORY GROUP HEADER ── */
.cat-group { margin-bottom: 36px; }
.cat-group-hdr {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 16px;
  padding-bottom: 12px;
  border-bottom: 2px solid var(--zed-border-color);
}
.cat-badge {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  padding: 5px 14px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: .07em;
  border: 1.5px solid;
}
.cat-count-chip {
  font-size: 12px;
  color: var(--muted);
  background: var(--zed-backgound-color);
  border: 1px solid var(--zed-border-color);
  border-radius: 20px;
  padding: 3px 10px;
  font-weight: 500;
}

/* ── ACCORDION (list) ── */
.acc-list {
  background: var(--zed-card-bg);
  border: 1.5px solid var(--zed-border-color);
  border-radius: var(--border-radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow);
}
.acc-item { border-bottom: 1px solid var(--zed-border-color); }
.acc-item:last-child { border-bottom: none; }
.acc-hdr {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 17px 22px;
  cursor: pointer;
  user-select: none;
  background: var(--zed-card-bg);
  transition: background .15s;
}
.acc-hdr:hover { background: var(--zed-card-back); } 
.acc-term { 
  flex: 1; 
  font-size: 1rem; 
  font-weight: 600; 
  color: var(--ink); 
}
.acc-tag {
  font-size: 11px;
  font-weight: 600;
  padding: 3px 10px;
  border-radius: 20px;
  border: 1px solid;
  text-transform: uppercase;
  letter-spacing: .05em;
  flex-shrink: 0;
}
.acc-icon {
  width: 26px; height: 26px;
  border-radius: 50%;
  border: 1.5px solid var(--zed-primary);
  color: var(--zed-primary);
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
  transition: all .22s;
}
.acc-icon svg { width: 12px; height: 12px; transition: transform .22s; }
.acc-item.op .acc-icon { background: var(--zed-primary); color: #fff; }
.acc-item.op .acc-icon svg { transform: rotate(45deg); }
.acc-body { max-height: 0; overflow: hidden; transition: max-height .3s cubic-bezier(0.4,0,0.2,1); }
.acc-body-in {
  padding: 0 22px 18px 44px; 
  color: var(--zed-secondary);
  line-height: 1.78;
  border-top: 1px solid var(--zed-border-color);
  padding-top: 14px;
}
.acc-also { 
  font-size: 0.8rem;
   color: var(--faint); 
   margin-top: 8px; 
   font-style: italic; 
  }

/* ── CARD GRID ── */
.card-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 14px; }
.tcard {
  background: var(--zed-card-bg);
  border: 1.5px solid var(--zed-border-color);
  border-radius: var(--border-radius-lg);
  padding: 20px 20px 16px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  box-shadow: var(--shadow);
  transition: box-shadow .2s, border-color .2s, transform .16s;
  position: relative;
  overflow: hidden;
}
.tcard::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
}
.tcard:hover { box-shadow: 0 8px 32px rgba(10,22,40,0.13); transform: translateY(-2px); }
.card-top { display: flex; align-items: flex-start; justify-content: space-between; gap: 10px; }
.card-title { 
  font-size: 1rem; 
  font-weight: 700; 
  color: var(--ink); 
  line-height: 1.3; 
  flex: 1; 
}
.card-badge {
  font-size: 10.5px;
  font-weight: 700;
  padding: 3px 9px;
  border-radius: 20px;
  border: 1px solid;
  text-transform: uppercase;
  letter-spacing: .05em;
  flex-shrink: 0;
  margin-top: 2px;
}
.card-exc {  
    color: var(--zed-secondary);
    line-height: 1.65;
    display: -webkit-box; -webkit-line-clamp: 3; 
    -webkit-box-orient: vertical;
    overflow: hidden;
      flex: 1;
}
.card-more {
  font-size: 12px;
  font-weight: 600;
  color: var(--zed-primary);
  background: none;
  border: 1px solid rgba(255,0,0,0.2);
  cursor: pointer;
  align-self: flex-start;
  padding: 5px 12px;
  border-radius: 20px;
  display: flex;
  align-items: center;
  gap: 4px;
  transition: all .15s;
  font-family: inherit;
  margin-top: 2px;
}
.card-more svg { width: 10px; height: 10px; }
.card-more:hover { background: var(--zed-primary); color: #fff; border-color: var(--zed-primary); }

/* ── MODAL ── */
.overlay {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(5,10,25,.6);
  z-index: 1000;
  align-items: center;
  justify-content: center;
  padding: 24px;
  backdrop-filter: blur(4px);
}
.overlay.show { display: flex; }
.modal {
  background: var(--zed-card-bg);
  border-radius: var(--border-radius-lg);
  max-width: 560px;
  width: 100%;
  box-shadow: 0 24px 80px rgba(10,22,40,0.22);
  overflow: hidden;
  animation: mup .22s ease;
}
@keyframes mup { from{opacity:0;transform:translateY(14px)}to{opacity:1;transform:translateY(0)} }
.modal-hdr {
  background: var(--ink);
  padding: 22px 24px 18px;
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 16px;
  position: relative;
  overflow: hidden;
}
.modal-hdr::after {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(ellipse at 100% 0%, rgba(255,0,0,0.12) 0%, transparent 60%);
  pointer-events: none;
}
.modal-cat-strip {
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
}
.modal-title { font-family: 'DM Serif Display', serif; font-size: 1.3rem; color: #fff; line-height: 1.25; margin-top: 6px; }
.modal-sub { font-size: 11px; color: rgba(255,255,255,.45); text-transform: uppercase; letter-spacing: .08em; display: block; margin-top: 5px; }
.modal-cls {
  background: rgba(255,255,255,.1);
  border: none;
  border-radius: 50%;
  width: 30px; height: 30px;
  cursor: pointer;
  color: rgba(255,255,255,.7);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  transition: all .15s;
  z-index: 1;
}
.modal-cls:hover { background: rgba(255,0,0,0.3); color: #fff; }
.modal-cls svg { width: 12px; height: 12px; }
.modal-body { padding: 24px; }
.modal-def { font-size: 15px; color: var(--muted); line-height: 1.82; }
.modal-tags { display: flex; gap: 8px; margin-top: 16px; flex-wrap: wrap; }
.modal-tag { font-size: 11px; font-weight: 600; padding: 3px 10px; border-radius: 20px; border: 1px solid; text-transform: uppercase; letter-spacing: .05em; }

/* ── EMPTY ── */
.empty { text-align: center; padding: 80px 20px; color: var(--muted); }
.empty-icon { font-size: 44px; margin-bottom: 14px; display: block; }
.empty h3 { font-size: 17px; font-weight: 600; color: var(--ink2); margin-bottom: 6px; }

/* ── HIGHLIGHT ── */
mark { background: rgba(255,0,0,0.12); color: var(--zed-primary); border-radius: 3px; padding: 0 2px; }

@media (max-width: 700px) {
  .hero-inner { padding: 18px 20px 0; }
  .hero-body { grid-template-columns: 1fr; }
  .hero-kpis { display: none; }
  .search-band-inner, .filter-bar, .results-bar, .content { padding-left: 20px; padding-right: 20px; }
}
</style>
</head>
<body>
 
      

<!-- SEARCH BAND (sticky dark) -->
<div class="search-band">
  <div class="search-band-inner">
    <div class="search-box">
      <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
        <circle cx="7" cy="7" r="5"/><path d="M11 11l3 3"/>
      </svg>
      <input id="search-input" type="text" placeholder="Search a term…" autocomplete="off">
      <button class="search-clear" id="search-clear" title="Clear">✕</button>
    </div>
  </div>
</div>
  <div class="kpi d-none" ><span class="kpi-n" id="total-n">0</span><span class="kpi-l">Terms</span></div>
        <div class="kpi d-none"><span class="kpi-n">6</span><span class="kpi-l">Categories</span></div>
 
<!-- FILTER PILLS -->
<div class="filter-bar">
  <span class="filter-label">Filter:</span>
  <button class="pill active" data-cat="all">
    <span>All</span>
    <span class="pill-count" id="count-all">0</span>
  </button>
  <button class="pill" data-cat="Basics"> 
    <span>Basics</span>
    <span class="pill-count" id="count-Basics">0</span>
  </button>
  <button class="pill" data-cat="Orders"> 
    <span>Orders</span>
    <span class="pill-count" id="count-Orders">0</span>
  </button>
  <button class="pill" data-cat="Analysis"> 
    <span>Analysis</span>
    <span class="pill-count" id="count-Analysis">0</span>
  </button>
  <button class="pill" data-cat="Risk"> 
    <span>Risk</span>
    <span class="pill-count" id="count-Risk">0</span>
  </button>
  <button class="pill" data-cat="Market"> 
    <span>Market</span> 
  </button>
  <button class="pill" data-cat="Forex"> 
    <span>Forex</span>
    <span class="pill-count" id="count-Forex">0</span>
  </button>
</div>

<!-- RESULTS BAR -->
<div class="results-bar">
  <span class="results-text" id="results-text"></span>
  <div class="view-toggle">
    <button class="vtbtn on" id="btn-list" title="List view">
      <svg viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"><path d="M2 3.5h10M2 7h10M2 10.5h10"/></svg>
    </button>
    <button class="vtbtn" id="btn-grid" title="Grid view">
      <svg viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="1" y="1" width="5" height="5" rx="1"/><rect x="8" y="1" width="5" height="5" rx="1"/><rect x="1" y="8" width="5" height="5" rx="1"/><rect x="8" y="8" width="5" height="5" rx="1"/></svg>
    </button>
  </div>
</div>

<!-- MAIN -->
<main class="content" id="content"></main>

<!-- MODAL -->
<div class="overlay" id="overlay">
  <div class="modal" id="modal-box">
    <div class="modal-hdr">
      <div class="modal-cat-strip" id="m-strip"></div>
      <div>
        <div class="modal-title" id="m-title"></div>
        <span class="modal-sub" id="m-cat-label"></span>
      </div>
      <button class="modal-cls" id="m-close">
        <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M1 1l10 10M11 1L1 11"/></svg>
      </button>
    </div>
    <div class="modal-body">
      <p class="modal-def" id="m-def"></p>
      <div class="modal-tags" id="m-tags"></div>
    </div>
  </div>
</div>

<script>
// ── CATEGORY CONFIG ──
const CATS = {
  Basics:   { color: '#1551a0', bg: '#eff6ff', label: 'Basics' },
  Orders:   { color: '#0891b2', bg: '#ecfeff', label: 'Orders' },
  Analysis: { color: '#7c3aed', bg: '#faf5ff', label: 'Analysis' },
  Risk:     { color: '#b45309', bg: '#fffbeb', label: 'Risk' },
  Market:   { color: '#166534', bg: '#f0fdf4', label: 'Market' },
  Forex:    { color: '#a01a45', bg: '#fff0f5', label: 'Forex' },
};

// ── TERM DATA ──
const TERMS = [
  // BASICS
  {t:"Equity",c:"Basics",d:"Shares of stock in a company representing ownership interest. Equity holders have a proportional claim on the company's assets and earnings after all debts are paid.",tags:["Stocks","Ownership"]},
  {t:"Bond",c:"Basics",d:"A fixed income instrument representing a loan made by an investor to a borrower (typically corporate or governmental). Bonds pay regular interest (coupons) and return the principal at maturity.",tags:["Fixed Income","Debt"]},
  {t:"Dividend",c:"Basics",d:"A portion of a company's earnings distributed to shareholders, decided by the board of directors. Dividends can be paid as cash, additional shares, or other property.",tags:["Income","Stocks"]},
  {t:"Capital Gain",c:"Basics",d:"An increase in the value of a capital asset above its purchase price. The gain is only realized (and potentially taxed) when the asset is sold.",tags:["Tax","Returns"]},
  {t:"Portfolio",c:"Basics",d:"A collection of financial assets such as stocks, bonds, commodities, currencies and cash equivalents held by an investor or institution. A well-constructed portfolio balances risk and return.",tags:["Investing","Diversification"]},
  {t:"Market Capitalization",c:"Basics",d:"The total market value of a company's outstanding shares, calculated by multiplying the share price by total shares outstanding. Used to classify companies as large-cap, mid-cap, or small-cap.",tags:["Valuation","Stocks"]},
  {t:"P/E Ratio",c:"Basics",d:"The Price-to-Earnings Ratio measures a company's share price relative to its earnings per share (EPS). A key metric for comparing the relative value of different companies within the same sector.",tags:["Valuation","Metrics"]},
  {t:"Earnings Per Share (EPS)",c:"Basics",d:"The portion of a company's profit allocated to each outstanding share of common stock. EPS = Net Income ÷ Shares Outstanding and is a core indicator of company profitability.",tags:["Valuation","Profitability"]},
  {t:"ETF (Exchange-Traded Fund)",c:"Basics",d:"An investment fund traded on stock exchanges like individual stocks. ETFs typically track an index, sector, commodity, or asset class, offering diversification at low cost with intraday trading flexibility.",tags:["Fund","Index"]},
  {t:"Index Fund",c:"Basics",d:"A passively managed fund designed to replicate the performance of a specific market index such as the S&P 500. Known for low costs, broad market exposure and historically competitive returns.",tags:["Passive","Fund"]},
  {t:"Compound Interest",c:"Basics",d:"Interest calculated on both the initial principal and the accumulated interest from prior periods. Often described as 'interest on interest' — a foundational concept for long-term wealth building.",tags:["Returns","Math"]},
  {t:"Inflation",c:"Basics",d:"The rate at which the general level of prices for goods and services rises over time, eroding purchasing power. Central banks use monetary policy to manage inflation and keep economies stable.",tags:["Economics","Macro"]},
  {t:"IPO (Initial Public Offering)",c:"Basics",d:"The first time a private company offers shares to the public on a stock exchange. An IPO allows the company to raise equity capital from public investors and provides existing shareholders an exit opportunity.",tags:["Markets","Stocks"]},
  {t:"Blue Chip",c:"Basics",d:"A well-established, financially sound and nationally recognized company with a long record of reliable performance. Blue chip stocks are known for stability and the ability to weather economic downturns.",tags:["Quality","Stocks"]},

  // ORDERS
  {t:"Market Order",c:"Orders",d:"An instruction to buy or sell a security immediately at the best available current price. Market orders prioritize execution speed over price certainty, making them ideal for highly liquid assets.",tags:["Execution","Instant"]},
  {t:"Limit Order",c:"Orders",d:"An order to buy or sell at a specified price or better. A buy limit order executes at or below the limit price; a sell limit order executes at or above. Gives traders precise price control.",tags:["Price Control","Execution"]},
  {t:"Stop-Loss Order",c:"Orders",d:"An order that automatically sells a security when it falls to a predetermined price. Designed to cap an investor's loss on a position and remove emotion from exit decisions.",tags:["Risk","Automation"]},
  {t:"Stop-Limit Order",c:"Orders",d:"A combination of stop and limit orders. When the stop price is reached, a limit order is triggered. Unlike a plain stop order, it won't execute outside the specified price range.",tags:["Execution","Risk"]},
  {t:"Trailing Stop",c:"Orders",d:"A dynamic stop-loss order set at a percentage or fixed dollar amount below (for longs) or above (for shorts) the market price. It adjusts automatically as the price moves in your favour, locking in gains.",tags:["Dynamic","Risk"]},
  {t:"Good Till Cancelled (GTC)",c:"Orders",d:"An order that remains active until it is either executed or manually cancelled by the trader. Most brokers impose a maximum duration (e.g. 30–90 days) on GTC orders.",tags:["Duration","Execution"]},
  {t:"Day Order",c:"Orders",d:"An order that expires at the end of the current trading session if it has not been filled. The most common default order type on most trading platforms.",tags:["Duration","Default"]},
  {t:"Fill or Kill (FOK)",c:"Orders",d:"An order that must be executed in its entirety immediately, or it is cancelled in full. Used when a trader requires the complete quantity at a specific price with no partial fills.",tags:["Execution","Instant"]},
  {t:"Iceberg Order",c:"Orders",d:"A large order that is divided into smaller visible portions to conceal the total size from the market. Only the visible portion is displayed in the order book at any given time.",tags:["Institutional","Strategy"]},
  {t:"Order Book",c:"Orders",d:"An electronic real-time list of all buy and sell orders for a given security, organized by price level. The order book reveals market depth — the volume of interest at each price — and shows the balance between supply and demand.",tags:["Market","Transparency"]},

  // ANALYSIS
  {t:"Technical Analysis",c:"Analysis",d:"The study of historical price and volume data to forecast future price movements. Technical analysts use charts, patterns and indicators rather than financial statements or economic conditions.",tags:["Charts","Strategy"]},
  {t:"Fundamental Analysis",c:"Analysis",d:"A method of evaluating a security by examining the underlying business — including revenue, earnings, assets, management and macroeconomic factors — to determine its intrinsic value.",tags:["Valuation","Research"]},
  {t:"Moving Average",c:"Analysis",d:"A trend-following indicator that smooths out price fluctuations by calculating the average price over a set number of periods. Common types include the Simple Moving Average (SMA) and Exponential Moving Average (EMA).",tags:["Indicator","Trend"]},
  {t:"RSI (Relative Strength Index)",c:"Analysis",d:"A momentum oscillator that measures the speed and magnitude of recent price changes to identify overbought (above 70) or oversold (below 30) conditions. Ranges from 0 to 100.",tags:["Momentum","Indicator"]},
  {t:"MACD",c:"Analysis",d:"Moving Average Convergence Divergence — a trend-following momentum indicator that shows the relationship between two EMAs of a security's price. A signal line crossover generates buy or sell signals.",tags:["Momentum","Trend"]},
  {t:"Candlestick Chart",c:"Analysis",d:"A visual representation of price movement showing the open, high, low and close for each time period. Candlestick patterns such as doji, hammer and engulfing are used to predict short-term price direction.",tags:["Charts","Patterns"]},
  {t:"Support Level",c:"Analysis",d:"A price level at which buying pressure is expected to be strong enough to halt a decline. When the price drops to support, demand tends to overcome supply, forming a floor beneath the market.",tags:["Price Levels","Patterns"]},
  {t:"Resistance Level",c:"Analysis",d:"A price level at which selling pressure is expected to halt an advance. As the price rises to resistance, supply overcomes demand, forming a ceiling. A breakout above resistance is considered bullish.",tags:["Price Levels","Patterns"]},
  {t:"Fibonacci Retracement",c:"Analysis",d:"A tool that uses key Fibonacci ratios (23.6%, 38.2%, 50%, 61.8%) to identify potential support and resistance levels where a price may reverse after a significant move.",tags:["Indicator","Patterns"]},
  {t:"Trend Line",c:"Analysis",d:"A straight line connecting successive highs (downtrend) or lows (uptrend) on a chart. Trend lines define the direction and speed of price movement and help identify potential reversal zones.",tags:["Charts","Trend"]},
  {t:"Bollinger Bands",c:"Analysis",d:"A volatility indicator consisting of a moving average and two standard deviation bands above and below it. Price touching the upper band may indicate overbought conditions; the lower band may indicate oversold.",tags:["Volatility","Indicator"]},
  {t:"Keltner Channel",c:"Analysis",d:"A volatility-based envelope indicator using the EMA as its centre line, with bands set using the Average True Range (ATR). Often used in combination with RSI to confirm momentum signals.",tags:["Volatility","Indicator"]},
  {t:"Backtesting",c:"Analysis",d:"The process of applying a trading strategy to historical market data to evaluate how it would have performed in the past. Essential for validating a strategy before committing real capital.",tags:["Strategy","Quantitative"]},
  {t:"Gap",c:"Analysis",d:"A price gap occurs when a security opens significantly above or below the previous session's close with no trading in between. Common triggers include earnings surprises, news events and earnings releases.",tags:["Charts","Patterns"]},

  // RISK
  {t:"Leverage",c:"Risk",d:"The use of borrowed capital to increase the potential return of an investment. Expressed as a ratio (e.g. 10:1), leverage amplifies both gains and losses and is one of the most significant risk factors in trading.",tags:["Margin","Amplification"]},
  {t:"Margin",c:"Risk",d:"The capital deposited with a broker as collateral to open a leveraged position. Margin requirements are expressed as a percentage of the full trade value. A margin call occurs when your equity falls below the required level.",tags:["Leverage","Collateral"]},
  {t:"Margin Call",c:"Risk",d:"A demand from a broker to deposit additional funds when the value of a leveraged account falls below the minimum required maintenance margin. Failure to meet a margin call results in the broker closing positions.",tags:["Leverage","Alert"]},
  {t:"Diversification",c:"Risk",d:"A risk management strategy that spreads capital across multiple assets, asset classes, or geographies to reduce the impact of any single loss. The core principle: don't put all your eggs in one basket.",tags:["Strategy","Portfolio"]},
  {t:"Hedge",c:"Risk",d:"An investment or position taken to offset potential losses in another asset. Common hedging tools include options, futures contracts and inverse ETFs. A hedge reduces risk at the cost of potential profit.",tags:["Strategy","Protection"]},
  {t:"Short Selling",c:"Risk",d:"Borrowing and selling an asset you don't own, intending to buy it back at a lower price. Short sellers profit from price declines but face theoretically unlimited loss if the price rises without limit.",tags:["Strategy","Bearish"]},
  {t:"Drawdown",c:"Risk",d:"The peak-to-trough decline in portfolio value over a specific period. Maximum drawdown (MDD) measures the largest observed loss from a historical peak, used to assess the risk of a trading strategy.",tags:["Metrics","Performance"]},
  {t:"Risk/Reward Ratio",c:"Risk",d:"A metric comparing the potential profit of a trade to the potential loss. A 1:3 ratio means risking $1 to gain $3. Professional traders typically require a minimum 1:2 ratio before entering a trade.",tags:["Strategy","Metrics"]},
  {t:"Value at Risk (VaR)",c:"Risk",d:"A statistical measure of the potential loss in value of a portfolio over a defined period for a given confidence interval. For example, a 1-day VaR of $1M at 95% confidence means there is a 5% chance of losing more than $1M in a day.",tags:["Quantitative","Metrics"]},
  {t:"Volatility",c:"Risk",d:"A measure of the degree of variation in a trading price over time. Higher volatility means larger price swings and greater risk. Often measured using standard deviation or the VIX (Volatility Index) for broader markets.",tags:["Metrics","Market"]},

  // MARKET
  {t:"Bull Market",c:"Market",d:"A sustained period of rising asset prices, generally defined as a gain of 20% or more from a recent trough. Bull markets are characterised by investor confidence, strong economic fundamentals and broad market participation.",tags:["Trend","Sentiment"]},
  {t:"Bear Market",c:"Market",d:"A sustained period of falling asset prices, typically defined as a decline of 20% or more from a recent peak. Often accompanied by widespread pessimism, rising unemployment and deteriorating economic conditions.",tags:["Trend","Sentiment"]},
  {t:"Market Correction",c:"Market",d:"A decline of 10–20% in the price of an asset or broad market index from its recent peak. Corrections are considered a natural and healthy part of market cycles, resetting overextended valuations.",tags:["Cycle","Decline"]},
  {t:"Liquidity",c:"Market",d:"The ease with which an asset can be bought or sold in the market without significantly affecting its price. High-liquidity markets (e.g. major forex pairs) have tight spreads and large daily volume; illiquid markets are the opposite.",tags:["Market","Trading"]},
  {t:"Volume",c:"Market",d:"The total number of shares or contracts traded during a given period. Volume confirms price trends — a price move on high volume is considered more significant than the same move on low volume.",tags:["Indicator","Confirmation"]},
  {t:"GDP (Gross Domestic Product)",c:"Market",d:"The total monetary value of all goods and services produced within a country over a specific period. GDP is the broadest measure of economic output and a primary indicator of economic health and growth.",tags:["Economics","Macro"]},
  {t:"Interest Rate",c:"Market",d:"The cost of borrowing money, set by central banks (e.g. the Federal Reserve, Bank of England). Interest rate changes have wide-reaching effects on asset prices, currency values and economic activity.",tags:["Macro","Central Bank"]},
  {t:"Quantitative Easing (QE)",c:"Market",d:"An unconventional monetary policy tool where a central bank purchases government bonds and other assets to inject liquidity into the economy, lower long-term interest rates and stimulate lending and investment.",tags:["Macro","Policy"]},
  {t:"Market Sentiment",c:"Market",d:"The overall attitude or mood of investors toward a particular security or the broader market. Sentiment can be bullish (optimistic) or bearish (pessimistic) and is tracked using surveys, options data and the VIX.",tags:["Psychology","Indicators"]},
  {t:"Commodity",c:"Market",d:"A basic raw material or primary agricultural product that can be bought and sold, such as oil, gold, wheat, or copper. Commodities are traded on specialised exchanges and often used as inputs in the production of goods.",tags:["Assets","Macro"]},
  {t:"Derivative",c:"Market",d:"A financial contract whose value is derived from an underlying asset — such as a stock, index, currency, or commodity. Common derivatives include options, futures, forwards and swaps.",tags:["Instruments","Leverage"]},
  {t:"NAV (Net Asset Value)",c:"Market",d:"The per-share value of a fund calculated by dividing the total net assets by the number of outstanding shares. NAV is the benchmark price at which mutual fund shares are bought and sold at end of day.",tags:["Fund","Valuation"]},

  // FOREX
  {t:"Currency Pair",c:"Forex",d:"The quotation of two different currencies, showing how much of the quote currency is needed to buy one unit of the base currency. For example, EUR/USD = 1.10 means 1 Euro buys 1.10 US Dollars.",tags:["FX","Basics"]},
  {t:"Pip",c:"Forex",d:"The smallest standard price movement in a currency pair. For most pairs, a pip is the 4th decimal place (0.0001). For JPY pairs, it is the 2nd decimal place. Pips are used to calculate profit, loss and spread.",tags:["FX","Measurement"]},
  {t:"Spread",c:"Forex",d:"The difference between the bid (buy) price and the ask (sell) price of a currency pair or security. The spread is effectively the cost of each transaction and is how market makers generate revenue.",tags:["Cost","FX"]},
  {t:"Bid / Ask Price",c:"Forex",d:"The bid is the highest price a buyer will pay; the ask is the lowest price a seller will accept. In forex, you buy at the ask and sell at the bid. The gap between them is the spread.",tags:["FX","Price"]},
  {t:"Lot Size",c:"Forex",d:"The standardized unit of measurement for a forex trade. A standard lot = 100,000 units of the base currency. Mini lots = 10,000 units; micro lots = 1,000 units. Lot size directly determines pip value.",tags:["FX","Size"]},
  {t:"Leverage (Forex)",c:"Forex",d:"In forex, leverage allows traders to control large positions with a small deposit. A 50:1 leverage ratio means $1,000 controls a $50,000 position. While leverage amplifies returns, it equally amplifies losses.",tags:["FX","Risk"]},
  {t:"Swap / Rollover",c:"Forex",d:"The interest paid or earned for holding a forex position overnight. Swap rates depend on the interest rate differential between the two currencies in the pair. Positions held past the daily cutoff incur a swap charge or credit.",tags:["FX","Cost"]},
  {t:"Slippage",c:"Forex",d:"The difference between the expected execution price of an order and the actual price at which it fills. Slippage occurs most often during high volatility or low liquidity conditions.",tags:["FX","Execution"]},
  {t:"Carry Trade",c:"Forex",d:"A strategy of borrowing in a low-interest-rate currency and investing in a high-interest-rate currency to profit from the rate differential. Carry trades are sensitive to sudden shifts in risk sentiment.",tags:["FX","Strategy"]},
  {t:"Currency Correlation",c:"Forex",d:"A measure of how two currency pairs move in relation to each other. A positive correlation means they move in the same direction; a negative correlation means they move inversely. Understanding correlations helps traders manage overall exposure.",tags:["FX","Risk"]},
  {t:"Interbank Market",c:"Forex",d:"The global network through which major banks trade currencies directly with one another. It forms the backbone of the global forex market and establishes the benchmark rates at which retail traders ultimately transact.",tags:["FX","Infrastructure"]},
];

document.getElementById("total-n").textContent = TERMS.length;

// Count per category
const cats = Object.keys(CATS);
cats.forEach(c => {
  const el = document.getElementById(`count-${c}`);
  if (el) el.textContent = TERMS.filter(t => t.c === c).length;
});
document.getElementById("count-all").textContent = TERMS.length;

let currentCat = "all";
let currentView = "list";
let searchQ = "";

// Filter pills
document.querySelectorAll(".pill").forEach(btn => {
  btn.addEventListener("click", () => {
    document.querySelectorAll(".pill").forEach(p => p.classList.remove("active"));
    btn.classList.add("active");
    currentCat = btn.dataset.cat;
    render();
  });
});

// View toggle
document.getElementById("btn-list").onclick = () => {
  currentView = "list";
  document.getElementById("btn-list").classList.add("on");
  document.getElementById("btn-grid").classList.remove("on");
  render();
};
document.getElementById("btn-grid").onclick = () => {
  currentView = "grid";
  document.getElementById("btn-grid").classList.add("on");
  document.getElementById("btn-list").classList.remove("on");
  render();
};

// Search
const si = document.getElementById("search-input");
const sc = document.getElementById("search-clear");
let st;
si.addEventListener("input", e => {
  searchQ = e.target.value.trim();
  sc.classList.toggle("show", searchQ.length > 0);
  clearTimeout(st); st = setTimeout(render, 160);
});
sc.addEventListener("click", () => {
  si.value = ""; searchQ = ""; sc.classList.remove("show"); render(); si.focus();
});

function hl(text, q) {
  if (!q) return text;
  const re = new RegExp(`(${q.replace(/[.*+?^${}()|[\]\\]/g,'\\$&')})`, 'gi');
  return text.replace(re, '<mark>$1</mark>');
}

function render() {
  const c = document.getElementById("content");
  c.innerHTML = "";
  const q = searchQ.toLowerCase();

  let filtered = TERMS.filter(t => {
    const catOk = currentCat === "all" || t.c === currentCat;
    const searchOk = !q || t.t.toLowerCase().includes(q) || t.d.toLowerCase().includes(q) || (t.tags && t.tags.some(tag => tag.toLowerCase().includes(q)));
    return catOk && searchOk;
  });

  // Result text
  const rt = document.getElementById("results-text");
  if (q || currentCat !== "all") {
    const catLabel = currentCat === "all" ? "All categories" : CATS[currentCat]?.label || currentCat;
    rt.innerHTML = `<strong>${filtered.length}</strong> term${filtered.length !== 1 ? "s" : ""} · ${catLabel}${q ? ` · matching "<strong>${searchQ}</strong>"` : ""}`;
  } else {
    rt.innerHTML = `<strong>${TERMS.length}</strong> terms across <strong>6</strong> categories`;
  }

  if (filtered.length === 0) {
    c.innerHTML = `<div class="empty"><span class="empty-icon">🔍</span><h3>No matching terms found</h3><p>Try a different search or select a different category.</p></div>`;
    return;
  }

  // Group by category
  const order = currentCat === "all" ? cats : [currentCat];
  order.forEach(cat => {
    const items = filtered.filter(t => t.c === cat);
    if (!items.length) return;
    const cfg = CATS[cat];

    const grp = document.createElement("div");
    grp.className = "cat-group";

    // Group header
    const hdr = document.createElement("div");
    hdr.className = "cat-group-hdr";
    hdr.innerHTML = `
      <div class="cat-badge" style="color:${cfg.color};background:${cfg.bg};border-color:${cfg.color}40"> 
        ${cfg.label}
      </div>
      <span class="cat-count-chip">${items.length} term${items.length !== 1 ? "s" : ""}</span>
    `;
    grp.appendChild(hdr);

    if (currentView === "list") {
      const acc = document.createElement("div");
      acc.className = "acc-list";
      items.forEach(term => {
        const item = document.createElement("div");
        item.className = "acc-item";

        const tagBadge = term.tags?.[0] ? `<span class="acc-tag" style="color:${cfg.color};background:${cfg.bg};border-color:${cfg.color}30">${term.tags[0]}</span>` : "";

        item.innerHTML = `
          <div class="acc-hdr">
            <span class="acc-term">${hl(term.t, searchQ)}</span>
            ${tagBadge}
            <div class="acc-icon">
              <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M6 1v10M1 6h10"/></svg>
            </div>
          </div>
          <div class="acc-body">
            <div class="acc-body-in">
              ${hl(term.d, searchQ)}
              ${term.tags ? `<div class="acc-also">Tags: ${term.tags.join(" · ")}</div>` : ""}
            </div>
          </div>`;

        item.querySelector(".acc-hdr").addEventListener("click", () => {
          const was = item.classList.contains("op");
          acc.querySelectorAll(".acc-item.op").forEach(el => {
            el.classList.remove("op");
            el.querySelector(".acc-body").style.maxHeight = null;
          });
          if (!was) {
            item.classList.add("op");
            const b = item.querySelector(".acc-body");
            b.style.maxHeight = b.scrollHeight + "px";
          }
        });
        acc.appendChild(item);
      });
      grp.appendChild(acc);
    } else {
      const grid = document.createElement("div");
      grid.className = "card-grid";
      items.forEach(term => {
        const card = document.createElement("div");
        card.className = "tcard";
        card.innerHTML = `
          <div style="position:absolute;top:0;left:0;right:0;height:3px;background: var(--zed-primary)"></div>
          <div class="card-top">
            <div class="card-title">${hl(term.t, searchQ)}</div>
            <span class="card-badge" style="color:var(--zed-primary);background:${cfg.bg};border-color:${cfg.color}30">${cfg.label}</span>
          </div>
          <div class="card-exc">${term.d}</div>
          <button class="card-more">Read more <svg viewBox="0 0 10 10" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M2 8L8 2M4 2h4v4"/></svg></button>`;
        card.querySelector(".card-more").addEventListener("click", () => openModal(term, cfg));
        grid.appendChild(card);
      });
      grp.appendChild(grid);
    }
    c.appendChild(grp);
  });
}

function openModal(term, cfg) {
  document.getElementById("m-title").textContent = term.t;
  document.getElementById("m-cat-label").textContent = cfg.label + " · Trading Definition";
  document.getElementById("m-def").textContent = term.d;
  document.getElementById("m-strip").style.background = cfg.color;
  const tagsEl = document.getElementById("m-tags");
  tagsEl.innerHTML = (term.tags || []).map(tag =>
    `<span class="modal-tag" style="color:${cfg.color};background:${cfg.bg};border-color:${cfg.color}30">${tag}</span>`
  ).join("");
  document.getElementById("overlay").classList.add("show");
  document.body.style.overflow = "hidden";
}

function closeModal() {
  document.getElementById("overlay").classList.remove("show");
  document.body.style.overflow = "";
}
document.getElementById("m-close").onclick = closeModal;
document.getElementById("overlay").addEventListener("click", e => { if (e.target === document.getElementById("overlay")) closeModal(); });
document.addEventListener("keydown", e => { if (e.key === "Escape") closeModal(); });

render();
</script>
</body>
</html>

    
   
<?php
include_once ('elements/footer.php');
?>