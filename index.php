<!DOCTYPE html>
<html lang="en">
    <head>
    <title>SureStep Risk</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/superfish.css">
    <link rel="stylesheet" href="css/camera.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/camera.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->

    <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script src="js/jquery.mousewheel.min.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/countdown.js"></script>

     
    <script>
    $(window).load( function(){
        jQuery('#camera_wrap_1').camera({
            height: '52.30%',
            pagination: false,
            thumbnails: false,
            playPause: false,
            time: 8000,
            transPeriod: 700,
            fx: 'bottomLeftTopRight',
            loader: 'none',
            minHeight:'200px',
            navigation: true
        });
        
        $('#foo').carouFredSel({
            auto: false,
            responsive: true,
            width: '100%',
            prev: '#prev',
            next: '#next',
            scroll: 1,
            items: {
                height: 'auto',
                width: 300,
                visible: {
                    min: 1,
                    max: 1
                }
            },
            mousewheel: false,
            swipe: {
                onMouse: true,
                onTouch: true
            }
        });
        
        $().UItoTop({ easingType: 'easeOutQuart' });
        
    });
    </script>

     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script src="js/html5shiv.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
     </head>
     <body>
<!--==============================header=================================-->
<header class="p1">
    <div class="container_12">
        <div class="row">
            <div class="grid_12">
                <h1>
                    <a href="index.php">
                        <img src="images/new/logo_big.png" alt="maturity consulting company">
                    </a>
                </h1>
               <nav>
                    <ul class="sf-menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a class="current" href="#">Solutions</a>
                            <ul>
                                <li><a href="solutions/data.html">Data</a></li>
                                <li><a href="solutions/grc.html">GRC</a></li>
                                <li><a href="solutions/financial-risk.html">Financial Risk</a></li>
                                <li><a href="solutions/cloud.html">Cloud</a></li>
                           </ul>
                        </li>
                        <li><a href="#">Services</a>
                            <ul>
                                <li><a href="services/manages-services.html">Managed Services</a></li>
                                <li><a href="services/implementation.html">Implementation</a></li>
                                <li><a href="services/training.html">Training</a></li>
                           </ul>
                        </li>
                        <li><a href="about-us/about-us.html">About us</a></li>
                        <li><a href="contact-us/contact-us.html">Contact us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="grid_12 slider clearfix">
                <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                    <div data-src="images/slide-1.jpg">
                        <div class="camera_caption fadeIn">
                            <span>Elite data solutions &amp; services</span>
                            <span>increase your <br> business <br> performance</span>
                        </div>
                    </div>
                    <div data-src="images/slide-2.jpg">
                        <div class="camera_caption fadeIn">
                            <span>GRC Solutions</span>
                            <span><br>Regulatory &amp; Operational risk management</span>
                        </div>
                    </div>
                    <div data-src="images/slide-4.jpg">
                        <div class="camera_caption fadeIn">
                            <span>Financial Risk Solutions</span>
                            <span>Credit, Portfolio <br> &amp; liquidity risk management</span>
                        </div>
                    </div>
                    <div data-src="images/slide-3.jpg">
                        <div class="camera_caption fadeIn">
                            <span>Cloud &amp; virtual datacenter solutions</span>
                            <span>Unlock the potential<br>of your enterprise</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-1">
            <div class="grid_3">
                <a href="solutions/data.html" class="box-1 bg-box-4">
                    <div class="maxheight inside">
                    powerful, turnkey data solutions
                    </div>
                </a>
            </div>
            <div class="grid_3">
                <a href="solutions/data.html" class="box-1 bg-box-1">
                    <div class="maxheight inside">
                    Cloud Solutions &amp; Application management
                    </div>
                </a>
            </div>
            <div class="grid_3">
                <a href="solutions/grc.html" class="box-1 bg-box-2">
                    <div class="maxheight inside">
                    Governance, risk & compliance solutions
                    </div>
                </a>
            </div>
            <div class="grid_3">
                <a href="solutions/financial-risk.html" class="box-1 bg-box-3">
                    <div class="maxheight inside">
                    financial risk management tools
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>

