//jQuery time
var current_fs, next_fs, previous_fs; //variables de pages
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag pour éviter les bug de multiclics

$( document ).ready(function() {

	$(".next").click(function(){
		//if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		
		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		
		//show the next fieldset
		next_fs.show(); 
		current_fs.hide();
		window.scrollTo(0, 0);
	});

	$(".previous").click(function(){
		//if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		
		//de-activate current step on progressbar
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
		
		//show the previous fieldset
		previous_fs.show(); 
		//hide the current fieldset with style
		current_fs.hide();
		window.scrollTo(0, 0);
	});



	$(".submit").click(function(){
		return false;
	})
});