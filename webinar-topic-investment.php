<?php 
include_once ('elements/header.php');
?>

     <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Webinar<span style="color: var(--primary-teal);"> Investments</span> </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Gain practical knowledge and actionable strategies to grow your wealth through smart investing and disciplined decision-making.</p>
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
                    'title' => 'Investment Fundamentals',
                    'description' => 'Build a strong foundation by understanding how investing works.',
                    'topic' => [
                        'Difference between Trading vs Investing',
                        'Types of Assets (Stocks, Bonds, Commodities, Crypto)',
                        'Risk vs Return Concept',
                        'Power of Compounding',
                        'Investment Goals & Planning',
                    ],
                    'box-icon' => '📊'
                ],[
                    'title' => 'Portfolio Management',
                    'description' => 'Learn how to create and manage a balanced investment portfolio.',
                    'topic' => [
                        'Asset Allocation Strategies',
                        'Diversification Techniques',
                        'Portfolio Rebalancing',
                        'Long-term vs Short-term Investments',
                        'Risk-adjusted Returns',
                    ],
                    'box-icon' => '💰'
                ],[
                    'title' => 'Market Analysis Techniques',
                    'description' => 'Understand how to analyze markets before making investment decisions.',
                    'topic' => [
                        'Fundamental Analysis Basics',
                        'Technical Indicators Overview',
                        'Economic Indicators (GDP, Inflation)',
                        'Sector Analysis',
                        'Market Trends Identification',
                    ],
                    'box-icon' => '📈'
                ],[
                    'title' => 'Investor Psychology',
                    'description' => 'Control emotions and develop a disciplined investment mindset.',
                    'topic' => [
                        'Fear & Greed Cycle',
                        'Avoiding Emotional Decisions',
                        'Patience in Investing',
                        'Long-term Thinking',
                        'Behavioral Biases',
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Wealth Building Strategies',
                    'description' => 'Explore proven methods to build and sustain long-term wealth.',
                    'topic' => [
                        'SIP (Systematic Investment Plan)',
                        'Passive Income Streams',
                        'Dividend Investing',
                        'Growth vs Value Investing',
                        'Retirement Planning',
                    ],
                    'box-icon' => '🏦'
                ],[
                    'title' => 'Risk Management',
                    'description' => 'Protect your capital and minimize losses in volatile markets.',
                    'topic' => [
                        'Position Sizing',
                        'Stop Loss Strategies',
                        'Diversification for Risk Control',
                        'Hedging Techniques',
                        'Emergency Fund Planning',
                    ],
                    'box-icon' => '🔐'
                ],[
                    'title' => 'Global Investment Opportunities',
                    'description' => 'Understand how global markets impact investment decisions.',
                    'topic' => [
                        'International Markets Overview',
                        'Currency Impact',
                        'Emerging Markets',
                        'Global Economic Trends',
                        'Cross-border Investments',
                    ],
                    'box-icon' => '🌍'
                ],[
                    'title' => 'Advanced Investment Strategies',
                    'description' => 'Take your investing skills to the next level with advanced techniques.',
                    'topic' => [
                        'Value Investing Principles',
                        'Growth Investing Strategies',
                        'Sector Rotation Strategy',
                        'ETF & Index Investing',
                        'Alternative Investments',
                    ],
                    'box-icon' => '⚡'
                ],[
                    'title' => 'Common Investment Mistakes',
                    'description' => 'Avoid pitfalls that can negatively impact your portfolio.',
                    'topic' => [
                        'Overtrading',
                        'Lack of Research',
                        'Ignoring Risk Management',
                        'Following Market Hype',
                        'Poor Diversification',
                    ],
                    'box-icon' => '📉'
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
        const text = "Investment Learning Points";
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