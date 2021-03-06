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
  <!--#include file="inc/header.asp"-->
</header>

<nav>
  <!--#include file="inc/nav.asp"-->
</nav>

<section class="main">

  <article>
  <div class="single-item" >
    <div>
    <img
    srcset="img/slider_color_1500.jpg 1500w,
            img/slider_color_960.jpg 960w,
            img/slider_color_480.jpg 480w"
    src='img/slider_color_960.jpg' width="100%" 
    alt="Amber favorite color" />
     </div>
    <div>
    <img
    srcset="img/slider_castle_1500.jpg 1500w,
            img/slider_castle_960.jpg 960w,
            img/slider_castle_480.jpg 480w"
    src='img/slider_castle_960.jpg' width="100%" 
    alt="Amber castle" />
    </div>    
    <div>
    <img 
    srcset="img/slider_tablet_1500.jpg 1500w,
            img/slider_tablet_960.jpg 960w,
            img/slider_tablet_480.jpg 480w"
    src='img/slider_tablet_960.jpg' width="100%" 
    alt="Amber above and beyond" />
    </div>
    <div>
    <img 
    srcset="img/slider_antarctica_1500.jpg 1500w,
            img/slider_antarctica_960.jpg 960w,
            img/slider_antarctica_480.jpg 480w"
    src='img/slider_antarctica_960.jpg' width="100%" 
    alt="Amber Leases" />
    </div>
    <div>
    <img 
    srcset="img/slider_human_1500.jpg 1500w,
            img/slider_human_960.jpg 960w,
            img/slider_human_480.jpg 480w"
    src='img/slider_human_960.jpg' width="100%" 
    alt="Amber 24 -7" />
    </div>
    </div>
  </article>

  <article style="position: relative;">
    <div class="row">
      <div class="content-cell-wide">
        <a href='how_we_work.asp'><img src="img/button_hww_585_390.jpg" width="100%" alt="How we work" /></a>
       </div>
      <div class="content-cell">
        <a href='request_information.asp'><img src="img/button_ri_365_390.jpg" width="100%" alt="Request information" /></a>
      </div>
    </div>
    <div class="row">
      <div class="content-cell">
        <a href='about_amber_lodging.asp'><img src="img/button_aa_365_390.jpg" width="100%" alt="About Amber" /></a>
      </div>
      <div class="content-cell-wide">
        <a href='current_resident_request.asp'><img src="img/button_cr_585_390.jpg" width="100%" alt="Current resident request" /></a>
      </div>
    </div>
  </article>

</section>

<footer>
  <!--#include file="inc/footer.asp"-->
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
  });

  </script>

</body>

</html>