<!DOCTYPE html>
<html>
<head>
  <title>Current Resident Request :: Amber Lodging</title>
  
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
  <img src="img/banner_crr.png" width="100%"/>
  <h1 class="banner-text">Current Resident Request</h1>

</div>

<section class="main">

  <article>

        <h2>How can we help?</h2>

        <p>For maintenance or extension requests, departure confirmation or general questions, please provide the following information:</p>

<form id="formID" method="post" name="RequestInfo" action="">

<table class='resident-request'>
<tr>
  <td class='label'><label for="FirstName">First Name*:</label></td>
  <td><input class="validate[required] text-input" type='text' id='FirstName' name='FirstName' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="LastName">Last Name*:</label></td>
  <td><input class="validate[required] text-input" type='text' id='LastName' name='LastName' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="AptNo">Apartment Number:</label></td>
  <td><input type='text' id='AptNo' name='AptNo' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="PropertyName">Property Name:</label></td>
  <td><input type='text' id='PropertyName' name='PropertyName' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="phone">Daytime Phone:</label></td>
  <td><input type='text' id='phone' name='phone' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="email">Email*:</label></td>
  <td><input class="validate[required,custom[email]]" type='text' id='email' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="comments">Questions / Comments:</label></td>
  <td><input type='text' id='comments' name='comments' value='' size='40'></td>
</tr>
</table>

<div class="center">
  <input  type="submit" name="Submit" value="Submit">
</div>
</form>


        <p><strong>We&rsquo;ll review your email during office hours, Mon-Fri CST 7:00AM to 7:00PM</strong></p>

        <h3>Need Urgent Assistance?</h3>

        <p>If you&rsquo;re a current resident client in need of urgent assistance or care &#8211; please call our office at 512 452-6622 and follow the prompts for emergency care.</p>

        <p>If this is a police, fire or other emergency, please dial 911 for assistance.</p>
 
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