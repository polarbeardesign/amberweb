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
  <!--#include file="inc/header.asp"-->
</header>

<nav>
  <!--#include file="inc/nav.asp"-->
</nav>

<div class="banner">
  <img src="img/banner_ri.png" width="100%"/>
  <h1 class="banner-text">Request Information</h1>

</div>

<section class="main">

  <article>

        <p>We&rsquo;ve piqued your interest. Now dig deeper for the details, we welcome it. Because that&rsquo;s when you&rsquo;ll really be impressed.</p>
        
        <h3>Information request:</h3>

<form id="formID" method="post" name="info" action="request_information_recvd.asp">

<table class='resident-request'>
<tr>
  <td class='label'><label for="UserFirstName">First Name*:</label></td>
  <td><input class="validate[required] text-input" type='text' id='UserFirstName' name='UserFirstName' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="UserLastName">Last Name*:</label></td>
  <td><input class="validate[required] text-input" type='text' id='UserLastName' name='UserLastName' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="UserCompany">Company:</label></td>
  <td><input type='text' id='UserCompany' name='UserCompany' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="UserAddress">Address:</label></td>
  <td><input type='text' id='UserAddress' name='UserAddress' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="UserCity">City:</label></td>
  <td><input type='text' id='UserCity' name='UserCity' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="UserState">State:</label></td>
  <td><input type='text' id='UserState' name='UserState' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="UserZip">Postal / Zip Code:</label></td>
  <td><input type='text' id='UserZip' name='UserZip' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="UserPhone">Daytime Phone:</label></td>
  <td><input type='text' id='UserPhone' name='UserPhone' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="UserFax">Fax:</label></td>
  <td><input type='text' id='UserFax' name='UserFax' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="UserEmail">Email*:</label></td>
  <td><input class="validate[required,custom[email]]" type='text' id='UserEmail' name='UserEmail' value='' size='40'></td>
</tr>
<tr>
  <td class='label'><label for="Userinfocomments">Comments:</label></td>
  <td><input type='text' id='Userinfocomments' name='Userinfocomments' value='' size='40'></td>
</tr>
</table>

<div class="center">
  <input  type="submit" name="Submit" value="Submit">
</div>
</form>

</article>

</section>

<footer>
  <!--#include file="inc/footer.asp"-->
</footer>

</div>

<script type="text/javascript" src="inc/jquery-1.11.3.min.js"></script>

<script src="inc/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="inc/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

	<script>
			jQuery(document).ready(function(){
					// binds form submission and fields to the validation engine
					jQuery("#formID").validationEngine();
			});
	</script>

  <script type="text/javascript" language="javascript">

  $(document).ready(function() {
    $(".show_menu").click(function () {
      $(this).siblings($(this)).toggle();
    });
  });

  </script>

</body>

</html>