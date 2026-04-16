<?php 
include_once ('elements/header.php');
?>

     <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Crypto <span style="color: var(--primary-teal);">Currency</span> </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Understand the foundation of cryptocurrency and how digital assets work.</p>
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
                    'title' => 'Crypto Trading Basics',
                    'description' => 'Learn how to enter and operate in crypto markets.',
                    'topic' => [
                        'Spot Trading vs Futures Trading',
                        'Order Types (Market, Limit, Stop)',
                        'Understanding Trading Pairs',
                        'Liquidity & Volatility',
                        'Basic Risk Management',
                    ],
                    'box-icon' => '📊'
                ],[
                    'title' => 'Technical Analysis for Crypto',
                    'description' => 'Analyze price charts to identify trading opportunities.',
                    'topic' => [
                        'Candlestick Patterns',
                        'Support & Resistance Levels',
                        'Trendlines & Breakouts',
                        'RSI, MACD Indicators',
                        'Volume & Market Momentum',
                    ],
                    'box-icon' => '📈'
                ],[
                    'title' => 'Crypto Fundamental Analysis',
                    'description' => 'Evaluate crypto projects before investing.',
                    'topic' => [
                        'Reading Whitepapers',
                        'Tokenomics & Supply Models',
                        'Project Utility & Use Case',
                        'Team & Roadmap Analysis',
                        'Market Cap vs Value',
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Crypto Security & Risk Control',
                    'description' => 'Protect your funds and avoid common mistakes.',
                    'topic' => [
                        'Hot Wallet vs Cold Wallet',
                        'Private Key Safety',
                        'Avoiding Scams & Phishing',
                        'Exchange Security Practices',
                        'Risk-to-Reward Strategy',
                    ],
                    'box-icon' => '🔐'
                ],[
                    'title' => 'DeFi (Decentralized Finance)',
                    'description' => 'Explore financial systems without banks.',
                    'topic' => [
                        'What is DeFi?',
                        'Staking & Yield Farming',
                        'Liquidity Pools',
                        'DEX vs CEX',
                        'DeFi Risks',
                    ],
                    'box-icon' => '🌐'
                ],[
                    'title' => 'Crypto Futures & Leverage Trading',
                    'description' => 'Advanced trading strategies using leverage.',
                    'topic' => [
                        'Long vs Short Positions',
                        'Leverage & Margin Explained',
                        'Liquidation Risk',
                        'Funding Rates',
                        'Risk Management in Futures',
                    ],
                    'box-icon' => '⚡'
                ],[
                    'title' => 'NFTs & Web3 Ecosystem',
                    'description' => 'Understand digital ownership and decentralized internet.',
                    'topic' => [
                        'What are NFTs?',
                        'NFT Marketplaces',
                        'Smart Contracts',
                        'Web3 Applications',
                        'Future of Digital Assets',
                    ],
                    'box-icon' => '🎨'
                ],[
                    'title' => 'Market Psychology & Trends',
                    'description' => 'Understand trader behavior and market movements.',
                    'topic' => [
                        'Fear & Greed Index',
                        'Market Cycles (Bull/Bear)',
                        'Whale Movements',
                        'News Impact on Crypto',
                        'Sentiment Analysis',
                    ],
                    'box-icon' => '🌍'
                ],[
                    'title' => 'Advanced Trading Strategies',
                    'description' => 'Professional-level crypto trading techniques.',
                    'topic' => [
                        'Scalping & Swing Trading',
                        'Arbitrage Opportunities',
                        'Portfolio Diversification',
                        'Hedging Strategies',
                        'Algorithmic Trading Basics',
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
        const text = "Crypto Market Fundamentals";
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