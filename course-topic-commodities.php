<?php 
include_once ('elements/header.php');
?>

    <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">
                Introduction to <span style="color: var(--zed-primary)">Commodities</span>
            </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                Learn what commodities are, how they are traded, and their role in global markets.
            </p>
            <div class="d-none open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
                <button class="rounded-pill">ZERO TO HERO</button>
            </div>
        </div>
    </header>

    <div class="container py-5">
        <div class="row">
            <?php
            $topicsArr = [
                [
                    'topic' => 'Energy Commodities',
                    'level' => 'Beginner',
                    'description' => 'Understand major energy markets like crude oil and natural gas.',
                    'topicLeft' => [
                        'Crude Oil (WTI & Brent)',
                        'Natural Gas Market',
                        'Supply & Demand Factors',
                    ],
                    'topicRight' => [
                        'OPEC and Global Influence',
                        'Energy Price Volatility'
                    ]
                ],[
                    'topic' => 'Precious Metals',
                    'level' => 'Beginner',
                    'description' => 'Explore gold, silver, and other metals used for hedging and investment.',
                    'topicLeft' => [
                        'Gold as Safe Haven Asset',
                        'Silver & Industrial Demand',
                        'Inflation Hedge Strategies'
                    ],
                    'topicRight' => [
                        'Central Bank Reserves',
                        'Price Drivers of Metals'
                    ]
                ],[
                    'topic' => 'Agricultural Commodities',
                    'level' => 'Beginner',
                    'description' => 'Learn how food and crop markets operate globally.',
                    'topicLeft' => [
                        'Major Crops (Wheat, Corn, Soybeans)',
                        'Seasonal Trends',
                        'Weather Impact on Prices',
                    ],
                    'topicRight' => [
                        'Global Trade & Exports',
                        'Supply Chain Factors'
                    ]
                ],[
                    'topic' => 'Industrial Metals',
                    'level' => 'Beginner',
                    'description' => 'Study metals used in construction and manufacturing industries.',
                    'topicLeft' => [
                        'Copper, Aluminum, Zinc',
                        'Infrastructure Demand',
                        'China’s Role in Demand'
                    ],
                    'topicRight' => [
                        'Economic Cycles Impact',
                        'Price Correlations'
                    ]
                ],[
                    'topic' => 'Commodity Trading Basics',
                    'level' => 'Beginner',
                    'description' => 'Understand how to trade commodities using different instruments.',
                    'topicLeft' => [
                        'Futures Contracts Explained',
                        'Commodity ETFs & Mutual Funds',
                        'Margin & Leverage'
                    ],
                    'topicRight' => [
                        'Order Types',
                        'Trading Platforms'
                    ]
                ],[
                    'topic' => 'Technical Analysis for Commodities',
                    'level' => 'Beginner',
                    'description' => 'Use charts and indicators to predict commodity price movements.',
                    'topicLeft' => [
                        'Trend Analysis',
                        'Support & Resistance',
                        'Moving Averages'
                    ],
                    'topicRight' => [
                        'RSI & MACD Indicators',
                        'Volume & Open Interest'
                    ]
                ],[
                    'topic' => 'Fundamental Analysis in Commodities',
                    'level' => 'Beginner',
                    'description' => 'Analyze real-world factors that influence commodity prices.',
                    'topicLeft' => [
                        'Supply & Demand Economics',
                        'Inventory Reports',
                        'Geopolitical Events'
                    ],
                    'topicRight' => [
                        'Currency Impact (USD Effect)',
                        'Inflation & Interest Rates'
                    ]
                ],[
                    'topic' => 'Commodity Futures & Options',
                    'level' => 'Beginner',
                    'description' => 'Advanced trading using derivatives in commodity markets.',
                    'topicLeft' => [
                        'Futures vs Options',
                        'Hedging Strategies',
                        'Speculation vs Hedging'
                    ],
                    'topicRight' => [
                        'Contract Expiry & Rollovers',
                        'Risk Management'
                    ]
                ],[
                    'topic' => 'Global Commodity Markets',
                    'level' => 'Beginner',
                    'description' => 'Understand how commodities impact and connect global economies.',
                    'topicLeft' => [
                        'Major Commodity Exchanges (CME, MCX)',
                        'Emerging Markets Influence',
                        'Trade Policies & Tariffs'
                    ],
                    'topicRight' => [
                        'Global Supply Chains',
                        'Economic Indicators'
                    ]
                ],[
                    'topic' => 'Risk Management in Commodities',
                    'level' => 'Beginner',
                    'description' => 'Protect your capital in volatile commodity markets.',
                    'topicLeft' => [
                        'Position Sizing',
                        'Stop Loss Strategies',
                        'Diversification'
                    ],
                    'topicRight' => [
                        'Hedging Techniques',
                        'Managing Volatility'
                    ]
                ],[
                    'topic' => 'Advanced Commodity Strategies',
                    'level' => 'Beginner',
                    'description' => 'Professional-level strategies for experienced traders.',
                    'topicLeft' => [
                        'Spread Trading',
                        'Arbitrage Opportunities',
                        'Seasonal Trading Strategies'
                    ],
                    'topicRight' => [
                        'Intermarket Analysis',
                        'Portfolio Hedging'
                    ]
                ],
            ];

            foreach( $topicsArr as $k => $val ){ ?>
                <div class="col-md-6 col-12 mb-4 m-auto">
                    <div class="course-card">
                        <span class="badge-level"><?=$val['level'] ?></span>
                        <div class="row g-3">
                            <div class="col-12">
                                <h5 class="course-title">
                                    <?=$val['topic'] ?>
                                </h5>
                                <p class="course-desc">
                                    <?=$val['description'] ?>
                                </p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/300/300?<?=$k;?>" class="course-img">
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="course-list">
                                            <?php foreach( $val['topicLeft'] as $left ){ ?>
                                                <li>
                                                    <i class="fa fa-chevron-right"></i>
                                                    <?=$left ?>
                                                </li>
                                            <?php }

                                            foreach( $val['topicRight'] as $right ){ ?>
                                                <li>
                                                    <i class="fa fa-chevron-right"></i>
                                                    <?=$right ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </div>
    
    <footer class="bg-secondary py-5 mt-5 border-top border-danger border-4">
        <div class="container text-center text-white py-4">
            <h2 class="fw-800 mb-3">Unlock <span style="color: var(--prinary-teal)">Elite</span> Access</h2>
            <p class="text-white small mx-auto mb-4" style="max-width: 500px;">Get full curriculum access, live trade webinars, and our private institutional sentiment dashboard.</p>
            <button class="btn btn-lg btn-danger rounded-pill px-5 fw-bold text-uppercase fs-7">Upgrade Now</button>
        </div>
    </footer>
<?php
include_once ('elements/footer.php');
?>