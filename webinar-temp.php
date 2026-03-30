<?php 
include_once ('elements/header.php');
?>

    <header class="page-header">
        <div class="webinar container text-center">
            <h1 class="display-3 fw-800 animate__animated animate__fadeIn section-title mb-4">
                <span id="typing-text"></span>
            </h1>
            <p class="lead opacity-75">
                Explore previously conducted webinars, learn from expert sessions, and revisit key market insights anytime.
            </p>
        </div>
    </header>

    <div class="webinar container py-5">

        <div class="events-grid">
            <?php
            $webinarArr = [
                [
                    'title' => '',
                    'type' => 'Upcoming',
                    'description' => '',
                    'date' => 'June 11, 2026',
                    'time' => '10:30 PM IST',
                    'topicLeft' => [
                        '',
                    ],
                    'topicRight' => [
                        ''
                    ]
                ],
            ];
            foreach( $webinarArr as $k => $val ){ ?>
                <!-- Event 1 -->
                <div class="event-card fade-up">
                    <span class="badge-live"><?=$val['type'] ?></span>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="event-title"><?=$val['title'] ?></div>
                            <div class="event-desc"><?=$val['description'] ?></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="course-list">
                                        <?php foreach( $val['topicLeft'] as $left ){ ?>
                                            <li>
                                                <i class="fa fa-chevron-right"></i>
                                                <?=$left ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="course-list">
                                        <?php foreach( $val['topicRight'] as $right ){ ?>
                                            <li>
                                                <i class="fa fa-chevron-right"></i>
                                                <?=$right ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn-join mt-3">Join Now</button>
                        </div>
                        <div class="col-md-4">
                            <div class="meta-box">
                                <div class="meta-item"><strong>Date: </strong><?=$val['date'] ?></div>
                                <div class="meta-item"><strong>Time: </strong><?=$val['time'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </div>
    
    <script>
        // typing effect
        const text = "Aired Events";
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