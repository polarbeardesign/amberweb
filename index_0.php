<!DOCTYPE html>
<html>
<head>
  <title>Amber Lodging</title>
  <link href="inc/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">
<!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,700' rel='stylesheet' type='text/css'>
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



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


<!-- Carousel
================================================== -->
<article>
<div id="myCarousel" class="carousel slide" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item carousel-image-one active ">
      
      <div class="container " >
        <div class="carousel-caption carousel-caption-one dark" >

    <p class='main'>Who do you need to send?</p>
    <p class='main'>Where do they want to go?</p>
    <p class='main'>How long will they live there?</p>
    <p class='last'>What's their favorite color?</p>

          </div>
      </div>
    </div>

    <div class="item carousel-image-two">

      <div class="container">
        <div class="carousel-caption carousel-caption-two dark">

    <p class='main'>You want to stay<br />in a castle?</p>
    <p class='last'>We've made that happen.</p>

        </div>
      </div>
    </div>

    <div class="item carousel-image-three">

      <div class="container">
        <div class="carousel-caption carousel-caption-three">
          <p class='last'>Because that's where<br />you're usually going.</p>
        </div>
      </div>
    </div>

    <div class="item carousel-image-four">

      <div class="container">
        <div class="carousel-caption carousel-caption-four">
          
    <p class='main'>We hold leases<br />on 5 continents.</p>
    <p class='last'>And if you want to book something<br />in Antartica, that makes it 6.</p>
          
        </div>
      </div>
    </div>

    <div class="item carousel-image-five">

      <div class="container">
        <div class="carousel-caption carousel-caption-five">

    <p class='main'>Real humans<br />call us 24/7.</p>
    <p class='last'>So it makes sense<br />real humans<br />answer 24/7.</p>

        </div>
      </div>
    </div>


  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <i class="glyphicon glyphicon-chevron-left"></i>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="glyphicon glyphicon-chevron-right"></i>
  </a>  
</div>
</article>
<!-- /.carousel -->


  <article class='center' style="position: relative;">
    <div class="row">
      <div class="content-cell-wide">
        <a href='how_we_work.php'><img src="img/button_hww_585_390.jpg" width="100%" alt="How we work" /></a>
       </div>
      <div class="content-cell">
        <a href='request_information.php'><img src="img/button_ri_365_390.jpg" width="100%" alt="Request information" /></a>
      </div>
      <div class="content-cell">
        <a href='about_amber_lodging.php'><img src="img/button_aa_365_390.jpg" width="100%" alt="About Amber" /></a>
      </div>
      <div class="content-cell-wide">
        <a href='current_resident_request.php'><img src="img/button_cr_585_390.jpg" width="100%" alt="Current resident request" /></a>
      </div>
    </div>
  </article>

</section>

<footer>
  <?php include('inc/footer.php') ?>
</footer>

</div>


<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

</body>

</html>