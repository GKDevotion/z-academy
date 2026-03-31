<?php 
include_once ('elements/header.php');
?>
    <header class="page-header">
        <div class="webinar container text-center">
            <h1 class="display-3 fw-800 animate__animated animate__fadeIn section-title mb-4">
                <span id="typing-text"></span>
            </h1>
            <p class="lead opacity-75">
                Master chart reading, indicators, and price action strategies to improve trading accuracy and decision-making.
            </p>
        </div>
    </header>

    <div class="webinar-topics container py-5">
        <div class="row g-4 justify-content-center">
            <?php
            $webinarTopicArr = [
                [
                    'title' => 'Charting Basics & Market Structure',
                    'description' => 'Understand how price moves and how to read charts effectively.',
                    'topic' => [
                        'Types of Charts (Candlestick, Line, Bar)',
                        'Market Structure (HH, HL, LH, LL)',
                        'Timeframes Explained (Scalping to Swing)',
                        'Identifying Trends (Uptrend, Downtrend, Sideways)',
                        'Price Action Basics',
                    ],
                    'box-icon' => '📈'
                ],[
                    'title' => 'Candlestick Patterns Mastery',
                    'description' => 'Decode market sentiment using candlestick formations.',
                    'topic' => [
                        'Single Candle Patterns (Doji, Hammer)',
                        'Reversal Patterns (Engulfing, Morning Star)',
                        'Continuation Patterns',
                        'Fake Signals & Confirmation',
                        'Practical Chart Examples',
                    ],
                    'box-icon' => '🕯️'
                ],[
                    'title' => 'Support & Resistance Strategies',
                    'description' => 'Identify key levels where price reacts most.',
                    'topic' => [
                        'Static vs Dynamic Levels',
                        'Role Reversal Concept',
                        'Breakouts & Fake Breakouts',
                        'Supply & Demand Zones',
                        'Entry & Exit Strategies',
                    ],
                    'box-icon' => '📉'
                ],[
                    'title' => 'Technical Indicators Deep Dive',
                    'description' => 'Use indicators to confirm trades and enhance accuracy.',
                    'topic' => [
                        'RSI (Overbought/Oversold)',
                        'MACD (Momentum & Crossovers)',
                        'Moving Averages (EMA/SMA)',
                        'Bollinger Bands',
                        'Indicator Confluence Strategy',
                    ],
                    'box-icon' => '📊'
                ],[
                    'title' => 'Trendlines & Chart Patterns',
                    'description' => 'Identify patterns that signal future price movements.',
                    'topic' => [
                        'Drawing Trendlines Correctly',
                        'Triangle Patterns (Symmetrical, Ascending)',
                        'Head & Shoulders Pattern',
                        'Flags & Pennants',
                        'Breakout Confirmation',
                    ],
                    'box-icon' => '📐'
                ],[
                    'title' => 'Volume & Market Strength Analysis',
                    'description' => 'Understand the strength behind price moves using volume.',
                    'topic' => [
                        'Volume Spikes & Trends',
                        'Volume + Price Relationship',
                        'Accumulation & Distribution',
                        'Breakout with Volume',
                        'False Breakout Detection',
                    ],
                    'box-icon' => '🔍'
                ],[
                    'title' => 'Intraday Trading Strategies',
                    'description' => 'Learn fast-paced strategies for day trading.',
                    'topic' => [
                        'Opening Range Breakout',
                        'Scalping Techniques',
                        'VWAP Strategy',
                        'Risk-Reward Setup',
                        'Trade Execution Timing',
                    ],
                    'box-icon' => '⚡'
                ],[
                    'title' => 'Trading Psychology & Discipline',
                    'description' => 'Control emotions and build a winning mindset.',
                    'topic' => [
                        'Fear & Greed Management',
                        'Overtrading Avoidance',
                        'Following Trading Plan',
                        'Risk Control Rules',
                        'Consistency Building',
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Risk Management Techniques',
                    'description' => 'Protect capital while maximizing returns.',
                    'topic' => [
                        'Position Sizing',
                        'Stop Loss Placement',
                        'Risk-Reward Ratio (1:2 / 1:3)',
                        'Capital Allocation',
                        'Drawdown Management',
                    ],
                    'box-icon' => '🛡️'
                ],[
                    'title' => 'Advanced Technical Strategies',
                    'description' => 'Professional-level strategies for experienced traders.',
                    'topic' => [
                        'Multi-Timeframe Analysis',
                        'Indicator Confluence',
                        'Liquidity Zones',
                        'Smart Money Concepts',
                        'Backtesting Strategies',
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
        const text = "Technical Analysis Webinar Series";
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