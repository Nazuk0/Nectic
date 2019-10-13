$(window).load(function () {
    var $container = $('.row');       // take all the images
    $container.isotope({
        filter: '*',            // we select all the images to start with
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('.sidenav a').click(function () {
        $('.sidenav .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});


$(function () {
    var $container = $('.row');       // take all the images
    $container.isotope({
        filter: '*',            // we select all the images to start with
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    $('.sidenav a').click(function () {

        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });
        return false;
    });
});


