<?php 
include_once ('elements/header.php');
?>
    <style>

        /* --- NEW MODERN HEADER DESIGN --- */
        .hero-lookout {
            position: relative;
            min-height: 85vh;
            display: flex;
            align-items: center;
            background: #fff;
            padding-top: 100px;
            overflow: hidden;
        }

        .hero-content { z-index: 2; position: relative; }

        .hero-title {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 900;
            line-height: 1.1;
            margin-bottom: 25px;
            letter-spacing: -2px;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--muted);
            margin-bottom: 40px;
            max-width: 550px;
        }

        .hero-visual {
            position: absolute;
            right: 0;
            top: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary) 0%, #000 100%);
            clip-path: polygon(20% 0%, 100% 0%, 100% 100%, 0% 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 991px) {
            .hero-visual { display: none; }
            .hero-lookout { min-height: auto; padding: 80px 0; }
            .hero-title { font-size: 3rem; }
        }

        /* Float animation for the image inside hero */
        .floating-ui {
            filter: drop-shadow(0 30px 50px rgba(0,0,0,0.5));
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* --- Shared Styles --- */
        .section-padding { padding: 90px 0; }
        .btn-custom { padding: 15px 35px; border-radius: 4px; font-weight: 700; transition: var(--transition); text-transform: uppercase; }
        .btn-primary-red { background: var(--primary); color: white; border: none; }
        .btn-yellow { background: var(--warning); color: var(--dark); border: none; }
        .btn-yellow:hover { background: var(--primary-teal); color: white;}
        .btn-primary-red:hover { background: var(--warning);color: var(--dark); }
        
        .slant-bg {
            background: #f8f9fa;
            clip-path: polygon(0 2%, 100% 0, 100% 98%, 0% 100%);
            padding: 120px 0;
        }

        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #eee;
            transition: var(--transition);
            height: 100%;
        }
        .feature-card:hover { transform: translateY(-10px); box-shadow: var(--card-shadow); border-color: var(--primary); }
        
        .check-item { border: 1px solid #eee; padding: 15px; border-radius: 8px; background: #fff; }
    </style>

    <section class="hero-lookout">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 hero-content">
                    <span class="badge bg-danger mb-3 px-3 py-2">TRADING MASTERY 2026</span>
                    <h1 class="hero-title">Protect Your <br><span class="text-danger">Capital.</span> Build Your <br>Future.</h1>
                    <p class="hero-subtitle">Stop gambling and start trading. Master the art of risk management with Axi’s professional-grade tools and institutional insights.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <button class="btn btn-custom btn-primary-red">Open Live Account</button>
                        <button class="btn btn-custom btn-yellow">Try Free Demo</button>
                    </div>
                    <div class="mt-5 d-flex align-items-center gap-4 text-muted small">
                        <div><i class="fas fa-shield-alt text-danger me-2"></i>Regulated Broker</div>
                        <div><i class="fas fa-check-circle text-danger me-2"></i>Negative Balance Protection</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <img src="assets/img/floating-ui.png" class="floating-ui" alt="Trading Visual">
        </div>
    </section>

    <section class="slant-bg">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold display-5">The 8 Pillars of <span class="text-danger">Risk</span></h2>
                <p class="text-muted">Professional traders prioritize risk before profit. Here is how they do it.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">01</h2>
                        <h5 class="fw-bold">The 1% Rule</h5>
                        <p class="small text-muted">Never risk more than 1% of your total account equity on any single trade execution.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">02</h2>
                        <h5 class="fw-bold">Hard Stop-Loss</h5>
                        <p class="small text-muted">A trade without a stop-loss is a wish, not a strategy. Always define your exit first.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">03</h2>
                        <h5 class="fw-bold">1:3 RR Ratio</h5>
                        <p class="small text-muted">Seek setups where the potential profit is at least three times your potential risk.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">04</h2>
                        <h5 class="fw-bold">Logic > Emotion</h5>
                        <p class="small text-muted">Trading is a game of numbers. If the data says "No," your heart doesn't get a vote.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">05</h2>
                        <h5 class="fw-bold">Leverage Control</h5>
                        <p class="small text-muted">High leverage is a trap. Use institutional-grade margins to protect your downside.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">06</h2>
                        <h5 class="fw-bold">Correlations</h5>
                        <p class="small text-muted">Understand how pairs move together to avoid doubling your risk unintentionally.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">07</h2>
                        <h5 class="fw-bold">News Filter</h5>
                        <p class="small text-muted">Stay out of the market during high-impact events like NFP or CPI unless you're a pro.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card">
                        <h2 class="text-danger fw-bold mb-3">08</h2>
                        <h5 class="fw-bold">Performance Logs</h5>
                        <p class="small text-muted">You cannot improve what you do not measure. Keep a rigorous trading journal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding container">
        <div class="row align-items-center">
             <div class="text-center mb-5">
                <h2 class="fw-bold display-5">
                    The Deadly <span class="text-danger">Drawdown</span>
                </h2>
                <p class="text-muted">
                    Mathematical reality: Recovering from a loss is harder than making a profit. Protect your capital at all costs.
                </p>

                <p class="text-muted">
                    Recovery Formula — Why protecting capital is CRITICAL
                </p>
                
                <div class="p-4 bg-dark text-white rounded-4 mt-4">
                    <h4 class="fw-bold text-danger">
                        Recovery % = Loss% ÷ (1 - Loss%) X 100
                    </h4>
                    <p class="mb-0">
                        The math is brutal. Small losses are easy to recover. Big losses can permanently end your trading career.
                    </p>
                </div>
            </div>           
        </div>

        <style>
            /* ── SUBSECTION ── */
            .sub-title {
                font-size: 20px;
                font-weight: 700;
                color: var(--navy);
                margin: 32px 0 14px;
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .sub-title::after {
                content: '';
                flex: 1;
                height: 1px;
                background: var(--zed-border-color);
            }

            /* ── CALCULATOR ── */
            .calc-box {
                background: var(--zed-light-bg);
                border-radius: 14px;
                border: 1px solid var(--zed-border-color);
                padding: 24px;
                margin-bottom: 20px;
                box-shadow: var(--shadow);
            }

            .calc-box h3 {
                font-size: 15px;
                font-weight: 600;
                color: var(--navy);
                margin-bottom: 18px;
            }

            .calc-row {
                display: flex;
                align-items: center;
                gap: 12px;
                margin-bottom: 12px;
                flex-wrap: wrap;
            }

            .calc-label {
                font-size: 13px;
                color: var(--zed-green-text);
                min-width: 160px;
            }

            .calc-input,
            .calc-select {
                padding: 8px 12px;
                font-size: 13px;
                border-radius: 8px;
                border: 1px solid var(--zed-border-color);
                background: var( --zed-card-bg);
                color: var(--zed-dark-text);
            }

            .calc-input {
                width: 120px;
            }

            .calc-btn {
                background: var(--navy);
                color: var(--gold);
                border: none;
                border-radius: 8px;
                padding: 8px 20px;
                font-size: 13px;
                font-weight: 600;
                cursor: pointer;
                transition: 0.2s;
            }

            .calc-btn:hover {
                background: var(--navy);
            }

            .result-box {
                background: linear-gradient(135deg, var(--emerald), #f0fff8);
                border-radius: 10px;
                padding: 14px 18px;
                margin-top: 14px;
                border: 1px solid #b2e8d4;
                font-size: 14px;
                color: var(--zed-dark-text);
                line-height: 1.8;
            }

            .rh {
                font-size: 20px;
                font-weight: 700;
                color: var(--teal);
            }

            .rw {
                color: var(--zed-primary);
                font-weight: 600;
            }

            .slider-wrap {
                margin-bottom: 14px;
            }

            .slider-label-row {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 6px;
            }

            .slider-label {
                font-size: 13px;
                color: var(--zed-green-text);
            }

            .slider-val {
                font-size: 13px;
                font-weight: 600;
                color: var(--navy);
            }

            input[type=range] {
                width: 100%;
                accent-color: var(--navy);
            }

            .risk-track {
                height: 14px;
                border-radius: 20px;
                background: var(--zed-border-color);
                overflow: hidden;
                margin: 8px 0;
            }

            .risk-fill {
                height: 100%;
                border-radius: 20px;
                transition: all 0.4s;
            }

            .rf-safe {
                background: linear-gradient(90deg, var(--teal), #4ecb9e);
            }

            .rf-warn {
                background: linear-gradient(90deg, #f0b429, #f6d860);
            }

            .rf-danger {
                background: linear-gradient(90deg, var(--zed-primary), #f08070);
            }
        </style>
        
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="sub-title">🎚️ Risk Simulator — Interactive</div>
                <div class="calc-box">
                    <div class="slider-wrap">
                        <div class="slider-label-row">
                            <span class="slider-label">Account Size ($)</span>
                            <span class="slider-val" id="s-acc-val">$10,000</span>
                        </div>
                        <input type="range" min="500" max="100000" step="500" value="10000" id="s-acc" oninput="updateSim()">
                    </div>
                    <div class="slider-wrap">
                        <div class="slider-label-row">
                            <span class="slider-label">Risk Per Trade (%)</span>
                            <span class="slider-val" id="s-risk-val">1%</span>
                        </div>
                        <input type="range" min="0.5" max="15" step="0.5" value="1" id="s-risk" oninput="updateSim()">
                    </div>
                    <div class="slider-wrap">
                        <div class="slider-label-row">
                            <span class="slider-label">Consecutive Losses</span>
                            <span class="slider-val" id="s-loss-val">5</span>
                        </div>
                            <input type="range" min="1" max="20" step="1" value="5" id="s-loss" oninput="updateSim()">
                    </div>
                    <div style="margin-top:16px;">
                        <div style="display:flex; justify-content:space-between; font-size:13px; color:var(--zed-green-text); margin-bottom:6px;">
                            <span>Account remaining</span>
                            <span id="s-remain" style="font-weight:600;">$9,510</span>
                        </div>
                        <div class="risk-track">
                            <div class="risk-fill rf-safe" id="s-bar" style="width:95%"></div>
                        </div>
                        <div style="display:flex; justify-content:space-between; font-size:12px; color:var(--zed-secondary);">
                            <span>Drawdown</span>
                            <span id="s-dd">4.9%</span>
                        </div>
                    </div>
                    <div class="result-box" id="s-verdict" style="margin-top:12px;">Loading…</div>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
                <table class="table table-hover border">
                    <thead class="table-dark">
                        <tr><th>Loss</th><th>Recovery Needed</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>10%</td><td>11%</td></tr>
                        <tr><td>25%</td><td>33%</td></tr>
                        <tr class="table-danger"><td><strong>50%</strong></td><td><strong>100%</strong></td></tr>
                        <tr class="bg-dark text-white"><td>90%</td><td>900%</td></tr>
                    </tbody>
                </table>
            </div> 
        </div>

        <style>
            .blist {
                list-style: none;
            }

            .blist li {
                display: flex;
                align-items: flex-start;
                gap: 12px;
                padding: 11px 0;
                border-bottom: 1px solid var(--border);
                font-size: 14px;
                color: var(--text);
                line-height: 1.6;
            }

            .bi {
                font-size: 18px;
                flex-shrink: 0;
                margin-top: 1px;
            }

            .blist strong {
                font-weight: 600;
            }
        </style>
        <div class="row align-items-center">
            <div class="col-lg-6 offset-3">
                <div class="sub-title">🎯 Stop Loss Placement Strategies</div>
                <ul class="blist">
                    <li><span class="bi">📏</span>
                        <div>
                            <strong>ATR-Based SL</strong> — Place SL at 1.5–2× ATR(14) from your entry price. This adapts to current
                        market volatility automatically. <em>Formula: SL = Entry ± (1.5 × ATR)</em></div>
                    </li>
                    <li><span class="bi">🏗️</span>
                    <div><strong>Structure-Based SL</strong> — Place SL just below the last significant swing low (for buy trades)
                        or above the last swing high (for sell trades). This is the most logical placement — if structure breaks,
                        your thesis is wrong.</div>
                    </li>
                    <li><span class="bi">🔄</span>
                    <div><strong>Trailing Stop</strong> — Move SL by a fixed pip amount or % as price moves in your favour. Allows
                        you to "let winners run" while protecting accumulated profits.</div>
                    </li>
                    <li><span class="bi">⚖️</span>
                    <div><strong>Break-Even Stop</strong> — Once your trade is +1R (full risk amount) in profit, move SL to your
                        entry price. Now you have a "free trade" — worst case is breakeven. Best practice for all trades.</div>
                    </li>
                    <li><span class="bi">🚫</span>
                    <div><strong style="color:var(--red);">NEVER Move SL Further Away</strong> — The #1 mistake of losing traders.
                        If price is approaching your SL, do NOT widen it. Accept the loss. Widening SL destroys all risk management
                        logic.</div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Pre-Execution Checklist</h2>
                <p class="text-muted">Never hit 'Buy' or 'Sell' without checking these boxes.</p>
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-md-4 col-lg-3">
                    <div class="check-item"><input type="checkbox" class="form-check-input me-2"> Stop Loss Set</div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="check-item"><input type="checkbox" class="form-check-input me-2"> Position Sized</div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="check-item"><input type="checkbox" class="form-check-input me-2"> News Calendar Clear</div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="check-item"><input type="checkbox" class="form-check-input me-2"> Trend Identified</div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-5">
        <div class="container">
            <h3 class="fw-bold mb-4">Start trading with an edge.</h3>
            <div class="d-flex justify-content-center gap-3 mb-4">
                <button class="btn btn-yellow btn-custom">Open Account</button>
            </div>
        </div>
    </footer>
  
    <script>

        // ── Risk Simulator ──        
        function updateSim() {
            const acc = parseFloat(document.getElementById('s-acc').value);
            const risk = parseFloat(document.getElementById('s-risk').value);
            const losses = parseInt(document.getElementById('s-loss').value);
            document.getElementById('s-acc-val').textContent = '$' + acc.toLocaleString();
            document.getElementById('s-risk-val').textContent = risk + '%';
            document.getElementById('s-loss-val').textContent = losses;
            let rem = acc;

            for (let i = 0; i < losses; i++) rem *= (1 - risk / 100);

            const dd = (acc - rem) / acc * 100;
            const pct = rem / acc * 100;
            document.getElementById('s-remain').textContent = '$' + rem.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            document.getElementById('s-dd').textContent = dd.toFixed(1) + '%';
            const bar = document.getElementById('s-bar');
            bar.style.width = pct + '%';
            bar.className = 'risk-fill ' + (dd < 10 ? 'rf-safe' : dd < 25 ? 'rf-warn' : 'rf-danger');
            const v = document.getElementById('s-verdict');
            if (dd < 10) 
                v.innerHTML = '<span class="rh">✅ Account is safe</span> — This is professional risk management. Keep this discipline.';
            else if (dd < 25) 
                v.innerHTML = '<span style="color:var(--amber); font-weight:600;">⚠️ Moderate Drawdown of ' + dd.toFixed(1) + '%</span> — Consider reducing your risk % per trade to 1–2%.';
            else 
                v.innerHTML = '<span class="rw">🚨 DANGEROUS Drawdown of ' + dd.toFixed(1) + '%!</span> — Reduce risk to 1% immediately. At this rate you will blow your account.';
        }

        // ── Init ──
        updateSim();
    </script>
<?php
include_once ('elements/footer.php');
?>