/* index.js */


$(document).ready(function() {   

    // images slide
    var currentslide = 0;
    var slides = $('#imageSlider li');
    imageSlider();

    function imageSlider(){
        // hide all slides
        for (var i = 0; i < slides.length; i++){
            $(slides[i]).attr('class', 'hide');
        }
        // check if not last slide
        if (currentslide >= slides.length){
            currentslide = 0;
        }
        // display slide
        $(slides[currentslide]).removeClass('hide');
        currentslide++;
        setTimeout(imageSlider, 3000);
    }

});