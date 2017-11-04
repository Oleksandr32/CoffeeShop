$(document).ready(function(){
	$("#title").animate({
        left:"0px"
	}, 2000, function() {
		$("#mainlogo").animate({
			top: "5px"
		});
	});

	$("#sidebar").fadeIn(1500);	

	$(".classic").click(function(event){
		$(this).hide("fast");
		$("#classic_desc").slideDown("slow");			
	});

	$(".guatemalan").click(function(event){
		$(this).hide("fast");
		$("#guatemalan_desc").slideDown("slow");			
	});

	$(".african").click(function(event){
		$(this).hide("fast");	
		$("#african_desc").slideDown("slow");
	});

	$(".close_c").click(function(event){
		$("#classic_desc").hide("fast");
		$(".classic").show("slow");
	});

	$(".close_g").click(function(event){
		$("#guatemalan_desc").hide("fast");
		$(".guatemalan").show("slow");
	});

	$(".close_a").click(function(event){
		$("#african_desc").hide("fast");
		$(".african").show("slow");
	});

	$("#classic_pict").click(function(){
		var minHeight = "80";
		if (this.height == minHeight) {
			$(this).animate({
		        left: '250px',
		        height: '150px',
		        width: '150px'
			});	
		} else {				
	    	$(this).animate({
		        height: '80px',
		        width: '80px'
    		});			
		}  		
	});

	$("#guatemalan_pict").click(function(){
		var minHeight = "80";
		if (this.height == minHeight) {
			$(this).animate({
		        left: '250px',
		        height: '150px',
		        width: '150px'
			});	
		} else {				
	    	$(this).animate({
		        height: '80px',
		        width: '80px'
    		});			
		}  		
	});

	$("#african_pict").click(function(){
		var minHeight = "80";
		if (this.height == minHeight) {
			$(this).animate({
		        left: '250px',
		        height: '150px',
		        width: '150px'
			});	
		} else {				
	    	$(this).animate({
		        height: '80px',
		        width: '80px'
    		});			
		}  		
	});
});