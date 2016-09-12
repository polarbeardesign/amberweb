<?php 

?>
<!DOCTYPE html>

<html>
<head>
    <title>Offer :: Amber Lodging</title>
    <link rel="stylesheet" href="Content/bootstrap.min.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,800italic,700' rel='stylesheet' type='text/css' />
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
<div class="row row-padding">

<div class="col-sm-8 col-sm-push-2">

<p class="thank-you">Thank you,<br />
we received your request!<br />
We'll be in touch with you soon<br />to finalize your reservation.</p>
<p class="reservation-request">Your Reservation Request #<?php echo '459867' ?></h1>


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

</body>
</html>
