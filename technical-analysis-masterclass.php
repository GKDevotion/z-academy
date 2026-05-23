<?php 
include_once ('elements/header.php');
?>

<style>

  /* ─── HERO BANNER ─── */
        .zed-hero {
            background: linear-gradient(135deg, var(--zed-banner-bg-start) 0%, var(--zed-banner-bg-end) 100%);
            position: relative;
            overflow: hidden;
            padding: 100px 0 48px;
            border-bottom: 1px solid var(--zed-border-color);
        }

        .zed-hero::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -120px;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255, 0, 0, .07) 0%, transparent 70%);
            pointer-events: none;
        }

        .zed-hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Poppins', monospace;
            font-size: .6rem;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--zed-primary);
            border-bottom: 1.5px solid var(--zed-primary);
            padding-bottom: 4px;
            margin-bottom: 14px;
        }

        .zed-hero-title {
            font-family: 'Poppins', serif;
            font-size: clamp(2rem, 5vw, 3.6rem);
            font-weight: 900;
            color: var(--ink);
            line-height: 1.05;
            margin-bottom: 10px;
        }

        .zed-hero-title .gold {
            color: var(--gold);
            font-style: italic;
        }

        .zed-hero-subtitle {
            font-size: .9rem;
            color: var(--muted);
            max-width: 520px;
            line-height: 1.8;
            margin-bottom: 24px;
        }

        .zed-hero-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }

        /* ── SIDEBAR NAV ── */
        .zed-sidebar {
        position: fixed;
        top: 0; left: 0;
        width: 64px;
        height: 100vh;
        background: var(--ink2);
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 1.5rem 0;
        z-index: 1000;
        border-right: 1px solid rgba(255,255,255,0.06);
        }

        .zed-logo {
        width: 34px; height: 34px;
        background: var(--zed-primary);
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        font-size: 15px;
        color: #fff;
        letter-spacing: -0.5px;
        margin-bottom: 2rem;
        flex-shrink: 0;
        }

        .zed-nav-item {
        width: 40px; height: 40px;
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        color: var(--faint);
        cursor: pointer;
        transition: background .18s, color .18s;
        position: relative;
        font-size: 17px;
        margin-bottom: 4px;
        border: none;
        background: transparent;
        }
        .zed-nav-item:hover { background: rgba(255,255,255,0.07); color: #fff; }
        .zed-nav-item.active { background: rgba(255,0,0,0.18); color: var(--zed-primary); }
        .zed-nav-item::after {
        content: attr(data-tip);
        position: absolute;
        left: calc(100% + 10px);
        background: #111;
        color: #fff;
        font-size: 11px;
        font-family: 'DM Sans', sans-serif;
        padding: 4px 8px;
        border-radius: 4px;
        white-space: nowrap;
        pointer-events: none;
        opacity: 0;
        transition: opacity .15s;
        z-index: 999;
        }
        .zed-nav-item:hover::after { opacity: 1; }

        /* ── TOP NAV (module tabs) ── */
        .zed-topnav {
        position: sticky;
        top: 100px;
        left: 64px;
        right: 1rem;
        height: 52px;
        margin-top: 1rem;
        background: #fff;
        border-bottom: 1px solid var(--zed-border-color);
        display: flex;
        align-items: center;
        padding: 0 2rem;
        gap: 0;
        z-index: 1001;
        overflow-x: auto;
        scrollbar-width: none;
        }
        .zed-topnav::-webkit-scrollbar { display: none; }

        .zed-tab {
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--muted);
        padding: 0 1.2rem;
        height: 52px;
        display: flex; align-items: center;
        cursor: pointer;
        border-bottom: 2px solid transparent;
        white-space: nowrap;
        transition: color .16s, border-color .16s;
        background: transparent;
        border-top: none; border-left: none; border-right: none;
        }
        .zed-tab:hover { color: var(--ink); }
        .zed-tab.active { color: var(--zed-primary); border-bottom-color: var(--zed-primary); }

        /* ── MAIN LAYOUT ── */
        .zed-main {
        margin-left: 64px;
        padding-top: 0;
        min-height: 100vh;
        }

        /* ── MODULE HEADER ── */
        .zed-module-header {
        background: #fff;
        border-bottom: 1px solid var(--zed-border-color);
        padding: 2.5rem 3rem 2rem;
        position: relative;
        overflow: hidden;
        }
        .zed-module-num {
        font-family: 'Playfair Display', serif;
        font-size: 6rem;
        font-weight: 700;
        color: var(--zed-border-color);
        position: absolute;
        right: 3rem;
        top: -0.5rem;
        line-height: 1;
        pointer-events: none;
        user-select: none;
        }
        .zed-module-tag {
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--zed-primary);
        margin-bottom: 0.35rem;
        }
        .zed-module-title {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        font-weight: 700;
        color: var(--ink);
        margin: 0 0 0.3rem;
        letter-spacing: -0.02em;
        }
        .zed-module-sub {
        font-size: 13px;
        color: var(--muted);
        font-style: italic;
        margin: 0;
        }

        /* ── CONTENT ── */
        .zed-content { padding: 2.5rem 3rem; }

        .zed-section-label {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--zed-primary);
        margin-bottom: 1.25rem;
        display: flex;
        align-items: center;
        gap: 10px;
        }
        .zed-section-label::before {
        content: '';
        width: 3px; height: 14px;
        background: var(--zed-primary);
        border-radius: 2px;
        display: inline-block;
        }

        /* ── DEFINITION GRID ── */
        .zed-def-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0;
        border: 1px solid var(--zed-border-color);
        border-radius: var(--border-radius-lg);
        overflow: hidden;
        margin-bottom: 2.5rem;
        background: #fff;
        }
        .zed-def-cell {
        padding: 1.5rem;
        border-right: 1px solid var(--zed-border-color);
        }
        .zed-def-cell:last-child { border-right: none; }
        .zed-def-cell-title {
        font-size: 9px;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--faint);
        margin-bottom: 0.75rem;
        }
        .zed-def-cell p {
        font-size: 13px;
        line-height: 1.65;
        color: var(--ink2);
        margin: 0;
        }
        .zed-def-cell em {
        font-style: italic;
        color: var(--ink);
        font-weight: 500;
        }
        .zed-timeframe-list {
        list-style: none;
        padding: 0; margin: 0;
        font-size: 13px;
        color: var(--ink2);
        line-height: 1;
        }
        .zed-timeframe-list li {
        padding: 5px 0;
        display: flex;
        align-items: center;
        gap: 8px;
        border-bottom: 1px solid var(--zed-backgound-color);
        }
        .zed-timeframe-list li:last-child { border-bottom: none; }
        .zed-tf-dot {
        width: 6px; height: 6px;
        border-radius: 50%;
        background: var(--zed-primary);
        flex-shrink: 0;
        }
        .zed-tf-name { font-weight: 500; color: var(--ink); min-width: 90px; font-size: 12.5px; }
        .zed-tf-range { color: var(--muted); font-size: 12px; }

        /* ── ASSUMPTION BADGES ── */
        .zed-assumption-list { list-style: none; padding: 0; margin: 0; }
        .zed-assumption-list li {
        display: flex; align-items: flex-start; gap: 10px;
        font-size: 13px; color: var(--ink2);
        padding: 5px 0;
        border-bottom: 1px solid var(--zed-backgound-color);
        line-height: 1.45;
        }
        .zed-assumption-list li:last-child { border-bottom: none; }
        .zed-num-badge {
        width: 20px; height: 20px;
        border-radius: 50%;
        background: var(--zed-primary);
        color: #fff;
        font-size: 10px; font-weight: 700;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
        }

        /* ── MARKETS ROWS ── */
        .zed-market-row {
        background: #fff;
        border: 1px solid var(--zed-border-color);
        border-radius: 8px;
        padding: 1rem 1.4rem;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 14px;
        transition: border-color .18s, box-shadow .18s;
        cursor: default;
        }
        .zed-market-row:hover {
        border-color: var(--zed-primary);
        box-shadow: 0 2px 14px rgba(255,0,0,0.07);
        }
        .zed-market-icon {
        width: 36px; height: 36px;
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        font-size: 16px;
        flex-shrink: 0;
        }
        .zed-market-name { font-weight: 600; font-size: 13.5px; color: var(--ink); }
        .zed-market-desc { font-size: 12.5px; color: var(--muted); }
        .zed-market-arrow {
        margin-left: auto;
        color: var(--zed-border-color);
        font-size: 18px;
        transition: color .18s, transform .18s;
        }
        .zed-market-row:hover .zed-market-arrow { color: var(--zed-primary); transform: translateX(3px); }

        /* ── PATTERN CARDS ── */
        .zed-pattern-grid {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 10px;
        margin-bottom: 2rem;
        }
        .zed-pattern-card {
        background: #fff;
        border: 1px solid var(--zed-border-color);
        border-radius: 8px;
        padding: 1rem 0.75rem;
        text-align: center;
        transition: border-color .18s, box-shadow .18s;
        cursor: default;
        }
        .zed-pattern-card:hover {
        border-color: currentColor;
        box-shadow: 0 3px 14px rgba(0,0,0,0.07);
        }
        .zed-pattern-card.bullish:hover { border-color: var(--emerald); }
        .zed-pattern-card.bearish:hover { border-color: var(--zed-primary); }

        .zed-candle-svg { display: block; margin: 0 auto 0.65rem; }
        .zed-pattern-name { font-size: 9px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: var(--ink); margin-bottom: 0.3rem; }
        .zed-pattern-desc { font-size: 10.5px; color: var(--muted); line-height: 1.4; }

        /* ── BOTTOM PAGINATION ── */
        .zed-pagination {
        background: #fff;
        border-top: 1px solid var(--zed-border-color);
        padding: 1rem 3rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: sticky;
        bottom: 0;
        }
        .zed-btn {
        display: inline-flex; align-items: center; gap: 8px;
        font-size: 12px; font-weight: 600;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        padding: 0.55rem 1.2rem;
        border-radius: 6px;
        cursor: pointer;
        transition: background .16s, color .16s, border-color .16s;
        border: 1.5px solid var(--zed-border-color);
        background: transparent;
        color: var(--muted);
        text-decoration: none;
        }
        .zed-btn:hover { border-color: var(--ink); color: var(--ink); }
        .zed-btn-primary {
        background: var(--zed-dark-text);
        color: #fff;
        border-color: var(--zed-dark-text);
        }
        .zed-btn-primary:hover { background: var(--zed-primary); border-color: var(--zed-primary); }

        .zed-page-indicator {
        font-size: 12px;
        color: var(--muted);
        font-family: 'DM Mono', monospace;
        }

        /* ── PAGES TOGGLE ── */
        .page { display: none; }
        .page.active { display: block; }

        /* ── ANIMATIONS ── */
        @keyframes fadeUp {
        from { opacity: 0; transform: translateY(16px); }
        to { opacity: 1; transform: translateY(0); }
        }
        .zed-content > * {
        animation: fadeUp .35s ease forwards;
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 1100px) {
        .zed-def-grid { grid-template-columns: repeat(2, 1fr); }
        .zed-def-cell:nth-child(2) { border-right: none; }
        .zed-def-cell:nth-child(1), .zed-def-cell:nth-child(2) { border-bottom: 1px solid var(--zed-border-color); }
        .zed-pattern-grid { grid-template-columns: repeat(3, 1fr); }
        }
        @media (max-width: 768px) {
        .zed-main { margin-left: 0; padding-top: 100px; }
        .zed-sidebar { width: 100%; height: 48px; flex-direction: row; padding: 0 1rem; top: 52px; }
        .zed-topnav { left: 0; }
        .zed-content { padding: 1.5rem; }
        .zed-module-header { padding: 1.5rem; }
        .zed-def-grid { grid-template-columns: 1fr; }
        .zed-pattern-grid { grid-template-columns: repeat(2, 1fr); }
        }
