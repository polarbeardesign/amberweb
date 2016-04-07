<!DOCTYPE html>
<html>
<head>
  <title>Contact Us :: Amber Lodging</title>
  
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

<?php include("inc/form_scripts.php") ?>

</body>

</html>