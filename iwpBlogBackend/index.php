<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">

  <title>Blog</title>
</head>

<body>
  
  <?php include(ROOT_PATH . "/app/includes/header.php");?>

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post Slider -->
    <div class="post-slider">
      <h1 class="slider-title">Trending Posts</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <div class="post">
          <img src="assets/images/whiteGold.jpg" alt="" class="slider-image" >
          <div class="post-info">
            <h3><a href="single.html">One day your life will flash before your eyes</a></h3>
            <i class="far fa-user"> <span>Apoorva Srivastava</span></i>
            &nbsp;
            <i class="far fa-calendar"> <span>Mar 8, 2019</span></i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/whiteGold.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h3><a href="single.html">One day your life will flash before your eyes</a></h3>
            <i class="far fa-user"> <span>Apoorva Srivastava</span></i>
            &nbsp;
            <i class="far fa-calendar"> <span>Mar 8, 2019</span></i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/whiteGold.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h3><a href="single.html">One day your life will flash before your eyes</a></h3>
            <i class="far fa-user"> <span>Apoorva Srivastava</span></i>
            &nbsp;
            <i class="far fa-calendar"> <span>Mar 8, 2019</span></i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/whiteGold.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h3><a href="single.html">One day your life will flash before your eyes</a></h3>
            <i class="far fa-user"> <span>Apoorva Srivastava</span></i>
            &nbsp;
            <i class="far fa-calendar"> <span>Mar 8, 2019</span></i>
          </div>
        </div>

        <div class="post">
          <img src="assets/images/whiteGold.jpg" alt="" class="slider-image">
          <div class="post-info">
            <h3><a href="single.html">One day your life will flash before your eyes</a></h3>
            <i class="far fa-user"> <span>Apoorva Srivastava</span></i>
            &nbsp;
            <i class="far fa-calendar"> <span>Mar 8, 2019</span></i>
          </div>
        </div>


      </div>

    </div>
    <!-- // Post Slider -->

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title">Recent Posts</h1>

        <div class="post clearfix">
          <img src="assets/images/whiteGold.jpg" alt="" class="post-image" usemap="#blogmap">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Apoorva Srivastava</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>

        <div class="post clearfix">
          <img src="assets/images/whiteGold.jpg" alt="" class="post-image" usemap="#blogmap">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Apoorva Srivastava</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="assets/images/whiteGold.jpg" alt="" class="post-image" usemap="#blogmap">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Apoorva Srivastava</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="assets/images/whiteGold.jpg" alt="" class="post-image" usemap="#blogmap">
          <div class="post-preview">
            <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
            <i class="far fa-user"> Apoorva Srivastava</i>
            &nbsp;
            <i class="far fa-calendar"> Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitationem optio possimus a inventore maxime laborum.
            </p>
            <a href="single.html" class="btn read-more">Read More</a>
          </div>
        </div>

      </div>

      <!-- usemap -->
      <map name="blogmap">
        <area shape="rect" coords="0,0,382,326" href="single.html" alt="blog">
      </map>

      <!-- // Main Content -->

      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>
            <li><a href="#">Poems</a></li>
            <li><a href="#">Quotes</a></li>
            <li><a href="#">Fiction</a></li>
            <li><a href="#">Biography</a></li>
            <li><a href="#">Motivation</a></li>
            <li><a href="#">Inspiration</a></li>
            <li><a href="#">Life Lessons</a></li>
          </ul>
        </div>

      </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <!-- footer -->
  <?php include("app/includes/footer.php");?>
  <!-- // footer -->


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/script.js"></script> 

</body>

</html>