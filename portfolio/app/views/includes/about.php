<!-- ======= About Section ======= -->
<main id="main">

    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2><?php echo $data['firsttitleinside']->firsttitle ?></h2>
                <p><?php echo $data['firsttitleinside']->firstcontent ?></p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="img/profile-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3><?php echo $data['firsttitleinside']->secondtitle ?></h3>
                    <p class="font-italic">
                        <?php echo $data['firsttitleinside']->secondcontent ?>
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i>
                                    <strong>Birthday:</strong> <?php echo $data['firsttitleinside']->birthday ?></li>
                                <li><i class="icofont-rounded-right"></i>
                                    <strong>Website:</strong> <?php echo $data['firsttitleinside']->website ?></li>
                                <li><i class="icofont-rounded-right"></i>
                                    <strong>Phone:</strong> <?php echo $data['firsttitleinside']->phone ?></li>
                                <li><i class="icofont-rounded-right"></i>
                                    <strong>City:</strong><?php echo $data['firsttitleinside']->city ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i>
                                    <strong>Age:</strong> <?php echo $data['firsttitleinside']->age ?></li>
                                <li><i class="icofont-rounded-right"></i>
                                    <strong>Degree:</strong> <?php echo $data['firsttitleinside']->degree ?></li>
                                <li><i class="icofont-rounded-right"></i>
                                    <strong>PhEmailone:</strong> <?php echo $data['firsttitleinside']->emailone ?></li>
                                <li><i class="icofont-rounded-right"></i>
                                    <strong>Freelance:</strong> <?php echo $data['firsttitleinside']->freelance ?></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        <?php echo $data['firsttitleinside']->thirdcontent ?>
                    </p>
                </div>
            </div>
            <div>


            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">


            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2><?php echo $data['firsttitleinside']->thirdtitle ?></h2>
                        <p><?php echo $data['firsttitleinside']->fourthcontent ?></p>
                    </div>

                    <div class="row skills-content">

                        <div class="col-lg-6" data-aos="fade-up">
                            <?php foreach ($data['skills'] as $post): ?>
                            <div class="progress">

                                <span class="skill"><?php echo $post->skills_name; ?> <i class="val"><?php echo $post->skills_score; ?></i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $post->skills_score; ?>" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>

                            </div>

                            <?php endforeach; ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </section><!-- End Skills Section -->