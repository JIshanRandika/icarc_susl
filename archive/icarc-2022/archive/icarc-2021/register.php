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

			Header Content 
	        <div class="subpage-header-content text-center" >
	            <div class="subpage-header-text-div">
	                <div class="subpage-title-div">
	                   <h1 class="subpage-header-title"><div style="color: #f7ce0f;display:inline-block;">Registration</span></h1>
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
			<div class="subpage-sec-title text-center" data-aos="fade-up" data-aos-duration="1300">
                <h1 style="padding-top: 20px;">Tickets</h1>
                <div class="subpage-sec-horiz-divider-center"></div>
            </div>
            <p class="subpage-sec-para text-center" data-aos="fade-up" data-aos-duration="1600">
				Find the best matching ICARC 2021 conference ticket for you.
			</p>
			<div class="subpage-sec-content my-5" data-aos="fade-up" data-aos-duration="1700">
				<div class="row align-items-center justify-content-center text-center pb-4" id="tickets-row">
	                <div class="col-sm-12 col-md-4 col-lg-4 ticket-col px-5" id="ticket1">
	                    <div class="ticket-body">
	                        <div class="ticket-curve mb-3" id="ticket-top-curve"></div>
	                        <div class="text-center ticket-title mb-3 pb-2">
	                            <h3 class="p-2 mx-3">International</h3>
	                        </div>
	                        <div class="ticket-content py-3 mx-3">
	                            <div class="content-parts">
	                                <h6>Author / Co-Author</h6>
	                                <div>
										<i class="text-primary"><b>Normal Paper</b></i><br>
	                                    Early bird - <span class="ticket-price">250 USD</span><br>Regular - <span class="ticket-price">300 USD</span>
	                                </div>
									<div>
										<i class="text-primary"><b>Short Paper</b></i><br>
	                                    Early bird - <span class="ticket-price">200 USD</span><br>Regular - <span class="ticket-price">250 USD</span>
	                                </div> 
	                            </div>
	                            <div class="ticket-divider my-3"></div>
	                            <div class="content-parts">
	                                <h6>Student Author</h6>
	                                <div>
										<i class="text-primary"><b>Normal Paper</b></i><br>
	                                    Early bird - <span class="ticket-price">200 USD</span><br>Regular - <span class="ticket-price">250 USD</span>
	                                </div> 
									<div>
										<i class="text-primary"><b>Short Paper</b></i><br>
	                                    Early bird - <span class="ticket-price">150 USD</span><br>Regular - <span class="ticket-price">100 USD</span>
	                                </div> 
	                            </div>
	                            <div class="ticket-divider my-3"></div>
	                            <div class="content-parts">
	                                <h6>Participant</h6>
	                                <div>
	                                    Early bird - <span class="ticket-price">240 USD</span><br>Regular - <span class="ticket-price">290 USD</span>
	                                </div> 
	                            </div>
	                        </div>
	                        <div class="ticket-curve mt-3" id="ticket-bottom-curve"></div>
	                    </div>
	                </div>
	                <div class="col-sm-12 col-md-4 col-lg-4 ticket-col px-5" id="ticket3">
	                    <div class="ticket-body">
	                        <div class="ticket-curve mb-3" id="ticket-top-curve"></div>
	                        <div class="text-center ticket-title mb-3 pb-2">
	                            <h3 class="p-2 mx-3">Local</h3>
	                        </div>
	                        <div class="ticket-content py-3 mx-3">
	                            <div class="content-parts">
	                                <h6>Author / Co-Author</h6>
	                                <div>
										<i class="text-primary"><b>Normal Paper</b></i><br>
	                                    Early bird - <span class="ticket-price">4000 LKR</span><br>Regular - <span class="ticket-price">5000 LKR</span>
	                                </div> 
									<div>
										<i class="text-primary"><b>Short Paper</b></i><br>
	                                    Early bird - <span class="ticket-price">3000 LKR</span><br>Regular - <span class="ticket-price">4000 LKR</span>
	                                </div> 
	                            </div>
	                            <div class="ticket-divider my-3"></div>
	                            <div class="content-parts">
	                                <h6>Student Author</h6>
	                                <div>
										<i class="text-primary"><b>Normal Paper</b></i><br>
	                                    Early bird - <span class="ticket-price">1500 LKR</span><br>Regular - <span class="ticket-price">1500 LKR</span>
	                                </div>
									<div>
										<i class="text-primary"><b>Short Paper</b></i><br>
	                                    Early bird - <span class="ticket-price">1000 LKR</span><br>Regular - <span class="ticket-price">1000 LKR</span>
	                                </div> 
	                            </div>
	                            <div class="ticket-divider my-3"></div>
	                            <div class="content-parts">
	                                <h6>Participant</h6>
	                                <div>
	                                    Early bird - <span class="ticket-price">3500 LKR</span><br>Regular - <span class="ticket-price">4500 LKR</span>
	                                </div> 
	                            </div>
	                        </div>
	                        <div class="ticket-curve mt-3" id="ticket-bottom-curve"></div>
	                    </div>
	                </div>
	            </div>
	            <br><br>
	            <div data-aos="fade-up" data-aos-duration="1600">
					<p class="subpage-sec-para">
						NOTE: The Conference Kit will be posted to the postal address, provided in the Registration form.
					</p>
					<div class="row reg-person-benefits">
						<div class="col-sm-12 col-md-6 col-lg-6">
							<h6>Author / Student Author / Co-Author</h6>
							<hr>
							<div style=" display: block;list-style-type: disc;margin-top: 1em;margin-bottom: 1 em;margin-left: 0;margin-right: 0;padding-left: 40px;">
								<li>Participation in all sessions</li>
								<li>Conference Kit</li>
								<li>Program Book</li>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<h6>Participants</h6>
							<hr>
							<div style=" display: block;list-style-type: disc;margin-top: 1em;margin-bottom: 1 em;margin-left: 0;margin-right: 0;padding-left: 40px;">
								<li>Participation in all sessions</li>
								<li>Program Book</li>
							</div>
						</div>
					</div>
					<p class="mt-3 text-right"><small><i>**Participant = Spouse / Partner</i></small></p>
					<br>
					<div class="sub-title-paras mb-3">
						<h5>Payment Details:</h5>
						<p class="mt-3">
							NOTE: Refrain from depositing funds via CDM/CRM Machines.
						</p>
						<table class="table table-bordered table-sm mb-5">
							<tbody>
								<tr>
									<td>Method of Payment</td>
									<td>Bank Transfer</td>
								</tr>
								<tr>
									<td>Bank Account Number</td>
									<td>0002246976</td>
								</tr>
								<tr>
									<td>Name of the Bank</td>
									<td>Bank of Ceylon</td>
								</tr>
								<tr>
									<td>Branch</td>
									<td>Balangoda, Sri Lanka.</td>
								</tr>
								<tr>
									<td>Swift Code</td>
									<td>BCEYLKLX</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="sub-title-paras mb-3">
						<h5 style="padding-top: 20px;">Online Registration:</h5>
						<div style=" display: block;list-style-type: disc;margin-top: 1em;margin-bottom: 1 em;margin-left: 0;margin-right: 0;padding-left: 40px;">
							<p>Each accepted paper needs at least one author registration by February 15th, 2021 and should
							upload a clear scanned copy or a photo of the bank slip.</p>
							<p>Student must declare a valid student status (such as a copy of student card or other evidence) in registration 
							and you will receive a Registration Confirmation Email once the conference committee reviews your payment details and/or studentship proof details.</p>
						</div>
						<br>
						<a class="theme-btn" href="https://forms.gle/p8nkcoKks4F7jiMF9" target="_blank" rel="noopener noreferrer">Register Now</a>
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