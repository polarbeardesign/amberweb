<?php 
$result_property = array('property_city' => "Sunnyvale", 
                          'property_state' => "CA", 
                          'bedroom_choice' => "3 bedrooms",
                          'arrival_date' => "11/7/2015",
                          'departure_date' => "12/7/2015",
                          'number_of_occupants' => "Adults: 2, Children: 2",
                          'pets' => "None",
                          'special_needs' => "Will need 1 parking space",
                          'preferred_location' => "Saratoga, Los Gatos or Almaden");
?>
<!DOCTYPE html>

<html>
<head>
    <title>Offer :: Amber Lodging</title>

    <link rel="stylesheet" href="Content/bootstrap.min.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Content/themes/base/all.css" type="text/css" />
    <link rel="stylesheet" href="Content/style.css" type="text/css" media="screen" />

    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />



</head>
<body>
    <div id="container-fluid">
        <header>
            <div class="logo">
                <a href="/"><img srcset="Content/img/logo.svg 208w" src="Content/img/logo.png" alt="Amber Lodging" /></a>
            </div>
            <div class="tagline">
                <span class="heavy-italic">Feel right at home</span>, anywhere on earth.
            </div>
        </header>


<div class="row row-padding request-summary">
<div class="col-sm-6 col-sm-push-3">
<h2>Initial Criteria</h2>

<table class="request-summary-table">
<tr>
  <td class="table-label">City/State:</td>
  <td><?php echo $result_property[property_city] ?>, <?php echo $result_property[property_state] ?></td>
</tr>
<tr>
  <td class="table-label">Bedroom Choice:</td>
  <td><?php echo $result_property[bedroom_choice] ?></td>
</tr>
<tr>
  <td class="table-label">Arrival Date:</td>
  <td><?php echo $result_property[arrival_date] ?></td>
</tr>
<tr>
  <td class="table-label">Departure Date:</td>
  <td><?php echo $result_property[departure_date] ?></td>
</tr>
<tr>
  <td class="table-label">Number of Occupants:</td>
  <td><?php echo $result_property[number_of_occupants] ?></td>
</tr>
<tr>
  <td class="table-label">Pets:</td>
  <td><?php echo $result_property[pets] ?></td>
</tr>
<tr>
  <td class="table-label">Special Needs:</td>
  <td><?php echo $result_property[special_needs] ?></td>
</tr>
<tr>
  <td class="table-label">Preferred Location:</td>
  <td><?php echo $result_property[preferred_location] ?></td>
</tr>
</table>
</div>
</div>

<div class="row row-padding">
<div class="col-xs-8 col-xs-push-2 no-padding">
<form id="formID" method="post" name="RequestInfo" action="reservation_request_ty.php">
<h2>Property Details</h2>
<br />
<p>Please provide the additional information for this property.</p>

<h3>Property Description</h3>
<fieldset>
  <div class="row">
    <div class="col-lg-7">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="PropertyName">Property name:</label>
        <input class="text-input-new" style="padding-left: 116px;" id="PropertyName" name="PropertyName" type="text" value="">
      </div>
    </div>
    <div class="col-lg-5">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="PropertyDistance">Distance to preferred location:</label>
        <input class="text-input-new" style="padding-left: 222px;" id="PropertyDistance" name="PropertyDistance" type="text" value="">
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-4">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="PropertyAddress">Address:</label>
        <input class="text-input-new" style="padding-left: 70px;" id="PropertyAddress" name="PropertyAddress" type="text" value="">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="PropertyCity">City:</label>
        <input class="text-input-new" style="padding-left: 45px;" id="PropertyCity" name="PropertyCity" type="text" value="">
      </div>
    </div>
    <div class="col-lg-2">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="PropertyState">State:</label>
        <input class="text-input-new" style="padding-left: 52px;" id="PropertyState" name="PropertyState" type="text" value="">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="PropertyPostalCode">Zip/Postal Code:</label>
        <input class="text-input-new" style="padding-left: 120px;" id="PropertyPostalCode" name="PropertyPostalCode" type="text" value="">
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-3">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="SquareFootage">Square Footage:</label>
        <input class="text-input-new" style="padding-left: 122px;" id="SquareFootage" name="SquareFootage" type="text" value="">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="NumberofBedrooms">Number of Bedrooms:</label>
        <input class="text-input-new" style="padding-left: 156px;" id="NumberofBedrooms" name="NumberofBedrooms" type="text" value="">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="NumberofBathrooms">Number of Bathrooms:</label>
        <input class="text-input-new" style="padding-left: 166px;" id="NumberofBathrooms" name="NumberofBathrooms" type="text" value="">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="FloorNumber">Floor Number:</label>
        <input class="text-input-new" style="padding-left: 110px;" id="FloorNumber" name="FloorNumber" type="text" value="">
      </div>
    </div>
  </div>
