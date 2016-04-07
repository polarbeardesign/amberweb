<!DOCTYPE html>
<html>
<head>
  <title>Current Resident Request :: Amber Lodging</title>
  
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
    srcset="img/banner_crr_1500.jpg 1500w,
            img/banner_crr_960.jpg 960w,
            img/banner_crr_480.jpg 480w"
    sizes="(min-width: 93.75em) 93.75em, 100vw"
    src='img/banner_crr_960.jpg' width="100%" 
    alt="Amber Contact Resident Request" />
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
  <td><input class="validate[required] text-input" type='text' id='FirstName' name='FirstName' value=''></td>
</tr>
<tr>
  <td class='label'><label for="LastName">Last Name*:</label></td>
  <td><input class="validate[required] text-input" type='text' id='LastName' name='LastName' value=''></td>
</tr>
<tr>
  <td class='label'><label for="AptNo">Apartment Number:</label></td>
  <td><input type='text' id='AptNo' name='AptNo' value=''></td>
</tr>
<tr>
  <td class='label'><label for="PropertyName">Property Name:</label></td>
  <td><input type='text' id='PropertyName' name='PropertyName' value=''></td>
</tr>
<tr>
  <td class='label'><label for="phone">Daytime Phone:</label></td>
  <td><input type='text' id='phone' name='phone' value=''></td>
</tr>
<tr>
  <td class='label'><label for="email">Email*:</label></td>
  <td><input class="validate[required,custom[email]]" type='text' id='email' value=''></td>
</tr>
<tr>
  <td class='label'><label for="comments">Questions / Comments:</label></td>
  <td><input type='text' id='comments' name='comments' value=''></td>
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


<?php include("inc/form_scripts.php") ?>

  <script>
      jQuery(document).ready(function(){
          // binds form submission and fields to the validation engine
          jQuery("#formID").validationEngine();
      });
  </script>

</body>

</html>