// Scrollable header
$(window).scroll(function(){
    var sticky = $('.main-header'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed-header');
    else sticky.removeClass('fixed-header');
});
