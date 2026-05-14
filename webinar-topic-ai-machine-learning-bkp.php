<?php 
include_once ('elements/header.php');
?>

    <header class="page-header d-none">
        <div class="webinar container text-center">
            <h1 class="display-3 fw-800 animate__animated animate__fadeIn section-title mb-4">
                <span id="typing-text"></span>
            </h1>
            <p class="lead opacity-75">
                Explore how AI is used to automate trading strategies.
            </p>
        </div>
    </header>

     <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">AI <span style="color: var(--primary-teal);">Machine</span> Learning</h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s"> Explore how AI is used to automate trading strategies.</p>
            <div class="open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
                <button class="d-none rounded-pill">ZERO TO HERO</button>
            </div>
        </div>
    </header>

    <div class="webinar-topics container py-5">
        <div class="row g-4 justify-content-center">
            <?php
            $webinarArr = [
                [
                    'title' => 'Predictive Models in Trading',
                    'description' => 'Build models to predict market movements and trends.',
                    'topic' => [
                        'Price Prediction Models',
                        'Trend Forecasting',
                        'Sentiment Analysis',
                        'Neural Networks Basics',
                        'Model Accuracy & Limitations'
                    ],
                    'box-icon' => '📉'
                ],[
                    'title' => 'Deep Learning Fundamentals',
                    'description' => 'Dive into advanced AI models like neural networks and deep learning.',
                    'topic' => [
                        'Introduction to Neural Networks',
                        'CNN & RNN Basics',
                        'LSTM for Time Series',
                        'AI Model Training',
                        'Use Cases in Finance',
                    ],
                    'box-icon' => '🔍'
                ],[
                    'title' => 'Natural Language Processing (NLP)',
                    'description' => 'Analyze news, tweets, and financial reports using AI.',
                    'topic' => [
                        'Text Data Processing',
                        'Sentiment Analysis',
                        'News Impact on Markets',
                        'Twitter & Social Media Signals',
                        'AI-based News Trading,'
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Risk Management using AI',
                    'description' => 'Use AI to minimize trading risks and optimize strategies.',
                    'topic' => [
                        'Risk Prediction Models',
                        'Portfolio Optimization',
                        'Volatility Analysis',
                        'Stop-loss Optimization',
                        'AI-based Alerts',
                    ],
                    'box-icon' => '🔐'
                ],[
                    'title' => 'AI + Blockchain Integration',
                    'description' => 'Explore how AI and blockchain work together in modern finance.',
                    'topic' => [
                        'AI in Crypto Trading',
                        'Smart Contracts + AI',
                        'Fraud Detection',
                        'Decentralized AI Models',
                        'Future Innovations',
                    ],
                    'box-icon' => '🌐'
                ],[
                    'title' => 'Advanced AI Trading Strategies',
                    'description' => 'Professional-level AI techniques used by hedge funds and institutions.',
                    'topic' => [
                        'Reinforcement Learning',
                        'Algorithm Optimization',
                        'Multi-Strategy Systems',
                        'Market Pattern Recognition',
                        'AI Portfolio Management',
                    ],
                    'box-icon' => '🚀'
                ],
            ];
            foreach( $webinarArr as $k => $val ){ ?>
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
        const text = "AI in Algorithmic Trading";
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