<!DOCTYPE html>
<!-- Meta -->
<html lang="en">
<head>
	<!-- Title -->
	<title>Begi Stars FC: The best Football Club in Nigeria</title>

	<!-- Meta -->
	<meta name="robots" content="">

	<meta name="keywords" content="Football Club, Nigeria Football Club, BegiFC Begi Football Club, Chelsea, Man U, Arsenal">
	<meta name="description" content="Football Club: Begi Stars FC is the best Football Club in Nigeria.">

	<meta property="og:title" content="Football Club: Begi stars FC is the best Football Club in Nigeria">
	<meta property="og:description" content="Football Club: Begi Stars FC is the best Football Club in Nigeria.">
	
	<meta property="og:image" content="https://begistarsfc.com/images/social-image.png">
	
	<meta name="msapplication-TileImage" content="https://begistarsfc.com/images/social-image.png">
	
	<meta name="format-detection" content="telephone=no">
	
	

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	
	<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/hover.css">
	<link rel="stylesheet" type="text/css" class="skin" href="css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="css/templete.min.css">

	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
	<!-- Revolution Navigation Style -->
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <script src="assets/reg.js"></script>
    
    <style>
        .main-slider .Newspaper-Subtitle, .main-slider .Newspaper-Title, .main-slider .site-button{
            margin-top:50px;
        }
    </style>

		
</head>
<body id="bg">
    <div id="loading-area"></div>
    <!--<div id="loading-area"></div> -->
<div class="page-wraper">
	<!-- header -->
	<?php
		include("header.php");
	?>
	<!-- header END -->
	<!-- Content -->
	<div class="page-content">
		<!-- Slider -->
		<?php
			include("slider.php");
		?>

		<?php
			include("match_schd.php");
		?>

		<?php
			include("next_mm.php");
		?>



		<?php
			include("jersey.php");
		?>


		<?php
			//include("next_match.php");
		?>
		<?php
        	//include("home_about.php");
        ?>

        <?php
        	include("home_blog1.php");
        ?>

		<?php
			include("home_content_bg.php");
		?>

		
        <?php
        	include("home_grids.php");
        ?>
        <?php
        	//include("home_achievements.php");
        ?>
        <?php
        	include("small_board.php");
        ?>
        <?php
        	include("hot_stars.php");
        ?>
		<?php
			//include("home_reels.php");
		?>
        <?php
        	//include("home_blog.php");
        ?>
        <?php
        	//include("home_testimonials.php");
        ?>
    </div>
	<!-- Content END-->
    <!-- Footer -->
	<?php
		include("footer2.php");
	?>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-caret-up" ></button>
</div>
 <!--<div id="loading-area"></div> -->
<!-- JavaScript  files ========================================= -->


<script>


window.addEventListener('DOMContentLoaded', function () {
    function updateSlideImages() {
        const slides = document.querySelectorAll('.rev_slider ul li');
        const isMobile = window.innerWidth <= 776;

        slides.forEach(slide => {
            const img = slide.querySelector('.rev-slidebg');
            if (img) {
                if (isMobile) {
                    img.src = img.src.replace('slide1.jpg', 'slide_mobile1.jpg')
                                      .replace('slide2.jpg', 'slide_mobile2.jpg');
                                    
                } else {
                    img.src = img.src.replace('slide_mobile1.jpg', 'slide1.jpg')
                                      .replace('slide_mobile.jpg', 'slide2.jpg');
                                     
                }
            }
        });
    }

    updateSlideImages(); // Run on load
    window.addEventListener('resize', updateSlideImages); // Run on resize
});

















	document.addEventListener("DOMContentLoaded", function () {
    const prevButton = document.querySelector(".js-prev");
    const nextButton = document.querySelector(".js-next");
    const slider = document.querySelector(".swiper-wrapper"); // Adjust the selector to match your slider container

    const scrollAmount = 300; // Adjust this value based on your layout

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






document.addEventListener("DOMContentLoaded", function () {
    const prevButton = document.querySelector(".prevbtn");
    const nextButton = document.querySelector(".nextbtn");
    const slider = document.querySelector(".storytellerContainer-VXwt8t"); // Adjust the selector to match your slider container
	const leftshadow = document.querySelector('.scrollLeft-INWdYG')
	const rightshadow = document.querySelector('.scrollRight-HxVo0U')

    const scrollAmount = 300; // Adjust this value based on your layout

    if (prevButton && nextButton && slider) {
        prevButton.style.display = "none"; // Hide prev button initially

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
                if (slider.scrollLeft <= 0) {
                    prevButton.style.display = "none";
					leftshadow.classList.remove('visible-zorq0n');
                } else {
                    prevButton.style.display = "block";
					leftshadow.classList.add('visible-zorq0n');

                }

                if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth) {
                    nextButton.style.display = "none";
					rightshadow.classList.remove('visible-zorq0n');
                } else {
                    nextButton.style.display = "block";
					rightshadow.classList.add('visible-zorq0n');
                }
            }, 200);
        }

        updateButtonState(); // Initialize button state
    }
});



// visible-zorq0n

</script>


<script>
    
    document.addEventListener("DOMContentLoaded", () => {
    const popupbtn = document.querySelectorAll(".popupbtn");
    const popupform = document.getElementById("popup-container");
    const closepopup = document.getElementById("close");
  

	popupbtn.forEach((popupbtn)=>{

		popupbtn.addEventListener("click", () => {
	  popupform.classList.contains('show') ? popupform.classList.remove('show') : popupform.classList.add('show')
    });

	popupform.addEventListener("click", () => {
		 popupform.classList.remove('show') 
		 
    });
  
  
    closepopup.addEventListener("click", () => {
		popupform.classList.remove('show')
    });

  });

	})
 
  

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

<script src="plugins/masonry/isotope.pkgd.min.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->

<script src="plugins/lightgallery/js/lightgallery-all.js"></script><!-- LIGHT GALLERY -->
<!-- <script src="js/dz.ajax.js"></script> --><!-- CONTACT JS  -->
<!-- <script src="plugins/switcher/js/switcher.min.js"></script> -->    <!-- OWL SLIDER -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<!-- <script src="js/dz.carousel.min.js"></script> -->  <!-- SORTCODE FUCTIONS  -->
<!-- revolution JS FILES -->
<script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/rev.slider.js"></script>
<script>
jQuery(document).ready(function() {
	'use strict';
	dz_rev_slider_1();
});	/*ready*/
</script>
</body>
</html>
