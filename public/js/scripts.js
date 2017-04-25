/* scripts.js */


$(document).ready(function() {

    // set default active link on clamshell navigation to 'sweets'
    var activelink = '#sweets';
    $(activelink).attr('class', 'active');
    $('#side-menu ul ul').hide();
    $('#side-menu .active').parents().show();
    $('#side-menu .active').children().show();

    // add click events
    $('#side-menu li').on('click', function() {

        // update active link
        $(activelink).removeClass('active');
        activelink = $(this);
        $(activelink).attr('class', 'active');

        // show active link's subitems
        $('#side-menu ul ul').hide();
        $('#side-menu .active').parents().show();
        $('#side-menu .active').children().show()

    });

    // identify active link on main navigation
    var bodyclass = $('body').attr('class');
    var mainnavclass = '.nav' + bodyclass;
    $(mainnavclass).attr('id', 'iamhere');

});