</style>

    <!-- ═══ HERO ═══ -->
    <div class="zed-hero">
        <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
            <div class="zed-hero-eyebrow"><i class="fas fa-rocket me-1"></i> Beginner Forex Course · Zero to Hero</div>
            <h1 class="zed-hero-title">Technical<span class="gold">Trading</span><br>Analysis</h1>
               
            </div>
            <div class="col-lg-5">
         
            
            <!-- Progress bar -->
            <div class="mt-3 p-3"
                style="background:var(--zed-card-bg);border:1px solid var(--zed-border-color);border-radius:var(--border-radius-lg);">
                <div class="d-flex justify-content-between align-items-center mb-2">
                <span style="font-size:.7rem;font-weight:700;color:var(--ink);">Your Progress</span>
                <span class="zed-badge zed-badge-red">0% Complete</span>
                </div>
                <div class="course-prog">
                <div class="course-prog-fill" style="width:0%"></div>
                </div>
                <div style="font-size:.65rem;color:var(--faint);margin-top:6px;font-family:'Poppins',monospace;">
                Module 1 of 9 — Not started</div>
            </div>
            </div>
        </div>
        </div>
    </div>
    


<!-- MAIN -->
<main class="zed-main">
<!-- TOP NAV TABS -->
<nav class="zed-topnav" id="topTabs">
  <button class="zed-tab active" data-page="page-intro">Intro</button>
  <button class="zed-tab" data-page="page-candles">Candles</button>
  <button class="zed-tab" data-page="page-structure">Structure</button>
  <button class="zed-tab" data-page="page-sr">S&amp;R</button>
  <button class="zed-tab" data-page="page-trends">Trends</button>
  <button class="zed-tab active-page" data-page="page-patterns">Patterns</button>
  <button class="zed-tab" data-page="page-charts">Charts</button>
  <button class="zed-tab" data-page="page-indicators">Indicators</button>
  <button class="zed-tab" data-page="page-breakout">Breakout</button>
  <button class="zed-tab" data-page="page-entry">Entry/SL/TP</button>
  <button class="zed-tab" data-page="page-rr">R:R Ratio</button>
  <button class="zed-tab" data-page="page-checklist">Checklist</button>
