$('.fashion').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:2000,
    autoplaySpeed:2000,
    dragEndSpeed:2000,
    navSpeed:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
$( ".fashion .owl-prev").html('<i class="fa fa-chevron-left"></i>');
$( ".fashion .owl-next").html('<i class="fa fa-chevron-right"></i>');