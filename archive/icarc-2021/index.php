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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/timeline.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css">
    <!-- ColorBox CSS-->
    <link rel="stylesheet" href="css/colorbox.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Countdown JQuery -->
    <script src="js/jquery.jCounter-0.1.4.js"></script>
    <!-- ColorBox js-->
    <script type="text/javascript" src="js/jquery.colorbox.js"></script>
    <!-- AOS js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Favicon Icon -->
    <link rel="icon" href="images/logo/tabIcon.ico">

    <script>
        /* ---- Preloader ---- */
        $(window).on("load", function(){
            $(".se-pre-con").fadeOut("slow");
        });

        $(document).ready(function(){
            // $('#alert-popup').modal();
            $(".countdown").jCounter({
                date: '23 february 2021 00:00:00',
                timezone: "Asia/Colombo",
                fallback: function() { console.log("Welcome to SUSL-ACRC 2021"); }
            });

            /* ----------------------------------------------------------- */
            /*  Gallery popup
            /* ----------------------------------------------------------- */
            var width = $(window).width();
            if (width <= 750) {
                $(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"auto", innerHeight:"240"});
                $("#divider-div").hide();
            }else if((width > 750)&&(width <= 1023)){
                $(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"auto", innerHeight:"480"});
            }else if(width > 1023){
                $(".gallery-popup").colorbox({rel:'gallery-popup', transition:"fade", innerWidth:"auto", innerHeight:"535"}); //950 535
                $("#divider-div").hide();
            }
        });
    </script>
