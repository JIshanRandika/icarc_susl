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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

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
	                   <h1 class="subpage-header-title"><div style="color: #f7ce0f;display:inline-block;">Registration</div></h1>
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
			Registration is now open for ICARC 2022. Find the best matching conference ticket for you. 
			</p>

			<div class="card " style="background-color: #ee9fb9;" class="col-sm-12 col-md-4 col-lg-4">
				
			<div class="ticket-body" >
			<div class="card-body">
			<div class="register-handle">
			<div class="table-responsive">
			
			<table class="table table-bordered " >
			<tr>
				<th>Type of Participant</th>
				<th>International/Domestic</th>
				<th>Early Bird Registration (LKR/USD)</th>
				<th>Late Registration (LKR/USD)</th>
			</tr>
			<tr>
				<th rowspan="2">Author/ Co-author</th>
				<td class="text-primary">IEEE</td>
				<td>Rs.10,000.00/ 50 USD</td>
				<td>Rs.13,000.00/ 65 USD</td>
			</tr>
			<tr>
				<td class="text-primary">Non IEEE</td>
				<td>Rs.20,000.00/ 100 USD</td>
				<td>Rs.23,000.00/ 115 USD</td>
			</tr>
			<tr>
				<th rowspan="2">Student Author/ Co-author</th>
				<td class="text-primary">IEEE</td>
				<td>Rs.5,000.00/ 25 USD</td>
				<td>Rs.8,000.00/ 40 USD</td>
			</tr>
			<tr>
				<td class="text-primary">Non IEEE</td>
				<td>Rs.10,000.00/ 50 USD</td>
				<td>Rs.13,000.00/ 65 USD</td>
			</tr>
			<tr>
				<th rowspan="2">Participant</th>
				<td class="text-primary">IEEE</td>
				<td>Rs.7,500.00/ 38 USD</td>
				<td>Rs.10,000.00/ 50 USD</td>
			</tr>
			<tr>
				<td class="text-primary">Non IEEE</td>
				<td>Rs.15,000.00/ 75 USD</td>
				<td>Rs.18,000.00/ 90 USD</td>
			</tr>
				</table>
				</div>
				</div>
			</div>
			</div>
			</div>

			<!-- <div class="subpage-sec-content my-5" data-aos="fade-up" data-aos-duration="1700">
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
	                                <p>
										<i class="text-primary"><b>IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">10,000.00 LKR/50 USD</span><br>Late <br><span class="ticket-price">13,000.00 LKR/65 USD</span>
	                                </p>
									<p>
										<i class="text-primary"><b>Non IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">17,000.00 LKR/85 USD</span><br>Late <br> <span class="ticket-price">25,000.00 LKR/125 USD</span>
	                                </p> 
	                            </div>
	                            <div class="ticket-divider my-3"></div>
	                            <div class="content-parts">
	                                <h6>Student Author</h6>
	                                <p>
										<i class="text-primary"><b>IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">5,000.00 LKR/25 USD</span><br>Late <br> <span class="ticket-price">8,000.00 LKR/40 USD</span>
	                                </p> 
									<p>
										<i class="text-primary"><b>Non IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">10,000.00 LKR/50 USD</span><br>Late <br> <span class="ticket-price">13,000.00 LKR/65 USD</span>
	                                </p> 
	                            </div>
	                            <div class="ticket-divider my-3"></div>
	                            <div class="content-parts">
	                                <h6>Participant</h6>
	                                <p>
										<i class="text-primary"><b>IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">7,500.00 LKR/38 USD</span><br>Late <br> <span class="ticket-price">10,000.00 LKR/50 USD</span>
									</p>
									<p>
										<i class="text-primary"><b>Non IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">15,000.00 LKR/75 USD</span><br>Late <br> <span class="ticket-price">18,000.00 LKR/90 USD</span>
	                                </p>  
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
	                                <p>
										<i class="text-primary"><b>IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">10,000.00 LKR/50 USD</span><br>Late <br><span class="ticket-price">13,000.00 LKR/65 USD</span>
	                                </p>
									<p>
										<i class="text-primary"><b>Non IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">17,000.00 LKR/85 USD</span><br>Late <br> <span class="ticket-price">25,000.00 LKR/125 USD</span>
	                                </p> 
	                            </div>
	                            <div class="ticket-divider my-3"></div>
	                            <div class="content-parts">
	                                <h6>Student Author</h6>
	                                <p>
										<i class="text-primary"><b>IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">5,000.00 LKR/25 USD</span><br>Late <br> <span class="ticket-price">8,000.00 LKR/40 USD</span>
	                                </p> 
									<p>
										<i class="text-primary"><b>Non IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">10,000.00 LKR/50 USD</span><br>Late <br> <span class="ticket-price">13,000.00 LKR/65 USD</span>
	                                </p> 
	                            </div>
	                            <div class="ticket-divider my-3"></div>
								<div class="content-parts">
	                                <h6>Participant</h6>
	                                <p>
										<i class="text-primary"><b>IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">7,500.00 LKR/38 USD</span><br>Late <br> <span class="ticket-price">10,000.00 LKR/50 USD</span>
									</p>
									<p>
										<i class="text-primary"><b>Non IEEE</b></i><br>
	                                    Early bird <br> <span class="ticket-price">15,000.00 LKR/75 USD</span><br>Late <br> <span class="ticket-price">18,000.00 LKR/90 USD</span>
	                                </p>  
	                            </div>
	                        </div>
	                        <div class="ticket-curve mt-3" id="ticket-bottom-curve"></div>
	                    </div>
	                </div>
	            </div> -->
	            <br><br>
					<center>
					<div class="sub-title-paras mb-3">
						<!-- <h5>Register Here</h5> -->
						</br>
						<div class="row justify-content-center mt-5 text-center" id="call-for-papers-download-btns">
						<!-- <div style="display:inline-block;"><a href="https://forms.gle/kdhkKi6F2kDEKLUB7 ">Registration Google Form  </a> </div> -->
						<a style="font-size:30px" href="https://forms.gle/kdhkKi6F2kDEKLUB7" font-size: 30px; title="You have to do the payments before the registration " class="theme-btn ml-3 mr-2">Register Here </a>
						</div>

						<br>
						<!-- <a class="theme-btn" target="_blank" rel="noopener noreferrer">Register Now</a> -->
						<!-- <a class="theme-btn" href="https://forms.gle/p8nkcoKks4F7jiMF9" target="_blank" rel="noopener noreferrer">Register Now</a> -->
					</div>
					</center>

	            <div data-aos="fade-up" data-aos-duration="1600">
				<h5>Conference Package:</h5>
					<p class="subpage-sec-para" align="justify">
					The Conference Package which includes the following will be posted to the postal address,
					provided in the Registration form.
					</br>	
					
					</p>
					<div class="row reg-person-benefits">
						<div class="col-sm-12 col-md-6 col-lg-6">
							<h6 class="mt-3 text-left">Author / Student Author / Co-Author</h6>
							<hr>
							<div style=" display: block;list-style-type: disc;margin-top: 1em;margin-bottom: 1 em;margin-left: 0;margin-right: 0;padding-left: 40px;">
								<li>Participation in all sessions / Workshops</li>
								<li>Conference Kit</li>
								<li>Program Book</li>
								<li>Buffet Lunch</li>
								<li>Tea/Coffee Breaks</li>
								<!-- <li>Conference Banquet</li> -->
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-6">
							<h6 class="mt-3 text-left">Participants (Spouse/Partner/Other)</h6>
							<hr>
							<div style=" display: block;list-style-type: disc;margin-top: 1em;margin-bottom: 1 em;margin-left: 0;margin-right: 0;padding-left: 40px;">
								<li>Participation in all sessions / Workshops</li>
								<li>Program Book</li>
								<li>Buffet Lunch</li>
								<li>Tea/Coffee Breaks</li>
							</div>
						</div>
					</div>
					<p class="mt-3 text-right"><small><i>**Participant = Spouse / Partner</i></small></p>
					<br>
					<div class="sub-title-paras mb-3">
						<h5>Payment Details:</h5>
						</br>
						<div style="color: ##000000;display:inline-block;font-weight: bold;">
						Online Payment Gateway:
						</div>
						<p class="mt-3" align="justify">
						Online Payment Gateway is now enabled along with the Bank Transfer option. Once registration is done using Online Payment Gateway, Authors will receive an email notification of successful payment.				
						</p>
						<center>
					<div class="sub-title-paras mb-3">
						<!-- <h5>Proceed with Payment</h5> -->
						</br>
						<div class="row justify-content-center mt-5 text-center" id="call-for-papers-download-btns">
						<a  href="https://www.sab.ac.lk/codl/payment/?event=icarc2022" font-size: 500%;  class="theme-btn ml-3 mr-2">Proceed with Payment </a>
						</div>

						<br>
					</div>
					</center>
						<div style="color: ##000000;display:inline-block;font-weight: bold;">
						Bank Transfer/Online Transfer:
						</div>
						<p class="mt-3" align="justify">
						If an author cannot make the payment via the Online Payment Gateway, he/she can make the
						bank transfer/online transfer. Bank details are given below.						
						</p>
						<p class="mt-3" align="justify">
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
									<td>0003416128</td>
								</tr>
								<tr>
									<td>Account Name</td>
									<td>Sabaragamuwa University of Sri Lanka</td>
								</tr>
								<tr>
									<td>Name of the Bank</td>
									<td>Bank of Ceylon</td>
								</tr>
								<tr>
									<td>Bank Code</td>
									<td>7010</td>
								</tr>
								<tr>
									<td>Branch</td>
									<td>Balangoda, Sri Lanka.</td>
								</tr>
								<tr>
									<td>Branch Code</td>
									<td>688</td>
								</tr>
								<tr>
									<td>Swift Code</td>
									<td>BCEYLKLX</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="sub-title-paras mb-3">
						<h5>Online Registration:</h5>
						<p>
						<!-- <div style="display:inline-block;">Each accepted paper needs at least one author registration by February 15th, 2022 and should upload a clear scanned copy or a photo of the bank slip.</div> -->
						</p>
						<p align="justify">	
						At least one Author from each accepted paper should register by February 15th, 2022 and should upload a clear 
						Scanned Copy or a Photo of the Bank Slip/Online Notice (Should upload the email notification of successful
						 payment received either using Online Payment Gateway or Online Transfer).
						 </p>
						 <p align="justify">	
						Student Authors/Co-Authors must provide Proof of Studentship (Scanned Copy of Student ID or other evidence) in 
						registration.
						</p>
						 <p align="justify">
						Registered Authors/Co-Authors/Participants will receive a Registration Confirmation Email, once the conference committee reviews 
						the Payment Details, Proof of Studentship, and IEEE Membership
						</p>
						 <p align="justify">
						Authors need to upload scanned copies or images of 'Bank Payment Receipt/ Online Notice' in the registration form. Please read the 
						instructions given to upload the document in the relevant fields.
						</p>
						 <p>
						Please adhere to the following file name format.
						</p>
						 <p>
              			File Name Format: &lt;ICARC2022_Paper ID_Last name&gt;. pdf
						
						</p>
						<br>
						<!-- <a class="theme-btn" target="_blank" rel="noopener noreferrer">Register Now</a> -->
						<!-- <a class="theme-btn" href="https://forms.gle/p8nkcoKks4F7jiMF9" target="_blank" rel="noopener noreferrer">Register Now</a> -->
					</div>

			<div class="sub-title-paras mb-3">
						<h5>Certificate of Presentation or Participation:</h5>
						</br>
						<div style="color: ##000000;display:inline-block;font-weight: bold;">
						Certificate of Presentation:
						</div>
						<p class="mt-3" align="justify">
						At the end of the conference, the Certificate of Presentation will be issued to the Presenting Author and will be 
						sent via email to the email address which you have provided at the time of Registration. The Conference Proceedings
						 Book containing the abstracts of the presentations will also be sent via email. 
						</p>
						<p class="mt-3" align="justify">
						Note: Either the Presenting Author or one of the Authors should register to get the Certificate of Presentation issued.
						</p>
						
						<div style="color: ##000000;display:inline-block;font-weight: bold;">
						Certificate of Participation:
						</div>
						<p class="mt-3" align="justify">
						Non-presenting Authors/Co-Authors/Participants who have made a separate registration, will be issued a Certificate of 
						Participation. The Conference Proceedings Book containing the abstracts of the presentations will also be sent via 
						email.					
						</p>
					
						
					</div>

					<div data-aos="fade-up" data-aos-duration="1600">
			
				<!-- <div class="row justify-content-center mt-5 text-center" id="call-for-papers-download-btns">
				
					<a target="_blank" data-toggle="tooltip" data-placement="top" href="https://www.sab.ac.lk/codl/payment/?event=icarc2022" class="theme-btn ml-3 mr-2">Proceed with payments</a>
					<a   font-size: 500%; title="You have to do the payments before the registration " class="theme-btn ml-3 mr-2">PLease Register Here</a>
					<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
			
				</div> -->
				<!-- <script type="text/javascript">
					$(document).ready(function (){
						$('[data-toggle="tooltip"]').tooltip({
						container : 'body'
						})
					})
    </script> -->
	<br></br>
	<!-- <center>
	*** You have to do the payments before the registration.
	</center> -->
			</div>
				</div>
			</div>
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