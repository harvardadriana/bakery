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

});