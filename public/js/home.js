$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 5,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 800,
        arrows: false,
        dots: false,
            pauseOnHover: false,
            responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});

$(document).ready(function(){
    $('.institutional-partners').slick({
        slidesToShow: 4,
        swipeToSlide: true,
        autoplay: true,
        autoplaySpeed: 800,
        arrows: false,
        dots: false,
            pauseOnHover: false,
            responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});