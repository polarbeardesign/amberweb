<!DOCTYPE html>
<html>
<head>
  <title>How We Work :: Amber Lodging</title>
<?php include('inc/head_includes.php') ?>

</head>

<body>
<div class="title-bar Login">LOG&nbsp;IN</div>
<?php include('inc/form_login.php') ?>

<div id="container">

<header>
  <?php include('inc/header.php') ?>
</header>

<nav>
  <?php include('inc/nav.php') ?>
</nav>

<div class="banner">
    <img
    srcset="img/banner_hww_1500.jpg 1500w,
            img/banner_hww_960.jpg 960w,
            img/banner_hww_480.jpg 480w"
    sizes="(min-width: 93.75em) 93.75em, 100vw"
    src='img/banner_hww_960.jpg' width="100%" 
    alt="Amber How We Work" />
  <h1 class="banner-text">How We Work</h1>

</div>

<section class="main container-fluid">

  <article>

        <p>It&rsquo;s quite simple, really. We do whatever it takes to get you the housing for one person to hundreds; local to global, one night to many years. And whatever obstacles that come up, we either have a system to get over them, or we invent one on the spot. You&rsquo;re focused on getting your people where they need to be. We&rsquo;re focused on making your life easy.</p>

        <h2 class="hi-light">Our Offerings:</h2>
        
        <h3 class="hi-light">Hotel</h3>

        <p>Hotel accommodations are available for both domestic and international visits. We&rsquo;ll identify the best hotel option based on your specifics and arrange direct billing. We&rsquo;ll streamline the whole process for your business travel, relocation and preview trips.</p>

        <h3 class="hi-light">Extended Stay</h3>

        <p>Some travel assignments fall in between a business trip and a corporate apartment. For guests who&rsquo;d prefer the support of a hotel combined with a little more breathing room, we&rsquo;ll arrange a suite-style hotel.</p>

        <h3 class="hi-light">Apartments / Flats / Serviced Apartments</h3>

        <p>Fully furnished apartments are available throughout the US and in many international locations. Clients benefit from cost savings, while employees enjoy the privacy and personal space. Accommodations are available for the entire family, including your four&#8210;legged friends. Many communities offer full amenities including fitness, pool, spas and more. </p>

        <h3 class="hi-light">Condos / Homes</h3>

        <p>Private rentals are available for both domestic and international stays offering the perfect solution for executive assignments or families who might require more space or specific locations to satisfy school requirements.</p>

        <h3 class="hi-light">Furniture Rental / Appliances</h3>

        <p>We offer furniture rental both domestically and internationally. We offer you the flexibility of choosing fully furnished or just the pieces that you need. Need a washer/dryer? Or maybe a bedroom set &#8211; we can help.</p>

        <h3 class="hi-light">Housewares Rental</h3> 
        
        <p>Throughout the US and many international locations, we can furnish your entire home&#8210;away&#8210;from home, including the kitchen, bedrooms and bathrooms.</p>

        <h3 class="hi-light">Even a temporary life is still a normal life.</h3>
        
        <p>Personal chefs, personal trainers, stylists and hairdressers are just the tip of the iceberg! Need a good vet, or the city&rsquo;s best caterer? We can connect your employees to a host of professionals to keep their busy lives on track while on assignment.</p>

        <h3 class="hi-light">Choose what you want, not what you don&rsquo;t.</h3> 
        
        <p>The whole enchilada or a la cart &#8211; you decide. Our services are offered on a menu basis. We know that employees have different requirements to be happy and we&rsquo;ve designed our programs to offer each piece from rental assistance to furniture rental individually.</p>
 
</article>

</section>

<footer>
  <?php include('inc/footer.php') ?>
</footer>

</div>

  <script type="text/javascript">

  $(document).ready(function() {
      $(".Login").click(function() {
        var h = $("body").height() + 'px';
        $("#black_overlay").css({"height":h,"visibility":"visible"});
        $(".login_form").css('display','block');
      });
      $(".close, #submit").click(function() {
      $(".login_form").css('display','none');
      $("#black_overlay").css("visibility","hidden");
    });
  });

  </script>

<?php include("inc/form_scripts.php") ?>

</body>

</html>