</head>
<body>
    <!-- Header Section ---------------------------------------------------------------------------------->
    <header id="index-header">
        <div class="bg-color-dark">
            <!-- Navigation Bar -->
            <?php require_once './common/navbar.php'; ?>
            <!-- Header Content  -->
            <div class="header-content text-center" >
                <video class="video-bg" autoplay loop muted plays-inline>
                    <source src="video/bg-video.mp4" type="video/mp4">
                </video>
                <div class="header-text-div">
                    <div class="title-div">
                       <!-- <h1 class="header-title">International Conference on<br>Advanced <span style="color: #487edb;">Research</span> in <span style="color: #f7ce0f;">Computing</span><br>2021</h1>
                        -->
                       <h1 class="header-title"><div style="color: #ffffff;display:inline-block;">International Conference on</div> <br><div style="color: #ffffff;display:inline-block;">Advanced </div> <div style="color: #487edb;display:inline-block;"> Research</div> in <div style="color: #f7ce0f;display:inline-block;">Computing</div><br><div style="color: #ffffff;display:inline-block;">2021</div></h1>
                    </div>
                    <div class="date-location-div mt-5">
                        <span class="date"><i class="fal fa-calendar-alt fa-lg" style="color: #f7ce0f;"></i>&nbsp; 23 - 24 Feb, 2021</span>
                        <span class="place"><i class="fal fa-map-marker-alt fa-lg" style="color: #f7ce0f;"></i>&nbsp; SUSL, Belihuloya, Sri Lanka</span>
                    </div>
                </div>
                <div class="countdown-sec" data-aos="fade-up" data-aos-duration="1600">
                    <div class="countdown countdown-col">
                        <div class="counter-day">
                            <span class="days">00</span>
                            <div class="smalltext">Days</div>
                        </div>
                        <div class="counter-hour">
                            <span class="hours">00</span>
                            <div class="smalltext">Hours</div>
                        </div>
                        <div class="counter-minute">
                            <span class="minutes">00</span>
                            <div class="smalltext">Minutes</div>
                        </div>
                        <div class="counter-second">
                            <span class="seconds">00</span>
                            <div class="smalltext">Seconds</div>
                        </div>
                    </div>
                </div>
                <svg class="svg-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 290">
                    <path fill="#f7f7f7" fill-opacity="1" d="M0,256L40,224C80,192,160,128,240,112C320,96,400,128,480,160C560,192,640,224,720,202.7C800,181,880,107,960,112C1040,117,1120,203,1200,229.3C1280,256,1360,224,1400,208L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
                </svg>
            </div>
        </div>
    </header>
    <!-- About ICSUSL  -->
    <div class="container-fluid padding" id="about">
        <div class="container">
            <div class="alert alert-danger mb-5 text-center" style="font-family: Sans-serif;">
                <h4><i class="fas fa-exclamation-triangle mr-2"></i><b>IMPORTANT NOTE</b></h4><hr>
                Due to the COVID-19 pandemic, ICARC 2021 will be held as an <b>ONLINE EVENT</b>, limiting the physical attendance.
            </div>
            <div class="row justify-content-between">
                <div class="col-sm-12 col-md-7 p-0">
                    <div class="abt-sec-title" data-aos="fade-up" data-aos-duration="1300">
                    <h1 style="padding-top: 20px;"><div style="display:inline-block;">About ICARC 2021</div></h1>
                        <div class="abt-sec-horiz-divider"></div>
                    </div>
                    <div class="abt-sec-para" id="abt-section-para" data-aos="fade-up" data-aos-duration="1500">
                        <!-- <h5 class="mb-4"><sup><i class="fal fa-quote-left fa-lg"></i></sup> Towards a Digitally Empowered Society <sup><i class="fal fa-quote-right fa-lg"></i></sup></h5> -->
                        <h5 style="padding-top: 20px;" class="mb-4"><div style="vertical-align: super;font-size: small;display:inline-block;"><i class="fal fa-quote-left fa-lg"></i></div> Towards a Digitally Empowered Society <div style="vertical-align: super;font-size: small;display:inline-block;"><i class="fal fa-quote-right fa-lg"></i></div></h5>
                       
                        <p><div style="display:inline-block;">
                            International Conference on Advanced Research in Computing (ICARC) is organized by the Department of Computing and Information Systems, Faculty of Applied Sciences, Sabaragamuwa University of Sri Lanka with the theme <div style="color: ##000000;display:inline-block;font-weight: bold;">“Towards a Digitally Empowered Society”</div>. The ICARC 2021 will be an open forum for academics, students as-well-as industry professionals, to present the latest issues and developments in computing research. The 01<div style="vertical-align: super;font-size: small;display:inline-block;">st</div> International Conference on Advanced Research in Computing ICARC 2021 will take place on the 23<div style="vertical-align: super;font-size: small;display:inline-block;">rd</div> and 24<div style="vertical-align: super;font-size: small;display:inline-block;">th</div> of February 2021. The conference will feature a range of presentations on multidisciplinary research activities in the computing domain as well as stimulating talks and keynote addresses by leading personalities in the domains of Computer Science research.
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

    <!-- Registration ---------------------------------------------------------------------------------------------->
    <div class="continer-fluid padding m-0 p-0" id="tracks-section">
        <div class="bg-color-gradient">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 170"><path fill="#f7f7f7" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,74.7C384,96,480,160,576,154.7C672,149,768,75,864,74.7C960,75,1056,149,1152,149.3C1248,149,1344,75,1392,37.3L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
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
                                            <td>Data Science and Applications Track</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="background-color: #3b65b0; color: #f7f7f7;">2</th>
                                            <td>Parallel and Distributed Computing Track</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="background-color: #1e3565; color: #f7f7f7;">3</th>
                                            <td>Human-Computer Interaction Track</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="background-color: #f7ce0f;">4</th>
                                            <td>Knowledge Management and Information Systems Track</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="background-color: #3b65b0; color: #f7f7f7;">5</th>
                                            <td>Software Engineering Track</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="background-color: #1e3565; color: #f7f7f7;">6</th>
                                            <td>Industry R&D Track</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="background-color: #f7ce0f;">7</th>
                                            <td>Open Track</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="track-sec-animated-img" class="col-sm-12 col-md-5">
                                <div class="tracks-sec-img1 text-center"><img src="images/icons/track.png"></div>
                                <div class="tracks-sec-img2"></div>
                                <div class="tracks-sec-img3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#f7f7f7" fill-opacity="1" d="M0,128L48,106.7C96,85,192,43,288,64C384,85,480,171,576,176C672,181,768,107,864,101.3C960,96,1056,160,1152,176C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
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
                      <span class="timeline__year">2020</span>
                      <div class="timeline__box">
                        <div class="timeline__date">
                          <span class="timeline__day">1</span>
                          <span class="timeline__month">Sept</span>
                        </div>
                        <div class="timeline__post">
                          <div class="timeline__content">
                            <p>Paper Submission Open</p>
                          </div>
                        </div>
                      </div>
                      <div class="timeline__box">
                        <div class="timeline__date">
                          <span class="timeline__day">30</span>
                          <span class="timeline__month">nov</span>
                        </div>
                        <div class="timeline__post">
                          <div class="timeline__content">
                            <p>Paper Submission Deadline <div style="color: #f53636;display:inline-block;">(Closed)</div></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="timeline__group">
                        <span class="timeline__year">2021</span>
						<div class="timeline__box">
							<div class="timeline__date">
								<span class="timeline__day">20</span>
								<span class="timeline__month">Jan</span>
							</div>
                        <div class="timeline__post">
							<div class="timeline__content">
								<p>Paper Acceptance Notification <div style="color: #f53636;display:inline-block;">(Closed)</div></p>
							</div>
                        </div>
						</div>
                        <div class="timeline__box">
                            <div class="timeline__date">
                                <span class="timeline__day">8</span>
                                <span class="timeline__month">Feb</span>
                            </div>
                            <div class="timeline__post">
                                <div class="timeline__content">
                                    <p>Camera Ready Submission Deadline <div style="color: #f53636;display:inline-block;">(Closed)</div></p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__box">
                            <div class="timeline__date">
                                <span class="timeline__day">10</span>
                                <span class="timeline__month">Feb</span>
                            </div>
                            <div class="timeline__post">
                                <div class="timeline__content">
                                    <p>Early Bird Registration Deadline <div style="color: #f53636;display:inline-block;">(Closed)</div></p>
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
                                    <p>Regular Registration Deadline <div style="color: #f53636;display:inline-block;">(Closed)</div></p>
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
                                    <p>Conference Dates</p>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Keynote Speaker Section ----------------------------------------------------------------------------------->
    <div id="keynote-speaker-sec">
        <div class="bg-color-dark">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="70 0 1340 200"><path fill="#f7f7f7" fill-opacity="1" d="M0,192L40,176C80,160,160,128,240,112C320,96,400,96,480,117.3C560,139,640,181,720,170.7C800,160,880,96,960,96C1040,96,1120,160,1200,170.7C1280,181,1360,139,1400,117.3L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
            <div id="keynote">
                <div class="text-center Keynote-speaker-title" data-aos="fade-up" data-aos-duration="1500">
                    <h1>Keynote Speakers</h1>
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
                                <div class="col-sm-12 col-md-4 col-lg-4 keynote-speaker" id="keynote-speaker-one">
                                    <img src="./images/speakers/Prof.Qiu.jpg" width="100%">
                                    <div class="keynote-speaker-details text-center px-2">
                                        <h5>Prof. Meikang Qiu</h5>
                                        <p class="p-0 m-0">Department of Computer Science and Information Systems, Texas A&M University, Commerce, USA<br>
                                        Chair of IEEE Smart Computing Special Technical Community</p>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 keynote-speaker">
                                    <img src="./images/speakers/Prof.chintaka.jpg" width="100%">
                                    <div class="keynote-speaker-details text-center px-2 py-3">
                                        <h5>Associate Prof. Chinthaka Premachandra</h5>
                                        <p class="p-0 m-0">Department of Electronic Engineering<br>Shibaura Institute of Technology<br> Japan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="50 100 1240 150"><path fill="#f7f7f7" fill-opacity="1" d="M0,192L40,170.7C80,149,160,107,240,112C320,117,400,171,480,197.3C560,224,640,224,720,197.3C800,171,880,117,960,117.3C1040,117,1120,171,1200,160C1280,149,1360,75,1400,37.3L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
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
                                <a href="resources/cmtGuide_ICSUSL2019.pdf" class="btn btn-success btn-sm" download><i class="fas fa-download"></i> &nbsp<b>Download</b></a>
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

    <!-- Sponsors section ------------------------------------------------------------------------------------------>
    <div class="continer-fluid padding text-center" id="sponsors">
        <div class="sponsors-sec-title text-center" data-aos="fade-up" data-aos-duration="1300">
            <h1 style="padding-top: 20px;">Sponsors</h1>
            <div class="sec-horiz-divider"></div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-between" id="sponsors-imgs-row">
                <div class="col-sm-12 col-md-4 col-lg-3 p-0 m-0" id="sponsor1" data-aos="fade-up" data-aos-duration="1400">
                    <img src="images/sponsors/pussalla.png">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 p-0 m-0" id="sponsor2" data-aos="fade-up" data-aos-duration="1800">
                    <img src="images/sponsors/boc.png">
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 p-0 m-0" id="sponsor3" data-aos="fade-up" data-aos-duration="2200">
                    <img src="images/sponsors/metro.png">
                </div>
            </div>
        </div>
        <svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="50 0 1340 220"><path fill="#262626" fill-opacity="1" d="M0,160L40,138.7C80,117,160,75,240,69.3C320,64,400,96,480,128C560,160,640,192,720,186.7C800,181,880,139,960,144C1040,149,1120,203,1200,208C1280,213,1360,171,1400,149.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
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