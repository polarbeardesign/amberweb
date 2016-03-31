<?php
$client = "Johnny Washington";

$search_parameters = array('city' => "Austin", 'state' => "TX", 'move_in' => "Mar 01", 'move_out' => "Mar 31");

$result_properties = array(0 => array('property_thumb' => "property_987654_thumb.jpg", 
                                      'property_name' => "Gables West Avenue", 
                                      'neighborhood' => "Downtown", 
                                      'id' => "987654", 
                                      'size' => "1BD / 1BA", 
                                      'property_address' => "300 West Avenue", 
                                      'property_city' => "Austin", 
                                      'property_state' => "TX", 
                                      'property_postal_code' => "78701", 
                                      'property_country_code' => "US",
                                      'daily_price' => "260",
                                      'min_stay' => "30"),
                           1 => array('property_thumb' => "property_987654_thumb.jpg", 
                                      'property_name' => "Green Pastures", 
                                      'neighborhood' => "Downtown", 
                                      'id' => "987654", 
                                      'size' => "1BD / 1BA", 
                                      'property_address' => "800 Brazos Street", 
                                      'property_city' => "Austin", 
                                      'property_state' => "TX", 
                                      'property_postal_code' => "78701", 
                                      'property_country_code' => "US",
                                      'daily_price' => "198",
                                      'min_stay' => "30"),
                           2 => array('property_thumb' => "property_987654_thumb.jpg", 
                                      'property_name' => "Travis Heights Arms", 
                                      'neighborhood' => "Downtown", 
                                      'id' => "123456", 
                                      'size' => "2BD / 1BA", 
                                      'property_address' => "1136 Travis Heights Boulevard", 
                                      'property_city' => "Austin", 
                                      'property_state' => "TX", 
                                      'property_postal_code' => "78704", 
                                      'property_country_code' => "US",
                                      'daily_price' => "198",
                                      'min_stay' => "30"),
                           3 => array('property_thumb' => "property_987654_thumb.jpg", 
                                      'property_name' => "Lakeside Apartments", 
                                      'neighborhood' => "Downtown", 
                                      'id' => "234567", 
                                      'size' => "2BD / 1BA", 
                                      'property_address' => "85 Trinity Street", 
                                      'property_city' => "Austin", 
                                      'property_state' => "TX", 
                                      'property_postal_code' => "78701", 
                                      'property_country_code' => "US",
                                      'daily_price' => "295",
                                      'min_stay' => "30"),
                           4 => array('property_thumb' => "property_987654_thumb.jpg", 
                                      'property_name' => "Travis Heights Arms", 
                                      'neighborhood' => "Downtown", 
                                      'id' => "123456", 
                                      'size' => "2BD / 1BA", 
                                      'property_address' => "1136 Travis Heights Boulevard", 
                                      'property_city' => "Austin", 
                                      'property_state' => "TX", 
                                      'property_postal_code' => "78704", 
                                      'property_country_code' => "US",
                                      'daily_price' => "198",
                                      'min_stay' => "30"),
                           5 => array('property_thumb' => "property_987654_thumb.jpg", 
                                      'property_name' => "Lakeside Apartments", 
                                      'neighborhood' => "Downtown", 
                                      'id' => "234567", 
                                      'size' => "2BD / 1BA", 
                                      'property_address' => "85 Trinity Street", 
                                      'property_city' => "Austin", 
                                      'property_state' => "TX", 
                                      'property_postal_code' => "78701", 
                                      'property_country_code' => "US",
                                      'daily_price' => "295",
                                      'min_stay' => "30"),
                           6 => array('property_thumb' => "property_987654_thumb.jpg", 
                                      'property_name' => "Travis Heights Arms", 
                                      'neighborhood' => "Downtown", 
                                      'id' => "123456", 
                                      'size' => "2BD / 1BA", 
                                      'property_address' => "1136 Travis Heights Boulevard", 
                                      'property_city' => "Austin", 
                                      'property_state' => "TX", 
                                      'property_postal_code' => "78704", 
                                      'property_country_code' => "US",
                                      'daily_price' => "198",
                                      'min_stay' => "30"),
                           7 => array('property_thumb' => "property_987654_thumb.jpg", 
                                      'property_name' => "Lakeside Apartments", 
                                      'neighborhood' => "Downtown", 
                                      'id' => "234567", 
                                      'size' => "2BD / 1BA", 
                                      'property_address' => "85 Trinity Street", 
                                      'property_city' => "Austin", 
                                      'property_state' => "TX", 
                                      'property_postal_code' => "78701", 
                                      'property_country_code' => "US",
                                      'daily_price' => "295",
                                      'min_stay' => "30"));

