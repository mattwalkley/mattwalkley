/* ============================================== */
/* Global jQuery Functionality */
/* ============================================== */

// Let's grab some global page elements
var sidebar = $("#sidebar");
var header = $("header");
var page = $("#page");
var portfolio = $("#portfolio");

$(document).ready(function(){ 
	
	mobileMenuVisible = false;
	
	// Hamburger mobile menu interaction
	$("#hamburgers").click(function(e) {

		e.preventDefault();
		
		$(this).toggleClass("whiteout");
		
		if (mobileMenuVisible == false)
		{
			showMobileMenu();
		}
		else
		{
			hideMobileMenu();
		}
		
	});
	
	// Window resize listeners for Desktop
	if ($('html').hasClass("no-touch"))
	{
		$(window).resize(function() {
			if ($(window).width() > 560)
			{
				$("#hamburgers").removeClass("whiteout");
				$(sidebar).css("left",0).show(0);
				$(header).css("left",0).show(0);
				$(page).show(0);
				mobileMenuVisible = false;
			}
			else if ($(window).width() < 560)
			{
				$(sidebar).css("left","-100%").show();
				$(header).css("left",0).hide();
				mobileMenuVisible = false;
			}
		});	
	}
	
	
	// Portfolio Functionality
	if ($("#portfolio").length)
	{	
		// Portfolio Item Triggers	
		$(portfolio).on("click","li",function() {
			url = $(this).data("url");
			openPortfolioItem(url);
		});
		
		// Portfolio Back Buttons
		$(page).on("click",".portfolio-back",function(e) {
			e.preventDefault();
			closePortfolioItem();
		});
		
		$(window).keydown(function(e) {
			if (e.which == 27 || e.which == 37)
			{
				closePortfolioItem();
			}
		});	
	}

});


/* ============================================== */
/* Functions */
/* ============================================== */

	function showMobileMenu()
	{
		// Scroll you to the top
		$('body,html').animate({
			scrollTop: 0
		},0);
		
		// Animate the sidebar/menu
		$("#sidebar").animate({
			left: 0
		},300, function() {
			$(page).hide(0);
			$(header).fadeIn(250);
		}).addClass("visible");	
		
		mobileMenuVisible = true;
	}
	
	function hideMobileMenu()
	{
		// Hide the sidebar/menu
		$(header).fadeOut(250);
		$("#sidebar").animate({
			left: '-100%'
		},300, function() {
			$(page).show(0);
		}).addClass("visible");
		
		mobileMenuVisible = false;
	}
	
	function openPortfolioItem(url)
	{
		$("body,html").animate({
			scrollTop: 0
		},150, function() {
			$(portfolio).slideUp(300);	
		});
		
		$(".codefolio").hide();
		
		// Get Content
		$.ajax(url).done(function(data) {
			$(page).find(".content").append(data);
			$(".portfolio-piece").fadeIn(1000);
		});
	}
	
	function closePortfolioItem()
	{
		$("body,html").animate({
			scrollTop: 0
		},150, function() {
			$(".portfolio-piece").fadeOut(250, function() {
				$(portfolio).fadeIn(300);
				$(".codefolio").fadeIn(300);
				$(this).remove();
			});		
		});
	}