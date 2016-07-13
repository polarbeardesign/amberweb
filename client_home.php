
<!DOCTYPE html>



<html>

<head>

    <title>Reserve Now :: Amber Lodging</title>

    <link rel="stylesheet" href="Content/bootstrap.min.css" type="text/css" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,700' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="Content/themes/base/all.css" type="text/css" />

    <link rel="stylesheet" href="Content/style.css" type="text/css" media="screen" />

    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />

</head>

<body>

        <div class="container-fluid">

        <div class="row title-bar">

            <div class="alc col-sm-6"><a href="/">Amber Lodging Company</a></div>

        <div class="col-sm-4 text-right">
          <a href="https://www.linkedin.com/company/amber-lodging-company" target="_blank"><img src="Content/img/1467834321_online_social_media_linked_in.png" class="social-icon" /></a>
          <a href="https://www.instagram.com/amberlodging" target="_blank"><img src="Content/img/1467834290_instagram_online_social_media.png" class="social-icon" /></a>
          <a href="https://twitter.com/SuitesTweets" target="_blank"><img src="Content/img/1467834415_online_social_media_twitter.png" class="social-icon" /></a>
          <a href="https://www.facebook.com/AMBERLODGING/" target="_blank"><img src="Content/img/1467834410_facebook_online_social_media.png" class="social-icon" /></a>
        </div>   

            <div class="client-name col-sm-2 text-right">

                <div class="user_dropdown_menu">

                    <a onclick="myFunction()" class="droplink">Jim Ivanoff <span class="caret"></span></a>

                    <ul id="userDropdown" class="dropdown-content text-left">

                        <li><a href="/ReserveNow">New Search</a></li>

                        <li><a href="/ReserveNowAdmin">Admin Home</a></li>

                        <li><a href="/ReserveNowAdmin/ViewUsers">View Users</a></li>

                        <li><a href="/ReserveNow/Logout">LOG OFF</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </div>



    

<div id="container-fluid">

    <div class="banner client-home">

        <h1 class="search-banner">We Hold Leases On 5 Continents.</h1>

        <h2 class="search-banner">And if you want to book something in Antarctica, that makes 6.</h2>

    </div>

    <div class="search-bar container-fluid">

<form action="/ReserveNow/Results" id="search" method="post" name="search">            <div class="row">

                <div class="col-sm-3">

                    <div class="input-group">

                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>

                        <input type="text" class="form-control" id="destination" name="Destination" placeholder="Zip Code of Destination (Select from list)" onfocus="geolocate();" />

                    </div>

                </div>

                <div class="col-sm-2">

                    <div class="input-group">

                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>

                        <input type="text" class="form-control" id="move_in" name="move_in" placeholder="Move In?" />

                    </div>

                </div>

                <div class="col-sm-2">

                    <div class="input-group">

                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>

                        <input type="text" class="form-control" id="move_out" name="move_out" placeholder="Move Out?" onblur="validateDates(this.value);" />

                    </div>

                </div>

                <div class="col-sm-2">

                    <div class="input-group">

                        <div class="input-group-addon"><i class="fa fa-home"></i></div>

                        <select class="form-control" id="size" name="size"><option value="1">1+ Bedrooms</option>

<option value="2">2+ Bedrooms</option>

<option value="3">3+ Bedrooms</option>

</select>

                    </div>

                </div>

                <div class="col-sm-2">

                    <div class="input-group">

                        <div class="input-group-addon"><i class="fa fa-user"></i></div>

                        <select class="form-control" id="guests" name="guests"><option value="1">1+ Guests</option>

<option value="2">2+ Guests</option>

<option value="3">3+ Guests</option>

</select>

                    </div>

                </div>

                <div class="col-sm-1">

                    <input type="submit" value="Search" id="submit" class="btn btn-primary search-button">

                </div>

            </div>

            <input type="hidden" id="zipCode" name="zipCode" />

            <input type="hidden" id="locality" name="locality" />

            <input type="hidden" id="nationality.Long" name="nationality.Long" />

            <input type="hidden" id="nationality.Short" name="nationality.Short" />

            <input type="hidden" id="geoCode.Latitude" name="geoCode.Latitude" />

            <input type="hidden" id="geoCode.Longitude" name="geoCode.Longitude" />

