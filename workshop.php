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
    <style>
        .link{
            cursor: pointer;
        }
    </style>
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
	                   <h1 class="subpage-header-title"><div style="color: #f7ce0f;display:inline-block;">Workshops</div></h1>
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
	<section class="continer-fluid padding subpage-section workshop-sec" id="details">
		<div class="container pt-5">
      
   
	

			

            
            
            <div class="subpage-sec-content my-5 workshop-content" data-aos="fade-up" data-aos-duration="2300">
                <small># Workshop 1</small>
                <h3>Introduction to Computer Vision and Applications</h3>
                <hr>
                <div class="date-and-link d-lg-flex justify-content-between">
                    <div class="date d-md-flex d-lg-flex mt-2 justify-content-center">
                    <div class="mr-md-2 mr-lg-2 text-center"><i class="fal fa-calendar-alt fa-lg mr-2"> 20<div style="vertical-align: super;font-size: small;display:inline-block;">th</div> of February 2023</i> </div>
                        <div class="ml-md-2 ml-lg-2 text-center"><i class="fal fa-clock fa-lg mr-2"> 2.00 PM - 4.00 PM</i></div>
                    </div>
                    <!-- <div class="link mt-2 text-center link" onclick="opens('https://learn.zoom.us/webinar/register/WN_7XojZCssR4C43ISTDsw9HQ')">
                        <i class="fal fa-link fa-lg mr-2"></i> <a target="_blank">Join the Workshop</a>
                    </div> -->
                </div>
                <div class="row mt-4 align-items-center workshop-speaker m-0">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <img src="assets/images/speakers/Dr.Fairoza.jfif">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="workshop-speaker-details">
                            <h6>Aim of the workshop </h6>
                            To provide an understanding of fundamental concepts of  computer vision and applications. </br></br>
                        </div>
                        <div class="workshop-speaker-details">
                            <h6>Objectives </h6>
                            <ul class="mb-2" style="margin-left:25px" >
                                    <li>To provide an understanding of basic skills necessary for computer vision applications </br>
                                    </li>
                                    <li>To provide understanding on the end-to-end computer vision project deployment </br>
                                    </li>
                                    <li>To provide an overview of  the basic theory of image processing  </br></li>
                                    </li>
                                    <li>To provide a brief overview of computer vision with deep learning  </br></li>
                                    </li>
                                 </ul>
                                 </br>
                        </div>
                        <div class="workshop-speaker-details" align="justify">
                            <h6>Description </h6>
                            Digital image processing has been on the rise since the 1900s, artificial intelligence in the 1960s, and supercomputing since the 2010s. Computer vision has now become an integral part of every industry. In this talk, we will introduce the applications of computer vision and the advantage of using deep learning over traditional image processing. </br>
                            </br>
                        </div>
                        <div class="workshop-speaker-details">
                            <h6>Target Audience </h6>
                            University Students and  Researchers </br></br>
                        </div>
                        <div class="workshop-speaker-details">
                            <h6>Resource Person </h6>
                            Dr. Fairoza Amira Hamzah </br>
                            Data Scientist,STMicroelectronics, Malaysia </br>
                            President of Women in AI Malaysia </br>
                            Co-founder of Ever AI Technologies </br>
                        </div>
                        </br>
              
                        <div class="workshop-speaker-details">
                            <h6>LinkedIn </h6>
                            <a href="https://www.linkedin.com/in/fairoza-amira-binti-hamzah/?originalSubdomain=my">View Profile </a>
                        </div>
                    </div>
                    </div>
			</div>


<div class="subpage-sec-content my-5 workshop-content" data-aos="fade-up" data-aos-duration="1900">
                <small># Workshop 2</small>
                <h3>Building an Intelligent Chatbot</h3>
                <hr>
                <div class="date-and-link d-lg-flex justify-content-between">
                <div class="date d-md-flex d-lg-flex mt-2 justify-content-center">
                    <div class="mr-md-2 mr-lg-2 text-center"><i class="fal fa-calendar-alt fa-lg mr-2"> 21<div style="vertical-align: super;font-size: small;display:inline-block;">st</div> of February 2023</i> </div>
                        <div class="ml-md-2 ml-lg-2 text-center"><i class="fal fa-clock fa-lg mr-2"> 9.30 AM - 11.30 AM</i></div>
                    </div>
                    <!-- <div class="link mt-2 text-center link" onclick="opens('https://learn.zoom.us/webinar/register/WN_n3t6J-meTHSHpma5vhSXOQ')">
                   
                        <i class="fal fa-link fa-lg mr-2"></i> <a target="_blank">Join the Workshop</a>
                    </div> -->
                </div>
                <div class="row mt-4 align-items-center workshop-speaker m-0">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <img src="assets/images/speakers/Dr.SagaraSumathipala.jfif">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-9">
                    <div class="workshop-speaker-details" align="justify">
                            <h6>Aim of the workshop </h6>
                            The aim of this workshop is to provide a basic understanding of various concepts, issues, and technologies related to Conversational AI.                        </div>
                            </br>
                        <div class="workshop-speaker-details">
                            <h6>Objectives </h6>
                            <ul class="mb-2" style="margin-left:25px" >
                                    <li>To provide an introduction to the various concepts and issues of Conversational AI </br>
                                    </li>
                                    <li>To discuss different technologies of building intelligent chatbots </br>
                                    </li>
                                    <li>To provide an understanding on different components of a typical dialogue management system  </br></li>
                                    </li>
                                    <li>To provide hands-on experience in building a simple chatbot using Open Source Frameworks  </br></li>
                                    </li>
                                 </ul>
                                 </br>
                        </div>
                        <div class="workshop-speaker-details" align="justify">
                            <h6>Description </h6>
                            Conversational AI has been defined as “the study of techniques for creating software agents that can engage in natural conversational interactions with humans”. While the idea of interacting with a machine using natural languages (text or voice) has been around for a long time, it is only recently that it has become a reality. Nowadays, people can talk to digital personal assistants on their smartphones, they can ask questions or issue commands to voice-enabled smart speakers, and they can navigate using voice-based systems in their automobiles. In other words, Conversational AI has become ubiquitous. Various terms are used in the literature to describe these systems, for example, Dialogue System, Voice User Interface, Conversational Agent, and Chatbot. This workshop will provide hands-on experience in building a simple chatbot using open source frameworks.                              </br>
                            </br>
                        </div>
                        <div class="workshop-speaker-details">
                            <h6>Target Audience </h6>
                            University Students and  Researchers
                            </br></br>
                        </div>
                        <div class="workshop-speaker-details">
                            <h6>Resource Person </h6>
                            Dr. Sagara Sumathipala 
                            </br>
                            Senior Lecturer, University of Moratuwa
                        </div>
                       
                       
                        </br>
                       
                        <div class="workshop-speaker-details">
                            <h6>LinkedIn </h6>
                            <a href="https://www.linkedin.com/in/sagara-sumathipala-275a4b38/?originalSubdomain=lk">View Profile </a>
                        </div>
                    </div>
                </div>
                </div>
			
            

