/* stores.js */


$(document).ready(function() {

    // initializing stores maps variables
    var harvardSquareMap;
    var chelseaMap;
    var santaMonicaMap;

    // initializing store locations variables
    var harvardSquare = new google.maps.LatLng(42.3733575, -71.1194852);
    var chelsea = new google.maps.LatLng(40.7466564, -74.0007098);
    var santaMonica = new google.maps.LatLng(34.0203832, -118.49407);

    function initialize() {
        
        var mapOptionsHarvard = {
            zoom: 15,
            center: harvardSquare
        };

        var mapOptionsChelsea = {
            zoom: 15,
            center: chelsea
        };

        var mapOptionsSantaMonica = {
            zoom: 15,
            center: santaMonica
        };

        // creating maps
        harvardSquareMap = new google.maps.Map(document.getElementById('harvardSquare'), mapOptionsHarvard);
        chelseaMap = new google.maps.Map(document.getElementById('chelsea'), mapOptionsChelsea);
        santaMonicaMap = new google.maps.Map(document.getElementById('santaMonica'), mapOptionsSantaMonica);

        // Harvard Square
        var storeInfoHarvard = "<b>Harvard Square - Piece of Heaven Bakery</b><br/><br />" +
            "<img src='/images/stores-page/store-front.png' alt='Harvard Square Store Front' />";

        var storeInfoWindowHarvard = new google.maps.InfoWindow({
            content: storeInfoHarvard
        });   

        var markerHarvard = new google.maps.Marker({
            position: harvardSquare,
            map: harvardSquareMap,
            title: 'Harvard Square - Piece of Heaven Bakery'
        });

        // Chelsea
        var storeInfoChelsea = "<b>Chelsea - Piece of Heaven Bakery</b><br/><br/>" + 
            "<img src='/images/stores-page/store-front2.png' alt='Chelsea Store Front' />";  

        var storeInfoWindowChelsea = new google.maps.InfoWindow({
            content: storeInfoChelsea
        });   

        var markerChelsea = new google.maps.Marker({
            position: chelsea,
            map: chelseaMap,
            title: 'Chelsea - Piece of Heaven Bakery'
        });

        // Santa Monica
        var storeInfoSantaMonica = "<b>Santa Monica - Piece of Heaven Bakery</b><br/><br/>" + 
            "<img src='/images/stores-page/store-front3.png' alt='Santa Monica Store Front' />";  

        var storeInfoWindowSantaMonica = new google.maps.InfoWindow({
            content: storeInfoSantaMonica
        });   

        var markerSantaMonica = new google.maps.Marker({
            position: santaMonica,
            map: santaMonicaMap,
            title: 'Santa Monica - Piece of Heaven Bakery'
        });

        // add click events
        google.maps.event.addListener(markerHarvard, 'click', function() {
            storeInfoWindowHarvard.open(harvardSquareMap,markerHarvard);
        });

        google.maps.event.addListener(markerChelsea, 'click', function() {
            storeInfoWindowChelsea.open(chelseaMap,markerChelsea);
        });    

        google.maps.event.addListener(markerSantaMonica, 'click', function() {
            storeInfoWindowSantaMonica.open(santaMonicaMap,markerSantaMonica);
        });   
    }
    
    google.maps.event.addDomListener(window, 'load', initialize);

});