/**
 * Created by Angreh on 27/07/2015.
 */
$(function () {
    var l_margin = ($('.container').width() - $('.card').width()) / 2;
    $('.card').css('margin-left', l_margin + 'px');

    var t_margin = ($(window).height() - $('.card').height()) / 2;
    $('.card').css('margin-top', t_margin + 'px');
});
