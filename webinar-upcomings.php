<?php 
include_once ('elements/header.php');
?>

    <header class="page-header">
        <div class="webinar container text-center">
            <h1 class="display-3 fw-800 animate__animated animate__fadeIn section-title mb-4">
                <span id="typing-text"></span>
            </h1>
            <p class="lead opacity-75">
                
            </p>
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