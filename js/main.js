
jQuery(document).ready(function($){

	var menuOpen = false; 
	var csShowMore = false; 
	// $('#menuFull a').each( function(){
	// 	console.log(this);
	// 	$(this).attr("aria-hidden","true");
	// });

	// $('.fullNav').attr("aria-hidden","true");
	// menuFullAnchors.attr("aria-hidden","true");
	// console.log(menuFullAnchors);
	

	$("#menuToggleAnchor").on('click', function(event){
		menuOpen =! menuOpen; 
		console.log("MENU ANCHOR");
		// $('.fullNav').attr("aria-hidden","true");
		// $('#menuFull a').each( function(){
		// 	$(this).attr("aria-hidden","true");
		// });
		// console.log(menuFullAnchors);
		if(menuOpen){
			console.log("OPEN MENU");
			// $('.fullNav').attr("aria-hidden","false");
			// $('#menuFull a').each( function(){
			// 	$(this).attr("aria-hidden","false");
			// });
			$('.menuFull').css("left", "0px");
			$('.menuFull').css("transform", "rotate(0deg)");
		}else{
			console.log("CLOSE MENU");
			// $('.fullNav').attr("aria-hidden","true");
			$('.menuFull').css("transform", "rotate(-10deg)");
			// $('#menuFull a').each( function(){
			// 	$(this).attr("aria-hidden","true");
			// });
			if(window.innerWidth < 720){
				$('.menuFull').css("left", "140vw");
			}else{
				$('.menuFull').css("left", "120vw");
			}
		}
	});

	$("#cs_read_more").on('click', function(event){
		csShowMore =! csShowMore; 
		if(window.innerWidth<=720){
			if(csShowMore){
				// console.log("CS OPEN");
				$('.cs_more_text').css("max-height", "1200px");
				$("#cs_read_more p").html("Show less");

			}else{
				// console.log("CS CLOSE");
				$('.cs_more_text').css("max-height", "0px");
				$("#cs_read_more p").html("Read more");
			}
		}
	});
	if(window.innerWidth>720){
		// console.log("BIGGER THAN 720");
		$("#cs_read_more").css("display", "none");
		$('.cs_more_text').css("max-height", "1920px");			
	}


});