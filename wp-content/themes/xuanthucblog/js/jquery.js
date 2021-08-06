$(document).ready(function(){
	$('.header-menu > ul').hide();
	$('a.show-menu').click(function(){
		$('.header-menu > ul').slideToggle(1000);
		return false;
	});
});