<?php 
include_once ('elements/header.php');
?>

    <style>
        
        .heading-font { font-family: 'Syncopate', sans-serif; text-transform: uppercase; letter-spacing: 4px; }

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
            box-shadow: 0 0 40px var(--primary-blur);
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
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 var(--primary-blur); }
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

    <section class="py-5 mt-5">
        <div class="container text-center">
            <h1 class="heading-font display-4 animate__animated animate__glitch">Institutional <span style="color: var(--primary-teal);">Elite</span></h1>
            <p class="text-secondary small fw-light">Access high-frequency data, algo-tracking, and central bank sentiment analysis.</p>
        </div>
    </section>

    <div class="container pb-5">
        <div class="row g-4">
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 p-4 advanced-card">
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
                <div class="card h-100 p-4 advanced-card">
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
                <div class="card h-100 p-4 advanced-card">
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
    
<?php
include_once ('elements/footer.php');
?>