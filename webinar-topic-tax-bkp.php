<?php 
include_once ('elements/header.php');
?>

     <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Webinar<span style="color: var(--primary-teal);"> Tax</span> </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Understand how taxes apply to trading and investing across different asset classes like stocks, crypto, forex, and commodities.</p>
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
                    'title' => 'Basics of Taxation in Financial Markets',
                    'description' => 'Learn the foundation of how profits and losses are taxed.',
                    'topic' => [
                        'What is Capital Gain? (Short-term vs Long-term)',
                        'Tax Slabs & Applicable Rates',
                        'Income Classification (Business vs Investment)',
                        'Taxable vs Non-Taxable Income',
                        'Introduction to ITR Forms',
                    ],
                    'box-icon' => '📊'
                ],[
                    'title' => 'Stock Market Taxation',
                    'description' => 'Understand tax rules for equity investors and traders.',
                    'topic' => [
                        'STCG (Short-Term Capital Gains) Tax',
                        'LTCG (Long-Term Capital Gains) Tax',
                        'Intraday Trading Taxation (Speculative Income)',
                        'F&O Trading (Non-Speculative Income)',
                        'Dividend Taxation',
                    ],
                    'box-icon' => '📈'
                ],[
                    'title' => 'Forex & Commodity Taxation',
                    'description' => 'Tax treatment for forex and commodity trading.',
                    'topic' => [
                        'Forex Trading Tax Rules',
                        'Commodity Gains Classification',
                        'Turnover Calculation',
                        'Presumptive Taxation (Section 44AD)',
                        'Audit Requirements',
                    ],
                    'box-icon' => '🌐'
                ],[
                    'title' => 'Crypto Taxation',
                    'description' => 'Learn how cryptocurrencies are taxed under current regulations.',
                    'topic' => [
                        '30% Flat Tax Rule (India)',
                        '1% TDS on Transactions',
                        'Loss Adjustment Rules',
                        'Gift Tax on Crypto',
                        'Reporting in ITR',
                    ],
                    'box-icon' => '🪙'
                ],[
                    'title' => 'Tax Planning Strategies',
                    'description' => 'Optimize your taxes legally with smart strategies.',
                    'topic' => [
                        'Tax Harvesting Techniques',
                        'Offset Gains with Losses',
                        'Deductions under Section 80C',
                        'Advance Tax Planning',
                        'Choosing Right Income Category',
                    ],
                    'box-icon' => '🧠'
                ],[
                    'title' => 'Filing Income Tax Returns (ITR)',
                    'description' => 'Step-by-step guide to filing taxes for traders.',
                    'topic' => [
                        'Choosing Correct ITR Form (ITR-2, ITR-3)',
                        'Reporting Capital Gains',
                        'Reporting Business Income',
                        'Filing Deadlines',
                        'Common Mistakes to Avoid',
                    ],
                    'box-icon' => '📑'
                ],[
                    'title' => 'Compliance & Legal Requirements',
                    'description' => 'Stay compliant with tax laws and avoid penalties.',
                    'topic' => [
                        'Tax Audit Applicability',
                        'Maintaining Trading Records',
                        'GST Applicability (if any)',
                        'Penalties for Non-Compliance',
                        'Notices & How to Handle Them',
                    ],
                    'box-icon' => '⚖️'
                ],[
                    'title' => 'Advanced Tax Concepts',
                    'description' => 'Deep dive into professional-level tax strategies.',
                    'topic' => [
                        'Turnover Calculation in F&O',
                        'Presumptive vs Regular Taxation',
                        'Carry Forward & Set-off of Losses',
                        'International Trading Taxation',
                        'Double Taxation Avoidance (DTAA)',
                    ],
                    'box-icon' => '💼'
                ],[
                    'title' => 'Real Case Studies & Practical Demo',
                    'description' => 'Apply tax concepts through real examples and live demos.',
                    'topic' => [
                        'Sample Tax Calculation (Trader)',
                        'Portfolio-Based Tax Example',
                        'Filing Demo Walkthrough',
                        'Audit Case Example',
                        'Q&A Session',
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
        const text = "Taxation for Traders & Investors";
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