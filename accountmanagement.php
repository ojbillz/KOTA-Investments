<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'example@bootstrapbay.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>

<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!DOCTYPE html>
<html lang="en-US">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>
            KOTA Investments: Account Management        
        </title><!-- Behavioral Meta Data -->
        <meta content=yes" name="apple-mobile-web-app-capable">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- Core Meta Data -->
        <meta content="Isaac Kalonji" name="author">
        <meta content="Welcome to the Future of Finance! KOTA Investments." name="description">
        <meta content="KOTA Investments" name="keywords"><!-- Open Graph Meta Data -->
        <meta content="The most promising hedge fund!">
        <meta content="Isaac Kalonji">
        <meta content="Isaac Kalonji">
        <meta content="website">
        <meta content="index.html"><!-- Twitter Card Meta Data -->
        <meta content="summary" name="twitter:card">
        <meta content="@KOTAInvestments" name="twitter:site">
        <meta content="@IsaacShilo" name="twitter:creator">
        <meta content="KOTA Investments" name="twitter:title">
        <meta content="KOTA Investments is the next up & coming hedge fund." name="twitter:description">

        <link href="favicon.png" rel="shortcut icon" type="image/png">

        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!-- CSS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'><!-- Styles -->
        <link href="css/loader.css" rel="stylesheet" type="text/css">
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
        <link href="css/plugins.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
            <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <!-- Javascript -->

        <script src="js/jquery.js"></script>
    </head>

<body>


    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="header-transparent header-fullwidth header-plain dark">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.html" class="logo" data-dark-logo="images/logo-dark.png">
                            <img src="images/logo.png" alt="KOTA Logo">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Top Search Form-->
                    <div id="top-search">
                        <form action="search-results-page.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--end: Top Search Form-->

                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <!--top search-->
                                <a id="top-search-trigger" href="#" class="toggle-item">
                                    <i class="fa fa-search"></i>
                                    <i class="fa fa-close"></i>
                                </a>
                                <!--end: top search-->
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->
                    <div id="mainMenu" class="light">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a></li>

                                    <!-- Signals Navigation -->
                                    <li class="dropdown"><a href="signals1.html">Signals</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="signals1.html">Premium Signals for 1 Month</a></li>
                                            <li><a href="signals2.html">Premium Signals for 2 Months </a></li>
                                            <li><a href="signals6.html">Premium Signals for 6 Months</a></li>
                                            <li><a href="signals12.html"></i>Premium Signals for 12 Months </a></li>
                                            

                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="courses1.html">Courses</a>
                                        <!-- dropdown goes here -->
                                    </li>

                                    <!-- Account Management Navigation -->
                                    <li class="dropdown"> <a href="accountmanagement.html">Account Management</a>
                                    </li>

                                    <!-- FAQ -->
                                    <li class="dropdown"><a href="faq.html">FAQ</a>


                                    <!-- Contact Us Navigation --> 
                                    <li class="dropdown mega-menu-item"> <a href="contactus.html">Contact Us</a>
                                        

                                    </li> 
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <!-- end: Header -->

        <!-- COMPANY -->
        <section class="p-b-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-20">
                        <div class="heading heading text-center">
                            <h2>KOTA INVESTMENTS</h2>
                            <span class="lead">Account Management. <br>
                            This is for those, who are less experienced or those who are not interested in learning or trading Forex. One of our KOTA Experts control and trade on your account using backed and calculated analysis in order to maximise profit and reduce risk. Daily Growth is projected at atleast 50% per week.</span>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- end: COMPANY -->

        <!-- COUNTERS -->
        <section class="background-grey p-t-40 p-b-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="fa fa-gift"></i></a>
                            </div>
                            <h3>80% Success Rate</h3>
                            <p>Our Signals have a 80%-90% success rate. </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="fa fa-plane"></i></a>
                            </div>
                            <h3> Worldwide Access </h3>
                            <p> Our services are available world wide, no matter the country you are in! Fancy making some money while on holiday?</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="icon-box effect small clean">
                            <div class="icon">
                                <a href="#"><i class="fa fa-history"></i></a>
                            </div>
                            <h3> 24/7 Money making - no matter the season </h3>
                            <p> Forex markets do not go on holiday! Markets can be traded no matter the circumstance! Brexit? Lets trade against the pound - money can be made whether the economy is doing well or not </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


 
        <!-- SERVICES -->
        <section>
            <div class="container">
                
                <script type="text/javascript" defer src="//www.123contactform.com/embed/3081088.js" data-role="form" data-default-width="650px"></script>
