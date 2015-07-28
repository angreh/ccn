/**
 * Created by Bel on 7/25/2015.
 */
$(function () {
    $('#myCarousel').slippry();

    /*$('#session4').VScroll({
        speed: 0.8,
        topAdjust: 400
    });

    $('#session8').VScroll({
        speed: 0.8,
        topAdjust: 400
    });*/
    //$('.parallax').stellar();
    $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
    });
    $('.subNavBtn').each(function () {
        $(this).click(function () {
            var body = $("html, body");
            var tgt = $(this).attr('target');
            var target = $('#' + tgt).offset().top;
            if (target < 160) target = 160;
            body.stop().animate({scrollTop: target - 160}, '500');
            $('.subNavBtn').parent().removeClass('active');
            $(this).parent().addClass('active');
            return false;
        });

    });

});