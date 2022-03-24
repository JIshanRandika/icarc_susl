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
    <link rel="stylesheet" type="text/css" href="vendor/css/style.css">
    <link rel="stylesheet" type="text/css" href="vendor/css/responsive.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- AOS js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="vendor/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Favicon Icon -->
    <link rel="icon" href="assets/images/logo/tabIcon.ico">
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

			Header Content -
	        <div class="subpage-header-content text-center" >
	            <div class="subpage-header-text-div">
	                <div class="subpage-title-div">
	                   <h1 class="subpage-header-title"><div style="color: #ffffff;display:inline-block;">Technical Program</div> <div style="color: #f7ce0f;display:inline-block;">Committee</div></h1>
	                </div>
	            </div>
				<div class="subpage-scroll-div">
					<a href="#details" id="page-scroll-btn"><i class="fal fa-arrow-down fa-lg"></i></a>
				</div>
	            <svg class="subpage-header-svg" xmlns="http://www.w3.org/2000/svg" viewBox="150 0 1120 250"><path fill="#f7f7f7" fill-opacity="1" d="M0,320L48,277.3C96,235,192,149,288,149.3C384,149,480,235,576,234.7C672,235,768,149,864,144C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
	        </div>
		</div>
    </header>
	
	<!-- Advisory Panel content -->
	<section class="continer-fluid padding subpage-section" id="details">
		<div class="container pt-5">
			<div class="subpage-sec-content mt-5 text-center" id="ac-sec" data-aos="fade-up" data-aos-duration="1900">

				<h4>Technical Program Chair</h4>
					<p>Prof. S. Vasanthapriyan, Sabaragamuwa University of Sri Lanka</p>
                <h5>Artificial Intelligence and Machine Learning Track</h5>
					<p>Dr. Lochandaka Ranatunga, University of Moratuwa (Chair)</br>
					Prof. B.T.G.S. Kumara, Sabaragamuwa University of Sri Lanka (Co-Chair)
						</p>
                <h5>Data Science and Applications Track</h5>
					<p>Dr. Chathura Rajapaksha, University of Kelaniya(Chair)
					</br>Prof. R.M.K.T. Rathnayake, Sabaragamuwa University of Sri Lanka (Co-Chair)</p>
                <h5>Parallel and Distributed Computing Track</h5>
					<p>Dr. Windhya Rankothge, Sri Lanka Institute of Information Technology (Chair)
					</br>Dr. K.P.N. Jayasena, Sabaragamuwa University of Sri Lanka (Co-Chair)</p>
                <h5>Human-Computer Interaction and Computer Vision Track</h5>
					<p>Dr. Kasun Karunanayake, University of Colombo School of Computing (Chair)
					</br>Mr. R.L. Dangalla, Sabaragamuwa University of Sri Lanka (Co-Chair)</p>
				<h5>Knowledge Management and Information Systems Track</h5>
					<p>Prof. Lasith Gunawardena, University of Sri Jayawardhanapura (Chair)
					</br>Dr. Thilini Bhagya , Massey University, New Zealand (Co-Chair)</p>
					
				<h5>Software Engineering Track</h5>
					<p>Dr. Jayalath Ekanayaka, Uva Wellassa University of Sri Lanka (Chair)
					</br>Dr. Hiruni Rupasinghe, Sabaragamuwa University of Sri Lanka (Co-Chair)</br>
					</p>
				<h5>Industry R&D Track</h5>
					<p>Ms. Heshani Mahalaksha, Electrical Engineer at Ceylon Electricity Board (Chair)
					</br>Ms. Subodhi Wasalthilake, Sabaragamuwa University of Sri Lanka (Co-Chair)</p>

                <h5>Technology-enhanced learning and teaching Track</h5>
					<p>Prof. Pradeep Abeygunawardhana, Sri Lanka Institute of Information Technology (Chair)
					</br>Prof. Prasad Jayaweera, University of Sri Jayawardhanapura (Co-Chair)</p>
				
				<h5>General/Open Track</h5>
					<p>Dr. L.P. Kalansooriya, General Sir John Kotelawala Defence University (Chair)
					</br>Dr.  L.S. Lekamge, Sabaragamuwa University of Sri Lanka (Co-Chair)</p>

				<h4>Committee Members</h4>
				<p>
					Assoc. Prof. Chinthaka Premachandra - Shibaura Institute of Technology, Japan</br>
					Prof. Chandimal Jayawardena - Sri Lanka Institute of Information Technology</br>
					Prof. Dongdong Zhao - Wuhan University of Technology, China</br>
					Prof. Jian Tian - Japan Advanced Institute of Science and Technology (JAIST), Japan</br>
					Dr. Sagara Sumathipala - University of Moratuwa</br>
					Dr. Janaka Wijekoon - Sri Lanka Institute of Information Technology</br>
					Dr. Anuradha Jayakody - Sri Lanka Institute of Information Technology</br>
					Dr. Ruwan Wickramarachchi - University of Kelaniya</br>
					Dr. Ajantha Atukorale - University of  Colombo School of Computing </br>
					Dr. Tharinda Nishantha Vidanagama - Wayamba University of Sri Lanka</br>
					Dr. M. Siyamalan - University of Jaffna</br>
					Dr. K. Thabotharan - University of Jaffna</br>
					Dr. S.R. Liyanage - University of Kelaniya</br>
					Dr. A. Ramanan -  University of Jaffna</br>
					Dr. Dilrukshi Gamage - Tokyo Institute of Technology, Japan</br>
					 Dr. Tomotaka Kimura - Doshisha University, Japan</br>
					 Dr. Hiroshi Ikeoka - Fukuyama University, Japan</br>
					 Dr. Ravneet Kaur - Chitkara University, India</br>
					 Dr. Samiru Gayan - University of Moratuwa</br>

					</p>
			</div>
		</div>
		<svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="50 0 1340 220"><path fill="#cf6620" fill-opacity="1" d="M0,160L40,138.7C80,117,160,75,240,69.3C320,64,400,96,480,128C560,160,640,192,720,186.7C800,181,880,139,960,144C1040,149,1120,203,1200,208C1280,213,1360,171,1400,149.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
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