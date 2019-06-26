jQuery(document).ready(function( $ ) {

/* ADD CLASS ON LOAD*/

    $("html").delay(100).queue(function(next) {
        $(this).addClass("loaded");

        next();
    });

/* ADD CLASS ON SCROLL*/
	
	var latestKnownScrollY = 0,
	    requestAnimation   = true,
	    requestChangeClass = true,
	    currentDiv;

	function onScroll() {
		latestKnownScrollY = window.scrollY;
		requestScrollEvents();
	}
	
	function requestScrollEvents() {
		// Add class to body after scroll
		if(requestChangeClass) {
			requestAnimationFrame(addScrolledClass);
		}
		
		// Website animation
		if(requestAnimation) {
			
			var viewportTop = latestKnownScrollY,
			    viewportBot = latestKnownScrollY + window.innerHeight,
			    newDiv;
			
			$(".menu-item").each(function() {
				var link  = $(this).children().eq(0).attr("href"),
				    div    = $(link),
					divTop = div.position().top,
					divBot;
				
				if(link == "#home_page") {
					divBot = divTop + $("#home_page").innerHeight() + $("#introduction").innerHeight();
				} else {
					divBot = divTop + $(link).innerHeight();
				}
				
				if((divTop > viewportTop && (divTop - window.innerHeight / 2) < viewportBot)
				 ||(divTop <= viewportTop && (divBot - window.innerHeight / 2) >= viewportTop)) {
					newDiv = div;
					return false;
				}
			});
			
			if(!newDiv) {
				newDiv = $("#contact_us");
			}
			
			if(!currentDiv || newDiv.attr("id") != currentDiv.attr("id")) {
				currentDiv = newDiv;
				requestAnimationFrame(updateAnimation);
			}
		}
	}
	
	function addScrolledClass() {
		if(latestKnownScrollY >= 100) {
			$("body").addClass("scrolled");
			requestChangeClass = false;
		} else {
			$("body").removeClass("scrolled");
		}
	}
	
	function updateAnimation() {
		var divName = currentDiv.attr("id");
		
		$("a[href=#" + divName + "]").parent().addClass("active").siblings().removeClass("active");
		
		switch(divName) {
			case "home_page":
				$(".bottle").removeClass("blurred");
				$(".glass").removeClass("visible");
				$("#shadow-people .animate").removeClass("visible");
				$("#shadow-bottles .animate").removeClass("visible");
			break;
			
			case "our_wine":
				$(".bottle").addClass("blurred");
				$(".glass").addClass("visible");
				$("#shadow-people .animate").removeClass("visible");
				$("#shadow-bottles .animate").removeClass("visible");
			break;
			
			case "about_us":
				$(".bottle").removeClass("blurred");
				$(".glass").removeClass("visible");
				$("#shadow-people .animate").addClass("visible");
				$("#shadow-bottles .animate").removeClass("visible");
			break;
			
			case "contact_us":
				$(".bottle").removeClass("blurred");
				$(".glass").removeClass("visible");
				$("#shadow-people .animate").removeClass("visible");
				$("#shadow-bottles .animate").addClass("visible");
			break;
		}
	}

	window.addEventListener('scroll', onScroll, false);	
	
/* FORM CONTROL */

	$(".wpcf7-form-control").change(function() {
		if($(this).val()) {
			$(this).parents("label").find(".label").addClass("active");
		} else {
			$(this).parents("label").find(".label").removeClass("active");
		}
	});

//SMOOTH SCROLL TO ANCHOR 

	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		});
	});
    
/* File upload name */

	$(document).ready(function(){
        $('input#fileupload').change(function(){
	        var file = $("input[type=file]")[0].files;
	        var name = file.length > 0 ? file[0].name : "";
	        
	        if(file.length > 0 && name) {
		        $('.custom-file-upload').addClass('attached');
	        }
	        
	        $(".file-name").text(name);
        });
    });

/* CLASS AND FOCUS ON CLICK */

    $(".trigger-copy-expand").click(function(event) {
      $('.collapsed-content').addClass("expand");
      $(this).hide();
       $('.trigger-copy-collapse').show();     
    });

    $(".trigger-copy-collapse").click(function(event) {
        $('.collapsed-content').removeClass("expand");
        $(this).hide();
        $('.trigger-copy-expand').show();     
    });

    $(".trigger-expand").click(function(event) {
        $(this).closest('.expanding-copy').addClass("expand");
    });

    $(".trigger-collapse").click(function(event) {
        $(this).closest('.expanding-copy').removeClass("expand");
    });
    
    $("#contact-form .wpcf7-text, #contact-form .wpcf7-textarea").focusin(function() {
	    $(this).parents("label").addClass("focused");
    });
    
    $("#contact-form .wpcf7-text, #contact-form .wpcf7-textarea").focusout(function() {
	    $(this).parents("label").removeClass("focused");
    });

// ========== Add class if in viewport on page load

$.fn.isOnScreen = function(){
    
    var win = $(window);
    
    var viewport = {
        top : win.scrollTop(),
        left : win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();
    
    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();
    
    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    
};

	$('.slide-up').each(function() {
		if ($(this).isOnScreen()) {
			$(this).addClass('active');    
		} 
	});
	
	$('.slide-down').each(function() {
		if ($(this).isOnScreen()) {
			$(this).addClass('active');    
		} 
	});
	
	$('.slide-right').each(function() {
		if ($(this).isOnScreen()) {
			$(this).addClass('active');    
		}
	});
	
	$('.slow-fade').each(function() {
		if ($(this).isOnScreen()) {
			$(this).addClass('active');    
		}
	});

// ========== Add class on entering viewport

$.fn.isInViewport = function() {
var elementTop = $(this).offset().top;
var elementBottom = elementTop + $(this).outerHeight();
var viewportTop = $(window).scrollTop();
var viewportBottom = viewportTop + $(window).height();
return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).on('resize scroll', function() {
	$('.experience-level').each(function() {
		if ($(this).isInViewport()) {
			$(this).addClass('active');
		}
	});
	
	$('.slide-up').each(function() {
		if ($(this).isInViewport()) {
			$(this).addClass('active');    
		} 
	});
	
	$('.slide-down').each(function() {
		if ($(this).isInViewport()) {
			$(this).addClass('active');    
		} 
	});
	 
	$('.slide-right').each(function() {
		if ($(this).isInViewport()) {
			$(this).addClass('active');    
		} 
	});
	
	$('.slow-fade').each(function() {
		if ($(this).isInViewport()) {
			$(this).addClass('active');    
		}
	});
    
});

});//Don't remove ---- end of jQuery wrapper

