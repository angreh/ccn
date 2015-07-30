/**
 * Created by Bel on 7/26/2015.
 */
var Greh = {
    menu: function () {
        //alert('opa');
    },
    init: function () {
        this.menu();
        this.adjustContent();

        $(window).resize(function () {
            Greh.adjustContent();
        });
    },
    adjustContent: function () {
        var bcd_width = $(window).width() - 205;
        $('#base_content_div').width(bcd_width);
    },
    load: function (route) {
        if (arguments[1] == undefined) {
            $('#base_content_div .inner').load('/admin/index.php?route=' + route);
        } else {
            $.ajax({
                type: 'POST',
                url: '/admin/index.php?route=' + route,
                data: arguments[1],
                success: function(result){
                    $('#base_content_div .inner').html(result);
                }
            });
        }
    },
    submit: function (form) {
        $.ajax({
            url: '/admin/index.php?route=' + $(form).attr('action'),
            data: $(form).serialize(),
            method: 'post',
            success: function (result) {
                Greh.load(result);
            }
        });
    }
}

$(function () {
    Greh.init();
});
