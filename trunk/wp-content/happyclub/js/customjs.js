if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/Android/i)) || (navigator.userAgent.match(/webOS/i))) {
    eventbtn ="touchstart";
    eventbtn2 ="touchstart";
}else{
    eventbtn = "click";
    eventbtn2 = "hover";
}

$(document).ready(function(){
        var styling =".question{cursor:pointer;}" +
                      ".answer{display:block;}" +
                      ".opened{color:#000;}" +
                      ".closed{color:#000;}";        
        //attach style to the page
        var style = document.createElement("style");
        style.type = "text/css";
        try {
            style.appendChild( document.createTextNode(styling) );
        } catch (e) {
            if ( style.styleSheet ) {
                style.styleSheet.cssText = styling;
            }
        }
        document.body.appendChild( style );
			$(".question").addClass("closed"); 
			$(".question:first").removeClass("closed").addClass("opened"); 
			$(".answer").hide(); //hide answers
			$(".answer:first").show(); //show first answer
			//question click
			$(".question").click(function() {
				$(".answer").slideUp("fast");
				$(".question").removeClass("opened").addClass("closed");
		 
				if ($(this).next(".answer").is(":hidden")) {
					$(this).next(".answer").slideDown("fast");
					$(this).removeClass("closed").addClass("opened");
				}              
        });

});//END OF READY