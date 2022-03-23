<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HTML5, CSS3, Bootstrap, JQuery, PHP, MySQL">
    <meta name="author" content="Bhathiya Kariyawasam">

    <title>ICARC 2022</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="././vendor/css/style.css">
    <link rel="stylesheet" type="text/css" href="./vendor/css/responsive.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- AOS js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="./vendor/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Favicon Icon -->
    <link rel="icon" href="./assets/images/logo/tabIcon.ico">
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

			<!-- Header Content - -->
	        <div class="subpage-header-content text-center" >
	            <div class="subpage-header-text-div">
	                <div class="subpage-title-div">
					   <h1 class="subpage-header-title"> <div style="color: #f7ce0f;display:inline-block;">Awards</div></h1>
					   
	                </div>
	            </div>
				<div class="subpage-scroll-div">
					<a href="#details" id="page-scroll-btn"><i class="fal fa-arrow-down fa-lg"></i></a>
				</div>
	            <svg class="subpage-header-svg" xmlns="http://www.w3.org/2000/svg" viewBox="150 0 1120 250"><path fill="#f7f7f7" fill-opacity="1" d="M0,320L48,277.3C96,235,192,149,288,149.3C384,149,480,235,576,234.7C672,235,768,149,864,144C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
	        </div>
		</div>
    </header>
	
	<!-- important dates content  -->
	<section class="continer-fluid padding subpage-section" id="details">
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
                        <td class="text-center align-middle" width="200px">Artificial Intelligence and Machine Learning</td>
                        <td class="text-center align-middle">94</td>
                        <td class="text-center align-middle">
                            <strong>A Path Planning Drone Solution to Safe Pesticide Usage in Arable Lands</strong>
                        </td>
                        <td class="text-center align-middle" width="330px"><strong>Akarshani Amarasinghe </strong><br><small> University of Colombo School of Computing</small> <br> <strong>Dr. K.L. Jayaratne </strong> <small><br> University of Colombo School of Computing</small> <br><strong>Viraj B. Wijesuriya </strong><small><br>University of Oxford</small><br>
                        </td>
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
                        <td class="text-center align-middle" rowspan="1" width="200px">Technology-enhanced Learning and Teaching</td>
                        <td class="text-center align-middle">189</td>
                        <td class="text-center align-middle">
                            <strong>Interpretable Student Performance Prediction using Explainable Boosting Machine for Multi-Class Classification</strong>
                        </td>
                        <td class="text-center align-middle" width="330px"><strong>Shyaman Jayasundara</strong><br><small>University of Peradeniya</small> <br> <strong>Amila Indika </strong>  <br><small>University of Peradeniya</small> <br> <strong>Damayanthi Herath </strong><br><small>University of Peradeniya</small>
                    
                    </td>
                    </tr>
                    <tr>
                    <td class="text-center align-middle" width="200px">Industry R&D</td>
                        <td class="text-center align-middle">108</td>
                        <td class="text-center align-middle">
                            <strong>Smart Stethoscope: Intelligent Respiratory Disease Prediction System</strong>
                        </td>
                        <td class="text-center align-middle" width="330px"><strong>Isuru Herath</strong><br>
                            <small>University of Sri Jayewardenepura</small> <br>
                            <strong> Akila Subasinghe</strong><br>
                            <small>University of Sri Jayewardenepura</small> <br>
                            <strong> Dr. Randima Dinalankara</strong><br>
                            <small>University of Sri Jayewardenepura</small> <br>
                            <strong>Vidura Jayasooriya </strong><br>
                            <small>University of Sri Jayewardenepura</small></br>
                            <strong>Prof. Harsha Dissanayake </strong><br>
                            <small>University of Sri Jayewardenepura</small></td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle" width="200px">Data Science and Applications</td>
                        <td class="text-center align-middle">80</td>
                        <td class="text-center align-middle">
                            <strong>Optimize Transfer Learning for Autism Spectrum Disorder Classification with Neuroimaging: A Comparative Study</strong>
                        </td>
                        <td class="text-center align-middle" width="330px"><strong>Lakmini Herath</strong><br><small>Postgraduate Institute Of Science </small><br>
                        <strong>Dr. Dulani Meedeniya </strong> <br><small>University of Moratuwa</small><br>
                        <strong>Janaka Marasinghe </strong> <br><small> University of Peradeniya </small><br>
                        <strong>Vajira Weerasinghe </strong> <br><small>University of Peradeniya</small><br>
    </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle" width="200px">Knowledge Management and Information Systems</td>
                        <td class="text-center align-middle">127</td>
                        <td class="text-center align-middle">
                            <strong>General Data Protection Regulation(GDPR) Adoption in Sri Lankan Businesses: A Data Governance Model.</strong>
                        </td>
                        <td class="text-center align-middle" width="330px">
                            <strong>P.A.I. Ranathunga  </strong></br>
                            <small>University of Kelaniya</small> </br>
                            <strong>Ruwan Wickramarachchi </strong></br>
                            <small>University of Kelaniya</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle" width="200px">Parallel and Distributed Computing</td>
                        <td class="text-center align-middle">100</td>
                        <td class="text-center align-middle">
                            <strong>Microservice Based Edge Computing Architecture for Internet of Things</strong>
                        </td>
                        <td class="text-center align-middle" width="330px">
                            <strong>Sewwandi R.M.B. Nisansala </strong> <small><br> University of Peradeniya <strong> </small><br> Laksara Chandrasiri </strong> <small><br> University of Peradeniya <strong> </small><br> Sonali Prasadika </strong> <small> <br>University of Peradeniya <strong> </small> <br>Upul Jayasinghe </strong> <small> <br>University of Peradeniya</small>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle" width="200px">Software Engineering</td>
                        <td class="text-center align-middle">164</td>
                        <td class="text-center align-middle">
                            <strong>Classifying Source Code Using Boosting Algorithms</strong>
                        </td>
                        <td class="text-center align-middle" width="330px">
                            <strong>Mohamed Ifham</strong> <br> <small> Sabaragamuwa University</small><br><strong>B.T.G.S Kumara</strong> <br> <small> Sabaragamuwa University of Sri Lanka</small><br><strong> Dr. Jayalath Ekanayake</strong> <br> <small> Uva Wellassa University</small><br><strong> Banujan Kuhaneswaran</strong> <br> <small> Sabaragamuwa University of Sri Lanka</small><br><strong> Senthan S. Prasanth</strong> <br> <small> Sabaragamuwa University of Sri Lanka</small><br><strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center align-middle" width="200px">Human-Computer Interaction and Computer Vision</td>
                        <td class="text-center align-middle">125</td>
                        <td class="text-center align-middle">
                            <strong>Underwater Image Enhancement Using Dual Convolutional Neural Network with Skip Connections</strong>
                        </td>
                        <td class="text-center align-middle" width="330px"><strong>Anparasy Sivaanpu</strong></br>
                        <small> Vavuniya Campus of the University of Jaffna</small></br>
                        <strong> Rasika Priyadarshani</strong></br>
                        <small> University of Jaffna </small></br>
                        <strong> Kokul Thanikasalam</strong></br>
                        <small> University of Vavuniya</small></br>
                        <strong> Amirthalingam Ramanan</strong></br>
                        <small> University of Jaffna</small></br>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-center align-middle" width="200px">open</td>
                        <td class="text-center align-middle">154</td>
                        <td class="text-center align-middle">
                            <strong>Computational Study on SARS-CoV-2 Viral Protein Interaction with Natural Compounds of Coriandrum sativum L</strong>
                        </td>
                        <td class="text-center align-middle" width="330px"><strong>Roshan P. Perera </strong><br><small> University of Goettingen</small><br><strong> Bhagya M. Senadheera</strong><br><small> University of Colombo School of Computing</small><br><strong> Suresh Hewapathirana</strong><br><small> EMBL-EBI</small><br>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-center align-middle" width="200px">Artificial Intelligence and Machine Learning</td>
                        <td class="text-center align-middle">94</td>
                        <td class="text-center align-middle">
                            <strong>A Path Planning Drone Solution to Safe Pesticide Usage in Arable Lands</strong>
                        </td>
                        <td class="text-center align-middle" width="330px"><strong>Akarshani Amarasinghe </strong><br><small> University of Colombo School of Computing</small> <br> <strong>Dr. K.L. Jayaratne </strong> <small><br> University of Colombo School of Computing</small> <br><strong>Viraj B. Wijesuriya </strong><small><br>University of Oxford</small><br>
                        </td>
                    </tr>
                </tbody>
            </table>
		</div>
		<svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="50 0 1340 220"><path fill="#6d0c24" fill-opacity="1" d="M0,160L40,138.7C80,117,160,75,240,69.3C320,64,400,96,480,128C560,160,640,192,720,186.7C800,181,880,139,960,144C1040,149,1120,203,1200,208C1280,213,1360,171,1400,149.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
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