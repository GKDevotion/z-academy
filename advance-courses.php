<?php 
include_once ('elements/header.php');
?>
    <style>
        
        .heading-font { 
            text-transform: uppercase; 
            letter-spacing: 4px; 
        }

        /* Next-Level Advanced Card */
        .advanced-card {
            /* background: var(--dark-navy); */
            border: 1px solid var(--dark-navy);
            border-radius: 0px; /* Sharp edges for a more aggressive professional look */
            position: relative;
            transition: all 0.3s ease;
            z-index: 1;
        }

        .advanced-card::after {
            content: '';
            position: absolute;
            inset: 0;
            border: 1px solid transparent;
            background: linear-gradient(45deg, var(--primary-teal), transparent, var(--primary-teal)) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
            mask-composite: exclude;
            opacity: 0;
            transition: 0.4s;
        }

        .advanced-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 0 40px var(--zed-backgound-color);
        }

        .advanced-card:hover::after {
            opacity: 1;
        }

        .status-dot {
            height: 8px;
            width: 8px;
            background-color: var(--primary-teal);
            border-radius: 50%;
            display: inline-block;
            margin-right: 10px;
            box-shadow: 0 0 10px var(--primary-teal);
            animation: pulse-red 2s infinite;
        }

        @keyframes pulse-red {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 var(--zed-backgound-color); }
            70% { transform: scale(1); box-shadow: 0 0 0 10px rgba(255, 0, 0, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(255, 0, 0, 0); }
        }

        .btn-elite {
            background: var(--primary-teal);
            color: white;
            /* font-family: 'Poppins', sans-serif; */
            font-size: 0.7rem;
            padding: 15px;
            border: none;
            width: 100%;
            clip-path: polygon(10% 0, 100% 0, 90% 100%, 0% 100%);
            transition: 0.3s;
        }

        .btn-elite:hover {
            background: white;
            color: black;
            letter-spacing: 2px;
        }

        .advanced-stat {
            font-size: 0.75rem;
            color: var(--dark-navy);
            border-top: 1px solid var(--text-muted);
            padding-top: 15px;
        }
    </style>

    <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Institutional <span style="color: var(--zed-primary);">Elite</span></h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Access high-frequency data, algo-tracking, and central bank sentiment analysis.</p>
            <div class="d-none open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
                <button class="rounded-pill">ZERO TO HERO</button>
            </div>
        </div>
    </header>

    <div class="container pb-5">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6">
                <div class="card p-4 advanced-card">
                    <div class="d-flex align-items-center mb-3">
                        <span class="status-dot"></span>
                        <span class="small fw-bold text-uppercase">Phase 07</span>
                    </div>
                    <h3 class="heading-font fs-5 mb-4">Algorithmic Tracking</h3>
                    <p class="text-secondary small">Identify "Iceberg Orders" and high-frequency trading (HFT) footprints in the order book.</p>
                    <div class="mb-4">
                        <code class="text-danger small">// Data Stream: Enabled</code><br>
                        <code class="text-muted small">// Latency: 0.04ms</code>
                    </div>
                    <button class="btn-elite">Access Terminal</button>
                    <div class="advanced-stat mt-4 d-flex justify-content-between">
                        <span>EST. ROI: HIGH</span>
                        <span>DURATION: 8 WEEKS</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card p-4 advanced-card">
                    <div class="d-flex align-items-center mb-3">
                        <span class="status-dot"></span>
                        <span class="small fw-bold text-uppercase">Phase 08</span>
                    </div>
                    <h3 class="heading-font fs-5 mb-4">Macro Fund Strategy</h3>
                    <p class="text-secondary small">Fundamental mastery: Interest rate differentials, COT reports, and Bond Yield correlations.</p>
                    <div class="mb-4">
                        <code class="text-danger small">// Correlation Matrix</code><br>
                        <code class="text-muted small">// COT Data: Updated</code>
                    </div>
                    <button class="btn-elite">Access Terminal</button>
                    <div class="advanced-stat mt-4 d-flex justify-content-between">
                        <span>EST. ROI: SCALE</span>
                        <span>DURATION: 12 WEEKS</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card p-4 advanced-card">
                    <div class="d-flex align-items-center mb-3">
                        <span class="status-dot"></span>
                        <span class="small fw-bold text-uppercase">Phase 09</span>
                    </div>
                    <h3 class="heading-font fs-5 mb-4">Prop Firm Mastery</h3>
                    <p class="text-secondary small">Specific strategies designed to pass $100k+ funding challenges with strict drawdown rules.</p>
                    <div class="mb-4">
                        <code class="text-danger small">// Risk: 0.25% Per Trade</code><br>
                        <code class="text-muted small">// Drawdown Limit: 5%</code>
                    </div>
                    <button class="btn-elite">Access Terminal</button>
                    <div class="advanced-stat mt-4 d-flex justify-content-between">
                        <span>EST. ROI: FUNDED</span>
                        <span>DURATION: 4 WEEKS</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card p-4 advanced-card">
                    <div class="d-flex align-items-center mb-3">
                        <span class="status-dot"></span>
                        <span class="small fw-bold text-uppercase">Phase 07</span>
                    </div>
                    <h3 class="heading-font fs-5 mb-4">Algorithmic Tracking</h3>
                    <p class="text-secondary small">Identify "Iceberg Orders" and high-frequency trading (HFT) footprints in the order book.</p>
                    <div class="mb-4">
                        <code class="text-danger small">// Data Stream: Enabled</code><br>
                        <code class="text-muted small">// Latency: 0.04ms</code>
                    </div>
                    <button class="btn-elite">Access Terminal</button>
                    <div class="advanced-stat mt-4 d-flex justify-content-between">
                        <span>EST. ROI: HIGH</span>
                        <span>DURATION: 8 WEEKS</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card p-4 advanced-card">
                    <div class="d-flex align-items-center mb-3">
                        <span class="status-dot"></span>
                        <span class="small fw-bold text-uppercase">Phase 08</span>
                    </div>
                    <h3 class="heading-font fs-5 mb-4">Macro Fund Strategy</h3>
                    <p class="text-secondary small">Fundamental mastery: Interest rate differentials, COT reports, and Bond Yield correlations.</p>
                    <div class="mb-4">
                        <code class="text-danger small">// Correlation Matrix</code><br>
                        <code class="text-muted small">// COT Data: Updated</code>
                    </div>
                    <button class="btn-elite">Access Terminal</button>
                    <div class="advanced-stat mt-4 d-flex justify-content-between">
                        <span>EST. ROI: SCALE</span>
                        <span>DURATION: 12 WEEKS</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card p-4 advanced-card">
                    <div class="d-flex align-items-center mb-3">
                        <span class="status-dot"></span>
                        <span class="small fw-bold text-uppercase">Phase 09</span>
                    </div>
                    <h3 class="heading-font fs-5 mb-4">Prop Firm Mastery</h3>
                    <p class="text-secondary small">Specific strategies designed to pass $100k+ funding challenges with strict drawdown rules.</p>
                    <div class="mb-4">
                        <code class="text-danger small">// Risk: 0.25% Per Trade</code><br>
                        <code class="text-muted small">// Drawdown Limit: 5%</code>
                    </div>
                    <button class="btn-elite">Access Terminal</button>
                    <div class="advanced-stat mt-4 d-flex justify-content-between">
                        <span>EST. ROI: FUNDED</span>
                        <span>DURATION: 4 WEEKS</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- MARQUEE -->
    <style>
        /* ━━━ MARQUEE ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ */
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

    </style>
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

    <style>
        /* ━━━ TOPIC CARDS (light bg) ━━━━━━━━━━━━━━━━━━━━━━ */
        .topic-card {
            background: #fff;
            border: 1.5px solid #e0e0d8;
            border-radius: 8px;
            padding: 1.5rem;
            height: 100%;
            transition: transform .35s, box-shadow .35s, border-color .3s;
            position: relative;
            overflow: hidden;
        }

        .topic-card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--clr, var(--zed-primary));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .35s ease;
        }

        .topic-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 48px rgba(0, 0, 0, .1);
            border-color: var(--clr-border, #e0e0d8);
        }

        .topic-card:hover::before {
            transform: scaleX(1);
        }

        .t-icon {
            width: 46px;
            height: 46px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: .85rem;
        }

        .topic-card h5 {
            font-size: .97rem;
            font-weight: 700;
            color: #0e0e0e;
            margin-bottom: .3rem;
            letter-spacing: -.01em;
        }

        .topic-card .tdesc {
            font-size: .8rem;
            color: #777;
            line-height: 1.65;
            margin-bottom: .85rem;
        }

        .sub-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sub-list li {
            font-size: .78rem;
            color: #444;
            padding: .25rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, .04);
            display: flex;
            align-items: center;
            gap: .45rem;
        }

        .sub-list li:last-child {
            border: none;
        }

        .sub-list li i {
            font-size: .5rem;
            color: #aaa;
        }

        .chip {
            display: inline-block;
            margin-top: .8rem;
            font-size: .64rem;
            font-weight: 800;
            padding: .2rem .65rem;
            border-radius: 4px;
            letter-spacing: .08em;
            text-transform: uppercase;
        }

        .ic-red {
            background: rgba(232, 17, 26, .08);
            color: var(--zed-primary);
        }

        .ic-blue {
            background: rgba(59, 130, 246, .1);
            color: #3b82f6;
        }

        .ic-green {
            background: rgba(34, 197, 94, .1);
            color: #16a34a;
        }

        .ic-gold {
            background: rgba(240, 165, 0, .1);
            color: #b45309;
        }

        .ic-purple {
            background: rgba(167, 139, 250, .1);
            color: #7c3aed;
        }

        .ic-teal {
            background: rgba(20, 184, 166, .1);
            color: #0d9488;
        }

        .ic-orange {
            background: rgba(249, 115, 22, .1);
            color: #ea580c;
        }

        .ic-cyan {
            background: rgba(6, 182, 212, .1);
            color: #0284c7;
        }

        .ic-rose {
            background: rgba(244, 63, 94, .1);
            color: #e11d48;
        }

        .cp-red {
            background: rgba(232, 17, 26, .07);
            color: var(--zed-primary);
            border: 1px solid rgba(232, 17, 26, .2);
        }

        .cp-blue {
            background: rgba(59, 130, 246, .07);
            color: #3b82f6;
            border: 1px solid rgba(59, 130, 246, .2);
        }

        .cp-green {
            background: rgba(34, 197, 94, .07);
            color: #16a34a;
            border: 1px solid rgba(34, 197, 94, .2);
        }

        .cp-gold {
            background: rgba(240, 165, 0, .07);
            color: #b45309;
            border: 1px solid rgba(240, 165, 0, .2);
        }

        .cp-purple {
            background: rgba(167, 139, 250, .07);
            color: #7c3aed;
            border: 1px solid rgba(167, 139, 250, .2);
        }

        .cp-teal {
            background: rgba(20, 184, 166, .07);
            color: #0d9488;
            border: 1px solid rgba(20, 184, 166, .2);
        }

        .cp-orange {
            background: rgba(249, 115, 22, .07);
            color: #ea580c;
            border: 1px solid rgba(249, 115, 22, .2);
        }

        .cp-cyan {
            background: rgba(6, 182, 212, .07);
            color: #0284c7;
            border: 1px solid rgba(6, 182, 212, .2);
        }

        .cp-rose {
            background: rgba(244, 63, 94, .07);
            color: #e11d48;
            border: 1px solid rgba(244, 63, 94, .2);
        }

        /* ━━━ SECTION SHARED ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ */
        .sec {
            padding: 88px 0;
        }

        .sec-2 {
            background: var(--zed-banner-bg-end);
        }

        .sec-3 {
            background: var(--zed-backgound-color);
        }

        .sec-off {
            background: var(--zed-banner-bg-start);
        }

        .hdiv {
            height: 1px;
            background: var(--zed-border-color);
        }

        .mono-eyebrow {
            display: inline-block;
            font-size: .7rem; 
            font-weight: 800;
            letter-spacing: .2em; 
            text-transform: uppercase;
            color: var(--zed-primary); 
            margin-bottom: .75rem;
        }

        .sec-h {
            font-size: clamp(1.7rem, 4vw, 2.8rem);
            font-weight: 700;
            letter-spacing: -.04em;
            color: #fff;
            line-height: 1.1;
        }

        .sec-off .sec-h {
            color: var(--zed-dark-text);
        }

        .sec-p {
            font-size: .9rem;
            color: var(--zed-secondary);
            font-weight: 400;
            max-width: 460px;
            line-height: 1.7;
        }

        .sec-off .sec-p {
            color: #666;
        }

        .sec-off .mono-eyebrow {
            color: var(--zed-primary);
        }
    </style>

    <section class="sec sec-off" id="topics">
        <div class="container">
            <div class="text-center mb-5">
                <span class="mono-eyebrow rv" style="color:var(--zed-primary)">Market Intelligence</span>
                <h2 class="sec-h rv" style="color:#0e0e0e">Elite-Level Market Coverage</h2>
                <p class="sec-p mx-auto rv" style="color:#666">Every asset class analyzed at institutional depth — from HFT
                equity flow to crypto on-chain forensics and macro bond signals.</p>
            </div>
            <div class="row g-4">

                <!-- STOCKS -->
                <div class="col-sm-6 col-lg-4 rv">
                    <div class="topic-card" style="--clr:#3b82f6;--clr-border:#bfdbfe">
                        <div class="t-icon ic-blue"><i class="bi bi-graph-up-arrow"></i></div>
                        <h5>Stocks — Elite</h5>
                        <p class="tdesc">Dark pool flow, gamma exposure, unusual options activity and institutional accumulation
                        patterns.</p>
                        <ul class="sub-list">
                        <li><i class="bi bi-dot"></i>Dark Pool Print Analysis</li>
                        <li><i class="bi bi-dot"></i>Gamma Squeeze Setups</li>
                        <li><i class="bi bi-dot"></i>Institutional Block Trades</li>
                        <li><i class="bi bi-dot"></i>Short Interest + CTB</li>
                        </ul>
                        <span class="chip cp-blue">Institutional Flow</span>
                    </div>
                </div>

                <!-- FUTURES -->
                <div class="col-sm-6 col-lg-4 rv rv-d1">
                    <div class="topic-card" style="--clr:#ea580c;--clr-border:#fed7aa">
                        <div class="t-icon ic-orange"><i class="bi bi-bar-chart-steps"></i></div>
                        <h5>Futures — Elite</h5>
                        <p class="tdesc">COT large trader positioning, basis trades, calendar spreads and roll-yield harvesting
                        strategies.</p>
                        <ul class="sub-list">
                        <li><i class="bi bi-dot"></i>COT Large Trader Positioning</li>
                        <li><i class="bi bi-dot"></i>Basis &amp; Calendar Spreads</li>
                        <li><i class="bi bi-dot"></i>Roll Yield Harvesting</li>
                        <li><i class="bi bi-dot"></i>Micro Futures Precision</li>
                        </ul>
                        <span class="chip cp-orange">Derivatives Elite</span>
                    </div>
                </div>

                <!-- CRYPTO -->
                <div class="col-sm-6 col-lg-4 rv rv-d2">
                    <div class="topic-card" style="--clr:#7c3aed;--clr-border:#ddd6fe">
                        <div class="t-icon ic-purple"><i class="bi bi-currency-bitcoin"></i></div>
                        <h5>Crypto — Elite</h5>
                        <p class="tdesc">On-chain forensics, exchange inflow/outflow, miner capitulation signals and perpetual
                        funding extremes.</p>
                        <ul class="sub-list">
                        <li><i class="bi bi-dot"></i>Exchange Inflow/Outflow</li>
                        <li><i class="bi bi-dot"></i>Miner Capitulation Signals</li>
                        <li><i class="bi bi-dot"></i>Perp Funding Rate Extremes</li>
                        <li><i class="bi bi-dot"></i>Whale Wallet Tracking</li>
                        </ul>
                        <span class="chip cp-purple">On-Chain Elite</span>
                    </div>
                </div>

                <!-- COMMODITIES -->
                <div class="col-sm-6 col-lg-4 rv">
                    <div class="topic-card" style="--clr:#16a34a;--clr-border:#bbf7d0">
                        <div class="t-icon ic-green"><i class="bi bi-droplet-fill"></i></div>
                        <h5>Commodities — Elite</h5>
                        <p class="tdesc">EIA inventory surprises, OPEC+ production data, weather derivatives and commodity-currency
                        carry trades.</p>
                        <ul class="sub-list">
                        <li><i class="bi bi-dot"></i>EIA Inventory Surprises</li>
                        <li><i class="bi bi-dot"></i>OPEC+ Production Flow</li>
                        <li><i class="bi bi-dot"></i>Weather Derivatives</li>
                        <li><i class="bi bi-dot"></i>Commodity-Currency Carry</li>
                        </ul>
                        <span class="chip cp-green">Macro Commodities</span>
                    </div>
                </div>

                <!-- METALS -->
                <div class="col-sm-6 col-lg-4 rv rv-d1">
                    <div class="topic-card" style="--clr:#b45309;--clr-border:#fde68a">
                        <div class="t-icon ic-gold"><i class="bi bi-gem"></i></div>
                        <h5>Metals — Elite</h5>
                        <p class="tdesc">COMEX futures positioning, central bank gold buying, LBMA physical vs paper divergence.</p>
                        <ul class="sub-list">
                        <li><i class="bi bi-dot"></i>COMEX Futures COT</li>
                        <li><i class="bi bi-dot"></i>Central Bank Gold Flows</li>
                        <li><i class="bi bi-dot"></i>LBMA Physical vs Paper</li>
                        <li><i class="bi bi-dot"></i>Gold/Silver Ratio Signals</li>
                        </ul>
                        <span class="chip cp-gold">Precious Metals Pro</span>
                    </div>
                </div>

                <!-- ECONOMICS -->
                <div class="col-sm-6 col-lg-4 rv rv-d2">
                    <div class="topic-card" style="--clr:var(--zed-primary);--clr-border:#fecaca">
                        <div class="t-icon ic-red"><i class="bi bi-bank2"></i></div>
                        <h5>Economics — Elite</h5>
                        <p class="tdesc">Fed dot plot decoding, Taylor Rule modeling, global liquidity cycles and cross-asset macro
                        rotation.</p>
                        <ul class="sub-list">
                        <li><i class="bi bi-dot"></i>Fed Dot Plot Decoding</li>
                        <li><i class="bi bi-dot"></i>Global Liquidity Cycles</li>
                        <li><i class="bi bi-dot"></i>Taylor Rule Modeling</li>
                        <li><i class="bi bi-dot"></i>Cross-Asset Macro Rotation</li>
                        </ul>
                        <span class="chip cp-red">Macro Elite</span>
                    </div>
                </div>

                <!-- BONDS -->
                <div class="col-sm-6 col-lg-4 rv">
                    <div class="topic-card" style="--clr:#0d9488;--clr-border:#99f6e4">
                        <div class="t-icon ic-teal"><i class="bi bi-safe"></i></div>
                        <h5>Bonds — Elite</h5>
                        <p class="tdesc">Real yield modeling, TIPS breakeven analysis, foreign central bank UST demand and
                        carry/roll strategies.</p>
                        <ul class="sub-list">
                        <li><i class="bi bi-dot"></i>Real Yield + TIPS Breakeven</li>
                        <li><i class="bi bi-dot"></i>Foreign CB UST Demand</li>
                        <li><i class="bi bi-dot"></i>Carry &amp; Roll Down Strategy</li>
                        <li><i class="bi bi-dot"></i>Credit Spread Signals</li>
                        </ul>
                        <span class="chip cp-teal">Fixed Income Pro</span>
                    </div>
                </div>

                <!-- FUNDAMENTALS -->
                <div class="col-sm-6 col-lg-4 rv rv-d1">
                    <div class="topic-card" style="--clr:#0284c7;--clr-border:#bae6fd">
                        <div class="t-icon ic-cyan"><i class="bi bi-journal-richtext"></i></div>
                        <h5>Fundamentals — Elite</h5>
                        <p class="tdesc">Forensic accounting, earnings quality scoring, insider cluster tracking and activist
                        investor screening.</p>
                        <ul class="sub-list">
                        <li><i class="bi bi-dot"></i>Forensic Accounting</li>
                        <li><i class="bi bi-dot"></i>Earnings Quality Score</li>
                        <li><i class="bi bi-dot"></i>Insider Cluster Tracking</li>
                        <li><i class="bi bi-dot"></i>Activist Investor Screening</li>
                        </ul>
                        <span class="chip cp-cyan">Deep Valuation</span>
                    </div>
                </div>

                <!-- TAXES -->
                <div class="col-sm-6 col-lg-4 rv rv-d2">
                    <div class="topic-card" style="--clr:#e11d48;--clr-border:#fecdd3">
                        <div class="t-icon ic-rose"><i class="bi bi-receipt-cutoff"></i></div>
                        <h5>Taxes — Elite</h5>
                        <p class="tdesc">Prop firm tax treatment, offshore fund structures, Section 1256 contracts and crypto
                        staking tax strategy.</p>
                        <ul class="sub-list">
                        <li><i class="bi bi-dot"></i>Prop Firm Tax Treatment</li>
                        <li><i class="bi bi-dot"></i>Section 1256 Contracts</li>
                        <li><i class="bi bi-dot"></i>Offshore Fund Structures</li>
                        <li><i class="bi bi-dot"></i>Crypto Staking Tax Strategy</li>
                        </ul>
                        <span class="chip cp-rose">Elite Tax Strategy</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="hdiv" style="background:rgba(0,0,0,.12)"></div>

    <!-- TERMINAL FEATURES -->
    <style>
        .feat-card {
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .07);
            border-radius: 16px;
            padding: 1.6rem;
            transition: background .3s, border-color .3s, transform .3s
        }

        .feat-card:hover {
            background: rgba(255, 255, 255, .07);
            border-color: var(--zed-primary-hover);
            transform: translateY(-4px)
        }

        .feat-icon {
            width: 44px;
            height: 44px;
            background: var(--zed-light-red-hover);
            color: var(--zed-primary);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.15rem;
            margin-bottom: .85rem;
        }

        .feat-card h6 {
            font-size: .78rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: .3rem;
            letter-spacing: .04em;
            text-transform: uppercase;
        }

        .feat-card p {
            font-size: .81rem;
            color: var(--zed-secondary);
            margin: 0;
            line-height: 1.65;
        }
    </style>
    <section class="sec sec-2" style="background-color: var(--zed-dark-text);" id="terminal">
        <div class="container">
            <div class="text-center mb-5">
                <span class="mono-eyebrow rv">System Features</span>
                <h2 class="sec-h rv">The Elite Terminal</h2>
                <p class="sec-p mx-auto rv">Institutional-grade tools built for traders who demand the edge that retail
                platforms can't provide.</p>
            </div>
            <div class="row g-3">
                <div class="col-sm-6 col-xl-3 rv">
                    <div class="feat-card">
                        <div class="feat-icon"><i class="bi bi-broadcast-pin"></i></div>
                        <h6>Live HFT Feed</h6>
                        <p>Real-time high-frequency order book data with iceberg detection and dark pool print alerts at 0.04ms
                        latency.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 rv rv-d1">
                    <div class="feat-card">
                        <div class="feat-icon"><i class="bi bi-diagram-3"></i></div>
                        <h6>COT Intelligence</h6>
                        <p>Weekly COT report parsing with commercial vs non-commercial positioning extremes flagged automatically.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 rv rv-d2">
                    <div class="feat-card">
                        <div class="feat-icon"><i class="bi bi-building"></i></div>
                        <h6>Central Bank Tracker</h6>
                        <p>Fed, ECB, BOJ and PBoC language sentiment scoring with dot plot projections updated after every press
                        conference.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 rv rv-d3">
                    <div class="feat-card">
                        <div class="feat-icon"><i class="bi bi-shield-fill-check"></i></div>
                        <h6>Prop Firm Simulator</h6>
                        <p>Practice passing $100K challenges with our simulated drawdown enforcer, daily loss limits and target
                        tracker.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="hdiv"></div>

    <!-- TESTIMONIALS (light) -->
    <style>
        .t-card {
            background: #fff;
            border: 1.5px solid var(--zed-border-color);
            border-radius: 8px;
            padding: 1.8rem;
            height: 100%;
            transition: transform .3s, box-shadow .3s;
        }

        .t-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 48px var(--zed-border-color);
        }

        .stars {
            color: var(--zed-primary);
            font-size: .85rem;
            margin-bottom: .8rem;
        }

        .t-card q {
            font-size: .87rem;
            color: #333;
            line-height: 1.72;
            font-style: italic;
            display: block;
            margin-bottom: 1.2rem;
        }

        .t-av {
            width: 38px;
            height: 38px;
            background: var(--zed-primary);
            color: #fff;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: .8rem;
            flex-shrink: 0;
        }

        .t-name {
            font-weight: 700;
            font-size: .85rem;
            color: var(--zed-dark-text);
        }

        .t-role {
            font-size: .72rem;
            color: var(--zed-secondary);
        }
    </style>
    <section class="sec sec-off" id="reviews">
        <div class="container">
            <div class="text-center mb-5">
                <span class="mono-eyebrow rv" style="color:var(--zed-primary)">Operator Reviews</span>
                <h2 class="sec-h rv" style="color:#0e0e0e">Funded. Scaled. Verified.</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4 rv">
                    <div class="t-card">
                        <div class="stars">★★★★★</div>
                        <q>Phase 07 on Algorithmic Tracking is unlike anything I've seen in any trading course. Identifying iceberg
                        orders in real time completely changed how I approach the order book. Passed my Apex $100K challenge first
                        attempt.</q>
                        <div class="d-flex align-items-center gap-2 mt-3">
                        <div class="t-av">RK</div>
                        <div>
                            <div class="t-name">Rahul Kothari</div>
                            <div class="t-role">HFT Trader · Mumbai · $100K Funded</div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 rv rv-d1">
                    <div class="t-card">
                        <div class="stars">★★★★★</div>
                        <q>The Macro Fund Strategy phase gave me a complete framework for reading COT reports and bond yield
                        correlations. I now trade with a macro bias that aligns with what the big funds are doing — not against
                        them.</q>
                        <div class="d-flex align-items-center gap-2 mt-3">
                        <div class="t-av">SP</div>
                        <div>
                            <div class="t-name">Sneha Patel</div>
                            <div class="t-role">Macro Trader · Ahmedabad · $200K Funded</div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 rv rv-d2">
                    <div class="t-card">
                        <div class="stars">★★★★☆</div>
                        <q>Prop Firm Mastery is exactly what it says — mastery. The 0.25% risk rule and drawdown discipline taught
                        here is the single reason I now have three funded accounts running simultaneously.</q>
                        <div class="d-flex align-items-center gap-2 mt-3">
                        <div class="t-av">AM</div>
                        <div>
                            <div class="t-name">Arjun Mehta</div>
                            <div class="t-role">Prop Trader · Surat · 3x Funded</div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA BAND -->
    <style>
        .cta-band {
            background: var(--zed-dark-text);
            padding: 80px 0;
            text-align: center;
            border-top: 1px solid var(--zed-border-color);
            border-bottom: 1px solid var(--zed-border-color);
            position: relative;
            overflow: hidden;
        }

        .cta-band::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: linear-gradient(rgba(232, 17, 26, .04) 1px, transparent 1px), linear-gradient(90deg, rgba(232, 17, 26, .04) 1px, transparent 1px);
            background-size: 40px 40px;
            mask-image: radial-gradient(ellipse 70% 70% at 50% 50%, black 20%, transparent 80%);
        }

        .cta-band h2 {
            font-size: clamp(2rem, 5vw, 3.4rem);
            font-weight: 700;
            color: #fff;
            letter-spacing: -.04em;
            position: relative;
            z-index: 1;
        }

        .cta-band h2 em {
            font-style: normal;
            color: var(--zed-primary);
        }

        .cta-band p {
            color: var(--zed-secondary);
            max-width: 450px;
            margin: .9rem auto 2.2rem;
            position: relative;
            z-index: 1;
            font-size: .92rem;
        }

        .cta-btns {
            position: relative;
            z-index: 1;
        }

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
    </style>
    <section class="cta-band" id="enroll">
        <div class="container">
            <h2>Access the<br><em>Institutional Elite</em> Terminal</h2>
            <p>Join the operators running HFT trackers, COT feeds, central bank sentiment and live funded accounts — all from
                one platform.</p>
            <div class="cta-btns d-flex justify-content-center gap-3 flex-wrap">
                <a href="#phases" class="btn-hero">Access Terminal <i class="bi bi-terminal ms-2"></i></a>
                <a href="#topics" class="btn-white" style="border-radius:6px;padding:1rem 2.2rem">Browse Markets</a>
            </div>
        </div>
    </section>

    <script>
        const nav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => nav.classList.toggle('raised', scrollY > 40));
        const io = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
        }, { threshold: 0.1 });
        document.querySelectorAll('.rv').forEach(el => io.observe(el));
  </script>
<?php
include_once ('elements/footer.php');
?>