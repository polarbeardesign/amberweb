<?php

date_default_timezone_set('America/Denver');

$client = "Johnny Washington";

$search_parameters = array('city' => "Austin", 'state' => "TX", 'move_in' => "05/01/2016", 'move_out' => "06/15/2016");

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
                                      'min_stay' => "30",
                                      'pending_periods' => array(0 => array('start_date' => '2016-05-10', 'end_date' => '2016-05-17'),
                                                                 1 => array('start_date' => '2016-06-10', 'end_date' => '2016-06-25'),
                                                                 2 => array('start_date' => '2016-05-22', 'end_date' => '2016-05-25'))),
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
                                      'min_stay' => "30",
                                      'pending_periods' => array(0 => array('start_date' => '2016-05-01', 'end_date' => '2016-06-17'))),
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
    <div class="alc col-sm-6"><a href="client_home.php">Amber Lodging Company</a></div>
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

<div class="filter-bar container-fluid">
<form action="search_results.php" name="search" id="search">
<div class="row">
  <div class="col-sm-3">
    <div class=" input-group">
      <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
      <input type="text" class="form-control" id="destination" name="Destination" placeholder=" Destination or property name?" />
    </div>
  </div>
  <div class="col-sm-2">
    <div class=" input-group">
      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
      <input type="text" class="form-control form_datetime" id="move_in" name="move_in" placeholder=" Move In?" />
    </div>
  </div>
  <div class="col-sm-2">
    <div class=" input-group">
      <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
      <input type="text" class="form-control form_datetime" id="move_out" name="move_out" placeholder=" Move Out?" />
    </div>
  </div>
  <div class="col-sm-2">
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
  <div class="col-sm-2">
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
  <div class="col-sm-1">
  <input type="submit" value="Search" id="submit" class="btn btn-primary search-button">
  </div>
</div>
</form>
</div>

<!--------------------------------------------------------  ---->
<div class="container-fluid results-page-height">


<div class="row results-page-height">
  <div id="map"></div>
