<?php
$client = "Johnny Washington";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Client Home :: Amber Lodging</title>
  

  <link rel="stylesheet" href="inc/bootstrap.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="inc/jquery-ui-1.11.4.custom/jquery-ui.min.css" type="text/css" media="screen">
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

</head>

<body>
<div class="title-bar alc">Amber Lodging Company</div>
<div class="title-bar client-name">
  <div class="user_dropdown_menu">
    <a onclick="myFunction()" class="droplink"><?php echo $client ?> <span class="caret"></span></a>
    <ul id="userDropdown" class="dropdown-content">
      <li><a href="./client_home.php">Search Properties</a></li>
      <li><a href="/">Amber Home</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </div>
</div>

<div id="container">

<div class="banner client-home">

<h1 class="search-banner">We Hold Leases On 5 Continents.</h1>
<h2 class="search-banner">And if you want to book something in Antarctica, that makes 6.</h2>
</div>
<div class="search-bar container-fluid">
<form action="search_results.php" name="search" id="search">
<div class="row">
  <div class="col-md-3">
    <div class=" input-group">
      <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
      <input type="text" class="form-control" id="destination" name="Destination" placeholder=" Destination or property name?" />
    </div>
  </div>
  <div class="col-md-2">
    <div class=" input-group">
      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
      <input type="text" class="form-control form_datetime" id="move_in" name="move_in" placeholder=" Move In?" />
    </div>
  </div>
  <div class="col-md-2">
    <div class=" input-group">
      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
      <input type="text" class="form-control form_datetime" id="move_out" name="move_out" placeholder=" Move Out?" />
    </div>
  </div>
  <div class="col-md-2">
    <div class=" input-group">
    <div class="input-group-addon"><i class="fa fa-home"></i></div>
  <select id="size" class="form-control">
      <option value="-1" disabled selected>1+ Bedrooms</option>
      <option value="1">1+ Bedrooms</option>
      <option value="2">2+ Bedrooms</option>
      <option value="3">3+ Bedrooms</option>
      <option value="4">Other</option>
  </select>
  </div>
  </div>
  <div class="col-md-2">
    <div class=" input-group">
    <div class="input-group-addon"><i class="fa fa-user"></i></div>
  <select id="guests" class="form-control">
      <option value="-1" disabled selected>1+ Guests</option>
      <option value="1">1+ Guests</option>
      <option value="2">2+ Guests</option>
      <option value="3">3+ Guests</option>
  </select>
  </div>
  </div>
  <div class="col-md-1">
  <input type="submit" value="Search" id="submit" class="btn btn-primary search-button">
  </div>
</div>
</form>
</div>

<section class="main">

  <article>

<h1 class="feature-area">Great Properties In Your Area</h1>
<h2 class="feature-area">You want to stay in a castle? We've made that happen.</h2>

<div class="container-fluid">

<div class="row feature-properties">
  <div class="col-md-3">
    <div class="row">
      <img src="img/clients/room_0.jpg" width="100%" />
    </div>
    <div class="row feature-details">
      <div class="col-md-7">
        <h1 class="feature-location">Brazos Place</h1>
        <div class="feature-id">ID# 987654</div>
        <div class="feature-size">1 BR / 1 BA</div>
      </div>
      <div class="col-md-5 text-right">
        <div class="location-price">$198 <a href="#" class="currency-denominator">USD</a></div>
        <div class="small-print">avg/night</div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
        <div class="row">
        <img src="img/clients/room_1.jpg" width="100%" />
    </div>
    <div class="row feature-details">
      <div class="col-md-7">
        <h1 class="feature-location">AMLI Downtown</h1>
        <div class="feature-id">ID# 987654</div>
        <div class="feature-size">2 BR / 1.5 BA</div>
      </div>
      <div class="col-md-5 text-right">
        <div class="location-price">$198 <a href="#" class="currency-denominator">USD</a></div>
        <div class="small-print">avg/night</div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="row">
        <img src="img/clients/room_2.jpg" width="100%" />
    </div>
    <div class="row feature-details" >
      <div class="col-md-7 ">
        <h1 class="feature-location">The Ashton Austin</h1>
        <div class="feature-id">ID# 987654</div>
        <div class="feature-size">1 BR / 1 BA</div>
      </div>
      <div class="col-md-5 text-right">
        <div class="location-price">$198 <a href="#" class="currency-denominator">USD</a></div>
        <div class="small-print">avg/night</div>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="row">
      <img src="img/clients/room_3.jpg" width="100%" />
    </div>
    <div class="row feature-details">
      <div class="col-md-8 ">
        <h1 class="feature-location">Gables West Avenue</h1>
        <div class="feature-id">ID# 987654</div>
        <div class="feature-size">3 BR / 2 BA</div>
      </div>
      <div class="col-md-4 text-right">
        <div class="location-price">$202 <a href="#" class="currency-denominator">USD</a></div>
        <div class="small-print">avg/night</div>
      </div>
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

</body>

<?php include 'inc/form_scripts.php' ?>
  
</html>