<!--=======content================================-->
<section class="content main-content">
    <div class="container_12">
        <div class="row row-1">
            <div class="grid_12 count-down">
                <a href="#" class="bg-5 clearfix">
                    <div class="fleft count-down-header-body rail-padding">
                        <div class="text-1">GDPR is almost here! Get Compliant Today!<span></span></div>
                    </div>
                    <div class="fright rail-padding">
                        <h2 class="count-down-header">Get Compliant today!</h2>
                        <div class="text-2 count-down-header-text">
                            <div class="count-down-time">
                                <span id="days">00</span>
                                <br>
                                <span class="count-down-time-denomination">Days</span>
                            </div>
                            <div class="count-down-time">
                                <span id="hours">00</span>
                                <br>
                                <span class="count-down-time-denomination">Hours</span>
                            </div>
                            <div class="count-down-time">
                                <span id="minutes">00</span>
                                <br>
                                <span class="count-down-time-denomination">Minutes</span>
                            </div>
                            <div class="count-down-time">
                                <span id="seconds">00</span>
                                <br>
                                <span class="count-down-time-denomination">Seconds</span>
                            </div>
                            <!-- <span>
                                <span class="count-down-time" id="days">00</span>d:<span class="count-down-time" id="hours">00</span>h:<span class="count-down-time" id="minutes">00</span>m:<span class="count-down-time" id="seconds">00</span>s
                            </span> -->
                        </div>
                    </div>
                    
                </a>
            </div>
        </div>
        <div class="row row-2 p2">
            <a href="services/manages-services.html" class="grid_5 box-8">
                <div class="bg-box-1 img-ind"><img src="images/page-1_img-2.png" alt="" ></div>
                <div class="box-1 bg-box-1">
                    <div class="inside">
                        <div><h2>Managed Services</h2></div>
                        <div class="text-3">SureStep offers complete end-to-end service engagements. Every engagement is scoped for each client.</div>
                    </div>
                </div>
            </a>
            <div class="grid_7 block-1">
                <img src="images/new/stock/single-view.jpg" alt="Learn about IBM Single View of Risk" class="fleft">
                <a href="https://singleviewofriskinfo.weebly.com" class="box-1 bg-box-4">
                    <div class="inside"><h2>Learn about IBM Single View of Risk</h2></div>
                </a>
            </div>
        </div>
        <div class="row row-2 p2">
            <a href="services/implementation.html" class="grid_5 box-8">
                <div class="bg-box-2 img-ind"><img src="images/page-1_img-4.png" alt="" ></div>
                <div class="box-1 bg-box-2">
                    <div class="inside">
                        <div><h2>Customized Implementations</h2></div>
                        <div class="text-3">Every business is different. We make sure to take every client’s requirements and requests into account in every new engagement.</div>
                    </div>
                </div>
            </a>
            <div class="grid_7 list_carousel responsive clearfix">
                <ul id="foo" class="clearfix">
                    <li>
                        <div class="box-1 bg-box-5 maxheight1">
                            <div class="inside clearfix">
                                <div class="w1">
                                    <div class="box-6">
                                        <span class="text-4">May</span>
                                        <span class="text-5">21</span>
                                    </div>
                                    <div class="color-2"><strong>Informatica World, The Venetian, Las Vegas
</strong></div>
                                </div>
                                <div class="w1">
                                    Join SureStep at Informatica World this year to talk about our custom Informatica governance offerings, customer success stories, and our continuing partnership with Informatica.
                                    <a href="#" class="btn">read more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="arrows">               
                    <a id="prev" class="prev" href="#"></a>
                    <a id="next" class="next" href="#"></a>
                </div>
            </div>
        </div>
        <div class="row row-2 p2 p1">
            <a href="services/training.html" class="grid_5 box-8">
                <div class="bg-box-3 img-ind"><img src="images/page-1_img-5.png" alt="" ></div>
                <div class="box-1 bg-box-3">
                    <div class="inside">
                        <div><h2>Training</h2></div>
                        <div class="text-3">Our training services give our customers the necessary expertise to be self sufficient</div>
                    </div>
                </div>
            </a>
            <div class="grid_7">
                <div class="grid_inside">
                    <div class="grid_4 bg-box-5 box-1">
                        <div class="inside">
                            <h2>Partners</h2>
                            <div>SureStep is constantly reviewing the market leaders, their technology and investment roadmaps to ensure it provides only the best options to our customers.</div>
                            <a href="partners/partners.html" class="btn">see partners</a>
                        </div>
                    </div>
                    <div class="grid_3 box-1 bg-box-6 clickable goToContact">
                        <div class="inside">
                            <strong>Contact Us:</strong>
                            <ul class="list-1">
                                <li><a href="#">Data Audits</a></li>
                                <li><a href="#">Risk Assessments</a></li>
                                <li><a href="#">Demonstrations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=======footer=================================-->

<footer>
    <div class="container_12">
        <div class="row">
            <div class="grid_3 logos clearfix">
                <a href="partners/partners.html"><img src="images/new/Footer_logo.png" alt="Partners"></a>
            </div>
            <div class="grid_2 w2">
                <ul class="list-2">
                    <li><a href="services/manages-services.html">Manages Services</a></li>
                    <li><a href="services/implementation.html">Implementation</a></li>
                    <li><a href="services/training.html">Training</a></li>
                </ul>    
            </div>
            <div class="grid_2 w2">
                <ul class="list-2">
                    <li><a href="solutions/data.html">Data</a></li>
                    <li><a href="solutions/grc.html">GRC</a></li>
                    <li><a href="solutions/financial-risk.html">Financial Risk</a></li>
                    <li><a href="solutions/cloud.html">Cloud</a></li>
                </ul>    
            </div>
            <div class="grid_2 w2">
                <ul class="list-2">
                    <li><a href="about-us/about-us.html">About Us</a></li>
                    <li><a href="partners/partners.html">Partners</a>
                    <li><a href="terms/privacy-policy.html">Privacy Policy</a>
                    
                </ul>                
            </div>
            <div class="grid_3 f-logo text-center">
                <a href="index.php"><img src="images/new/logo-foot.png" alt="" /></a>
                <div>&copy; 2018 | <a href="terms/privacy-policy.html">Privacy Policy</a></div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>