</nav>
  <!-- ══════════ PAGE: INTRO ══════════ -->
  <div class="page active" id="page-intro">
    <div class="zed-module-header">
      <div class="zed-module-num">01</div>
      <div class="zed-module-tag">Module 1 — Foundation</div>
      <h1 class="zed-module-title">Introduction to Technical Analysis</h1>
      <p class="zed-module-sub">The scientific method to understand price action</p>
    </div>

    <div class="zed-content">

      <!-- WHAT IS TA -->
      <div class="zed-section-label">What is Technical Analysis?</div>
      <div class="zed-def-grid mb-4">
        <div class="zed-def-cell">
          <div class="zed-def-cell-title">Definition</div>
          <p>Technical Analysis forecasts future price direction by studying past price data and volume. Core belief: <em>everything is already reflected in the price.</em></p>
        </div>
        <div class="zed-def-cell">
          <div class="zed-def-cell-title">Fundamental vs Technical</div>
          <p>Fundamental: analyzing company value (earnings, balance sheet). Technical: studying chart patterns and price movement. Traders primarily use technical.</p>
        </div>
        <div class="zed-def-cell">
          <div class="zed-def-cell-title">3 Core Assumptions</div>
          <ul class="zed-assumption-list mt-1">
            <li><span class="zed-num-badge">1</span> Market discounts everything</li>
            <li><span class="zed-num-badge">2</span> Prices move in trends</li>
            <li><span class="zed-num-badge">3</span> History repeats itself</li>
          </ul>
        </div>
        <div class="zed-def-cell">
          <div class="zed-def-cell-title">Time Frames</div>
          <ul class="zed-timeframe-list">
            <li><span class="zed-tf-dot"></span><span class="zed-tf-name">Scalping</span><span class="zed-tf-range">1–5 min</span></li>
            <li><span class="zed-tf-dot"></span><span class="zed-tf-name">Day Trading</span><span class="zed-tf-range">15min–1hr</span></li>
            <li><span class="zed-tf-dot"></span><span class="zed-tf-name">Swing Trading</span><span class="zed-tf-range">4hr–Daily</span></li>
            <li><span class="zed-tf-dot"></span><span class="zed-tf-name">Position Trading</span><span class="zed-tf-range">Weekly–Monthly</span></li>
          </ul>
        </div>
      </div>

      <!-- MARKETS -->
      <div class="zed-section-label">Markets &amp; Instruments</div>
      <div class="zed-market-row">
        <div class="zed-market-icon" style="background:#fff3cd;">💱</div>
        <div>
          <div class="zed-market-name">Forex — EUR/USD, GBP/USD</div>
          <div class="zed-market-desc">Most liquid market, open 24/5, largest in the world</div>
        </div>
        <span class="zed-market-arrow">→</span>
      </div>
      <div class="zed-market-row">
        <div class="zed-market-icon" style="background:#e8f4fd;">₿</div>
        <div>
          <div class="zed-market-name">Crypto — BTC, ETH</div>
          <div class="zed-market-desc">Open 24/7, high volatility, very accessible for retail traders</div>
        </div>
        <span class="zed-market-arrow">→</span>
      </div>
      <div class="zed-market-row">
        <div class="zed-market-icon" style="background:#f0fdf4;">📈</div>
        <div>
          <div class="zed-market-name">Stocks</div>
          <div class="zed-market-desc">Company shares traded during exchange hours, great for swing trading</div>
        </div>
        <span class="zed-market-arrow">→</span>
      </div>
      <div class="zed-market-row">
        <div class="zed-market-icon" style="background:#fffbeb;">🏅</div>
        <div>
          <div class="zed-market-name">Commodities — Gold, Oil, Silver</div>
          <div class="zed-market-desc">Driven by global demand and supply dynamics</div>
        </div>
        <span class="zed-market-arrow">→</span>
      </div>
      <div class="zed-market-row">
        <div class="zed-market-icon" style="background:#faf5ff;">📊</div>
        <div>
          <div class="zed-market-name">Indices — Nifty 50, S&amp;P 500</div>
          <div class="zed-market-desc">Barometers of overall market health</div>
        </div>
        <span class="zed-market-arrow">→</span>
      </div>

    </div>

    <div class="zed-pagination">
      <button class="zed-btn" disabled style="opacity:.35; cursor:not-allowed;">← Previous</button>
      <span class="zed-page-indicator">1 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-candles','Candles')">Next →</button>
    </div>
  </div>

  <!-- ══════════ PAGE: CANDLES ══════════ -->
  <div class="page" id="page-candles">
    <div class="zed-module-header">
      <div class="zed-module-num">02</div>
      <div class="zed-module-tag">Module 2 — Candles</div>
      <h1 class="zed-module-title">Candlestick Basics</h1>
      <p class="zed-module-sub">Reading the language of price bars</p>
    </div>
    <div class="zed-content">
      <div class="zed-section-label">Anatomy of a Candle</div>
      <div class="row g-3 mb-4">
        <div class="col-md-6">
          <div class="zed-market-row" style="flex-direction:column; align-items:flex-start; gap:8px;">
            <div style="display:flex; gap:16px; align-items:center; width:100%;">
              <!-- Bullish candle diagram -->
              <svg width="48" height="100" viewBox="0 0 48 100">
                <line x1="24" y1="2" x2="24" y2="22" stroke="#166534" stroke-width="2"/>
                <rect x="12" y="22" width="24" height="56" fill="#166534" rx="2"/>
                <line x1="24" y1="78" x2="24" y2="98" stroke="#166534" stroke-width="2"/>
              </svg>
              <div>
                <div class="zed-market-name" style="color:var(--emerald);">Bullish (Green) Candle</div>
                <div class="zed-market-desc mt-1">Close &gt; Open — buyers in control. Body represents the open-close range. Wicks show high and low extremes.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="zed-market-row" style="flex-direction:column; align-items:flex-start; gap:8px;">
            <div style="display:flex; gap:16px; align-items:center; width:100%;">
              <!-- Bearish candle diagram -->
              <svg width="48" height="100" viewBox="0 0 48 100">
                <line x1="24" y1="2" x2="24" y2="22" stroke="#a32d2d" stroke-width="2"/>
                <rect x="12" y="22" width="24" height="56" fill="#a32d2d" rx="2"/>
                <line x1="24" y1="78" x2="24" y2="98" stroke="#a32d2d" stroke-width="2"/>
              </svg>
              <div>
                <div class="zed-market-name" style="color:var(--zed-primary);">Bearish (Red) Candle</div>
                <div class="zed-market-desc mt-1">Close &lt; Open — sellers in control. Larger body = stronger move. Long upper wick = rejection of highs.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="zed-section-label">Key Candle Types</div>
      <div class="row g-3">
        <div class="col-md-3">
          <div class="zed-market-row" style="flex-direction:column; align-items:flex-start;">
            <div class="zed-market-name">Doji</div>
            <div class="zed-market-desc">Open ≈ Close — indecision between buyers and sellers</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="zed-market-row" style="flex-direction:column; align-items:flex-start;">
            <div class="zed-market-name">Marubozu</div>
            <div class="zed-market-desc">No wicks — complete dominance by one side</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="zed-market-row" style="flex-direction:column; align-items:flex-start;">
            <div class="zed-market-name">Spinning Top</div>
            <div class="zed-market-desc">Small body, long wicks — high volatility, no clear winner</div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="zed-market-row" style="flex-direction:column; align-items:flex-start;">
            <div class="zed-market-name">Long Wick Candle</div>
            <div class="zed-market-desc">Long wick signals strong rejection — good for entry/exit signals</div>
          </div>
        </div>
      </div>
    </div>
    <div class="zed-pagination">
      <button class="zed-btn" onclick="goToPage('page-intro','Intro')">← Previous</button>
      <span class="zed-page-indicator">2 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-structure','Structure')">Next →</button>
    </div>
  </div>

  <!-- ══════════ PAGE: PATTERNS ══════════ -->
  <div class="page" id="page-patterns">
    <div class="zed-module-header">
      <div class="zed-module-num">06</div>
      <div class="zed-module-tag">Module 6 — Pattern Recognition</div>
      <h1 class="zed-module-title">Candlestick Patterns</h1>
      <p class="zed-module-sub">High-probability signals from price action formations</p>
    </div>

    <div class="zed-content">

      <!-- BULLISH -->
      <div class="zed-section-label">Bullish Reversal Patterns</div>
      <div class="zed-pattern-grid mb-4">

        <!-- HAMMER -->
        <div class="zed-pattern-card bullish">
          <svg class="zed-candle-svg" width="44" height="72" viewBox="0 0 44 72">
            <line x1="22" y1="2" x2="22" y2="12" stroke="#1e1e1e" stroke-width="1.5"/>
            <rect x="14" y="12" width="16" height="12" fill="#1e1e1e" rx="1"/>
            <line x1="22" y1="24" x2="22" y2="68" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Hammer</div>
          <div class="zed-pattern-desc">Bullish reversal at bottom</div>
        </div>

        <!-- BULLISH ENGULFING -->
        <div class="zed-pattern-card bullish">
          <svg class="zed-candle-svg" width="44" height="72" viewBox="0 0 44 72">
            <line x1="14" y1="4" x2="14" y2="12" stroke="#888" stroke-width="1.5"/>
            <rect x="8" y="12" width="12" height="22" fill="#aaa" rx="1"/>
            <line x1="14" y1="34" x2="14" y2="40" stroke="#888" stroke-width="1.5"/>
            <line x1="30" y1="2" x2="30" y2="10" stroke="#1e1e1e" stroke-width="1.5"/>
            <rect x="22" y="10" width="16" height="52" fill="#1e1e1e" rx="1"/>
            <line x1="30" y1="62" x2="30" y2="70" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Bullish Engulfing</div>
          <div class="zed-pattern-desc">Large candle engulfs prior one</div>
        </div>

        <!-- MORNING STAR -->
        <div class="zed-pattern-card bullish">
          <svg class="zed-candle-svg" width="56" height="72" viewBox="0 0 56 72">
            <rect x="4" y="8" width="14" height="36" fill="#aaa" rx="1"/>
            <line x1="11" y1="2" x2="11" y2="8" stroke="#888" stroke-width="1.5"/>
            <line x1="11" y1="44" x2="11" y2="52" stroke="#888" stroke-width="1.5"/>
            <rect x="22" y="40" width="12" height="10" fill="#888" rx="1"/>
            <line x1="28" y1="36" x2="28" y2="40" stroke="#888" stroke-width="1.5"/>
            <line x1="28" y1="50" x2="28" y2="58" stroke="#888" stroke-width="1.5"/>
            <rect x="38" y="18" width="14" height="44" fill="#1e1e1e" rx="1"/>
            <line x1="45" y1="6" x2="45" y2="18" stroke="#1e1e1e" stroke-width="1.5"/>
            <line x1="45" y1="62" x2="45" y2="70" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Morning Star</div>
          <div class="zed-pattern-desc">3-candle bullish reversal</div>
        </div>

        <!-- PIERCING LINE -->
        <div class="zed-pattern-card bullish">
          <svg class="zed-candle-svg" width="44" height="72" viewBox="0 0 44 72">
            <rect x="4" y="6" width="14" height="44" fill="#aaa" rx="1"/>
            <line x1="11" y1="2" x2="11" y2="6" stroke="#888" stroke-width="1.5"/>
            <line x1="11" y1="50" x2="11" y2="58" stroke="#888" stroke-width="1.5"/>
            <rect x="26" y="28" width="14" height="36" fill="#1e1e1e" rx="1"/>
            <line x1="33" y1="16" x2="33" y2="28" stroke="#1e1e1e" stroke-width="1.5"/>
            <line x1="33" y1="64" x2="33" y2="70" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Piercing Line</div>
          <div class="zed-pattern-desc">Closes above 50% of prior candle</div>
        </div>

        <!-- DRAGONFLY DOJI -->
        <div class="zed-pattern-card bullish">
          <svg class="zed-candle-svg" width="44" height="72" viewBox="0 0 44 72">
            <line x1="22" y1="6" x2="22" y2="14" stroke="#1e1e1e" stroke-width="1.5"/>
            <rect x="14" y="14" width="16" height="3" fill="#1e1e1e" rx="1"/>
            <line x1="22" y1="17" x2="22" y2="66" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Dragonfly Doji</div>
          <div class="zed-pattern-desc">Buyers rejected lower prices fully</div>
        </div>

        <!-- BULLISH HARAMI -->
        <div class="zed-pattern-card bullish">
          <svg class="zed-candle-svg" width="44" height="72" viewBox="0 0 44 72">
            <rect x="8" y="6" width="16" height="52" fill="#aaa" rx="1"/>
            <line x1="16" y1="2" x2="16" y2="6" stroke="#888" stroke-width="1.5"/>
            <line x1="16" y1="58" x2="16" y2="64" stroke="#888" stroke-width="1.5"/>
            <rect x="20" y="22" width="14" height="22" fill="#1e1e1e" rx="1"/>
            <line x1="27" y1="16" x2="27" y2="22" stroke="#1e1e1e" stroke-width="1.5"/>
            <line x1="27" y1="44" x2="27" y2="52" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Bullish Harami</div>
          <div class="zed-pattern-desc">Small candle inside large bearish</div>
        </div>

      </div>

      <!-- BEARISH -->
      <div class="zed-section-label">Bearish Reversal Patterns</div>
      <div class="zed-pattern-grid">

        <!-- SHOOTING STAR -->
        <div class="zed-pattern-card bearish">
          <svg class="zed-candle-svg" width="44" height="72" viewBox="0 0 44 72">
            <line x1="22" y1="4" x2="22" y2="52" stroke="#1e1e1e" stroke-width="1.5"/>
            <rect x="14" y="52" width="16" height="12" fill="#1e1e1e" rx="1"/>
            <line x1="22" y1="64" x2="22" y2="70" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Shooting Star</div>
          <div class="zed-pattern-desc">Bearish reversal at top</div>
        </div>

        <!-- BEARISH ENGULFING -->
        <div class="zed-pattern-card bearish">
          <svg class="zed-candle-svg" width="44" height="72" viewBox="0 0 44 72">
            <line x1="14" y1="28" x2="14" y2="36" stroke="#888" stroke-width="1.5"/>
            <rect x="8" y="36" width="12" height="22" fill="#888" rx="1"/>
            <line x1="14" y1="58" x2="14" y2="66" stroke="#888" stroke-width="1.5"/>
            <line x1="30" y1="2" x2="30" y2="10" stroke="#1e1e1e" stroke-width="1.5"/>
            <rect x="22" y="10" width="16" height="52" fill="#1e1e1e" rx="1"/>
            <line x1="30" y1="62" x2="30" y2="70" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Bearish Engulfing</div>
          <div class="zed-pattern-desc">Large dark candle engulfs prior</div>
        </div>

        <!-- EVENING STAR -->
        <div class="zed-pattern-card bearish">
          <svg class="zed-candle-svg" width="56" height="72" viewBox="0 0 56 72">
            <rect x="4" y="28" width="14" height="36" fill="#888" rx="1"/>
            <line x1="11" y1="16" x2="11" y2="28" stroke="#888" stroke-width="1.5"/>
            <line x1="11" y1="64" x2="11" y2="70" stroke="#888" stroke-width="1.5"/>
            <rect x="22" y="20" width="12" height="10" fill="#888" rx="1"/>
            <line x1="28" y1="10" x2="28" y2="20" stroke="#888" stroke-width="1.5"/>
            <line x1="28" y1="30" x2="28" y2="38" stroke="#888" stroke-width="1.5"/>
            <rect x="38" y="8" width="14" height="44" fill="#1e1e1e" rx="1"/>
            <line x1="45" y1="2" x2="45" y2="8" stroke="#1e1e1e" stroke-width="1.5"/>
            <line x1="45" y1="52" x2="45" y2="62" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Evening Star</div>
          <div class="zed-pattern-desc">3-candle bearish reversal</div>
        </div>

        <!-- DARK CLOUD COVER -->
        <div class="zed-pattern-card bearish">
          <svg class="zed-candle-svg" width="44" height="72" viewBox="0 0 44 72">
            <rect x="4" y="26" width="14" height="36" fill="#888" rx="1"/>
            <line x1="11" y1="14" x2="11" y2="26" stroke="#888" stroke-width="1.5"/>
            <line x1="11" y1="62" x2="11" y2="70" stroke="#888" stroke-width="1.5"/>
            <rect x="26" y="10" width="14" height="36" fill="#1e1e1e" rx="1"/>
            <line x1="33" y1="4" x2="33" y2="10" stroke="#1e1e1e" stroke-width="1.5"/>
            <line x1="33" y1="46" x2="33" y2="56" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Dark Cloud Cover</div>
          <div class="zed-pattern-desc">Closes below 50% of prior candle</div>
        </div>

        <!-- GRAVESTONE DOJI -->
        <div class="zed-pattern-card bearish">
          <svg class="zed-candle-svg" width="44" height="72" viewBox="0 0 44 72">
            <line x1="22" y1="4" x2="22" y2="56" stroke="#1e1e1e" stroke-width="1.5"/>
            <rect x="14" y="56" width="16" height="3" fill="#1e1e1e" rx="1"/>
            <line x1="22" y1="59" x2="22" y2="66" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Gravestone Doji</div>
          <div class="zed-pattern-desc">Sellers rejected higher prices fully</div>
        </div>

        <!-- HANGING MAN -->
        <div class="zed-pattern-card bearish">
          <svg class="zed-candle-svg" width="44" height="72" viewBox="0 0 44 72">
            <line x1="22" y1="4" x2="22" y2="12" stroke="#1e1e1e" stroke-width="1.5"/>
            <rect x="14" y="12" width="16" height="12" fill="#1e1e1e" rx="1"/>
            <line x1="22" y1="24" x2="22" y2="70" stroke="#1e1e1e" stroke-width="1.5"/>
          </svg>
          <div class="zed-pattern-name">Hanging Man</div>
          <div class="zed-pattern-desc">Hammer shape at top = bearish</div>
        </div>

      </div>
    </div>

    <div class="zed-pagination">
      <button class="zed-btn" onclick="goToPage('page-trends','Trends')">← Previous</button>
      <span class="zed-page-indicator">6 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-charts','Charts')">Next →</button>
    </div>
  </div>

  <!-- ══════════ STUB PAGES ══════════ -->
  <!-- Structure -->
  <div class="page" id="page-structure">
    <div class="zed-module-header">
      <div class="zed-module-num">03</div>
      <div class="zed-module-tag">Module 3 — Market Structure</div>
      <h1 class="zed-module-title">Market Structure</h1>
      <p class="zed-module-sub">Higher highs, higher lows — understanding the flow</p>
    </div>
    <div class="zed-content">
      <div class="zed-section-label">Structure Concepts</div>
      <div class="row g-3">
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Uptrend (HH + HL)</div><div class="zed-market-desc">Price making higher highs and higher lows — bullish structure</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Downtrend (LH + LL)</div><div class="zed-market-desc">Price making lower highs and lower lows — bearish structure</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Consolidation / Range</div><div class="zed-market-desc">Price moving sideways — build-up before the next major move</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Break of Structure (BOS)</div><div class="zed-market-desc">Price breaks past a key swing high/low, confirming trend shift</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Change of Character (CHoCH)</div><div class="zed-market-desc">First sign of reversal — prior structure violated</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Liquidity Sweep</div><div class="zed-market-desc">Price spikes past highs/lows to grab stops before reversing</div></div></div>
      </div>
    </div>
    <div class="zed-pagination">
      <button class="zed-btn" onclick="goToPage('page-candles','Candles')">← Previous</button>
      <span class="zed-page-indicator">3 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-sr','S&R')">Next →</button>
    </div>
  </div>

  <!-- S&R -->
  <div class="page" id="page-sr">
    <div class="zed-module-header">
      <div class="zed-module-num">04</div>
      <div class="zed-module-tag">Module 4 — Support &amp; Resistance</div>
      <h1 class="zed-module-title">Support &amp; Resistance</h1>
      <p class="zed-module-sub">Key price levels where buying and selling pressure emerge</p>
    </div>
    <div class="zed-content">
      <div class="zed-section-label">Key Concepts</div>
      <div class="row g-3">
        <div class="col-md-6"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name" style="color:var(--emerald);">Support Zone</div><div class="zed-market-desc">Area where price has repeatedly bounced upward — buyers dominate</div></div></div>
        <div class="col-md-6"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name" style="color:var(--zed-primary);">Resistance Zone</div><div class="zed-market-desc">Area where price has repeatedly rejected downward — sellers dominate</div></div></div>
        <div class="col-md-6"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Role Reversal</div><div class="zed-market-desc">Broken support becomes resistance and vice versa — key TA principle</div></div></div>
        <div class="col-md-6"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Confluence Zones</div><div class="zed-market-desc">Areas where multiple S&amp;R levels align — highest probability setups</div></div></div>
      </div>
    </div>
    <div class="zed-pagination">
      <button class="zed-btn" onclick="goToPage('page-structure','Structure')">← Previous</button>
      <span class="zed-page-indicator">4 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-trends','Trends')">Next →</button>
    </div>
  </div>

  <!-- Trends -->
  <div class="page" id="page-trends">
    <div class="zed-module-header">
      <div class="zed-module-num">05</div>
      <div class="zed-module-tag">Module 5 — Trends</div>
      <h1 class="zed-module-title">Trend Analysis</h1>
      <p class="zed-module-sub">The trend is your friend — until it ends</p>
    </div>
    <div class="zed-content">
      <div class="zed-section-label">Trend Tools</div>
      <div class="row g-3">
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Trendlines</div><div class="zed-market-desc">Connect swing highs or lows to visualize the dominant direction</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Trend Channels</div><div class="zed-market-desc">Parallel trendlines framing the price movement corridor</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Moving Averages</div><div class="zed-market-desc">MA20, MA50, MA200 — dynamic support and resistance levels</div></div></div>
      </div>
    </div>
    <div class="zed-pagination">
      <button class="zed-btn" onclick="goToPage('page-sr','S&R')">← Previous</button>
      <span class="zed-page-indicator">5 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-patterns','Patterns')">Next →</button>
    </div>
  </div>

  <!-- Charts -->
  <div class="page" id="page-charts">
    <div class="zed-module-header">
      <div class="zed-module-num">07</div>
      <div class="zed-module-tag">Module 7 — Charts</div>
      <h1 class="zed-module-title">Chart Types &amp; Analysis</h1>
      <p class="zed-module-sub">Choosing the right chart for your trading style</p>
    </div>
    <div class="zed-content">
      <div class="zed-section-label">Chart Types</div>
      <div class="row g-3">
        <div class="col-md-3"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Candlestick Chart</div><div class="zed-market-desc">Most popular — shows OHLC data clearly</div></div></div>
        <div class="col-md-3"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Bar Chart (OHLC)</div><div class="zed-market-desc">Similar info to candles, less visual</div></div></div>
        <div class="col-md-3"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Line Chart</div><div class="zed-market-desc">Only closing prices — good for macro view</div></div></div>
        <div class="col-md-3"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Heikin Ashi</div><div class="zed-market-desc">Smoothed candles — easier trend identification</div></div></div>
      </div>
    </div>
    <div class="zed-pagination">
      <button class="zed-btn" onclick="goToPage('page-patterns','Patterns')">← Previous</button>
      <span class="zed-page-indicator">7 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-indicators','Indicators')">Next →</button>
    </div>
  </div>

  <!-- Indicators -->
  <div class="page" id="page-indicators">
    <div class="zed-module-header">
      <div class="zed-module-num">08</div>
      <div class="zed-module-tag">Module 8 — Indicators</div>
      <h1 class="zed-module-title">Technical Indicators</h1>
      <p class="zed-module-sub">Confirmation tools — not substitutes for price action</p>
    </div>
    <div class="zed-content">
      <div class="zed-section-label">Core Indicators</div>
      <div class="row g-3">
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">RSI (14)</div><div class="zed-market-desc">Momentum oscillator 0–100. Overbought &gt;70, oversold &lt;30</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">MACD</div><div class="zed-market-desc">Trend-following momentum — signal line crossovers matter</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Bollinger Bands</div><div class="zed-market-desc">Volatility bands around MA20 — squeeze signals breakout</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Volume</div><div class="zed-market-desc">Confirms moves — high volume = conviction, low = suspect</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">EMA 20/50/200</div><div class="zed-market-desc">Exponential moving averages — dynamic S&amp;R and trend filters</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">ATR</div><div class="zed-market-desc">Average True Range — measures volatility for stop sizing</div></div></div>
      </div>
    </div>
    <div class="zed-pagination">
      <button class="zed-btn" onclick="goToPage('page-charts','Charts')">← Previous</button>
      <span class="zed-page-indicator">8 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-breakout','Breakout')">Next →</button>
    </div>
  </div>

  <!-- Breakout -->
  <div class="page" id="page-breakout">
    <div class="zed-module-header">
      <div class="zed-module-num">09</div>
      <div class="zed-module-tag">Module 9 — Breakout</div>
      <h1 class="zed-module-title">Breakout Trading</h1>
      <p class="zed-module-sub">Catching the move as price breaks free</p>
    </div>
    <div class="zed-content">
      <div class="zed-section-label">Breakout Types</div>
      <div class="row g-3">
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Range Breakout</div><div class="zed-market-desc">Price exits a consolidation zone with strong volume</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Trendline Break</div><div class="zed-market-desc">Clean break of a major trendline — potential reversal signal</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Retest Entry</div><div class="zed-market-desc">Wait for price to retest the breakout level — safer entry</div></div></div>
      </div>
    </div>
    <div class="zed-pagination">
      <button class="zed-btn" onclick="goToPage('page-indicators','Indicators')">← Previous</button>
      <span class="zed-page-indicator">9 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-entry','Entry/SL/TP')">Next →</button>
    </div>
  </div>

  <!-- Entry -->
  <div class="page" id="page-entry">
    <div class="zed-module-header">
      <div class="zed-module-num">10</div>
      <div class="zed-module-tag">Module 10 — Trade Management</div>
      <h1 class="zed-module-title">Entry / Stop Loss / Take Profit</h1>
      <p class="zed-module-sub">Precise execution is the difference between profit and loss</p>
    </div>
    <div class="zed-content">
      <div class="zed-section-label">Trade Execution</div>
      <div class="row g-3">
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Entry</div><div class="zed-market-desc">Enter on confluence — pattern + S&amp;R + trend alignment</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Stop Loss (SL)</div><div class="zed-market-desc">Place beyond structure — invalidates your thesis if hit</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Take Profit (TP)</div><div class="zed-market-desc">Target next resistance/support zone or 2R/3R objective</div></div></div>
      </div>
    </div>
    <div class="zed-pagination">
      <button class="zed-btn" onclick="goToPage('page-breakout','Breakout')">← Previous</button>
      <span class="zed-page-indicator">10 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-rr','R:R Ratio')">Next →</button>
    </div>
  </div>

  <!-- RR -->
  <div class="page" id="page-rr">
    <div class="zed-module-header">
      <div class="zed-module-num">11</div>
      <div class="zed-module-tag">Module 11 — Risk Management</div>
      <h1 class="zed-module-title">Risk:Reward Ratio</h1>
      <p class="zed-module-sub">One winning trade should cover multiple losers</p>
    </div>
    <div class="zed-content">
      <div class="zed-section-label">R:R Fundamentals</div>
      <div class="row g-3">
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Minimum 1:2 R:R</div><div class="zed-market-desc">Risk $1 to make $2 — profitable even with 40% win rate</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Position Sizing</div><div class="zed-market-desc">Never risk more than 1–2% of account per trade</div></div></div>
        <div class="col-md-4"><div class="zed-market-row" style="flex-direction:column; align-items:flex-start;"><div class="zed-market-name">Expectancy</div><div class="zed-market-desc">(Win% × Avg Win) − (Loss% × Avg Loss) — must be positive</div></div></div>
      </div>
    </div>
    <div class="zed-pagination">
      <button class="zed-btn" onclick="goToPage('page-entry','Entry/SL/TP')">← Previous</button>
      <span class="zed-page-indicator">11 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-checklist','Checklist')">Next →</button>
    </div>
  </div>

  <!-- Checklist -->
  <div class="page" id="page-checklist">
    <div class="zed-module-header">
      <div class="zed-module-num">12</div>
      <div class="zed-module-tag">Module 12 — Trade Checklist</div>
      <h1 class="zed-module-title">Pre-Trade Checklist</h1>
      <p class="zed-module-sub">Discipline separates professionals from amateurs</p>
    </div>
    <div class="zed-content">
      <div class="zed-section-label">Before Every Trade</div>
      <div id="checklist-items">
        <div class="zed-market-row" style="cursor:pointer;" onclick="toggleCheck(this)">
          <div class="zed-market-icon" style="background:var(--zed-backgound-color); color:var(--muted); font-size:20px;">○</div>
          <div><div class="zed-market-name">Trend Confirmed</div><div class="zed-market-desc">Higher timeframe trend aligns with my trade direction</div></div>
        </div>
        <div class="zed-market-row" style="cursor:pointer;" onclick="toggleCheck(this)">
          <div class="zed-market-icon" style="background:var(--zed-backgound-color); color:var(--muted); font-size:20px;">○</div>
          <div><div class="zed-market-name">Key Level Identified</div><div class="zed-market-desc">I'm trading from a clear support or resistance zone</div></div>
        </div>
        <div class="zed-market-row" style="cursor:pointer;" onclick="toggleCheck(this)">
          <div class="zed-market-icon" style="background:var(--zed-backgound-color); color:var(--muted); font-size:20px;">○</div>
          <div><div class="zed-market-name">Pattern Confirmed</div><div class="zed-market-desc">A recognizable candlestick pattern backs my thesis</div></div>
        </div>
        <div class="zed-market-row" style="cursor:pointer;" onclick="toggleCheck(this)">
          <div class="zed-market-icon" style="background:var(--zed-backgound-color); color:var(--muted); font-size:20px;">○</div>
          <div><div class="zed-market-name">Stop Loss Set</div><div class="zed-market-desc">SL is placed beyond structure — not just a number</div></div>
        </div>
        <div class="zed-market-row" style="cursor:pointer;" onclick="toggleCheck(this)">
          <div class="zed-market-icon" style="background:var(--zed-backgound-color); color:var(--muted); font-size:20px;">○</div>
          <div><div class="zed-market-name">R:R ≥ 1:2</div><div class="zed-market-desc">This trade has at least 2× potential vs risk</div></div>
        </div>
        <div class="zed-market-row" style="cursor:pointer;" onclick="toggleCheck(this)">
          <div class="zed-market-icon" style="background:var(--zed-backgound-color); color:var(--muted); font-size:20px;">○</div>
          <div><div class="zed-market-name">Position Size Correct</div><div class="zed-market-desc">Risk is ≤ 2% of total account capital</div></div>
        </div>
        <div class="zed-market-row" style="cursor:pointer;" onclick="toggleCheck(this)">
          <div class="zed-market-icon" style="background:var(--zed-backgound-color); color:var(--muted); font-size:20px;">○</div>
          <div><div class="zed-market-name">No News Events</div><div class="zed-market-desc">Checked economic calendar — no high-impact news soon</div></div>
        </div>
      </div>
    </div>
    <div class="zed-pagination">
      <button class="zed-btn" onclick="goToPage('page-rr','R:R Ratio')">← Previous</button>
      <span class="zed-page-indicator">12 / 12</span>
      <button class="zed-btn zed-btn-primary" onclick="goToPage('page-intro','Intro')">↩ Restart</button>
    </div>
  </div>

