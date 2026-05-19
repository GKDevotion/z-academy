<?php 
include_once ('elements/header.php');
?>

    <style>
       
        /* --- ELITE HEADER LOOKOUT --- */
        .educator-hero {
            min-height: 100vh;
            background: linear-gradient(135deg, #000 58%, #fff 60%);
            display: flex;
            align-items: center;
            position: relative;
        }

        @media (max-width: 991px) {
            .educator-hero { background: #000; color: white; padding: 120px 0; }
            .hero-text { text-align: center; }
        }

        .display-hero { font-size: clamp(3.5rem, 8vw, 6rem); font-weight: 900; line-height: 0.85; letter-spacing: -4px; color: white; }
        .accent-red { color: var(--primary); text-shadow: 0 0 20px var(--primary-glow); }

        /* --- TERMINAL CARDS --- */
        .terminal-card {
            background: var(--dark-terminal);
            border: 1px solid var(--zed-border-color-color);
            padding: 40px;
            transition: var(--transition);
            border-radius: 4px;
            height: 100%;
        }
        .terminal-card:hover { border-color: var(--primary); transform: translateY(-10px); box-shadow: 0 20px 40px rgba(255,0,0,0.1); }

        /* --- PROGRESS / DATA BARS --- */
        .data-bar { height: 4px; background: #333; width: 100%; margin-top: 10px; position: relative; overflow: hidden; }
        .data-fill { height: 100%; background: var(--primary); width: 0; transition: width 2s ease-in-out; }

        /* --- CURRICULUM SECTION --- */
        .curriculum-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1px; background: #eee; border: 1px solid #eee; }
        .curriculum-item { background: white; padding: 50px; transition: var(--transition); }
        .curriculum-item:hover { background: var(--primary); color: white; }

        /* --- STATS OVERLAY --- */
        .stats-float { background: white; border-left: 5px solid var(--primary); padding: 20px 40px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }

        .btn-elite { padding: 20px 50px; background: var(--primary); color: white; font-weight: 900; border: none; letter-spacing: 2px; }
        .btn-elite:hover { background: white; color: black; transform: scale(1.05); }
    </style>


    <section class="educator-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-text" data-aos="fade-right">
                    <h6 class="text-white opacity-50 fw-bold text-uppercase mb-4">Institutional Grade Education</h6>
                    <h1 class="display-hero">DECODE <br>THE <span class="accent-red">ALGO.</span></h1>
                    <p class="text-white opacity-75 lead mt-4 mb-5" style="max-width: 500px;">Advanced system mentorship for quantitative traders. We don't teach patterns; we teach market mechanics and order flow dominance.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn-elite">JOIN THE ELITE</button>
                        <button class="btn btn-outline-warning rounded-0 px-5 py-3 fw-bold">VIEW SYSTEMS</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light" style="position: relative; z-index: 10;">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="stats-float">
                        <small class="text-muted text-uppercase">Avg. Monthly Yield</small>
                        <h2 class="fw-black mb-0">+12.4%</h2>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="stats-float">
                        <small class="text-muted text-uppercase">Win Rate (Verified)</small>
                        <h2 class="fw-black mb-0">68.2%</h2>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="stats-float">
                        <small class="text-muted text-uppercase">Risk-Reward Ratio</small>
                        <h2 class="fw-black mb-0">1:4.5</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding container py-5">
        <div class="row mb-5 align-items-end">
            <div class="col-md-6">
                <h2 class="display-5 fw-bold">The Systems <br><span class="text-danger">Architecture</span></h2>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="text-muted">Moving beyond retail indicators into the world of smart money liquidity.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="terminal-card">
                    <i class="fas fa-code-branch text-danger fs-1 mb-4"></i>
                    <h3>Liquidity & Inducement</h3>
                    <p class="opacity-50">Master the art of spotting stop-hunts before they happen. Understand where institutions are trapping retail "breakout" traders.</p>
                    <div class="data-bar"><div class="data-fill" style="width: 85%;"></div></div>
                    <small class="mt-2 d-block opacity-25">MODULE COMPLEXITY: HIGH</small>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="terminal-card">
                    <i class="fas fa-microchip text-danger fs-1 mb-4"></i>
                    <h3>High-Frequency Flow</h3>
                    <p class="opacity-50">Analyzing the Tape and Footprint charts to see real-time aggressive buying and selling pressure inside the candles.</p>
                    <div class="data-bar"><div class="data-fill" style="width: 95%;"></div></div>
                    <small class="mt-2 d-block opacity-25">MODULE COMPLEXITY: EXPERT</small>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container py-5 text-center">
            <h2 class="fw-bold mb-5">Mastery Path</h2>
            <div class="curriculum-grid">
                <div class="curriculum-item" data-aos="zoom-in">
                    <h2 class="fw-bold">01</h2>
                    <h5>System Coding</h5>
                    <p class="small text-muted mb-0">Learn to backtest your logic using Python and PineScript for true data validation.</p>
                </div>
                <div class="curriculum-item" data-aos="zoom-in">
                    <h2 class="fw-bold">02</h2>
                    <h5>Correlation Hedges</h5>
                    <p class="small text-muted mb-0">Utilizing Bond Yields and DXY to hedge your FX positions against market shock.</p>
                </div>
                <div class="curriculum-item" data-aos="zoom-in">
                    <h2 class="fw-bold">03</h2>
                    <h5>Position Scaling</h5>
                    <p class="small text-muted mb-0">The math of adding to winners and neutralizing risk using breakeven stops.</p>
                </div>
                <div class="curriculum-item" data-aos="zoom-in">
                    <h2 class="fw-bold">04</h2>
                    <h5>Prop Firm Mastery</h5>
                    <p class="small text-muted mb-0">Pass funding challenges with 100% mechanical rules and zero emotion.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <h2 class="fw-bold">The Anti-Loss <br><span class="text-danger">Matrix</span></h2>
                <p class="text-muted my-4">Elite traders spend 80% of their time calculating risk. This table illustrates our proprietary Risk-Adjustment model.</p>
                <div class="bg-dark p-4 text-white">
                    <h6 class="text-danger">KEY FORMULA:</h6>
                    <p class="mb-0 font-monospace">Risk = (Equity * 0.01) / ATR(14)</p>
                </div>
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0" data-aos="fade-left">
                <div class="table-responsive">
                    <table class="table table-dark table-hover mb-0">
                        <thead>
                            <tr><th>Market Regime</th><th>Lot Size</th><th>Max DD</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>High Volatility</td><td>0.5x Standard</td><td>-1.0%</td></tr>
                            <tr><td>Mean Reversion</td><td>1.0x Standard</td><td>-2.5%</td></tr>
                            <tr class="table-danger"><td>Trend Following</td><td>2.0x Standard</td><td>-5.0%</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <style>
    
        /* ── SECTION HEADINGS ── */
        .sec-head {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 32px;
        }

        .sec-icon {
            font-size: 1.4rem;
            flex-shrink: 0;
        }

        .sec-title {
            
            font-size: clamp(1.3rem, 3vw, 1.8rem);
            font-weight: 700;
            color: var(--zed-dark-text);
        }

        .sec-line {
            flex: 1;
            height: 1px;
            background: var(--zed-border-color);
        }

        /* ── CONCEPT CARDS (white) ── */
        .concept-card {
            background: var(--zed-light-bg);
            border: 1px solid var(--zed-border-color);
            padding: 24px 22px;
            position: relative;
            overflow: hidden;
            transition: transform .28s, box-shadow .28s, border-color .28s;
            height: 100%;
        }

        .concept-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--ac, var(--zed-primary));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .3s ease;
        }

        .concept-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 44px rgba(0, 0, 0, .07);
            border-color: var(--ac, var(--zed-primary));
        }

        .concept-card:hover::before {
            transform: scaleX(1);
        }

        .concept-label {
            
            font-size: .6rem;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--ac, var(--zed-primary));
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .concept-label::after {
            content: '';
            display: block;
            width: 24px;
            height: 1px;
            background: var(--ac, var(--zed-primary));
        }

        .concept-title {
            
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .concept-text {
            font-size: .82rem;
            color: var(--zed-secondary);
            line-height: 1.78;
        }

        .concept-text strong {
            color: var(--zed-dark-text);
            font-weight: 600;
        }

        /* ── FORMULA CARDS (dark) ── */
        .formula-card {
            background: var(--zed-dark-text);
            border: 1px solid rgba(255, 255, 255, .06);
            border-radius: 2px;
            padding: 28px 26px;
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .formula-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--fc, var(--gold));
        }

        .formula-label {
            
            font-size: .58rem;
            font-weight: 600;
            letter-spacing: .25em;
            text-transform: uppercase;
            color: var(--fc, var(--gold));
            margin-bottom: 14px;
            opacity: .8;
        }

        .formula-main {
            
            font-size: clamp(.95rem, 2.5vw, 1.3rem);
            font-weight: 600;
            color: #fff;
            line-height: 1.5;
            margin-bottom: 16px;
            border-left: 3px solid var(--fc, var(--gold));
            padding-left: 16px;
        }

        .formula-main em {
            font-style: italic;
            color: rgba(255, 255, 255, .55);
        }

        .formula-vars {
            margin-bottom: 16px;
        }

        .formula-var {
            
            font-size: .75rem;
            color: rgba(255, 255, 255, .5);
            line-height: 1.7;
        }

        .formula-var b {
            color: rgba(255, 255, 255, .8);
        }

        .formula-example {
            background: rgba(255, 255, 255, .04);
            border: 1px solid rgba(255, 255, 255, .07);
            padding: 12px 14px;
            margin-top: 14px;
            border-radius: 1px;
        }

        .formula-eg-label {
            
            font-size: .58rem;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--fc, var(--gold));
            opacity: .7;
            margin-bottom: 6px;
        }

        .formula-eg-text {
            font-size: .78rem;
            color: rgba(255, 255, 255, .55);
            line-height: 1.65;
        }

        .formula-eg-text b {
            color: rgba(255, 255, 255, .8);
        }

        .formula-note {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            margin-top: 14px;
            padding: 10px 12px;
            background: rgba(255, 200, 0, .05);
            border: 1px solid rgba(255, 200, 0, .12);
            border-radius: 1px;
        }

        .formula-note i {
            color: #fbbf24;
            font-size: .75rem;
            margin-top: 2px;
            flex-shrink: 0;
        }

        .formula-note-text {
            font-size: .75rem;
            color: rgba(255, 255, 255, .5);
            line-height: 1.6;
        }

        .formula-note-text b {
            color: #fbbf24;
        }

        /* green check rows inside formula cards */
        .check-row {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            
            font-size: .74rem;
            color: rgba(255, 255, 255, .5);
            line-height: 1.6;
            margin-bottom: 4px;
        }

        .check-row i {
            color: #4ade80;
            font-size: .65rem;
            margin-top: 3px;
            flex-shrink: 0;
        }

        .check-row b {
            color: rgba(255, 255, 255, .8);
        }

        /* Key levels highlighted text */
        .key-levels {
            
            font-size: clamp(.9rem, 2vw, 1.15rem);
            font-weight: 600;
            color: #fff;
            line-height: 1.8;
            margin-bottom: 16px;
            padding-left: 16px;
            border-left: 3px solid var(--gold);
        }

        .key-levels .hl {
            color: var(--gold);
        }

        .key-levels .hl-red {
            color: #f87171;
        }

        /* ── TOOL CARDS ── */
        .tool-card {
            border: 1px solid var(--zed-border-color);
            border-top: 2px solid var(--ac, var(--zed-primary));
            padding: 20px 18px;
            height: 100%;
            transition: transform .26s, box-shadow .26s;
        }

        .tool-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 32px rgba(0, 0, 0, .07);
        }

        .tool-label {
            
            font-size: .58rem;
            font-weight: 600;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--zed-secondary);
            margin-bottom: 8px;
        }

        .tool-title {
            
            font-size: 1rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            margin-bottom: 10px;
        }

        .tool-text {
            font-size: .78rem;
            color: var(--zed-secondary);
            line-height: 1.75;
        }

        .tool-text strong {
            color: var(--zed-dark-text);
            font-weight: 600;
        }

        .tool-arrow {
            font-size: .75rem;
            color: var(--zed-secondary);
            margin: 3px 0;
        }

        /* ── STEP LIST ── */
        .step-item {
            display: flex;
            gap: 20px;
            padding: 20px 0;
            border-bottom: 1px solid var(--shadow);
            position: relative;
        }

        .step-item:last-child {
            border-bottom: none;
        }

        .step-num {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--zed-dark-text);
            color: #fff;
            
            font-size: 1rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-style: italic;
        }

        .step-content {}

        .step-title {
            
            font-size: 1rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            margin-bottom: 6px;
        }

        .step-title span {
            color: var(--zed-primary);
        }

        .step-text {
            font-size: .82rem;
            color: var(--zed-secondary);
            line-height: 1.75;
        }

        .step-text strong {
            color: var(--zed-dark-text);
            font-weight: 600;
        }

        .step-connector {
            position: absolute;
            left: 18px;
            top: 56px;
            width: 1px;
            height: calc(100% - 56px);
            background: var(--zed-border-color);
        }

        .step-item:last-child .step-connector {
            display: none;
        }

        /* ── TIMEFRAME GRID ── */
        .tf-card {
            border: 1px solid var(--zed-border-color);
            padding: 20px;
            height: 100%;
            transition: border-color .2s, transform .25s;
        }

        .tf-card:hover {
            border-color: var(--zed-dark-text);
            transform: translateY(-3px);
        }

        .tf-label {
            
            font-size: .6rem;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--zed-secondary);
            margin-bottom: 6px;
        }

        .tf-timeframe {
            
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--zed-primary);
            margin-bottom: 4px;
        }

        .tf-role {
            font-size: .7rem;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--zed-dark-text);
            margin-bottom: 10px;
        }

        .tf-text {
            font-size: .78rem;
            color: var(--zed-secondary);
            line-height: 1.7;
        }

        /* ── MINDSET CARD (dark) ── */
        .mindset-card {
            background: var(--zed-dark-text);
            border: 1px solid rgba(255, 255, 255, .06);
            padding: 52px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .mindset-card::before {
            content: '';
            position: absolute;
            top: -60px;
            left: 50%;
            transform: translateX(-50%);
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(200, 149, 26, .08) 0%, transparent 70%);
            pointer-events: none;
        }

        .mindset-quote {
            
            font-size: clamp(.95rem, 2.5vw, 1.4rem);
            font-style: italic;
            color: rgba(255, 255, 255, .75);
            line-height: 1.75;
            max-width: 680px;
            margin: 0 auto 28px;
            position: relative;
        }

        .mindset-quote::before,
        .mindset-quote::after {
            font-size: 4rem;
            color: var(--gold);
            opacity: .3;
            line-height: 0;
            vertical-align: -.4em;
        }

        .mindset-quote::before {
            content: '\201C';
            margin-right: 6px;
        }

        .mindset-quote::after {
            content: '\201D';
            margin-left: 6px;
        }

        .mindset-title {
            
            font-size: .65rem;
            font-weight: 600;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 28px;
        }

        .mindset-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
        }

        .mchip {
            background: rgba(255, 255, 255, .05);
            border: 1px solid rgba(255, 255, 255, .1);
            color: rgba(255, 255, 255, .6);
            
            font-size: .65rem;
            font-weight: 600;
            letter-spacing: .1em;
            padding: 7px 16px;
            border-radius: 1px;
            cursor: pointer;
            transition: all .2s;
        }

        .mchip:hover {
            background: var(--gold);
            color: var(--zed-dark-text);
            border-color: var(--gold);
        }

        /* ── SCROLL REVEAL ── */
        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .46s ease, transform .46s ease;
        }

        .reveal.in {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── MISC ── */
        section {
            padding: 64px 0;
        }

        .bg2 {
            background: var(--zed-white-glass-effect);
        }

        .bg3 {
            background: var(--zed-card-back);
        }

        hr.section-rule {
            border: none;
            border-top: 1px solid var(--zed-border-color);
            margin: 0;
        }

        @media(max-width:576px) {
            .mindset-card {
                padding: 36px 22px;
            }

            .formula-main {
                font-size: .9rem;
            }
        }
    </style>

    <!-- ════ SECTION 1: MARKET STRUCTURE ════ -->
    <section>
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-icon">🏗️</span>
                <h2 class="sec-title">Market Structure & Smart Money Concepts</h2>
                <div class="sec-line"></div>
            </div>
            <div class="row g-3">

                <div class="col-md-6 reveal">
                    <div class="concept-card" style="--ac:var(--zed-primary)">
                        <div class="concept-label">Break of Structure (BOS)</div>
                        <div class="concept-title">Break of Structure</div>
                        <p class="concept-text">Price breaks a key swing high (in uptrend) or swing low (in downtrend),
                            signalling trend continuation. <strong>This confirms that the current trend is still
                                intact.</strong> Strong entry signal in direction of trend.</p>
                    </div>
                </div>

                <div class="col-md-6 reveal">
                    <div class="concept-card" style="--ac:var(--orange)">
                        <div class="concept-label" style="color:var(--orange)">Change of Character (CHoCH)</div>
                        <div class="concept-title">Change of Character</div>
                        <p class="concept-text">The first BOS against the current trend direction. Early signal of
                            potential trend reversal. <strong>Risky to trade alone</strong> — wait for confirmation via
                            structure or order block retest.</p>
                    </div>
                </div>

                <div class="col-md-6 reveal">
                    <div class="concept-card" style="--ac:var(--zed-primary)">
                        <div class="concept-label">Order Blocks (OB)</div>
                        <div class="concept-title">Order Blocks</div>
                        <p class="concept-text">The last bearish candle before a significant bullish move =
                            <strong>Bullish Order Block.</strong> Institutions leave pending orders here. When price
                            revisits these zones, expect strong reactions. <strong>High-probability entry
                                zones.</strong></p>
                    </div>
                </div>

                <div class="col-md-6 reveal">
                    <div class="concept-card" style="--ac:var(--gold)">
                        <div class="concept-label" style="color:var(--gold)">Fair Value Gap (FVG)</div>
                        <div class="concept-title">Fair Value Gap</div>
                        <p class="concept-text">A 3-candle imbalance where price moved so fast it left a 'gap' in price
                            delivery. <strong>Price tends to revisit and fill these gaps before continuing.</strong>
                            Found using: candle 1 high/low vs candle 3 high/low.</p>
                    </div>
                </div>

                <div class="col-md-6 reveal">
                    <div class="concept-card" style="--ac:var(--zed-secondary)">
                        <div class="concept-label" style="color:var(--zed-secondary)">Liquidity Zones</div>
                        <div class="concept-title">Liquidity Zones</div>
                        <p class="concept-text">Areas above/below swing highs/lows where retail stop losses cluster.
                            Smart money <strong>"hunts" this liquidity before reversing.</strong> Equal highs/lows are
                            prime liquidity targets.</p>
                    </div>
                </div>

                <div class="col-md-6 reveal">
                    <div class="concept-card" style="--ac:var(--green)">
                        <div class="concept-label" style="color:var(--green)">Premium & Discount</div>
                        <div class="concept-title">Premium & Discount</div>
                        <p class="concept-text">Smart money buys at discount (below equilibrium/50%) and sells at
                            premium (above equilibrium). <strong>Use the 50% level of a swing</strong> to determine if
                            price is at fair value, discount, or premium.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="section-rule" />

    <!-- ════ SECTION 2: ADVANCED FORMULAS ════ -->
    <section class="bg2">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-icon">📐</span>
                <h2 class="sec-title">Advanced Formulas</h2>
                <div class="sec-line"></div>
            </div>

            <div class="row">
                <div class="col-6"> 
                    <!-- Sharpe Ratio -->
                    <div class="formula-card reveal" style="--fc:var(--gold)">
                        <div class="formula-label">Sharpe Ratio — Quality of Returns Adjusted for Risk</div>
                        <div class="formula-main">
                            Sharpe = <em>(Rp − Rf)</em> ÷ σp
                        </div>
                        <div class="formula-vars">
                            <div class="formula-var"><b>Rp</b> = Portfolio return &nbsp;·&nbsp; <b>Rf</b> = Risk-free rate
                                &nbsp;·&nbsp; <b>σp</b> = Standard deviation of returns</div>
                            <div class="formula-var" style="margin-top:6px">Sharpe &gt; <b style="color:#4ade80">1.0</b> = Good
                                &nbsp;·&nbsp; Sharpe &gt; <b style="color:#4ade80">2.0</b> = Excellent &nbsp;·&nbsp; Sharpe &lt;
                                <b style="color:#f87171">0.5</b> = Avoid</div>
                        </div>
                        <div class="formula-example">
                            <div class="formula-eg-label">Example</div>
                            <div class="formula-eg-text">Strategy returns <b>24% annually</b>, std dev 15%, risk-free rate
                                4%.<br>Sharpe = (0.24 − 0.04) ÷ 0.15 = <b style="color:var(--gold)">1.33 (Good)</b></div>
                        </div>
                    </div>   
                </div>
                <div class="col-6">  
                    <!-- Kelly Criterion -->
                    <div class="formula-card reveal" style="--fc:#60a5fa">
                        <div class="formula-label">Kelly Criterion — Optimal Position Sizing</div>
                        <div class="formula-main">
                            f* = W − [(1 − W) ÷ R]
                        </div>
                        <div class="formula-vars">
                            <div class="formula-var"><b>W</b> = Win ratio (decimal) &nbsp;·&nbsp; <b>R</b> = Average win ÷
                                Average loss (Win/Loss ratio)</div>
                        </div>
                        <div class="formula-example">
                            <div class="formula-eg-label">Example — 60% win rate, 2:1 RRR</div>
                            <div class="formula-eg-text">f* = 0.60 − [(1 − 0.60) ÷ 2] = 0.60 − 0.20 = <b
                                    style="color:#60a5fa">0.40 = 40% of capital</b></div>
                        </div>
                        <div class="formula-note">
                            <i class="fas fa-triangle-exclamation"></i>
                            <div class="formula-note-text">Use <b>Half-Kelly (20%)</b> in live trading to reduce volatility and
                                protect against estimate errors</div>
                        </div>
                    </div>  
                </div>
                <div class="col-6">  
                    <!-- ATR -->
                    <div class="formula-card reveal" style="--fc:#f87171">
                        <div class="formula-label">ATR — Dynamic Volatility Stop Loss</div>
                        <div class="formula-main">
                            ATR(n) = (1/n) × ΣTR<br />
                            <em style="font-size:.85em">TR = Max(|H − L|, |H − Cp|, |L − Cp|)</em>
                        </div>
                        <div class="formula-vars">
                            <div class="formula-var"><b>H</b> = High &nbsp;·&nbsp; <b>L</b> = Low &nbsp;·&nbsp; <b>Cp</b> =
                                Previous Close &nbsp;·&nbsp; <b>n</b> = period (14 standard)</div>
                        </div>
                        <div style="margin-top:14px">
                            <div class="check-row"><i class="fas fa-check-circle"></i><span>SL Placement: Entry ± (1.5 ×
                                    ATR14)</span></div>
                            <div class="check-row"><i class="fas fa-check-circle"></i><span>EUR/USD ATR14 = 80 pips → SL = 1.5 ×
                                    80 = <b>120 pips from entry</b></span></div>
                        </div>
                    </div>  
                </div>
                <div class="col-6">   
                    <!-- Fibonacci -->
                    <div class="formula-card reveal" style="--fc:var(--gold)">
                        <div class="formula-label">Fibonacci Retracement Levels</div>
                        <div class="key-levels">
                            Key levels: <span class="hl">23.6%</span> · <span class="hl">38.2%</span> · <span
                                class="hl">50%</span> · <span class="hl" style="color:#f59e0b">61.8% (Golden Ratio)</span> ·
                            <span class="hl">78.6%</span><br />
                            Level price = Swing High − <em style="color:rgba(255,255,255,.5)">(Fib% × (Swing High − Swing
                                Low))</em>
                        </div>
                        <div class="formula-example">
                            <div class="formula-eg-label">Example — Swing High 1.2000 · Swing Low 1.1000 · Range = 0.1000</div>
                            <div class="formula-eg-text">
                                <b style="color:var(--gold)">61.8%</b> = 1.2000 − (0.618 × 0.1000) = <b
                                    style="color:var(--gold)">1.1382</b><br />
                                <b style="color:#60a5fa">38.2%</b> = 1.2000 − (0.382 × 0.1000) = <b
                                    style="color:#60a5fa">1.1618</b>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <hr class="section-rule" />

    <!-- ════ SECTION 3: MARKET ANALYSIS TOOLS ════ -->
    <section>
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-icon">🔬</span>
                <h2 class="sec-title">Advanced Market Analysis Tools</h2>
                <div class="sec-line"></div>
            </div>
            <div class="row g-3">

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="tool-card" style="--ac:var(--zed-primary)">
                        <div class="tool-label">COT Report</div>
                        <div class="tool-title">Commitment of Traders</div>
                        <p class="tool-text">Released weekly by CFTC. Tracks positions (Commercials, Large Speculators,
                            Small Speculators). <strong>Contrarian signal at extreme positioning.</strong></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="tool-card" style="--ac:var(--gold)">
                        <div class="tool-label">Intermarket Analysis</div>
                        <div class="tool-title">Gold · Oil · Bonds</div>
                        <p class="tool-text">
                        <div class="tool-arrow">Gold↑ → USD↓ typically. Oil↑ → CAD↑ (Canada exports).</div>
                        <div class="tool-arrow">US10Y yield rises → USD↑. Risk-on equities↑ → AUD, NZD up.</div>
                        Risk-off: JPY, CHF, Gold up.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="tool-card" style="--ac:var(--zed-primary)">
                        <div class="tool-label">DXY Index</div>
                        <div class="tool-title">USD Dollar Basket</div>
                        <p class="tool-text">Measures USD strength vs basket of 6 currencies (EUR 57.6%, JPY 13.6%, GBP
                            11.9%, CAD 9.1%, SEK 4.2%, CHF 3.6%). <strong>DXY↑ → EUR/USD, GBP/USD, AUD/USD likely
                                down.</strong></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="tool-card" style="--ac:var(--orange)">
                        <div class="tool-label">Economic Calendar</div>
                        <div class="tool-title">NFP · CPI · FOMC</div>
                        <p class="tool-text">High-impact events cause big moves in seconds. NFP (first Friday monthly),
                            CPI (monthly), FOMC rates (8× per year), GDP quarterly. <strong>Widen SL or stay out before
                                releases.</strong></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="tool-card" style="--ac:var(--green)">
                        <div class="tool-label">Market Profile</div>
                        <div class="tool-title">Volume at Price</div>
                        <p class="tool-text">Shows where most trading volume occurred (Point of Control / POC). Price
                            tends to revisit high-volume nodes. Low-volume zones are <strong>"air pockets"</strong>
                            where price moves fast.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 reveal">
                    <div class="tool-card" style="--ac:var(--zed-primary)">
                        <div class="tool-label">Order Flow</div>
                        <div class="tool-title">DOM / Footprint</div>
                        <p class="tool-text">Real-time view of buy/sell orders. Shows imbalances between aggressive
                            buyers and sellers. Used by professional intraday traders <strong>for precise
                                entries.</strong></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="section-rule" />

    <!-- ════ SECTION 4: 6-STEP PROCESS ════ -->
    <section class="bg2">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-icon">🎯</span>
                <h2 class="sec-title">The Professional 6-Step Trading Process</h2>
                <div class="sec-line"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="step-item reveal">
                        <div class="step-connector"></div>
                        <div class="step-num">1</div>
                        <div class="step-content">
                            <div class="step-title"><span>Top-Down Analysis</span></div>
                            <p class="step-text">Start on Monthly/Weekly chart to define the macro trend. Drop to Daily
                                for structure. H4 for key levels. H1/M15 for entry trigger. <strong>Never trade against
                                    the higher timeframe trend.</strong></p>
                        </div>
                    </div>
                    <div class="step-item reveal">
                        <div class="step-connector"></div>
                        <div class="step-num">2</div>
                        <div class="step-content">
                            <div class="step-title"><span>Identify Key Levels</span></div>
                            <p class="step-text">Mark Support/Resistance, Order Blocks, Fair Value Gaps, previous week
                                highs/lows, psychological round numbers. <strong>These are your trade zones, not random
                                    entries.</strong></p>
                        </div>
                    </div>
                    <div class="step-item reveal">
                        <div class="step-connector"></div>
                        <div class="step-num">3</div>
                        <div class="step-content">
                            <div class="step-title"><span>Wait for Confluence</span></div>
                            <p class="step-text">The best trades have 3+ factors aligning: key level + trend direction +
                                candlestick signal + indicator confirmation. <strong>Patience is the edge.</strong> Most
                                traders fail because they trade every setup.</p>
                        </div>
                    </div>
                    <div class="step-item reveal">
                        <div class="step-connector"></div>
                        <div class="step-num">4</div>
                        <div class="step-content">
                            <div class="step-title"><span>Execute with Precision</span></div>
                            <p class="step-text">Limit order at zone (not market order). SL placed below/above structure
                                (not random pips). TP at next key level. <strong>Calculate exact lot size using the
                                    position size formula.</strong></p>
                        </div>
                    </div>
                    <div class="step-item reveal">
                        <div class="step-connector"></div>
                        <div class="step-num">5</div>
                        <div class="step-content">
                            <div class="step-title"><span>Manage the Trade</span></div>
                            <p class="step-text">Move SL to break-even when trade is +1R in profit. Partial close at
                                first TP, let remainder run. <strong>DO NOT watch every tick</strong> — set alerts and
                                walk away.</p>
                        </div>
                    </div>
                    <div class="step-item reveal">
                        <div class="step-num">6</div>
                        <div class="step-content">
                            <div class="step-title"><span>Record & Review</span></div>
                            <p class="step-text">Journal every trade: screenshot, entry/exit reasoning, emotional state,
                                outcome. Review weekly. Review monthly. <strong>Your journal is your trading
                                    education</strong> — no coach can replace it.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-rule" />

    <!-- ════ SECTION 5: MULTIPLE TIMEFRAME ════ -->
    <section>
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-icon">📅</span>
                <h2 class="sec-title">Advanced: Multiple Timeframe Analysis</h2>
                <div class="sec-line"></div>
            </div>
            <div class="row g-3">

                <div class="col-md-6 reveal">
                    <div class="tf-card">
                        <div class="tf-label">Monthly / Weekly</div>
                        <div class="tf-timeframe">Monthly/Weekly</div>
                        <div class="tf-role">The Big Picture</div>
                        <p class="tf-text">Define the macro trend. Where is price in the major swing? Key
                            support/resistance from here are the most important levels in the market. <strong>Never
                                ignore the higher timeframe context.</strong></p>
                    </div>
                </div>

                <div class="col-md-6 reveal">
                    <div class="tf-card">
                        <div class="tf-label">Daily</div>
                        <div class="tf-timeframe">Daily</div>
                        <div class="tf-role">The Battlefield</div>
                        <p class="tf-text">Identify the current structure: higher highs/higher lows (uptrend) or lower
                            highs/lower lows (downtrend). <strong>Daily S/R levels are watched by all institutional
                                traders globally.</strong></p>
                    </div>
                </div>

                <div class="col-md-6 reveal">
                    <div class="tf-card">
                        <div class="tf-label">H4</div>
                        <div class="tf-timeframe">H4</div>
                        <div class="tf-role">The Strategy</div>
                        <p class="tf-text">This is where you plan your trade. Identify the specific zone to trade from
                            (order block, FVG, S/R flip). Determine your bias — are you buying or selling at this level?
                        </p>
                    </div>
                </div>

                <div class="col-md-6 reveal">
                    <div class="tf-card">
                        <div class="tf-label">H1 / M15</div>
                        <div class="tf-timeframe">H1 / M15</div>
                        <div class="tf-role">The Trigger</div>
                        <p class="tf-text">This is where you enter. Wait for BOS, CHoCH, engulfing candle, or pin bar at
                            the H4 zone. <strong>This entry timeframe gives precision — tighter SL, better RRR.</strong>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="section-rule" />

    <!-- ════ SECTION 6: MINDSET ════ -->
    <section style="padding:0;background:var(--zed-white-glass-effect);">
        <div class="container">
            <div class="mindset-card reveal">
                <div class="mindset-title">The Trading Mindset</div>
                <blockquote class="mindset-quote">
                    Your edge isn't your indicator or your pattern — it's your ability to execute the same process 100
                    times consistently, despite losses, despite boredom, despite the inevitable streaks. The market
                    doesn't reward brilliance. It rewards discipline.
                </blockquote>
                <div class="mindset-chips">
                    <span class="mchip">📓 Journal every trade</span>
                    <span class="mchip">⚙️ Execute the process</span>
                    <span class="mchip">📊 Review weekly</span>
                    <span class="mchip">🛡️ Protect capital first</span>
                    <span class="mchip">🎯 Trust the edge</span>
                </div>
            </div>
        </div>
    </section>

    <script>
        const obs = new IntersectionObserver(entries => {
            entries.forEach((e, i) => {
                if (e.isIntersecting) {
                    setTimeout(() => e.target.classList.add('in'), i * 65);
                    obs.unobserve(e.target);
                }
            });
        }, { threshold: 0.08 });
        document.querySelectorAll('.reveal').forEach(r => obs.observe(r));
    </script>
<?php
include_once ('elements/footer.php');
?>