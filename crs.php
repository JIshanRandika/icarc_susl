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

			Header Content -
	        <div class="subpage-header-content text-center" >
	            <div class="subpage-header-text-div">
	                <div class="subpage-title-div">
	                   <h1 class="subpage-header-title"><div style="color: #f7ce0f;display:inline-block;">Camera Ready</div> <div style="color: #ffffff;display:inline-block;"> Paper Submission</div></h1>
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
	<section class="continer-fluid padding subpage-section tp-track-sec" id="details">
		<div class="container pt-5">
			<!-- <div class="subpage-sec-content my-5 crs-sec" id="crs-sec" data-aos="fade-up" data-aos-duration="1600">
				<p>
                Hopefully, you have visited this web page because your research paper has been accepted to be presented at the2021 International Conference on Advanced Research in Computing 2023, which will be held from 23 - 24 February 2023.
                </p>
                <div class="text-left my-4 crs-sec">
                    <span class="alert alert-primary">
                        Congratulations and well done!
                    </span>
                </div>
                <p>
                Now it's time to complete the next procedures. Please scroll down to refer the instructions given below for the camera ready full-paper submission to the conference.
                </p>
			</div> -->
            <!-- <div class="subpage-sec-content mb-5 crs-sec" data-aos="fade-up" data-aos-duration="1800">
                <h5>Key Steps in the Camera-Ready Process</h5>
                <ol>
                    <li>Register for the conference.</li>
                    <li>Submit copyright consent.</li>
                    <li>Prepare the final manuscript.</li>
                    <li>Upload the PDF returned to CMT.</li>
                </ol>
            </div> -->
            <div class="subpage-sec-content mb-4 crs-sec" data-aos="fade-up" data-aos-duration="2000">
                <h5 style="padding-top: 20px;">1. Formatting Camera Ready Paper</h5></br>
                <div style=" display: block;list-style-type: disc;margin-top: 1em;margin-bottom: 1 em;margin-left: 0;margin-right: 0;padding-left: 40px;">
                <li>
                	Address review comments carefully.
                </li>
                <li >
                	The Camera Ready paper must follow the <a target="_blank" href="https://www.ieee.org/conferences/publishing/templates.html">IEEE guidelines</a>.
                </li>
                <li >
                	Conference organizers would Return/Reject the paper if the review comments were not addressed properly or sufficient effort was not taken by the author. This decision will be taken by TPC Committee of the Conference.
                </li>
                <li >
                	During this stage author can include
                </li>
                 <div style=" display: block;list-style-type: disc;margin-bottom: 1 em;margin-left: 0;margin-right: 0;padding-left: 40px;">
                        <li style="padding-left: 20px;">
                        &nbsp;&nbsp;&nbsp;Author information( i.e. names, affiliations, email)
                        </li>
                        <li style="padding-left: 20px;">
                        &nbsp;&nbsp;&nbsp;Any acknowledgements/ Grant of the Research if applicable.
                        </li>
                        </div>
                <li >
                     During the final submission the following will be cross checked
                </li>
                    <div style=" display: block;list-style-type: disc;margin-bottom: 1 em;margin-left: 0;margin-right: 0;padding-left: 40px;">
                 
                        <li style="padding-left: 20px;">
                        &nbsp;&nbsp;&nbsp;Change in title, keywords, abstracts, contents (all these may be allowed if the review comments are given)
                        </li>
                        <li style="padding-left: 20px;">
                        &nbsp;&nbsp;&nbsp;Addition of authors (not allowed)
                    </li>
                </div>
                <li >
                	Abstract on CMT should be the same as the abstract on Camera Ready paper.  On Conference Day, the abstract proceedings will be presented. Abstract in CMT will be taken for proceedings.
                </li>
                <li >
                	Only PDF files that are IEEE PDF compliant are accepted.  (Pending approval)
                <!-- </p> -->
                <li >
                	DO NOT include page numbers in the final manuscript submission.

                </li>
                </div>
            </div>
            <div class="subpage-sec-content mb-4 crs-sec" data-aos="fade-up" data-aos-duration="2200">
                <h5 style="padding-top: 20px;">2. PDF Express</h5>
                <p>
                Content Pending
                </p>
               
            </div>
            <div class="subpage-sec-content mb-4 crs-sec" data-aos="fade-up" data-aos-duration="2200">
                <h5 style="padding-top: 20px;">3. IEEE Copyright Guideline      </h5>
                <p>
                <a target="_blank" href="https://www.ieee.org/publications/rights/copyright-main.html">IEEE Guidelines</a>.
                 
                </p>
                
            </div>
            <!-- <div class="subpage-sec-content mb-4 crs-sec" data-aos="fade-up" data-aos-duration="2200">
                <h5>2. Submit Your Copyright Consent</h5>
                <p>
                    Authors should upload the scanned copy of Author Declaration Form signed by all authors, to the CMT system along with the abstract.
                </p>
                <p class="mt-4 mb-5">
                    <a href="resources/COPYRIGHT_AND_CONSENT_FORM.docx" download class="theme-btn"><i class="fal fa-download fa-lg mr-2"></i> COPYRIGHT AND CONSENT FORM</a>
                </p>
            </div> -->
            <!-- <div class="subpage-sec-content mb-4 crs-sec" data-aos="fade-up" data-aos-duration="2400">
                <h5>3. Prepare the Final Manuscript</h5>
                <ol>
                    <li>The authors are expected to address all reviewer comments supplied and change the paper accordingly.</li>
                    <li>Please submit your final manuscript by the February 8, 2023 (no extension will be provided).</li>
                    <li>Each camera ready submission must strictly adhere to the formatting instructions in order to be included in the ICARC 2023 Proceedings.</li>
                    <li>Regular Papers classified as Full Papers will be assigned a 6-page limit in the Conference Proceedings</li>
                    <li>Short Papers will be assigned a 4-page limit in the Conference Proceedings.</li>
                    <li>Similarity with other papers should be low (a similarity index below 30 % is acceptable for publication).</li>
                    <li>Your final manuscript (at most six pages for full papers) must be in PDF form. In particular, this must be a file that will successfully print anywhere, so:</li>
                    <ul class="mb-2">
                        <li>all fonts must be embedded;</li>
                        <li>the resolution must be 600 dpi;</li>
                        <li>the printing must be monochrome;</li>
                        <li>the paper size must be A4.</li>
                    </ul>
                    <li>Abstract should be 150-200 words. It should have research gap, how your solution fills that gap, methods and techniques used in brief, impact of your results/ how successful your solution is.</li>
                    <li>Please ensure that your introduction highlights the research problem and how you want to contribute by solving it.</li>
                    <li>Results: This is important and if you do not have convincing, verifiable results, your paper will be rejected even in this stage.</li>
                    <li>Conclusions should highlight your contribution and future research work that may emerge in these lines.</li>
                    <li>References in IEEE format. You might have referred PDFs taken from different sources but track down the source (conference/journal or other source) and put that reference in correct format given in the guideline.</li>
                    <li>The images should be clear, visible, and the captions should follow the IEEE formatting guidelines.</li>
                </ol>
            </div> -->
            <!-- <div class="subpage-sec-content mb-4 crs-sec" data-aos="fade-up" data-aos-duration="2200">
                <h5>4. Upload the PDF returned to CMT</h5>
                <p class="mt-5">
                    <a href="https://cmt3.research.microsoft.com/ICARC2021" target="_blank" class="theme-btn">Upload to CMT</a>
                </p>
            </div> -->
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