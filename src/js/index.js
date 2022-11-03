$(document).ready(function(){
    // owl carousel 
    $("#banner-area .owl-carousel").owlCarousel({
        dots:true,
        items:1,
        loop:true,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    });


    // owl carousel 
    $("#hot-deals .owl-carousel").owlCarousel({
        loop:true,
        margin: 10,
        dots:true,
        nav:true,
        responsive: {
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
});