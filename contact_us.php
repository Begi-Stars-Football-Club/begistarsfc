<!DOCTYPE html>
<?php
include("script/send_mail.php");
$begifcSetup_object= new Begifc();
?>

<html lang="en">
<head>
	<!-- Title -->
	<title>Contact Begi Stars FC</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="">

	<meta name="keywords" content="Football Club, Nigeria Football Club, BegiFC Begi Football Club, Chelsea, Man U, Arsenal">
	<meta name="description" content="Football Club: Begi Stars FC is the best Football Club in Nigeria.">

	<meta property="og:title" content="Football Club: Begi Stars FC is the best Football Club in Nigeria">
	<meta property="og:description" content="Football Club: Begi Stars FC is the best Football Club in Nigeria.">

	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" class="skin" href="css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="css/templete.min.css">
    <script src="assets/reg.js"></script>

</head>
<body id="bg">
    <div id="loading-area"></div>
<div class="page-wraper">
    <!-- header -->
	<?php
		include("header.php");
	?>
	<!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr-m overlay-black-middle" style="background-image:url(images/images/header.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Contact Begi Stars FC</h1>
                </div>
            </div>
            
			<div class="breadcrumb-row">
				<div class="container">
					<ul class="list-inline">
						<li><a href="index.php">Home</a></li>
						<li>Contact us</li>
					</ul>
				</div>
			</div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-inner contact-style-1">
            <div class="container">
                <div class="row">
					<!-- Left part start -->
                    <div class="col-lg-4 d-lg-flex">
						<div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
							<h2 class="m-b10">Quick Contact</h2>
							<p>For any inquiries, simply use the contact details below  and our team will get back to you promptly.</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Address:</h6>
                                        <p>121 Lawanson Road, Surulere Lagos, Nigeria</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                        <p>info@begistarsfc.com </br>
                                        partnerships@begistarsfc.com </br>
                                        esports@begistarsfc.com</p>
                                        
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                        <p>+234 201 4540 120</p>
                                    </div>
                                </li>
                            </ul>
							<div class="m-t20">
								<ul class="social-icon dez-border social-icon-lg">
									<li><a href="javascript:void(0);" class="fa fa-facebook bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-twitter bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-linkedin bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-pinterest-p bg-primary"></a></li>
									<li><a href="javascript:void(0);" class="fa fa-google-plus bg-primary"></a></li>
								</ul>
							</div>
						</div>
					</div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-lg-8">
						<div class="p-a30 bg-gray clearfix m-b30 ">
                        <h2>Contact form</h2>
                        <!--<div class="dzFormMsg"></div>-->
                        <?php  $begifcSetup_object -> sendmail();?>

                            <form method="post" class="" action="">
                                <input type="hidden" value="Contact" name="dzToDo">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="name" id="name" type="text" required="" class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="email" id="email" type="email" class="form-control" required="" placeholder="Your Email Id">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="phone" id="phone" type="text" required="" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="subject" id="subject" type="text" required="" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="message" id="message" rows="4" class="form-control" required="" placeholder="Your Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="col-lg-12">
                                        <button name="send" id="send" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>
						</div>
                    </div>
                    <!-- right part END -->
                    
                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
	<?php
		include("footer2.php");

	?>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->

<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/countdown/jquery.countdown.js"></script><!-- COUNTDOWN JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
<script src="plugins/masonry/isotope.pkgd.min.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="plugins/switcher/js/switcher.min.js"></script><!-- OWL SLIDER -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.min.js"></script><!-- SORTCODE FUCTIONS  -->
<!--<script src='../recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->

</body>
</html>
