/* scripts.js */


$(document).ready(function() {

    // identify active link on clamshell navigation
    var bodyid = $('body').attr('id');
    var sidemenuid = '#nav' + bodyid;
    $(sidemenuid).attr('id', 'active');
    $('#side-menu ul ul').hide();
    $('#side-menu #active').parents().show();
    $('#side-menu #active').children().show();

    // identify active link on main navigation
    var bodyclass = $('body').attr('class');
    var mainnavclass = '.nav' + bodyclass;
    $(mainnavclass).attr('id', 'iamhere');   

});