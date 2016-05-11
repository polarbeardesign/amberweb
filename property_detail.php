<?php

date_default_timezone_set('America/Denver');

$client = "Johnny Washington";

$search_parameters = array('city' => "Austin", 'state' => "TX", 'move_in' => "05/01/2016", 'move_out' => "06/15/2016");

$selected_property = array('property_name' => "Gables West Avenue", 
                           'neighborhood' => "Downtown", 
                           'id' => "987654", 
                           'size' => "1BD / 1BA", 
                           'property_address' => "300 West Avenue", 
                           'property_city' => "Austin", 
                           'property_state' => "TX", 
                           'property_postal_code' => "78701", 
                           'property_country_code' => "US",
                           'property_latitude' => "30.2680695",
                           'property_longitude' => "-97.7538387",
                           'daily_price' => "260", 
                           'min_stay' => "30",
                           'images' => array("property_feature_1.jpg", "property_feature_2.jpg", "property_feature_3.jpg", "property_feature_4.jpg", "property_feature_5.jpg"), 
                           'features' => array("One bedroom, one full bathroom","785 sqft","2nd floor","Balcony with sitting area","High Speed Internet","Washer/dryer in unit","Fully furnished","Full size kitchen"),
                           'amenities' => array("Built in 2001, recently renovated","Ceiling Fans","Club Room","Extra Storage Available","High Speed Internet","Laundry On Site","Pool","Public Transportation Near By","Rooftop Amenities","Wireless High Speed Internet"));

