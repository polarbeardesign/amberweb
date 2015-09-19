<!DOCTYPE html>
<html>
<head>
  <title>Amber Lodging</title>
  
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="inc/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="inc/slick/slick-theme.css"/>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,700' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">



</head>

<body>

<div id="container">

<header>
  <?php include('inc/header.php') ?>
</header>

<nav>
  <?php include('inc/nav.php') ?>
</nav>

<section class="main">

  <article>
  <div class="single-item" >
    <div>
     <img src='img/slider_color.png' width="100%"/>
     </div>
    <div>
     <img src='img/slider_castle.png' width="100%"/>
    </div>    
    <div>
     <img src='img/slider_tablet.png' width="100%"/>
    </div>
    <div>
    <img src='img/slider_antarctica.png' width="100%"/>
    </div>
    <div>
     <img src='img/slider_human.png' width="100%"/>
    </div>
    </div>
  </article>

  <article style="position: relative;">
    <div class="row">
      <div class="content-cell-wide">
        <a href='how_we_work.php'><img src="img/hww_585_390.png" width="100%" alt="How we work" /></a>
       </div>
      <div class="content-cell">
        <a href='request_information.php'><img src="img/ri_365_390.png" width="100%" alt="Request information" /></a>
      </div>
    </div>
    <div class="row">
      <div class="content-cell">
        <a href='about_amber_lodging.php'><img src="img/aa_365_390.png" width="100%" alt="About Amber" /></a>
      </div>
      <div class="content-cell-wide">
        <a href='current_resident_request.php'><img src="img/cr_585_390.png" width="100%" alt="Current resident request" /></a>
      </div>
    </div>
  </article>

</section>

<footer>
  <?php include('inc/footer.php') ?>
</footer>

</div>

<script type="text/javascript" src="inc/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="inc/slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.single-item').slick({
        swipe: true,
        arrows: false,
        dots: true
      });
    });
  </script>

  <script type="text/javascript" language="javascript">

  $(document).ready(function() {
    $(".show_menu").click(function () {
      $(this).siblings($(this)).toggle();
    });
  });

  $(document).ready(function() {
    $(".show_detail").click(function () {
      $(this).siblings($(this)).toggle(duration = 10);
    });
//    $(".show_detail").mouseleave(function () {
//      $(this).siblings($(this)).toggle(duration = 10);
//    });
  });

  </script>

</body>

</html>