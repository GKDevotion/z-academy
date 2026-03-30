<?php 
include_once ('elements/header.php');
?>
    <header class="page-header">
        <div class="webinar container text-center">
            <h1 class="display-3 fw-800 animate__animated animate__fadeIn section-title mb-4">
                <span id="typing-text"></span>
            </h1>
            <p class="lead opacity-75">
                Understand how the global currency market works and why it’s the largest financial market.
            </p>
        </div>
    </header>

    <div class="webinar-topics container py-5">
        <div class="row g-4 justify-content-center">
            <?php
            $webinarTopicArr = [
                [
                    'title' => 'Forex Market Structure',
                    'description' => 'Learn how the forex market is organized and how trades are executed.',
                    'topic' => [
                        'Decentralized Market Concept',
                        'Liquidity & Volatility',
                        'Bid vs Ask Price',
                        'Spread & Slippage',
                        'Order Execution Types',
                    ],
                    'box-icon' => '📊'
                ],[
                    'title' => 'Technical Analysis in Forex',
                    'description' => 'Master chart reading and indicators for better trade decisions.',
                    'topic' => [
                        'Candlestick Patterns',
                        'Support & Resistance Zones',
                        'Trend Identification',
                        'RSI, MACD, Moving Averages',
                        'Breakout & Reversal Strategies',
                    ],
                    'box-icon' => '📈'
                ],[
                    'title' => 'Fundamental Analysis in Forex',
                    'description' => 'Understand how economic news and global events impact currency prices.',
                    'topic' => [
                        'Interest Rates & Central Banks',
                        'Inflation (CPI) Impact',
                        'GDP & Employment Data',
                        'News Trading Strategies',
                        'Economic Calendar Usage',
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Forex Trading Strategies',
                    'description' => 'Explore different trading styles used by professional traders.',
                    'topic' => [
                        'Scalping Strategy',
                        'Day Trading',
                        'Swing Trading',
                        'Trend Following Strategy',
                        'Price Action Trading',
                    ],
                    'box-icon' => '⚡'
                ],[
                    'title' => 'Risk Management in Forex',
                    'description' => 'Protect your capital and trade like a professional.',
                    'topic' => [
                        'Stop Loss & Take Profit',
                        'Risk-Reward Ratio',
                        'Position Sizing',
                        'Avoiding Overtrading',
                        'Managing Drawdowns',
                    ],
                    'box-icon' => '🛡️'
                ],[
                    'title' => 'Forex Trading Platforms',
                    'description' => 'Learn how to use trading platforms effectively.',
                    'topic' => [
                        'MetaTrader (MT4/MT5) Basics',
                        'Placing Buy/Sell Orders',
                        'Using Indicators & Tools',
                        'Chart Customization',
                        'Mobile Trading Apps',
                    ],
                    'box-icon' => '💻'
                ],[
                    'title' => 'Currency Pair Deep Analysis',
                    'description' => 'Understand behavior of major currency pairs.',
                    'topic' => [
                        'EUR/USD Analysis',
                        'GBP/USD Volatility',
                        'USD/JPY Safe Haven Behavior',
                        'Correlation Between Pairs',
                        'Cross Currency Trading',
                    ],
                    'box-icon' => '🌍'
                ],[
                    'title' => 'Forex Psychology & Discipline',
                    'description' => 'Control emotions and build a strong trader mindset.',
                    'topic' => [
                        'Fear & Greed Control',
                        'Trading Discipline',
                        'Building a Trading Plan',
                        'Patience & Consistency',
                        'Avoiding Emotional Trades',
                    ],
                    'box-icon' => '📉'
                ],[
                    'title' => 'Advanced Forex Concepts',
                    'description' => 'Level up your trading with advanced techniques.',
                    'topic' => [
                        'Liquidity & Smart Money Concept',
                        'Order Blocks & Supply/Demand',
                        'Market Structure Shift',
                        'Institutional Trading Concepts',
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
        const text = "Introduction to Forex Market";
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