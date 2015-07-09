jQuery(function($) {
jQuery(document).ready(function () {
    "use strict";
	
    //Prepare
    var nav = jQuery("#logos");
    var nav_height = nav.find("li a").outerHeight();
    nav.css({overflow:"hidden", height: nav_height});
    
    //Every button
    nav.find("li").each(function()
    {
        var font_weight = $(this).find("a").css("font-weight");
        if(!$(this).hasClass('current-menu-item')){ //Don't animate if the text is bold
            var content = $(this).children();
            var clone = content.clone();
            $(this).append(clone);
             $(this).hover(function(){
				 
				$(this).find('a').stop().animate({top: -nav_height}, 200);
			},function(){
				$(this).find('a').stop().animate({top: 0}, 160);
			});
        }
    });
});
});

jQuery(document).ready(function(){
	var speed = 700;
	var pause = 2500;
	function tickerRecent()
	{
		last = jQuery('ul#listticker li:last').hide().remove();
		jQuery('ul#listticker').prepend(last);
		jQuery('ul#listticker li:first').slideDown("slow");
	}
	
	interval = setInterval(tickerRecent, pause);
	jQuery("#listticker").hover(function() {
		clearInterval(interval);
	}, function() {
		interval = setInterval(tickerRecent, pause);
	});
});
