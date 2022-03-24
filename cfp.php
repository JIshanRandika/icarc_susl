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
	                   <h1 class="subpage-header-title"><div style="color: #ffffff;display:inline-block;">Call For </div> <div style="color: #f7ce0f;display:inline-block;">Papers</div></h1>
	                </div>
	                <div class="subpage-header-text mt-4">
	                    <p>
	                    	ICARC 2023 is now calling for full paper submission. Prospective authors are invited to<br>submit their full papers with maximum 06 pages.
	                    </p>
	                </div>
	            </div>
				<div class="subpage-scroll-div">
					<a href="#details" id="page-scroll-btn"><i class="fal fa-arrow-down fa-lg"></i></a>
				</div>
	            <svg class="subpage-header-svg" xmlns="http://www.w3.org/2000/svg" viewBox="150 0 1120 250"><path fill="#f7f7f7" fill-opacity="1" d="M0,320L48,277.3C96,235,192,149,288,149.3C384,149,480,235,576,234.7C672,235,768,149,864,144C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
	        </div>
		</div>
    </header>
	
	 <!-- Call for papers content  -->
	 <section class="continer-fluid padding subpage-section cfp-track-sec" id="details">
		<div class="container pt-5">
			<div class="subpage-sec-title" data-aos="fade-up" data-aos-duration="1300">
                <h1 style="padding-top: 20px;">Tracks</h1>
                <div class="subpage-sec-horiz-divider"></div>
            </div>
			<p class="subpage-sec-para" data-aos="fade-up" data-aos-duration="1600">
				We encourage the submission of high-quality papers reporting original work in both theoretical and experimental research in computing. The following tracks are hereby solicited.
			</p>
			<div class="subpage-sec-content my-5" id="cfp-sec" data-aos="fade-up" data-aos-duration="1900">
				<table class="table table-borderless table-striped bg-light mt-3">
		            <tbody>
					<tr>
		                    <th scope="row" style="background-color: #f7ce0f;">1</th>
		                    <td>
							<div style="color: ##000000;display:inline-block;font-weight: bold;">Artificial Intelligence and Machine Learning :</div><br>
							<div >Machine Learning, Deep Learning & AI, Fuzzy Logic and Fuzzy Systems, Hybrid Intelligent Systems, Information Retrieval, Robotics, Soft Computing and Applications, Probabilistic Reasoning, Evolutionary Computing, Hybrid Intelligent Systems, Software Agents, Soft Computing Theory and Applications, Web Intelligence Applications & Search.</div>
		                    </td>
		                </tr>
		                <tr>
		                    <th scope="row" style="background-color: #3b65b0;color: #f7f7f7; ">2</th>
		                    <td>
							<div style="color: ##000000;display:inline-block;font-weight: bold;">Data Science and Applications : </div><br>
							<div >Natural Language Processing, Sentiment Analysis, Statistics, Data Storage, Management and Innovation, Big Data Analytics, Business Analytics, Data Science Techniques for Handling Epidemics and Pandemics.</div>
		                    </td>
		                </tr>
		                <tr>
		                    <th scope="row" style="background-color:#f7ce0f; ">3</th>
		                    <td>
							<div style="color: ##000000;display:inline-block;font-weight: bold;">Parallel and Distributed Computing : </div><br>
							<div >Parallel Algorithms, Parallel and Distributed Micro-Architectures, Performance Modelling for Parallel and Distributed Processing, Parallel and Distributed Programming Models, Middleware and System Software, Applications in Blockchain and Cryptocurrency, Bioinformatics, Cybersecurity, Computer Networks and Cloud Computing.</div>
		                    </td>
		                </tr>
		                <tr>
		                    <th scope="row" style="background-color: #3b65b0;color: #f7f7f7; ">4</th>
		                    <td>
							<div style="color: ##000000;display:inline-block;font-weight: bold;">Human-Computer Interaction and Computer Vision  : </div><br>
							<div >Human-computer Interaction, Speech, Graphic, Haptic and  Multimodal Interaction, Cross-Cultural Design, Virtual, Mixed and Augmented Reality Interfaces and Systems, Artificial Intelligence in HCI, Image acquisition & Medical Image Processing, Pattern Recognition and Analysis, Visualization, Image Coding and Compression, Image and Video Analysis. </div>
		                    </td>
		                </tr>
		                <tr>
		                    <th scope="row" style="background-color: #f7ce0f;">5</th>
		                    <td>
							<div style="color: ##000000;display:inline-block;font-weight: bold;">Knowledge Management and Information Systems  : </div><br>
							<div >Information Systems Management, Information Systems and Technology, Knowledge Acquisition and Management, Information Systems Security, Knowledge Base Systems, Business Intelligence and CRM, KM Strategies and Implementations Knowledge Management Projects, Tools and Technology for Knowledge Management.</div>
		                    </td>
		                </tr>
		                <tr>
		                    <th scope="row" style="background-color: #3b65b0; color: #f7f7f7;">6</th>
		                    <td>
							<div style="color: ##000000;display:inline-block;font-weight: bold;">Software Engineering : </div><br>
							<div >Software Engineering Methodologies, SOA and Service-Oriented Systems, AI and software engineering, Testing and analysis, Empirical software Engineering, Software Evolution, Formal Methods Applied to Software Engineering, Social Aspects of Software Engineering, Requirements Modeling and Design, Dependability.</div>
		                    </td>
		                </tr>
						<tr>
		                    <th scope="row" style="background-color: #f7ce0f;">7</th>
		                    <td>
							<div style="color: ##000000;display:inline-block;font-weight: bold;">Technology-enhanced Learning and Teaching : </div><br>
							<div >eLearning Specifications and Standards, Large-scale Learning Systems, Personalization, User Modelling and Adaptation,  Computer-supported Collaborative Learning, Adaptive Learning Systems,  Collaborative Knowledge Building, Digital Divide and Learning, Education Policies, Learning Analytics, New forms of e-Assessment, Learning Design and Aesign Approaches, Teaching Techniques and Strategies for Online Learning.
							</div>
						</td>
		                </tr>
		                <tr>
		                    <th scope="row" style="background-color: #3b65b0; color: #f7f7f7;">8</th>
		                    <td>
								<div style="padding-top: 10px;"></div>
							<div style="color: ##000000;display:inline-block;font-weight: bold;">Industry R&D : </div><br>
							<div >Research and Development works conducted by industry can be submitted here.</div>
		                    </td>
		                </tr>
		                <tr>
		                    <th scope="row" style="background-color: #f7ce0f;">9</th>
		                    <td>
							<div style="color: ##000000;display:inline-block;font-weight: bold;">Open : </div><br>
							<div >Computing research papers which are not categorized under the above tracks are welcomed here.</div>
		                    </td>
		                </tr>
		            </tbody>
		        </table>
			</div>
			<div data-aos="fade-up" data-aos-duration="1600">
				<p class="subpage-sec-para">
				All papers submitted to this conference will go through a double-blind peer review process handled by the programme committee. Acceptance will be based on originality, significance, technical soundness, presentation, and references. The conference programme committee makes the final decision on the acceptance or rejection of a paper. Papers submitted and presented at the conference will be published in conference proceedings, subject to their acceptance by the editorial board. Selected papers will be published in Sabaragamuwa University Journal of Computer Science.
				</p>
				<div class="row justify-content-center mt-5 text-center" id="call-for-papers-download-btns">
					<a href="ag.php" class="theme-btn ml-3 mr-2">Author Guidelines</a>
					<a href="https://www.ieee.org/conferences/publishing/templates.html"  class="theme-btn ml-3 mr-2">Paper Template</a>
					<!-- <a class="theme-btn ml-3 mr-2">Download Flyer</a> -->
					<a href="./assets/resources/ICARC2022_Flyer.jpeg" download class="theme-btn ml-3 mr-2">Download Flyer</a>
					
					<a href="https://cmt3.research.microsoft.com/ICARC2022" target="_blank" class="theme-btn ml-3 mr-2">Submit Online</a>
				</div>
			</div>
		</div>
		<svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="50 0 1340 220"><path fill="#cf6620" fill-opacity="1" d="M0,160L40,138.7C80,117,160,75,240,69.3C320,64,400,96,480,128C560,160,640,192,720,186.7C800,181,880,139,960,144C1040,149,1120,203,1200,208C1280,213,1360,171,1400,149.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
	</section>

	<!---------- Back to top button ---------->
    <span id="back-to-top-btn"><i class="fal fa-arrow-to-top fa-lg"></i><span>Top</span></span>

    <!-- footer section ------------------------------------->
    <?php require_once './common/footer.php'; ?>

    <script>
        AOS.init({once: true});
    </script>
</body>
<div class="se-pre-con"></div>
</html>