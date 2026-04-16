<?php 
include_once ('elements/header.php');
?>

     <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Webinar<span style="color: var(--primary-teal);"> Trading</span> </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Unlock powerful trading techniques and market insights to make confident decisions and grow your portfolio consistently.</p>
            <div class="open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
                <button class="rounded-pill d-none">ZERO TO HERO</button>
            </div>
        </div>
    </header>

    <div class="webinar-topics container py-5">
        <div class="row g-4 justify-content-center">
            <?php
            $webinarTopicArr = [
                [
                    'title' => 'Technical Analysis Mastery',
                    'description' => '',
                    'topic' => [
                        'Candlestick patterns (Doji, Engulfing, Hammer)',
                        'Support & Resistance zones',
                        'Trendlines & chart patterns',
                        'Indicators (RSI, MACD, Moving Averages)',
                        'Entry & Exit strategies',
                    ],
                    'box-icon' => '📈'
                ],[
                    'title' => 'Trading Psychology',
                    'description' => '',
                    'topic' => [
                        'Controlling emotions (fear & greed)',
                        'Discipline & consistency',
                        'Avoiding overtrading',
                        'Building a trading mindset',
                        'Handling losses professionally',
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Risk Management Strategies',
                    'description' => '',
                    'topic' => [
                        'Risk-to-reward ratio (RRR)',
                        'Stop-loss & take-profit strategies',
                        'Position sizing techniques',
                        'Capital preservation methods',
                        'Portfolio diversification',
                    ],
                    'box-icon' => '💰'
                ],[
                    'title' => 'Live Market Trading',
                    'description' => '',
                    'topic' => [
                        'Real-time trade execution',
                        'Reading live charts',
                        'Identifying market trends instantly',
                        'Entry timing techniques',
                        'Managing trades in live conditions',
                    ],
                    'box-icon' => '⚡'
                ],[
                    'title' => 'Fundamental Analysis',
                    'description' => '',
                    'topic' => [
                        'Economic indicators (GDP, CPI, NFP)',
                        'Interest rate decisions',
                        'Central bank policies',
                        'News impact on markets',
                        'Global events & volatility',
                    ],
                    'box-icon' => '🌍'
                ],[
                    'title' => 'Copy Trading & Automation',
                    'description' => '',
                    'topic' => [
                        'How copy trading works',
                        'Selecting profitable traders',
                        'Risk control in automation',
                        'Portfolio allocation',
                        'Passive income strategies',
                    ],
                    'box-icon' => '🔁'
                ],[
                    'title' => 'Futures & Derivatives Trading',
                    'description' => '',
                    'topic' => [
                        'Futures contracts basics',
                        'Long vs Short positions',
                        'Leverage in derivatives',
                        'Hedging strategies',
                        'Margin & liquidation risks',
                    ],
                    'box-icon' => '🏦'
                ],[
                    'title' => 'Multi-Market Opportunities',
                    'description' => '',
                    'topic' => [
                        'Trading across Forex, Crypto, Stocks',
                        'Correlation between markets',
                        'Diversification strategies',
                        'Global trading opportunities',
                        'Sector-based trading',
                    ],
                    'box-icon' => '🌐'
                ],[
                    'title' => 'Advanced Trading Strategies',
                    'description' => '',
                    'topic' => [
                        'Breakout & reversal strategies',
                        'Scalping techniques',
                        'Swing trading setups',
                        'Algorithmic trading basics',
                        'Institutional trading concepts',
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

    <script>
        // typing effect
        const text = "Trading Fundamentals";
        let i = 0;
        const speed = 70;

        function typeEffect(){
            if(i < text.length){
                document.getElementById("typing-text").innerHTML += text.charAt(i);
                i++;
                setTimeout(typeEffect, speed);
            }
        }

        typeEffect();
    </script>

<?php
include_once ('elements/footer.php');
?>