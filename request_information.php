<!DOCTYPE html>
<html>
<head>
  <title>Request Information :: Amber Lodging</title>
  
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,700' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="inc/validationEngine.jquery.css" type="text/css"/>

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
    <img
    srcset="img/banner_ri_1500.jpg 1500w,
            img/banner_ri_960.jpg 960w,
            img/banner_ri_480.jpg 480w"
    sizes="(min-width: 93.75em) 93.75em, 100vw"
    src='img/banner_ri_960.jpg' width="100%" 
    alt="Amber How We Work" />
  <h1 class="banner-text">Request Information</h1>

</div>

<section class="main">

  <article>

        <p>We&rsquo;ve piqued your interest. Now dig deeper for the details, we welcome it. Because that&rsquo;s when you&rsquo;ll really be impressed.</p>
        
        <h3>Information request:</h3>

<form id="formID" method="post" name="RequestInfo" action="">

<table class='resident-request'>
<tr>
  <td class='label'><label for="FirstName">First Name*:</label></td>
  <td><input class="validate[required] text-input" type='text' id='FirstName' name='FirstName' value=''></td>
</tr>
<tr>
  <td class='label'><label for="LastName">Last Name*:</label></td>
  <td><input class="validate[required] text-input" type='text' id='LastName' name='LastName' value=''></td>
</tr>
<tr>
  <td class='label'><label for="Company">Company:</label></td>
  <td><input type='text' id='Company' name='Company' value=''></td>
</tr>
<tr>
  <td class='label'><label for="Address">Address:</label></td>
  <td><input type='text' id='Address' name='Address' value=''></td>
</tr>
<tr>
  <td class='label'><label for="city">City:</label></td>
  <td><input type='text' id='city' name='city' value=''></td>
</tr>
<tr>
  <td class='label'><label for="state">State:</label></td>
  <td><input type='text' id='state' name='state' value=''></td>
</tr>
<tr>
  <td class='label'><label for="postalCode">Postal / Zip Code:</label></td>
  <td><input type='text' id='postalCode' name='postalCode' value=''></td>
</tr>
<tr>
  <td class='label'><label for="phone">Daytime Phone:</label></td>
  <td><input type='text' id='phone' name='phone' value=''></td>
</tr>
<tr>
  <td class='label'><label for="fax">Fax:</label></td>
  <td><input type='text' id='fax' name='fax' value=''></td>
</tr>
<tr>
  <td class='label'><label for="email">Email*:</label></td>
  <td><input class="validate[required,custom[email]]" type='text' id='email' value=''></td>
</tr>
<tr>
  <td class='label'><label for="comments">Comments:</label></td>
  <td><input type='text' id='comments' name='comments' value=''></td>
</tr>
</table>

<div class="center">
  <input  type="submit" name="Submit" value="Submit">
</div>
</form>

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