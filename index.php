<!DOCTYPE html>
<html>
<head>
  <title></title>
  
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <script  type="text/javascript" src="inc/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="inc/jquery.tongue.min.js"></script>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

	<script type="text/javascript" language="javascript">

	$(document).ready(function() {
		$(".show_menu").click(function () {
			$(this).siblings($(this)).toggle();
		});
	});

	$(document).ready(function() {
		$(".show_detail").click(function () {
			$(this).siblings($(this)).toggle( "slow" );
		});
	});

	$('#tongue').tongue({
		'position'      : 'bottom',
		'tongue_content': '.tongue-content',
		'start_speed'   : 500,
		'end_speed'     : 400
	});

	</script>

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
  <article>
    <div id="tongue"><img src='img/slider_antarctica.png' width="100%"/>
			<div class="tongue-content">
				<strong>Let's say you're trying to sign a lease in some country on the other side of the world.</strong>
				But by the time you sign the lease in the US office it would already be lost to someone 
				competing for that location. But we have a proprietary, fluid system that allows us to
				vet, sign and fund the lease for our clients, all over the world.
			</div>
		</div>
		<article>
    <div class="row">
			<div class="content-cell-wide">
				<img src="img/hww_1625_1083.png" width="100%" alt="How we work" />
			</div>
			<div class="content-cell">
				<img src="img/ri_1011_1083.png" width="100%" alt="Request information" />
			</div>
    </div>
    <div class="row">
			<div class="content-cell">
				<img src="img/aa_1020_1085.png" width="100%" alt="About Amber" />
			</div>
			<div class="content-cell-wide">
				<img src="img/cr_1614_1082.png" width="100%" alt="Current resident request" />
			</div>
    </div>

</section>

<footer>
  <?php include('inc/footer.php') ?>
</footer>

</div>

</body>

</html>