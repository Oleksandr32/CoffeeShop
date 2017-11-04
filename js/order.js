$(document).ready(function(){
	$("#title").animate({
        left:"0px"
	}, 2000, function() {
		$("#mainlogo").animate({
			top: "5px"
		});
	});				
});

function showAll() {
	if ($("#order_list").is(':visible')) {
		$("button").text("Show All Order List");
		$("#order_list").hide('fast', function() {
			$("#last_order").show('fast');		
		});
	} else {
		$("button").text("Show Last Order");
		$("#last_order").hide('fast', function() {
			$("#order_list").show('fast');		
		});	
	}	
};	