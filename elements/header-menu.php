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