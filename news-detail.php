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
    <link rel="stylesheet" href="./css/news.css" />
    <link rel="stylesheet" href="./css/news-detail.css" />
  </head>
  <body>
    <!-- Header -->
    <?php include(__DIR__.'/component/header.php')?>
    <!-- //Header -->
    <div class="head-logo"><a href="index.php"><img src="./assets/images/cubic_logo_dark_glow_2.png" alt="logo"></a></div>
    <!-- Bread-crum -->
    <div class="bread-crum mb-30">
      <div class="wrap-940">
        <div class="row">
          <a href="news.php" class="yellow-text">Cubic Architects</a> > <a href="news.php" class="yellow-text">News</a> > <span>Crowne Plaza Phu Quoc - Construction site</span>
        </div>
      </div>
    </div>
    <!-- //Bread-crum -->
    <!-- News detail -->
    <section class="news-detail mb-50">
      <div class="wrap-940">
        <div>
          <h1 class="mb-20">Crowne Plaza Phu Quoc - Construction site</h1>
          <div class="news-time mb-20"><span>12/06/2019</span> | by <span>Cubic</span></div>
          <div class="news-content">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis cupiditate, 
              optio placeat delectus excepturi ducimus nemo aut earum natus impedit sit ipsum 
              eos assumenda voluptatibus reprehenderit velit ipsam consequatur voluptates?
            </p>
          </div>
        </div>
        <div class="col-highlight">
          <h2 class="news-title mt-80" style="padding-left: 20px;">Highlight</h2>
          <div class="posts posts-column">
            <?php 
              for($i = 0; $i < 3;$i++){
                include('./component/news-item.php');
              }
            ?>
          </div>
        </div>
      </div>
    </section>
    <!-- //News detail -->
    <!-- Relative news -->
    <section class="relative-news mb-50">
      <div class="wrap-940">
      <div>
        <h2 class="news-title mt-80" style="padding-left: 20px;">Relative news</h2>
        <div class="posts posts-3">
              <?php
                for($i = 0; $i < 3;$i++){
                  include('./component/news-item.php');
                }
              ?>
        </div>
      </div>
      </div>
    </section>
    <!-- //Relative news -->
    <!-- Footer -->
    <?php include(__DIR__.'/component/footer.php')?>
    <!-- //Footer -->
    <script src="./assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="./js/nav.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    
  </body>
</html>