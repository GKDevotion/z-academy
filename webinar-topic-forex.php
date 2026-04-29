<?php 
include_once ('elements/header.php');
?>
    <style>
        /* ── ANIMATIONS ─────────────────────────────────── */
        .fade-up {
        opacity: 0;
        transform: translateY(28px);
        animation: fadeUp .6s ease forwards;
        }

        @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
        }

        .delay-1 {
            animation-delay: .1s;
        }

        .delay-2 {
            animation-delay: .2s;
        }

        .delay-3 {
            animation-delay: .3s;
        }

        .delay-4 {
            animation-delay: .4s;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--dark);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--zed-light-red-hover);
            border-radius: 3px;
        }

        .btn-primary-custom {
            background: var(--zed-primary);
            color: #fff;
            border: none;
            padding: .85rem 2.4rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: .95rem;
            letter-spacing: .03em;
            transition: background .25s, transform .2s, box-shadow .25s;
            box-shadow: 0 8px 24px var(--zed-light-red-hover);
        }

        .btn-primary-custom:hover {
            background:var(--zed-primary);
            transform: translateY(-2px);
            box-shadow: 0 12px 32px var(--zed-light-red-hover);
            color: #fff;
        }

        .btn-outline-custom {
            background: transparent;
            color: #e2e8f0;
            border: 1px solid var(--zed-card-back);
            padding: .85rem 2.2rem;
            border-radius: 50px;
            font-weight: 500;
            font-size: .95rem;
            transition: border-color .25s, background .25s;
        }

        .btn-outline-custom:hover {
            border-color: var(--zed-card-back);
            background: var(--zed-card-back);
            color: var(--zed-dark-text);
        }
    </style>

    <style>
        /* ── HERO ───────────────────────────────────────── */
        .hero {
            position: relative;
            padding: 110px 0 80px;
            text-align: center;
            background:var(--zed-dark-text);
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.025'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .hero-eyebrow {
            display: inline-block;
            background: var(--zed-light-red-hover);
            color: var(--zed-primary);
            border: 1px solid var(--zed-light-red-hover);
            font-size: .78rem;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: .35rem 1rem;
            border-radius: 50px;
            margin-bottom: 1.4rem;
        }

        .hero h1 {
            font-family: 'Poppins', serif;
            font-size: clamp(2.6rem, 6vw, 4.5rem);
            font-weight: 900;
            line-height: 1.08;
            color: #fff;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero p.lead {
            font-size: 1.1rem;
            color: var(--zed-card-back);
            max-width: 560px;
            margin: 1.1rem auto 2rem;
            font-weight: 300;
        }

        .hero-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-top: 3rem;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
        }

        .stat-num {
            font-family: 'Poppins', serif;
            font-size: 2rem;
            font-weight: 700;
            color: #fff;
        }

        .stat-num span {
            color: var(--zed-primary);
        }

        .stat-label {
            font-size: .8rem;
            color: var(--zed-card-back);
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        /* ── SECTION HEADER ─────────────────────────────── */
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-header .eyebrow {
            display: inline-block;
            font-size: .72rem;
            font-weight: 600;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: var(--primary);
            background: var(--zed-light-red-hover);
            border: 1px solid var(--zed-light-red-hover);
            padding: .28rem .85rem;
            border-radius: 50px;
            margin-bottom: .9rem;
        }

        .section-header h2 {
            font-family: 'Poppins', serif;
            font-size: clamp(1.8rem, 3.5vw, 2.6rem);
            font-weight: 700;
            color: var(--zed-dark-text);
        }

        .section-header p {
            color: var(--zed-secondary);
            max-width: 520px;
            margin: .6rem auto 0;
            font-size: .97rem;
        }
    </style>

    <!-- ── HERO ────────────────────────────────────────────────── -->
    <section class="hero">
        <div class="container">
            <div class="hero-eyebrow fade-up">
                <i class="bi bi-mortarboard-fill me-1"></i>
                Live Webinar Series
            </div>
            <h1 class="fade-up delay-1">
                Master the World of<br>
                <span>Forex Trading</span>
            </h1>
            <p class="lead fade-up delay-2">
                Understand how the global currency market works and why it's the largest financial market — taught by professional traders.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap fade-up delay-3">
                <a href="#modules" class="btn btn-primary-custom">
                    <i class="bi bi-play-circle me-2"></i>
                    Explore Modules
                </a>
                <a href="#enroll" class="btn btn-outline-custom">
                    <i class="bi bi-calendar2-check me-2"></i>
                    Book a Session
                </a>
            </div>
            <div class="hero-stats fade-up delay-4">
                <div class="stat-item">
                    <div class="stat-num">9<span>+</span></div>
                    <div class="stat-label">Core Modules</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">40<span>+</span></div>
                    <div class="stat-label">Topics Covered</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">Live<span>.</span></div>
                    <div class="stat-label">Interactive Sessions</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">Free<span>*</span></div>
                    <div class="stat-label">Enrollment</div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <div class="webinar-topics container py-5">

        <div class="section-header">
            <span class="eyebrow">
                <i class="bi bi-journal-bookmark me-1"></i>
                Curriculum
            </span>
            <h2>
                Complete Learning Roadmap
            </h2>
            <p>
                From foundational concepts to advanced institutional strategies — everything in one place.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php
            $webinarTopicArr = [
                [
                    'title' => 'Forex Market Structure',
                    'description' => 'Learn how the forex market is organized and how trades are executed.',
                    'topic' => [
                        'Decentralized Market Concept',
                        'Liquidity & Volatility',
                        'Bid vs Ask Price',
                        'Spread & Slippage',
                        'Order Execution Types',
                    ],
                    'box-icon' => '📊'
                ],[
                    'title' => 'Technical Analysis in Forex',
                    'description' => 'Master chart reading and indicators for better trade decisions.',
                    'topic' => [
                        'Candlestick Patterns',
                        'Support & Resistance Zones',
                        'Trend Identification',
                        'RSI, MACD, Moving Averages',
                        'Breakout & Reversal Strategies',
                    ],
                    'box-icon' => '📈'
                ],[
                    'title' => 'Fundamental Analysis in Forex',
                    'description' => 'Understand how economic news and global events impact currency prices.',
                    'topic' => [
                        'Interest Rates & Central Banks',
                        'Inflation (CPI) Impact',
                        'GDP & Employment Data',
                        'News Trading Strategies',
                        'Economic Calendar Usage',
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Forex Trading Strategies',
                    'description' => 'Explore different trading styles used by professional traders.',
                    'topic' => [
                        'Scalping Strategy',
                        'Day Trading',
                        'Swing Trading',
                        'Trend Following Strategy',
                        'Price Action Trading',
                    ],
                    'box-icon' => '⚡'
                ],[
                    'title' => 'Risk Management in Forex',
                    'description' => 'Protect your capital and trade like a professional.',
                    'topic' => [
                        'Stop Loss & Take Profit',
                        'Risk-Reward Ratio',
                        'Position Sizing',
                        'Avoiding Overtrading',
                        'Managing Drawdowns',
                    ],
                    'box-icon' => '🛡️'
                ],[
                    'title' => 'Forex Trading Platforms',
                    'description' => 'Learn how to use trading platforms effectively.',
                    'topic' => [
                        'MetaTrader (MT4/MT5) Basics',
                        'Placing Buy/Sell Orders',
                        'Using Indicators & Tools',
                        'Chart Customization',
                        'Mobile Trading Apps',
                    ],
                    'box-icon' => '💻'
                ],[
                    'title' => 'Currency Pair Deep Analysis',
                    'description' => 'Understand behavior of major currency pairs.',
                    'topic' => [
                        'EUR/USD Analysis',
                        'GBP/USD Volatility',
                        'USD/JPY Safe Haven Behavior',
                        'Correlation Between Pairs',
                        'Cross Currency Trading',
                    ],
                    'box-icon' => '🌍'
                ],[
                    'title' => 'Forex Psychology & Discipline',
                    'description' => 'Control emotions and build a strong trader mindset.',
                    'topic' => [
                        'Fear & Greed Control',
                        'Trading Discipline',
                        'Building a Trading Plan',
                        'Patience & Consistency',
                        'Avoiding Emotional Trades',
                    ],
                    'box-icon' => '📉'
                ],[
                    'title' => 'Advanced Forex Concepts',
                    'description' => 'Level up your trading with advanced techniques.',
                    'topic' => [
                        'Liquidity & Smart Money Concept',
                        'Order Blocks & Supply/Demand',
                        'Market Structure Shift',
                        'Institutional Trading Concepts',
                        'Backtesting Strategies',
                    ],
                    'box-icon' => '🚀'
                ],
            ];
            foreach( $webinarTopicArr as $k => $val ){ ?>
                <div class="col-lg-6">
                    <div class="curriculum-card">
                        <div class="row align-items-center w-100 flex-column-reverse flex-md-row">
                            <div class="col-md-12">
                                <h3 class="card-title"><?= $val['title']; ?></h3>
                                <p class="card-text"><?= $val['description']; ?></p>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <?php foreach( $val['topic'] as $topic ){ ?>
                                        <div class="">
                                            <a href="javascript:void(0)" class="topic-pill">
                                                <span class="arrow-icon">→</span><?= $topic; ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center mb-4 mb-md-0">
                                <div class="icon-box"><?= $val['box-icon'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }?>
        </div>
    </div>

    <div class="section-divider"></div>

    <!-- ── WHAT YOU'LL GAIN ─────────────────────────────────────── -->
    <style>
        .learn-title{
            color:var(--zed-primary);
            font-weight:600;
            font-size:1rem;
        }
        .learn-desc{
            color:var(--muted);
            font-size:0.9rem;
            margin-top:.2rem;
        }
    </style>
    <section class="py-5" style="background: var(--zed-backgound-color);">
        <div class="container py-4">
            <div class="section-header">
                <span class="eyebrow">
                    <i class="bi bi-award me-1"></i>
                    Learning Outcomes
                </span>
                <h2>What You'll Walk Away With</h2>
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="d-flex align-items-start gap-3 p-3"
                        style="background:var(--zed-icon-color);border:1px solid var(--zed-border-color);border-radius:14px;">
                        <div class="card-icon-wrap ci-red flex-shrink-0" style="width:42px;height:42px;font-size:1.15rem;">
                            <i class="bi bi-check2-all"></i>
                        </div>
                        <div>
                            <div class="learn-title">
                                Confident Trade Execution
                            </div>
                            <div class="learn-desc">
                                Enter and exit trades with precisions.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="d-flex align-items-start gap-3 p-3"
                        style="background:var(--zed-icon-color);border:1px solid var(--zed-border-color);border-radius:14px;">
                        <div class="card-icon-wrap ci-blue flex-shrink-0" style="width:42px;height:42px;font-size:1.15rem;">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <div>
                            <div class="learn-title">
                                Read Any Chart
                            </div>
                            <div class="learn-desc">
                                Decode price action in any timeframe.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="d-flex align-items-start gap-3 p-3"
                        style="background:var(--zed-icon-color);border:1px solid var(--zed-border-color);border-radius:14px;">
                        <div class="card-icon-wrap ci-green flex-shrink-0" style="width:42px;height:42px;font-size:1.15rem;"><i
                            class="bi bi-piggy-bank"></i>
                        </div>
                        <div>
                            <div class="learn-title">
                                Protect Your Capital
                            </div>
                            <div class="learn-desc">
                                Risk management before profit chasing.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="d-flex align-items-start gap-3 p-3"
                        style="background:var(--zed-icon-color);border:1px solid var(--zed-border-color);border-radius:14px;">
                        <div class="card-icon-wrap ci-gold flex-shrink-0" style="width:42px;height:42px;font-size:1.15rem;"><i
                            class="fa fa-brain"></i>
                        </div>
                        <div>
                            <div class="learn-title">
                                Trader Mindset
                            </div>
                            <div class="learn-desc">
                                Discipline and emotional intelligence.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <style>
        /* ── CTA BANNER ─────────────────────────────────── */
        .cta-section {
            padding: 80px 0;
            background: radial-gradient(ellipse 80% 60% at 50% 50%, rgba(200, 16, 46, .14) 0%, transparent 70%), var(--dark);
            text-align: center;
        }

        .cta-section h2 {
            font-size: clamp(1.9rem, 4vw, 3rem);
            color: #fff;
        }

        .cta-section h2 span {
            color: var(--zed-primary);
        }

        .cta-section p {
            color: var(--zed-light-bg);
            max-width: 460px;
            margin: .8rem auto 2rem;
        }
    </style>
    <!-- ── CTA ─────────────────────────────────────────────────── -->
    <section class="cta-section" id="enroll">
        <div class="container">
            <div class="d-inline-flex align-items-center gap-2 mb-3"
                style="background:rgba(240,165,0,.1);border:1px solid rgba(240,165,0,.25);border-radius:50px;padding:.3rem 1rem;">
                <i class="bi bi-star-fill" style="color:var(--zed-primary);font-size:.75rem;"></i>
                <span
                style="color:var(--zed-primary);font-size:.78rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;">Free
                Enrollment</span>
            </div>
            <h2>Ready to Start Your<br><span>Forex Journey?</span></h2>
            <p>Join thousands of students learning how to trade professionally with our structured live webinar program.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#" class="btn btn-primary-custom"><i class="bi bi-mortarboard me-2"></i>Enroll for Free</a>
                <a href="#modules" class="btn btn-outline-custom"><i class="bi bi-list-ul me-2"></i>View All Modules</a>
            </div>
        </div>
    </section>
<?php
include_once ('elements/footer.php');
?>