/* ============================================== */
/* Concatenate plugins here for faster loading    */
/*  -- Bonus points for minifying at launch!      */
/* ============================================== */

// ----------------------------------------------
// ! Simple Modal
// ----------------------------------------------

/*
	var simpleModal = {
		
		overlay:	"#ui-overlay",
		modal: 		"#ui-modal",
		selectors: {
			open: 	".ui-open-modal",
			close:	".ui-close-modal"
		},
	
		open: 	function() 
		{
		
			simpleModal.positionModal();
		
			$(simpleModal.overlay).fadeTo(200,.4, function() {
				$(simpleModal.modal).css("opacity","0").show().animate({
					opacity: 1
				}, 200);
			});
			
			simpleModal.listenResize();
			simpleModal.listenClose();
			
		},
		
		close: 	function()
		{
			$(simpleModal.modal).fadeOut(200, function(e) {
				$(simpleModal.overlay).fadeOut(250);
			});
		},
		
		listenClose: function()
		{
			$(window).keydown(function(e) {
				if (e.which == 27)
				{
					e.preventDefault();
					simpleModal.close();
				}	
			});
			
			$(simpleModal.modal).on("click",simpleModal.selectors.close,function(e) {
				e.preventDefault();
				simpleModal.close();
			});
		},
		
		listenResize: function()
		{
			if ($("html").hasClass("no-touch")) {
				$(window).resize(function() {
					simpleModal.positionModal();
				});
			}
		},
		
		positionModal: function()
		{
			var windowSize = $(window).height();
			var modalHeight = $(simpleModal.modal).outerHeight();
			
			if (modalHeight >= windowSize) {
				$(simpleModal.modal).css("position","absolute").css("top",$(window).scrollTop() + 10).css("marginTop","auto");
			}
			else {
				$(simpleModal.modal).css("position","fixed").css("top","50%").css("marginTop",-(modalHeight/2));
			}
		}
	
	}; 
*/