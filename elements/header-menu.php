<style>
    .navbar-nav .nav-link.active, .navbar-nav .nav-link.show {
        color: rgb(255 0 0);
        background-color: unset;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
    <div class="container-fluid">
        <a class="navbar-brand m-0" href="index">
            <img src="assets/img/zedcapital-learn.png" alt="Zed Capital" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav m-auto menu">
                <!-- Courses Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="financialDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="financialDropdown">
                        <li class="nav-item"><a class="nav-link dropdown-item" href="trader-academy">Trader Academy</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="beginner-courses">Beginner Courses</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="intermidiate-courses">Intermidiate Courses</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="advance-courses">Advance Courses</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="interactive-learning">Interactive Learning</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="course-topic-stock">Stocks</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="course-topic-futures">Futures</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="course-topic-crypto">Crypto</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="course-topic-commodities">Commodities</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="course-topic-metal">Metal</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="course-topic-ecomonics">Economics</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="course-topic-bonds">Bonds</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="course-topic-fundamentals">Fundamentals</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="course-topic-taxes">Taxes</a></li>
                    </ul>
                </li>

                <!-- Product Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                    href="javascript:void(0)" id="productDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Webinars</a>
                    <ul class="dropdown-menu" aria-labelledby="productDropdown">
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-upcomings">Upcoming</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-aired">Aired</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-contributor">Contributor</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-ai-machine-learning">AI & Machine Learning</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-crypto-currency">Crypto Currency</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-financial">Financial</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-forex">Forex</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-metal">Metal</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-commodities">Commodities</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-tax">Tax</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-technology">Technology</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-investment">Investment</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-energy">Energy Sector</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-technical-analysis">Technical Analysis</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="webinar-topic-trading">Trading</a></li>
                    </ul>
                </li>

                <!-- Platform Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                    href="javascript:void(0)" id="platformDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tutorials
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="platformDropdown">
                        <li class="nav-item"><a class="nav-link dropdown-item" class="dropdown-item" href="tutorial-forex">Forex</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" class="dropdown-item" href="tutorial-shares">Shares</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" class="dropdown-item" href="tutorial-commodities">Commodities</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" class="dropdown-item" href="tutorial-crypto">Crypto</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" class="dropdown-item" href="tutorial-stocks">Stocks</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" class="dropdown-item" href="tutorial-metals">Metals</a></li>
                    </ul>
                </li>

                <!-- Tools & Resources -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="educators" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Educators
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="educators">
                        <li class="nav-item"><a class="nav-link dropdown-item" href="educator-learn">Learn</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="educator-margin-rates">Margin Rates</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="educator-risk-management">Risk Management</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="educator-begginer">Begginer</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="educator-intermediate">Intermediate</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="educator-advance">Advance</a></li>
                    </ul>
                </li>
                <!-- Tools & Resources -->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="ourCompanyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Company
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="ourCompanyDropdown">
                        <li class="nav-item"><a class="nav-link dropdown-item" href="assets/pdf/Terms-condition-ZedCapital-com.pdf" download title="Terms & Condition">Terms & Condition</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="assets/pdf/Privacy-Policy-ZedCapital-com.pdf" download title="Privacy Policy">Privacy Policy</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="assets/pdf/Cookies-Policy-ZedCapital-com.pdf" download title="Cookie Policy">Cookie Policy</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="assets/pdf/Arbitrage-Policy-ZedCapital-com.pdf" download title="Arbitrage Policy">Arbitrage Policy</a></li>
                        <li class="nav-item"><a class="nav-link dropdown-item" href="risk-disclosure" title="Risk Disclosure">Risk Disclosure</a></li>
                    </ul>
                </li>
            </ul>

            <div class="d-flex">
                <div class="li-demo-account-btn">
                    <a href="javascript:void(0)" class="btn btn-demo demo-account-btn loginLiveAccount" title="Demo Account">
                        Demo Account
                    </a>
                </div>
                <div class="li-live-account-btn">
                    <a href="javascript:void(0)" class="btn btn-live ms-2 live-account-btn loginLiveAccount" title="Live Account">
                        Live Account
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>