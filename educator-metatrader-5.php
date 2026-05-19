<?php 
include_once ('elements/header.php');
?>

    <style>
     
        /* ── HERO BANNER ── */
        .hero-banner {
            background: linear-gradient(135deg, var(--zed-dark-text) 0%, var(--zed-dark-text) 60%, #1a1a2e 100%);
            padding: 64px 0 52px;
            position: relative;
            overflow: hidden;
            margin-top: -35px;
        }

        .hero-banner::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 80% 20%, rgba(212, 41, 30, .12) 0%, transparent 50%),
                radial-gradient(circle at 20% 80%, rgba(26, 79, 212, .1) 0%, transparent 50%);
        }

        .hero-grid-bg {
            position: absolute;
            inset: 0;
            background-image: linear-gradient(rgba(255, 255, 255, .03) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, .03) 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            
            font-size: .6rem;
            font-weight: 600;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .45);
            margin-bottom: 16px;
        }

        .hero-eyebrow::before {
            content: '';
            width: 28px;
            height: 1px;
            background: var(--zed-primary);
        }

        .hero-title {
            
            font-size: clamp(1.8rem, 4.5vw, 3.2rem);
            font-weight: 900;
            color: #fff;
            line-height: 1.1;
            margin-bottom: 14px;
        }

        .hero-title em {
            font-style: italic;
            color: var(--zed-primary);
        }

        .hero-sub {
            font-size: .9rem;
            color: rgba(255, 255, 255, .5);
            max-width: 560px;
            line-height: 1.8;
            margin-bottom: 32px;
        }

        .hero-sub strong {
            color: rgba(255, 255, 255, .8);
        }

        .hero-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .htag {
            background: rgba(255, 255, 255, .07);
            border: 1px solid rgba(255, 255, 255, .4);
            color: rgba(255, 255, 255, .6);
            
            font-size: .62rem;
            font-weight: 600;
            letter-spacing: .08em;
            padding: 6px 14px;
            border-radius: 2px;
            transition: all .2s;
        }

        .htag:hover {
            background: var(--zed-primary);
            border-color: var(--zed-primary);
            color: #fff;
        }

        .hero-stat-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0;
            border: 1px solid rgba(255, 255, 255, .5);
            max-width: 500px;
            margin-top: 32px;
            border-radius: 2px;
            overflow: hidden;
        }

        .hstat {
            flex: 1;
            min-width: 90px;
            padding: 16px 14px;
            text-align: center;
            border-right: 1px solid rgba(255, 255, 255, .08);
            transition: background .2s;
        }

        .hstat:last-child {
            border-right: none;
        }

        .hstat:hover {
            background: rgba(255, 255, 255, .05);
        }

        .hstat-n {
            
            font-size: 1.6rem;
            font-style: italic;
            color: var(--zed-primary);
            line-height: 1;
        }

        .hstat-l {
            
            font-size: .55rem;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, .3);
            margin-top: 3px;
        }

        /* ── SECTION HEADERS ── */
        .sec-head {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 28px;
        }

        .sec-icon {
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .sec-title {
            
            font-size: clamp(1.2rem, 2.8vw, 1.7rem);
            font-weight: 700;
            color: var(--zed-dark-text);
        }

        .sec-rule {
            flex: 1;
            height: 1px;
            background: var(--zed-border-color);
        }

        /* ── PLATFORM PANEL CARDS ── */
        .panel-card {
            border: 1px solid var(--zed-border-color);
            padding: 18px 16px;
            height: 100%;
            transition: transform .27s, box-shadow .27s, border-color .27s;
            position: relative;
            overflow: hidden;
        }

        .panel-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--ac, var(--zed-primary));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform .3s ease;
        }

        .panel-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 36px rgba(0, 0, 0, .07);
            border-color: var(--ac, var(--zed-primary));
        }

        .panel-card:hover::after {
            transform: scaleX(1);
        }

        .panel-icon {
            font-size: 1.25rem;
            margin-bottom: 10px;
            display: block;
        }

        .panel-name {
            
            font-size: 1rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            margin-bottom: 7px;
        }

        .panel-text {
            font-size: .76rem;
            color: var(--zed-secondary);
            line-height: 1.72;
        }

        .panel-text strong {
            color: var(--zed-dark-text);
            font-weight: 600;
        }

        /* ── KEYBOARD SHORTCUTS ── */
        .shortcut-group {
            border: 1px solid var(--zed-border-color);
            padding: 22px 20px;
            height: 100%;
        }

        .shortcut-label {
            
            font-size: .58rem;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            margin-bottom: 14px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--zed-banner-bg-end);
        }

        .shortcut-row {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 6px 0;
            border-bottom: 1px dashed var(--zed-banner-bg-end);
            transition: background .15s;
        }

        .shortcut-row:last-child {
            border-bottom: none;
        }

        .shortcut-row:hover {
            background: var(--zed-card-back);
            margin: 0 -6px;
            padding: 6px 6px;
            border-radius: 2px;
        }

        kbd {
            display: inline-block;
            background: var(--zed-dark-text);
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
            padding: 3px 8px;
            border-radius: 3px;
            letter-spacing: .04em;
            white-space: nowrap;
            box-shadow: 0 2px 0 rgba(0, 0, 0, .3);
        }

        .shortcut-arrow {
            color: var(--gold);
            font-size: 1rem;
            flex-shrink: 0;
        }

        .shortcut-desc {
            font-size: .9rem;
            color: var(--zed-dark-text);
        }

        /* ── INDICATOR LIST ── */
        .indicator-row {
            display: flex;
            gap: 14px;
            padding: 16px 0;
            border-bottom: 1px solid var(--zed-banner-bg-end);
            align-items: flex-start;
            transition: background .15s;
        }

        .indicator-row:last-child {
            border-bottom: none;
        }

        .indicator-row:hover {
            background: var(--zed-banner-bg-start);
            margin: 0 -16px;
            padding: 16px 16px;
            border-radius: 3px;
        }

        .ind-icon {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--ic-bg, var(--zed-card-back));
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .ind-icon i {
            font-size: .85rem;
            color: var(--ic, var(--zed-primary));
        }

        .ind-name {
            
            font-size: .95rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            margin-bottom: 5px;
        }

        .ind-desc {
            font-size: .79rem;
            color: var(--zed-secondary);
            line-height: 1.72;
        }

        .ind-desc strong {
            color: var(--zed-dark-text);
            font-weight: 600;
        }

        .ind-desc .ob {
            color: var(--zed-primary);
            font-weight: 600;
        }

        .ind-desc .os {
            color: var(--zed-success-hover);
            font-weight: 600;
        }

        /* ── ORDER TYPE CARDS ── */
        .order-card {
            border: 1px solid var(--zed-border-color);
            padding: 22px 20px;
            height: 100%;
            position: relative;
            overflow: hidden;
            transition: transform .27s, box-shadow .27s, border-color .27s;
        }

        .order-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .07);
        }

        .order-label {
            
            font-size: .58rem;
            font-weight: 600;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--zed-primary);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .order-label i {
            color: var(--ac, var(--zed-primary));
        }

        .order-title {
            
            font-size: 1rem;
            font-weight: 700;
            color: var(--zed-dark-text);
            margin-bottom: 10px;
        }

        .order-text {
            font-size: .78rem;
            color: var(--zed-secondary);
            line-height: 1.75;
        }

        .order-text strong {
            color: var(--zed-dark-text);
            font-weight: 600;
        }

        .order-list {
            margin-top: 10px;
        }

        .ol-row {
            display: flex;
            gap: 8px;
            font-size: .76rem;
            padding: 4px 0;
            border-bottom: 1px dashed var(--zed-banner-bg-end);
            align-items: flex-start;
        }

        .ol-row:last-child {
            border-bottom: none;
        }

        .ol-key {
            
            font-weight: 600;
            color: var(--zed-dark-text);
            min-width: 110px;
            flex-shrink: 0;
        }

        .ol-val {
            color: var(--zed-secondary);
        }

        /* ── SCROLL REVEAL ── */
        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .45s ease, transform .45s ease;
        }

        .reveal.in {
            opacity: 1;
            transform: translateY(0);
        }

        /* ── MISC ── */
        section {
            padding: 60px 0;
        }

        .bg2 {
            background: var(--zed-banner-bg-start);
        }

        hr.divider {
            border: none;
            border-top: 1px solid var(--zed-border-color);
            margin: 0;
        }

        @media(max-width:768px) {
            .header-nav {
                display: none;
            }

            .hero-title {
                font-size: 1.8rem;
            }
        }

        @media(max-width:576px) {
            .hero-stat-row {
                border: none;
            }

            .hstat {
                border-right: none;
                border-bottom: 1px solid rgba(255, 255, 255, .08);
            }
        }
    </style>
    
    <!-- ── HERO BANNER ── -->
    <div class="hero-banner">
        <div class="hero-grid-bg"></div>
        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="hero-eyebrow">Complete Platform Guide · 2026 Edition</div>
                    <h1 class="hero-title">📊 MetaTrader 5 —<br><em>Complete Platform Guide</em></h1>
                    <p class="hero-sub">MetaTrader 5 is the industry-standard trading platform. <strong>Master it
                            completely</strong> to trade with speed and precision across Forex, Stocks, Futures, and
                        Crypto.</p>
                    <div class="hero-tags">
                        <span class="htag">Platform Layout</span>
                        <span class="htag">Keyboard Shortcuts</span>
                        <span class="htag">Essential Indicators</span>
                        <span class="htag">Order Types</span>
                        <span class="htag">Expert Advisors</span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-stat-row">
                        <div class="hstat">
                            <div class="hstat-n">9</div>
                            <div class="hstat-l">Timeframes</div>
                        </div>
                        <div class="hstat">
                            <div class="hstat-n">38+</div>
                            <div class="hstat-l">Indicators</div>
                        </div>
                        <div class="hstat">
                            <div class="hstat-n">6</div>
                            <div class="hstat-l">Order Types</div>
                        </div>
                        <div class="hstat">
                            <div class="hstat-n">MQL5</div>
                            <div class="hstat-l">Scripting</div>
                        </div>
                    </div>
                    <!-- Quick jump -->
                    <div
                        style="margin-top:16px;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.5);padding:18px 18px 12px;">
                        <div
                            style="font-size:.56rem;letter-spacing:.18em;text-transform:uppercase;color:#fff;margin-bottom:12px;">
                            Jump to section</div>
                        <div style="display:flex;flex-wrap:wrap;gap:6px;">
                            <a href="educator-metatrader-5#platform-layout"
                                style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.08);color:rgba(255,255,255,.55);font-size:.65rem;padding:5px 12px;text-decoration:none;border-radius:2px;transition:all .2s;"
                                onmouseover="this.style.background='var(--zed-primary)';this.style.color='#fff'"
                                onmouseout="this.style.background='rgba(255,255,255,.06)';this.style.color='rgba(255,255,255,.55)'">Platform
                                Layout</a>
                            <a href="educator-metatrader-5#shortcuts"
                                style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.08);color:rgba(255,255,255,.55);font-size:.65rem;padding:5px 12px;text-decoration:none;border-radius:2px;transition:all .2s;"
                                onmouseover="this.style.background='var(--zed-primary)';this.style.color='#fff'"
                                onmouseout="this.style.background='rgba(255,255,255,.06)';this.style.color='rgba(255,255,255,.55)'">Shortcuts</a>
                            <a href="educator-metatrader-5#indicators"
                                style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.08);color:rgba(255,255,255,.55);font-size:.65rem;padding:5px 12px;text-decoration:none;border-radius:2px;transition:all .2s;"
                                onmouseover="this.style.background='var(--zed-primary)';this.style.color='#fff'"
                                onmouseout="this.style.background='rgba(255,255,255,.06)';this.style.color='rgba(255,255,255,.55)'">Indicators</a>
                            <a href="educator-metatrader-5#orders"
                                style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.08);color:rgba(255,255,255,.55);font-size:.65rem;padding:5px 12px;text-decoration:none;border-radius:2px;transition:all .2s;"
                                onmouseover="this.style.background='var(--zed-primary)';this.style.color='#fff'"
                                onmouseout="this.style.background='rgba(255,255,255,.06)';this.style.color='rgba(255,255,255,.55)'">Order
                                Types</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ════ SECTION 1: PLATFORM LAYOUT ════ -->
    <section id="platform-layout">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-icon">🖥️</span>
                <h2 class="sec-title">Platform Layout — Key Panels</h2>
                <div class="sec-rule"></div>
            </div>
            <div class="row g-3">

                <div class="col-6 col-md-4 col-lg reveal">
                    <div class="panel-card" style="--ac:var(--blue)">
                        <span class="panel-icon">📈</span>
                        <div class="panel-name">Charts</div>
                        <p class="panel-text">9 timeframes: M1, M5, M15, M30, H1, H4, D1, W1, MN. <strong>38+ built-in
                                indicators.</strong> Custom templates. Object drawing tools.</p>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg reveal">
                    <div class="panel-card" style="--ac:var(--orange)">
                        <span class="panel-icon">📋</span>
                        <div class="panel-name">Market Watch</div>
                        <p class="panel-text">Live bid/ask quotes. Right-click → New Order. <strong>Show/hide
                                symbols.</strong> Sort by name, spread, or change.</p>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg reveal">
                    <div class="panel-card" style="--ac:var(--zed-primary)">
                        <span class="panel-icon">🖥️</span>
                        <div class="panel-name">Terminal</div>
                        <p class="panel-text">Tabs: Trade (open positions), History, Alerts, Mailbox, Monitor.
                            <strong>View equity, balance, and free margin live.</strong></p>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg reveal">
                    <div class="panel-card" style="--ac:var(--zed-success-hover)">
                        <span class="panel-icon">🧭</span>
                        <div class="panel-name">Navigator</div>
                        <p class="panel-text">Your account tree, indicators, EAs, and scripts. <strong>Drag-and-drop
                                indicators onto charts.</strong></p>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg reveal">
                    <div class="panel-card" style="--ac:var(--purple)">
                        <span class="panel-icon">💻</span>
                        <div class="panel-name">MQL5 Editor</div>
                        <p class="panel-text">Code EAs, indicators, and scripts in MQL5 (C++-like). <strong>Built-in
                                debugger and MetaEditor IDE.</strong></p>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg reveal">
                    <div class="panel-card" style="--ac:var(--gold)">
                        <span class="panel-icon">⚗️</span>
                        <div class="panel-name">Strategy Tester</div>
                        <p class="panel-text">Backtest EAs on historical data. <strong>Visual mode, optimization, and
                                forward testing capabilities.</strong></p>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg reveal">
                    <div class="panel-card" style="--ac:var(--blue)">
                        <span class="panel-icon">📰</span>
                        <div class="panel-name">News Feed</div>
                        <p class="panel-text">Real-time market news from MQL5.com. <strong>Integrate with trading
                                calendar and alerts.</strong></p>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg reveal">
                    <div class="panel-card" style="--ac:var(--orange)">
                        <span class="panel-icon">🔔</span>
                        <div class="panel-name">Alerts</div>
                        <p class="panel-text">Price level alerts, mobile push notifications, email alerts. <strong>Never
                                miss your key level again.</strong></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="divider" />

    <!-- ════ SECTION 2: KEYBOARD SHORTCUTS ════ -->
    <section id="shortcuts" class="bg2">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-icon">⌨️</span>
                <h2 class="sec-title">Essential MT5 Keyboard Shortcuts</h2>
                <div class="sec-rule"></div>
            </div>
            <div class="row g-3">

                <!-- Trading Shortcuts -->
                <div class="col-md-3 reveal col-sm-12 col-lg-3">
                    <div class="shortcut-group">
                        <div class="shortcut-label">Trading Shortcuts</div>
                        <div class="shortcut-row"><kbd>F9</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">New Order window</span></div>
                        <div class="shortcut-row"><kbd>F7</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">EA Properties</span></div>
                        <div class="shortcut-row"><kbd>F6</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Strategy Tester</span></div>
                        <div class="shortcut-row"><kbd>F5</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Navigator panel</span></div>
                        <div class="shortcut-row"><kbd>Del</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Delete selected object</span></div>
                    </div>
                </div>

                <!-- Chart Shortcuts -->
                <div class="col-md-3 reveal col-sm-12 col-lg-3">
                    <div class="shortcut-group">
                        <div class="shortcut-label">Chart Shortcuts</div>
                        <div class="shortcut-row"><kbd>Ctrl+M</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Market Watch</span></div>
                        <div class="shortcut-row"><kbd>Ctrl+D</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Data Window</span></div>
                        <div class="shortcut-row"><kbd>Ctrl+Z</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Undo drawing</span></div>
                        <div class="shortcut-row"><kbd>Alt+1</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Bar chart</span></div>
                        <div class="shortcut-row"><kbd>Alt+2</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Candlestick chart</span></div>
                    </div>
                </div>

                <!-- Zoom & Navigation -->
                <div class="col-md-3 reveal col-sm-12 col-lg-3">
                    <div class="shortcut-group">
                        <div class="shortcut-label">Zoom & Navigation</div>
                        <div class="shortcut-row"><kbd>+/-</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Zoom in/out</span></div>
                        <div class="shortcut-row"><kbd>Home/End</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Beginning/End of chart</span></div>
                        <div class="shortcut-row"><kbd>← →</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Scroll chart</span></div>
                        <div class="shortcut-row"><kbd>Ctrl+A</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Auto-scroll</span></div>
                        <div class="shortcut-row"><kbd>Esc</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Cancel drawing</span></div>
                    </div>
                </div>

                <!-- Indicator Shortcuts -->
                <div class="col-md-3 reveal col-sm-12 col-lg-3">
                    <div class="shortcut-group">
                        <div class="shortcut-label">Indicator Shortcuts</div>
                        <div class="shortcut-row"><kbd>Ctrl+I</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Indicator list</span></div>
                        <div class="shortcut-row"><kbd>Ctrl+L</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Draw/hide line</span></div>
                        <div class="shortcut-row"><kbd>Ctrl+B</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Objects list</span></div>
                        <div class="shortcut-row"><kbd>Ctrl+Y</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Show periods</span></div>
                        <div class="shortcut-row"><kbd>Ctrl+G</kbd><span class="shortcut-arrow">→</span><span
                                class="shortcut-desc">Grid on/off</span></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <hr class="divider" />

    <!-- ════ SECTION 3: INDICATORS ════ -->
    <section id="indicators">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-icon">📊</span>
                <h2 class="sec-title">Essential Indicators Explained</h2>
                <div class="sec-rule"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="indicator-row reveal" style="--ic:var(--blue);--ic-bg:var(--blue-s)">
                        <div class="ind-icon"><i class="fas fa-wave-square"></i></div>
                        <div>
                            <div class="ind-name">Moving Average (MA / EMA)</div>
                            <p class="ind-desc">Smooths price to show trend direction. <strong>EMA 20</strong> =
                                short-term trend. <strong>EMA 50</strong> = medium-term. <strong>EMA 200</strong> =
                                long-term. <em>Golden Cross:</em> EMA20 crosses above EMA50 = buy signal.</p>
                        </div>
                    </div>

                    <div class="indicator-row reveal" style="--ic:var(--zed-primary);--ic-bg:var(--zed-light-red-hover)">
                        <div class="ind-icon"><i class="fas fa-tachometer-alt"></i></div>
                        <div>
                            <div class="ind-name">RSI (Relative Strength Index, 14)</div>
                            <p class="ind-desc">Measures momentum 0–100. <span class="ob">Above 70 = overbought
                                    (possible reversal)</span> · <span class="os">Below 30 = oversold.</span> Most
                                effective on H4 and Daily timeframes.</p>
                        </div>
                    </div>

                    <div class="indicator-row reveal" style="--ic:var(--gold);--ic-bg:var(--gold-s)">
                        <div class="ind-icon"><i class="fas fa-bolt"></i></div>
                        <div>
                            <div class="ind-name">MACD (Moving Avg Convergence Divergence)</div>
                            <p class="ind-desc">Two lines + histogram. Signal: MACD line crosses signal line.
                                <strong>Histogram above zero = bullish momentum.</strong> Look for divergence with price
                                for reversals.</p>
                        </div>
                    </div>

                    <div class="indicator-row reveal" style="--ic:var(--purple);--ic-bg:rgba(107,33,212,.07)">
                        <div class="ind-icon"><i class="fas fa-circle-notch"></i></div>
                        <div>
                            <div class="ind-name">Bollinger Bands (20, 2)</div>
                            <p class="ind-desc">Three lines: middle SMA20 + upper/lower bands (2 std deviations).
                                <strong>Price touching upper band = resistance. Lower band = support.</strong> Squeeze =
                                big move coming (breakout).</p>
                        </div>
                    </div>

                    <div class="indicator-row reveal" style="--ic:var(--blue);--ic-bg:var(--blue-s)">
                        <div class="ind-icon"><i class="fas fa-chart-area"></i></div>
                        <div>
                            <div class="ind-name">Stochastic Oscillator (14, 3, 3)</div>
                            <p class="ind-desc">Shows momentum 0–100. <span class="ob">Above 80 = overbought.</span>
                                <span class="os">Below 20 = oversold.</span> Signal: %K crosses %D. <strong>More
                                    reliable in ranging markets.</strong></p>
                        </div>
                    </div>

                    <div class="indicator-row reveal" style="--ic:var(--zed-secondary);--ic-bg:var(--zed-card-back)">
                        <div class="ind-icon"><i class="fas fa-expand-arrows-alt"></i></div>
                        <div>
                            <div class="ind-name">ATR (Average True Range, 14)</div>
                            <p class="ind-desc">Measures volatility, NOT direction. <strong>High ATR = volatile market,
                                    widen your SL. Low ATR = calm market, tighter SL.</strong> Use 1.5–2× ATR for SL
                                placement.</p>
                        </div>
                    </div>

                    <div class="indicator-row reveal" style="--ic:var(--zed-success-hover);--ic-bg:var(--zed-success-hover-s)">
                        <div class="ind-icon"><i class="fas fa-cloud"></i></div>
                        <div>
                            <div class="ind-name">Ichimoku Cloud</div>
                            <p class="ind-desc">All-in-one indicator: trend, support/resistance, momentum. <strong>Price
                                    above cloud = bullish. Kumo Breakout = powerful entry signal.</strong> Best on H4
                                and Daily charts.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <hr class="divider" />

    <!-- ════ SECTION 4: ORDER TYPES ════ -->
    <section id="orders" class="bg2">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-icon">📋</span>
                <h2 class="sec-title">MT5 Order Types &amp; Execution</h2>
                <div class="sec-rule"></div>
            </div>
            <div class="row g-3">

                <div class="col-md-6 reveal">
                    <div class="order-card" style="--ac:var(--zed-primary)">
                        <div class="order-label"><i class="fas fa-bolt"></i> Instant Execution</div>
                        <div class="order-title">Instant Execution</div>
                        <p class="order-text">Order executed at the quoted price. Broker may requote in fast markets.
                            <strong>Used by market makers.</strong> Requote = slippage protection for broker.</p>
                    </div>
                </div>

                <div class="col-md-6 reveal">
                    <div class="order-card" style="--ac:var(--blue)">
                        <div class="order-label"><i class="fas fa-server"></i> Market Execution</div>
                        <div class="order-title">Market Execution</div>
                        <p class="order-text">Order at the best available price. <strong>No requotes but slippage
                                possible.</strong> Used by ECN/STP brokers. More transparent pricing.</p>
                    </div>
                </div>

                <div class="col-md-6 reveal">
                    <div class="order-card" style="--ac:var(--gold)">
                        <div class="order-label"><i class="fas fa-list"></i> 6 Pending Order Types</div>
                        <div class="order-title">Pending Orders</div>
                        <div class="order-list">
                            <div class="ol-row"><span class="ol-key">Buy Limit</span><span class="ol-val">Buy below
                                    current price</span></div>
                            <div class="ol-row"><span class="ol-key">Sell Limit</span><span class="ol-val">Sell above
                                    current price</span></div>
                            <div class="ol-row"><span class="ol-key">Buy Stop</span><span class="ol-val">Buy above
                                    current price</span></div>
                            <div class="ol-row"><span class="ol-key">Sell Stop</span><span class="ol-val">Sell below
                                    current price</span></div>
                            <div class="ol-row"><span class="ol-key">Buy Stop Limit</span><span class="ol-val">Hybrid
                                    pending</span></div>
                            <div class="ol-row"><span class="ol-key">Sell Stop Limit</span><span class="ol-val">Hybrid
                                    pending</span></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 reveal">
                    <div class="order-card" style="--ac:var(--zed-success-hover)">
                        <div class="order-label"><i class="fas fa-robot"></i> Expert Advisors (EA)</div>
                        <div class="order-title">Expert Advisors</div>
                        <p class="order-text">Automated strategies that trade 24/5. <strong>Attach to chart, set
                                parameters, run on VPS.</strong> Can backtest on Strategy Tester before going live.
                            Coded in MQL5 language.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        // Scroll reveal
        const obs = new IntersectionObserver(entries => {
            entries.forEach((e, i) => {
                if (e.isIntersecting) {
                    setTimeout(() => e.target.classList.add('in'), i * 60);
                    obs.unobserve(e.target);
                }
            });
        }, { threshold: 0.07 });
        document.querySelectorAll('.reveal').forEach(r => obs.observe(r));

        // Nav active state on scroll
        const sections = document.querySelectorAll('section[id]');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(s => { if (window.scrollY >= s.offsetTop - 120) current = s.id; });
            document.querySelectorAll('.hnav-btn').forEach(btn => {
                btn.classList.toggle('active', btn.textContent.toLowerCase().replace(/\s/g, '').includes(current.replace('-', '')));
            });
        });
    </script>
<?php
include_once ('elements/footer.php');
?>