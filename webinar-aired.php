<?php 
include_once ('elements/header.php');
?>

    <header class="page-header">
        <div class="webinar container text-center">
            <h1 class="display-3 fw-800 animate__animated animate__fadeIn section-title mb-4">
                <span id="typing-text">Webinars Aired</span>
            </h1>
            <p class="lead opacity-75">
                Explore previously conducted webinars, learn from expert sessions, and revisit key market insights anytime.
            </p>
        </div>
    </header>

    <div class="webinar container py-5">

        <div class="events-grid">
            <?php
            $webinarArr = [
                [
                    'title' => 'Smart Trading with CopyTrading',
                    'type' => 'Upcoming',
                    'description' => 'A complete walkthrough of copy trading strategies and how beginners can automate trading.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Introduction to Copy Trading',
                        'Risk Management in Copy Trading',
                        'Selecting Top Traders'
                    ],
                    'topicRight' => [
                        'Portfolio Diversification',
                        'Live Platform Demo'
                    ]
                ],[
                    'title' => 'CopyTrading Masterclass by Experts',
                    'type' => 'Upcoming',
                    'description' => 'Insights from industry experts on maximizing profits using copy trading tools.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Advanced Copy Strategies',
                        'Performance Tracking',
                        'Avoiding Common Mistakes'
                    ],
                    'topicRight' => [
                        'Platform Optimization',
                        'Real Case Studies'
                    ]
                ],[
                    'title' => 'Market Reaction: Election Special',
                    'type' => 'Upcoming',
                    'description' => 'Deep dive into how elections impact global financial markets.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Market Volatility During Elections',
                        'Impact on Gold, NASDAQ, Forex',
                        'Historical Case Studies'
                    ],
                    'topicRight' => [
                        'Risk Hedging Strategies',
                        'Post-Election Trends'
                    ]
                ],[
                    'title' => 'Gold & Commodities Market Outlook',
                    'type' => 'Upcoming',
                    'description' => 'Analysis of gold, oil, and commodity trends for traders and investors.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Gold Price Drivers',
                        'Oil Market Analysis',
                        'Inflation Impact'
                    ],
                    'topicRight' => [
                        'Commodity Cycles',
                        'Trading Opportunities'
                    ]
                ],[
                    'title' => 'Forex Market Weekly Analysis',
                    'type' => 'Upcoming',
                    'description' => 'Weekly recap of forex trends and currency pair movements.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'EUR/USD & GBP/USD Trends',
                        'Interest Rate Impact',
                        'Central Bank Policies'
                    ],
                    'topicRight' => [
                        'Technical Levels',
                        'Trade Setups'
                    ]
                ],[
                    'title' => 'Crypto Market Volatility Explained',
                    'type' => 'Upcoming',
                    'description' => 'Understanding sudden crypto market movements and how to trade them.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Bitcoin & Altcoin Trends',
                        'Market Sentiment Analysis',
                        'Whale Movements'
                    ],
                    'topicRight' => [
                        'Risk Management',
                        'Trading Strategies'
                    ]
                ],[
                    'title' => 'Technical Analysis Bootcamp',
                    'type' => 'Upcoming',
                    'description' => 'A practical session on mastering charts and indicators.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Candlestick Patterns',
                        'Support & Resistance',
                        'Trendlines'
                    ],
                    'topicRight' => [
                        'Breakout Strategies',
                        'RSI & MACD'
                    ]
                ],[
                    'title' => 'Interest Rate & Inflation Impact',
                    'type' => 'Upcoming',
                    'description' => 'How macroeconomic factors affect trading decisions.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'CPI & Inflation Data',
                        'Interest Rate Decisions',
                        'Central Bank Policies',
                    ],
                    'topicRight' => [
                        'Market Correlations',
                        'Economic Indicators'
                    ]
                ],[
                    'title' => 'Futures & Derivatives Deep Dive',
                    'type' => 'Upcoming',
                    'description' => 'Understanding futures trading and advanced derivatives strategies.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Futures Contracts',
                        'Margin & Leverage',
                        'Hedging Strategies'
                    ],
                    'topicRight' => [
                        'Spread Trading',
                        'Risk Management'
                    ]
                ],[
                    'title' => 'Beginner Trading Bootcamp',
                    'type' => 'Upcoming',
                    'description' => 'Perfect starting point for new traders entering financial markets.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Trading Basics',
                        'Market Types',
                        'Platform Usage'
                    ],
                    'topicRight' => [
                        'Risk Control',
                        'First Trade Setup'
                    ]
                ],
            ];
            foreach( $webinarArr as $k => $val ){ ?>
                <!-- Event 1 -->
                <div class="event-card fade-up">
                    <span class="badge-live"><?=$val['type'] ?></span>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="event-title"><?=$val['title'] ?></div>
                            <div class="event-desc"><?=$val['description'] ?></div>
                        </div>
                        <div class="col-md-4">
                            <div class="meta-box">
                                <div class="meta-item"><strong>Date: </strong><?=$val['date'] ?></div>
                                <div class="meta-item"><strong>Time: </strong><?=$val['time'] ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="course-list p-0">
                                    <?php foreach( $val['topicLeft'] as $left ){ ?>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <?=$left ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="course-list p-0">
                                    <?php foreach( $val['topicRight'] as $right ){ ?>
                                        <li>
                                            <i class="fa fa-chevron-right"></i>
                                            <?=$right ?>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="w-100 text-center">
                            <button class="btn-join mt-3 w-25">Join Now</button>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </div>
    
    <script>
        // typing effect
        const text = "Aired Events";
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