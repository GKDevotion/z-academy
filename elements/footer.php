        <footer class="main-footer">
            <div class="footer-glow"></div>
            
            <!-- SVG Decoration (The diploma scroll from your image) -->
            <div class="footer-decoration">
                <svg width="200" height="200" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                </svg>
            </div>

            <div class="container footer-container">
                <div class="row">
                    <!-- Brand Column -->
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                        <div class="footer-brand">
                            <a href="#" class="footer-logo">
                                <div class="footer-logo-icon">
                                    <i class="bi bi-file-music" style="display: inline-block; transform: scaleX(-1);"></i>
                                </div>
                                <span class="footer-logo-text">ACADEMY</span>
                            </a>
                            <p class="footer-desc">Bndulgence diminution so discovered mr apartments. Are off under folly death wrote cause her way spite plan upon.</p>
                            <div class="social-links">
                                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                                <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                                <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- About Column -->
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                        <h4 class="footer-widget-title">About</h4>
                        <ul class="footer-links-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">News & Blogs</a></li>
                            <li><a href="#">Become a Teacher</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Quick Links Column -->
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                        <h4 class="footer-widget-title">Quick Link</h4>
                        <ul class="footer-links-list">
                            <li><a href="#">Live Workshop</a></li>
                            <li><a href="#">Free Courses</a></li>
                            <li><a href="#">Admission</a></li>
                            <li><a href="#">Request A Demo</a></li>
                            <li><a href="#">Media Relations</a></li>
                            <li><a href="#">Students</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info Column -->
                    <div class="col-lg-4 col-md-6">
                        <h4 class="footer-widget-title">Contact Info</h4>
                        
                        <div class="contact-item">
                            <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
                            <div class="contact-text">+(964)-2856-3364</div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
                            <div class="contact-text">academy@zedcapital.com</div>
                        </div>

                        <div class="app-downloads">
                            <h5 class="text-white fs-6 mb-3 fw-bold">Download App</h5>
                            <div class="app-btn-group">
                                <a href="#" class="app-btn">
                                    <i class="bi bi-google-play"></i>
                                    <div class="app-btn-text">
                                        <span>Get it on</span>
                                        <strong>Google Play</strong>
                                    </div>
                                </a>
                                <a href="#" class="app-btn">
                                    <i class="bi bi-apple"></i>
                                    <div class="app-btn-text">
                                        <span>Download on</span>
                                        <strong>App Store</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Copyright Bar -->
                <div class="footer-bottom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p class="copyright-text m-0">© Copyright 2025. All Rights Reserved by <strong>ZedCaptial</strong></p>
                        </div>
                        <div class="col-md-6">
                            <ul class="footer-bottom-links">
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap 5.3 JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- 3. JavaScript Slider Logic -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const track = document.getElementById('catTrack');
                const carousel = document.getElementById('catCarousel');
                let index = 0;

                function getCardsPerView() {
                    if (window.innerWidth <= 576) return 1;
                    if (window.innerWidth <= 991) return 2;
                    if (window.innerWidth <= 1200) return 3;
                    return 4;
                }

                function moveSlider() {
                    const cardsPerView = getCardsPerView();
                    const maxIndex = track.children.length - cardsPerView;
                    
                    index++;
                    if (index > maxIndex) index = 0; // Loop back
                    
                    const shift = index * (100 / cardsPerView);
                    track.style.transform = `translateX(-${shift}%)`;
                }

                // Auto move every 2 seconds
                let sliderInterval = setInterval(moveSlider, 2000);

                // Pause on hover, resume on leave
                carousel.addEventListener('mouseenter', () => clearInterval(sliderInterval));
                carousel.addEventListener('mouseleave', () => {
                    sliderInterval = setInterval(moveSlider, 2000);
                });

                // Optional: Manual click navigation could be added to .arrow-btn 
                // if they weren't used for the hover effect transition.
            });

            // --- Demanding Courses Data & Logic ---
            const coursesData = {
                programming: [
                    { title: "Dynamic website development to make money from online", author: "Amaul Joey", price: "$27.00", oldPrice: "$35.00", img: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=400" },
                    { title: "Python for Data Science and Machine Learning", author: "John Doe", price: "$49.00", oldPrice: "$80.00", img: "https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=400" },
                    { title: "Mastering React & Next.js Professional Course", author: "Sarah Albert", price: "$14.00", oldPrice: "$25.00", img: "https://images.unsplash.com/photo-1633356122544-f134324a6cee?w=400" },
                    { title: "Advanced Node.js Backend Architecture", author: "Kevin Hart", price: "$32.00", oldPrice: "$45.00", img: "https://images.unsplash.com/photo-1515879218367-8466d910aaa4?w=400" },
                    { title: "Fullstack PHP & Laravel Development", author: "Aleesha Brown", price: "$36.00", oldPrice: "$49.00", img: "https://images.unsplash.com/photo-1599507591144-66b3f8d92bca?w=400" }
                ],
                business: [
                    { title: "Financial Freedom: Investment Strategy 2024", author: "Mark Cuban", price: "$99.00", oldPrice: "$150.00", img: "https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=400" },
                    { title: "Startup Basics: From Idea to IPO", author: "Elon Musk", price: "$45.00", oldPrice: "$60.00", img: "https://images.unsplash.com/photo-1556761175-b413da4baf72?w=400" },
                    { title: "Corporate Leadership and Team Management", author: "Sheryl Sandberg", price: "$29.00", oldPrice: "$50.00", img: "https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400" },
                    { title: "Global Marketing and Brand Strategy", author: "Gary Vee", price: "$36.00", oldPrice: "$70.00", img: "https://images.unsplash.com/photo-1557838923-2985c318be48?w=400" },
                    { title: "Modern Accounting for Small Businesses", author: "Jane Smith", price: "$19.00", oldPrice: "$35.00", img: "https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=400" }
                ],
                teaching: [
                    { title: "Online Pedagogy: Teaching in a Digital Age", author: "Dr. Brown", price: "$15.00", oldPrice: "$30.00", img: "https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400" },
                    { title: "English Grammar Mastery for Online Tutors", author: "Aleesha Brown", price: "$36.00", oldPrice: "$49.00", img: "https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=400" },
                    { title: "Creative Writing for Educators", author: "Stephen King", price: "$25.00", oldPrice: "$40.00", img: "https://images.unsplash.com/photo-1455390582262-044cdead277a?w=400" },
                    { title: "Building an Online Course that Sells", author: "Pat Flynn", price: "$55.00", oldPrice: "$120.00", img: "https://images.unsplash.com/photo-1501503060809-54bd97043d60?w=400" },
                    { title: "Mathematics Tutoring: Advanced Calculus", author: "Isaac Newton", price: "$40.00", oldPrice: "$65.00", img: "https://images.unsplash.com/photo-1635070041078-e363dbe005cb?w=400" }
                ],
                design: [
                    { title: "UI/UX Design: Figma Mastery Pro", author: "Don Norman", price: "$44.00", oldPrice: "$85.00", img: "https://images.unsplash.com/photo-1586717791821-3f44a563eb4c?w=400" },
                    { title: "Modern Graphic Design with Adobe Suite", author: "Paula Scher", price: "$30.00", oldPrice: "$50.00", img: "https://images.unsplash.com/photo-1572044162444-ad60f128bde2?w=400" },
                    { title: "3D Animation and Character Modeling", author: "Pixar Master", price: "$75.00", oldPrice: "$100.00", img: "https://images.unsplash.com/photo-1615751072497-5f5169febe17?w=400" },
                    { title: "Color Theory for Professional Illustrators", author: "Bob Ross", price: "$20.00", oldPrice: "$40.00", img: "https://images.unsplash.com/photo-1513364776144-60967b0f800f?w=400" },
                    { title: "Architectural Drawing and 3D Visualization", author: "Zaha Hadid", price: "$60.00", oldPrice: "$90.00", img: "https://images.unsplash.com/photo-1503387762-592dea58ef23?w=400" }
                ],
                language: [
                    { title: "Spanish for Beginners: Conversational", author: "Dora Explorer", price: "$10.00", oldPrice: "$20.00", img: "https://images.unsplash.com/photo-1543167664-c92138ff7304?w=400" },
                    { title: "Business English for International Students", author: "Mr. Oxford", price: "$36.00", oldPrice: "$55.00", img: "https://images.unsplash.com/photo-1523050338692-7b83b907e1ad?w=400" },
                    { title: "Japanese N5 Exam Preparation Course", author: "Yuki Tanaka", price: "$45.00", oldPrice: "$60.00", img: "https://images.unsplash.com/photo-1528127269322-539801943592?w=400" },
                    { title: "French Cuisine & Language Immersion", author: "Jean Pierre", price: "$30.00", oldPrice: "$45.00", img: "https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=400" },
                    { title: "Mandarin Chinese for Travelers", author: "Wei Chen", price: "$25.00", oldPrice: "$40.00", img: "https://images.unsplash.com/photo-1506765515384-028b60a970df?w=400" }
                ]
            };

            const displayArea = document.getElementById('courseDisplayArea');
            const selectors = document.querySelectorAll('.cat-list-item');

            function renderCourses(category) {
                const courses = coursesData[category];
                displayArea.innerHTML = courses.map(course => `
                    <div class="course-card-horizontal">
                        <div class="course-h-img">
                            <img src="${course.img}" alt="${course.title}">
                        </div>
                        <div class="course-h-content">
                            <div class="course-author">
                                <img src="https://i.pravatar.cc/150?u=${course.author}" alt="Author">
                                <span>By ${course.author}</span>
                            </div>
                            <h4 class="course-h-title">${course.title}</h4>
                            <div class="course-stats">
                                <span><i class="bi bi-star-fill text-warning"></i> (4.8k)</span>
                                <span><i class="bi bi-people-fill"></i> 12 Students</span>
                            </div>
                            <div class="course-price-row">
                                <a href="#" class="enroll-btn">Enroll Now <i class="bi bi-arrow-right"></i></a>
                                <div class="price-tag">
                                    <span class="old-price">${course.oldPrice}</span>
                                    <span>${course.price}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `).join('');
            }

            // Initialize with first category
            renderCourses('programming');

            selectors.forEach(selector => {
                selector.addEventListener('click', function() {
                    // Remove active from all
                    selectors.forEach(s => s.classList.remove('active'));
                    // Add to clicked
                    this.classList.add('active');
                    // Render
                    renderCourses(this.dataset.category);
                });
            });

            // --- Next Level Animation (Intersection Observer) ---
            const observerOptions = { threshold: 0.1 };
            const scrollObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.event-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                scrollObserver.observe(card);
            });

            const observerBlogOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        // Stop observing once it's visible to keep performance high
                        observer.unobserve(entry.target);
                    }
                });
            }, observerBlogOptions);

            document.querySelectorAll('.blog-card').forEach(card => {
                observer.observe(card);
            });
        </script>
    </body>
</html>