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
    <link rel="stylesheet" type="text/css" href="vendor/css/timeline.css">
    <link rel="stylesheet" type="text/css" href="vendor/css/responsive.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Countdown JQuery -->
    <script src="vendor/js/jquery.jCounter-0.1.4.js"></script>
    <!-- AOS js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="vendor/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    

    <!-- Favicon Icon -->
    <link rel="icon" href="assets/images/logo/tabIcon.ico">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script>
        /* ---- Preloader ---- */
        $(window).on("load", function(){
            $(".se-pre-con").fadeOut("slow");
        });

        $(document).ready(function(){
            // $('#alert-popup').modal();
            $(".countdown").jCounter({
                date: '23 february 2023 00:00:00',
                timezone: "Asia/Colombo",
                fallback: function() { console.log("Welcome to SUSL-ACRC 2023"); }
            });
        });
    </script>
</head>
<body>
    <!-- Header Section ---------------------------------------------------------------------------------->
    <header id="index-header">
        <div class="bg-color-red">
            <!-- Navigation Bar -->
            <?php require_once './common/navbar.php'; ?>
            <!-- Header Content  -->
            <div class="header-content text-center" >
                <video class="video-bg" autoplay loop muted plays-inline>
                    <source src="assets/video/bg-video.mp4" type="video/mp4">
                </video>
                <div class="header-text-div">
                    <div class="title-div">
                       <h1 class="header-title"><div style="color: #ffffff;display:inline-block;">International Conference on</div> <br><div style="color: #ffffff;display:inline-block;">Advanced </div> <div style="color: #487edb;display:inline-block;"> Research</div> in <div style="color: #f7ce0f;display:inline-block;">Computing</div><br><div style="color: #ffffff;display:inline-block;">2023</div></h1>
                       <!-- <h1 class="header-title">International Conference on<br>Advanced <span style="color: #f7ce0f;">Research</span> in Computing<br><span style="color: #f7ce0f;">2023</span></h1> -->
                       
                    </div>
                    
                    <div class="date-location-div mt-5">
                        <span class="date"><i class="fal fa-calendar-alt fa-lg" style="color: #f7ce0f;"></i>&nbsp; 23 - 24 Feb, 2023</span>
                        <span class="place"><i class="fal fa-map-marker-alt fa-lg" style="color: #f7ce0f;"></i>&nbsp; Virtual Conference</span>
                    </div>
                </div>
                <div class="countdown-sec" data-aos="fade-up" data-aos-duration="1600">
                    <div class="countdown countdown-col">
                        <div class="counter-day">
                            <span class="days">00</span>
                            <div style="padding-top: 20px;" class="smalltext">Days</div>
                        </div>
                        <div class="counter-hour">
                            <span class="hours">00</span>
                            <div style="padding-top: 20px;" class="smalltext">Hours</div>
                        </div>
                        <div class="counter-minute">
                            <span class="minutes">00</span>
                            <div style="padding-top: 20px;" class="smalltext">Minutes</div>
                        </div>
                        <div class="counter-second">
                            <span class="seconds">00</span>
                            <div style="padding-top: 20px;" class="smalltext">Seconds</div>
                        </div>
                    </div>
                </div>
                <svg class="svg-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 290">
                    <path fill="#ffffff" fill-opacity="1" d="M0,256L40,224C80,192,160,128,240,112C320,96,400,128,480,160C560,192,640,224,720,202.7C800,181,880,107,960,112C1040,117,1120,203,1200,229.3C1280,256,1360,224,1400,208L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
                </svg>
            </div>
        </div>
    </header>
    <!-- About ICSUSL  -->
    <div class="container-fluid padding" id="about">
        <div class="container ">
        <!-- <div class="alert alert-danger mb-5 text-center" style="font-family: Sans-serif;">
                <h4><i class="fas fa-exclamation-triangle mr-2"></i><b>IMPORTANT NOTE</b></h4><hr>
                Paper Submission has been Open. <a href="https://cmt3.research.microsoft.com/ICARC2022 ">Click </a>to submit your paper.
            </div> -->


            <!-- <div class="alert alert-danger mb-5 text-center" style="font-family: Sans-serif;">
                <h4><i class="fas fa-exclamation-triangle mr-2"></i><b>IMPORTANT NOTE</b></h4><hr>
                <p>Click the button to submit your paper now</p> 
                <a class="theme-btn ml-3 mr-2" href="https://cmt3.research.microsoft.com/ICARC2022 ">Submit Paper </a>
                </br> </br> 
            </div> -->

            <div class="row justify-content-between">
                <div class="col-sm-12 col-md-7 p-0 about-handle">
                    <div class="abt-sec-title" data-aos="fade-up" data-aos-duration="1300">
                        <h1 style="padding-top: 20px;"><div style="display:inline-block;">About ICARC 2023</div></h1>
                        <div class="abt-sec-horiz-divider"></div>
                    </div>
                
                    <div class="abt-sec-para" id="abt-section-para" data-aos="fade-up" data-aos-duration="1500">
                        <h5 style="padding-top: 20px;" class="mb-4"><div style="vertical-align: super;font-size: small;display:inline-block;"><i class="fal fa-quote-left fa-lg"></i></div> Towards a Digitally Empowered Society <div style="vertical-align: super;font-size: small;display:inline-block;"><i class="fal fa-quote-right fa-lg"></i></div></h5>
                       
                        
                        <p><div style="display:inline-block;">The 2</div><div style="vertical-align: super;font-size: small;display:inline-block;">nd</div> International Conference on Advanced Research in Computing ICARC - 2023 organized by the Department of Computing and Information Systems is scheduled to be held on 23<div style="vertical-align: super;font-size: small;display:inline-block;">rd</div> and 24<div style="vertical-align: super;font-size: small;display:inline-block;">th</div> February 2023. In an era of accelerated digital transformation brought on by the COVID-19 pandemic, the conference will be held under the theme
                         <div style="color: ##000000;display:inline-block;font-weight: bold;">“Towards a Digitally Empowered Society”</div>. 
                             It will bring together a variety of research presentations, workshops, and stimulating talks by leading figures from academia and industry, all on one platform, allowing to discuss recent innovations, technologies, and trends in a wide range of computing disciplines.
                        </p>
                      
                      
                        <p><div style="display:inline-block;">ICARC 2023 is technically co-sponsored by the Institute of Electrical and Electronic Engineers, with the papers presented being submitted to IEEE Xplore digital library.</div></p>
                         <p><div style="display:inline-block;">
                         Since its inception in 2021, ICARC has garnered a great deal of attention for its broad breadth and high quality of research papers submitted. The conference is being organized with the participation and collaboration of a group of distinguished academics and professionals from Sri Lanka and throughout the world.
                         </div></p>
                    </div>
                </div>
                <div id="about-sec-animated-img" class="col-sm-12 col-md-5 p-0" data-aos="fade-up" data-aos-duration="2700">
                    <div class="abt-sec-img1"></div>
                    <div class="abt-sec-img2"></div>
                </div>
            </div>
        </div> 
    </div>

    <!-- Tracks ---------------------------------------------------------------------------------------------->
    <div class="continer-fluid padding m-0 p-0" id="tracks-section">
        <div class="bg-color-gradient">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 170"><path fill="#ffffff" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,74.7C384,96,480,160,576,154.7C672,149,768,75,864,74.7C960,75,1056,149,1152,149.3C1248,149,1344,75,1392,37.3L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
            <div class="container" id="tracks">
                <div id="tracks-section-content">
                    <div class="tracks-sec-title text-center" data-aos="fade-up" data-aos-duration="1300">
                        <h1 style="padding-top: 20px;">Conference Tracks</h1>
                        <div class="sec-horiz-divider"></div>
                    </div>
                    <div class="mt-4 track-para text-center" data-aos="fade-up" data-aos-duration="1700">
                        <p>
                            We encourage the submission of high-quality papers reporting original work in both theoretical and experimental research areas. The following tracks are hereby solicited.
                        </p>
                    </div>
                    <div class="tracks-sec-table-content" data-aos="fade-up" data-aos-duration="2300">
                        <div class="row">
                            <div class="col-sm-12 col-md-7" id="tracks-table-div">
                                <table class="table table-borderless bg-light mt-3">
                                <tbody>

                                        <tr>
                                        <th scope="row" style="background-color: #f7ce0f;">1</th>
                                        <td>Artificial Intelligence and Machine Learning Track</td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="background-color: #3b65b0;color: #f7f7f7;">2</th>
                                        <td>Data Science and Applications Track</td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="background-color: #f7ce0f; ">3</th>
                                        <td>Parallel and Distributed Computing Track</td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="background-color: #3b65b0;color: #f7f7f7; ">4</i></th>
                                        <td>Human-Computer Interaction and Computer Vision Track </td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="background-color: #f7ce0f; ">5</i></th>
                                        <td>Knowledge Management and Information Systems Track</td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="background-color: #3b65b0; color: #f7f7f7;">6</th>
                                        <td>Software Engineering Track</td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="background-color: #f7ce0f;">7</th>
                                        <td>Technology-enhanced Learning and Teaching Track</td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="background-color: #3b65b0; color: #f7f7f7;">8</th>
                                        <td>Industry R&D Track</td>
                                        </tr>
                                        <tr>
                                        <th scope="row" style="background-color: #f7ce0f; ">9</th>
                                        <td>Open Track</td>
                                        </tr>
                                        </tbody>
                                </table>
                            </div>
                            <div id="track-sec-animated-img" class="col-sm-12 col-md-5">
                                <div class="tracks-sec-img1 text-center"><img src="assets/images/icons/ICARC-Logo.png"></div>
                                <div class="tracks-sec-img2"></div>
                                <div class="tracks-sec-img3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#ffffff" fill-opacity="1" d="M0,128L48,106.7C96,85,192,43,288,64C384,85,480,171,576,176C672,181,768,107,864,101.3C960,96,1056,160,1152,176C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>
    </div>

    <!-- Conference Tickets Section -------------------------------------------------------------------------------->

    <div class="continer-fluid padding text-center" id="timeline">
        <div class="timeline-sec-title text-center" data-aos="fade-up" data-aos-duration="1300">
            <h1 style="padding-top: 20px;">Timeline</h1>
            <div class="sec-horiz-divider"></div>
        </div>
        <div class="my-4 timeline-para text-center" data-aos="fade-up" data-aos-duration="1700">
            <p>
                Get updated with event important dates.
            </p>
        </div>
        <div class="container mt-5" data-aos="fade-up" data-aos-duration="1400">
            <div class="row align-items-center">
                <div class="page">
                  <div class="timeline">
                    <div class="timeline__group">
                      <span class="timeline__year">2021</span>
                      <div class="timeline__box">
                        <div class="timeline__date">
                          <span class="timeline__day">1</span>
                          <span class="timeline__month">Sept</span>
                        </div>
                        <div class="timeline__post">
                          <div class="timeline__content">
                            Paper Submission Open
                          </div>
                        </div>
                      </div>
                      <div class="timeline__box">
                        <div class="timeline__date">
                          <span class="timeline__day">28</span>
                          <span class="timeline__month">nov</span>
                        </div>
                        <div class="timeline__post">
                          <div class="timeline__content">
                          Paper Submission Deadline 
                          <span style="color: #f53636;">(Closed)</span>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="timeline__group">
                        <span class="timeline__year">2023</span>
						<div class="timeline__box">
							<div class="timeline__date">
								<span class="timeline__day">4</span>
								<span class="timeline__month">Jan</span>
							</div>
                        <div class="timeline__post">
							<div class="timeline__content">
								Paper Acceptance Notification 
                                <span style="color: #f53636;">(Completed)</span>
                               
							</div>
                        </div>
						</div>
                        <div class="timeline__box">
                            <div class="timeline__date">
                                <span class="timeline__day">15</span>
                                <span class="timeline__month">Jan</span>
                            </div>
                            <div class="timeline__post">
                                <div class="timeline__content">
                                   Camera Ready Submission Deadline 
                                    <span style="color: #f53636;">(Closed)</span>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="timeline__box">
                            <div class="timeline__date">
                                <span class="timeline__day">1</span>
                                <span class="timeline__month">Feb</span>
                            </div>
                            <div class="timeline__post">
                                <div class="timeline__content">
                                    Early Bird Registration Deadline 
                                    <span style="color: #f53636;">(Closed)</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="timeline__box">
                            <div class="timeline__date">
                                <span class="timeline__day">15</span>
                                <span class="timeline__month">Feb</span>
                            </div>
                            <div class="timeline__post">
                                <div class="timeline__content">
                                    Regular Registration Deadline 
                                    <span style="color: #f53636;">(Closed)</span>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="timeline__box" id="last-timeline">
                            <div class="timeline__date">
                                <span class="timeline__day">23</span>
                                <span class="timeline__month">--</span>
                                <span class="timeline__day">24</span>
                                <span class="timeline__month">Feb</span>
                            </div>
                            <div class="timeline__post">
                                <div class="timeline__content">
                                    Conference Dates
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Keynote Speaker Section  -->
    <div id="keynote-speaker-sec">
        <div class="bg-color-dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="70 0 1340 200"><path fill="#ffffff" fill-opacity="1" d="M0,192L40,176C80,160,160,128,240,112C320,96,400,96,480,117.3C560,139,640,181,720,170.7C800,160,880,96,960,96C1040,96,1120,160,1200,170.7C1280,181,1360,139,1400,117.3L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
            <div id="keynote">
                <div class="text-center Keynote-speaker-title" data-aos="fade-up" data-aos-duration="1500">
                    <h1 style="padding-top: 20px;">Keynote Speakers</h1>
                    <div class="sec-horiz-divider"></div>
                </div>
                <div class="my-4 keynote-para text-center" data-aos="fade-up" data-aos-duration="1700">
                    <p>
                        Get enlighted by the keynote speeches.
                    </p>
                </div>
               <div class="container mt-5">
                    <div class="speaker" data-aos="fade-up" data-aos-duration="1800">
                        <div class="speaker-body">
                            <div class="row align-items-center justify-content-center">
                                
                                <div class="col-sm-12 col-md-4 col-lg-4 keynote-speaker handle-speaker" id="keynote-speaker-one">
                                    <img src="./assets/images/speakers/Assoc.Prof.Dr.Aramvit.png" width="100%">
                                    <div class="keynote-speaker-details text-center px-2">
                                        <h5>Assoc. Prof. Dr. Supavadee Aramvit </h5>
                                        <p class="p-0 m-0">Department of Electrical Engineering,  Chulalongkorn University, Thailand<br>
                                        IEEE Asia Pacific (Region 10) Director-Elect 2022-2023
                                        </p>
                                    </div>
                                </div>
                               
                                <div class="col-sm-12 col-md-4 col-lg-4 keynote-speaker handle-speaker">
                                    <img src="./assets/images/speakers/Dr.NalinAsankaGamagedaraArachchilage.jpg" width="100%">
                                    <div class="keynote-speaker-details text-center px-2 py-3">
                                        <h5>Dr. Nalin Asanka Gamagedara Arachchilage</h5>
                                        <p class="p-0 m-0">Lecturer (Assistant Professor) in Cyber Security and Privacy (Usable Security and Privacy),</br> School of Computer Science, University of Auckland, New Zealand</p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="50 100 1240 150"><path fill="#ffffff" fill-opacity="1" d="M0,192L40,170.7C80,149,160,107,240,112C320,117,400,171,480,197.3C560,224,640,224,720,197.3C800,171,880,117,960,117.3C1040,117,1120,171,1200,160C1280,149,1360,75,1400,37.3L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        </div>
    </div>

    <!-- Submit Online Model Section -->
    <div class="modal fade" id="submit-online-model" role="dialog">
        <div class="modal-dialog modal-lg" >
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-body-content">
                        <div class="col-md-12 col-sm-8">
                            <h5>Guidelines for the CMT operations are available to download.</h5>
                            <hr>
                            <p>
                                <a href="assets/resources/cmtGuide_ICSUSL2019.pdf" class="btn btn-success btn-sm" download><i class="fas fa-download"></i> &nbsp<b>Download</b></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="https://cmt3.research.microsoft.com/ICSUSL2019" class="btn btn-info btn-sm">Continue</a>
                    <button type="button" class="btn btn-danger btn-sm" id="modal-close-btn" data-dismiss="modal">Close</button>
                </div> 
            </div> 
        </div>
    </div>



   <!-- Organized By------------------------------------------------------------------------------------------>
   <div class="continer-fluid padding text-center" id="sponsors">
        <div class="sponsors-sec-title text-center" data-aos="fade-up" data-aos-duration="1300">
            <h2>Organized By</h2>
            <div class="sec-horiz-divider"></div>
        </div>
        <div class="container mt-5">
         <div class="row justify-content-between" id="sponsors-imgs-row">
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor3" data-aos="fade-up" data-aos-duration="2200">
                <img src="assets/images/sponsors/susl.png">
                </div>
           
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
                <img src="assets/images/sponsors/IEEE_WIE_Studentbranch.jpg">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                <img src="assets/images/sponsors/IEEE_student_branch.JPG">
                </div>
                
               
            </div>
        </div>

    </div>



