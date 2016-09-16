<?php 
$result_properties = array('property_thumb' => "Content/img/clients/property_feature_2.jpg", 
                                      'property_name' => "Nokonah Condo AMD", 
                                      'neighborhood' => "Austin", 
                                      'id' => "987654", 
                                      'size' => "3 bedrooms, 2 bathrooms", 
                                      'property_address' => "901 W Austin St #315", 
                                      'property_city' => "Austin", 
                                      'property_state' => "Texas", 
                                      'property_postal_code' => "78703", 
                                      'property_country_code' => "US",
                                      'daily_price' => "260",
                                      'min_stay' => "30",
                                      'property_description' => "Raw denim franzen letterpress fixie, jean shorts locavore mustache jianbing swag health goth aesthetic vape pour-over chambray. Locavore mlkshk disrupt pabst, venmo shoreditch banh mi deep v. You probably haven't heard of them butcher tofu +1.",
                                      'distance' => "3 miles",
                                      'available' => "02/01/2017 - 08/01/2017",
                                      'size' => "3 bedrooms, 2 bathrooms",
                                      'floor' => "3",
                                      'w_d' => "in suite",
                                      'parking' => "Yes, covered",
                                      'housekeeping' => "Weekly",
                                      'internet' => "Broadband",
                                      'utilities' => "No",
                                      'square_ft' => "1200",
                                      'currency' => "US Dollars",
                                      'monthly_rate' => "1800",
                                      'early_termination' => "No",
                                      'check_in' => "Lockbox, Concierge",
                                      'elevator_stair' => "Yes",
                                      'min_lease' => "6 Months",
                                      'notice_req' => "1 Month",
                                      'deposit' => "1800",
                                      'property_website' => "http://thenokonah.com");
?>
<!DOCTYPE html>

<html>
<head>
    <title>Offer :: Amber Lodging</title>

<!-- JQuery -->
  <script type="text/javascript" src="Scripts/jquery-2.2.3.min.js"></script>
<!-- for property slider on property details page -->
  <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
<!-- for JQuery'd UI elements: tooltips, etc -->
  <script type="text/javascript" src="Scripts/jquery-ui-1.11.4.min.js"></script>
<!-- for form vaidations -->  
  <script src="inc/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
  <script src="inc/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>

<!-- for imported fonts and icons -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:100,400,500,600,400italic,600italic,800italic,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Bootstrap styles -->

  <link rel="stylesheet" href="Content/themes/base/all.css" type="text/css">

<!-- for form validation styling -->
  <link rel="stylesheet" href="inc/validationEngine.jquery.css" type="text/css"/>


    <link rel="stylesheet" href="Content/bootstrap.min.css" type="text/css" />
<!-- 
    <link rel="stylesheet" href="Content/style.css" type="text/css" media="screen" />
-->
    <link rel="stylesheet" href="https://gist.githubusercontent.com/polarbeardesign/7008e9087c90a5d6fb58e0bcb1cb567a/raw/c7edd30dafd215df70c7850c5e6e663bd79d89e5/amber_style.css" type="text/css" media="screen" />
        
  <link rel="stylesheet" href="Content/style.css" type="text/css" media="screen" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />



</head>
<body>
        <div class="title-bar Login" data-toggle="modal" data-target="#loginModal">LOG&nbsp;IN</div>
<form action="/ReserveNow/Login" method="post"><input name="__RequestVerificationToken" type="hidden" value="DdpDAC9YXthnatLzqFuvy2xjeQZVMccbfqwFolgX65ZT2VGsOcY57N7j3phopgraij_OXA5hAZyIURLWzBdlrwkVNatFicuIpYhqW116nZg1" />        <div class="modal fade login_form" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="text-right">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <h4 class="modal-title" id="myModalLabel">Log In</h4>
                    </div>
                    <div class="modal-body">
                        <div class="text-input-label">Email</div>
                        <input type="text" id="UserName" name="UserName" class="boxsizingBorder" placeholder="Your Email">
                        <div class="text-input-label">Password</div>
                        <input type="password" id="Password" name="Password" class="boxsizingBorder" placeholder="Your Password">
                        <div class="flat-cb-container">
                            <input type="checkbox" id="RememberMe" name="RememberMe" /><label for="RememberMe"></label><div class="cb-label"> Remember me</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary li-button" value="Log In" id="submit" />
                    </div>
                </div>
            </div>
        </div>
