/*==============================
	STYLE SWITCHER SCRIPT INSTALLATION
 ===============================*/
 
(function($) {
	"use strict";

	$(".style1" ).on("click", function(){
		$("#colors" ).attr("href", "css/styles.css" );
		$("#logo" ).attr("src", "img/logos/logo.png" );
		return false;
	});

	$(".style2" ).on("click", function(){
		$("#colors" ).attr("href", "css/styles-2.css" );
		$("#logo" ).attr("src", "img/logos/logo-2.png" );
		return false;
	});

	$(".style3" ).on("click", function(){
		$("#colors" ).attr("href", "css/styles-3.css" );
		$("#logo" ).attr("src", "img/logos/logo-3.png" );
		return false;
	});

	$(".style4" ).on("click", function(){
		$("#colors" ).attr("href", "css/styles-4.css" );
		$("#logo" ).attr("src", "img/logos/logo-4.png" );
		return false;
	});

	$(".style5" ).on("click", function(){
		$("#colors" ).attr("href", "css/styles-5.css" );
		$("#logo" ).attr("src", "img/logos/logo-5.png" );
		return false;
	});

	$(".style6" ).on("click", function(){
		$("#colors" ).attr("href", "css/styles-6.css" );
		$("#logo" ).attr("src", "img/logos/logo-6.png" );
		return false;
	});		

})(jQuery);

