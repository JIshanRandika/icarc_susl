var width = $(window).width();
var height = $(window).height();

/* ----------------------------------------------------------- */
/*  Navbar scolling functions
/* ----------------------------------------------------------- */
$(window).on('scroll', function(){
	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
		$(".navbar").addClass('navbar-scroll').fadeIn('slow');
		$(".navbar-brand").addClass('navbar-img-scroll').fadeIn('slow');
		$(".navbar-brand img").attr("src","images/logo/resized/icarc-logo-white-png.png").fadeIn('slow');
	}else{
		$(".navbar").removeClass('navbar-scroll').fadeIn('slow');
		$(".navbar-brand").removeClass('navbar-img-scroll').fadeIn('slow');
		$(".navbar-brand img").attr("src","images/logo/resized/icarc-logo-png.png").fadeIn('slow');
	}

	if ($(window).scrollTop() > 300) {
		$("#back-to-top-btn").addClass("show");
	}else{
		$("#back-to-top-btn").removeClass("show");
	}
});


$(document).ready(function(){

	$("#navlink-sb").hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).slideToggle('fast');
    });
    $("#navlink-abt").hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).slideToggle('fast');
    });

	if ($(window).scrollTop() > height) {
		$(".navbar-brand img").attr("src","images/logo/resized/icarc-logo-white-png.png");
	}else{
		$(".navbar-brand img").attr("src","images/logo/resized/icarc-logo-png.png");
	}

	$("#back-to-top-btn").click(function(){
		$("html, body").animate({scrollTop:0}, 1000);
	});

	/* ----------------------------------------------------------- */
	/*  Home page navbar link click scrolling functions
	/* ----------------------------------------------------------- */
	
	// $("#navlink-home").on('click', function(e) {
	// 	e.preventDefault();
	// 	if (width >= 1000) {
	// 		$('html, body').animate({
	// 			scrollTop: $("#index-header").offset().top-80
	// 		},1000);
	// 	}
	// });
	// $("#navlink-about").on('click', function(e) {
	// 	e.preventDefault();
	// 	if (width >= 1000) {
	// 		$('html, body').animate({
	// 			scrollTop: $("#about").offset().top-80
	// 		},1000);
	// 	}
	// });
	// $("#navlink-tracks").on('click', function(e) {
	// 	e.preventDefault();
	// 	if (width >= 1000) {
	// 		$('html, body').animate({
	// 			scrollTop: $("#tracks").offset().top-80
	// 		},1000);
	// 	}
	// });
	// $("#navlink-timeline").on('click', function(e) {
	// 	e.preventDefault();
	// 	if (width >= 1000) {
	// 		$('html, body').animate({
	// 			scrollTop: $("#timeline").offset().top-80
	// 		},1000);
	// 	}
	// });
	// $("#navlink-speakers").on('click', function(e) {
	// 	e.preventDefault();
	// 	if (width >= 1000) {
	// 		$('html, body').animate({
	// 			scrollTop: $("#keynote").offset().top-80
	// 		},1000);
	// 	}
	// });
	// $("#navlink-sponsors").on('click', function(e) {
	// 	e.preventDefault();
	// 	if (width >= 1000) {
	// 		$('html, body').animate({
	// 			scrollTop: $("#sponsors").offset().top-80
	// 		},1000);
	// 	}
	// });
	$("#page-scroll-btn").on('click', function(e) {
		e.preventDefault();
		if (width >= 1000) {
			$('html, body').animate({
        		scrollTop: $("#details").offset().top-80
			},1000);
		}
	});

    // document.getElementById("continue-registration").onclick = function () {
    //     location.href = "register.php";
    // };
});
