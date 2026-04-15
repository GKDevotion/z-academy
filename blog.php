<?php 
include_once ('elements/header.php');
?>

    <style>
        /* ── HERO ── */
        .hero {
            background: #fff;
            border-bottom: 1px solid var(--border);
            padding: 5rem 0 0;
            overflow: hidden;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -100px;
            left: -100px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, var(--zed-backgound-color) 0%, transparent 65%);
            pointer-events: none;
        }

        .hero-tag {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: var(--zed-backgound-color);
            color: var(--primary);
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            padding: 0.3rem 0.9rem;
            border-radius: 20px;
            margin-bottom: 1.25rem;
        }

        .hero-title {
            font-family: 'Syne', sans-serif;
            font-size: clamp(2rem, 4.5vw, 3.4rem);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -1.5px;
            color: var(--dark);
            margin-bottom: 1.25rem;
        }

        .hero-title em {
            color: var(--primary);
            font-style: normal;
        }

        .hero-desc {
            font-size: 1rem;
            line-height: 1.75;
            color: #555;
            max-width: 480px;
            margin-bottom: 2rem;
        }

        .hero-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-bottom: 2.5rem;
        }

        .h-stat {
            display: flex;
            flex-direction: column;
        }

        .h-stat-num {
            font-family: 'Syne', sans-serif;
            font-size: 1.7rem;
            font-weight: 800;
            color: var(--dark);
            line-height: 1;
        }

        .h-stat-num span {
            color: var(--primary);
        }

        .h-stat-label {
            font-size: 0.78rem;
            color: var(--muted);
            margin-top: 0.2rem;
        }

        .hero-btns {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
            margin: 3rem 0;
        }

        .btn-hero-primary {
            background: var(--primary);
            color: #fff;
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            padding: 0.8rem 1.75rem;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition);
        }

        .btn-hero-primary:hover {
            background: #cc0000;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 0, 0, 0.3);
        }

        .btn-hero-outline {
            background: transparent;
            color: var(--dark);
            font-family: 'Syne', sans-serif;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 0.8rem 1.75rem;
            border-radius: 12px;
            border: 2px solid var(--border);
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition);
        }

        .btn-hero-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
            background: var(--zed-backgound-color);
        }

        .hero-img-wrap {
            position: relative;
            border-radius: 24px 24px 0 0;
            overflow: hidden;
            height: 420px;
        }

        .hero-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .hero-img-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.25) 0%, rgba(0, 0, 0, 0.05) 100%);
        }

        .hero-img-badge {
            position: absolute;
            bottom: 1.5rem;
            left: 1.5rem;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 14px;
            padding: 1rem 1.25rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .badge-num {
            font-family: 'Syne', sans-serif;
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--primary);
            line-height: 1;
        }

        .badge-txt {
            font-size: 0.75rem;
            color: #555;
            margin-top: 0.1rem;
        }

        /* ── SECTION HEADER ── */
        .section-wrap {
            padding: 5rem 0 3rem;
        }

        .section-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--primary);
            margin-bottom: 0.75rem;
        }

        .section-eyebrow::before,
        .section-eyebrow::after {
            content: '';
            display: block;
            width: 20px;
            height: 1.5px;
            background: var(--primary);
            opacity: 0.5;
        }

        .section-title {
            font-family: 'Syne', sans-serif;
            font-size: clamp(1.7rem, 3vw, 2.5rem);
            font-weight: 800;
            letter-spacing: -1px;
            color: var(--dark);
            margin-bottom: 0.75rem;
        }

        .section-desc {
            font-size: 0.95rem;
            line-height: 1.7;
            color: var(--muted);
            max-width: 560px;
            margin: 0 auto;
        }

        /* ── FILTER TABS ── */
        .filter-tabs {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center;
            margin-bottom: 3rem;
        }

        .f-tab {
            font-family: 'DM Sans', sans-serif;
            font-size: 0.82rem;
            font-weight: 500;
            padding: 0.45rem 1.1rem;
            border-radius: 20px;
            border: 1.5px solid var(--border);
            background: #fff;
            color: #555;
            cursor: pointer;
            transition: var(--transition-fast);
        }

        .f-tab:hover,
        .f-tab.active {
            background: var(--primary);
            color: #fff;
            border-color: var(--primary);
            box-shadow: 0 4px 14px rgba(255, 0, 0, 0.2);
        }

        /* ── BLOG CARDS ── */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.75rem;
        }

        /* Featured card (first one) */
        .blog-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid var(--border);
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }

        .blog-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 60px rgba(0, 0, 0, 0.1);
            border-color: rgba(255, 0, 0, 0.15);
        }

        .blog-card.featured {
            grid-column: span 2;
            flex-direction: row;
        }

        .blog-card.featured .card-img-wrap {
            flex: 0 0 48%;
            height: auto;
        }

        .blog-card.featured .card-img-wrap img {
            height: 100%;
        }

        .blog-card.featured .card-body {
            flex: 1;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .card-img-wrap {
            position: relative;
            height: 200px;
            overflow: hidden;
            background: #111;
            flex-shrink: 0;
        }

        .card-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
            display: block;
        }

        .blog-card:hover .card-img-wrap img {
            transform: scale(1.07);
        }

        .card-img-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.4) 0%, transparent 60%);
        }

        .card-level {
            position: absolute;
            top: 0.9rem;
            left: 0.9rem;
            font-size: 0.67rem;
            font-weight: 700;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            padding: 0.28rem 0.75rem;
            border-radius: 20px;
            backdrop-filter: blur(8px);
        }

        .level-beginner {
            background: rgba(0, 255, 136, 0.2);
            color: #00cc6a;
            border: 1px solid rgba(0, 255, 136, 0.3);
        }

        .level-intermediate {
            background: rgba(255, 189, 46, 0.2);
            color: #cc9400;
            border: 1px solid rgba(255, 189, 46, 0.3);
        }

        .level-advanced {
            background: rgba(255, 0, 0, 0.2);
            color: var(--primary);
            border: 1px solid rgba(255, 0, 0, 0.3);
        }

        .card-read-time {
            position: absolute;
            bottom: 0.9rem;
            right: 0.9rem;
            font-size: 0.68rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.9);
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(6px);
            padding: 0.25rem 0.6rem;
            border-radius: 6px;
        }

        .card-body {
            padding: 1.4rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            flex: 1;
        }

        .card-category {
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .card-category i {
            font-size: 0.75rem;
        }

        .card-title {
            font-family: 'Syne', sans-serif;
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--dark);
            line-height: 1.3;
            letter-spacing: -0.3px;
            transition: var(--transition-fast);
        }

        .blog-card.featured .card-title {
            font-size: 1.35rem;
        }

        .blog-card:hover .card-title {
            color: var(--primary);
        }

        .card-excerpt {
            font-size: 0.84rem;
            line-height: 1.65;
            color: #666;
            flex: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .card-footer-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 0.75rem;
            border-top: 1px solid #f5f5f5;
            margin-top: auto;
        }

        .card-author {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .author-avatar {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: var(--zed-backgound-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.65rem;
            font-weight: 700;
            color: var(--primary);
        }

        .author-name {
            font-size: 0.75rem;
            font-weight: 600;
            color: #444;
        }

        .card-read-link {
            font-size: 0.78rem;
            font-weight: 600;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.3rem;
            transition: var(--transition-fast);
        }

        .card-read-link:hover {
            gap: 0.6rem;
        }

        .card-read-link i {
            font-size: 0.75rem;
            transition: var(--transition-fast);
        }

        /* ── LOAD MORE ── */
        .load-more-wrap {
            text-align: center;
            margin-top: 3rem;
        }

        .btn-load-more {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            padding: 0.85rem 2.5rem;
            border-radius: 12px;
            border: 2px solid var(--border);
            background: #fff;
            color: var(--dark);
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-load-more:hover {
            border-color: var(--primary);
            color: var(--primary);
            background: var(--zed-backgound-color);
        }

        /* ── CTA BANNER ── */
        .cta-banner {
            background: var(--dark);
            border-radius: 24px;
            padding: 3.5rem 3rem;
            margin: 4rem 0;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .cta-banner::before {
            content: '';
            position: absolute;
            top: -80px;
            right: -80px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255, 0, 0, 0.2) 0%, transparent 65%);
        }

        .cta-banner::after {
            content: '';
            position: absolute;
            bottom: -60px;
            left: 30%;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(255, 0, 0, 0.08) 0%, transparent 65%);
        }

        .cta-text h3 {
            font-family: 'Syne', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: #fff;
            letter-spacing: -0.5px;
            margin-bottom: 0.5rem;
        }

        .cta-text p {
            color: #777;
            font-size: 0.9rem;
            max-width: 400px;
            line-height: 1.6;
        }

        .btn-cta-white {
            background: #fff;
            color: var(--dark);
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            padding: 0.85rem 2rem;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: var(--transition);
            white-space: nowrap;
        }

        .btn-cta-white:hover {
            background: var(--primary);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 0, 0, 0.3);
        }

        /* ── ANIMATIONS ── */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .anim {
            animation: fadeUp 0.55s ease both;
        }

        .blog-card {
            animation: fadeUp 0.5s ease both;
        }

        .blog-card:nth-child(1) {
            animation-delay: 0.05s;
        }

        .blog-card:nth-child(2) {
            animation-delay: 0.10s;
        }

        .blog-card:nth-child(3) {
            animation-delay: 0.15s;
        }

        .blog-card:nth-child(4) {
            animation-delay: 0.20s;
        }

        .blog-card:nth-child(5) {
            animation-delay: 0.25s;
        }

        .blog-card:nth-child(6) {
            animation-delay: 0.30s;
        }

        .blog-card:nth-child(7) {
            animation-delay: 0.35s;
        }

        .blog-card:nth-child(8) {
            animation-delay: 0.40s;
        }

        .blog-card:nth-child(9) {
            animation-delay: 0.45s;
        }

        .blog-card:nth-child(10) {
            animation-delay: 0.50s;
        }

        .blog-card:nth-child(11) {
            animation-delay: 0.55s;
        }

        .blog-card:nth-child(12) {
            animation-delay: 0.60s;
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 991px) {
            .blog-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .blog-card.featured {
                grid-column: span 2;
                flex-direction: column;
            }

            .blog-card.featured .card-img-wrap {
                height: 240px;
            }

            .hero-img-wrap {
                height: 300px;
                margin-top: 2rem;
                border-radius: 20px;
            }
        }

        @media (max-width: 575px) {
            .blog-grid {
                grid-template-columns: 1fr;
            }

            .blog-card.featured {
                grid-column: span 1;
            }

            .hero {
                padding: 3rem 0 0;
            }

            .cta-banner {
                padding: 2rem 1.5rem;
            }

            .cta-text h3 {
                font-size: 1.4rem;
            }
        }
    </style>

    <!-- HERO -->
    <section class="hero">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="hero-tag anim"><i class="bi bi-mortarboard-fill"></i> Education Hub</div>
                    <h1 class="hero-title anim" style="animation-delay:.1s">
                        Learn to trade from<br /><em>beginner basics</em><br />to advanced strategies
                    </h1>
                    <p class="hero-desc anim" style="animation-delay:.2s">
                        Pepperstone is committed to offering excellent customer service. We're here to support our
                        clients with a range of educational resources, exclusive insights, and advanced trading tools.
                    </p>
                    <div class="hero-stats anim" style="animation-delay:.25s">
                        <div class="h-stat">
                            <div class="h-stat-num"><span>50</span>+</div>
                            <div class="h-stat-label">Free Guides</div>
                        </div>
                        <div class="h-stat">
                            <div class="h-stat-num"><span>12</span></div>
                            <div class="h-stat-label">Video Courses</div>
                        </div>
                        <div class="h-stat">
                            <div class="h-stat-num"><span>3</span></div>
                            <div class="h-stat-label">Skill Levels</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img-wrap anim" style="animation-delay:.2s">
                        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=900&q=80&fit=crop"
                            alt="Trading education" />
                        <div class="hero-img-overlay"></div>
                        <div class="hero-img-badge">
                            <div class="badge-num">250K+</div>
                            <div class="badge-txt">Active Learners</div>
                        </div>
                    </div>
                    <div class="hero-btns anim" style="animation-delay:.3s">
                        <a href="#" class="btn-hero-primary">Explore Guides <i class="bi bi-arrow-right"></i></a>
                        <a href="#" class="btn-hero-outline"><i class="bi bi-play-circle"></i> Watch Intro</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG SECTION -->
    <section class="section-wrap">
        <div class="container">
            <div class="text-center mb-4">
                <div class="section-eyebrow">Trading Guides</div>
                <h2 class="section-title">Trading guides &amp; educational materials</h2>
                <p class="section-desc">
                    Whether you're new to trading or looking to sharpen advanced skills, you'll find everything you need
                    here — from the basics to expert strategies.
                </p>
            </div>

            <!-- Filter Tabs -->
            <div class="filter-tabs">
                <button class="f-tab active">All Topics</button>
                <button class="f-tab">Forex</button>
                <button class="f-tab">Stocks & IPO</button>
                <button class="f-tab">Commodities</button>
                <button class="f-tab">Risk Management</button>
                <button class="f-tab">Technical Analysis</button>
                <button class="f-tab">Crypto</button>
            </div>

            <!-- Blog Grid -->
            <div class="blog-grid">

                <!-- FEATURED Card 1 -->
                <div class="blog-card featured">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1607863680198-23d4b2565df0?w=700&q=80&fit=crop"
                            alt="Silver Trading" />
                        <div class="card-img-overlay"></div>
                        <span class="card-level level-intermediate">Intermediate</span>
                        <span class="card-read-time"><i class="bi bi-clock me-1"></i>6 min</span>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><i class="bi bi-gem"></i> Commodities</div>
                        <div class="card-title">How to start trading silver: a comprehensive guide for 2026</div>
                        <p class="card-excerpt">As both a precious and industrial commodity, silver can offer distinct
                            opportunities while managing risk exposure. Learn the fundamentals before entering positions
                            in this popular market.</p>
                        <div class="card-footer-row">
                            <div class="card-author">
                                <div class="author-avatar">JR</div>
                                <span class="author-name">James Reed</span>
                            </div>
                            <a href="#" class="card-read-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=500&q=80&fit=crop"
                            alt="IPO" />
                        <div class="card-img-overlay"></div>
                        <span class="card-level level-intermediate">Intermediate</span>
                        <span class="card-read-time"><i class="bi bi-clock me-1"></i>8 min</span>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><i class="bi bi-graph-up-arrow"></i> Stocks & IPO</div>
                        <div class="card-title">Best upcoming IPOs to watch in 2026</div>
                        <p class="card-excerpt">The IPO market could be poised for a significant rebound. Discover which
                            listings to watch and how to position yourself strategically.</p>
                        <div class="card-footer-row">
                            <div class="card-author">
                                <div class="author-avatar">SP</div>
                                <span class="author-name">Sarah Park</span>
                            </div>
                            <a href="#" class="card-read-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1642543492481-44e81e3914a7?w=500&q=80&fit=crop"
                            alt="Volatility" />
                        <div class="card-img-overlay"></div>
                        <span class="card-level level-intermediate">Intermediate</span>
                        <span class="card-read-time"><i class="bi bi-clock me-1"></i>5 min</span>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><i class="bi bi-activity"></i> Markets</div>
                        <div class="card-title">What is market volatility?</div>
                        <p class="card-excerpt">Market volatility is the rate at which financial market prices fluctuate
                            over time. Understanding it is key to managing exposure effectively.</p>
                        <div class="card-footer-row">
                            <div class="card-author">
                                <div class="author-avatar">ML</div>
                                <span class="author-name">Mark Liu</span>
                            </div>
                            <a href="#" class="card-read-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?w=500&q=80&fit=crop"
                            alt="Forex Pairs" />
                        <div class="card-img-overlay"></div>
                        <span class="card-level level-beginner">Beginner</span>
                        <span class="card-read-time"><i class="bi bi-clock me-1"></i>7 min</span>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><i class="bi bi-currency-exchange"></i> Forex</div>
                        <div class="card-title">Understanding major Forex currency pairs</div>
                        <p class="card-excerpt">Dive into EUR/USD, GBP/USD, and USD/JPY — the most traded pairs in the
                            world. Learn what drives their movements and how to read quotes.</p>
                        <div class="card-footer-row">
                            <div class="card-author">
                                <div class="author-avatar">AK</div>
                                <span class="author-name">Anna Kim</span>
                            </div>
                            <a href="#" class="card-read-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?w=500&q=80&fit=crop"
                            alt="Risk Management" />
                        <div class="card-img-overlay"></div>
                        <span class="card-level level-advanced">Advanced</span>
                        <span class="card-read-time"><i class="bi bi-clock me-1"></i>10 min</span>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><i class="bi bi-shield-check"></i> Risk Management</div>
                        <div class="card-title">Advanced risk management strategies for active traders</div>
                        <p class="card-excerpt">Master position sizing, stop-loss placement, and portfolio hedging
                            techniques used by professional traders to protect capital.</p>
                        <div class="card-footer-row">
                            <div class="card-author">
                                <div class="author-avatar">DM</div>
                                <span class="author-name">David M.</span>
                            </div>
                            <a href="#" class="card-read-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1518186285589-2f7649de83e0?w=500&q=80&fit=crop"
                            alt="Oil Trading" />
                        <div class="card-img-overlay"></div>
                        <span class="card-level level-intermediate">Intermediate</span>
                        <span class="card-read-time"><i class="bi bi-clock me-1"></i>6 min</span>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><i class="bi bi-droplet-fill"></i> Commodities</div>
                        <div class="card-title">How to trade crude oil: markets, signals & timing</div>
                        <p class="card-excerpt">Crude oil remains one of the most actively traded commodities globally.
                            Explore how geopolitical events, supply data, and seasonality affect prices.</p>
                        <div class="card-footer-row">
                            <div class="card-author">
                                <div class="author-avatar">TW</div>
                                <span class="author-name">Tom Walsh</span>
                            </div>
                            <a href="#" class="card-read-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1640340434855-6084b1f4901c?w=500&q=80&fit=crop"
                            alt="Bitcoin" />
                        <div class="card-img-overlay"></div>
                        <span class="card-level level-beginner">Beginner</span>
                        <span class="card-read-time"><i class="bi bi-clock me-1"></i>5 min</span>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><i class="bi bi-currency-bitcoin"></i> Crypto</div>
                        <div class="card-title">Bitcoin in 2026: what every new trader needs to know</div>
                        <p class="card-excerpt">From halving cycles to institutional adoption, understanding the macro
                            dynamics of Bitcoin is crucial before placing your first crypto trade.</p>
                        <div class="card-footer-row">
                            <div class="card-author">
                                <div class="author-avatar">RC</div>
                                <span class="author-name">Rachel C.</span>
                            </div>
                            <a href="#" class="card-read-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1543286386-713bdd548da4?w=500&q=80&fit=crop"
                            alt="Technical Analysis" />
                        <div class="card-img-overlay"></div>
                        <span class="card-level level-advanced">Advanced</span>
                        <span class="card-read-time"><i class="bi bi-clock me-1"></i>12 min</span>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><i class="bi bi-bar-chart-line"></i> Technical Analysis</div>
                        <div class="card-title">Mastering candlestick patterns for precision entries</div>
                        <p class="card-excerpt">Engulfing, Doji, Hammer — learn the 12 most powerful candlestick
                            patterns and how to combine them with volume for high-probability setups.</p>
                        <div class="card-footer-row">
                            <div class="card-author">
                                <div class="author-avatar">NB</div>
                                <span class="author-name">Nina B.</span>
                            </div>
                            <a href="#" class="card-read-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 9 -->
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?w=500&q=80&fit=crop"
                            alt="Gold Trading" />
                        <div class="card-img-overlay"></div>
                        <span class="card-level level-intermediate">Intermediate</span>
                        <span class="card-read-time"><i class="bi bi-clock me-1"></i>7 min</span>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><i class="bi bi-star-fill"></i> Commodities</div>
                        <div class="card-title">Gold trading guide: is XAU/USD worth adding to your portfolio?</div>
                        <p class="card-excerpt">Gold has long been a safe-haven asset. Understand the relationship
                            between interest rates, dollar strength, and gold price movements.</p>
                        <div class="card-footer-row">
                            <div class="card-author">
                                <div class="author-avatar">LF</div>
                                <span class="author-name">Lena F.</span>
                            </div>
                            <a href="#" class="card-read-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 10 -->
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1434626881859-194d67b2b86f?w=500&q=80&fit=crop"
                            alt="Trading Psychology" />
                        <div class="card-img-overlay"></div>
                        <span class="card-level level-advanced">Advanced</span>
                        <span class="card-read-time"><i class="bi bi-clock me-1"></i>9 min</span>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><i class="bi bi-brain"></i> Psychology</div>
                        <div class="card-title">Trading psychology: overcoming fear, greed & bias</div>
                        <p class="card-excerpt">The biggest obstacle to profitability isn't the market — it's the
                            trader. Explore proven psychological frameworks to trade with discipline and clarity.</p>
                        <div class="card-footer-row">
                            <div class="card-author">
                                <div class="author-avatar">OT</div>
                                <span class="author-name">Oliver T.</span>
                            </div>
                            <a href="#" class="card-read-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Card 11 -->
                <div class="blog-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=500&q=80&fit=crop"
                            alt="Index Trading" />
                        <div class="card-img-overlay"></div>
                        <span class="card-level level-beginner">Beginner</span>
                        <span class="card-read-time"><i class="bi bi-clock me-1"></i>5 min</span>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><i class="bi bi-grid-3x3-gap"></i> Indices</div>
                        <div class="card-title">What are stock indices and how do you trade them?</div>
                        <p class="card-excerpt">S&amp;P 500, NASDAQ, FTSE 100 — learn what indices represent, why they
                            move, and how CFD trading lets you gain exposure without owning individual stocks.</p>
                        <div class="card-footer-row">
                            <div class="card-author">
                                <div class="author-avatar">EH</div>
                                <span class="author-name">Emma H.</span>
                            </div>
                            <a href="#" class="card-read-link">Read more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div><!-- /blog-grid -->

            <div class="load-more-wrap">
                <button class="btn-load-more"><i class="bi bi-grid"></i> Load More Articles</button>
            </div>

            <!-- CTA Banner -->
            <div class="cta-banner">
                <div class="cta-text">
                    <h3>Ready to put your knowledge to work?</h3>
                    <p>Open a free demo account and practice trading with $50,000 in virtual funds — zero risk, real
                        markets.</p>
                </div>
                <a href="#" class="btn-cta-white">Open Free Account <i class="bi bi-arrow-right"></i></a>
            </div>

        </div>
    </section>
<?php
include_once ('elements/footer.php');
?>