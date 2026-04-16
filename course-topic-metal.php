<?php 
include_once ('elements/header.php');
?>

    <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">
                Introduction to <span style="color: var(--zed-primary)">Metal</span>
            </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                Understand the basics of metal trading, types of metals, and their importance in global finance and industry.
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
                    'topic' => 'Precious Metals (Gold, Silver, Platinum)',
                    'level' => 'Beginner',
                    'description' => 'Learn how precious metals act as safe-haven assets and investment tools.',
                    'topicLeft' => [
                        'Gold as Inflation Hedge',
                        'Silver: Industrial vs Investment Demand',
                        'Platinum & Palladium Markets'
                    ],
                    'topicRight' => [
                        'Central Bank Gold Reserves',
                        'Factors Affecting Precious Metal Prices'
                    ]
                ],[
                    'topic' => 'Industrial Metals',
                    'level' => 'Beginner',
                    'description' => 'Explore metals used in construction, manufacturing, and technology.',
                    'topicLeft' => [
                        'Copper: “Doctor Copper” Indicator',
                        'Aluminum & Steel Markets',
                        'Zinc, Nickel & Lead'
                    ],
                    'topicRight' => [
                        'Infrastructure Demand',
                        'Economic Cycles & Metal Prices'
                    ]
                ],[
                    'topic' => 'Metal Trading Basics',
                    'level' => 'Beginner',
                    'description' => 'Learn how to trade metals in different financial markets.',
                    'topicLeft' => [
                        'Futures & Spot Trading',
                        'Commodity Exchanges (MCX, LME)',
                        'Trading Hours & Liquidity'
                    ],
                    'topicRight' => [
                        'Order Types',
                        'Margin & Leverage'
                    ]
                ],[
                    'topic' => 'Technical Analysis for Metals',
                    'level' => 'Beginner',
                    'description' => 'Use charts and indicators to analyze metal price movements.',
                    'topicLeft' => [
                        'Trendlines & Breakouts',
                        'Support & Resistance Levels',
                        'RSI, MACD Indicators'
                    ],
                    'topicRight' => [
                        'Moving Averages',
                        'Volume Analysis'
                    ]
                ],[
                    'topic' => 'Fundamental Analysis in Metals',
                    'level' => 'Beginner',
                    'description' => 'Understand macroeconomic factors affecting metal prices.',
                    'topicLeft' => [
                        'Supply & Mining Output',
                        'Demand from Industries',
                        'USD Impact on Metals'
                    ],
                    'topicRight' => [
                        'Inflation & Interest Rates',
                        'Geopolitical Events'
                    ]
                ],[
                    'topic' => 'Global Metal Markets',
                    'level' => 'Beginner',
                    'description' => 'Analyze how metals are traded globally and their economic impact.',
                    'topicLeft' => [
                        'London Metal Exchange (LME)',
                        'MCX & COMEX Overview',
                        'China’s Role in Metal Demand'
                    ],
                    'topicRight' => [
                        'Import/Export Trends',
                        'Global Supply Chains'
                    ]
                ],[
                    'topic' => 'Hedging & Risk Management',
                    'level' => 'Beginner',
                    'description' => 'Learn how industries and traders manage risk using metals.',
                    'topicLeft' => [
                        'Hedging with Futures',
                        'Portfolio Diversification',
                        'Risk-Reward Ratio'
                    ],
                    'topicRight' => [
                        'Stop Loss Strategies',
                        'Volatility Management'
                    ]
                ],[
                    'topic' => 'Metal Futures & Options',
                    'level' => 'Beginner',
                    'description' => 'Advanced strategies using derivatives in metal trading.',
                    'topicLeft' => [
                        'Futures Contracts Explained',
                        'Options Basics (Calls & Puts)',
                        'Spread Trading'
                    ],
                    'topicRight' => [
                        'Contract Expiry & Rollover',
                        'Margin Requirements'
                    ]
                ],[
                    'topic' => 'Advanced Metal Trading Strategies',
                    'level' => 'Beginner',
                    'description' => 'Professional-level techniques used by experienced traders.',
                    'topicLeft' => [
                        'Arbitrage Opportunities',
                        'Intermarket Analysis',
                        'Seasonal Trends in Metals'
                    ],
                    'topicRight' => [
                        'Correlation with Currency & Oil',
                        'Institutional Trading Strategies'
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