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
        $('#base_content_div .inner').load('/admin/index.php?route=' + route);
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