$nearby_properties = array(0 => array('property_thumb' => "property_987654_thumb.jpg", 
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
                                      'min_stay' => "30",
                                      'pending_periods' => array(0 => array('start_date' => '2016-05-10', 'end_date' => '2016-05-17'),
                                                                 1 => array('start_date' => '2016-06-10', 'end_date' => '2016-06-25'),
                                                                 2 => array('start_date' => '2016-05-22', 'end_date' => '2016-05-25'))),
                           1 => array('property_thumb' => "property_987654_thumb.jpg", 
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
                           2 => array('property_thumb' => "property_987654_thumb.jpg", 
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
                                      'min_stay' => "30",
                                      'pending_periods' => array(0 => array('start_date' => '2016-05-20', 'end_date' => '2016-06-10'))));

?>


<!DOCTYPE html>
<html>
<head>
  <title>Property Detail :: Amber Lodging</title>

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
<?php include("inc/form_scripts.php") ?>
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

<!-- include popup forms -->
<?php include 'inc/bootstrap_reserve_now.html' ?>
<?php include 'inc/bootstrap_request_info.html' ?>

<div class="container-fluid white-page">

<div class="row info-bar">
  <div class="info-back"><a href="search_results.php">&larr; Back to properties</a></div>
  <div class="location"><i class="fa fa-map-marker"></i> <?php echo $search_parameters[city], ", ", $search_parameters[state] ?></div>
  <div  class="dates"><i class="fa fa-calendar"></i> <?php echo $search_parameters[move_in], " - ", $search_parameters[move_out] ?></div>
  <div class="update-search"><a href="#">edit search</a></div>
</div>

<div class="property-detail-screen">
<section class="property-detail container-fluid">

  <!-- for pending reservations warning - should be conditional based on properties availability -->
  <div class="row padded">
    <div class="col-md-12 no-padding">
      <div class="pending-reservation-alert">
        <p>This property has XX number of pending reservation(s). Reservations often cancel/change. If you wish to be waitlisted &#8211; please continue by reserving now.</p>
      </div>
    </div>
  </div>

  <div class="row padded">
    <div class="col-sm-8">

      <div id="feature_property-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">

          <?php
             foreach($selected_property[images] as $key => $value) {  echo 
                '<li data-target="#feature_property-carousel" data-slide-to="' . $key . '"';
                if ($key == 0) { 
                   echo ' class="active"';
                   } 
                echo '></li>';
                }
          ?>
        </ol>
 
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php
          foreach($selected_property[images] as $key => $value) {  echo 
              '<div class="item ' ;
              if ($key == 0) { 
                 echo 'active';
                 } 
              echo '">
                <img src="img/clients/' . $value . '" alt="..." style="width: 100%;">
              </div>';
              }

          ?>

        </div>
       </div>

    </div>
    <div class="col-sm-4">
      <h1 class="location-title"><?php echo $selected_property[property_name] ?></h1>
      <div class="location-id">ID# <?php echo $selected_property[id] ?></div> 
      <div class="location-address"><?php echo $selected_property[property_address], " | ", $selected_property[property_city], ", ", $selected_property[property_state], " ", $selected_property[property_postal_code], ", ", $selected_property[property_country_code] ?></div>
      <div class="row property-numbers">
        <div class="col-xs-5">
          <div class="daily-price">$<?php echo $selected_property[daily_price] ?></div><a href="#" class="tool-tip" title="Prices quoted in USD, pricing may change due to currency fluctuations." > USD</a>
          <div class="small-print">avg/night</div>
        </div>
        <div class="col-xs-7">
          <div class="min-stay"><?php echo $selected_property[min_stay] ?></div> DAY
          <div class="small-print">min stay</div>
        </div>
      </div>
      <div class="row">
      <div class="btn btn-primary reserve-now" data-toggle="modal" data-target="#reserveModal">Reserve This Property Now</div>
        <div class="small-print text-center">or</br />
          <div class="text-center request-info-link" data-toggle="modal" data-target="#infoModal">Request Info</div>
        </div>
       </div>
      <div class="row">
        <div class="col-md-12 disclaimers">
          <p><em>All reservations are subject to availability. Changes to the reservation may alter pricing and availability.</em></p>
          <p><em>Reservations are not set until confirmed. Confirmations are sent Mon-Fri between the hours of 7-7CST</em></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row padded">
    <div class="col-sm-8">
      <h2 class="property-about">About This Rental</h2>
        <ul class="property-features">
          <?php foreach($selected_property[features] as $value) { echo '<li>'.$value.'</li>'; } ?>
        </ul>
      <h2 class="property-amenities">Property Amenities</h2>
        <ul class="property-amenities">
          <?php foreach($selected_property[amenities] as $value) { echo '<li>'.$value.'</li>'; } ?>
        </ul>
    </div>
    <div class="col-sm-4 cal-section">
    <h3>Confirm your dates are available</h3>
    <div class="row row-spacing">

<!--- Calendar section -->

<div id="calendar"></div>



<script>
$(document).ready(function() {

    var pendingDates = ['05/05/2016', '05/06/2016', '05/07/2016', '05/08/2016', '05/09/2016', '05/10/2016', '05/11/2016'];
    var moveinDate = '05/01/2016';
    var moveoutDate = '06/15/2016';
            //tips are optional but good to have
    var tips  = ['some description','some other description']; 


    $('#calendar').datepicker({
        inline: true,
        dateFormat: 'mm/dd/yyyy',
        beforeShowDay: highlightDates,
        firstDay: 0,
        showOtherMonths: true,
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
    });

    function highlightDates(date) {

        // Mark pending dates
        for (var i = 0; i < pendingDates.length; i++) {
            if (new Date(pendingDates[i]).toString() == date.toString()) {              
                return [true, 'pending', 'reservation pending'];
            }
        }
        // Mark Move In
           if (new Date(moveinDate).toString() == date.toString()) {              
                return [true, 'move-in-out', 'Your Requested Move In'];
            }
        // Mark Move Out
           if (new Date(moveoutDate).toString() == date.toString()) {              
                return [true, 'move-in-out', 'Your Requested Move Out'];
            }
        // Mark Requested dates in between move in and move out
           if (new Date(moveinDate) < date && new Date(moveoutDate) > date) {                
                return [true, 'available'];
            }

        return [true, ''];
     } 

// Set the calendar in the requested dates time scope
 $("#calendar").datepicker("setDate", new Date(moveinDate));


});
</script>

<!--- Calendar section -->


      </div>
      <div class="row row-spacing">
        <div class="col-xs-4" style="padding: 0;">
          <div class="cal-key requested_dates"></div> <span class="date-key">Move in / out</span>
        </div>
        <div class="col-xs-4" style="padding: 0;">
          <div class="cal-key available_dates"></div> <span class="date-key">Available</span>
        </div>
        <div class="col-xs-4" style="padding: 0;">
          <div class="cal-key pending_dates"></div> <span class="date-key">Pending</span>
        </div>
      </div>
      <p class="small-print"><em><strong>Note:</strong> Calendar shows the standard nightly rate. See pricing above for the best average price based on the dates you have selected.</em></p>
    </div>
  </div>
</section>

<section class="properties-nearby container-fluid">
  <div class="row padded">
    <div class="col-sm-4 col-sm-push-8">
      &nbsp;
      <h3 class="map-header">Getting to the property</h3>
      <img src="http://maps.googleapis.com/maps/api/staticmap?zoom=11&size=350x350&maptype=roadmap&markers=color:red%7Clabel:X%7C<?php echo "$selected_property[property_latitude],$selected_property[property_longitude]" ?>&sensor=false" %>
    </div>
    <div class="col-sm-8 col-sm-pull-4">
    <h2 class="property-about">Nearby Rentals Like This One</h2>
 
 
<?php 
 foreach($nearby_properties as $inner) { echo    
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
  </div>
</section>
</div>
<footer>
  <?php include('inc/footer.php') ?>
</footer>



</body>



</html>