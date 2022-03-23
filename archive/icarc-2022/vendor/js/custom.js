var width = $(window).width();
var height = $(window).height();

/* ----------------------------------------------------------- */
/*  Navbar scolling functions
/* ----------------------------------------------------------- */
$(window).on('scroll', function(){
	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
		$(".navbar").addClass('navbar-scroll').fadeIn('slow');
		$(".navbar-brand").addClass('navbar-img-scroll').fadeIn('slow');
		$(".navbar-brand img").attr("src","assets/images/logo/resized/icarc-logo-white-png.png").fadeIn('slow');
	}else{
		$(".navbar").removeClass('navbar-scroll').fadeIn('slow');
		$(".navbar-brand").removeClass('navbar-img-scroll').fadeIn('slow');
		$(".navbar-brand img").attr("src","assets/images/logo/resized/icarc-logo-png.png").fadeIn('slow');
	}

	if ($(window).scrollTop() > 300) {
		$("#back-to-top-btn").addClass("show");
	}else{
		$("#back-to-top-btn").removeClass("show");
	}
});


$(document).ready(function(){

	$("#navlink-sb, #navlink-abt, #navlink-achieve").hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).slideToggle('fast');
    });

	if ($(window).scrollTop() > height) {
		$(".navbar-brand img").attr("src","assets/images/logo/resized/icarc-logo-white-png.png");
	}else{
		$(".navbar-brand img").attr("src","assets/images/logo/resized/icarc-logo-png.png");
	}

	$("#back-to-top-btn").click(function(){
		$("html, body").animate({scrollTop:0}, 1000);
	});

	/* ----------------------------------------------------------- */
	/*  Scroll button click scrolling functions
	/* ----------------------------------------------------------- */
	$("#page-scroll-btn").on('click', function(e) {
		e.preventDefault();
		if (width >= 1000) {
			$('html, body').animate({
        		scrollTop: $("#details").offset().top-80
			},1000);
		}
	});
});