</form>
    <div id="container-fluid">
        <header>
            <div class="logo">
                <a href="/"><img srcset="Content/img/logo.svg 208w" src="Content/img/logo.png" alt="Amber Lodging" /></a>
            </div>
            <div class="tagline">
                <span class="heavy-italic">Feel right at home</span>, anywhere on earth.
            </div>
        </header>

        <nav>
            <div class="menu-link">
                <div class="show_menu">
                    <div class="bar-icon-wrapper">
                        <span class="bar-icon"></span>
                        <span class="bar-icon"></span>
                        <span class="bar-icon"></span>
                    </div>
                </div>

                <ul class="mobile main-navigation">
                    <li><a href="/">Home</a></li>
                    <li><a href="/About">About Amber Lodging</a></li>
                    <li><a href="/How">How We Work</a></li>
                    <li><a href="/CurrentResident">Current Resident Request</a></li>
                    <li><a href="/Information">Request Information</a></li>
                    <li><a href="/Contact">Contact Us</a></li>
                </ul>
            </div>
        </nav>



<div class="banner">
    <img srcset="Content/img/banner_about_1500.jpg 1500w, Content/img/banner_about_960.jpg 960w, Content/img/banner_about_480.jpg 480w"
         sizes="(min-width: 93.75em) 93.75em, 100vw"
         src="Content/img/banner_about_960.jpg" width="100%"
         alt="About Amber" />
</div>

<section class="main container-fluid">

<article>

<div class="row">
  <div class="col-sm-8 col-sm-push-2 no-padding">
    <h1 class="reservation-request">Your Reservation Request #<?php echo '459867' ?></h1>

    <h2 class="reservation-request">You Selected:</h2>

    <div class="row property-selection" >
      <div class="col-xs-12 col-sm-5">
        <img src="<?php echo $result_properties[property_thumb] ?>" width="100%" />
      </div>
      <div class="col-xs-12 col-sm-7 no-padding">
        <h2 class="property-name"><?php echo $result_properties[property_name]  ?></h2>
        <p class="property-address"><?php echo $result_properties[property_address] ?>, <?php echo $result_properties[property_city] ?> <?php echo $result_properties[property_state] ?> <?php echo $result_properties[property_postal_code] ?></p>
      </div>
    </div>
  </div>
</div>


<form id="formID" method="post" name="RequestInfo" action="reservation_request_ty.php">

<div class="row property-selection row-padding">
  <div class="col-sm-2 text-right">
    <label for="StartDate">Start Date:</label>
  </div>
  <div class="col-sm-2 no-padding">
    <input type="text" class="form-control" id="move_in" name="move_in" />
  </div>
</div>

<div class="row property-selection row-padding">
  <div class="col-sm-2 text-right">
    <label for="LengthofStay">Length of Stay:</label>
  </div>
  <div class="col-sm-2 no-padding">
    <input type="text" class="form-control" >
  </div>
</div>
<div class="row property-selection">
  <div class="col-sm-2 text-right">
    
  </div>
  <div class="col-sm-6 no-padding">
    <p>Please provide any comments or questions:</p>
    <textarea id='comments' class="form-control" name='comments' value='' rows="4" cols="70"></textarea>
  </div>
</div>

<div class="row row-padding last-row">
  <div class="col-sm-2">
    
  </div>
  <div class="col-sm-8 no-padding">
  <input class="btn btn-quote" type="submit" value="Submit">
</div>
</div>

</form>
</div>
</div>
    </article>
</section>

<footer>
    <div class="row">
        <div class="copyright col-sm-4 col-sm-push-4">
            <img srcset="Content/img/logo_bw.svg 208w" src="Content/img/logo_bw.png" width="200" alt="Amber Lodging" />
        </div>
        <div class="col-sm-4  col-sm-push-4">
            <div class="social">
                <a href="https://www.linkedin.com/company/amber-lodging-company" target="_blank"><img src="Content/img/si_white_linkedin.svg" class="social-icon" /></a>
                <a href="https://www.instagram.com/amberlodging" target="_blank"><img src="Content/img/si_white_instagram.svg" class="social-icon" /></a>
                <a href="https://twitter.com/SuitesTweets" target="_blank"><img src="Content/img/si_white_twitter.svg" class="social-icon" /></a>
                <a href="https://www.facebook.com/AMBERLODGING/" target="_blank"><img src="Content/img/si_white_facebook.svg" class="social-icon" /></a>
            </div>
        </div>
    </div>
</footer>
    </div>
    <script type="text/javascript" src="/Scripts/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="/Scripts/bootstrap.min.js"></script>
    
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
        var endDate = new Date(dateText); 
        var startDate = new Date($("#move_in").val());
        var ticksDifference = endDate - startDate;
        var difference = Math.round(Math.abs((ticksDifference)/86400000));
        if (ticksDifference < 0) {
            $("#submit").attr('disabled','disabled');
            alert("You have entered an end date that is before the start date. Please enter an end date that comes after the start date.");
            $("#move_out").val("");
        }
        else {
            $("#submit").removeAttr('disabled');
            if (difference < 29) {
                alert("Your requested stay is less than 30 days?  Short term stays may be subject to additional taxes & fees which vary by City, State and County.  Our Reservation team will disclose all fees prior to confirming your stay.");
            }
        }
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
