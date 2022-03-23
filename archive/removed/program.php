<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HTML5, CSS3, Bootstrap, JQuery, PHP, MySQL">
    <meta name="author" content="Bhathiya Kariyawasam">

    <title>ICARC - International Conference on Adavanced Research in Computing</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./vendor/css/style.css">
    <link rel="stylesheet" type="text/css" href="./vendor/css/responsive.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css">
    <!-- ColorBox CSS-->
    <link rel="stylesheet" href="./vendor/css/colorbox.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Countdown JQuery -->
    <script src="./vendor/js/jquery.jCounter-0.1.4.js"></script>
    <!-- ColorBox js-->
    <script type="text/javascript" src="./vendor/js/jquery.colorbox.js"></script>
    <!-- AOS js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="./vendor/js/custom.js"></script>

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

			<!-- Header Content --->
	        <div class="subpage-header-content text-center" >
	            <div class="subpage-header-text-div">
	                <div class="subpage-title-div">
	                   <h1 class="subpage-header-title"><span style="color: #f7ce0f;">Program</span></h1>
	                </div>
	            </div>
				<div class="subpage-scroll-div">
					<a href="#details" id="page-scroll-btn"><i class="fal fa-arrow-down fa-lg"></i></a>
				</div>
	            <svg class="subpage-header-svg" xmlns="http://www.w3.org/2000/svg" viewBox="150 0 1120 250"><path fill="#f7f7f7" fill-opacity="1" d="M0,320L48,277.3C96,235,192,149,288,149.3C384,149,480,235,576,234.7C672,235,768,149,864,144C960,139,1056,213,1152,208C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
	        </div>
		</div>
    </header>
	
	<!------------ Program content ------------->
	<section class="continer-fluid padding subpage-section program-sec" id="details">
		<div class="container pt-5">
            <div class="subpage-sec-title text-center" data-aos="fade-up" data-aos-duration="1100">
                <h1>Oral Presentations</h1>
                <div class="subpage-sec-horiz-divider-center"></div>
            </div>

            <div class="alert alert-info mb-5 text-center" data-aos="fade-up" data-aos-duration="1300">
                <div>
                    <b><i class="fal fa-calendar-alt fa-lg mr-2"></i> 24<sup>th</sup> February 2021</b>
                </div>
                <hr>
                <div>
                    <b><i class="fal fa-clock fa-lg mr-2"></i> 8.00 AM – 4.00 PM</b>
                </div>
            </div>

            <span class="px-3 py-2" style="background: var(--theme-yellow); color: var(--theme-light-blue); border-radius: 10px; font-family: font_bold;"  data-aos="fade-up" data-aos-duration="1450">Track 01</span>
            <p class="subpage-sec-para mt-3" id="speaker-sec-top-para" data-aos="fade-up" data-aos-duration="1600" style="color: var(--theme-light-blue)">
				Session 01 — Data Mining and Image Analysis
			</p>
            <table class="table table-bordered table-sm mb-5" style="font-size: 14px; background: #eee;" data-aos="fade-up" data-aos-duration="1750">
                <thead>
                    <tr class="text-center">
                        <th width="100px">Time</th>
                        <th width="130px">Abstract ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">8.00 AM</td>
                        <td class="text-center">-</td>
                        <td>
                            <strong>Plenary Speak</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8.15 AM</td>
                        <td class="text-center">61</td>
                        <td>
                            <strong>Loan Data Analysis using Data Warehouse Techniques</strong><br>
                            MA Perera, CM Boralugoda, D Asanka 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8.30 AM</td>
                        <td class="text-center">64</td>
                        <td>
                            <strong>A Data Mining Approach to Identify Associations between Job Titles and Skills in Job Vacancies</strong><br>
                            DS Kuruppu, K Galappaththi 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8.45 AM</td>
                        <td class="text-center">42</td>
                        <td>
                            <strong>Voice-Assisted Real-Time Traffic Sign Recognition System using Convolutional Neural Network</strong><br>
                            MP Manawadu, U Wijenayake 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9.00 AM</td>
                        <td class="text-center">90</td>
                        <td>
                            <strong>Source Impact and Credibility Assessment on Twitter Users</strong><br>
                            RL Gamage, D Wickramaarachchi, JMD Senanayake 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9.15 AM</td>
                        <td class="text-center">76</td>
                        <td>
                            <strong>Study of Image Recognition Based Travel Destination Recommendation</strong><br>
                            AT Liyanage, S Jayalal 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9.30 AM</td>
                        <td class="text-center">96</td>
                        <td>
                            <strong>Detection and Classification of Rice Plant Diseases using Image Processing Techniques</strong><br>
                            DD Bandara and B Mayurathan 
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- --------------------------- -->
            <p class="subpage-sec-para mt-3" id="speaker-sec-top-para" data-aos="fade-up" data-aos-duration="1900" style="color: var(--theme-light-blue)">
				Session 02 — Machine Learning
			</p>
            <table class="table table-bordered table-sm mb-5" style="font-size: 14px; background: #eee;" data-aos="fade-up" data-aos-duration="2150">
                <thead>
                    <tr class="text-center">
                        <th width="100px">Time</th>
                        <th width="130px">Abstract ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1.00 PM</td>
                        <td class="text-center">69</td>
                        <td>
                            <strong>Fuzzy Logic-based Paddy Yield Prediction to Facilitate Weather Index-based Crop Insurance</strong><br>
                            D Kithmini and C Rajapakshe 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1.15 PM</td>
                        <td class="text-center">74</td>
                        <td>
                            <strong>Text Similarity-Based approach to detect Sinhala Language Fake News in Social Media: An approach using Hybrid Features</strong><br>
                            SNP Wijayarathna, S Jayalal 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1.30 PM</td>
                        <td class="text-center">11</td>
                        <td>
                            <strong>A Novel Approach for Improving Quality and Process Optimization in the Garment Industry</strong><br>
                            CJ De Silva, K Weerasekara, M Nawarathne and K Wijerathne, V Piyawardana, J Alosius
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1.45 PM</td>
                        <td class="text-center">87</td>
                        <td>
                            <strong>Deep Neural Network-Based Approach to Classification the Crime Related News Posts</strong><br>
                            C Sandagiri
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2.00 PM</td>
                        <td class="text-center">77</td>
                        <td>
                            <strong>Deep Learning of Gene Expression Data for Breast Cancer Classification</strong><br>
                            Y Manawadu and R Silva  
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2.15 PM</td>
                        <td class="text-center">78</td>
                        <td>
                            <strong>Sri Lankan Sign Language to Sinhala Text using Convolutional Neural Network Combined with Scale Invariant Feature Transform (SIFT)</strong><br>
                            D Prerra and S Jayalal 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2.30 PM</td>
                        <td class="text-center">70</td>
                        <td>
                            <strong>A Language Modelling Approach to Authorship Identification for Online Examinations in Sinhala</strong><br>
                            M Puchihewa, C Rajapakshe and D Asanka 
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- --------------------------- -->
            <span class="px-3 py-2" style="background: var(--theme-yellow); color: var(--theme-light-blue); border-radius: 10px; font-family: font_bold;"  data-aos="fade-up" data-aos-duration="2300">Track 02</span>
            <p class="subpage-sec-para mt-3" id="speaker-sec-top-para" data-aos="fade-up" data-aos-duration="2450" style="color: var(--theme-light-blue)">
                Parallel and Distributed Systems
			</p>
            <table class="table table-bordered table-sm mb-5" style="font-size: 14px; background: #eee;" data-aos="fade-up" data-aos-duration="2600">
                <thead>
                    <tr class="text-center">
                        <th width="100px">Time</th>
                        <th width="130px">Abstract ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1.00 PM</td>
                        <td class="text-center">-</td>
                        <td>
                            <strong>Plenary Speak</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1.15 PM</td>
                        <td class="text-center">55</td>
                        <td>
                            <strong>Development of Cyber Threat Intelligence System in a SOC Environment for Real Time Environment</strong><br>
                            A Varatharaj
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1.30 PM</td>
                        <td class="text-center">84</td>
                        <td>
                            <strong>MedCode: A blockchain based Patient Referral System</strong><br>
                            K Lokuge, D Wickramaarachchi, and JMD Senanayake
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1.45 PM</td>
                        <td class="text-center">9</td>
                        <td>
                            <strong>Inventory Management with Origin Tracing Using LSTM and Blockchain</strong><br>
                            H Warnakulasooriya, J Senarathna, PPU Peiris, AS Fernando, DM Kasthurirathna, T Jayalath 
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- --------------------------- -->
            <span class="px-3 py-2" style="background: var(--theme-yellow); color: var(--theme-light-blue); border-radius: 10px; font-family: font_bold;"  data-aos="fade-up" data-aos-duration="2750">Track 03</span>
            <p class="subpage-sec-para mt-3" id="speaker-sec-top-para" data-aos="fade-up" data-aos-duration="2900" style="color: var(--theme-light-blue)">
                Human Computer Interaction
			</p>
            <table class="table table-bordered table-sm mb-5" style="font-size: 14px; background: #eee;" data-aos="fade-up" data-aos-duration="3150">
                <thead>
                    <tr class="text-center">
                        <th width="100px">Time</th>
                        <th width="130px">Abstract ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">9.00 AM</td>
                        <td class="text-center">-</td>
                        <td>
                            <strong>Plenary Speak</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9.15 AM</td>
                        <td class="text-center">46</td>
                        <td>
                            <strong>Automatic Segmentation of Lung Nodule From CT Images Using Fuzzy C-Means Clustering Algorithm and Active Contour Model</strong><br>
                            T Rajeetha, S Venuja
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9.30 AM</td>
                        <td class="text-center">49</td>
                        <td>
                            <strong>Sri Lankan Currency Detector for Visually Impaired People</strong><br>
                            KC Abimani, SS Thalagahagedara, SB Wickramasingha, MU Thilakarathna, D Nawinna, DM Kasthurirathna
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9.45 AM</td>
                        <td class="text-center">10</td>
                        <td>
                            <strong>AR Interior: Guidance Tool for Interior Designing</strong><br>
                            EMPS Ekanayaka, DR Fonseka, RN Ranaweerasinghe, AMACB Abaykoon, AI Gamage, T Thilakarathna 
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- --------------------------- -->
            <span class="px-3 py-2" style="background: var(--theme-yellow); color: var(--theme-light-blue); border-radius: 10px; font-family: font_bold;"  data-aos="fade-up" data-aos-duration="3300">Track 04</span>
            <p class="subpage-sec-para mt-3" id="speaker-sec-top-para" data-aos="fade-up" data-aos-duration="3450" style="color: var(--theme-light-blue)">
                Knowledge Management and Information Systems
			</p>
            <table class="table table-bordered table-sm mb-5" style="font-size: 14px; background: #eee;" data-aos="fade-up" data-aos-duration="3600">
                <thead>
                    <tr class="text-center">
                        <th width="100px">Time</th>
                        <th width="130px">Abstract ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">8.00 AM</td>
                        <td class="text-center">-</td>
                        <td>
                            <strong>Plenary Speak</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8.15 AM</td>
                        <td class="text-center">38</td>
                        <td>
                            <strong>Impact of Traditional Supply Chain Management On Green Supply Chain Management on Inter-Organizational Supply Interaction: A Review</strong><br>
                            PL Perera, BL Senavirathne, HMS Ayeshi, WMSRB Wijayarathne
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8.30 AM</td>
                        <td class="text-center">71</td>
                        <td>
                            <strong>Development of an Information Flow Model to Overcome the Challenges in Sri Lankan Handicraft Industry</strong><br>
                            M Kalubowila, RACP Rajapakse
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8.45 AM</td>
                        <td class="text-center">83</td>
                        <td>
                            <strong>Adoption of Business Intelligence Tools by Small and Medium-Scale Enterprises in North Central Province, Sri Lanka</strong><br>
                            HM Ranasinghe, T Madushanka
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9.00 AM</td>
                        <td class="text-center">56</td>
                        <td>
                            <strong>E-Government Adoption in Sri Lanka - Barriers and Challenges from International Perception; A Literature Review</strong><br>
                            S Liyanage, G Gunatunga, M Wickramasinghe
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9.15 AM</td>
                        <td class="text-center">67</td>
                        <td>
                            <strong>Policy Framework for Health Care Responsibility Assignment</strong><br>
                            TGG Dantanarayana, Prasad Jayaweera
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- --------------------------- -->
            <span class="px-3 py-2" style="background: var(--theme-yellow); color: var(--theme-light-blue); border-radius: 10px; font-family: font_bold;"  data-aos="fade-up" data-aos-duration="3750">Track 05</span>
            <p class="subpage-sec-para mt-3" id="speaker-sec-top-para" data-aos="fade-up" data-aos-duration="3900" style="color: var(--theme-light-blue)">
                Software Engineering
			</p>
            <table class="table table-bordered table-sm mb-5" style="font-size: 14px; background: #eee;" data-aos="fade-up" data-aos-duration="4150">
                <thead>
                    <tr class="text-center">
                        <th width="100px">Time</th>
                        <th width="130px">Abstract ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1.00 PM</td>
                        <td class="text-center">-</td>
                        <td>
                            <strong>Plenary Speak</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1.15 PM</td>
                        <td class="text-center">12</td>
                        <td>
                            <strong>Guru Gedara:Smart Mathematical e-learning Platform for Grade Five Students</strong><br>
                            S Rajapaksha, TKK Thilakarathna, VS Wijesundara, MK Wickramasooriya, SRMJS Katupitiya, EMOM Ekanayake 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">1.30 PM</td>
                        <td class="text-center">50</td>
                        <td>
                            <strong>Exsia - Advanced Smart Buy and Sell Application</strong><br>
                            R Rilaf, J Sarooth, F Aleem, GC Rathnayake 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9.45 AM</td>
                        <td class="text-center">25</td>
                        <td>
                            <strong>North West Corner Rule Based Programming Development to Find the Initial Basic Feasible Solution of Transportation Problem</strong><br>
                            RM Ranasinghe, K Rathnayaka
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- --------------------------- -->
            <span class="px-3 py-2" style="background: var(--theme-yellow); color: var(--theme-light-blue); border-radius: 10px; font-family: font_bold;"  data-aos="fade-up" data-aos-duration="4300">Track 06</span>
            <p class="subpage-sec-para mt-3" id="speaker-sec-top-para" data-aos="fade-up" data-aos-duration="4450" style="color: var(--theme-light-blue)">
                Industry R&D / Open
			</p>
            <table class="table table-bordered table-sm mb-5" style="font-size: 14px; background: #eee;" data-aos="fade-up" data-aos-duration="4600">
                <thead>
                    <tr class="text-center">
                        <th width="100px">Time</th>
                        <th width="130px">Abstract ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">8.00 AM</td>
                        <td class="text-center">-</td>
                        <td>
                            <strong>Plenary Speak</strong>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8.15 AM</td>
                        <td class="text-center">26</td>
                        <td>
                            <strong>Warehouse Space Optimization using a Linear Programming Model </strong><br>
                            D Perera, UJ Mirando, A Fernando 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8.30 AM</td>
                        <td class="text-center">73</td>
                        <td>
                            <strong>A Simulation Model to Optimize Pre-Sewing Operations in the Apparel Industry: A Case Study from Sri Lanka</strong><br>
                            PM Herath, C Rajapakse, H Niwunhella, G Neththikumarage
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">8.45 AM</td>
                        <td class="text-center">19</td>
                        <td>
                            <strong>Occupational Stress of Women Workforce in the IT Industry: With Special Reference to Colombo District, Sri Lanka</strong><br>
                            D Aluthge, RMKT Rathnayaka
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9.00 AM</td>
                        <td class="text-center">93</td>
                        <td>
                            <strong>LEXIS: A Preliminary Screening and Intervention Tool for Children with Dyslexia</strong><br>
                            JR Kandanarachchi, J Abeykoon 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">9.15 AM</td>
                        <td class="text-center">18</td>
                        <td>
                            <strong>Cell Selection Analysis in 5G for the Emergency Communications</strong><br>
                            DS Vithanage
                        </td>
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