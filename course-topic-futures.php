<?php 
include_once ('elements/header.php');
?>

    <header class="page-header">
        <div class="container text-center">
            <h1 class="display-3 fw-800 animate__animated animate__fadeIn"><span style="color: var(--brand-red)">Futures</span></h1>
            <p class="lead opacity-75">
                Learn about securities futures and commodities futures through Interactive Brokers and CME Group's vast selection of educational courses, including defining what these financial products are, as well as how to trade and invest in them. These courses explore introductory concepts such as 'contango' and 'backwardation', futures margin, mechanics of the futures market, as well as futures pricing. Also available are courses that focus on futures fundamental analyses for a variety of futures-related products such as interest rate futures, energy futures, agricultural futures, and metal futures. More specialized courses center on CME Micro WTI Crude Oil Futures, South American soybean futures, as well as an introduction to grains and oilseeds.
            </p>
        </div>
    </header>

    <div class="container py-5">

        <div class="row g-4">

            <!-- Introduction to Futures -->
            <div class="col-12">
                <div class="course-card">
                    <span class="badge-level">Beginner</span>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <img src="https://picsum.photos/300/200?1" class="course-img">
                        </div>
                        <div class="col-md-8">
                            <h5 class="course-title">Introduction to Futures</h5>
                            <p class="course-desc">
                                Learn futures market basics, pricing, risk, and trading tools.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="course-list">
                                        <li><i class="fa fa-chevron-right"></i>Market Overview</li>
                                        <li><i class="fa fa-chevron-right"></i>Risk Basics</li>
                                        <li><i class="fa fa-chevron-right"></i>Futures Pricing</li>
                                        <li><i class="fa fa-chevron-right"></i>Contango & Backwardation</li>
                                        <li><i class="fa fa-chevron-right"></i>Futures Margin</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="course-list">
                                        <li><i class="fa fa-chevron-right"></i>TWS Demo</li>
                                        <li><i class="fa fa-chevron-right"></i>Margin in TWS</li>
                                        <li><i class="fa fa-chevron-right"></i>Rolling Positions</li>
                                        <li><i class="fa fa-chevron-right"></i>Spread Trading</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Agricultural Commodities -->
            <div class="col-12">
                <div class="course-card">
                    <span class="badge-level">Beginner</span>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <img src="https://picsum.photos/300/200?2" class="course-img">
                        </div>
                        <div class="col-md-8">
                            <h5 class="course-title">Agricultural Commodities</h5>
                            <p class="course-desc">
                                Understand agricultural commodities, risks, and global impacts.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="course-list">
                                        <li><i class="fa fa-chevron-right"></i>Intro to Commodities</li>
                                        <li><i class="fa fa-chevron-right"></i>Key Traded Commodities</li>
                                        <li><i class="fa fa-chevron-right"></i>Futures Contracts</li>
                                        <li><i class="fa fa-chevron-right"></i>Market Participants</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="course-list">
                                        <li><i class="fa fa-chevron-right"></i>Market Risks</li>
                                        <li><i class="fa fa-chevron-right"></i>Research Tips</li>
                                        <li><i class="fa fa-chevron-right"></i>Global Impact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    
    <footer class="bg-secondary py-5 mt-5 border-top border-danger border-4">
        <div class="container text-center text-white py-4">
            <h2 class="fw-800 mb-3">Unlock <span style="color: var(--prinary-teal)">Elite</span> Access</h2>
            <p class="text-white small mx-auto mb-4" style="max-width: 500px;">Get full curriculum access, live trade webinars, and our private institutional sentiment dashboard.</p>
            <button class="btn btn-lg btn-danger rounded-pill px-5 fw-bold text-uppercase fs-7">Upgrade Now</button>
        </div>
    </footer>

<?php
include_once ('elements/footer.php');
?>