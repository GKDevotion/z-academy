<?php 
include_once ('elements/header.php');
?>

     <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Webinar<span style="color: var(--primary-teal);"> Metal</span> </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Learn how to analyze and trade metals like gold, silver, and industrial metals with real market insights and strategies.</p>
            <div class="open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
                <button class="d-none rounded-pill">ZERO TO HERO</button>
            </div>
        </div>
    </header>

    <div class="webinar-topics container py-5">
        <div class="row g-4 justify-content-center">
            <?php
            $webinarTopicArr = [
                [
                    'title' => 'Gold Trading Masterclass',
                    'description' => 'Deep dive into gold price movements, safe-haven demand, and trading strategies.',
                    'topic' => [
                        'Gold as Inflation Hedge',
                        'Impact of USD on Gold Prices',
                        'Central Bank Buying Trends',
                        'Support & Resistance in Gold',
                        'Intraday vs Swing Trading Strategies',
                    ],
                    'box-icon' => '🥇'
                ],[
                    'title' => 'Silver Market Insights',
                    'description' => 'Understand silver’s dual role as an industrial and investment asset.',
                    'topic' => [
                        'Silver vs Gold Correlation',
                        'Industrial Demand Impact',
                        'Volatility in Silver Trading',
                        'Key Price Drivers',
                        'Trade Setup Strategies',
                    ],
                    'box-icon' => '🪙'
                ],[
                    'title' => 'Industrial Metals Breakdown',
                    'description' => 'Explore metals like copper, aluminum, and zinc used in global industries.',
                    'topic' => [
                        'Copper as Economic Indicator',
                        'Infrastructure Demand Cycles',
                        'China’s Role in Metal Demand',
                        'Supply Chain Disruptions',
                        'Price Correlation with Economy',
                    ],
                    'box-icon' => '🏗️'
                ],[
                    'title' => 'Metal Futures Trading Strategies',
                    'description' => 'Learn advanced techniques to trade metal futures effectively.',
                    'topic' => [
                        'Futures Contracts Explained',
                        'Margin & Leverage in Metals',
                        'Hedging vs Speculation',
                        'Spread Trading Basics',
                        'Risk Management Techniques',
                    ],
                    'box-icon' => '⚡'
                ],[
                    'title' => 'Technical Analysis for Metals',
                    'description' => 'Apply chart-based strategies specifically for metal markets.',
                    'topic' => [
                        'Trend Identification',
                        'Breakout Strategies',
                        'RSI & MACD in Metals',
                        'Volume Analysis',
                        'Entry & Exit Timing',
                    ],
                    'box-icon' => '📊'
                ],[
                    'title' => 'Fundamental Analysis in Metals',
                    'description' => 'Understand macroeconomic factors affecting metal prices.',
                    'topic' => [
                        'Supply & Mining Output',
                        'Demand from Industries',
                        'Inflation & Interest Rates',
                        'USD Strength Impact',
                        'Geopolitical Influence',
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Global Metal Market Trends',
                    'description' => 'Analyze global movements and long-term opportunities in metals.',
                    'topic' => [
                        'LME & MCX Market Overview',
                        'Import/Export Trends',
                        'Global Economic Indicators',
                        'Emerging Market Demand',
                        'Long-Term Investment Opportunities',
                    ],
                    'box-icon' => '🌍'
                ],[
                    'title' => 'Risk Management in Metal Trading',
                    'description' => 'Protect capital in highly volatile metal markets.',
                    'topic' => [
                        'Position Sizing',
                        'Stop Loss Techniques',
                        'Diversification Strategies',
                        'Managing Volatility',
                        'Capital Protection',
                    ],
                    'box-icon' => '🔐'
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
        const text = "Metal Market Webinar Series";
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