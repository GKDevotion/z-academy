<?php 
include_once ('elements/header.php');
?>

    <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">
                Equity <span style="color: var(--zed-primary)">Stocks</span>
            </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                Learn stock market fundamentals, dividend investing, sector analysis, and advanced strategies with beautifully structured courses.
            </p>
            <div class="d-none open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
                <button class="rounded-pill">ZERO TO HERO</button>
            </div>
        </div>
    </header>

    <div class="container py-5">

        <div class="row g-4">
  <?php
            $topicsArr = [
                [
                    'topic' => 'Introduction to Stocks',
                    'level' => 'Beginner',
                    'description' => 'Understand stock market basics, cycles, and sectors.',
                    'topicLeft' => [
                        'Intro to Stock Market',
                        'Business Cycle',
                        'Sector Investing'
                    ],
                    'topicRight' => [
                        
                    ]
                ],[
                    'topic' => 'Introduction to Dividends',
                    'level' => 'Beginner',
                    'description' => 'Learn dividend income and compounding strategies.',
                    'topicLeft' => [
                        'Dividend Types',
                        'Compounding',
                        'Dividend Dates'
                    ],
                    'topicRight' => [
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
                    'topic' => 'Sector Investing',
                    'level' => 'Beginner',
                    'description' => 'Explore 11 sectors and their investment opportunities.',
                    'topicLeft' => [
                        'Energy Sector',
                        'IT Sector',
                        'Healthcare'
                    ],
                    'topicRight' => [
                    ]
                ],[
                    'topic' => 'Value Investing',
                    'level' => 'Beginner',
                    'description' => 'Identify undervalued stocks using proven strategies.',
                    'topicLeft' => [
                        'Margin of Safety',
                        'Intrinsic Value',
                        'Economic Moats'
                    ],
                    'topicRight' => [
                    ]
                ],[
                    'topic' => 'Growth Investing',
                    'level' => 'Beginner',
                    'description' => 'Invest in companies with high growth potential.',
                    'topicLeft' => [
                        'Growth Metrics',
                        'Risk Management',
                        'Long-Term Trends'
                    ],
                    'topicRight' => [
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
                    'topic' => 'Securities Lending',
                    'level' => 'Beginner',
                    'description' => 'Learn short selling, margin, and lending strategies.',
                    'topicLeft' => [
                        'Short Selling',
                        'Margin Trading',
                        'Stock Lending'
                    ],
                    'topicRight' => [
                    ]
                ]
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
         
?>
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