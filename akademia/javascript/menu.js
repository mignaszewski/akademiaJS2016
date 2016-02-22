$(document).ready(
	function() 
	{   
		var stickyNavTop = $('.pasek').offset().top;   
		var stickyNav = function()
		{   
			var scrollTop = $(window).scrollTop();
			if (scrollTop > stickyNavTop) 
			{       
				$('.pasek').addClass('sticky_top');   
			} 
			else 
			{      
				$('.pasek').removeClass('sticky_top');    
			}    
		};   
		stickyNav();   
		$(window).scroll
		(
			function() 
			{      
				stickyNav();   
			}
		);   
	}
);