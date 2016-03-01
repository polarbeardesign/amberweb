<?php

$client = "Johnny Washington";

$property_name = "Gables West Avenue";
$location_id = "987654";
$property_address = "300 West Avenue";
$property_city = "Austin";
$property_state = "TX";
$property_postal_code = "78701";
$property_country_code = "US";
$move_in = "Jan 20";
$move_out = "Feb19";
$daily_price = "260";
$min_stay = "30";

$image_0 = "property_feature_1.jpg";

$property_features = array("One bedroom, one full bathroom","785 sqft","2nd floor","Balcony with sitting area","High Speed Internet","Washer/dryer in unit","Fully furnished","Full size kitchen");
$property_amenities = array("Built in 2001, recently renovated","Ceiling Fans","Club Room","Extra Storage Available","High Speed Internet","Laundry On Site","Pool","Public Transportation Near By","Rooftop Amenities","Wireless High Speed Internet");

$nearby_properties = array(0 => array('property_thumb' => "property_987654_thumb.jpg", 'property_name' => "Green Pastures", 'neighborhood' => "Downtown", 'id' => "987654", 'size' => "1BD / 1BA", 'property_address' => "800 Brazos Street", 'property_city' => "Austin", 'property_state' => "TX", 'property_postal_code' => "78701", 'property_country_code' => "US"),
                           1 => array('property_thumb' => "property_987654_thumb.jpg", 'property_name' => "Travis Heights Arms", 'neighborhood' => "Downtown", 'id' => "123456", 'size' => "2BD / 1BA", 'property_address' => "1136 Travis Heights Boulevard", 'property_city' => "Austin", 'property_state' => "TX", 'property_postal_code' => "78704", 'property_country_code' => "US"));

?>


<!DOCTYPE html>
<html>
<head>
  <title>Property Detail :: Amber Lodging</title>
  

  <link rel="stylesheet" href="inc/bootstrap.min.css" type="text/css" media="screen">
  <link rel="stylesheet" href="inc/style.css" type="text/css" media="screen">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic,800italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

</head>


<body>
<div class="title-bar alc">Amber Lodging Company</div>
<div class="title-bar client-name"><?php echo $client ?> <span class="caret"></span></div>


<div id="container">

<div class="info-bar">
  <span class="info-back"><i class="fa fa-long-arrow-left"></i> Back to properties</span>
  <span class="location"><i class="fa fa-map-marker"></i> <?php echo $property_city, ", ", $property_state ?></span>
  <span class="dates"><i class="fa fa-calendar"></i> <?php echo $move_in, " - ", $move_out ?></span>
  <span class="update-search"><a href="#">edit search</a></span>
</div>

<section class="property-detail container-fluid">
  <div class="row">
    <div class="col-md-7">
      <img src="img/clients/<?php echo $image_0 ?>" alt="View 1" />
    </div>
    <div class="col-md-4">
      <h1 class="location-title"><?php echo $property_name ?></h1>
      <div class="location-id">ID# <?php echo $location_id ?></div> 
      <div class="location-address"><?php echo $property_address, " | ", $property_city, ", ", $property_state, " ", $property_postal_code, ", ", $property_country_code ?></div>
      <div class="row property-numbers">
        <div class="col-md-5">
          <div class="daily-price">$<?php echo $daily_price ?></div> USD
          <div class="small-print">avg/night</div>
        </div>
        <div class="col-md-7">
          <div class="min-stay"><?php echo $min_stay ?></div> DAY
          <div class="small-print">min stay</div>
        </div>
      </div>
      <div class="row">
      <div class="btn btn-primary reserve-now">Reserve This Property Now</div>
        <p class="small text-center">or</p>
        <p class="small text-center">
          <a href="">Request Info</a>
        </p>
        <p class="small-print"><em>All reservations are subject to availability. Changes to the reservation may alter pricing and availability.</em></p>
        <p class="small-print"><em>Reservations are not set until confirmed. Confirmations are sent Mon-Fri between the hours of 7-7CST</em></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-7">
      <h2 class="property-about">About This Rental</h2>
        <ul class="property-features">
          <?php foreach($property_features as $value) { echo '<li>'.$value.'</li>'; } ?>
        </ul>
      <h2 class="property-amenities">Property Amenities</h2>
        <ul class="property-amenities">
          <?php foreach($property_amenities as $value) { echo '<li>'.$value.'</li>'; } ?>
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
          <div class="cal-key requested_dates"></div> <span class="small">Move in / out</span>
        </div>
        <div class="col-md-4" style="padding: 0;">
          <div class="cal-key"></div> <span class="small">Available</span>
        </div>
        <div class="col-md-4" style="padding: 0;">
          <div class="cal-key pending_dates"></div> <span class="small">Pending</span>
        </div>
      </div>
      <p class="small-print"><em><strong>Note:</strong> Calendar shows the standard nightly rate. See pricing above for the best average price based on the dates you have selected.</em></p>
    </div>
  </div>
</section>

<section class="properties-nearby container-fluid">
  <div class="row">
    <div class="col-md-7">
    <h2 class="property-about">Nearby Rentals Like This One</h2>
 
 
 <?php 
 foreach($nearby_properties as $inner) { echo    
      '<div class="nearby-box">
        <div class="row">
          <div class="col-md-3">
            <img src="img/clients/'.$inner[property_thumb].'" alt="<##>" />
          </div>
          <div class="col-md-4">
          <h1 class="nearby">'.$inner[property_name].'</h1>
          <p class="neighborhood">'.$inner[neighborhood].'</p>
          <p>ID# '.$inner[id] . ' | ' . $inner[size].'</p>
          <p class="nearby-address">'.$inner[property_address] . '<br />
          ' .$inner[property_city] . ', '.$inner[property_state] . ' ' .$inner[property_postal_code] . ', '.$inner[property_country_code] . ' </p>
          </div>
          </div>
      </div>
      '

  ; } 
  ?>  
    
    </div>
    <div class="col-md-4">
    &nbsp;
    <h3>Getting to the property</h3>
    
    
  </div>    
</section>

</div>


</body>



</html>