$(document).ready(function ()
    {
		var a1 = 0;
		var a2 = 1;
        $('.content>div1').hide();
		$('.content>div2').show();

        $('.content>k1').click(function ()
            {
				$('.content>div2').hide();
                $(this).next().slideToggle('fast');
                $(this).toggleClass('active');
				a1 = (a1+1)%2;
				a2=0;
				showCheck();
            }
        );

        $('.content>k2').click(function ()
            {
				$('.content>div1').hide();
                $(this).next().slideToggle('fast');
                $(this).toggleClass('active');
				a2 = (a2+1)%2;
				a1=0;
				showCheck();
            }
        );
		
		function showCheck()
		{
			if(a1===0 && a2===0)
			{
				showSignup();
			}
		}
		
		function showSignup() 
		{
			$('.content>div1').hide();
			$('.content>div2').show();
			a2=1;
		}
    }
);