<!-- <div class="container-fluid padding text-center">
  <div class="row justify-content-between">
    <div class="col-sm-12 col-md-12 col-lg-6 p-0 m-0 "> -->
    
    
     <!-- Technical Co-Sponsors section ------------------------------------------------------------------------------------------>
     <div class="continer-fluid padding text-center" id="sponsors">
        <div class="sponsors-sec-title text-center" data-aos="fade-up" data-aos-duration="1300">
            <h2>Technical Co-Sponsors</h2>
            <div class="sec-horiz-divider"></div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-between" id="sponsors-imgs-row">
                <div class="col-sm-12 col-md-4 col-lg-3 p-0 m-0" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
                <img src="assets/images/sponsors/IEEE.png">
                
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                    <img src="assets/images/sponsors/IEEE_SriLankan_Section2.png">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                <img src="assets/images/sponsors/IEEEComputer1.jpeg">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 p-0 m-0" id="sponsor3" data-aos="fade-up" data-aos-duration="2200">
                    <img src="assets/images/sponsors/IEEECOMSOCSL_2019.JPG">
                </div>
           
            </div>
        </div>  
        
    </div>
    
    </div>
    <!-- <div class="col-sm-12 col-md-12 col-lg-6 p-0 m-0"> -->
    
            <!-- Recognition From ------------------------------------------------------------------------------------------>
            <div class="continer-fluid padding text-center" id="sponsors">
        <div class="sponsors-sec-title text-center" data-aos="fade-up" data-aos-duration="1300">
            <h2>Recognition From</h2>
            <div class="sec-horiz-divider"></div>
        </div>
        <div class="container mt-5">
         <div class="row justify-content-center" id="sponsors-imgs-row">
                <!-- <div class="col-sm-12 col-md-4 col-lg-3 p-0 m-0" id="sponsor3" data-aos="fade-up" data-aos-duration="2200">
                    <img src="assets/images/sponsors/IEEECOMSOC2019.jpeg">
                </div> -->
           
                <div class="col-sm-12 col-md-4 col-lg-3 p-0 m-0" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
                    <img src="assets/images/sponsors/IEEE_WIE.jpeg">
                </div>
                <!-- <div class="col-sm-12 col-md-4 col-lg-3 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                <img src="assets/images/sponsors/IEEEComputer1.jpeg">
                </div> -->
               
            </div>
        </div>

    </div>
