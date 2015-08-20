/**
 * Created by Bel on 7/25/2015.
 */
$(function () {
    $('.nav a').on('click', function(){
        //$(".btn-navbar").click(); //bootstrap 2.x
        $(".navbar-toggle").click() //bootstrap 3.x by Richard
    });

    $(window).scroll(function(){
        if($('#session4').visible(true)){

        }
    });

    $('#myCarousel').slippry();

    /*$.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
    });*/

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

    $.ajax({
        dataType: "json",
        url: '/admin/index.php?route=site-comments',
        success: function (data) {
            $.each(data, function (i, item) {
                newDiv = $('<article />')
                    .html('<div class="client_message">"' + item.message + '"</div><div class="client_name">- ' + item.client + '</div>');
                $('#client_carolsel').append(newDiv);
            });
            $('#client_carolsel').slippry({
                slippryWrapper: '<div class="sy-box news-slider" />', // wrapper to wrap everything, including pager
                elements: 'article', // elments cointaining slide content
                pager: false
            });
        }
    });

    $.ajax({
        dataType: "json",
        url: '/admin/index.php?route=site-news',
        success: function (data) {
            $.each(data, function (i, item) {
                var content = '<div class="col-md-3">' +
                    '<div class="nimg">' +
                    '<img src="/assets/images/layout/news-150x150.png" title="Notícias"/>' +
                    '</div>' +
                    '<h5>' + item.title + '</h5>' +
                    '<hr/>' +
                    '<p>' + item.message + '</p>' +
                    '</div>';
                newDiv = $('<article />').html(content);
                $('#news_div').append(newDiv);
            });
        }
    });

});