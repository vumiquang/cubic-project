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
    <link rel="stylesheet" href="./css/hero-head.css" />
  </head>
  <body>
    <!-- Header -->
    <?php include(__DIR__.'/component/header.php')?>
    <!-- //Header -->
    <!-- Hero head -->
    <?php $hero_title = "News";include('./component/hero-head.php') ?>
    <!-- Hero head -->
    <!-- All News -->
    <section class="all-news mb-50 mt-30">
      <div class="posts">
        <?php 
        //  $news_link = 
        //  $news_img=
        //  $news_type=
        //  $news_desc=
          for($i = 0;$i < 15;$i++){
              include('./component/news-item.php');
          } 
        ?>
      </div>
    </section>
    <!-- //All News -->
    <!-- Footer -->
    <?php include(__DIR__.'/component/footer.php')?>
    <!-- //Footer -->
    <script src="./assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="./js/nav.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    
  </body>
</html>