<!DOCTYPE html>
<html>
<head>
  <title>Client Home :: Amber Lodging</title>
  

  <link rel="stylesheet" href="inc/bootstrap.min_new.css" type="text/css" media="screen">
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,700' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="inc/validationEngine.jquery.css" type="text/css"/>

</head>

<body>
<div class="title-bar alc">Amber Lodging Company</div>
<div class="title-bar client-name">Johnny Washington</div>

<div id="container">




<div class="banner client-home">

<h1 class="search-banner">We Hold Leases On 5 Continents.</h1>
<h2 class="search-banner">And if you want to book something in Antarctica, that makes 6.</h2>

<div class="search-bar">
<form>
<div class="row">
  <div class="col-md-2">
    <input type="text" name="Destination" placeholder="Destination" />
  </div>
  <div class="col-md-2">
    <input type="text" name="move_in" placeholder="Move In" />
  </div>
  <div class="col-md-2">
    <input type="text" name="move_out" placeholder="Move Out" />
  </div>
  <div class="col-md-2">
  <select id="destination" class="cd-select">
      <option value="-1" selected>1+ Bedrooms</option>
      <option value="1" class="icon-monkey">1+ Bedrooms</option>
      <option value="2" class="icon-bear">2+ Bedrooms</option>
      <option value="3" class="icon-squirrel">3+ Bedrooms</option>
      <option value="4" class="icon-elephant">Other</option>
  </select>
  </div>
  <div class="col-md-2">
  <select id="destination" class="cd-select">
      <option value="-1" selected>1 Guest</option>
      <option value="1" class="icon-monkey">Adult +/-</option>
      <option value="2" class="icon-bear">Children +/-</option>
      <option value="3" class="icon-squirrel">Pets +/-</option>
  </select>
  </div>
  <div class="col-md-2">
  <input type="button" value="Search" id="submit" class="search-button">
  </div>
</div>
</form>
</div>

</div>

<section class="main">

  <article>

<h1 class="xyz">Great Properties In Your Area</h1>
<h2 class="xyz">You want to stay in a castle? We've made that happen.</h2>

<div class="row">
  <div class="col-md-3 preview-tile">
    <img src="img/clients/room_0.jpg" />
    <div class="row">
      <div class="col-md-8 ">
        <strong>Brazos Place</strong><br />
        ID# 987654 <br />
        1 BR / 1 BA
      </div>
      <div class="col-md-4 pull-right">
        $198 USD <br />
        avg/night
      </div>
    </div>
  </div>

  <div class="col-md-3 preview-tile">
    <img src="img/clients/room_1.jpg" />
    <div class="row">
      <div class="col-md-8 ">
        <strong>AMLI Downtown</strong><br />
        ID# 987654 <br />
        2 BR / 1.5 BA
      </div>
      <div class="col-md-4 right">
        $198 USD <br />
        avg/night
      </div>
    </div>
  </div>

  <div class="col-md-3 preview-tile">
    <img src="img/clients/room_2.jpg" />
    <div class="row">
      <div class="col-md-8 ">
        <strong>The Ashton Austin</strong><br />
        ID# 987654 <br />
        1 BR / 1 BA
      </div>
      <div class="col-md-4 right">
        $198 USD <br />
        avg/night
      </div>
    </div>
  </div>

  <div class="col-md-3 preview-tile">
    <img src="img/clients/room_3.jpg" />
    <div class="row">
      <div class="col-md-8 ">
        <strong>Gables West Avenue</strong><br />
        ID# 987654<br />
        3 BR / 2 BA
      </div>
      <div class="col-md-4 right">
        $202 USD <br />
        avg/night
      </div>
    </div>
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