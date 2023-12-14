<!doctype html>
<html lang="en">
<head>
    <!-- important for compatibility charset -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>NR Consultancy | Contact</title>
    
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <!-- important for responsiveness remove to make your site non responsive. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- FavIcon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    
    <!-- Animation CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />
    
    <!-- Foundation CSS File -->
    <link rel="stylesheet" type="text/css" href="css/foundation.min.css" media="all" />
    
    <!-- Font Awesome CSS File -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
    
    <!-- Owl Carousel CSS File -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="all" />
    
    <!-- Lightbox IMage Gallery Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css" media="all" />
    
    <!-- Theme Styles CSS File -->
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    
    <!-- Google Fonts For Stylesheet --> 
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:400,700%7CRoboto+Slab:400%7CRoboto:900,700" rel="stylesheet" type="text/css" />
    
    <!-- REVOLUTION STYLE SHEETS Delete If not using Revolution Slider -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="lib/revolution/css/navigation.css">
</head>

<body>
	<!-- Page Preloader -->
                <!--<div id="loading">-->
                <!--    <div id="loading-center">-->
                <!--        <div id="loading-center-absolute">-->
                <!--        	<div id="object"></div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
    <!-- Page Preloader Ends /-->
    
	<!-- Main Container -->
    <div class="main-container">
    	
        <!-- Top Bar Starts -->
            <?php include "blocks/top-bar.php"; ?>
        <!-- Top bar Ends /-->
        
        <!-- Header Starts -->
            <?php include "blocks/header.php"; ?>
        <!-- Header Ends /-->
        
        <!-- Title Section -->
        <div class="title-section module">
            <div class="row">
        
                <div class="small-12 columns">
                    <h1>Contact Us</h1>
                </div><!-- Top Row /-->
        
                <div class="small-12 columns">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact</a></li>
                        <!--<li class="disabled">Gene Splicing</li>-->
                        <!--<li><span class="show-for-sr">Current: </span> Cloning</li>-->
                    </ul><!-- Breadcrumbs /-->
                </div><!-- Bottom Row /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Title Section Ends /-->
        
        <!-- Content section -->
        <div class="content-section module">
        	<div class="row">
            	
                <!-- Map Area -->
                <div class="map-wrapper module">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d228.18320942479392!2d90.3665973!3d23.7854588!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14c15432aa5%3A0xdbf30cb574ad4519!2sNR%20Consultancy!5e0!3m2!1sen!2sbd!4v1697563129361!5m2!1sen!2sbd" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Map Ends /-->
                
                <!-- Contact content area -->
                <div class="content-wrapper">
                
                	<div class="medium-3 small-12 columns">
                    	<div class="contact-info">
                        	<img src="images/help/contact.png" alt="Contact" />
                        </div>
                        <div class="contact-info">
                        	<h4>Meet our Company</h4>
                            <p>Grace Naimul Complex [1st Floor] 222/1B, South Pirerbag (Amtola bazar, 60 feet), Mirpur-1, Dhaka</p>
                        </div>
                        <div class="contact-info">
                        	<h4>Get in Touch</h4>
                            <p><strong>Office: </strong>017-0066-1971<br></p>
                            <p><strong>Office: </strong>01733-0999-008<br></p>
                        </div>
                        <div class="contact-info">
                        	<h4>Follow Us</h4>
	                         <div class="socialicons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
	                        </div><!-- Social Icons /-->
                        </div>
                    </div><!-- Left column Ends /-->
                	
                    <div class="medium-9 small-12 columns">
                    	<h2>Please fill the form below to contact us</h2>
                        <div class="contact-form">
							<form action="email_processor.php?ref=contact.html" method="post">
                        	<div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	Your name*
                                        <input type="text" value="" required name="first-name" placeholder="Your name here..." />
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Your Last Name
                                        <input type="text" value="" name="last-name" placeholder="Your last name here..." />
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->
                            
                            <div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	Email *
                                        <input type="text" name="your-email" value="" placeholder="Enter your email ..." />
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Subject *
                                        <input type="text" required name="subject" value="" placeholder="Reason contacting us ..." />
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->
                            
                            <div class="row">
                            	<div class="medium-6 small-12 columns">
                                	<label>
                                    	Select a Course
                                        <select name="course">
                                        	<option value="1">Chose Course</option>
                                            <option value="2">Course One</option>
                                            <option value="3">Course Two</option>
                                        </select>
                                    </label>    
                                </div>
                                <div class="medium-6 small-12 columns">
                                	<label>
                                    	Select Teacher
                                        <select name="teacher">
                                        	<option value="1">Chose Teacher</option>
                                            <option value="2">Teacher One</option>
                                            <option value="3">Teacher Two</option>
                                        </select>
                                    </label>
                                </div>
                            </div><!-- Row Ends /-->
                            
                            <div class="row">
                            	<div class="medium-12 small-12 columns">
                                	<label>
                                    	Your Comments 
                                        <textarea rows="10" required name="your-message" placeholder="Your message ..."></textarea>
                                    </label>    
									<input type="hidden" name="contact_form" value="YES" />
                                	<input type="submit" class="button primary" value="Send your message" />
                                </div>
                            </div><!-- Row Ends /-->
							</form>
                        </div><!-- Contact form /-->
                    </div><!-- Right Column Ends /-->
                    <div class="clearfix"></div>
                </div>
                <!-- Contact Content Area /-->
                
            </div><!-- Row /-->
        </div>
        <!-- Content Section Ends /-->
        
        
        <!-- Call to Action box -->
            <?php include "blocks/call2action.php"; ?>
        <!-- Call to Action End /-->
        
        <!-- Footer -->
            <?php include "blocks/footer.php"; ?>
        <!-- Footer Ends here /-->

    </div>
    <!-- Main Container /-->
	
    <a href="#top" id="top" class="animated fadeInUp start-anim"><i class="fa fa-angle-up"></i></a>

    <!-- Including Jquery so All js Can run -->
    <script type="text/javascript" src="js/jquery.js"></script>
    
    <!-- Including Foundation JS so Foundation function can work. -->
    <script type="text/javascript" src="js/foundation.min.js"></script>
    
    <!-- Including Owl Carousel File -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    
    <!-- Webful JS -->
    <script src="js/webful.js"></script>
</body>
</html>
