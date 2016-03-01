<!DOCTYPE html>
<html>
<head>
  <title>Contact Us :: Amber Lodging</title>
  
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,700' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="inc/validationEngine.jquery.css" type="text/css"/>

</head>

<body>
<div class="title-bar Login">LOG&nbsp;IN</div>
<div id="container">

<header>
  <?php include('inc/header.php') ?>
</header>

<nav>
  <?php include('inc/nav.php') ?>
</nav>

<div class="banner">
    <img
    srcset="img/banner_cu_1500.jpg 1500w,
            img/banner_cu_960.jpg 960w,
            img/banner_cu_480.jpg 480w"
    sizes="(min-width: 93.75em) 93.75em, 100vw"
    src='img/banner_cu_960.jpg' width="100%" 
    alt="Contact Amber" />
  <h1 class="banner-text">Contact Us</h1>

</div>

<section class="main">

  <article>

  <table>
    <tr>
      <td class='label'><h3>Address:</h3></td>
      <td>2905 San Gabriel Ste 214 Austin, TX 78705</td>
    </tr>
    <tr>
      <td class='label'><h3>Email:</h3></td>
      <td><a href="mailto:mail@amberlodging.com">mail@amberlodging.com</a></td>
    </tr>
    <tr>
      <td class='label'><h3>Phone:</h3></td>
      <td>512.452.6622 &#8226; 800.981.8234 </td>
    </tr>
    <tr>
      <td class='label'><h3>Fax:</h3></td>
      <td>512.236.9009 </td>
    </tr>
  </table>
 
  </article>

</section>

<footer>
  <?php include('inc/footer.php') ?>
</footer>

</div>

<script type="text/javascript" src="inc/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="inc/slick/slick.min.js"></script>

<script src="inc/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="inc/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

	<script>
			jQuery(document).ready(function(){
					// binds form submission and fields to the validation engine
					jQuery("#formID").validationEngine();
			});
	</script>

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

</body>

</html>