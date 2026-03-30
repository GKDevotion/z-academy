<?php 
include_once ('elements/header.php');
?>

    <header class="page-header">
        <div class="webinar container text-center">
            <h1 class="display-3 fw-800 animate__animated animate__fadeIn section-title mb-4">
                <span id="typing-text"></span>
            </h1>
            <p class="lead opacity-75">
                Meet the industry experts, traders, and analysts who share their knowledge and insights in our webinars.
            </p>
        </div>
    </header>

    <div class="webinar container py-5">

        <div class="events-grid">
            <?php
            $webinarArr = [
                [
                    'title' => 'Daniel Wosenga',
                    'type' => 'Market Analyst',
                    'description' => 'Specializes in global macro trends and forex market strategies with years of institutional experience.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Forex Market Analysis',
                        'Economic Indicators'
                    ],
                    'topicRight' => [
                        'Risk Management',
                        'Trading Psychology'
                    ]
                ],[
                    'title' => 'Qasim Esak',
                    'type' => 'Trading Educator',
                    'description' => 'Focused on simplifying trading concepts for beginners and intermediate traders.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Copy Trading',
                        'Beginner Trading Strategies'
                    ],
                    'topicRight' => [
                        'Portfolio Building',
                        'Market Fundamentals'
                    ]
                ],[
                    'title' => 'Humphrey Manyara',
                    'type' => 'Trading Specialist',
                    'description' => 'Expert in social trading systems and automation tools for consistent trading performance.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Copy Trading Systems',
                        'Automated Strategies'
                    ],
                    'topicRight' => [
                        'Risk Allocation',
                        'Platform Optimization'
                    ]
                ],[
                    'title' => 'Sarah Johnson',
                    'type' => 'Crypto Analyst',
                    'description' => 'Provides deep insights into cryptocurrency trends, DeFi, and blockchain ecosystems.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Bitcoin & Altcoins',
                        'DeFi & Web3',
                    ],
                    'topicRight' => [
                        'Market Sentiment',
                        'On-chain Analysis'
                    ]
                ],[
                    'title' => 'Michael Chen',
                    'type' => 'Commodities Expert',
                    'description' => 'Specialist in commodities trading including gold, oil, and agricultural markets.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Gold & Metals',
                        'Oil Market Trends',
                    ],
                    'topicRight' => [
                        'Commodity Cycles',
                        'Global Supply Chains'
                    ]
                ],[
                    'title' => 'Priya Sharma',
                    'type' => 'Technical Analyst',
                    'description' => 'Focused on chart analysis and technical indicators for precise trade execution.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Candlestick Patterns',
                        'RSI & MACD'
                    ],
                    'topicRight' => [
                        'Trend Analysis',
                        'Breakout Trading'
                    ]
                ],[
                    'title' => 'David Miller',
                    'type' => 'Derivatives Trader',
                    'description' => 'Expert in futures, options, and advanced trading strategies.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Futures Trading',
                        'Options Strategies',
                    ],
                    'topicRight' => [
                        'Hedging Techniques',
                        'Risk Management'
                    ]
                ],[
                    'title' => 'Ahmed Khan',
                    'type' => 'Forex Strategist',
                    'description' => 'Specializes in currency trading and macroeconomic-driven strategies.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Currency Pairs Analysis',
                        'Interest Rate Impact',
                    ],
                    'topicRight' => [
                        'Central Bank Policies', 
                        'Trade Setups'
                    ]
                ],[
                    'title' => 'Emma Williams',
                    'type' => 'Investment Advisor',
                    'description' => 'Helps traders build long-term portfolios and manage financial risks.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Portfolio Management',
                        'Asset Allocation',
                    ],
                    'topicRight' => [
                        'Long-term Investing',
                        'Wealth Strategies'
                    ]
                ],[
                    'title' => 'Raj Patel',
                    'type' => 'Market Analyst',
                    'description' => 'Focuses on data-driven insights and global financial market research.',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        'Market Trends',
                        'Data Analysis',
                    ],
                    'topicRight' => [
                        'Economic Reports',
                        'Forecasting'
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
        const text = "Webinars Contributors";
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