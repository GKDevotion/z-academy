<?php 
include_once ('elements/header.php');
?>

     <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Webinar<span style="color: var(--primary-teal);"> Commodities</span> </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Understand the fundamentals of commodity markets and how trading works globally.</p>
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
                    'title' => 'Crude Oil & Energy Markets',
                    'description' => 'Deep dive into oil trading, price movements, and global supply-demand factors.',
                    'topic' => [
                        'WTI vs Brent Crude',
                        'OPEC & Production Decisions',
                        'Geopolitical Impact on Oil Prices',
                        'Inventory Reports (EIA Data)',
                        'Energy Market Volatility',
                    ],
                    'box-icon' => '🛢️'
                ],[
                    'title' => 'Gold & Precious Metals Strategy',
                    'description' => 'Learn how metals like gold and silver act as safe-haven assets.',
                    'topic' => [
                        'Gold as Inflation Hedge',
                        'Silver Industrial Demand',
                        'Central Bank Reserves',
                        'USD vs Gold Relationship',
                        'Trading Strategies for Metals',
                    ],
                    'box-icon' => '🪙'
                ],[
                    'title' => 'Agricultural Commodities Insights',
                    'description' => 'Explore crop-based commodities and factors affecting their pricing.',
                    'topic' => [
                        'Wheat, Corn, Soybean Markets',
                        'Seasonal Trends',
                        'Weather Impact Analysis',
                        'Global Export & Import Data',
                        'Supply Chain Disruptions',
                    ],
                    'box-icon' => '🌽'
                ],[
                    'title' => 'Commodity Market Analysis',
                    'description' => 'Master both technical and fundamental approaches in commodities.',
                    'topic' => [
                        'Support & Resistance',
                        'Trend Analysis',
                        'Supply & Demand Factors',
                        'Economic Indicators',
                        'Price Action Strategies',
                    ],
                    'box-icon' => '📊'
                ],[
                    'title' => 'Commodity Futures Trading',
                    'description' => 'Understand derivatives trading and leverage in commodity markets.',
                    'topic' => [
                        'Futures Contracts Explained',
                        'Margin & Leverage',
                        'Contract Expiry & Rollover',
                        'Hedging vs Speculation',
                        'Risk Management Techniques',
                    ],
                    'box-icon' => '⚡'
                ],[
                    'title' => 'Global Commodity Trends & Forecasting',
                    'description' => 'Analyze global trends and predict future commodity movements.',
                    'topic' => [
                        'Global Demand Cycles',
                        'China & US Market Influence',
                        'Inflation & Interest Rates',
                        'Currency Impact (USD Strength)',
                        'Long-Term Investment Trends',
                    ],
                    'box-icon' => '🌍'
                ],[
                    'title' => 'Risk Management in Commodities',
                    'description' => 'Learn how to protect capital in highly volatile markets.',
                    'topic' => [
                        'Position Sizing',
                        'Stop Loss Strategies',
                        'Portfolio Diversification',
                        'Hedging Techniques',
                        'Managing Market Volatility',
                    ],
                    'box-icon' => '🛡️'
                ],[
                    'title' => 'Advanced Commodity Trading Strategies',
                    'description' => 'Professional strategies used by experienced traders.',
                    'topic' => [
                        'Spread Trading',
                        'Arbitrage Opportunities',
                        'Seasonal Trading',
                        'Intermarket Analysis',
                        'Institutional Trading Behavior',
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
        const text = "Commodities Trading";
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