</div>
    <script>
    function initGoogleGoodness() {
        initAutocomplete();
        initMap();
    }
    function initMap() {
        // Specify features and elements to define styles.
        var styleArray = [{ featureType: "all", stylers: [{ saturation: -100 }] }];
        var markerArray = [{"Title":"AMLI on 2nd","Latitude":30.2661798,"Longitude":-97.7480738,"Description":"AMLI on 2nd\u003cbr /\u003e421 West 3rd Street, Apt. No. 1901, Austin TX 78701 USA","Label":"A"},{"Title":"Ashton Austin","Latitude":30.2641637,"Longitude":-97.7453287,"Description":"Ashton Austin\u003cbr /\u003e101 Colorado Street, Apt. No. 3106, Austin TX 78701 ","Label":"B"},{"Title":"Ashton Austin","Latitude":30.2641637,"Longitude":-97.7453287,"Description":"Ashton Austin\u003cbr /\u003e101 Colorado Street, Apt. No. 1509, Austin TX 78701 USA","Label":"C"},{"Title":"Ashton Austin","Latitude":30.2641637,"Longitude":-97.7453287,"Description":"Ashton Austin\u003cbr /\u003e101 Colorado Street, Apt. No. 1509, Austin TX 78701 USA","Label":"D"},{"Title":"404 Rio Grande","Latitude":30.2686799,"Longitude":-97.7505473,"Description":"404 Rio Grande\u003cbr /\u003e404 Rio Grande, Apt. No. 124, Austin TX 78701 USA","Label":"E"},{"Title":"AMLI on 2nd","Latitude":30.2661798,"Longitude":-97.7480738,"Description":"AMLI on 2nd\u003cbr /\u003e421 West 3rd Street, Apt. No. 1807, Austin TX 78701 USA","Label":"F"},{"Title":"Extended Stay America-Austin","Latitude":30.2694405,"Longitude":-97.7465265,"Description":"Extended Stay America-Austin\u003cbr /\u003e600 Guadalupe, Austin TX 78701 USA","Label":"G"},{"Title":"Driskill Hotel Austin","Latitude":30.2729209,"Longitude":-97.744386300000016,"Description":"Driskill Hotel Austin\u003cbr /\u003e604 Brazos Street, Apt. No. TBA, Austin TX 78701 USA","Label":"H"},{"Title":"Residences at the Four Seasons","Latitude":30.2616179,"Longitude":-97.7422804,"Description":"Residences at the Four Seasons\u003cbr /\u003e98 San Jacinto, Apt. No. #1702, Austin TX 78701 USA","Label":"I"},{"Title":"Ashton Austin","Latitude":30.2641637,"Longitude":-97.7453287,"Description":"Ashton Austin\u003cbr /\u003e101 Colorado Street, Apt. No. 3101, Austin TX 78701 USA","Label":"J"},{"Title":"Ashton Austin","Latitude":30.2641637,"Longitude":-97.7453287,"Description":"Ashton Austin\u003cbr /\u003e101 Colorado Street, Apt. No. 2806, Austin TX 78701 USA","Label":"K"},{"Title":"Sheraton Austin Hotel at the Capitol","Latitude":30.2704142,"Longitude":-97.7341958,"Description":"Sheraton Austin Hotel at the Capitol\u003cbr /\u003e701 East 11th Street, Austin TX 78701 USA","Label":"L"},{"Title":"404 Rio Grande","Latitude":30.2686799,"Longitude":-97.7505473,"Description":"404 Rio Grande\u003cbr /\u003e404 Rio Grande, Apt. No. 434, Austin TX 78701 USA","Label":"M"},{"Title":"404 Rio Grande","Latitude":30.2686799,"Longitude":-97.7505473,"Description":"404 Rio Grande\u003cbr /\u003e404 Rio Grande, Apt. No. 321, Austin TX 78701 USA","Label":"N"},{"Title":"Ashton Austin","Latitude":30.2641637,"Longitude":-97.7453287,"Description":"Ashton Austin\u003cbr /\u003e101 Colorado St, Apt. No. 3006, Austin TX 78701 USA","Label":"O"},{"Title":"AMLI Uptown","Latitude":30.265281,"Longitude":-97.746356699999993,"Description":"AMLI Uptown\u003cbr /\u003e201 Lavaca, Apt. No. 412, Austin TX 78701 USA","Label":"P"},{"Title":"AMLI Downtown","Latitude":30.265281,"Longitude":-97.746356699999993,"Description":"AMLI Downtown\u003cbr /\u003e201 Lavaca Street, Apt. No. 533, Austin TX 78701 USA","Label":"Q"},{"Title":"Austin Convention Center, East Cesar Chavez Street, Austin, TX, United States","Latitude":30.2635686,"Longitude":-97.739605900000015,"Description":"The center of your search.","Label":null}];

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 30.2635686, lng: -97.7396059 },
            // Apply the map style array to the map.
            
            styles: styleArray,
            zoom: 11 });

					// To get span of map within window, must wait for tiles to finish loading (bounds_changed)
					//google.maps.event.addListener(map, 'bounds_changed', function() {
					//  var span =  map.getBounds().toSpan(); // a latLng - # of deg map spans
					//});

					var offsetX = -0.25; // move center one quarter map width right
					var newCenter = { 
							lat: map.center.lat(),
					//    lng: map.center.lng() + span.lng()*offsetX
							lng: map.center.lng()  + 0.9*offsetX
					};

					map.panTo(newCenter);

        for (i = 0; i < markerArray.length; i++){
            var data = markerArray[i];
            if (data === null) { continue; }
            createMarker(data);
        }

        function createMarker(data) {
            var markerPosition = {lat: data.Latitude, lng: data.Longitude};
            var infoWindow = new google.maps.InfoWindow({
                content: data.Description
            });
            var marker = new google.maps.Marker({
                position: markerPosition,
                map: map,
                title: data.Title,
                label: data.Label
            });
            marker.addListener('click', function() {
                infoWindow.open(map, marker);
            });

        }
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
            <img src="img/clients/'.$inner[property_thumb].'" alt="<##>" width="100%" />
          </div>
          <div class="col-xs-6 col-sm-6 results-details">
          <h1 class="results">'.$inner[property_name].'</h1>
          <p class="neighborhood">'.$inner[neighborhood].'</p>
          <p class="neighborhood">ID# '.$inner[id] . ' | ' . $inner[size].'</p>
          <p class="results-address">'.$inner[property_address] . '<br />
          ' .$inner[property_city] . ', '.$inner[property_state] . ' ' .$inner[property_postal_code] . ', '.$inner[property_country_code] . ' </p>
           <p class="min-stay">minimum '.$inner[min_stay].' day stay</p>
          </div>
          <div class="col-xs-6 col-md-3 text-right">
          <div class="daily-price">$'.$inner[daily_price] . '</div> <a href="" class="currency-denominator" title="Prices quoted in USD, pricing may change due to currency fluctuations." >USD</a>
          <div class="price-unit">avg/night</div>
          <a href="property_detail.php" class="btn btn-primary view-details">View Details</a>
          </div>
          </div>
        <div class="row row-spacing">
          <div class="col-xs-1 no-padding">
            <div class="move-date">'
            . date_format(new DateTime($search_parameters[move_in]), "M d") . '
            </div>
          </div>
          <div class="col-xs-10 duration">
          &nbsp; '; 
 
 // Count total days - 100% = 460px 

  $total_days = floor(abs(strtotime($search_parameters[move_in]) - strtotime($search_parameters[move_out]))/(60*60*24));

//  graphic width 460px = 100%

  $graphic_width = 460;
 
 if ($inner[pending_periods] != "")

  {foreach($inner[pending_periods] as $dates) {   
// find position ($position)
           $days_in = floor(abs(strtotime($dates[start_date]) - strtotime($search_parameters[move_in]))/(60*60*24));
           $position = number_format($graphic_width * ($days_in/$total_days), 0) - 15;
// and duration ($length) of pending days
           $pending_length = floor(abs(strtotime($dates[start_date]) - strtotime($dates[end_date]))/(60*60*24));
           $length = number_format($graphic_width * ($pending_length/$total_days), 0);
            echo '<div style="float: left; position: absolute; left: ' . $position . 'px; top: 0px; ;border-top: 2px dotted #003399; border-bottom: 2px dotted #003399; width: ' . $length . 'px"></div>'
          ;}
	};

          echo ' 
          </div>
          <div class="col-xs-1 text-right no-padding">
            <div class="move-date">'
            . date_format(new DateTime($search_parameters[move_out]), "M d") . '
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center no-padding results-availability">';

							if ($inner[pending_periods] != "" && ($pending_length/$total_days) < 1) 
								{
									echo 'Pending Some Days' ;
								}
							elseif ($inner[pending_periods] != "" && $pending_length/$total_days >= 1) 
								{
									echo 'Currently Pending' ;
								}
							else 
								{
									 echo 'Currently Available' ;
								}

          echo '
          </div>
        </div>
</div>
      '

  ; } 
  ?>  
</div>
</div>
<?php include("inc/form_scripts.php") ?>
</body>


  </html>