?>


<html>
<head>
  <title>Search Results :: Amber Lodging</title>
  
<?php include('inc/head_includes.php') ?>

  <script>
  $(function() {
    $( document ).tooltip({
      position: {
        my: "center bottom-20",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            .addClass( "arrow" )
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });
  });
  </script>

</head>
<body>

<div class="container-fluid">
  <div class="row title-bar" >
    <div class="alc col-sm-6">Amber Lodging Company</div>
    <div class=" client-name col-sm-6 text-right">
      <div class="user_dropdown_menu">
        <a onclick="myFunction()" class="droplink"><?php echo $client ?> <span class="caret"></span></a>
        <ul id="userDropdown" class="dropdown-content text-left">
          <li><a href="./client_home.php">New Search</a></li>
          <li><a href="/">AMBER Home</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">

<div class="row filter-bar">
  <div class="search-area"><input type="text" class="form-control" id="destination" name="Destination" placeholder=" Destination or property name?" /></div>
  <div class="location"><i class="fa fa-map-marker"></i> <?php echo $search_parameters[city], ", ", $search_parameters[state] ?></div>
  <div class="dates grey-separator"><i class="fa fa-calendar"></i> <?php echo $search_parameters[move_in], " - ", $search_parameters[move_out] ?></div>
  <div class="filter-br">1 Bed <span class="caret"></span></div>
  <div class="filter-ba grey-separator">1 Bath <span class="caret"></span></div>
  <div class="filter-nbhd">Neighborhood <span class="caret"></span></div>
  <div class="filter-price">Price <span class="caret"></span></div>
</div>

<div class="row">
  <div id="map"></div>
</div>
    <script>
      var map;
      function initMap() {
  // Specify features and elements to define styles.
  var styleArray = [
    {
      featureType: "all",
      stylers: [
       { saturation: -100 }
      ]
    }
  ];

  // Create a map object and specify the DOM element for display.

        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 30.3, lng: -98},
          // Apply the map style array to the map.
          styles: styleArray,
          zoom: 11
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2CUo-V9LEi2YuJvh6F_Sf7NkmpXnC4yE&callback=initMap"
    async defer></script>
<div class="results-list-header">
<h1>We found XX options for you in Austin, TX</h1>

<p class="small-print"><em>All reservations are subject to availability. Changes to the reservation may alter pricing and availability.
Reservations are not set until confirmed. Confirmations are sent Mon-Fri between the hours of 7-7CST</em></p>

</div>


<div class="results-list">
<?php 
 foreach($result_properties as $inner) { echo    
      '<div class="results-box  container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-3">
            <img src="img/clients/'.$inner[property_thumb].'" alt="<##>" />
          </div>
          <div class="col-sm-12 col-md-6 results-details">
          <h1 class="results">'.$inner[property_name].'</h1>
          <p class="neighborhood">'.$inner[neighborhood].'</p>
          <p class="neighborhood">ID# '.$inner[id] . ' | ' . $inner[size].'</p>
          <p class="results-address">'.$inner[property_address] . '<br />
          ' .$inner[property_city] . ', '.$inner[property_state] . ' ' .$inner[property_postal_code] . ', '.$inner[property_country_code] . ' </p>
           <p class="min-stay">minimum '.$inner[min_stay].' day stay</p>
          </div>
          <div class="col-sm-12 col-md-3 text-right">
          <div class="daily-price">$'.$inner[daily_price] . '</div> <a href="" class="currency-denominator" title="Prices quoted in USD, pricing may change due to currency fluctuations." >USD</a>
          <div class="price-unit">avg/night</div>
          <a href="property_detail.php" class="btn btn-primary view-details">View Details</a>
          </div>
          </div>
        <div class="row row-spacing">
          <div class="col-md-1 no-padding">
            <div class="move-date">'
            . $search_parameters[move_in] . '
            </div>
          </div>
          <div class="col-md-10 duration">
          &nbsp;
          </div>
          <div class="col-md-1 text-right no-padding">
            <div class="move-date">'
            . $search_parameters[move_out] . '
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center no-padding results-availability">
            Currently Available
          </div>
        </div>


      </div>
      '

  ; } 
  ?>  
</div>
<?php include("inc/form_scripts.php") ?>
</body>


  </html>