<div class="subpage-sec-content my-5 workshop-content" data-aos="fade-up" data-aos-duration="1900">
                <small># Workshop 3</small>
                <h3>Robot Operating System</h3>
                <hr>
                <div class="date-and-link d-lg-flex justify-content-between">
                    <div class="date d-md-flex d-lg-flex mt-2 justify-content-center">
                    <div class="mr-md-2 mr-lg-2 text-center"><i class="fal fa-calendar-alt fa-lg mr-2"> 25<div style="vertical-align: super;font-size: small;display:inline-block;">th</div> of February 2023</i> </div>
                        <div class="ml-md-2 ml-lg-2 text-center"><i class="fal fa-clock fa-lg mr-2"> 9.30 AM onwards </i></div>
                  </div>

                    <!-- <div class="link mt-2 text-center link" onclick="opens('https://learn.zoom.us/meeting/register/u50td-6orT4pG9DvaiuSKwoYGI6S5yThfUlx')">
                  
                        <i class="fal fa-link fa-lg mr-2"></i> <a target="_blank">Join the Workshop</a>
                    </div> -->
                </div>
                <div class="row mt-4 align-items-center workshop-speaker m-0">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <img src="assets/images/speakers/prof.chandimal.jpg">
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-9">

                    <div class="workshop-speaker-details" align="justify">
                            <h6>Aim of the workshop </h6>
                            The aim of this workshop is to introduce the Robot Operating System (ROS) framework to an audience interested in programming robots. The participants will be able to appreciate the features of the ROS framework and develop a fundamental understanding of programming robots using ROS.                             </br>
                            </br>
                        <div class="workshop-speaker-details">
                            <h6>Objectives </h6>
                            <ul class="mb-2" style="margin-left:25px" >
                                    <li>Getting Started with ROS </br>
                                    </li>
                                    <li>ROS Architecture </br>
                                    </li>
                                    <li>ROS Programming with Applications  </br></li>
                                    </li>
                                    
                                 </ul>
                                 </br>
                        </div>
                        <div class="workshop-speaker-details" align="justify">
                            <h6>Description </h6>
                            ROS is an open-source, meta-operating system for robots. It provides the services you would expect from an operating system, including hardware abstraction, low-level device control, implementation of commonly-used functionality, message-passing between processes, and package management. It also provides tools and libraries for obtaining, building, writing, and running code across multiple computers. ROS is the Robot Operating System framework, which is used nowadays by hundreds of research groups and companies in the robotics industry. ROS is focused on maximizing code reuse in robotics research and development.                            </br>
                            </br>
                        </div>
                        <div class="workshop-speaker-details">
                            <h6>Target Audience  </h6>
                            University Students and  Researchers
                            </br></br>
                        </div>
                        <div class="workshop-speaker-details">
                            <h6>Resource Person </h6>
                            Prof. Chandimal Jayawardena
                            </br>
                            
                           Professor, Sri Lanka Institute of Information Technology</br>
                        </div>
                        
                        </br>
                       
                        <div class="workshop-speaker-details">
                            <h6>LinkedIn </h6>
                            <a href="https://www.linkedin.com/in/chandimal-jayawardena-556a334/?originalSubdomain=lk">View Profile </a>
                        </div>
                    </div>
                </div>
			</div>
            </div>



            </div>
		<svg style="position: relative; bottom: -10px;" xmlns="http://www.w3.org/2000/svg" viewBox="50 0 1340 220"><path fill="#ff6600" fill-opacity="1" d="M0,160L40,138.7C80,117,160,75,240,69.3C320,64,400,96,480,128C560,160,640,192,720,186.7C800,181,880,139,960,144C1040,149,1120,203,1200,208C1280,213,1360,171,1400,149.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
	</section>

	<!---------- Back to top button ---------->
    <span id="back-to-top-btn"><i class="fal fa-arrow-to-top fa-lg"></i><span>Top</span></span>

    <!-- footer section -------------------------------------------------------------------------------------------->
    <?php require_once './common/footer.php'; ?>
    <script>
        function opens(link){
            window.open(link);
        }
      
        AOS.init({once: true});
    </script>
  
</body>
<div class="se-pre-con"></div>
</html>