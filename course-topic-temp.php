<?php 
include_once ('elements/header.php');
?>

    <header class="page-header">
        <div class="container text-center">
            <h1 class="display-3 fw-800 animate__animated animate__fadeIn">
                <span style="color: var(--brand-red)">
                    
                </span>
            </h1>
            <p class="lead opacity-75">
                
            </p>
        </div>
    </header>

    <div class="container py-5">

        <?php
        $topicsArr = [
            [
                'topic' => '',
                'level' => 'Beginner',
                'description' => '',
                'topicLeft' => [
                    '',
                ],
                'topicRight' => [
                    ''
                ]
            ],
        ];
        foreach( $topicsArr as $k => $val ){ ?>
            <div class="col-12">
                <div class="course-card">
                    <span class="badge-level"><?=$val['level'] ?></span>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <img src="https://picsum.photos/400/200?<?=$k;?>" class="course-img">
                        </div>
                        <div class="col-md-8">
                            <h5 class="course-title">
                                <?=$val['topic'] ?>
                            </h5>
                            <p class="course-desc">
                                <?=$val['description'] ?>
                            </p>
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
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } ?>
       
    </div>
    
    <footer class="bg-secondary py-5 mt-5 border-top border-danger border-4">
        <div class="container text-center text-white py-4">
            <h2 class="fw-800 mb-3">Unlock <span style="color: var(--prinary-teal)">Elite</span> Access</h2>
            <p class="text-white small mx-auto mb-4" style="max-width: 500px;">Get full curriculum access, live trade webinars, and our private institutional sentiment dashboard.</p>
            <button class="btn btn-lg btn-danger rounded-pill px-5 fw-bold text-uppercase fs-7">Upgrade Now</button>
        </div>
    </footer>
<?php
include_once ('elements/footer.php');
?>