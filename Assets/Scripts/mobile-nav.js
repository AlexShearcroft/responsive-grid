$(document).ready (function(){
	$('.js-nav-dropdown').on('click', function() {

		var dropdown_nav = $('.navigation__links');

		if ($(window).width() < 599) {
    		$(dropdown_nav).slideToggle('normal');
    	}

	});
});