$(window).load(function(){
	
	//jetmenu
	$().jetmenu({
		submenuTrigger:"click"
	});
	
	//Fit text
	$("#productos-destacados-home").fitText(1.1, { minFontSize: '50px', maxFontSize: '65px' });
	$("#tit-dest-1").fitText(1.1, { minFontSize: '50px', maxFontSize: '65px' });
	
	
	//flexslider
	$('.flexslider').flexslider({
		animation: "slide",
		directionNav: true,
	});
});
