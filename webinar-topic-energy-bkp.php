<?php 
include_once ('elements/header.php');
?>

     <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Energy <span style="color: var(--primary-teal);">Sector</span> </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Understand how global energy markets work, key price drivers, and trading opportunities in oil, gas, and renewables.</p>
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
                    'title' => 'Crude Oil Market Fundamentals',
                    'description' => 'Learn the basics of crude oil trading and global demand-supply dynamics.',
                    'topic' => [
                        'Types of Crude Oil (WTI, Brent)',
                        'Global Supply & Demand Factors',
                        'Oil Pricing Mechanism',
                        'Role of Refineries',
                        'Inventory Reports (EIA Data)',
                    ],
                    'box-icon' => '🛢️'
                ],[
                    'title' => 'Natural Gas Market Insights',
                    'description' => 'Explore natural gas trading, seasonal demand, and volatility patterns.',
                    'topic' => [
                        'Natural Gas Pricing',
                        'Seasonal Demand (Winter/Summer)',
                        'Storage & Supply Data',
                        'LNG Market Overview',
                        'Weather Impact on Prices',
                    ],
                    'box-icon' => '🔥'
                ],[
                    'title' => 'OPEC & Geopolitics',
                    'description' => 'Understand how global politics and OPEC decisions influence energy prices.',
                    'topic' => [
                        'OPEC & OPEC+ Decisions',
                        'Production Cuts & Output Levels',
                        'Geopolitical Conflicts Impact',
                        'Middle East Influence',
                        'Sanctions & Trade Policies',
                    ],
                    'box-icon' => '🌍'
                ],[
                    'title' => 'Renewable Energy Trends',
                    'description' => 'Analyze the shift towards clean energy and its impact on traditional markets.',
                    'topic' => [
                        'Solar & Wind Energy Growth',
                        'Government Policies & Incentives',
                        'ESG Investing Trends',
                        'Transition from Fossil Fuels',
                        'Future Energy Demand',
                    ],
                    'box-icon' => '⚡'
                ],[
                    'title' => 'Energy Trading Strategies',
                    'description' => 'Learn practical strategies to trade energy commodities effectively.',
                    'topic' => [
                        'Trend Trading in Oil & Gas',
                        'Breakout Strategies',
                        'News-Based Trading',
                        'Correlation with USD',
                        'Volatility Trading',
                    ],
                    'box-icon' => '📊'
                ],[
                    'title' => 'Fundamental Analysis in Energy',
                    'description' => 'Evaluate real-world factors affecting energy markets.',
                    'topic' => [
                        'Supply Chain Disruptions',
                        'Global Demand Trends',
                        'Economic Indicators',
                        'Inflation Impact',
                        'Industrial Consumption',
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Technical Analysis for Energy Markets',
                    'description' => 'Use charts and indicators for better trade timing.',
                    'topic' => [
                        'Support & Resistance',
                        'Moving Averages',
                        'RSI & MACD',
                        'Trendlines',
                        'Volume Analysis',
                    ],
                    'box-icon' => '📉'
                ],[
                    'title' => 'Energy Futures & Derivatives',
                    'description' => 'Understand advanced trading instruments in energy markets.',
                    'topic' => [
                        'Oil Futures Contracts',
                        'Natural Gas Futures',
                        'Options Trading Basics',
                        'Hedging Strategies',
                        'Margin & Leverage',
                    ],
                    'box-icon' => '⚙️'
                ],[
                    'title' => 'Risk Management in Energy Trading',
                    'description' => 'Protect your capital in highly volatile energy markets.',
                    'topic' => [
                        'Position Sizing',
                        'Stop Loss Strategies',
                        'Risk-Reward Ratio',
                        'Diversification',
                        'Managing Market Volatility',
                    ],
                    'box-icon' => '🛡️'
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
        const text = "Energy Sector Webinar";
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