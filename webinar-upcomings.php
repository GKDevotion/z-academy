<?php 
include_once ('elements/header.php');
?>

    <header class="container-fluid d-flex align-items-center justify-content-center text-center bg-light hero-section">
        <div>
            <h1 class="display-3 fw-800 animate__animated animate__fadeInDown">Webinar <span style="color: var(--primary-teal);">Upcoming</span> </h1>
            <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">Join our upcoming live webinar to learn powerful trading strategies from experts.</p>
            <div class="open-account-btn account-type-btn animate__animated animate__zoomIn animate__delay-1s">
                <button class="rounded-pill d-none">ZERO TO HERO</button>
            </div>
        </div>
    </header>

    <div class="webinar container py-5">

        <div class="events-grid">

            <!-- LOOP START (10 items) -->
            
            <!-- Event 1 -->
            <div class="event-card fade-up">
                <span class="badge-live">Upcoming</span>
                <div class="row">
                    <div class="col-md-8">
                        <div class="event-title">Smart Trading with CopyTrading</div>
                        <div class="event-desc">Learn advanced copy trading strategies and automation techniques.</div>
                        <button class="btn-join mt-3">Join Now</button>
                    </div>
                    <div class="col-md-4">
                        <div class="meta-box">
                            <div class="meta-item"><strong>Date</strong>June 11, 2026</div>
                            <div class="meta-item"><strong>Time</strong>10:30 PM</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Duplicate (2–10) -->
            
            <script>
                const container = document.querySelector('.events-grid');
                for(let i=2;i<=10;i++){
                    container.innerHTML += `
                    <div class="event-card fade-up">
                        <span class="badge-live">Upcoming</span>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="event-title">Market Webinar #${i}</div>
                                <div class="event-desc">Explore trading strategies, global markets, and live insights.</div>
                                <button class="btn-join mt-3">Join Now</button>
                            </div>
                            <div class="col-md-4">
                                <div class="meta-box">
                                    <div class="meta-item"><strong>Date</strong>June ${10+i}, 2026</div>
                                    <div class="meta-item"><strong>Time</strong>${6+i}:00 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                }
            </script>
        </div>
    </div>
    
    <script>
        // typing effect
        const text = "Upcoming Market Events";
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