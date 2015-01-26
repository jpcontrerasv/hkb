$(window).load(function(){
	//jetmenu
	$().jetmenu({
		submenuTrigger:"click"
	});
	
	//Fit text
	$("#productos-destacados-home").fitText(1.1, { minFontSize: '30px', maxFontSize: '65px' });
	$("#tit-dest-1").fitText(1.1, { minFontSize: '50px', maxFontSize: '65px' });
	
	
	//flexslider
	$('#slide-home').flexslider({
		animation: "slide",
		directionNav: true,
		prevText: "&nbsp;",
		nextText: "&nbsp;"
	});
	

	
	$("#tooltip-search").addClass("ocultar");

    $('#searchform').submit(function(e) {
		
        var s = $( this ).find("#s"); // find the #s, which is the search input id
        if (!s.val()) { // if s has no value, proceed
            e.preventDefault(); // prevent the default submission
			alert("Your search is empty!"); // alert that the search is empty
            $('#s').focus(); // focus on the search input
        }
    });

	
});


/*Scroll index*/
/* Every time the window is scrolled ... */
$(window).scroll( function(){

	/* Check the location of each desired element */
	$('.hideme').each( function(i){
		
		var bottom_of_object = $(this).position().top + $(this).outerHeight();
		var bottom_of_window = $(window).scrollTop() + $(window).height();
		
		/* If the object is completely visible in the window, fade it it */
		if( bottom_of_window > bottom_of_object ){
			
			$(this).animate({'opacity':'1'},500);
				
		}
		
	}); 

});