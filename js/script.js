$(window).on('load', function () {

    // PAGE LOADER
    $('.pre-load').stop().animate({opacity:0}, 500, function(){
        $('.pre-load').css({'display':'none'});
        $('body').css({'overflow-y':'auto'});
    });

});


$(function() {

});