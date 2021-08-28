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
    <link rel="stylesheet" href="./css/hero-head.css" />
    <link rel="stylesheet" href="./css/project.css" />
  </head>
  <body>
    <!-- Header -->
    <?php include(__DIR__.'/component/header.php')?>
    <!-- //Header -->
    <!-- Hero head -->
    <?php include('./component/hero-head.php') ?>
    <!-- Hero head -->
    <!-- All projects -->
    <section class="all-projects mb-50">
      <div class="projects">
        <?php 
          $item_border = 5;
          $item_radius = 3;
          $item_no_zoom = true;
          $item_title = "Binh Dinh";
          $item_address = "Binh dinh province";
          for($i = 0;$i < 15;$i++){
              include('./component/project-item.php');
          } 
        ?>
      </div>
    </section>
    <!-- //All projects -->
    <!-- Footer -->
    <?php include(__DIR__.'/component/footer.php')?>
    <!-- //Footer -->
    <script src="./assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="./js/nav.js"></script>    
  </body>
</html>