</main>
 
    <script>
        const tabMap = {
        'page-intro': 'Intro', 'page-candles': 'Candles', 'page-structure': 'Structure',
        'page-sr': 'S&R', 'page-trends': 'Trends', 'page-patterns': 'Patterns',
        'page-charts': 'Charts', 'page-indicators': 'Indicators', 'page-breakout': 'Breakout',
        'page-entry': 'Entry/SL/TP', 'page-rr': 'R:R Ratio', 'page-checklist': 'Checklist'
        };

        function goToPage(pageId, tabLabel) {
        document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
        document.querySelectorAll('.zed-tab').forEach(t => {
            t.classList.toggle('active', t.textContent.trim() === tabLabel ||
            (tabLabel === 'S&R' && t.textContent.trim() === 'S&R'));
        });
        const el = document.getElementById(pageId);
        if (el) { el.classList.add('active'); window.scrollTo(0,0); }
        }

        document.querySelectorAll('.zed-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            const label = tab.textContent.trim();
            const pageId = Object.keys(tabMap).find(k => tabMap[k] === label);
            if (pageId) goToPage(pageId, label);
        });
        });

        function toggleCheck(row) {
        const icon = row.querySelector('.zed-market-icon');
        const checked = icon.textContent.trim() === '✓';
        if (checked) {
            icon.textContent = '○';
            icon.style.background = 'var(--zed-backgound-color)';
            icon.style.color = 'var(--muted)';
            row.style.borderColor = 'var(--zed-border-color)';
        } else {
            icon.textContent = '✓';
            icon.style.background = 'var(--green-s)';
            icon.style.color = 'var(--emerald)';
            row.style.borderColor = 'var(--emerald)';
        }
        }
    </script>
<?php
include_once ('elements/footer.php');
?>