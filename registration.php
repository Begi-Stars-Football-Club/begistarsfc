<!DOCTYPE html>

<html lang="en">
<head>
	<!-- Title -->
	<title>Registration - Begi Stars FC</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="">

	<meta name="keywords" content="Football Club, Nigeria Football Club, BegiFC Begi Football Club, Chelsea, Man U, Arsenal">
	<meta name="description" content="Football Club: BegiFC is the best Football Club in Nigeria.">

	<meta property="og:title" content="Football Club: BegiFC is the best Football Club in Nigeria">
	<meta property="og:description" content="Football Club: BegiFC is the best Football Club in Nigeria.">
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


     <style>
       <style>

         body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container_reg {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;

            padding: 20px;
        }
        .box-wrapper {
            background: linear-gradient(45deg, navy, gold);
            padding: 3px; /* This creates the visible border effect */
            border-radius: 12px; /* Matches inner box */
        }
        .box {
            width: 300px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            text-align: center;
            border-image: linear-gradient(to right, #138de1, #efbb20) 3;

            border: 1px solid #eee;
        }
        .box h2 {
            margin: 0 0 10px;
            color: navy;
        }
        .box img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .box p {
            margin: 0 0 15px;
            color: #333;
            text-align: justify;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background:#CC9933;
            color: white;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: 0.3s;
        }
        .btn:hover {
            opacity: 0.8;
        }
        
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>

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
                    <h1 class="text-white">Rgistration @ Begi Stars FC</h1>
                </div>
            </div>
            
			<div class="breadcrumb-row">
				<div class="container">
					<ul class="list-inline">
						<li><a href="insex.php">Home</a></li>
						<li>Registration</li>
					</ul>
				</div>
			</div>
        </div>
        <!-- Breadcrumb row END -->


        <!-- contact area -->

        <div class="container_reg">

        <div class="box">
        	<img src="images/images/registerfc.jpg" alt="Sample Image">
            <h2>Join Begi Stars FC</h2>
            <p>Do you have a passion for football? </br>Are you ready to showcase your talent and rise to greatness? </br> Are you ready to take your skills to the next level and become part of something great?</br>Begi Stars FC is inviting talented, hardworking and ambitious players to join our team and embark on a journey to success!</p>
            <!--<a href="https://docs.google.com/forms/d/e/1FAIpQLSeF9YAA1QeWCKNZDnng17h8VLmOcsZ1t5TWg3_KSzIrDd7ZUA/viewform" class="btn">Register Now</a>-->
            
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc387Qf9UbtQnrwuf7Ku4krPmesNjWC7gitfViucZ2hr17w-w/viewform" class="btn">Register Now</a>
        </div>
        <div class="box">
        	<img src="images/images/registeresports.jpg" alt="Sample Image">
            <h2>Join Begi Stars ESports</h2>
            <p>Are you passionate about gaming but unsure where to start? Or are you already skilled and ready to compete at the highest level? Begi Stars E-Sports is recruiting both experienced players and beginners who are eager to learn, improve and dominate the esports scene. </br>
			Ready to level up and become the best? This is your chance to train, compete and shine with the stars

            </p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSd8bYfUxHRlKKdXOoO37_ADcl-Kix0di_5qmHz_A5ewjKfi9A/viewform" class="btn">Register Now</a>
        </div>
        <div class="box">
        	<img src="images/images/registervolunteer.jpg" alt="Sample Image">
            <h2>Join Begi Stars FC as a Volunteer</h2>
            <p>Do you have a passion for football and a heart for making a difference? Begi Stars FC is looking for dedicated volunteers to support our journey on and off the field! Whether you're a sports enthusiast, an organizer or someone who loves to contribute to a thriving community, we need you!</p>
            <a href="contact_us.php" class="btn">Register Now</a>
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
<!--<div id="loading-area"></div>-->
</body>
</html>
