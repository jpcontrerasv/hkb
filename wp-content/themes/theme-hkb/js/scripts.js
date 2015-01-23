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
	

	$( "#serchform input" ).keypress(function() {
	  $( "#tooltip-search" ).addClass("ocultar");
	});

    $('#searchform').submit(function(e) { 
        var s = $( this ).find("#s"); // find the #s, which is the search input id
        if (!s.val()) { // if s has no value, proceed
            e.preventDefault(); // prevent the default submission
            $("#tooltip-search").removeClass("ocultar").delay(5000).fadeOut(400);
			//alert("Your search is empty!"); // alert that the search is empty
            $('#s').focus(); // focus on the search input
        }
    });

	
});
