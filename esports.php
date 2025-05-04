<!DOCTYPE html>

<html lang="en">
<head>
	<!-- Title -->
	<title>Begi Stars FC: ESports Channel</title>

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
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" class="skin" href="css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="css/templete.min.css">

    <script src="assets/reg.js"></script>



    <!-- <link rel="stylesheet" type="text/css" href="assets/css/responsive.css"> -->

    

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
        <div class="dez-bnr-inr-c overlay-black-middle" style="background-image:url(images/images/esports9.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Begi Stars E-Sports Channel</h1>
                </div>
            </div>
            
			
        </div>

        <?php
            include("esports_about.php");
        ?>

        
		<?php
			include("esportspanel.php");
		?>


         
		<?php
			//include("esports_teams.php");
		?>

        <?php
			include("home_content_bg.php");
		?>


       

        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        
        <!-- contact area END -->



        <div class="section-full content-area bg-white">
            <!-- Services -->
            
            <!-- Services END -->
        </div>
        <!-- contact area  END -->


        <?php
            include("small_board_esports.php");
        ?>

        <!-- <p></p> -->


        <?php
			include("esports_sponsor.php");
		?>



    </div>
    <!-- Content END-->
	<!-- Footer -->
	<?php
		include("footer2.php");
	?>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up"></button>
</div>
<!-- JavaScript files ========================================= -->



<script>
	document.addEventListener("DOMContentLoaded", function () {
    const prevButton = document.querySelector(".esprev");
    const nextButton = document.querySelector(".esnext");
    const slider = document.querySelector(".promo-carousel__cards"); // Adjust the selector to match your slider container

    const scrollAmount = 300; // Adjust this value based on your layout
		console.log(prevButton)
		console.log('hello')
    if (prevButton && nextButton && slider) {
        prevButton.addEventListener("click", function () {
            slider.scrollBy({ left: -scrollAmount, behavior: "smooth" });
            updateButtonState();
        });

        nextButton.addEventListener("click", function () {
            slider.scrollBy({ left: scrollAmount, behavior: "smooth" });
            updateButtonState();
        });

        function updateButtonState() {
            setTimeout(() => {
                prevButton.classList.toggle("is-inactive", slider.scrollLeft <= 0);
                nextButton.classList.toggle("is-inactive", slider.scrollLeft + slider.clientWidth >= slider.scrollWidth);
            }, 200);
        }

        updateButtonState(); // Initialize button state
    }
});

</script>
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
<!--<div id="loading-area"></div>-->
</body>
</html>
