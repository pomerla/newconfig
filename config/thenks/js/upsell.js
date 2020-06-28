$(function () {
    
    $('a[href^="#"]').click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    });
    
    $('.animate').on('click', function() {
        var el = $(this);
        if (el[0].tagName.toLowerCase() == 'img') {
            el = el.parent();
        }
        var animateElements = el.parent().find('.animate');
        animateElements.removeClass('active');
        el.addClass('active');
        var img = el.find('img');
        var url = img.attr('src');
        var target = el.attr('data-target');
        $(target).attr('src', url);
    });
    
    
});
 