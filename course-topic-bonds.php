<?php 
include_once ('elements/header.php');
?>

    <header class="page-header">
        <div class="container text-center">
            <h1 class="display-3 fw-800 animate__animated animate__fadeIn">
                <span style="color: var(--zed-primary)">Bonds</span>
            </h1>
            <p class="lead opacity-75">
                A broad array of fixed-income courses is available through IBKR’s Traders’ Academy for traders and investors to make more informed investment decisions about U.S. Treasuries, U.S. corporate bonds, U.S. municipal bonds, and Eurodollar markets. Interactive Brokers, along with CME Group, provide a wide range of educational material about fixed-income asset classes and concepts. Including primary market bond issuance, secondary market trading, credit ratings, default risk, bond prices and yields, hedging strategies, the yield curve, short-term interest rates (STIR) markets, the secured overnight financing rate (SOFR), and much more.
            </p>
        </div>
    </header>

    <div class="container py-5">

        <!-- Introduction to U.S. Corporate Bonds -->
        <div class="col-12">
            <div class="course-card">
                <span class="badge-level">Beginner</span>
                <div class="row g-3">
                    <div class="col-md-4">
                        <img src="https://picsum.photos/400/300?2" class="course-img">
                    </div>
                    <div class="col-md-8">
                        <h5 class="course-title">Introduction to U.S. Corporate Bonds</h5>
                        <p class="course-desc">
                            In this course, IBKR senior market analyst Steven Levine provides essential details about the U.S. corporate bond market, including the types of securities investors typically encounter such as secured and unsecured notes. We'll also offer you some tools to enable you to obtain a better understanding of the risks involved with corporate bonds and how they may be mitigated, as well as recent developments that have helped shape market dynamics. Lastly, we'll walk you through the IBKR Trader Workstation's Global Bond Scanner, where you can locate certain corporate bonds in the secondary market, create charts and conduct due diligence to help inform your investment decisions.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="course-list">
                                    <li><i class="fa fa-chevron-right"></i>Course Overview - U.S. Corporate Bonds</li>
                                    <li><i class="fa fa-chevron-right"></i>Fundamental Analysis</li>
                                    <li><i class="fa fa-chevron-right"></i>Primary Market: Constructing an Initial Sale</li>
                                    <li><i class="fa fa-chevron-right"></i>Interest Rate Risk and Central Bank Support</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="course-list">
                                    <li><i class="fa fa-chevron-right"></i>Course Overview - U.S. Corporate Bonds</li>
                                    <li><i class="fa fa-chevron-right"></i>Credit Ratings</li>
                                    <li><i class="fa fa-chevron-right"></i>Secondary Market (Part I): Trading with the IBKR Bond Scanner</li>
                                    <li><i class="fa fa-chevron-right"></i>Secondary Market (Part II): Understanding Prices and Yields</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Interest Rates -->
        <div class="col-12">
            <div class="course-card">
                <span class="badge-level">Beginner</span>
                <div class="row g-3">
                    <div class="col-md-4">
                        <img src="https://picsum.photos/400/300?3" class="course-img">
                    </div>
                    <div class="col-md-8">
                        <h5 class="course-title">Interest Rates</h5>
                        <p class="course-desc">
                            Investors balance their portfolios between equities and fixed income based on factors like risk tolerance, liquidity needs, and economic conditions, with the 60/40 rule serving as a flexible guideline. Hedging and speculation play a crucial role in managing market risk, with equities typically hedged using options, while fixed-income investors utilize futures contracts to navigate interest rate movements. Interest rate and government bond futures provide liquidity and strategic opportunities for investors to hedge risks, speculate on monetary policy changes, and manage exposure across different parts of the yield curve.
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="course-list">
                                    <li><i class="fa fa-chevron-right"></i>Introduction to Monetary Policy</li>
                                    <li><i class="fa fa-chevron-right"></i>Fixed Income and Bond Markets</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="course-list">
                                    <li><i class="fa fa-chevron-right"></i>Bond Derivatives and Trading</li>
                                    <li><i class="fa fa-chevron-right"></i>Entering Packs and Bundles for SOFR Futures Contracts on IBKR’s Trader Workstation</li>
                                </ul>
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