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

  <article class='hero'>
  <div class="single-item" >
    <div>
    <span class="show_detail_1" >

    <img
    srcset="img/slider_color_1500.jpg 1500w,
            img/slider_color_960.jpg 960w,
            img/slider_color_480.jpg 480w"
    sizes="(min-width: 93.75em) 93.75em, 100vw"
    src='img/slider_color_960.jpg' width="100%" 
    alt="Amber castle" />
    <div class='overlay-text'>
    <p class='main'>Who do you need to send?</p>
    <p class='main'>Where do they want to go?</p>
    <p class='main'>How long will they live there?</p>
    <p class='last'>What's their favorite color?</p>
    </div>
    </span>
     </div>

    <div>
    <span class="show_detail_2" ><img
    srcset="img/slider_castle_1500.jpg 1500w,
            img/slider_castle_960.jpg 960w,
            img/slider_castle_480.jpg 480w"
    sizes="(min-width: 93.75em) 93.75em, 100vw"
    src='img/slider_castle_960.jpg' width="100%" 
    alt="Amber castle" /></span>
    </div>    
    <div>
    <span class="show_detail_3" ><img 
    srcset="img/slider_tablet_1500.jpg 1500w,
            img/slider_tablet_960.jpg 960w,
            img/slider_tablet_480.jpg 480w"
    sizes="(min-width: 93.75em) 93.75em, 100vw"
    src='img/slider_tablet_960.jpg' width="100%" 
    alt="Amber above and beyond" />
    </div>
    <div>
    <span class="show_detail_4" ><img 
    srcset="img/slider_antarctica_1500.jpg 1500w,
            img/slider_antarctica_960.jpg 960w,
            img/slider_antarctica_480.jpg 480w"
    sizes="(min-width: 93.75em) 93.75em, 100vw"
    src='img/slider_antarctica_960.jpg' width="100%" 
    alt="Amber Leases" />
    </div>
    <div>
    <span class="show_detail_5" ><img 
    srcset="img/slider_human_1500.jpg 1500w,
            img/slider_human_960.jpg 960w,
            img/slider_human_480.jpg 480w"
    sizes="(min-width: 93.75em) 93.75em, 100vw"
    src='img/slider_human_960.jpg' width="100%" 
    alt="Amber 24 -7" />
    </div>
    </div>
  </article>

  <article>
<!-- Color -->

      <span class="details description" id="description_1">
        <p><strong>There&rsquo;s rarely such a thing as a typical corporate assignment.</strong> We&rsquo;re not the typical corporate housing company. We make stays happen for one night to years at a time. Every traveller gets a plan that fits their requirements. Every location comes with the services that assure a great stay&#8211;from housing to insurance to finding a good vet. We do what it takes, so that people can go where they need to do what it takes.</p>
      </span>

<!-- Castle -->

      <span class="details description" id="description_2">
        <p><strong>Home is where you need it to be.</strong> And sometimes a home isn&rsquo;t a traditional house. Sometimes a home needs to be a tree house in Pennsylvania or a house boat in Atlanta or a villa in the Italian wine country. Sometimes it has to be a remote cabin in the woods, a National Park Ranger helped us find the perfect place. And yes if your home has to be a castle, we&rsquo;ve done that too, in England, Italy and Scotland.</p>
      </span>


<!-- Above and Beyond [tablet] -->

      <span class="details description" id="description_3">
        <p><strong>Whether it&rsquo;s domestic or global, travel and housing can come with complicated, unexpected problems.</strong> And if we haven&rsquo;t already found a solution, we&rsquo;ll invent a new one. Everything from developing global rental insurance at no extra cost to our clients, or holding leases on five continents. We even offer pre-arrival inspection with photos to ensure compliance with your guidelines. Basically, we fix problems.</p>
      </span>


<!-- Leases -->

      <span class="details description" id="description_4">
        <p><strong>Let&rsquo;s say you&rsquo;re trying to sign a lease in some country on the other side of the world.</strong> But by the time you sign a lease in your US office it might already be lost to someone competing for the location. We have a proprietary, fluid system that allows us to vet, sign and fund the lease for our clients, all over the world.</p>
      </span>

<!-- 24 / 7 | Human -->

      <span class="details description" id="description_5">
        <p><strong>What good is 24-hour support unless you&rsquo;re talking to a live, qualified, helpful member of our team?</strong> At AMBER Lodging Co. we understand that emergencies can occur at any time and that&rsquo;s why our guests calls for emergency help are answered live 24/7 by a trained member of our ops team empowered to help. We&rsquo;ll be there when you need us.</p>
      </span>
  </article>


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
    $(".show_detail_1").click(function () {
      $(description_1).toggle(duration = 10);
    });
  });
  $(document).ready(function() {
    $(".show_detail_2").click(function () {
      $(description_2).toggle(duration = 10);
    });
  });
  $(document).ready(function() {
    $(".show_detail_3").click(function () {
      $(description_3).toggle(duration = 10);
    });
  });
  $(document).ready(function() {
    $(".show_detail_4").click(function () {
      $(description_4).toggle(duration = 10);
    });
  });
  $(document).ready(function() {
    $(".show_detail_5").click(function () {
      $(description_5).toggle(duration = 10);
    });
  });
  </script>

</body>

</html>