<?php 
include_once ('elements/header.php');
include_once ('elements/image-slider.php');
?>

<!-- 2. HTML Structure -->
<section class="category-section">
    <div class="container">
        <div class="text-center">
            <span class="section-tag">Top Categories</span>
            <h2 class="section-title">Most demanding category to learn from today</h2>
        </div>

        <div class="category-carousel" id="catCarousel">
            <div class="carousel-track" id="catTrack">
                <!-- Card 1 (Odd) -->
                <div class="category-card-wrapper">
                    <div class="category-card">
                        <div class="category-image-box">
                            <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?w=500" alt="Web">
                        </div>
                        <div class="category-content">
                            <h3 class="cat-name">Web Design & Development</h3>
                            <span class="course-count">20 Courses</span>
                            <div class="arrow-btn"><i class="bi bi-arrow-up-right"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 (Even) -->
                <div class="category-card-wrapper">
                    <div class="category-card">
                        <div class="category-image-box">
                            <img src="https://images.unsplash.com/photo-1516116216624-53e697fedbea?w=500" alt="UI">
                        </div>
                        <div class="category-content">
                            <h3 class="cat-name">Programming Interface</h3>
                            <span class="course-count">12 Courses</span>
                            <div class="arrow-btn"><i class="bi bi-arrow-up-right"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 (Odd) -->
                <div class="category-card-wrapper">
                    <div class="category-card">
                        <div class="category-image-box">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500" alt="Finance">
                        </div>
                        <div class="category-content">
                            <h3 class="cat-name">Business & Finance</h3>
                            <span class="course-count">25 Courses</span>
                            <div class="arrow-btn"><i class="bi bi-arrow-up-right"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 (Even) -->
                <div class="category-card-wrapper">
                    <div class="category-card">
                        <div class="category-image-box">
                            <img src="https://images.unsplash.com/photo-1541462608141-ad4d157ee78a?w=500" alt="Design">
                        </div>
                        <div class="category-content">
                            <h3 class="cat-name">Arts & Design Diagram</h3>
                            <span class="course-count">18 Courses</span>
                            <div class="arrow-btn"><i class="bi bi-arrow-up-right"></i></div>
                        </div>
                    </div>
                </div>
                <!-- Card 5 (Odd - Duplicate or extra for loop) -->
                <div class="category-card-wrapper">
                    <div class="category-card">
                        <div class="category-image-box">
                            <img src="https://images.unsplash.com/photo-1557838923-2985c318be48?w=500" alt="Marketing">
                        </div>
                        <div class="category-content">
                            <h3 class="cat-name">Digital Marketing Pro</h3>
                            <span class="course-count">15 Courses</span>
                            <div class="arrow-btn"><i class="bi bi-arrow-up-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. DEMANDING COURSE SECTION -->
<section class="demanding-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6">
                <h2 class="fw-bold fs-1">Most Popular and demanding courses</h2>
            </div>
            <div class="col-lg-6 text-muted">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>

        <div class="row">
            <!-- Left Side Course List (Selectors) -->
            <div class="col-lg-4 mb-4">
                <div class="category-list-box" id="demandingSelectors">
                    <div class="cat-list-item active" data-category="programming">
                        <i class="bi bi-code-square"></i> Programming
                    </div>
                    <div class="cat-list-item" data-category="business">
                        <i class="bi bi-briefcase"></i> Business Finance
                    </div>
                    <div class="cat-list-item" data-category="teaching">
                        <i class="bi bi-mortarboard"></i> Teaching Online
                    </div>
                    <div class="cat-list-item" data-category="design">
                        <i class="bi bi-palette"></i> Arts & Design
                    </div>
                    <div class="cat-list-item" data-category="language">
                        <i class="bi bi-translate"></i> Language Learning
                    </div>
                </div>
            </div>

            <!-- Right Side Dynamic Course List -->
            <div class="col-lg-8">
                <div id="courseDisplayArea">
                    <!-- Dynamic content will be injected here -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. UPCOMING EVENTS SECTION -->
