$(document).ready(function( ) {
$(window).load(function(){
        $('main').transition({ x: '0px', delay:800 }, 2000, 'snap');
        $('#loader').setTimeout(() => {
           hide(); 
        }, 3000);
    });

    // only run this script if window size is wide
    if ($(window).width() >= 820) {
        $('#nav a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    }
});