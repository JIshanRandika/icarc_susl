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

	<!-- Header Section ---------------------------------------------------------------------------------->
    <header class="subpage-header">
    	<div class="bg-color-dark-subpages">
		    <!-- Navigation Bar -->
			<?php require_once './common/navbar.php'; ?>

			<!-- Header Content  -->
	        <div class="subpage-header-content text-center" >
	            <div class="subpage-header-text-div">
	                <div class="subpage-title-div">
	                   <h1 class="subpage-header-title"><div style="color: #f7ce0f;display:inline-block;">Awards</div></h1>
	                </div>
	            </div>
				<div class="subpage-scroll-div">
					<a href="#details" id="page-scroll-btn"><i class="fal fa-arrow-down fa-lg"></i></a>
				</div>
	            <svg class="subpage-header-svg" xmlns="http://www.w3.org/2000/svg" viewBox="150 0 1120 250"><path fill="#f7f7f7" fill-opacity="1" d="M0,320L48,277.3C96,235,192,149,288,149.3C384,149,480,235,576,234.7C672,235,768,149,864,144C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
	        </div>
		</div>
    </header>
	
	 <!-- Program content  -->
	<section class="continer-fluid padding subpage-section program-sec" id="details">
		<div class="container pt-5">
            <div class="subpage-sec-title text-center" data-aos="fade-up" data-aos-duration="1100">
                <h1 style="padding-top: 20px;">Best Paper Awards</h1>
                <div class="subpage-sec-horiz-divider-center"></div>
            </div>

            <p class="subpage-sec-para mt-3" id="speaker-sec-top-para" data-aos="fade-up" data-aos-duration="1600" style="color: var(--theme-light-blue)">
				Best Conference Paper
			</p>
            <table class="table table-bordered table-sm mb-5" style="font-size: 14px; background: #eee;" data-aos="fade-up" data-aos-duration="1750">
                <thead>
                    <tr class="text-center text-muted">
                        <th width="100px">Track Name</th>
                        <th width="130px">Paper ID</th>
                        <th>Paper Title</th>
                        <th>Author(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center align-middle" width="200px">Industry R&D / Open</td>
                        <td class="text-center align-middle">73</td>
                        <td class="align-middle">
                            <strong>A Simulation Model to Optimize Pre-Sewing Operations in the Apparel Industry: A Case Study from Sri Lanka</strong>
                        </td>
                        <td class="align-middle" width="330px"><strong>PM Herath, C Rajapakse, H Niwunhella, G Neththikumarage</strong><br>
                        <small>University of Kelaniya</small></td>
                    </tr>
                </tbody>
            </table>
            <!-- //////////////////// -->
            <p class="subpage-sec-para mt-3" id="speaker-sec-top-para" data-aos="fade-up" data-aos-duration="1600" style="color: var(--theme-light-blue)">
                Best Track Papers
            </p>
            <table class="table table-bordered table-sm mb-5" style="font-size: 14px; background: #eee;" data-aos="fade-up" data-aos-duration="1750">
                <thead>
                    <tr class="text-center text-muted">
                        <th width="100px">Track Name</th>
                        <th width="130px">Paper ID</th>
                        <th>Paper Title</th>
                        <th>Author(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center align-middle" rowspan="2" width="200px">Data Science and Applications</td>
                        <td class="text-center align-middle">42</td>
                        <td class="align-middle">
                            <strong>Voice-Assisted Real-Time Traffic Sign Recognition System using Convolutional Neural Network</strong>
                        </td>
                        <td class="align-middle" width="330px"><strong>MP Manawadu, U Wijenayake</strong><br><small>University of Sri Jayewardenepura</small></td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle">69</td>
                        <td class="align-middle">
                            <strong>Fuzzy Logic-based Paddy Yield Prediction to Facilitate Weather Index-based Crop Insurance</strong>
                        </td>
                        <td class="align-middle" width="330px"><strong>D Kithmini and C Rajapakshe</strong><br>
                            <small>University of Kelaniya</small></td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle" width="200px">Parallel and Distributed Systems</td>
                        <td class="text-center align-middle">55</td>
                        <td class="align-middle">
                            <strong>Development of Cyber Threat Intelligence System in a SOC Environment for Real Time Environment</strong>
                        </td>
                        <td class="align-middle" width="330px"><strong>A Varatharaj</strong><br><small>Sri Lanka Institute of Information Technology</small></td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle" width="200px">Human Computer Interaction</td>
                        <td class="text-center align-middle">10</td>
                        <td class="align-middle">
                            <strong>AR Interior: Guidance Tool for Interior Designing</strong>
                        </td>
                        <td class="align-middle" width="330px">
                            <strong>E.M.P.S Ekanayaka, Dulika R Fonseka, Rebeka N Ranaweerasinghe, A.M.A.C.B Abaykoon, Ishara Gamage, Thusithanjana K K Thilakarathna</strong><br><small>Sri Lanka Institute of Information Technology (SLIIT)</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle" width="200px">Knowledge Management and Information Systems</td>
                        <td class="text-center align-middle">71</td>
                        <td class="align-middle">
                            <strong>Development of an Information Flow Model to Overcome the Challenges in Sri Lankan Handicraft Industry</strong>
                        </td>
                        <td class="align-middle" width="330px">
                            <strong>M Kalubowila, RACP Rajapakse</strong><br><small>University of Kelaniya</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle" width="200px">Software Engineering</td>
                        <td class="text-center align-middle">12</td>
                        <td class="align-middle">
                            <strong>Guru Gedara: Smart Mathematical e-learning Platform for Grade Five Students</strong>
                        </td>
                        <td class="align-middle" width="330px">
                            <strong>S Rajapaksha, TKK Thilakarathna, VS Wijesundara, MK Wickramasooriya, SRMJS Katupitiya, EMOM Ekanayake</strong><br><small>Sri Lanka Institute of Information Technology (SLIIT)</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle" width="200px">Industry R&D / Open</td>
                        <td class="text-center align-middle">73</td>
                        <td class="align-middle">
                            <strong>A Simulation Model to Optimize Pre-Sewing Operations in the Apparel Industry: A Case Study from Sri Lanka</strong>
                        </td>
                        <td class="align-middle" width="330px"><strong>PM Herath, C Rajapakse, H Niwunhella, G Neththikumarage</strong><br>
                        <small>University of Kelaniya</small></td>
                    </tr>
                </tbody>
            </table>
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