<section class="events-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side Title & Main Image -->
            <div class="col-lg-5 mb-5 mb-lg-0">
                <span class="event-tag">UPCOMMING EVENTS</span>
                <h2 class="fw-bold fs-1 mb-4">Join Our Upcoming Monthly Teaching Events</h2>
                <p class="text-muted mb-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, words which don't look even slightly believable.</p>
                <div class="event-main-img">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800" alt="Teaching Event" class="w-100">
                </div>
            </div>

            <!-- Right Side Event List -->
            <div class="col-lg-7">
                <div class="ps-lg-5">
                    <!-- Event 1 -->
                    <div class="event-card">
                        <div class="event-date-box">
                            <span class="ev-day">04</span>
                            <span class="ev-month">Oct, 2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span><i class="bi bi-clock"></i> 8:00 am - 5:00 pm</span>
                                <span><i class="bi bi-geo-alt"></i> NewYork, USA</span>
                            </div>
                            <h3 class="event-title">World famous talented teachers meetup</h3>
                            <a href="#" class="buy-ticket-btn">Buy Ticket <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div class="event-card">
                        <div class="event-date-box">
                            <span class="ev-day">13</span>
                            <span class="ev-month">Dec, 2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span><i class="bi bi-clock"></i> 8:00 am - 5:00 pm</span>
                                <span><i class="bi bi-geo-alt"></i> NewYork, USA</span>
                            </div>
                            <h3 class="event-title">Global education summit and workshop</h3>
                            <a href="#" class="buy-ticket-btn">Buy Ticket <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Event 3 -->
                    <div class="event-card">
                        <div class="event-date-box">
                            <span class="ev-day">13</span>
                            <span class="ev-month">Dec, 2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span><i class="bi bi-clock"></i> 8:00 am - 5:00 pm</span>
                                <span><i class="bi bi-geo-alt"></i> NewYork, USA</span>
                            </div>
                            <h3 class="event-title">Global education summit and workshop</h3>
                            <a href="#" class="buy-ticket-btn">Buy Ticket <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Event 4 -->
                    <div class="event-card">
                        <div class="event-date-box">
                            <span class="ev-day">13</span>
                            <span class="ev-month">Dec, 2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span><i class="bi bi-clock"></i> 8:00 am - 5:00 pm</span>
                                <span><i class="bi bi-geo-alt"></i> NewYork, USA</span>
                            </div>
                            <h3 class="event-title">Global education summit and workshop</h3>
                            <a href="#" class="buy-ticket-btn">Buy Ticket <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <!-- Event 5 -->
                    <div class="event-card">
                        <div class="event-date-box">
                            <span class="ev-day">13</span>
                            <span class="ev-month">Dec, 2025</span>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span><i class="bi bi-clock"></i> 8:00 am - 5:00 pm</span>
                                <span><i class="bi bi-geo-alt"></i> NewYork, USA</span>
                            </div>
                            <h3 class="event-title">Global education summit and workshop</h3>
                            <a href="#" class="buy-ticket-btn">Buy Ticket <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <div class="text-center">
            <span class="section-tag">Blog Insight</span>
            <h2 class="section-title">Valuable insights to<br>change your startup idea</h2>
        </div>

        <div class="row g-4">
            <!-- Blog 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card" style="transition-delay: 0.1s;">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1523240715630-3887968417c2?w=600" alt="Blog 1">
                        <div class="blog-info-bar">
                            <span class="info-item tag">Courses</span>
                            <span class="info-item"><i class="bi bi-calendar3"></i> October 18, 2025</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">Prefabrice passive are house most memorable</h3>
                        <p class="blog-excerpt">Plan upon yet way get cold spot its week almost do am or limits hearts resolve parties.</p>
                        <a href="#" class="read-more-btn">Read More <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card" style="transition-delay: 0.2s;">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600" alt="Blog 2">
                        <div class="blog-info-bar">
                            <span class="info-item tag">Laravel</span>
                            <span class="info-item"><i class="bi bi-calendar3"></i> November 15, 2025</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">Announcing attachment resolution perform</h3>
                        <p class="blog-excerpt">Taking upon yet way get cold spot its week almost do am or limits hearts resolve parties.</p>
                        <a href="#" class="read-more-btn">Read More <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Blog 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="blog-card" style="transition-delay: 0.3s;">
                    <div class="blog-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=600" alt="Blog 3">
                        <div class="blog-info-bar">
                            <span class="info-item tag">WordPress</span>
                            <span class="info-item"><i class="bi bi-calendar3"></i> December 13, 2025</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">Resolution performing the regular sentim.</h3>
                        <p class="blog-excerpt">Media upon yet way get cold spot its week almost do am or limits hearts resolve parties.</p>
                        <a href="#" class="read-more-btn">Read More <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once ('elements/footer.php');
?>