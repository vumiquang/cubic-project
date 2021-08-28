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
    <link rel="stylesheet" href="./css/hero-slider.css" />
    <link rel="stylesheet" href="./css/project.css" />
    <link rel="stylesheet" href="./css/quick-about.css" />
    <link rel="stylesheet" href="./assets/css/slick.css" />
  </head>
  <body>
    <!-- Header -->
    <?php include(__DIR__.'/component/header.php')?>
    <!-- //Header -->

    <!-- Slider -->
    <section class="slider">
      <div class="hero">
        <div class="hero-item">
          <img src="./assets/images/banner/img1.jpeg" alt="song long" />
          <a href="#">Dragon palace</a>
        </div>
        <div class="hero-item">
          <img src="./assets/images/banner/img2.jpeg" alt="song long" />
          <a href="#">Dragon palace</a>
        </div>
      </div>
      <img
        src="./assets/images/cubic_logo_white_green-p-500x285.png"
        alt="cubic logo"
        class="slider-img"
      />
    </section>
    <!-- //Slider -->
    <!-- News -->
    <section class="section-news">
      <div class="news">
        <div class="title"><h1>NEWS</h1></div>
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
      </div>
      <div class="center"><a href="news.php"><button class="btn-read-more">Read more</button></a></div>
    </section>
    <!-- //News -->
    <!-- Post -->
    <section class="section-project">
      <div class="projects">

        <?php 
        $item_title = "Quang Binh";
        $item_address = "Quang Binh province";
        for($i = 0;$i < 15;$i++){
          include('./component/project-item.php');
        } ?>
      </div>
    </section>
    <!-- //Post -->
    <!-- Quick About -->
    <section
      class="section-about"
      id="quick-about"
      style="
        background-image: linear-gradient(
            180deg,
            rgba(0, 0, 0, 0.2),
            rgba(0, 0, 0, 0.2)
          ),
          url('./assets/images/TAuqqD7ssaFtjZ3xA.jpg');
      "
    >
      <div class="row">
        <div class="about-main">
          <h3>
            <div>WE ARE</div>
            <div>CUBIC ARCHITECTS</div>
          </h3>
          <p>
            CUBIC is a dynamic and innovative Hanoi-based architecture firm,
            specialising in high-rise building. Since 2004, we have completed a
            wide range of projects, from large to small scale, that recognised
            by local clients and international partners. Led by three architects
            who have more than 18 years of experience, our portfolio includes
            office building, commercial building, residential building, school,
            hotel and private house.
          </p>
          <div class="btn-about-sub">
            <div><span><i class="fas fa-plus"></span></i>Subsidiary</div>
            <div><span><i class="fas fa-plus"></span></i>Work-area</div>
          </div>
        </div>
        <div class="about-sub">
          <div class="about-sub-title">Subsidiary</div>
          <div class="about-sub-item about-subsidiary ">
            <img src="./assets/images/ForBIM-Logo-p-500x492.png" alt="">
            <a href=""
            class="about-bim">
              <h6>ForBIM</h6>
              <p>The Building Information Modeling (BIM)
                have become a global trend. It helps to make more informed design decisions,
                build more efficiently and cost-effectively, and manage and maintain buildings. Therefore, ForBIM was established in 2016
                in order to provide professional and state-of-the-art BIM services, that able
                to meet high demands from design firms and contractors.</p>
              <div>For BIM Website</div>
            </a>
          </div>
          <div class="about-sub-title">Work-area</div>
          <div class="about-sub-item about-work-area">
            <div class="work-area">
              <div>Design</div>
              <div>Architectural design (Specialized in High-rise segment)</div>
            </div>
            <div class="work-area">
              <div>Design</div>
              <div>Urban planning</div>
            </div>
            <div class="work-area">
              <div>Design</div>
              <div>Structural design</div>
            </div>
            <div class="work-area">
              <div>Design</div>
              <div>Interior design</div>
            </div>
            <div class="work-area">
              <div>Design</div>
              <div>Landscape Design</div>
            </div>
            <div class="work-area">
              <div>Consult</div>
              <div>Invesment Consulting</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- //Quick About -->
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
          nextArrow: `<span class="slick-next"><i class="fas fa-chevron-right"></i></span>`,
          prevArrow: `<span class="slick-prev"><i class="fas fa-chevron-left"></i></span>`,
        });
      });
    </script>

    <!-- About script -->
    <script>
      const btnSub = document.querySelectorAll(".btn-about-sub div");
      const aboutSub = document.querySelectorAll(".about-sub > div.about-sub-item");
      btnSub.forEach((btn,index)=>{
        btn.onclick = ()=>{
          if(btn.classList.contains("active")){
            removeActive(btnSub);
            removeActive(aboutSub);
          }else{
            removeActive(btnSub);
            btn.classList.add("active");
            removeActive(aboutSub);
            aboutSub[index].classList.add("active");
          }
        }
      })

      function removeActive(rms){
        rms.forEach((rm)=>{
          rm.classList.remove("active");
        })
      }
    </script>
  </body>
</html>
