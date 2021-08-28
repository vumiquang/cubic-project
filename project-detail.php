<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link
      rel="shortcut icon"
      href="./assets/images/cubicfavicon.png"
      type="image/x-icon"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=vietnamese"
      rel="stylesheet"
    />
    <script src="./assets/js/font-awesome.min.js"></script>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/project-detail.css" />
    <link rel="stylesheet" href="./css/hero-slider.css" />
    <!-- <link rel="stylesheet" href="./assets/css/slick-theme.css" /> -->
    <link rel="stylesheet" href="./css/project.css" />
    <link rel="stylesheet" href="./assets/css/slick.css" />
  </head>
  <body>
    <!-- Header -->
    <?php include(__DIR__.'/component/header.php')?>
    <!-- //Header -->
    <!-- Logo head -->
    <div class="head-logo"><a href="index.php"><img src="./assets/images/cubic_logo_dark_glow_2.png" alt="logo"></a></div>
    <!-- //Logo head -->
    <section class="show-project-name">
        <h2 class="title">Project</h2>
        <div class="address">Binh Duong Province</div>
    </section>
    <!-- Slider -->
    <section class="slider slider-product mb-50">
      <div class="hero">
        <div class="hero-item">
          <img src="./assets/images/banner/img1.jpeg" alt="song long" />
        </div>
        <div class="hero-item">
          <img src="./assets/images/banner/img2.jpeg" alt="song long" />
        </div>
        <div class="hero-item">
          <img src="./assets/images/banner/img3.jpeg" alt="song long" />
        </div>
      </div>
    </section>
    <!-- //Slider -->
    <!-- Detail -->
    <section class="project-info mb-50">
        <div class="wrap-959">
            <div class="info-title"><div><span>></span>Description</div></div>
            <p class="info-desc mb-30">>>>Updating...</p>
            <div class="info-title"><div><span>></span>Detail</div></div>
            <ul class="info-detail">
                <li><span class="detail-title">Address</span><div class="detail-content">Binh Duong province</div></li>
                <li><span class="detail-title">Type</span><div class="detail-content high-light"><a href="#">Mix used</a><a href="#">Residential</a></div></li>
                <li><span class="detail-title">Type</span><div class="detail-content high-light">Residential</div></li>
            </ul>
        </div>
    </section>
    <!-- //Detail -->
    <!-- Gallery -->
    <section class="gallery mb-50">
        <h2 class="project-title">Gallery</h2>
        <div class="projects">
        <?php 
            $item_border = 5;
            $item_radius = 3;
            $item_info = false;
            $no_filter = true;
            for($i = 0;$i < 3;$i++){
                include('./component/project-item.php');
            } 
            ?>
        </div>
    </section>
    <!-- //Gallery -->
    <!-- Relative projects -->
    <section class="relative-project mb-80">
        <h2 class="project-title">Relative Projects</h2>
        <div class="projects">
        <?php 
            $item_border = 5;
            $item_zoom = false;
            $item_filter =true;
            $item_info = true;
            $item_title = "binh Dinh";
            $item_address = "Binh DInh Province";
            for($i = 0;$i < 5;$i++){
                include('./component/project-item.php');
            } 
            ?>
        </div>
    </section>
    <!-- //Relative projects -->
    <!-- Footer -->
    <?php include(__DIR__.'/component/footer.php')?>
    <!-- //Footer -->
    <script src="./assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="./js/nav.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Slider script -->
    <script>
      $(document).ready(function () {
        $(".hero").slick({
          autoplay: true,
          autoplaySpeed: 3000,
          centerMode: true,
          centerPadding: '400px',
          centerMode:true,
          slidesToShow: 1,
          slidesToScroll: 1,
          nextArrow: `<span class="slick-next"><i class="fas fa-chevron-right"></i></span>`,
          prevArrow: `<span class="slick-prev"><i class="fas fa-chevron-left"></i></span>`,
        });
      });
    </script>
  </body>
</html>
