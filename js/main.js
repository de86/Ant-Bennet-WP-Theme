jQuery(document).ready(function(){
	jQuery('#donate-div').mouseenter(function(){
		jQuery('#donate-div h3').css('text-decoration', 'underline');
	});
	jQuery('#donate-div').mouseleave(function(){
		jQuery('#donate-div h3').css('text-decoration', 'none');
	});
	jQuery('#challenge-div').mouseenter(function(){
		jQuery('#challenge-div h3').css('text-decoration', 'underline');
	});
	jQuery('#challenge-div').mouseleave(function(){
		jQuery('#challenge-div h3').css('text-decoration', 'none');
	});
});