<!--     
    </div> -->
  </div>
</div>

     


    <!-- Sponsors section ------------------------------------------------------------------------------------------>
    <div class="continer-fluid padding text-center" id="sponsors">
        <div class="sponsors-sec-title text-center" data-aos="fade-up" data-aos-duration="1300">
            <h2>Financially Sponsored By</h2>
            <div class="sec-horiz-divider"></div>
        </div>

       <div class="container">
        <div class="row">
            <div class="col-sm-5 col-md-4">
            <h4>Platinum Sponsor</h4>
            <div class="sec-horiz-divider"></div>
            <div class="row justify-content-between" id="sponsors-imgs-row">
                <div class="col-sm-12 col-md-3 col-lg-1 p-0 m-0" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
                
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                <img src="assets/images/sponsors/susl.png">
                </div>
                <div class="col-sm-12 col-md-3 col-lg-1 p-0 m-0" id="sponsor3" data-aos="fade-up" data-aos-duration="2200">
                 
                </div>
            </div>
            </div>


            <div class="col-sm-5 offset-sm-2 col-md-4 offset-md-0">
            <h4>Gold Sponsor</h4>
            <div class="sec-horiz-divider"></div>
            <div class="row justify-content-between" id="sponsors-imgs-row">
                <div class="col-sm-12 col-md-3 col-lg-1 p-0 m-0" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
                
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                <img src="assets/images/sponsors/Sathuta4.png">
                </div>
                <div class="col-sm-12 col-md-3 col-lg-1 p-0 m-0" id="sponsor3" data-aos="fade-up" data-aos-duration="2200">
                 
                </div>
            </div>
            </div>

              <div class="col-sm-5 offset-sm-2 col-md-4 offset-md-0">
            <h4>Silver Sponsor</h4>
            <div class="sec-horiz-divider"></div>
            <div class="row justify-content-between" id="sponsors-imgs-row">
                <div class="col-sm-12 col-md-3 col-lg-1 p-0 m-0" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
                
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                <img src="assets/images/sponsors/basehp4.png">
                </div>
                <div class="col-sm-12 col-md-3 col-lg-1 p-0 m-0" id="sponsor3" data-aos="fade-up" data-aos-duration="2200">
                 
                </div>
            </div>
            </div>
        </div>
        </br>  </br>
       </br>

        <div class="row justify-content-center">
        <divclass="col align-self-center">
            <h4>Bronze Sponsors</h4>
            <div class="sec-horiz-divider"></div>
            <div class="d-flex justify-content-around" id="sponsors-imgs-row">
                <div class="col-sm-12 col-md-6 col-lg-5 " style="width:auto; padding-top: 35px;" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
                <img src="assets/images/sponsors/LSEG2.png" >
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 p-0 m-0" style="width:auto" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                <img src="assets/images/sponsors/boc1.png">
                </div>
                
            </div>
            </div>
         </div>
         </br>  </br>
        <div class="row">
            

            <div  class="col align-self-center">
            <h4>Other Sponsors</h4>
            <div class="sec-horiz-divider"></div>
            <div class="row justify-content-center" id="sponsors-imgs-row">
               
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                <img src="assets/images/sponsors/Peoples-Bank4.png">
                </div>
               
            </div>
            </div>

            
        </div>
        
        




        <!-- <div class="container mt-5">
        <h4>Platinum Sponsors</h4>
            <div class="sec-horiz-divider"></div>

            <div class="row justify-content-between" id="sponsors-imgs-row">
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
                
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                <img src="assets/images/sponsors/susl.png">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor3" data-aos="fade-up" data-aos-duration="2200">
                 
                </div>
            </div>
            </br>
            <h4>Gold Sponsors</h4>
            <div class="sec-horiz-divider"></div>

               <div class="row justify-content-between" id="sponsors-imgs-row">
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
                
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                <img src="assets/images/sponsors/Sathuta.png">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor3" data-aos="fade-up" data-aos-duration="2200">
                   
                </div>
            </div>
            <h4>Silver Sponsors</h4>
            <div class="sec-horiz-divider"></div>

               <div class="row justify-content-between" id="sponsors-imgs-row">
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
                <img src="assets/images/sponsors/basehp.jpg">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                    <img src="assets/images/sponsors/boc.png">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor3" data-aos="fade-up" data-aos-duration="2200">
                    
                </div>
            </div>
            </br>
            <h4>Other Sponsors</h4>
            <div class="sec-horiz-divider"></div>

            <div class="row justify-content-between" id="sponsors-imgs-row">
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
               
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                    <img src="assets/images/sponsors/Peoples-Bank.jpg">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-2 p-0 m-0" id="sponsor3" data-aos="fade-up" data-aos-duration="2200">
                   
                </div>
            </div>
             -->
        </div>
        <svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="50 0 1340 220"><path fill="#cf6620" fill-opacity="1" d="M0,160L40,138.7C80,117,160,75,240,69.3C320,64,400,96,480,128C560,160,640,192,720,186.7C800,181,880,139,960,144C1040,149,1120,203,1200,208C1280,213,1360,171,1400,149.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </div>

    <!---------- Back to top button ---------->
    <span id="back-to-top-btn"><i class="fal fa-arrow-to-top fa-lg"></i><span>Top</span></span>

    <!-- footer section -------------------------------------------------------------------------------------------->
    <?php require_once 'common/footer.php'; ?>

    <script>
        AOS.init({once: true});
    </script>
</body>
<div class="se-pre-con"></div>
</html>