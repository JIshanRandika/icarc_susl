<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HTML5, CSS3, Bootstrap, JQuery, PHP, MySQL">
    <meta name="author" content="Bhathiya Kariyawasam">

    <title>ICARC 2023</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./vendor/css/style.css">
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
	                   <h1 class="subpage-header-title"><div style="color: #ffffff;display:inline-block;">Conference</div> <div style="color: #f7ce0f;display:inline-block;">Speakers</div></h1>
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
<!--					<div class="col-sm-12 col-md-4 col-lg-4 speaker" id="keynote-speaker-one">-->
<!--						<img src="./assets/images/speakers/Assoc.Prof.Dr.Aramvit.png" width="100%">-->
<!--						<div class="speaker-social-links text-center p-3" id="keynote-speaker-slinks">-->
<!--							<a href="#" data-toggle="modal" data-target="#keynote-speaker-three"><i class="fas fa-user-circle fa-lg"></i></a>-->
<!--						</div>-->
<!--						<div class="speaker-details text-center px-2 py-3">-->
<!--							<h5>Assoc. Prof. Dr. Supavadee Aramvit</h5>-->
<!--							<h6 class="p-0 m-0" style="color: #FFFFFF">-->
<!--							Department of Electrical Engineering,  Chulalongkorn University, Thailand-->
<!--							</h6>-->
<!--							<p class="p-0 m-0">-->
<!--							Title: </br> AI based Video Analytics -->
<!--							</p>-->
<!--							</br>-->
<!--						</div>-->
<!--					</div>-->
					<div class="col-sm-12 col-md-4 col-lg-4 speaker" id="keynote-speaker">
						<img src="./assets/images/speakers/Dr.NalinAsankaGamagedaraArachchilage.jpg" width="100%">
						<div class="speaker-social-links text-center p-3" id="keynote-speaker-slinks">
							<a href="#" data-toggle="modal" data-target="#keynote-speaker-two"><i class="fas fa-user-circle fa-lg"></i></a>
						</div>
						<div class="speaker-details text-center px-2 py-3">
							<h5>Professor Muttukrishnan Rajarajan</h5>
							<h6 class="p-0 m-0" style="color: #FFFFFF">Department of Electrical and Electronic Engineering
                                School of Science and Technology
                                City University of London, United Kingdom
                            </h6>
							<p class="p-0 m-0">
							Title: Professor of Security Engineering & Director Institute for Cyber Security
							</p>
						</div>
					</div>
				</div>

				<br><br>

					<h4 class="text-center mb-4">WIE Track </h4>
				<div class="subpage-sec-horiz-divider-center mb-4"></div>
				<div class="text-center mb-4">
					<!-- <small style="color: #777; font-family: font_medium;">Workforce STEM Pipeline needs to re-imaging: Improving Access and Participation of Women in STEM</small> -->
				</div>
				<!-- <div class="row justify-content-center" id="sub-speakers-div">
					<div class="col-sm-12 col-md-4 col-lg-4 speaker" id="speaker3">
						<img src="./assets/images/speakers/ms.Wilson.jpg" width="100%">
						<div class="speaker-details text-center px-2 py-3">
							<h5>Ms. Kasturi Chellaraja Wilson</h5>
							<p class="p-0 m-0">Director/CEO , Hemas Holdings PLC</p>
						</div>
					</div>
				</div> -->
				<div class="row justify-content-center" id="sub-speakers-div">
				<div class="col-sm-12 col-md-4 col-lg-4 oc-person">
						<img src="./assets/images/speakers/ms.Wilson.jpg" width="100%">
						<div class="oc-person-details text-center">
							<div class="py-3">
								<h5>Ms. Kasturi Chellaraja Wilson</h5>
								<small>Director/CEO , Hemas Holdings PLC</small>
							</div>
						</div>
					</div>
					</div>
				<br><br>

				<h4 class="text-center mb-4">Plenary Speakers</h4>
				<div class="subpage-sec-horiz-divider-center mb-4"></div>

