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
    <link rel="stylesheet" type="text/css" href="./css/style.css">
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
	                   <h1 class="subpage-header-title">Conference <div style="color: #f7ce0f;display:inline-block;">Speakers</div></h1>
	                </div>
	            </div>
				<div class="subpage-scroll-div">
					<a href="#details" id="page-scroll-btn"><i class="fal fa-arrow-down fa-lg"></i></a>
				</div>
	            <svg class="subpage-header-svg" xmlns="http://www.w3.org/2000/svg" viewBox="150 0 1120 250"><path fill="#f7f7f7" fill-opacity="1" d="M0,320L48,277.3C96,235,192,149,288,149.3C384,149,480,235,576,234.7C672,235,768,149,864,144C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
	        </div>
		</div>
    </header>
	
	 <!-- Speakers content  -->
	<section class="continer-fluid padding subpage-section" id="details">
		<div class="container pt-5">
			<p class="subpage-sec-para text-center" id="speaker-sec-top-para" data-aos="fade-up" data-aos-duration="1600">
				Meet and get connected with all the conference speakers.
			</p>
			<div class="subpage-sec-content mt-5" id="speaker-sec" data-aos="fade-up" data-aos-duration="1900">
				<h4 style="padding-top: 20px;" class="text-center mb-3">Keynote Speakers</h4>
				<div class="subpage-sec-horiz-divider-center mb-4"></div>
				<div class="row justify-content-center">
					<div class="col-sm-12 col-md-4 col-lg-4 speaker" id="keynote-speaker-one">
						<img src="./images/speakers/Prof.Qiu.jpg" width="100%">
						<div class="speaker-social-links text-center p-3" id="keynote-speaker-slinks">
							<a href="#" data-toggle="modal" data-target="#keynote-speaker-three"><i class="fas fa-user-circle fa-lg"></i></a>
						</div>
						<div class="speaker-details text-center px-2">
							<h5>Professor Meikang Qiu</h5>
							<p class="p-0 m-0">
								Department of Computer Science and Information Systems,
								Texas A&M University, Commerce, USA<br>
								Chair of IEEE Smart Computing Special Technical Community
							</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4 speaker" id="keynote-speaker">
						<img src="./images/speakers/Prof.chintaka.jpg" width="100%">
						<div class="speaker-social-links text-center p-3" id="keynote-speaker-slinks">
							<a href="#" data-toggle="modal" data-target="#keynote-speaker-two"><i class="fas fa-user-circle fa-lg"></i></a>
						</div>
						<div class="speaker-details text-center px-2 py-3">
							<h5>Associate Professor Chinthaka Premachandra</h5>
							<p class="p-0 m-0">Department of Electronic Engineering<br>Shibaura Institute of Technology<br>Japan</p>
						</div>
					</div>
				</div>

				<br><br>

				<h4 class="text-center mb-4">Plenary Speakers</h4>
				<div class="subpage-sec-horiz-divider-center mb-4"></div>
				<div class="row justify-content-center" id="sub-speakers-div">
					<div class="col-sm-12 col-md-4 col-lg-3 speaker mb-4" id="speaker2">
						<img src="./images/speakers/Dr.Prasad.jpg" width="100%">
						<div class="speaker-details text-center px-2 py-3">
							<h5>Prof. Prasad M. Jayaweera</h5>
							<p class="p-0 m-0">University of Sri Jayewardenepura, Sri Lanka</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-3 speaker mb-4" id="speaker3">
						<img src="./images/speakers/Dr.Sagara.jpg" width="100%">
						<div class="speaker-details text-center px-2 py-3">
							<h5>Dr. K.A.S.N. Sumathipala</h5>
							<p class="p-0 m-0">University of Moratuwa,<br>Sri Lanka</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-3 speaker mb-4" id="speaker3">
						<img src="./images/speakers/Dr.Windhya.jpg" width="100%">
						<div class="speaker-details text-center px-2 py-3">
							<h5>Dr. Windhya Rankothge</h5>
							<p class="p-0 m-0">Sri Lanka Institute of Information Technology, Sri Lanka</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-3 speaker mb-4" id="speaker4">
						<img src="./images/speakers/Dr.Sidath.jpg" width="100%">
						<div class="speaker-details text-center px-2 py-3">
							<h5>Dr. S.R. Liyanage</h5>
							<p class="p-0 m-0">University of Kelaniya,<br>Sri Lanka</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-3 speaker mb-4" id="speaker1">
						<img src="./images/speakers/Dr.Pradeep.jpg" width="100%">
						<div class="speaker-details text-center px-2 py-3">
							<h5>Dr. L.P. Kalansooriya</h5>
							<p class="p-0 m-0">General Sir John Kotelawala Defence University, Sri Lanka</p>
						</div>
					</div>
				</div>

				<br><br>

				<h4 class="text-center mb-4">Special Technical Speech</h4>
				<div class="subpage-sec-horiz-divider-center mb-4"></div>
				<div class="text-center mb-4">
					<small style="color: #777; font-family: font_medium;">Workforce STEM Pipeline needs to re-imaging: Improving Access and Participation of Women in STEM</small>
				</div>
				<div class="row justify-content-center" id="sub-speakers-div">
					<div class="col-sm-12 col-md-4 col-lg-3 speaker mb-4" id="speaker3">
						<img src="./images/speakers/Ms.Dilrukshi.jpg" width="100%">
						<div class="speaker-details text-center px-2 py-3">
							<h5>Mrs. Dilrukshi Gamage</h5>
							<p class="p-0 m-0">University of Moratuwa<br>Sri Lanka</p>
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

    <!-- keynote speakers modals -->
	<div class="modal fade" id="keynote-speaker-three" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h4 class="modal-title speaker-title">Prof. Meikang Qiu</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true"><i class="fal fa-times fa-lg"></i></span>
	        </button>
	      </div>
	      <div class="modal-body">
            <p class="speaker-bio">
                Meikang Qiu received the BE and ME degrees from Shanghai Jiao Tong University andreceived Ph.D. degree of Computer Science from University of Texas at Dallas. Currently, He is the Department Head and tenured full professor of Texas A&M University Commerce, USA. He is an ACM Distinguished Member and IEEE Senior member. He is the Chair of IEEE Smart Computing Special Technical Community. His research interests include Cyber Security, Big DataAnalysis, Cloud Computing, Smarting Computing, Intelligent Data, Embedded systems, etc. Alot of novel results have been produced and most of them have already been reported to research community through high-quality journal and conference papers. He has published 20+ books,600+ peer-reviewed journal and conference papers (including 300+ journal articles, 300+ conference papers, 100+ IEEE/ACM Transactions papers). His paper on Tele-health system haswon IEEE System Journal 2018 Best Paper Award. His paper about data allocationfor hybrid memory has been published in IEEE Transactions on Computers has been selected as IEEETCSC 2016 Best Journal Paper and hot paper (1 in 1000 papers by Web of Science) in 2017.His paper published in IEEE Transactions on Computers about privacy protection for smartphones has been selected as a Highly Cited Paper in 2017-2020. He also won ACM Transactionson Design Automation of Electrical Systems (TODAES) 2011 Best Paper Award. He has won another 10+ Conference Best Paper Awards in recent years. Currently he is an associate editor of 10+ international journals, including IEEE Transactions on Computers and IEEE Transactionson Cloud Computing. He has served as leading guest editor for IEEE Transactions onDependable and Secure Computing (TDSC), special issue on Social Network Security. He is theGeneral Chair/Program Chair of a dozen of IEEE/ACM international conferences, such as IEEETrustCom, IEEE BigDataSecurity, IEEE CSCloud, and IEEE HPCC. He has won Navy Summer Faculty Award in 2012 and Air Force Summer Faculty Award in 2009. His researchis supportedby US government such as NSF, NSA, Air Force, Navy and companies such as GE,Nokia, TCL, and Cavium.
            </p>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="keynote-speaker-two" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h4 class="modal-title speaker-title">Associate Prof. Chinthaka Premachandra</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true"><i class="fal fa-times fa-lg"></i></span>
	        </button>
	      </div>
	      <div class="modal-body">
            <p class="speaker-bio">
                Chinthaka Premachandra was born in Sri Lanka. He received his B.Sc. and M.Sc. degrees from Mie University, Tsu, Japan in 2006 and 2008 respectively, and his Ph.D degree from the Nagoya University, Nagoya, Japan, in 2011.  From 2012 to 2015, Dr. Chinthaka Premachandra was an assistant professor in the Department of Electrical Engineering, Faculty of Engineering, Tokyo University of Science, Tokyo, Japan. From 2016 to 2017, he was an assistant in the Department of Electronic Engineering, School of Engineering, Shibaura Institute of Technology, Tokyo, Japan. In 2018, he was promoted to Associate Professor in the Department of Electronic Engineering, Graduate School of Engineering, Shibaura Institute of Technology. In addition, he is the manager of Image Processing and Robotic Lab at the same department. His research interests are Image Processing and Robotics. Former research includes computer vision, pattern recognition, speed up image processing, and camera based Intelligent Transportation Systems, while latter fields include terrestrial robotic systems, flying robotic systems, and integration of terrestrial robot and flying robot. Dr. Chinthaka Premachandra is author/co-author of more than 120 publications, including books, papers published in journals, magazines and conference proceedings. He received the FIT Best Paper Award and FIT Young Researchers Award from IEICE & IPSJ, Japan in 2009 and 2010 respectively. He has served many international conferences and journals as a steering committee member and an editor respectively. Dr. Chinthaka Premachandra is the founding chair of International Conference on Image Processing and Robotics (ICIPRoB).
            </p>
	      </div>
	    </div>
	  </div>
	</div>

    <script>
        AOS.init({once: true});
    </script>
</body>
<div class="se-pre-con"></div>
</html>