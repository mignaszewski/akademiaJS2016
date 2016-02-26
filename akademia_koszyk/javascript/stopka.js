$(document).ready(
	function() 
	{   
		var stickyNavBottom = $('.pasek').offset().Bottom;   
		var stickyNav = function()
		{   
			var scrollBottom = $(window).scrollBottom();
			if (scrollBottom > stickyNavBottom) 
			{       
				$('#stopka').addClass('sticky_bottom');   
			} 
			else 
			{      
				$('#stopka').removeClass('sticky_bottom');    
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