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

                <?php
                    if( false ){
                    ?>
                    <!-- Courses Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="financialDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="financialDropdown">
                            <li class="nav-item"><a class="nav-link dropdown-item" href="trader-academy">Trader Academy</a></li>
                            <li class="nav-item"><a class="nav-link dropdown-item" href="advance-courses">Advance Courses</a></li>
                        </ul>
                    </li>

                    <!-- Product Dropdown -->
                    <li class="nav-item">
                        <a class="nav-link" href="webinars">Webinars</a>
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

                    <!-- Types of Trader -->
                    <li class="nav-item">
                        <a class="nav-link" href="types-of-trader">Types of Trader</a>
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
                            <li class="nav-item"><a class="nav-link dropdown-item" href="educator-metatrader-5">MetaTrader 5</a></li>
                        </ul>
                    </li>
                    <!-- Tools & Resources -->

                    <!-- How to -->
                    <li class="nav-item">
                        <a class="nav-link" href="how-to">How to</a>
                    </li>
                <?php } ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                        <li><a class="dropdown-item" href="beginner-forex-course">Beginner Forex Course</a></li>
                        <li><a class="dropdown-item" href="technical-analysis-masterclass">Technical Analysis Masterclass</a></li>
                        <li><a class="dropdown-item" href="risk-management-course">Risk Management Course</a></li>
                        <li><a class="dropdown-item" href="trading-psychology-course">Trading Psychology Course</a></li>
                        <li><a class="dropdown-item" href="advanced-trading-strategies">Advanced Trading Strategies</a></li>
                        <li><a class="dropdown-item" href="mt5-platform-training">MT5 Platform Training</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="resourcesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Trader Resources
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="resourcesDropdown">
                        <li><a class="dropdown-item" href="forex-quick-guide">Forex Quick Guide</a></li>
                        <li><a class="dropdown-item" href="trading-glossary">Trading Glossary</a></li>
                        <li><a class="dropdown-item" href="market-analysis">Market Analysis</a></li>
                        <li><a class="dropdown-item" href="economic-calendar-guide">Economic Calendar Guide</a></li>
                        <li><a class="dropdown-item" href="risk-management-guide">Risk Management Guide</a></li>
                        <li><a class="dropdown-item" href="trading-mindset-articles">Trading Mindset Articles</a></li>
                        <li><a class="dropdown-item" href="strategy-articles">Strategy Articles</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="webinarsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Webinars
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="webinarsDropdown">
                        <li><a class="dropdown-item" href="upcoming-webinars">Upcoming Webinars</a></li>
                        <li><a class="dropdown-item" href="live-market-sessions">Live Market Sessions</a></li>
                        <li><a class="dropdown-item" href="recorded-webinars">Recorded Webinars</a></li>
                        <li><a class="dropdown-item" href="weekly-market-outlook">Weekly Market Outlook</a></li>
                        <li><a class="dropdown-item" href="expert-analysis-sessions">Expert Analysis Sessions</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="toolsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Trading Tools
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="toolsDropdown">
                        <li><a class="dropdown-item" href="trading-calculator">Trading Calculator</a></li>
                        <li><a class="dropdown-item" href="economic-calendar">Economic Calendar</a></li>
                        <li><a class="dropdown-item" href="market-news">Market News</a></li>
                        <li><a class="dropdown-item" href="trading-journal-template">Trading Journal Template</a></li>
                        <li><a class="dropdown-item" href="position-size-calculator">Position Size Calculator</a></li>
                        <li><a class="dropdown-item" href="pip-calculator">Pip Calculator</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="educatorsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Educators
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="educatorsDropdown">
                        <li><a class="dropdown-item" href="meet-our-educators">Meet Our Educators</a></li>
                        <li><a class="dropdown-item" href="instructor-profiles">Instructor Profiles</a></li>
                        <li><a class="dropdown-item" href="expert-led-sessions">Expert-Led Sessions</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="supportDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Support
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="supportDropdown">
                        <li><a class="dropdown-item" href="help-center">Help Center</a></li>
                        <li><a class="dropdown-item" href="faqs">FAQs</a></li>
                        <li><a class="dropdown-item" href="contact-support">Contact Support</a></li>
                        <li><a class="dropdown-item" href="account-setup-guide">Account Setup Guide</a></li>
                        <li><a class="dropdown-item" href="getting-started-guide">Getting Started Guide</a></li>
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