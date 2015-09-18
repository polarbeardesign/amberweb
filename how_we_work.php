<!DOCTYPE html>
<html>
<head>
  <title></title>
  
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">

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

<div class="banner">
  <img src="img/banner_hww.png" width="100%"/>
</div>

<section class="main">



  <article>

        <p><span class="large">It&rsquo;s quite simple, really.</span> We do whatever it takes to get you the housing for one person to hundreds; local to global, one night to many years. And whatever obstacles that come up, we either have a system to get over them, or we invent one on the spot. You&rsquo;re only interested in getting your people where they need to be. We&rsquo;re only interested in making your life easy.</p>

        <p>Hotel: <span class="small">Hotel accommodations are available for both domestic and international visits. We&rsquo;ll identify the best hotel option based on your specifics and arrange direct billing. We&rsquo;ll streamline the whole process for your business travel and preview trips.</span></p>

        <p>Extended Stay: <span class="small">Some travel assignments fall in between a business trip and a corporate apartment. For guests who&rsquo;d prefer the support of a hotel combined with a little more breathing room, we&rsquo;ll arrange a suite-style hotel.</span></p>

        <p>Apartments: <span class="small">Fully furnished corporate apartments are available throughout the US and in many international locations. Clients benefit from cost savings, while employees enjoy the privacy and personal space. Accommodations are available for the entire family, including your four-legged friends. Many communities offer full amenities including fitness, pool, spas and more.</span></p>

        <p>Condos/Homes: <span class="small">Private rentals are available for both domestic and international stays offering the perfect solution for executive assignments or families who might require more space or specific locations to satisfy school requirements. The typical lease terms begin at 6 months.</span></p>

        <p>Furniture Rental/Appliances: <span class="small">We offer furniture rental both domestically and internationally. We offer you the flexibility of choosing fully furnished or just the pieces that you need. Need a washer/dryer? Or maybe a bedroom set &#8211; we can help. Lease terms vary by location.</span></p>

        <p>Housewares Rental: <span class="small">Throughout the US and many international locations, we can furnish your entire home-away-from home, including the kitchen, bedrooms and bathrooms. The lease terms vary by location.</span></p>

        <p>Even a temporary life is still a normal life. <span class="small">Personal chefs, personal trainers, stylists and hairdressers are just the tip of the iceberg! Need a good vet, or the city&rsquo;s best caterer? We can connect your employees to a host of professionals to keep their busy lives on track while on assignment.</span></p>

        <p>Choose what you want, not what you don&rsquo;t. <span class="small">The whole enchilada or a la cart &#8211; you decide. Our services are offered on a menu basis. We know that employees have different requirements to be happy and we&rsquo;ve designed our programs to offer each piece from rental assistance to furniture rental individually</span>.</p>
        </span>
 
</article>

</section>

<footer>
  <?php include('inc/footer.php') ?>
</footer>

</div>
<div id="page-cover"></div>

<script type="text/javascript" src="inc/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="inc/slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        swipe: true,
        arrows: true
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