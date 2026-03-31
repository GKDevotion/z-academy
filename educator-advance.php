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
            border: 1px solid var(--border-color);
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

        /* --- MENTOR SECTION --- */
        .mentor-overlay { background: var(--border); padding: 120px 0; }

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

    <section class="bg-light">
        <div class="mentor-overlay">
            <div class="container text-center text-white" data-aos="zoom-out">
                <h2 class="display-3 fw-black text-black mb-4">ENTERING THE <br><span class="text-danger">WAR ROOM</span></h2>
                <p class="lead opacity-50 mb-5 text-black">Weekly live coaching, strategy deep-dives, and 1-on-1 algorithm review.</p>
                <button class="btn-elite">APPLY FOR MENTORSHIP</button>
                <p class="mt-4 small opacity-50 text-black">LIMITED TO 50 SPOTS ANNUALLY</p>
            </div>
        </div>
    </section>

<?php
include_once ('elements/footer.php');
?>