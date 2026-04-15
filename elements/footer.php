        <!-- Start Footer Section -->
        <style>
            footer {
                background-color: var(--zed-card-back);
                font-size: 14px;
                color: #444;
                padding: 50px 0 0;
            }

            .footer-section {
                margin: auto;
                text-align: justify;
                padding: 2rem;
            }

            .footer-section p {
                margin-bottom: 1rem;
                font-size: 0.8rem;
            }

            .footer-links {
                border-top: 1px solid #ccc;
                padding: 30px 0 20px;
            }

            .footer-links h6 {
                font-weight: 600;
                margin-bottom: 1rem;
            }

            .footer-links ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .footer-links ul li {
                margin-bottom: 0.5rem;
            }

            .footer-meta {
                border-top: 1px solid #ccc;
                font-size: 11px;
                padding: 15px 0;
                text-align: center;
                border-bottom: 1px solid #ccc;
            }

            .footer-meta a {
                margin: 0 5px;
                color: #444;
                text-decoration: none;
            }

            .footer-meta a:hover,
            .footer-links a:hover {
                text-decoration: none;
                /* font-weight: 600; */
                color: var(--zed-dark-text);
            }

            .footer-bottom {
                border-top: 1px solid #ccc;
                font-size: 13px;
                text-align: center;
                padding: 20px;
            }

            li a,
            .footer-bottom a {
                text-decoration: none;
                color: var(--zed-secondary);
            }

            @media (max-width: 767.9px) {
                .footer-links .col-md-3 {
                    margin-bottom: 2rem;
                }

                footer {
                    padding: 60px 0;
                }
            }

            .footer-bottom p {
                margin-bottom: 0.5rem;
                font-size: 0.8rem;
            }

            .socil-media-icon ul li {
                display: inline-block;
            }

            .socil-media-icon ul li a {
                height: 50px;
                width: 50px;
                line-height: 55px;
                text-align: center;
                display: block;
                border-radius: 50%;
                color: var(--zed-secondary);
            }

            .socil-media-icon ul li svg {
                height: 35px;
                width: 50px;
                text-align: center;
                display: block;
                border-radius: 50%;
                fill: var(--zed-secondary);
            }

            .socil-media-icon ul li a:hover {
                color: var(--zed-dark-text);
            }

            .socil-media-icon ul li svg:hover {
                fill: var(--zed-dark-text);
            }

            .icon {
                font-size: 30px;
                margin: 8px 0;
            }
        </style>

        <footer>
            <div class="container footer-section">
                <p>Copyright © <?= getConfigurationfield('COPYRIGHT_MSG');?></p>
                <p>Zed Capital is a registered trade name of Zed Capital International Limited.</p>
                <p class="mb-0">
                    <strong>
                        Registered Office:
                    </strong>
                    <?php echo getConfigurationfield('REGISTERED_OFFICE_EN');?>
                </p>
                <p>
                    <strong>
                        Representative Office:
                    </strong>
                    <?= getConfigurationfield('REPRESENTATIVE_OFFICE_EN');?>
                </p>
                <p>
                    <b>Restricted Regions:</b>
                    <?= getConfigurationfield('RESTRICTED_REGIONS_EN');?>
                </p>

                <p>
                    <?= getConfigurationfield('LICENCE_DEALER_MSG_EN');?>
                </p>

                <p>
                    <b>High Risk Investment Warning:</b>
                    <?= getConfigurationfield('HIGH_RISK_WARNING_EN');?>
                </p>

                <p class="mb-5">
                    The ZedCapital website uses cookies. By continuing to browse the page you automatically agree to our use of cookies. For more information on our cookie usage, on how to change cookies and their settings see our <a href="{{url(env('VIEW_FOLDER').'/public/'.env('VIEW_FOLDER').'pdf/Cookies-Policy-ZedCapital.pdf" download title="Cookie Policy" class="text-decoration-none"> Cookie Policy</a>.
                </p>

                <div class="row g-3 footer-links">
                    <div class="col-6 col-sm-4 col-md-2">
                        <h6>Account</h6>
                        <ul>
                            <li><a href="https://cabinet.zedcapital.com/login" title="Log IN">Log In</a></li>
                            <li><a href="https://cabinet.zedcapital.com/register" title="Open Account">Open an Account</a></li>
                            <li><a href="https://cabinet.zedcapital.com/register" title="Free Trial">Free Trial</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-4 col-md-2">
                        <h6>Financial Market</h6>
                        <ul>
                            <li><a href="{{url('american-financial-market')}}" title="American Market">American Market</a></li>
                            <li><a href="{{url('european-financial-market')}}" title="European Market">European Market</a></li>
                            <li><a href="{{url('middle-eastern-financial-market')}}" title="Middle Eastern Market">Middle Eastern Market</a></li>
                            <li><a href="{{url('asian-financial-market')}}" title="Asian Market">Asian Market</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-4 col-md-2">
                        <h6>Platform</h6>
                        <ul>
                            <li>
                                <a href="https://download.mql5.com/cdn/web/zed.capital.international/mt5/zedcapital5setup.exe" target="_blank" title="Download Window Terminal">
                                    Windows
                                </a>
                            </li>
                            <li>
                                <a href="https://download.mql5.com/cdn/mobile/mt5/android?server=ZedCapital-Demo,ZedCapital-Live" target="_blank" title="Download Android App">
                                    Android
                                </a>
                            </li>
                            <li>
                                <a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=ZedCapital-Demo,ZedCapital-Live" target="_blank" title="Download Apple App">
                                    IOS
                                </a>
                            </li>
                            <li>
                                <a href="https://download.mql5.com/cdn/web/metaquotes.ltd/mt5/MetaTrader5.pkg.zip?utm_source=www.metatrader5.com&utm_campaign=download.mt5.macos" target="_blank" title="Download Mac OS">
                                    Mac OS
                                </a>
                            </li>
                            <li class="d-none">
                                <a href="https://download.mql5.com/cdn/web/zed.capital.international/mt5/zedcapital5setup.exe" target="_blank" title="Download Web Trader">
                                    Desktop
                                </a>
                            </li>
                            <li>
                                <a class="custom-pointer openMT5WebTrader">
                                    Web Trader
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-4 col-md-2">
                        <h6>Products</h6>
                        <ul>
                            <li><a href="{{url('stocks')}}" title="Stocks">Stocks</a></li>
                            <li><a href="{{url('forex')}}" title="Forex">Forex</a></li>
                            <li><a href="{{url('indices')}}" title="Indices">Indices</a></li>
                            <li><a href="{{url('metal')}}" title="Metals">Metals</a></li>
                            <li><a href="{{url('commodities')}}" title="Commodities">Commodities</a></li>
                            <li><a href="{{url('crypto')}}" title="Crypto">Crypto</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-4 col-md-2">
                        <h6>Company</h6>
                        <ul>
                            <li><a href="{{url('about-us')}}" title="About Us">About Us</a></li>
                            <li><a href="{{url('contact-us')}}" title="Contact Us">Contact Us</a></li>
                            <li><a href="{{url('zed-academy')}}" title="Zed Academy">Zed Academy</a></li>
                            <li><a href="{{url('faqs')}}" title="FAQ's">FAQ's</a></li>
                            <li><a href="{{url('news')}}" title="News">News</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-4 col-md-2">
                        <h6>Tools & Resources</h6>
                        <ul>
                            <li><a href="{{url('economic-calendar')}}" title="Economic Calendar">Economic Calendar</a></li>
                            <li><a href="{{url('pivot-point')}}" title="Pivot Point">Pivot Point</a></li>
                            <li><a href="{{url('currency-convertor')}}" title="Currency Converter">Currency Converter</a></li>
                            <li><a href="{{url('profit-calculator')}}" title="Profit Calculator">Profit Calculator</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row footer-links d-none">
                    <div class="col-md-3 col-sm-6">
                        <h6>Account</h6>
                        <ul>
                            <li><a href="https://cabinet.zedcapital.com/login" title="Log In">Log In</a></li>
                            <li><a href="https://cabinet.zedcapital.com/register" title="Open an Account">Open an Account</a></li>
                            <li><a href="https://cabinet.zedcapital.com/register" title="Free Trial">Free Trial</a></li>
                        </ul>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <h6>Financial Market</h6>
                        <ul>
                            <li><a href="{{url('american-financial-market')}}" title="American Market">American Market</a></li>
                            <li><a href="{{url('european-financial-market')}}" title="European Market">European Market</a></li>
                            <li><a href="{{url('middle-eastern-financial-market')}}" title="Middle Eastern Market">Middle Eastern Market</a></li>
                            <li><a href="{{url('asian-financial-market')}}" title="Asian Market">Asian Market</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h6>Products</h6>
                        <ul>
                            <li><a href="{{url('stocks')}}" title="Stocks">Stocks</a></li>
                            <li><a href="{{url('forex')}}" title="Forex">Forex</a></li>
                            <li><a href="{{url('indices')}}" title="Indices">Indices</a></li>
                            <li><a href="{{url('metal')}}" title="Metals">Metals</a></li>
                            <li><a href="{{url('commodities')}}" title="Commodities">Commodities</a></li>
                            <li><a href="{{url('crypto')}}" title="Crypto">Crypto</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h6>Company</h6>
                        <ul>
                            <li><a href="{{url('about-us')}}" title="About Us">About Us</a></li>
                            <li><a href="{{url('zed-academy')}}" title="Zed Academy">Zed Academy</a></li>
                            <li><a href="javascript:void(0)" title="News">News</a></li>
                            <li><a href="javascript:void(0)" title="Press and Media">Press and Media</a></li>
                            <li><a href="javascript:void(0)" title="Regulatory Reports">Regulatory Reports</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer-bottom pb-0">
                    <p><strong>Zed Capital International Limited</strong></p>
                    <p>
                        <strong>Registered Office:</strong>
                        <?= getConfigurationfield('REGISTERED_OFFICE_EN');?>
                    </p>
                    <p>
                        <strong>Representative Office:</strong>
                        <?= getConfigurationfield('REPRESENTATIVE_OFFICE_EN');?>
                    </p>
                    <p>
                        <strong>Call:</strong>
                        <a href="tel:<?= getConfigurationfield('CALL_US');?>" class="" title="Call Direct">
                            <?= getConfigurationfield('CALL_US');?>
                        </a>
                        • <strong>Email:</strong>
                        <a href="mailto:<?= getConfigurationfield('EMAIL_US');?>" title="Email Direct">
                            <?= getConfigurationfield('EMAIL_US');?>
                        </a>
                    </p>

                    <div class="row">
                        <div class="text-center col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="socil-media-icon">
                                <ul class="m-0 p-0 mt-3">
                                    <?php
                                    if( getConfigurationfield('SOCIAL_FACEBOOK_LINK') ){
                                        ?>
                                        <li>
                                            <a target="_blank" href="<?= getConfigurationfield('SOCIAL_FACEBOOK_LINK');?>" class="facebook" title="Facebook">
                                                <svg id="facebook" enable-background="new 0 0 49.652 49.652" height="512" viewBox="0 0 49.652 49.652" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><path d="m24.826 0c-13.689 0-24.826 11.137-24.826 24.826 0 13.688 11.137 24.826 24.826 24.826 13.688 0 24.826-11.138 24.826-24.826 0-13.689-11.136-24.826-24.826-24.826zm6.174 25.7h-4.039v14.396h-5.985s0-7.866 0-14.396h-2.845v-5.088h2.845v-3.291c0-2.357 1.12-6.04 6.04-6.04l4.435.017v4.939s-2.695 0-3.219 0-1.269.262-1.269 1.386v2.99h4.56z"/></g></g></svg>
                                            </a>
                                        </li>
                                        <?php
                                    }

                                    if( getConfigurationfield('SOCIAL_INSTAGRAM_LINK') ){
                                        ?>
                                        <li>
                                            <a target="_blank" href="<?= getConfigurationfield('SOCIAL_INSTAGRAM_LINK');?>" class="instagram" title="Instagram">
                                                <svg id="instagram" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><circle cx="256" cy="256" r="52.5"/><path d="m256 6c-138.071 0-250 111.929-250 250s111.929 250 250 250 250-111.929 250-250-111.929-250-250-250zm154.458 313.54c-1.2 23.768-7.879 47.206-25.2 64.343-17.489 17.3-41.038 23.746-65.035 24.934h-128.445c-24-1.188-47.546-7.63-65.035-24.934-17.322-17.137-24-40.575-25.2-64.343v-127.08c1.2-23.768 7.879-47.206 25.2-64.344 17.489-17.3 41.038-23.746 65.035-24.933h128.444c24 1.187 47.546 7.63 65.035 24.933 17.322 17.138 24 40.576 25.2 64.344z"/><path d="m318.6 132.138c-31.286-.858-93.906-.858-125.192 0-16.281.447-34.738 4.5-46.338 16.89-12.054 12.879-16.609 28.439-17.071 45.846-.812 30.552 0 122.252 0 122.252.529 17.405 5.017 32.967 17.071 45.846 11.6 12.394 30.057 16.443 46.338 16.89 31.286.858 93.906.858 125.192 0 16.281-.447 34.738-4.5 46.338-16.89 12.054-12.879 16.609-28.439 17.071-45.846v-122.252c-.462-17.407-5.017-32.967-17.071-45.846-11.604-12.394-30.061-16.443-46.338-16.89zm-62.6 205.237a81.375 81.375 0 1 1 81.375-81.375 81.375 81.375 0 0 1 -81.375 81.375zm81.721-145.953a16.275 16.275 0 1 1 16.279-16.275 16.275 16.275 0 0 1 -16.279 16.275z"/></svg>
                                            </a>
                                        </li>
                                        <?php
                                    }

                                    if( getConfigurationfield('SOCIAL_LINKEDIN_LINK') ){
                                        ?>
                                        <li>
                                            <a target="_blank" href="<?= getConfigurationfield('SOCIAL_LINKEDIN_LINK');?>" class="linkedin" title="linkedin">
                                                <svg id="linkedin" height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm-74.390625 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0"/></svg>
                                            </a>
                                        </li>
                                        <?php
                                    }

                                    if( getConfigurationfield('SOCIAL_TWITTER_LINK') ){
                                        ?>
                                        <li>
                                            <a target="_blank" href="<?= getConfigurationfield('SOCIAL_TWITTER_LINK');?>" class="twitter" title="Twitter">
                                                <svg id="twitter" enable-background="new 0 0 1227 1227" viewBox="0 0 1227 1227" xmlns="http://www.w3.org/2000/svg"><g><path d="m613.5 0c-338.815 0-613.5 274.685-613.5 613.5s274.685 613.5 613.5 613.5 613.5-274.685 613.5-613.5-274.685-613.5-613.5-613.5z"/><path d="m680.617 557.98 262.632-305.288h-62.235l-228.044 265.078-182.137-265.078h-210.074l275.427 400.844-275.427 320.142h62.239l240.82-279.931 192.35 279.931h210.074l-285.641-415.698zm-335.194-258.435h95.595l440.024 629.411h-95.595z" fill="#fff"/></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>
                                            </a>
                                        </li>
                                        <?php
                                    }

                                    if( getConfigurationfield('SOCIAL_YOUTUBE_LINK') ){
                                        ?>
                                        <li>
                                            <a target="_blank" href="<?= getConfigurationfield('SOCIAL_YOUTUBE_LINK');?>" class="youtube" title="Youtube">
                                                <svg id="youtube" height="512" viewBox="0 0 152 152" width="512" xmlns="http://www.w3.org/2000/svg"><g id="Layer_2" data-name="Layer 2"><g id="Color"><g id="_02.YouTube" data-name="02.YouTube"><path d="m65.46 88.26 21.08-12.23-21.08-12.29z"/><path d="m76 0a76 76 0 1 0 76 76 76 76 0 0 0 -76-76zm40 89.45a15.13 15.13 0 0 1 -15.13 15.14h-49.74a15.13 15.13 0 0 1 -15.13-15.14v-26.9a15.13 15.13 0 0 1 15.13-15.14h49.74a15.13 15.13 0 0 1 15.13 15.14z"/></g></g></g></svg>
                                            </a>
                                        </li>
                                        <?php
                                    }

                                    if( getConfigurationfield('SOCIAL_TELEGRAM_LINK') ){
                                        ?>
                                        <li>
                                            <a target="_blank" href="<?= getConfigurationfield('SOCIAL_TELEGRAM_LINK');?>" class="telegram" title="Telegram">
                                                <svg id="telegram" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m12 24c6.629 0 12-5.371 12-12s-5.371-12-12-12-12 5.371-12 12 5.371 12 12 12zm-6.509-12.26 11.57-4.461c.537-.194 1.006.131.832.943l.001-.001-1.97 9.281c-.146.658-.537.818-1.084.508l-3-2.211-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953z"/></svg>
                                            </a>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-meta">
                    <a href="assets/pdf/Terms-condition-ZedCapital-com.pdf" download title="Terms & Condition">Terms & Condition</a> |
                    <a href="assets/pdf/Privacy-Policy-ZedCapital-com.pdf" download title="Privacy Policy">Privacy Policy</a> |
                    <a href="assets/pdf/Cookies-Policy-ZedCapital-com.pdf" download title="Cookie Policy">Cookie Policy</a> |
                    <a href="assets/pdf/Arbitrage-Policy-ZedCapital-com.pdf" download title="Arbitrage Policy">Arbitrage Policy</a> |
                    <a href="risk-disclosure" title="Risk Disclosure">Risk Disclosure</a>
                </div>
            </div>
        </footer>
        <!-- End Footer Section -->

        <!-- Back to Top Button -->
        <a href="#top" id="backToTop" class="btn btn-danger p-3 shadow" style="display:none;">
            <i class="fa fa-arrow-up"></i>
        </a>

        <span id="contact_submit_url" class="d-none">{{ route('contact-submit.form') }}</span>
        <span id="request_callback_submit_url" class="d-none">{{ route('contact-submit.form') }}</span>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- OwlCarousel JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <!-- Custom JS -->
        <script src="assets/js/zcapital.js"></script>

        <script>
            const backToTop = document.getElementById("backToTop");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 500) { // show after 200px scroll
                    backToTop.style.display = "block";
                } else {
                    backToTop.style.display = "none";
                }
            });
        </script>

    </body>
</html>
