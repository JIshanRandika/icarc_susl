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
	                   <!-- <h1 class="subpage-header-title">Technical <span style="color: #f7ce0f;">Program</span></h1> -->
					   <h1 class="subpage-header-title"><div style="color: #ffffff;display:inline-block;">Technical </div> <div style="color: #f7ce0f;display:inline-block;">Program</div> </h1>
	                </div>
	            </div>
				<div class="subpage-scroll-div">
					<a href="#details" id="page-scroll-btn"><i class="fal fa-arrow-down fa-lg"></i></a>
				</div>
	            <svg class="subpage-header-svg" xmlns="http://www.w3.org/2000/svg" viewBox="150 0 1120 250"><path fill="#f7f7f7" fill-opacity="1" d="M0,320L48,277.3C96,235,192,149,288,149.3C384,149,480,235,576,234.7C672,235,768,149,864,144C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
	        </div>
		</div>
    </header>
	
	<!-- ---------- Call for papers content ----------- -->
	<section class="continer-fluid padding subpage-section tp-track-sec" id="details">
		<div class="container pt-5">
			<div class="subpage-sec-content my-5" id="tp-sec" data-aos="fade-up" data-aos-duration="1900">
				<ul>
					<li><div style="color: ##000000;display:inline-block;font-weight: bold;">Review Instructions:</div>    
						<div>
							The papers submitted to the conference will be subjected to double-blind reviews by a maximum of three (03) reviewers, who will be experts in the corresponding sub-field. Therefore, the names or affiliations of the authors should not be on the first page. The field experts for the reviewing process are selected Nationally (70%) and Internationally (30%).
						</div>
						</br>
						<div>
							Acknowledgments of funding or assistance should also be omitted. Submissions should not contain pointers to supplemental material on the web. When referring to one’s own work, use the third person, rather than the first person. Such information may be added to the final camera-ready version for publication.
						</div>
					</li>
					<li><div style="color: ##000000;display:inline-block;font-weight: bold;">Quality of Paper:</div>
						<div>
							Submissions may have up to six (06) pages in double-column. Papers exceeding the specified length and formatting requirements are subject to rejection without review. The final decision of accepting or rejection of your work will be taken by the conference core committee based on the originality of the work. If the committee found plagiarism more than 30% or the paper is not formatted according to conference guidelines or based on the reviewing process, papers will be rejected. The papers will also be checked for the quality of English and will be rejected if it is not up to the mark.
						</div>
						</br>
						<div>
							The final submission must include title; the primary author’s full name, affiliation, and e-mail address; all co-authors’ full names and affiliations; text; and any figures, tables, or diagrams. Note that all papers accepted for publication must be original. The authors need to submit the papers by using Conference Management Toolkit- Microsoft. A copyright form is supposed to be submitted at the final camera-ready submission.
						</div>
						</br>
						<div>
							A Best Paper Award and Best Track Paper Award winners will be announced at the end of sessions.
						</div>
						</br>
						<div style=" display: list-item;"><div style="color: ##000000;display:inline-block;font-weight: bold;">Selection of Best paper of the Sessions and Conference:</div>
						<p style="padding-top: 20px;">
									1.	Nominated Papers for each track will be shortlisted based on the review score (average score of 4.0+ out of 5.0).
							</br>
									2.	On the conference presentation day, the session chairs and members nominated from TPC will together take the decision for the best paper for each track by considering the status/quality of presentations.
							</br>	
									3.	Best paper of the conference will be selected among the best session papers by the TPC chair together with session chairs. 
							</br>
							</p>
							<div>
					</li>
				</ul>
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