</fieldset>

<h3>Amenities and Associated Fees</h3>

<fieldset>
  <div class="row">
    <div class="col-lg-5">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="rate">Rate (Daily or Nightly):</label>
        <input class="text-input-new" style="padding-left: 162px;" id="rate" name="rate" type="text" value="">
      </div>
    </div>
    <div class="col-lg-3">
      <div class=" new radio-input-wrapper">
        <span class="placeholder">Tax:</span>
        <label for="taxYes">Yes</label><input class="radio-input-new"  id="taxYes" name="tax" type="radio" value="Yes" >
        <label for="taxNo">No</label><input class="radio-input-new"  id="taxNo" name="tax" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="TaxAmount">Tax Amount:</label>
        <input class="text-input-new" style="padding-left: 94px;" id="TaxAmount" name="TaxAmount" type="text" value="">
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-3">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="PetFriendly">Pet Friendly:</span>
        <label for="PetFriendlyYes">Yes</label><input class="radio-input-new"  id="PetFriendlyYes" name="PetFriendly" type="radio" value="Yes" >
        <label for="PetFriendlyNo">No</label><input class="radio-input-new"  id="PetFriendlyNo" name="PetFriendly" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-5">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="PetRestrictions">Pet Restrictions:</label>
        <input class="text-input-new" style="padding-left: 94px;" id="PetRestrictions" name="PetRestrictions" type="text" value="">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="PetFee">Pet Fee:</label>
        <input class="text-input-new" style="padding-left: 62px;" id="PetFee" name="PetFee" type="text" value="">
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-8">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="UtilityCaps">Utility Caps:</span>
        <label for="UtilityCapsYes">Yes</label><input class="radio-input-new"  id="UtilityCapsYes" name="UtilityCaps" type="radio" value="Yes" >
        <label for="UtilityCapsNo">No</label><input class="radio-input-new"  id="UtilityCapsNo" name="UtilityCaps" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="UtilityFee">Utility Fee:</label>
        <input class="text-input-new" style="padding-left: 94px;" id="UtilityFee" name="UtilityFee" type="text" value="">
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-4">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="ParkingIncluded">Parking Included:</span>
        <label for="ParkingIncludedYes">Yes</label><input class="radio-input-new"  id="ParkingIncludedYes" name="ParkingIncluded" type="radio" value="Yes" >
        <label for="ParkingIncludedNo">No</label><input class="radio-input-new"  id="ParkingIncludedNo" name="ParkingIncluded" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="ParkingType">Type of Parking:</label>
        <input class="text-input-new" style="padding-left: 120px;" id="ParkingType" name="ParkingType" type="text" value="">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="ParkingFee">Parking Fee:</label>
        <input class="text-input-new" style="padding-left: 94px;" id="ParkingFee" name="ParkingFee" type="text" value="">
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-lg-8">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="WD">Washer/Dryer Included:</span>
        <label for="WDYes">Yes</label><input class="radio-input-new"  id="WDYes" name="WD" type="radio" value="Yes" >
        <label for="WDNo">No</label><input class="radio-input-new"  id="WDNo" name="WD" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="WDFee">Washer/Dryer Fee:</label>
        <input class="text-input-new" style="padding-left: 131px;" id="WDFee" name="WDFee" type="text" value="">
      </div>
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-lg-8">
      <div class=" new radio-input-wrapper">
        <span class="placeholder">Housekeeping:</span>
        <label for="HousekeepingYes">Included</label><input class="radio-input-new"  id="HousekeepingYes" name="Housekeeping" type="radio" value="Included" >
        <label for="HousekeepingNo">Not Included</label><input class="radio-input-new"  id="HousekeepingNo" name="Housekeeping" type="radio" value="Not Included" >
        <span  class="middle-placeholder"><span class="form-rt-arrow"><i class="fa fa-play" aria-hidden="true"></i></span>If yes:</span>
        <label for="HousekeepingWeekly">Weekly</label><input class="radio-input-new"  id="HousekeepingWeekly" name="HousekeepingFrequency" type="radio" value="Weekly" >
        <label for="HousekeepingBiweekly">Bi-Weekly</label><input class="radio-input-new"  id="HousekeepingBiweekly" name="HousekeepingFrequency" type="radio" value="Bi-Weekly" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="HousekeepingFee">Housekeeping Fee:</label>
        <input class="text-input-new" style="padding-left: 131px;" id="HousekeepingFee" name="HousekeepingFee" type="text" value="">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="Restaurant">Restaurant Onsite:</span>
        <label for="RestaurantYes">Yes</label><input class="radio-input-new"  id="RestaurantYes" name="Restaurant" type="radio" value="Yes" >
        <label for="RestaurantNo">No</label><input class="radio-input-new"  id="RestaurantNo" name="Restaurant" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="AirportTransportaion">Airport Transportaion:</span>
        <label for="AirportTransportaionYes">Yes</label><input class="radio-input-new"  id="AirportTransportaionYes" name="AirportTransportaion" type="radio" value="Yes" >
        <label for="AirportTransportaionNo">No</label><input class="radio-input-new"  id="AirportTransportaionNo" name="AirportTransportaion" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="TransportationFee">Transportation Fee:</label>
        <input class="text-input-new" style="padding-left: 146px;" id="TransportationFee" name="TransportationFee" type="text" value="">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="InternetIncluded">Internet Included:</span>
        <label for="InternetIncludedYes">Yes</label><input class="radio-input-new"  id="InternetIncludedYes" name="InternetIncluded" type="radio" value="Yes" >
        <label for="InternetIncludedNo">No</label><input class="radio-input-new"  id="InternetIncludedNo" name="InternetIncluded" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="PhoneIncluded">Phone Included:</span>
        <label for="PhoneIncludedYes">Yes</label><input class="radio-input-new"  id="PhoneIncludedYes" name="PhoneIncluded" type="radio" value="Yes" >
        <label for="PhoneIncludedNo">No</label><input class="radio-input-new"  id="PhoneIncludedNo" name="PhoneIncluded" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="CableIncluded">Cable Included:</span>
        <label for="CableIncludedYes">Yes</label><input class="radio-input-new"  id="CableIncludedYes" name="CableIncluded" type="radio" value="Yes" >
        <label for="CableIncludedNo">No</label><input class="radio-input-new"  id="CableIncludedNo" name="CableIncluded" type="radio" value="No" >
      </div>
    </div>
  </div>
  
  
  <div class="row">
    <div class="col-lg-4">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="FitnessCenter">Fitness Center:</span>
        <label for="FitnessCenterYes">Yes</label><input class="radio-input-new"  id="FitnessCenterYes" name="FitnessCenter" type="radio" value="Yes" >
        <label for="FitnessCenterNo">No</label><input class="radio-input-new"  id="FitnessCenterNo" name="FitnessCenter" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="Concierge">24-HR Concierge:</span>
        <label for="ConciergeYes">Yes</label><input class="radio-input-new"  id="ConciergeYes" name="Concierge" type="radio" value="Yes" >
        <label for="ConciergeNo">No</label><input class="radio-input-new"  id="ConciergeNo" name="Concierge" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="Elevator">Elevator:</span>
        <label for="ElevatorYes">Yes</label><input class="radio-input-new"  id="ElevatorYes" name="Elevator" type="radio" value="Yes" >
        <label for="ElevatorNo">No</label><input class="radio-input-new"  id="ElevatorNo" name="Elevator" type="radio" value="No" >
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="BackgroundCheck">Background/Occupant Check Required:</span>
        <label for="BackgroundCheckYes">Yes</label><input class="radio-input-new"  id="BackgroundCheckYes" name="BackgroundCheck" type="radio" value="Yes" >
        <label for="BackgroundCheckNo">No</label><input class="radio-input-new"  id="BackgroundCheckNo" name="BackgroundCheck" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-3">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="BackgroundFee">Background Fee:</label>
        <input class="text-input-new" style="padding-left: 125px;" id="BackgroundFee" name="BackgroundFee" type="text" value="">
      </div>
    </div>
    <div class="col-lg-3">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="BackgroundFee">Application Fee:</label>
        <input class="text-input-new" style="padding-left: 118px;" id="BackgroundFee" name="BackgroundFee" type="text" value="">
      </div>
    </div>
  </div>
