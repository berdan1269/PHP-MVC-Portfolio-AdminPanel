<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?php echo URLROOT; ?>/public/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Berdan Özbeytemür</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="<?php echo $data['settings']->facebook ?> " target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="<?php echo $data['settings']->instagram ?>" target="_blank" class="instagram"><i target="_blank" class="bx bxl-instagram"></i></a>
          <a href="<?php echo $data['settings']->linkedin ?>"  target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span> <?php echo $data['navbartitles']->firsttitle ?> </span></a></li>
          <li><a href="#about"><i  class="bx bx-user"></i> <span> <?php echo $data['navbartitles']->secondtitle ?> </span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span> <?php echo $data['navbartitles']->thirdtitle ?></span></a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> <?php echo $data['navbartitles']->fourthtitle ?></a></li>

        </ul>

        <ul>
          <li> </a><i class="bx bx-file-blank"></i> <span> <?php echo $data['navbartitles']->fifthtitle ?></span></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->