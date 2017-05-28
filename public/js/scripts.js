/* scripts.js */


$(document).ready(function() {

    // hide/show active link on clamshell navigation
    $('#side-menu ul ul').hide();
    $('#side-menu .active').parents().show();
    $('#side-menu .active').children().show();

    // identify active link on main navigation
    var bodyclass = $('body').attr('class');
    var mainnavclass = '.nav' + bodyclass;
    $(mainnavclass).attr('id', 'iamhere');

	// hide/show food section
	$('li.menu').click(function(){

		// hide current food section
		var active = $('.active').attr('id');
		$('#' + active + 'gallery').addClass('hide');	

		// show clicked food section
		var chosenSection = $(this).attr('id');
		$('#'+chosenSection+'gallery').removeClass('hide');

		// hide/show clamshell navigation
	    $('#side-menu .active').removeClass('active');
	    $(this).addClass('active');

	    $('#side-menu ul ul').hide();
	    $('#side-menu .active').parents().show();
	    $('#side-menu .active').children().show();

	});

});