</fieldset>


<h3>Additional Items</h3>
<fieldset>
  <div class="row">
    <div class="col-lg-12">
      <div class=" new select-input-wrapper">
        <span class="placeholder" for="VacateReq">Notice to Vacate Requirement:</span>
        <select>
          <option value="" disabled selected="selected">Select one--</option>
          <option value="14 Days">14 Days</option>
          <option value="30 Days">30 Days</option>
          <option value="60 Days">60 Days</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="Weblinks">Profile or Website Links for Property:</label>
        <input class="text-input-new" style="padding-left: 262px;" id="Weblinks" name="Weblinks" type="text" value="">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class=" new text-area-input-wrapper" style="height: 80px;">
        <span class="placeholder" for="AdditionalPropertyInfo">Additional Notes and Fees (if not included above):</span>
        <br /><textarea rows="3"></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class=" new radio-input-wrapper">
        <span class="placeholder" for="LeaseCancellable">Lease Cancellable:</span>
        <label for="LeaseCancellableYes">Yes</label><input class="radio-input-new"  id="LeaseCancellableYes" name="LeaseCancellable" type="radio" value="Yes" >
        <label for="LeaseCancellableNo">No</label><input class="radio-input-new"  id="LeaseCancellableNo" name="LeaseCancellable" type="radio" value="No" >
      </div>
    </div>
    <div class="col-lg-4">
      <div class="new text-input-wrapper">
        <label class="placeholder" for="CancellationFee">Cancellation Fee:</label>
        <input class="text-input-new" style="padding-left: 131px;" id="CancellationFee" name="CancellationFee" type="text" value="">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class=" new text-area-input-wrapper" style="height: 80px;">
        <span class="placeholder" for="CancellationPolicy">Cancellation Policy:</span>
        <br /><textarea rows="3" id="CancellationPolicy" name="CancellationPolicy"></textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="select-input-wrapper">
        <label class="placeholder" for="PropertyName">Please Upload Property Photos:</label>
        <input id="property_photo" name="property_photo[filename]" type="file">
      </div>
    </div>
  </div>
</fieldset>


<p>Need verbiage regarding requested response times for domestic and international partners.</p>


  <input class="btn btn-quote" type="submit" value="Submit">

</form>
</div>
</div>



<footer>
  <div class="row">
    <div class="copyright col-sm-4 col-sm-push-4">
      <img srcset="Content/img/logo_bw.svg 208w" src="Content/img/logo_bw.png" width="200" alt="Amber Lodging" />
    </div>
  </div>
</footer>
    </div>
    <script type="text/javascript" src="http://amberlodging.com//Scripts/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="http://amberlodging.com//Scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://amberlodging.com//Scripts/jquery-ui-1.11.4.min.js"></script>

    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41071207-2', 'auto');
  ga('send', 'pageview');

</script>
<script>
    function validateDates (dateText) { 

    }
    $("#move_in").datepicker({ minDate: +5, maxDate: "+1Y" });
    $("#move_out").datepicker({ minDate: +6, maxDate: "+1Y",
        onSelect: function(dateText) { 
            validateDates(dateText);
        }
    });
</script>

</body>
</html>
