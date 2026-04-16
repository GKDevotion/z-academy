<?php 
include_once ('elements/header.php');
?>

    <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">
                Introduction to <span style="color: var(--brand-red)">Economics</span>
            </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                This course is suitable for traders, finance professionals, and importers/exporters aiming to build a strategic, evidence-based approach to currency markets.
            </p>
            <div class="d-none open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
                <button class="rounded-pill">

                </button>
            </div>
        </div>
    </header>

    <div class="container py-5">

        <div class="row">
            <?php
            $topicsArr = [
                [
                    'topic' => 'Monetary Measures, Economic Output and Corporate Profits (US)',
                    'level' => 'Beginner',
                    'description' => 'This course is suitable for traders, finance professionals, and importers/exporters aiming to build a strategic, evidence-based approach to currency markets.',
                    'topicLeft' => [
                        'HedgeMoney Supply (M2)',
                        'The Yield Curve',
                    ],
                    'topicRight' => [
                        'Corporate Earnings',
                        'Gross Domestic Product'
                    ]
                ],[
                    'topic' => 'Business and Consumer Activity and Confidence (US)',
                    'level' => 'Beginner',
                    'description' => 'Measuring the activity and the sentiments of consumers and businesses is integral for investors.',
                    'topicLeft' => [
                        'Purchasing Managers Index for Manufacturing',
                        'Consumer Price Index',
                        'Industrial Production'
                    ],
                    'topicRight' => [
                        'Personal Income and Outlays',
                        'Consumer Confidence',
                        'Retail Sales'
                    ]
                ],[
                    'topic' => 'Construction and Real Estate (US)',
                    'level' => 'Beginner',
                    'description' => 'Investors carefully watch real estate indicators, because the sector is labor intensive, interest rate sensitive and it requires significant capital and the coordination of many moving parts of the economy.',
                    'topicLeft' => [
                        'Housing Permits',
                        'Housing Starts',
                        'Housing Completions',
                        'Construction Spending'
                    ],
                    'topicRight' => [
                        'Home Price Index',
                        'Existing Home Sales',
                        'Mortgage Applications',
                        'Mortgage Delinquencies'
                    ]
                ],[
                    'topic' => 'Basic Economics',
                    'level' => 'Beginner',
                    'description' => 'Our primer on economics will help you understand the theory and principles behind the workings of an economy.',
                    'topicLeft' => [
                        'Introduction to Macroeconomics',
                        'Market Structure',
                        'Opportunity Cost'
                    ],
                    'topicRight' => [
                        'Theory of Production',
                        'Theory of Consumer Demand'
                    ]
                ],[
                    'topic' => 'Employment and the Labor Market (US)',
                    'level' => 'Beginner',
                    'description' => 'Labor market indicators are important for investors because they are helpful in determining the incomes of consumers and corporations hiring appetites.',
                    'topicLeft' => [
                        'Labor Force Participation',
                        'Payroll Employment',
                        'Unemployment Claims'
                    ],
                    'topicRight' => [
                        'Unemployment Rate',
                        'Average Hourly Workweek',
                        'Average Hourly Earning'
                    ]
                ],[
                    'topic' => 'Economic Indicators (Canada)',
                    'level' => 'Beginner',
                    'description' => 'A wide variety of economic indicators are used to measure everything from job growth to construction activity, retail activity and much more.',
                    'topicLeft' => [
                        'Building Permits - Canada',
                        'Consumer Price Index - Canada',
                        'Manufacturing-PMI - Canada'
                    ],
                    'topicRight' => [
                        'Employment - Canada',
                        'Unemployment Rate - Canada',
                        'Retail Trade - Canada'
                    ]
                ],[
                    'topic' => 'Economic Indicators (European Union)',
                    'level' => 'Beginner',
                    'description' => 'A wide variety of economic indicators are used to measure everything from economic growth to changes in prices to unemployment and much more.',
                    'topicLeft' => [
                        'Euro Money Supply (M3)',
                        'Harmonised Index of Consumer Prices',
                        'Building Permits',
                        'Retail Trade',
                        'Unemployment Rate'
                    ],
                    'topicRight' => [
                        'Employment',
                        'Gross Domestic Product',
                        'Manufacturing-PMI',
                        'Economic Sentiment',
                        'Industrial Production'
                    ]
                ],[
                    'topic' => 'Economic Indicators (United Kingdom)',
                    'level' => 'Beginner',
                    'description' => 'A wide variety of UK economic indicators are used to measure everything from economic growth to changes in prices to unemployment and much more.',
                    'topicLeft' => [
                        'Retail Trade - Australia',
                        'Gross Domestic Product',
                        'Consumer Price Index',
                    ],
                    'topicRight' => [
                        'Unemployment Rate',
                        'Consumer Sentiment',
                        'Employment'
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