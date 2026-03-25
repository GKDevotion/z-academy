<?php 
include_once ('elements/header.php');
?>

    <style>

        /* Next-Level Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--dark-navy) 0%, var(--dark-navy) 100%);
            color: white;
            padding: 100px 0;
            border-bottom: 5px solid var(--primary-teal);
        }

        .btn-primary {
            background-color: var(--primary-teal);
            border: none;
            padding: 12px 30px;
            font-weight: bold;
            transition: transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--primary-teal);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px var(--primary-blur);
        }

        /* Modern Card Design */
        .course-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background: #fff;
            box-shadow: 0 10px 30px var(--card-shadow);
        }

        .course-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px var(--primary-blur);
        }

        .card-badge {
            background: var(--primary-teal);
            color: white;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.8rem;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background: var(--primary-blur);
            color: var(--primary-teal);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
    </style>

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Trade Like a <span style="color: var(--trader-red);">Pro</span></h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Master technical analysis, risk management, and market psychology.</p>
            <div class="animate__animated animate__zoomIn animate__delay-1s">
                <a href="#" class="btn btn-primary btn-lg rounded-pill">Start Learning Now</a>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card course-card h-100 p-4">
                        <span class="card-badge">Best Seller</span>
                        <div class="icon-box">📊</div>
                        <h4 class="fw-bold">Forex Mastery</h4>
                        <p class="text-muted">Learn the secrets of the currency markets with live session recordings.</p>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold fs-4">$199</span>
                            <a href="#" class="text-danger fw-bold text-decoration-none">Enroll →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card course-card h-100 p-4" style="border-top: 4px solid var(--trader-red);">
                        <div class="icon-box">🕯️</div>
                        <h4 class="fw-bold">Price Action Pro</h4>
                        <p class="text-muted">Master candlestick patterns and liquidity zones without indicators.</p>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold fs-4">$149</span>
                            <a href="#" class="text-danger fw-bold text-decoration-none">Enroll →</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card course-card h-100 p-4">
                        <div class="icon-box">🧠</div>
                        <h4 class="fw-bold">Trading Psychology</h4>
                        <p class="text-muted">Control your emotions and develop the discipline of a winning trader.</p>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold fs-4">$99</span>
                            <a href="#" class="text-danger fw-bold text-decoration-none">Enroll →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include_once ('elements/footer.php');
?>