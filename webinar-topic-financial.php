<?php 
include_once ('elements/header.php');
?>

    <style>

    /* ─── HERO ─── */
    .hero {
      background: var(--zed-light-bg);
      padding: 100px 0 70px;
      position: relative;
      overflow: hidden;
    }

    /* Decorative geometric background */
    .hero-geo {
      position: absolute;
      inset: 0;
      pointer-events: none;
    }

    .hero-geo::before {
      content: '';
      position: absolute;
      top: -60px;
      right: -80px;
      width: 500px;
      height: 500px;
      border: 1px solid var(--zed-banner-bg-end);
      border-radius: 50%;
      opacity: .6;
    }

    .hero-geo::after {
      content: '';
      position: absolute;
      top: 40px;
      right: 60px;
      width: 300px;
      height: 300px;
      border: 1px solid var(--zed-banner-bg-end);
      border-radius: 50%;
    }

    .hero-geo-dot {
      position: absolute;
      bottom: 30px;
      left: 8%;
      width: 160px;
      height: 160px;
      border: 1px solid var(--zed-light-red-hover);
      border-radius: 50%;
      animation: rotateSlow 18s linear infinite;
    }

    @keyframes rotateSlow {
      to {
        transform: rotate(360deg);
      }
    }

    .hero-geo-cross {
      position: absolute;
      top: 50px;
      left: 50%;
      font-size: 1.2rem;
      color: var(--zed-primary);
      opacity: .25;
      animation: crossPulse 3s ease-in-out infinite;
    }

    @keyframes crossPulse {

      0%,
      100% {
        opacity: .25
      }

      50% {
        opacity: .55
      }
    }

    .hero-overline {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      font-size: .68rem;
      letter-spacing: .22em;
      text-transform: uppercase;
      font-weight: 600;
      color: var(--zed-primary);
      margin-bottom: 20px;
    }

    .hero-overline::before,
    .hero-overline::after {
      content: '';
      display: block;
      width: 30px;
      height: 1px;
      background: var(--zed-primary);
    }

    .hero-title {
      
      font-size: clamp(3.2rem, 7vw, 6rem);
      font-weight: 700;
      line-height: 1.05;
      color: var(--zed-dark-text);
      margin-bottom: 22px;
      letter-spacing: -.01em;
    }

    .hero-title em {
      font-style: italic;
      color: var(--zed-primary);
    }

    .hero-desc {
      font-size: .95rem;
      color: var(--zed-secondary);
      max-width: 580px;
      line-height: 1.8;
      margin: 0 auto 44px;
    }

    /* Hero stat row */
    .hero-stat-row {
      display: flex;
      flex-wrap: wrap;
      gap: 0;
      border: 1px solid var(--zed-banner-bg-end);
      border-radius: 10px;
      max-width: 700px;
      margin: 0 auto;
      overflow: hidden;
    }

    .hstat {
      flex: 1;
      min-width: 120px;
      padding: 20px 16px;
      text-align: center;
      border-right: 1px solid var(--zed-banner-bg-end);
      transition: background .2s;
    }

    .hstat:last-child {
      border-right: none;
    }

    .hstat:hover {
      background: var(--zed-white-glass-effect);
    }

    .hstat-num {
      
      font-size: 2rem;
      font-weight: 700;
      color: var(--zed-primary);
      line-height: 1;
    }

    .hstat-lbl {
      font-size: .65rem;
      font-weight: 600;
      letter-spacing: .14em;
      text-transform: uppercase;
      color: var(--zed-secondary);
      margin-top: 4px;
    }

    /* ─── FILTER BAR ─── */
    .filter-bar {
      background: var(--zed-light-bg);
      border-bottom: 1px solid var(--zed-banner-bg-end);
      border-top: 1px solid var(--zed-banner-bg-end);
      padding: 13px 0;
      position: sticky;
      top: 0;
      z-index: 200;
    }

    .fpill {
      background: transparent;
      border: 1px solid var(--zed-banner-bg-end);
      color: var(--zed-secondary);
      border-radius: 4px;
      padding: 7px 18px;
      font-size: .73rem;
      font-weight: 600;
      letter-spacing: .06em;
      text-transform: uppercase;
      cursor: pointer;
      white-space: nowrap;
      transition: all .2s;
      
    }

    .fpill:hover {
      border-color: var(--zed-primary);
      color: var(--zed-primary);
    }

    .fpill.active {
      background: var(--zed-primary);
      border-color: var(--zed-primary);
      color: #fff;
    }

    /* ─── SECTION LABELS ─── */
    .sec-over {
      font-size: .67rem;
      font-weight: 700;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: var(--zed-primary);
      margin-bottom: 8px;
    }

    .sec-h {
      
      font-size: clamp(1.9rem, 4vw, 2.9rem);
      font-weight: 700;
      color: var(--zed-dark-text);
      line-height: 1.1;
    }

    .sec-h em {
      font-style: italic;
      color: var(--zed-primary);
    }

    .sec-rule {
      width: 48px;
      height: 2px;
      background: var(--zed-primary);
      margin: 14px auto 0;
    }

    /* ─── MODULE CARDS ─── */
    .mod-card {
      background: var(--zed-light-bg);
      border: 1px solid var(--zed-banner-bg-end);
      border-radius: 12px;
      padding: 30px 26px 24px;
      position: relative;
      overflow: hidden;
      transition: transform .3s cubic-bezier(.2, .8, .3, 1), box-shadow .3s, border-color .3s;
      height: 100%;
    }

    .mod-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: var(--ac, var(--zed-primary));
      border-radius: 12px 12px 0 0;
      transform: scaleX(0);
      transform-origin: left;
      transition: transform .35s ease;
    }

    .mod-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 54px rgba(0, 0, 0, .09);
      border-color: transparent;
    }

    .mod-card:hover::before {
      transform: scaleX(1);
    }

    /* Corner number */
    .mod-num {
      position: absolute;
      top: 22px;
      right: 24px;
      
      font-size: 3rem;
      font-weight: 700;
      color: var(--zed-banner-bg-end);
      line-height: 1;
      transition: color .3s;
      user-select: none;
    }

    .mod-card:hover .mod-num {
      color: var(--ac-soft, rgba(217, 43, 31, .12));
    }

    .mod-icon-wrap {
      width: 48px;
      height: 48px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
      margin-bottom: 16px;
      background: var(--ac-soft, rgba(217, 43, 31, .08));
      color: var(--ac, var(--zed-primary));
    }

    .mod-label {
      font-size: .62rem;
      font-weight: 700;
      letter-spacing: .16em;
      text-transform: uppercase;
      color: var(--ac, var(--zed-primary));
      margin-bottom: 6px;
    }

    .mod-title {
      
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--zed-dark-text);
      line-height: 1.3;
      margin-bottom: 8px;
    }

    .mod-desc {
      font-size: .8rem;
      color: var(--zed-secondary);
      line-height: 1.7;
      margin-bottom: 18px;
    }

    .topic-list {
      margin-bottom: 20px;
    }

    .topic-item {
      display: flex;
      align-items: flex-start;
      gap: 9px;
      font-size: .79rem;
      color: var(--zed-dark-text);
      padding: 7px 0;
      border-bottom: 1px dashed var(--zed-banner-bg-end);
      transition: color .2s, gap .2s;
    }

    .topic-item:last-child {
      border-bottom: none;
    }

    .mod-card:hover .topic-item {
      gap: 12px;
    }

    .topic-dot {
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: var(--ac, var(--zed-primary));
      flex-shrink: 0;
      margin-top: 6px;
    }

    .mod-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-top: 16px;
      border-top: 1px solid var(--zed-banner-bg-end);
      margin-top: auto;
    }

    .mod-chips {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
    }

    .mod-chip {
      font-size: .67rem;
      color: var(--zed-secondary);
      display: flex;
      align-items: center;
      gap: 4px;
      font-weight: 500;
    }

    .mod-chip i {
      font-size: .6rem;
      color: var(--ac, var(--zed-primary));
    }

    .btn-start {
      
      font-size: .72rem;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase;
      padding: 9px 22px;
      border-radius: 4px;
      background: var(--ac, var(--zed-primary));
      color: #fff;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: opacity .2s, transform .15s;
      white-space: nowrap;
    }

    .btn-start:hover {
      opacity: .85;
      transform: scale(.97);
    }

    /* Highlighted chip (like "AI-based Alerts") */
    .highlight-chip {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: .7rem;
      font-weight: 600;
      padding: 5px 14px;
      border-radius: 4px;
      border: 1px solid var(--ac, var(--zed-primary));
      color: var(--ac, var(--zed-primary));
      background: var(--ac-soft, rgba(217, 43, 31, .06));
      margin-top: 4px;
    }

    .highlight-chip i {
      font-size: .65rem;
    }

    /* ─── PROGRESS ─── */
    .prog-track {
      height: 4px;
      border-radius: 2px;
      background: var(--zed-banner-bg-end);
      margin-top: 14px;
      overflow: hidden;
    }

    .prog-fill {
      height: 100%;
      border-radius: 2px;
      background: var(--ac, var(--zed-primary));
      transform: scaleX(0);
      transform-origin: left;
      animation: progIn 1.2s .3s ease forwards;
    }

    @keyframes progIn {
      to {
        transform: scaleX(1);
      }
    }

    /* ─── SCROLL REVEAL ─── */
    .reveal {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity .5s ease, transform .5s ease;
    }

    .reveal.in {
      opacity: 1;
      transform: translateY(0);
    }

    /* ─── MISC ─── */
  
    .bg-warm {
      background: var(--zed-banner-bg-start);
      padding: 60px 0;
    }

    .bg-section {
      background: var(--zed-card-back);
    }
    @media(max-width:576px) {
      .hero-stat-row {
        border-radius: 0;
        border-left: none;
        border-right: none;
      }

      .hstat {
        border-right: none;
        border-bottom: 1px solid var(--zed-banner-bg-end);
      }

      .hstat:last-child {
        border-bottom: none;
      }
    }
  </style>

  <!-- ── HERO ── -->
  <section class="hero">
    <div class="hero-geo">
      <div class="hero-geo-dot"></div>
      <div class="hero-geo-cross">✦</div>
    </div>
    <div class="container text-center position-relative">
      <div class="hero-overline">Expert-Led Education</div>
      <h1 class="hero-title">Webinar <em>Financial</em></h1>
      <p class="hero-desc">
        Gain practical knowledge and real-world insights from expert-led financial webinars covering trading, investing,
        and global markets.
      </p>
      <div class="hero-stat-row mx-auto">
        <div class="hstat">
          <div class="hstat-num">10</div>
          <div class="hstat-lbl">Modules</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">50+</div>
          <div class="hstat-lbl">Topics</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">Live</div>
          <div class="hstat-lbl">Sessions</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">Free</div>
          <div class="hstat-lbl">Access</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">All</div>
          <div class="hstat-lbl">Levels</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── FILTER BAR ── -->
  <div class="filter-bar">
    <div class="container">
      <div class="d-flex gap-2 flex-wrap">
        <button class="fpill active" data-f="all">All</button>
        <button class="fpill" data-f="fundamentals">Fundamentals</button>
        <button class="fpill" data-f="technical">Technical</button>
        <button class="fpill" data-f="strategies">Strategies</button>
        <button class="fpill" data-f="risk">Risk</button>
        <button class="fpill" data-f="portfolio">Portfolio</button>
        <button class="fpill" data-f="global">Global</button>
        <button class="fpill" data-f="tools">Tools</button>
        <button class="fpill" data-f="psychology">Psychology</button>
        <button class="fpill" data-f="advanced">Advanced</button>
      </div>
    </div>
  </div>

  <!-- ── MODULE GRID ── -->
  <section class="bg-warm">
    <div class="container">
      <div class="text-center mb-5 reveal">
        <div class="sec-over">Course Curriculum</div>
        <h2 class="sec-h">Financial <em>Learning Modules</em></h2>
        <div class="sec-rule mx-auto"></div>
      </div>
      <div class="row g-4" id="modgrid">

        <!-- 01 Market Fundamentals -->
        <div class="col-md-6 col-xl-4 reveal m-auto mb-4" data-cat="fundamentals">
          <div class="mod-card" style="--ac:var(--zed-primary);--ac-soft:rgba(217,43,31,.07)">
            <span class="mod-num">01</span>
            <div class="mod-icon-wrap"><i class="fas fa-chart-bar"></i></div>
            <div class="mod-label">Module 01</div>
            <div class="mod-title">Market Fundamentals</div>
            <p class="mod-desc">How financial markets operate across Forex, Stocks, Crypto and what drives price
              movements globally.</p>
            <div class="topic-list">
              <div class="topic-item">
                <div class="topic-dot"></div>How financial markets work (Forex, Stocks, Crypto)
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Key market participants (Retail vs Institutional)
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Understanding liquidity &amp; volatility
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Market cycles (Bullish vs Bearish trends)
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Global financial ecosystem overview
              </div>
            </div>
            <div class="prog-track">
              <div class="prog-fill" style="width:85%"></div>
            </div>
            <div class="mod-footer mt-3">
              <div class="mod-chips">
                <span class="mod-chip"><i class="fas fa-play-circle"></i> 7 videos</span>
                <span class="mod-chip"><i class="fas fa-clock"></i> 3h 40m</span>
              </div>
              <button class="btn-start"><i class="fas fa-arrow-right"></i> Begin</button>
            </div>
          </div>
        </div>

        <!-- 02 Technical Analysis -->
        <div class="col-md-6 col-xl-4 reveal m-auto mb-4" data-cat="technical">
          <div class="mod-card" style="--ac:var(--navy);--ac-soft:rgba(26,46,90,.07)">
            <span class="mod-num">02</span>
            <div class="mod-icon-wrap" style="background:rgba(26,46,90,.07);color:var(--navy)"><i
                class="fas fa-chart-area"></i></div>
            <div class="mod-label" style="color:var(--navy)">Module 02</div>
            <div class="mod-title">Technical Analysis Skills</div>
            <p class="mod-desc">Master chart reading, pattern recognition, and indicator-based strategies for precise
              market entries and exits.</p>
            <div class="topic-list">
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--navy)"></div>Candlestick patterns &amp; chart reading
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--navy)"></div>Support &amp; resistance zones
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--navy)"></div>Trend identification (Uptrend/Downtrend)
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--navy)"></div>Indicators (RSI, MACD, Moving Averages)
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--navy)"></div>Entry &amp; exit strategies
              </div>
            </div>
            <div class="prog-track" style="--ac:var(--navy)">
              <div class="prog-fill" style="width:70%"></div>
            </div>
            <div class="mod-footer mt-3">
              <div class="mod-chips">
                <span class="mod-chip"><i class="fas fa-play-circle" style="color:var(--navy)"></i> 9 videos</span>
                <span class="mod-chip"><i class="fas fa-clock" style="color:var(--navy)"></i> 4h 50m</span>
              </div>
              <button class="btn-start" style="background:var(--navy)"><i class="fas fa-arrow-right"></i> Begin</button>
            </div>
          </div>
        </div>

        <!-- 03 Fundamental Analysis -->
        <div class="col-md-6 col-xl-4 reveal m-auto mb-4" data-cat="fundamentals">
          <div class="mod-card" style="--ac:var(--teal);--ac-soft:rgba(13,115,119,.07)">
            <span class="mod-num">03</span>
            <div class="mod-icon-wrap" style="background:rgba(13,115,119,.07);color:var(--teal)"><i
                class="fas fa-newspaper"></i></div>
            <div class="mod-label" style="color:var(--teal)">Module 03</div>
            <div class="mod-title">Fundamental Analysis</div>
            <p class="mod-desc">Understand macro-economic data, central bank decisions, and company valuations that
              drive long-term price trends.</p>
            <div class="topic-list">
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--teal)"></div>Economic indicators (GDP, CPI, NFP)
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--teal)"></div>Interest rates &amp; central bank policies
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--teal)"></div>News impact on markets
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--teal)"></div>Company/asset valuation basics
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--teal)"></div>Long-term investment analysis
              </div>
            </div>
            <div class="prog-track" style="--ac:var(--teal)">
              <div class="prog-fill" style="width:55%"></div>
            </div>
            <div class="mod-footer mt-3">
              <div class="mod-chips">
                <span class="mod-chip"><i class="fas fa-play-circle" style="color:var(--teal)"></i> 8 videos</span>
                <span class="mod-chip"><i class="fas fa-clock" style="color:var(--teal)"></i> 4h 10m</span>
              </div>
              <button class="btn-start" style="background:var(--teal)"><i class="fas fa-arrow-right"></i> Begin</button>
            </div>
          </div>
        </div>

        <!-- 04 Trading Strategies -->
        <div class="col-md-6 col-xl-4 reveal m-auto mb-4" data-cat="strategies">
          <div class="mod-card" style="--ac:var(--gold);--ac-soft:rgba(176,125,26,.07)">
            <span class="mod-num">04</span>
            <div class="mod-icon-wrap" style="background:rgba(176,125,26,.07);color:var(--gold)"><i
                class="fas fa-bolt"></i></div>
            <div class="mod-label" style="color:var(--gold)">Module 04</div>
            <div class="mod-title">Trading Strategies</div>
            <p class="mod-desc">From intraday scalping to swing trading — build and backtest proven strategies across
              multiple timeframes.</p>
            <div class="topic-list">
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--gold)"></div>Intraday vs Swing trading
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--gold)"></div>Breakout &amp; reversal strategies
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--gold)"></div>Trend-following systems
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--gold)"></div>Scalping basics
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--gold)"></div>Strategy backtesting
              </div>
            </div>
            <div class="prog-track" style="--ac:var(--gold)">
              <div class="prog-fill" style="width:65%"></div>
            </div>
            <div class="mod-footer mt-3">
              <div class="mod-chips">
                <span class="mod-chip"><i class="fas fa-play-circle" style="color:var(--gold)"></i> 10 videos</span>
                <span class="mod-chip"><i class="fas fa-clock" style="color:var(--gold)"></i> 5h 20m</span>
              </div>
              <button class="btn-start" style="background:var(--gold)"><i class="fas fa-arrow-right"></i> Begin</button>
            </div>
          </div>
        </div>

        <!-- 05 Risk Management -->
        <div class="col-md-6 col-xl-4 reveal m-auto mb-4" data-cat="risk">
          <div class="mod-card" style="--ac:var(--zed-primary);--ac-soft:rgba(217,43,31,.07)">
            <span class="mod-num">05</span>
            <div class="mod-icon-wrap"><i class="fas fa-shield-halved"></i></div>
            <div class="mod-label">Module 05</div>
            <div class="mod-title">Risk Management</div>
            <p class="mod-desc">Protect your capital with disciplined position sizing, stop-loss placement, and
              emotional control techniques.</p>
            <div class="topic-list">
              <div class="topic-item">
                <div class="topic-dot"></div>Position sizing techniques
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Risk-reward ratio (RRR)
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Stop-loss &amp; take-profit strategies
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Avoiding overtrading
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Capital preservation methods
              </div>
            </div>
            <div class="prog-track">
              <div class="prog-fill" style="width:50%"></div>
            </div>
            <div class="mod-footer mt-3">
              <div class="mod-chips">
                <span class="mod-chip"><i class="fas fa-play-circle"></i> 8 videos</span>
                <span class="mod-chip"><i class="fas fa-clock"></i> 3h 55m</span>
              </div>
              <button class="btn-start"><i class="fas fa-arrow-right"></i> Begin</button>
            </div>
          </div>
        </div>

        <!-- 06 Portfolio Management -->
        <div class="col-md-6 col-xl-4 reveal m-auto mb-4" data-cat="portfolio">
          <div class="mod-card" style="--ac:var(--green);--ac-soft:rgba(26,122,60,.07)">
            <span class="mod-num">06</span>
            <div class="mod-icon-wrap" style="background:rgba(26,122,60,.07);color:var(--green)"><i
                class="fas fa-wallet"></i></div>
            <div class="mod-label" style="color:var(--green)">Module 06</div>
            <div class="mod-title">Portfolio Management</div>
            <p class="mod-desc">Diversify intelligently across asset classes and balance risk vs return for sustainable
              long-term growth.</p>
            <div class="topic-list">
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--green)"></div>Diversification strategies
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--green)"></div>Asset allocation (Stocks, Crypto,
                Commodities)
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--green)"></div>Long-term vs short-term investing
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--green)"></div>Balancing risk vs return
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--green)"></div>Portfolio rebalancing
              </div>
            </div>
            <div class="prog-track" style="--ac:var(--green)">
              <div class="prog-fill" style="width:40%"></div>
            </div>
            <div class="mod-footer mt-3">
              <div class="mod-chips">
                <span class="mod-chip"><i class="fas fa-play-circle" style="color:var(--green)"></i> 7 videos</span>
                <span class="mod-chip"><i class="fas fa-clock" style="color:var(--green)"></i> 3h 30m</span>
              </div>
              <button class="btn-start" style="background:var(--green)"><i class="fas fa-arrow-right"></i>
                Begin</button>
            </div>
          </div>
        </div>

        <!-- 07 Global Market Insights -->
        <div class="col-md-6 col-xl-4 reveal m-auto mb-4" data-cat="global">
          <div class="mod-card" style="--ac:var(--teal);--ac-soft:rgba(13,115,119,.07)">
            <span class="mod-num">07</span>
            <div class="mod-icon-wrap" style="background:rgba(13,115,119,.07);color:var(--teal)"><i
                class="fas fa-globe"></i></div>
            <div class="mod-label" style="color:var(--teal)">Module 07</div>
            <div class="mod-title">Global Market Insights</div>
            <p class="mod-desc">Understand geopolitical events, cross-market correlations, and global economic forces
              shaping price action.</p>
            <div class="topic-list">
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--teal)"></div>Impact of geopolitical events
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--teal)"></div>Correlation between markets
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--teal)"></div>Currency strength &amp; weakness
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--teal)"></div>Commodity and stock relationships
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--teal)"></div>Global economic trends
              </div>
            </div>
            <div class="prog-track" style="--ac:var(--teal)">
              <div class="prog-fill" style="width:30%"></div>
            </div>
            <div class="mod-footer mt-3">
              <div class="mod-chips">
                <span class="mod-chip"><i class="fas fa-play-circle" style="color:var(--teal)"></i> 6 videos</span>
                <span class="mod-chip"><i class="fas fa-clock" style="color:var(--teal)"></i> 3h 15m</span>
              </div>
              <button class="btn-start" style="background:var(--teal)"><i class="fas fa-arrow-right"></i> Begin</button>
            </div>
          </div>
        </div>

        <!-- 08 Modern Trading Tools -->
        <div class="col-md-6 col-xl-4 reveal m-auto mb-4" data-cat="tools">
          <div class="mod-card" style="--ac:var(--navy);--ac-soft:rgba(26,46,90,.07)">
            <span class="mod-num">08</span>
            <div class="mod-icon-wrap" style="background:rgba(26,46,90,.07);color:var(--navy)"><i
                class="fas fa-robot"></i></div>
            <div class="mod-label" style="color:var(--navy)">Module 08</div>
            <div class="mod-title">Modern Trading Tools</div>
            <p class="mod-desc">Leverage platforms like MT4, MT5, TradingView, and automated systems to streamline
              data-driven decisions.</p>
            <div class="topic-list">
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--navy)"></div>Trading platforms (MT4, MT5, TradingView)
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--navy)"></div>Copy trading systems
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--navy)"></div>
                <span>Automated trading basics (Bots) <span class="highlight-chip ms-1"
                    style="--ac:var(--navy);border-color:var(--navy);color:var(--navy);background:rgba(26,46,90,.07);font-size:.58rem;padding:2px 8px"><i
                      class="fas fa-arrow-right"></i> Featured</span></span>
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--navy)"></div>Charting tools &amp; indicators
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--navy)"></div>Data-driven trading decisions
              </div>
            </div>
            <div class="prog-track" style="--ac:var(--navy)">
              <div class="prog-fill" style="width:25%"></div>
            </div>
            <div class="mod-footer mt-3">
              <div class="mod-chips">
                <span class="mod-chip"><i class="fas fa-play-circle" style="color:var(--navy)"></i> 8 videos</span>
                <span class="mod-chip"><i class="fas fa-clock" style="color:var(--navy)"></i> 4h 00m</span>
              </div>
              <button class="btn-start" style="background:var(--navy)"><i class="fas fa-arrow-right"></i> Begin</button>
            </div>
          </div>
        </div>

        <!-- 09 Financial Safety & Psychology -->
        <div class="col-md-6 col-xl-4 reveal m-auto mb-4" data-cat="psychology">
          <div class="mod-card" style="--ac:var(--zed-primary);--ac-soft:rgba(217,43,31,.07)">
            <span class="mod-num">09</span>
            <div class="mod-icon-wrap"><i class="fas fa-lock"></i></div>
            <div class="mod-label">Module 09</div>
            <div class="mod-title">Financial Safety &amp; Psychology</div>
            <p class="mod-desc">Build the mental resilience and discipline needed to trade consistently without letting
              emotions drive decisions.</p>
            <div class="topic-list">
              <div class="topic-item">
                <div class="topic-dot"></div>Trading psychology &amp; emotional control
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Avoiding scams &amp; fraud
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Discipline &amp; consistency
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Handling losses professionally
              </div>
              <div class="topic-item">
                <div class="topic-dot"></div>Building trader mindset
              </div>
            </div>
            <div class="prog-track">
              <div class="prog-fill" style="width:20%"></div>
            </div>
            <div class="mod-footer mt-3">
              <div class="mod-chips">
                <span class="mod-chip"><i class="fas fa-play-circle"></i> 7 videos</span>
                <span class="mod-chip"><i class="fas fa-clock"></i> 3h 20m</span>
              </div>
              <button class="btn-start"><i class="fas fa-arrow-right"></i> Begin</button>
            </div>
          </div>
        </div>

        <!-- 10 Advanced Financial Concepts -->
        <div class="col-md-6 col-xl-4 reveal m-auto mb-4" data-cat="advanced">
          <div class="mod-card" style="--ac:var(--gold);--ac-soft:rgba(176,125,26,.07)">
            <span class="mod-num">10</span>
            <div class="mod-icon-wrap" style="background:rgba(176,125,26,.07);color:var(--gold)"><i
                class="fas fa-rocket"></i></div>
            <div class="mod-label" style="color:var(--gold)">Module 10 · Pro</div>
            <div class="mod-title">Advanced Financial Concepts</div>
            <p class="mod-desc">Professional-level techniques used by hedge funds — derivatives, arbitrage, leverage,
              and institutional execution.</p>
            <div class="topic-list">
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--gold)"></div>Derivatives (Futures &amp; Options)
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--gold)"></div>Hedging strategies
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--gold)"></div>Arbitrage opportunities
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--gold)"></div>Leverage &amp; margin trading
              </div>
              <div class="topic-item">
                <div class="topic-dot" style="background:var(--gold)"></div>Institutional trading techniques
              </div>
            </div>
            <div class="prog-track" style="--ac:var(--gold)">
              <div class="prog-fill" style="width:10%"></div>
            </div>
            <div class="mod-footer mt-3">
              <div class="mod-chips">
                <span class="mod-chip"><i class="fas fa-play-circle" style="color:var(--gold)"></i> 12 videos</span>
                <span class="mod-chip"><i class="fas fa-clock" style="color:var(--gold)"></i> 6h 30m</span>
              </div>
              <button class="btn-start" style="background:var(--gold)"><i class="fas fa-lock-open"></i> Unlock</button>
            </div>
          </div>
        </div>

      </div><!-- /row -->
    </div>
  </section>

  <script>
    // Scroll reveal
    const revs = document.querySelectorAll('.reveal');
    const obs = new IntersectionObserver(entries => {
      entries.forEach((e, i) => {
        if (e.isIntersecting) {
          setTimeout(() => e.target.classList.add('in'), i * 65);
          obs.unobserve(e.target);
        }
      });
    }, { threshold: 0.08 });
    revs.forEach(r => obs.observe(r));

    // Re-trigger progress bars on card reveal
    const progObs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.querySelectorAll('.prog-fill').forEach(b => {
            b.style.animation = 'none';
            void b.offsetWidth;
            b.style.animation = 'progIn 1.2s .2s ease forwards';
          });
          progObs.unobserve(e.target);
        }
      });
    }, { threshold: 0.2 });
    document.querySelectorAll('.mod-card').forEach(c => progObs.observe(c));

    // Filter pills
    document.querySelectorAll('.fpill').forEach(p => {
      p.addEventListener('click', function () {
        document.querySelectorAll('.fpill').forEach(x => x.classList.remove('active'));
        this.classList.add('active');
        const f = this.dataset.f;
        document.querySelectorAll('#modgrid > [data-cat]').forEach(c => {
          c.style.display = (f === 'all' || c.dataset.cat === f) ? '' : 'none';
        });
      });
    });
  </script>

<?php
include_once ('elements/footer.php');
?>