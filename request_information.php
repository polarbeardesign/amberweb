<!DOCTYPE html>
<html>
<head>
  <title>Request Information :: Amber Lodging</title>
  
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
    srcset="img/banner_ri_1500.jpg 1500w,
            img/banner_ri_960.jpg 960w,
            img/banner_ri_480.jpg 480w"
    sizes="(min-width: 93.75em) 93.75em, 100vw"
    src='img/banner_ri_960.jpg' width="100%" 
    alt="Amber How We Work" />
  <h1 class="banner-text">Request Information</h1>

</div>

<section class="main container-fluid">

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
  <input class="btn btn-default" type="submit" value="Submit">
</div>
</form>

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