</form>    </div>

    <section class="specials">

        <article>

            <h1 class="feature-area">Great Properties In Your Area</h1>

            <h2 class="feature-area">You want to stay in a castle? We've made that happen.</h2>

            <div class="container-fluid">

                <div class="row feature-properties">

                    <div class="col-md-3">

                        <div class="row">

                            <img src="Content/img/property/static_promo/Solaire_315X225.jpg" width="100%" />

                        </div>

                        <div class="row feature-details">

                            <div class="col-xs-6">

                                <h1 class="feature-location">Solaire</h1>

                                <div class="feature-id">San Francisco, CA</div>

                                <div class="feature-size"></div>

                            </div>

                            <div class="col-xs-6 text-right">

                                <div class="location-price">$205.00 <a href="#" class="currency-denominator" title="Prices quoted in USD, pricing may change due to currency fluctuations.">USD</a></div>

                                <div class="small-print">avg/night</div>

                            </div>

                            <div class="text-right">

<form action="/ReserveNow/Details/5987" method="post">                                    <input type="hidden" name="Destination" value="299 Fremont St." />

                                    <input type="hidden" name="zipCode" value="94105" />

                                    <input type="hidden" name="locality" value="San Francisco" />

                                    <input type="hidden" name="nationality.Long" value="USA" />

                                    <input type="hidden" name="nationality.Short" value="USA" />

                                    <input type="hidden" name="geoCode.Latitude" value="37.7890183" />

                                    <input type="hidden" name="geoCode.Longitude" value="-122.3915063" />

                                    <input type="hidden" name="guests" value="1" />

                                    <input type="hidden" name="size" value="1" />

                                    <button type="submit" class="btn btn-primary view-details-sm">View Details</button>

</form>                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="row">

                            <img src="Content/img/property/static_promo/Carmel-The-Village_slide-4_315X225.jpg" width="100%" />

                        </div>

                        <div class="row feature-details">

                            <div class="col-xs-6">

                                <h1 class="feature-location">Carmel the Village</h1>

                                <div class="feature-id">Mountain View, CA</div>

                                <div class="feature-size"></div>

                            </div>

                            <div class="col-xs-6 text-right">

                                <div class="location-price">$180.00 <a href="#" class="currency-denominator" title="Prices quoted in USD, pricing may change due to currency fluctuations.">USD</a></div>

                                <div class="small-print">avg/night</div>

                            </div>

                            <div class="text-right">

<form action="/ReserveNow/Details/5989" method="post">                                    <input type="hidden" name="Destination" value="555 San Antonio Rd" />

                                    <input type="hidden" name="zipCode" value="94040" />

                                    <input type="hidden" name="locality" value="Mountain View" />

                                    <input type="hidden" name="nationality.Long" value="USA" />

                                    <input type="hidden" name="nationality.Short" value="USA" />

                                    <input type="hidden" name="geoCode.Latitude" value="37.3785351" />

                                    <input type="hidden" name="geoCode.Longitude" value="-122.086585" />

                                    <input type="hidden" name="guests" value="1" />

                                    <input type="hidden" name="size" value="1" />

                                    <button type="submit" class="btn btn-primary view-details-sm">View Details</button>

</form>                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="row">

                            <img src="Content/img/property/static_promo/Lawrence_Station_315X225.jpg" width="100%" />

                        </div>

                        <div class="row feature-details">

                            <div class="col-xs-6">

                                <h1 class="feature-location">Lawrence Station</h1>

                                <div class="feature-id">Sunnyvale, CA</div>

                                <div class="feature-size"></div>

                            </div>

                            <div class="col-xs-6 text-right">

                                <div class="location-price">$150.00 <a href="#" class="currency-denominator" title="Prices quoted in USD, pricing may change due to currency fluctuations.">USD</a></div>

                                <div class="small-print">avg/night</div>

                            </div>

                            <div class="text-right">