<p>Powered by <a class="footerLink13" title="123ContactForm" href="http://www.123contactform.com">123ContactForm</a> | <a style="font-size:small!important;color:#000000!important; text-decoration:underline!important;" title="Looks like phishing? Report it!" href="http://www.123contactform.com/sfnew.php?s=123contactform-52&control119314=http:///contact-form--3081088.html&control190=Report%20abuse" rel="nofollow">Report abuse</a></p>



                <!--<form action="mailto:kotawolves.ent@gmail.com" method="post" role = "form" enctype="text/plain" action="contact.php">
                <div class="form-group row">
                      <label for="name" class="col-2 col-form-label">Name</label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Please Enter Your Name" id="name">
                        <?php echo "<p class='text-danger'>$errName</p>";?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-2 col-form-label">Email</label>
                      <div class="col-10">
                        <input class="form-control" type="email" placeholder="Please Enter Your Email" id="email">
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="name" class="col-2 col-form-label">Telegram Username (if you have one)</label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Please Enter Your Telegram Username" id="name">
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-url-input" class="col-2 col-form-label">City</label>
                      <div class="col-10">
                        <input class="form-control" type="text" placeholder="Please Enter Your City of Origin" id="name">
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                      <div class="col-10">
                        <input class="form-control" type="tel" placeholder="44-(755)-555-5555" id="example-tel-input">
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                      </div>
                    </div>
                    
                      <button type="submit" class="btn btn-primary">
                             Send <i class="fa fa-paper-plane"></i> 
                    </div>
                </form>-->
            </div>

        </section>
        <!-- end: SERVICES -->


        

        <!-- Footer -->
         <footer id="footer" class="footer-light">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Footer widget area 1 -->
                            <div class="widget clearfix widget-contact-us" style="background-image: url('images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                                <h4>Contact Us</h4>
                                <ul class="list-icon">
                                    <li><i class="fa fa-map-marker"></i> Where We Are Based</li>
                                    <li><i class="fa fa-phone"></i> (+44) 456-7890 </li>
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:info@kotainvestments.co.uk">info@kotainvestments.co.uk</a> </li>
                                    <li>
                                        <br>
                                        <i class="fa fa-clock-o"></i>Open <strong>All Day</strong><strong>Any Day</strong>
                                        <br>Even <strong>Saturdays </strong>and <strong>Sundays</strong> </li>
                                </ul>
                                <!-- Social icons -->
                                <div class="social-icons social-icons-border float-left m-t-20">
                                    <ul>
                                        <li class="social-instagram"><a href="www.instagram/KOTAInvestments"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <!-- end: Social icons -->
                            </div>
                            <!-- end: Footer widget area 1 -->
                        </div>
                        <div class="col-md-2">
                            <!-- Footer widget area 2 -->
                            <div class="widget">
                                <h4>Quick LInks</h4>
                                <ul class="list-icon list-icon-arrow">
                                    <li><a href="signals1.html">Signals</a></li>
                                    <li><a href="courses1.html">Courses</a></li>
                                    <li><a href="home-particles.html">Home</a></li>
                                    <li><a href="accountmanagement.html">Account Management</a></li>
                                    <li><a href="contactus.html">Contact Us</a></li>
                                    <li><a href="sitemap.html">Sitemap</a></li>
                                </ul>
                            </div>
                            <!-- end: Footer widget area 2 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 3 -->
                            <div class="widget">
                                <h4>Our Names</h4>
                                <p> Isaac Kalonji <br> Emmanuel Ojo-Williams <br> Kourosh Afshari </p>
                            </div>
                            <!-- end: Footer widget area 3 -->
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; Created with <i class="fa fa-heart"></i> in London. 2017 KOTA Investments. All Rights Reserved.<a href="#" target="_blank"></a> </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->

    </div>
    <!-- end: Wrapper -->
    
        <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

  <!--Plugins-->
<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>

<!--Template functions-->
<script src="js/functions.js"></script>

<!-- Twitter -->
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

<!-- Partical Js files  -->
<script src="js/plugins/components/particles.js" type="text/javascript"></script>
<script src="js/plugins/components/particles-animation.js" type="text/javascript"></script>
<!-- end: Partical Js files  -->
</body>

</html>