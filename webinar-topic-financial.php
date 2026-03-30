<?php 
include_once ('elements/header.php');
?>
    <header class="page-header">
        <div class="webinar container text-center">
            <h1 class="display-3 fw-800 animate__animated animate__fadeIn section-title mb-4">
                <span id="typing-text"></span>
            </h1>
            <p class="lead opacity-75">
                Gain practical knowledge and real-world insights from expert-led financial webinars covering trading, investing, and global markets.
            </p>
        </div>
    </header>

    <div class="webinar-topics container py-5">
        <div class="row g-4 justify-content-center">
            <?php
            $webinarTopicArr = [
                [
                    'title' => 'Market Fundamentals',
                    'description' => '',
                    'topic' => [
                        'How financial markets work (Forex, Stocks, Crypto)',
                        'Key market participants (Retail vs Institutional)',
                        'Understanding liquidity & volatility',
                        'Market cycles (Bullish vs Bearish trends)',
                        'Global financial ecosystem overview',
                    ],
                    'box-icon' => '📊'
                ],[
                    'title' => 'Technical Analysis Skills',
                    'description' => '',
                    'topic' => [
                        'Candlestick patterns & chart reading',
                        'Support & resistance zones',
                        'Trend identification (Uptrend/Downtrend)',
                        'Indicators (RSI, MACD, Moving Averages)',
                        'Entry & exit strategies',
                    ],
                    'box-icon' => '📈'
                ],[
                    'title' => 'Fundamental Analysis',
                    'description' => '',
                    'topic' => [
                        'Economic indicators (GDP, CPI, NFP)',
                        'Interest rates & central bank policies',
                        'News impact on markets',
                        'Company/asset valuation basics',
                        'Long-term investment analysis',
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Trading Strategies',
                    'description' => '',
                    'topic' => [
                        'Intraday vs Swing trading',
                        'Breakout & reversal strategies',
                        'Trend-following systems',
                        'Scalping basics',
                        'Strategy backtesting',
                    ],
                    'box-icon' => '⚡'
                ],[
                    'title' => 'Risk Management',
                    'description' => '',
                    'topic' => [
                        'Position sizing techniques',
                        'Risk-reward ratio (RRR)',
                        'Stop-loss & take-profit strategies',
                        'Avoiding overtrading',
                        'Capital preservation methods',
                    ],
                    'box-icon' => '🛡️'
                ],[
                    'title' => 'Portfolio Management',
                    'description' => '',
                    'topic' => [
                        'Diversification strategies',
                        'Asset allocation (Stocks, Crypto, Commodities)',
                        'Long-term vs short-term investing',
                        'Balancing risk vs return',
                        'Portfolio rebalancing',
                    ],
                    'box-icon' => '💰'
                ],[
                    'title' => 'Global Market Insights',
                    'description' => '',
                    'topic' => [
                        'Impact of geopolitical events',
                        'Correlation between markets',
                        'Currency strength & weakness',
                        'Commodity and stock relationships',
                        'Global economic trends',
                    ],
                    'box-icon' => '🌍'
                ],[
                    'title' => 'Modern Trading Tools',
                    'description' => '',
                    'topic' => [
                        'Trading platforms (MT4, MT5, TradingView)',
                        'Copy trading systems',
                        'Automated trading basics (Bots)',
                        'Charting tools & indicators',
                        'Data-driven trading decisions',
                    ],
                    'box-icon' => '🤖'
                ],[
                    'title' => 'Financial Safety & Psychology',
                    'description' => '',
                    'topic' => [
                        'Trading psychology & emotional control',
                        'Avoiding scams & fraud',
                        'Discipline & consistency',
                        'Handling losses professionally',
                        'Building trader mindset',
                    ],
                    'box-icon' => '🔐'
                ],[
                    'title' => 'Advanced Financial Concepts',
                    'description' => '',
                    'topic' => [
                        'Derivatives (Futures & Options)',
                        'Hedging strategies',
                        'Arbitrage opportunities',
                        'Leverage & margin trading',
                        'Institutional trading techniques',
                    ],
                    'box-icon' => '🚀'
                ]
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
        const text = "Financial Webinar Learning Points";
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