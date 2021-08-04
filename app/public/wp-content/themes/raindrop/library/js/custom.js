jQuery( document ).ready(function() {
	jQuery(".widget ul li a").append("<i class='fa fa-chevron-circle-right' aria-hidden='true'></i>");
	console.log('ready');
});

jQuery('#esig-agree-button').click(function(e){
	if (jQuery(this).hasClass('disabled')) {
		console.log('Disabled');
		return;
	}

	ga('send', 'event', { eventCategory: 'Register Now', eventAction: 'Click', eventLabel: 'Agree & Sign'});
});