<form action="/ReserveNow/Details/5988" method="post">                                    <input type="hidden" name="Destination" value="1281 Lawrence Station Rd" />

                                    <input type="hidden" name="zipCode" value="94089" />

                                    <input type="hidden" name="locality" value="Sunnyvale" />

                                    <input type="hidden" name="nationality.Long" value="US" />

                                    <input type="hidden" name="nationality.Short" value="US" />

                                    <input type="hidden" name="geoCode.Latitude" value="37.4067052" />

                                    <input type="hidden" name="geoCode.Longitude" value="-121.996402" />

                                    <input type="hidden" name="guests" value="1" />

                                    <input type="hidden" name="size" value="1" />

                                    <button type="submit" class="btn btn-primary view-details-sm">View Details</button>

</form>                            </div>

                        </div>

                    </div>

                    <div class="col-md-3">

                        <div class="row">

                            <img src="Content/img/property/static_promo/Villages_at_the_Domain_315X225.jpg" width="100%" />

                        </div>

                        <div class="row feature-details">

                            <div class="col-xs-6">

                                <h1 class="feature-location">Villages at Domain</h1>

                                <div class="feature-id">Austin, TX</div>

                                <div class="feature-size"></div>

                            </div>

                            <div class="col-xs-6 text-right">

                                <div class="location-price">$98.00 <a href="#" class="currency-denominator" title="Prices quoted in USD, pricing may change due to currency fluctuations.">USD</a></div>

                                <div class="small-print">avg/night</div>

                            </div>

                            <div class="text-right">

<form action="/ReserveNow/Details/5986" method="post">                                    <input type="hidden" name="Destination" value="11011 Domain Drive" />

                                    <input type="hidden" name="zipCode" value="78759" />

                                    <input type="hidden" name="locality" value="Austin" />

                                    <input type="hidden" name="nationality.Long" value="USA" />

                                    <input type="hidden" name="nationality.Short" value="USA" />

                                    <input type="hidden" name="geoCode.Latitude" value="30.401356" />

                                    <input type="hidden" name="geoCode.Longitude" value="-97.7525352" />

                                    <input type="hidden" name="guests" value="1" />

                                    <input type="hidden" name="size" value="1" />

                                    <button type="submit" class="btn btn-primary view-details-sm">View Details</button>

</form>                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </article>

    </section>

</div>



<footer>

    <div class="copyright"><img srcset="Content/img/logo_bw.svg 208w" src="Content/img/logo_bw.png" width="200" alt="Amber Lodging" /></div>

</footer>    <script type="text/javascript" src="/Scripts/jquery-2.2.3.min.js"></script>

    <script type="text/javascript" src="/Scripts/bootstrap.min.js"></script>

    <script type="text/javascript" src="/Scripts/jquery-ui-1.11.4.min.js"></script>

    

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

    $("#move_in").datepicker({ minDate: +2, maxDate: "+1Y" });

    $("#move_out").datepicker({ minDate: +3, maxDate: "+1Y",

        onSelect: function(dateText) { 

            validateDates(dateText);

        }

    });

</script>