<div class="subpage-sec-content mt-5 text-justify" id="speaker-sec" data-aos="fade-up" data-aos-duration="1900">
				<div class="row m-0 justify-content-center">
					<div class="col-sm-12 col-md-4 col-lg-4 oc-person">
						<img src="./assets/images/speakers/Prof.PradeepAbeygunawardhana.jpg" width="100%" >
						<div class="oc-person-details text-center">
							<div class="py-3">
								<h5>Prof. P. Abeygunawardhana</h5>
								<small>Sri Lanka Institute of Information Technology</small>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4 oc-person">
						<img src="./assets/images/speakers/Prof.PrasadM.Jayaweera.jpg" width="100%">
						<div class="oc-person-details text-center">
							<div class="py-3">
								<h5>Prof. Prasad M. Jayaweera</h5>
								<small>University of Sri Jayewardenepura</small>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4 oc-person">
						<img src="./assets/images/speakers/drcrajapaksha.jpg" width="100%">
						<div class="oc-person-details text-center">
							<div class="py-3">
								<h5>Dr. Chathura Rajapaksha</h5>
								<small>University of Kelaniya</small>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4 oc-person">
						<img src="./assets/images/speakers/Dr.WindhyaRankothge.jpg" width="100%" height="73%">
						<div class="oc-person-details text-center">
							<div class="py-3">
								<h5>Dr. Windhya Rankothge</h5>
								<small>Sri Lanka Institute of Information Technology</small>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4 oc-person">
						<img src="./assets/images/speakers/Dr.Kasun-Karunanayaka.jpg" width="100%" height="73%">
						<div class="oc-person-details text-center">
							<div class="py-3">
								<h5>Dr. Kasun Karunanayake </h5>
								<small>University of Colombo School of Computing</small>
							</div>
						</div>
					</div>
					
					
					<div class="col-sm-12 col-md-4 col-lg-4 oc-person">
						<img src="./assets/images/speakers/DrLasithGunarardena(1).jpeg" width="100%" height="73%">
						<div class="oc-person-details text-center">
							<div class="py-3">
								<h5>Prof. Lasith Gunawardena</h5>
								<small>University of Sri Jayawardhanapura</small>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4 oc-person">
						<img src="./assets/images/speakers/Dr.LochandakaRanatunga.jpg" width="100%">
						<div class="oc-person-details text-center">
							<div class="py-3">
								<h5>Dr. Lochandaka Ranatunga </h5>
								<small>University of Moratuwa </small>
							</div>
						</div>
					</div>
												
					<div class="col-sm-12 col-md-4 col-lg-4 oc-person">
						<img src="./assets/images/speakers/DrPradeep-Kalansooriya.jpg" width="100%">
						<div class="oc-person-details text-center">
							<div class="py-3">
								<h5>Dr. L. P. Kalansooriya</h5>
								<small>General Sir John Kotelawala Defence University</small>
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-4 col-lg-4 oc-person">
						<img src="./assets/images/speakers/Dr.JEkanayake.jpg" width="100%">
						<div class="oc-person-details text-center">
							<div class="py-3">
								<h5>Dr. Jayalath Ekanayake</h5>
								<small>Uva Wellassa University</small>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4 oc-person">
					<img src="./assets/images/speakers/Mrs.-Heshani-Mahalaksha.jpg" width="100%">
						<div class="oc-person-details text-center">
							<div class="py-3">
							<h5>Ms. Heshani Mahalaksha</h5>
							<small>Ceylon Electricity Board (CEB)</small>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
				<br><br>

			
			
				
							
			</div>
		</div>
		<svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="50 0 1340 220"><path fill="#cf6620" fill-opacity="1" d="M0,160L40,138.7C80,117,160,75,240,69.3C320,64,400,96,480,128C560,160,640,192,720,186.7C800,181,880,139,960,144C1040,149,1120,203,1200,208C1280,213,1360,171,1400,149.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
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
	      	<h4 class="modal-title speaker-title">Assoc. Prof. Dr. Supavadee Aramvit</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true"><i class="fal fa-times fa-lg"></i></span>
	        </button>
	      </div>
	      <div class="modal-body">
            <p class="speaker-bio">
			Supavadee Aramvith received the B.S. (first class honors) degree in Computer Science from
			Mahidol University in 1993. She received the M.S. and Ph.D. degrees in Electrical Engineering
			from the University of Washington, Seattle, USA, in 1996 and 2001, respectively. She joined
			Chulalongkorn University in June 2001. Currently, she is an Associate Professor at Department of
			Electrical Engineering with specialization Video Technology. She has successfully advised 11
			Ph.D., 27 Master’s, and 36 Bachelor’s Graduates. She published over 130 papers in International
			Conference Proceedings and Journals with 4 International Book Chapters. She has rich project
			management experiences as the project leader and former technical committee chairs to the
			Thailand Government bodies in Telecommunications and ICT. She is very active in the
			international arena with the leadership positions in the international network such as JICA Project
			for AUN/SEED-Net, and the professional organizations such as IEEE, IEICE, APSIPA, and ITU.
			She is currently a member, IEEE Educational Activities Board (EAB) and Chair, IEEE EAB Section
			Education Outreach Committee. She is also a member of Board of Governors of IEEE Consumer
			Electronics Society (2019-2021), Communications Chair, IEEE Humanitarian Activities Committee,
			IEEE New Initiative Committee member, IEEE N&amp;A member. She also chaired Region 10 Sections
			&amp; Chapters Committee in 2019-2020 and was the candidate for 2021-2023 Region 10 Director-
			Elect. She formerly led Educational Activities and Women in Engineering for IEEE Asia Pacific
			(Region 10) from 2011-2016.
			 </p>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="keynote-speaker-two" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	      	<h4 class="modal-title speaker-title">Professor Muttukrishnan Rajarajan</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true"><i class="fal fa-times fa-lg"></i></span>
	        </button>
	      </div>
	      <div class="modal-body">
            <p class="speaker-bio">
                Professor Muttukrishnan Rajarajan received his BEng and PhD degrees from City University of London in 1994 and 1999 respectively. From 1999 he worked at City University of London as a Research Fellow. In August 2000 he moved to CMG as a Telecommunications Consultant. After a few years in the industry Raj is now a Professor of Security Engineering. He is currently the Director of the Institute for Cyber Security at City University of London and carries out research in the areas of privacy preserving data management, Internet of Things privacy, network intrusion detection, cloud security and identity management using blockchain. Raj has received funding from EPSRC, Royal Academy of Engineering, European Commission, Innovate UK, British Council and industry to carry out research in cyber security. He has supervised several PhDs jointly with British Telecommunications, UK in the area if data analytics for cyber security and network intrusion detection. To date Raj has graduated more than 30 PhD students in the area of Cyber Security and continues to supervise a good number of students in the area of Cloud Security, Privacy and blockchain.
			  </p>

			  <p class="speaker-bio">
                  He is a senior member of IEEE, a member of IET and an associate member of the charted institute of information security and a member of Technical Programme Committees of several security and privacy conferences. Raj is the CEO of CityDefend (www.citydefend.com) a start up in the area of secure search in the encrypted Cloud. He also sits on the Editorial boards of the Journal on Wireless Networks, Elsevier Journal of Health Policy and Technology and Emerald Journal of Information Management and Computer Security.
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