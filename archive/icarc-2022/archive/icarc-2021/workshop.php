<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HTML5, CSS3, Bootstrap, JQuery, PHP, MySQL">
    <meta name="author" content="Bhathiya Kariyawasam">

    <title>ICARC 2021</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="././css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/responsive.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css">
    <!-- ColorBox CSS-->
    <link rel="stylesheet" href="./css/colorbox.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Countdown JQuery -->
    <script src="../js/jquery.jCounter-0.1.4.js"></script>
    <!-- ColorBox js-->
    <script type="text/javascript" src="./js/jquery.colorbox.js"></script>
    <!-- AOS js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="./js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Favicon Icon -->
    <link rel="icon" href="./images/logo/tabIcon.ico">
</head>
<body>
	<!-- Preloader -->
    <script type="text/javascript">
        $(window).on("load", function(){
            $(".se-pre-con").fadeOut("slow");
        });
    </script>

	<!-- Header Section -->
    <header class="subpage-header">
    	<div class="bg-color-dark-subpages">
		    <!-- Navigation Bar -->
			<?php require_once './common/navbar.php'; ?>

			<!-- Header Content  -->
	        <div class="subpage-header-content text-center" >
	            <div class="subpage-header-text-div">
	                <div class="subpage-title-div">
	                   <h1 class="subpage-header-title"><div style="color: #f7ce0f;display:inline-block;">Workshops</div></h1>
	                </div>
	            </div>
				<div class="subpage-scroll-div">
					<a href="#details" id="page-scroll-btn"><i class="fal fa-arrow-down fa-lg"></i></a>
				</div>
	            <svg class="subpage-header-svg" xmlns="http://www.w3.org/2000/svg" viewBox="150 0 1120 250"><path fill="#f7f7f7" fill-opacity="1" d="M0,320L48,277.3C96,235,192,149,288,149.3C384,149,480,235,576,234.7C672,235,768,149,864,144C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
	        </div>
		</div>
    </header>
	
	<!------------ Call for papers content ------------->
	<section class="continer-fluid padding subpage-section workshop-sec" id="details">
		<div class="container pt-5">
			<div class="subpage-sec-content my-5 workshop-content" data-aos="fade-up" data-aos-duration="1900">
                <small># Workshop 1</small>
                <h3>Revolutionizing the Future of Visualization Technology with AR and VR</h3>
                <hr>
                <div class="date-and-link d-lg-flex justify-content-between">
                    <div class="date d-md-flex d-lg-flex mt-2 justify-content-center">
                        <div class="mr-md-2 mr-lg-2 text-center"><i class="fal fa-calendar-alt fa-lg mr-2"></i>23<sup>rd</sup> of February, 2021</div>
                        <div class="ml-md-2 ml-lg-2 text-center"><i class="fal fa-clock fa-lg mr-2"></i>10.00 AM - 11.30 AM</div>
                    </div>
                    <div class="link mt-2 text-center">
                        <i class="fal fa-link fa-lg mr-2"></i> <a href="https://learn.zoom.us/j/61562612823?pwd=eHZQL2I2eHZtTXYwc0xqb3NidEsrZz09" target="_blank">Join the Workshop</a>
                    </div>
                </div>
                <div class="row mt-4 align-items-center workshop-speaker m-0">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <img src="images/speakers/poorna_perera.jpg">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-9">
                        <div class="workshop-speaker-details">
                            <h6>Speaker Name —</h6>
                            <p>Mr. Poorna Perera</p>
                        </div>
                        <div class="workshop-speaker-details">
                            <h6>Position —</h6>
                            <p>3D Artist at LiveRoom (Pvt) Ltd.</p>
                        </div>
                        <div class="workshop-speaker-details">
                            <h6>About —</h6>
                            <p class="mb-0">A self-motivated 3D Artist and AR/VR Developer pursuing his career with LiveRoom. As a professional on what he is passionate about, he has more than 3 years of experience in the domains of 3D Graphics and Programming. Poorna has completed his B.Sc in Computer Science Degree from University of Colombo School of Computing and is competent in many of the technology areas related to Game Development as well.</p>
                        </div>
                    </div>
                </div>
			</div>
            <div class="subpage-sec-content my-5 workshop-content" data-aos="fade-up" data-aos-duration="2300">
                <small># Workshop 2</small>
                <h3>Unity for Indie Developers</h3>
                <hr>
                <div class="date-and-link d-lg-flex justify-content-between">
                    <div class="date d-md-flex d-lg-flex mt-2 justify-content-center">
                        <div class="mr-md-2 mr-lg-2 text-center"><i class="fal fa-calendar-alt fa-lg mr-2"></i>23<sup>rd</sup> of February, 2021</div>
                        <div class="ml-md-2 ml-lg-2 text-center"><i class="fal fa-clock fa-lg mr-2"></i>2.00 PM - 3.30 PM</div>
                    </div>
                    <div class="link mt-2 text-center">
                        <i class="fal fa-link fa-lg mr-2"></i> <a href="https://learn.zoom.us/j/66267902871?pwd=TlNldjBoeFR1UDY4WW1QekRTaDFNQT09" target="_blank">Join the Workshop</a>
                    </div>
                </div>
                <div class="row mt-4 align-items-center workshop-speaker m-0">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <img src="images/speakers/uditha_bandara.jpg">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-9">
                        <div class="workshop-speaker-details">
                            <h6>Speaker Name —</h6>
                            <p>Mr. Uditha Bandara (MVP)</p>
                        </div>
                        <div class="workshop-speaker-details">
                            <h6>Position —</h6>
                            <p>Founder & CEO, Bluechip Technologies Asia.</p>
                        </div>
                        <div class="workshop-speaker-details">
                            <h6>About —</h6>
                            <p class="mb-0">Uditha Bandara (MVP) is specializes in Microsoft development, AI, Mobile App, Cloud and Software Testing technologies. He is the South East Asia`s First XNA/DirectX MVP (Most Valuable Professional). He had delivered sessions at various events and conferences in Hong Kong, Malaysia, Singapore, Indonesia, Sri Lanka and India. He has published several books, articles, tutorials, and demos on his Blog – https://uditha.wordpress.com</p>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="50 0 1340 220"><path fill="#262626" fill-opacity="1" d="M0,160L40,138.7C80,117,160,75,240,69.3C320,64,400,96,480,128C560,160,640,192,720,186.7C800,181,880,139,960,144C1040,149,1120,203,1200,208C1280,213,1360,171,1400,149.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
	</section>

	<!---------- Back to top button ---------->
    <span id="back-to-top-btn"><i class="fal fa-arrow-to-top fa-lg"></i><span>Top</span></span>

    <!-- footer section -------------------------------------------------------------------------------------------->
    <?php require_once './common/footer.php'; ?>

    <script>
        AOS.init({once: true});
    </script>
</body>
<div class="se-pre-con"></div>
</html>