<script>

    var myAutoComplete;

    function initAutocomplete() {

        myAutoComplete = new google.maps.places.Autocomplete((document.getElementById("destination")), { types: [] });

        myAutoComplete.addListener('place_changed', setGeoCodeAndZip);

    }

    function setGeoCodeAndZip() {

        var place = myAutoComplete.getPlace();

        var hasPostalCode = false;

        var hasCountryLong = false;

        var hasCountryShort = false;

        var hasCity = false;

        var zipCode = '';

        var city = '';

        var countryLong = '';

        var countryShort = '';

        if (place.address_components) {

            for (i = 0; i < place.address_components.length; i++) {



                if (place.address_components[i].types == "postal_code") {

                    hasPostalCode = true;

                    zipCode = place.address_components[i].short_name;

                }

                if (place.address_components[i].types == "locality,political") {

                    hasCity = true;

                    city = place.address_components[i].long_name;

                }

                if (place.address_components[i].types == "country,political") {

                    hasCountryLong = true;

                    hasCountryShort = true;

                    countryLong = place.address_components[i].long_name;

                    countryShort = place.address_components[i].short_name;

                }

            }

        }

        var latitude = place.geometry.location.lat();

        var longitude = place.geometry.location.lng();

        document.getElementById("geoCode.Latitude").value = latitude;

        document.getElementById("geoCode.Longitude").value = longitude;

        document.getElementById("zipCode").value = (hasPostalCode) ? zipCode : "UnknownZip";

        document.getElementById("locality").value = (hasCity) ? city : "UnknownCity";

        document.getElementById("nationality.Long").value = (hasCountryLong) ? countryLong : "UnknownCountry";

        document.getElementById("nationality.Short").value = (hasCountryShort) ? countryShort : "UnknownCountry";

    }

    function geolocate() {

        if (navigator.geolocation) {

            navigator.geolocation.getCurrentPosition(function (position) {

                var geolocation = {

                    lat: position.coords.latitude,

                    lng: position.coords.longitude

                };

                var circle = new google.maps.Circle({

                    center: geolocation,

                    radius: position.coords.accuracy

                });

                myAutoComplete.setBounds(circle.getBounds());

            });

        }

    }

    function chooseFirstItem() {

        $(".pac-container").hide();

        var firstItem = $(".pac-container .pac-item:first").text();

        var geocoder = new google.maps.Geocoder();

        geocoder.geocode({"address":firstItem }, function(results, status) {

            if (status == google.maps.GeocoderStatus.OK) {

                var lat = results[0].geometry.location.lat(), lng = results[0].geometry.location.lng();

                var hasPostalCode = false;

                var hasCountryLong = false;

                var hasCountryShort = false;

                var hasCity = false;

                var zipCode = '';

                var city = '';

                var countryLong = '';

                var countryShort = '';

                if (results[0].address_components) {

                    for (i = 0; i < results[0].address_components.length; i++) {



                        if (results[0].address_components[i].types == "postal_code") {

                            hasPostalCode = true;

                            zipCode = results[0].address_components[i].short_name;

                        }

                        if (results[0].address_components[i].types == "locality,political") {

                            hasCity = true;

                            city = results[0].address_components[i].long_name;

                        }

                        if (results[0].address_components[i].types == "country,political") {

                            hasCountryLong = true;

                            hasCountryShort = true;

                            countryLong = results[0].address_components[i].long_name;

                            countryShort = results[0].address_components[i].short_name;

                        }

                    }

                }

                document.getElementById("geoCode.Latitude").value = lat;

                document.getElementById("geoCode.Longitude").value = lng;

                document.getElementById("zipCode").value = (hasPostalCode) ? zipCode : "UnknownZip";

                document.getElementById("locality").value = (hasCity) ? city : "UnknownCity";

                document.getElementById("nationality.Long").value = (hasCountryLong) ? countryLong : "UnknownCountry";

                document.getElementById("nationality.Short").value = (hasCountryShort) ? countryShort : "UnknownCountry";

                $("#destination").val(firstItem);

            }

        });

    }

    $("#destination").focusin(function () {

        $(document).keypress(function (e) {

            if (e.which == 13) {

                chooseFirstItem();

            }

        });

    });

    $("#destination").focusout(function () {

        if(!$(".pac-container").is(":focus") && !$(".pac-container").is(":visible")) {

            chooseFirstItem();

        }

    });

    $(function () {

        $(document).tooltip({

            position: {

                my: "center bottom-20",

                at: "center top",

                using: function (position, feedback) {

                    $(this).css(position);

                    $("<div>")

                      .addClass("arrow")

                      .addClass(feedback.vertical)

                      .addClass(feedback.horizontal)

                      .appendTo(this);

                }

            }

        });

    });

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGQkszG5eR_cCeqcFqXtFR7qZJ8_jq9I4&libraries=places&callback=initAutocomplete" async defer></script>



    <script>

        function myFunction() { document.getElementById("userDropdown").classList.toggle("show"); }

        window.onclick = function (event) {

            if (!event.target.matches('.droplink')) {



                var dropdowns = document.getElementsByClassName("dropdown-content");

                var i;

                for (i = 0; i < dropdowns.length; i++) {

                    var openDropdown = dropdowns[i];

                    if (openDropdown.classList.contains('show')) {

                        openDropdown.classList.remove('show');

                    }

                }

            }

        }

    </script>

</body>

</html>

