<?php

$client = "Johnny Washington";

$search_parameters = array('city' => "Austin", 'state' => "TX", 'move_in' => "Mar 01", 'move_out' => "Mar 31");

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
                                      'min_stay' => "30"),
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
                                      'min_stay' => "30"));

?>


<!DOCTYPE html>
<html>
<head>
  <title>Property Detail :: Amber Lodging</title>

<!-- for imported fonts and icons -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:100,400,500,600,400italic,600italic,800italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- for JQuery -->
  <script type="text/javascript" src="inc/jquery-1.11.3.min.js"></script>

<!-- for property slider -->
  <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="inc/bootstrap.min.css" type="text/css" media="screen">

<!-- for JQuery'd UI elements: tooltips, etc -->
  <script type="text/javascript" src="inc/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="inc/jquery-ui-1.11.4.custom/jquery-ui.min.css" type="text/css" media="screen">

<!-- for custom styling -->
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">

  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

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


</head>


<body>
<div class="title-bar alc">Amber Lodging Company</div>
<div class="title-bar client-name"><?php echo $client ?> <span class="caret"></span></div>

<!-- include popup forms -->
<?php include 'inc/form_reserve_now.php' ?>
<?php include 'inc/form_request_info.php' ?>

<div id="container">

<div class="info-bar">
  <span class="info-back"><a href="search_results.php">&larr; Back to properties</a></span>
  <span class="location"><i class="fa fa-map-marker"></i> <?php echo $search_parameters[city], ", ", $search_parameters[state] ?></span>
  <span class="dates"><i class="fa fa-calendar"></i> <?php echo $search_parameters[move_in], " - ", $search_parameters[move_out] ?></span>
  <span class="update-search"><a href="#">edit search</a></span>
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
    <div class="col-md-8">

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
                <img src="img/clients/' . $value . '" alt="...">
              </div>';
              }

          ?>

        </div>
       </div>

    </div>
    <div class="col-md-4">
      <h1 class="location-title"><?php echo $selected_property[property_name] ?></h1>
      <div class="location-id">ID# <?php echo $selected_property[id] ?></div> 
      <div class="location-address"><?php echo $selected_property[property_address], " | ", $selected_property[property_city], ", ", $selected_property[property_state], " ", $selected_property[property_postal_code], ", ", $selected_property[property_country_code] ?></div>
      <div class="row property-numbers">
        <div class="col-md-5">
          <div class="daily-price">$<?php echo $selected_property[daily_price] ?></div><a href="#" class="tool-tip" title="Prices quoted in USD, pricing may change due to currency fluctuations." > USD</a>
          <div class="small-print">avg/night</div>
        </div>
        <div class="col-md-7">
          <div class="min-stay"><?php echo $selected_property[min_stay] ?></div> DAY
          <div class="small-print">min stay</div>
        </div>
      </div>
      <div class="row">
      <div class="btn btn-primary reserve-now">Reserve This Property Now</div>
        <div class="small-print text-center">or</br />
          <div class="text-center request-info-link">Request Info</div>
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
    <div class="col-md-8">
      <h2 class="property-about">About This Rental</h2>
        <ul class="property-features">
          <?php foreach($selected_property[features] as $value) { echo '<li>'.$value.'</li>'; } ?>
        </ul>
      <h2 class="property-amenities">Property Amenities</h2>
        <ul class="property-amenities">
          <?php foreach($selected_property[amenities] as $value) { echo '<li>'.$value.'</li>'; } ?>
        </ul>
    </div>
    <div class="col-md-4 cal-section">
    <h3>Confirm your dates are available</h3>
    <div class="row row-spacing">
        <script language="javascript" type="text/javascript">

          var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
          var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

          //  Declare And Initialize Variables
          var Calendar = new Date();

          var year = Calendar.getFullYear();     // Returns year
          var month = Calendar.getMonth();       // Returns month (0-11)
          var today = Calendar.getDate();        // Returns day (1-31)
          var weekday = Calendar.getDay();       // Returns day (1-31)

          var DAYS_OF_WEEK = 7;                  // "constant" for number of days in a week
          var DAYS_OF_MONTH = 31;                // "constant" for number of days in a month
          var cal;                               // Used for printing

          Calendar.setDate(1);                   // Start the calendar day at '1'
          Calendar.setMonth(month);              // Start the calendar month at now


          // Variables For Formatting

          var tr_start = '<tr>';
          var tr_end = '</tr>';
          var td_start = '<td width="45" class="cal-body">';
          var td_end = '</td>';

          // Begin Code For Calendar

          cal =  '<table class="calendar"><tr><td>';
          cal += '<table class="">' + tr_start;
          cal += '<td colspan="' + DAYS_OF_WEEK + '" bgcolor="#efefef"><center><b>';
          cal += month_of_year[month]  + '   ' + year + '</b>' + td_end + tr_end;
          cal += tr_start;

          // Loops For Each Day Of Week
          for(index=0; index < DAYS_OF_WEEK; index++)
          {

          // Bold Today's Day Of Week
          if(weekday == index)
          cal += td_start + '<B>' + day_of_week[index] + '</B>' + td_end;

          // Prints Day
          else
          cal += td_start + day_of_week[index] + td_end;
          }

          cal += td_end + tr_end;
          cal += tr_start;

          // Fill In Blank Gaps Until Today's Day
          for(index=0; index < Calendar.getDay(); index++)
          cal += td_start + '  ' + td_end;

          // Loops For Each Day In Calendar
          for(index=0; index < DAYS_OF_MONTH; index++)
          {
          if( Calendar.getDate() > index )
          {
            // Returns The Next Day To Print
            week_day =Calendar.getDay();

            // Start New Row For First Day Of Week
            if(week_day == 0)
            cal += tr_start;

            if(week_day != DAYS_OF_WEEK)
            {

            // Set Variable Inside Loop For Incrementing Purposes
            var day  = Calendar.getDate();

            // Highlight Today's Date
            if( today==Calendar.getDate() )
            cal += td_start + day + td_end + td_end;

            // Prints Day
            else
            cal += td_start + day + td_end;
            }

            // End Row For Last Day Of Week
            if(week_day == DAYS_OF_WEEK)
            cal += tr_end;
            }

            // Increments Until End Of The Month
            Calendar.setDate(Calendar.getDate()+1);

          }// end for loop

          cal += '</td></tr></table></table>';

          //  Print Calendar
          document.write(cal);

      </script>

      </div>
      <div class="row row-spacing">
        <div class="col-md-4" style="padding: 0;">
          <div class="cal-key requested_dates"></div> <span class="date-key">Move in / out</span>
        </div>
        <div class="col-md-4" style="padding: 0;">
          <div class="cal-key"></div> <span class="date-key">Available</span>
        </div>
        <div class="col-md-4" style="padding: 0;">
          <div class="cal-key pending_dates"></div> <span class="date-key">Pending</span>
        </div>
      </div>
      <p class="small-print"><em><strong>Note:</strong> Calendar shows the standard nightly rate. See pricing above for the best average price based on the dates you have selected.</em></p>
    </div>
  </div>
</section>

<section class="properties-nearby container-fluid">
  <div class="row padded">
    <div class="col-md-8">
    <h2 class="property-about">Nearby Rentals Like This One</h2>
 
 
 <?php 
 foreach($nearby_properties as $inner) { echo    
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
          <div class="daily-price">$'.$inner[daily_price] . '</div> <a href="#" class="tool-tip currency-denominator" title="Prices quoted in USD, pricing may change due to currency fluctuations." >USD</a>
          <div class="price-unit">avg/night</div>
          <div class="btn btn-primary view-details">View Details</div>
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
    <div class="col-md-4">
    &nbsp;
    <h3 class="map-header">Getting to the property</h3>
    <img src="http://maps.googleapis.com/maps/api/staticmap?zoom=11&size=350x350&maptype=roadmap&markers=color:red%7Clabel:X%7C<?php echo "$selected_property[property_latitude],$selected_property[property_longitude]" ?>&sensor=false" %>

    
  </div>    
</section>
</div>
<footer>
  <?php include('inc/footer.php') ?>
</footer>
</div>


</body>

<?php include("inc/form_scripts.php") ?>

</html>