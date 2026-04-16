<?php 
include_once ('elements/header.php');
?>
 
     <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Webinar<span style="color: var(--primary-teal);"> Technology</span> </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Understand how modern technology powers trading platforms and financial markets.</p>
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
                    'title' => 'Algorithmic Trading Basics',
                    'description' => 'Learn how automated trading systems execute trades using predefined rules.',
                    'topic' => [
                        'What is Algo Trading?',
                        'Strategy Building Basics',
                        'Backtesting Concepts',
                        'Execution Speed & Latency',
                        'Risk Controls in Automation',
                    ],
                    'box-icon' => '🤖'
                ],[
                    'title' => 'Artificial Intelligence in Trading',
                    'description' => 'Explore how AI and machine learning are transforming trading strategies.',
                    'topic' => [
                        'AI vs Traditional Trading',
                        'Machine Learning Models',
                        'Predictive Analytics',
                        'Sentiment Analysis',
                        'AI Trading Bots',
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Trading Platforms & Tools',
                    'description' => 'Master popular trading platforms and tools used by professionals.',
                    'topic' => [
                        'MetaTrader (MT4/MT5) Basics',
                        'TradingView Charting',
                        'Order Execution Systems',
                        'Indicators & Tools',
                        'Mobile Trading Apps',
                    ],
                    'box-icon' => '📊'
                ],[
                    'title' => 'Blockchain & FinTech Innovation',
                    'description' => 'Understand how blockchain technology is reshaping financial ecosystems.',
                    'topic' => [
                        'Blockchain Basics',
                        'Smart Contracts',
                        'Decentralized Finance (DeFi)',
                        'Crypto Trading Platforms',
                        'Web3 Applications',
                    ],
                    'box-icon' => '🔗'
                ],[
                    'title' => 'High-Frequency Trading (HFT)',
                    'description' => 'Dive into ultra-fast trading systems used by institutions.',
                    'topic' => [
                        'What is HFT?',
                        'Low Latency Systems',
                        'Market Making Strategies',
                        'Infrastructure Requirements',
                        'Risks & Regulations',
                    ],
                    'box-icon' => '⚡'
                ],[
                    'title' => 'Cybersecurity in Trading',
                    'description' => 'Learn how to protect trading systems and digital assets from cyber threats.',
                    'topic' => [
                        'Common Security Threats',
                        'Secure Trading Practices',
                        'Two-Factor Authentication',
                        'Data Encryption Basics',
                        'Avoiding Scams & Phishing',
                    ],
                    'box-icon' => '🔐'
                ],[
                    'title' => 'Data Analytics & Market Insights',
                    'description' => 'Use data-driven approaches to improve trading decisions.',
                    'topic' => [
                        'Big Data in Trading',
                        'Data Visualization Tools',
                        'Market Sentiment Analysis',
                        'Real-time Data Feeds',
                        'KPI Tracking',
                    ],
                    'box-icon' => '📡'
                ],[
                    'title' => 'Cloud Computing in Finance',
                    'description' => 'Understand how cloud technology supports scalable trading systems.',
                    'topic' => [
                        'Cloud Infrastructure Basics',
                        'SaaS in Trading Platforms',
                        'Data Storage & Processing',
                        'Scalability & Performance',
                        'Cloud Security',
                    ],
                    'box-icon' => '☁️'
                ],[
                    'title' => 'Future Trends in Trading Technology',
                    'description' => 'Stay ahead with emerging innovations in financial technology.',
                    'topic' => [
                        'AI + Blockchain Integration',
                        'Quantum Computing Potential',
                        'Metaverse & Trading',
                        'Automation Evolution',
                        'Next-gen Trading Platforms',
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
        const text = "Introduction to Trading Technology";
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