$(document).ready(function(){
    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true
    });
    $('.content__carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
    });
});
$(document).ready(function() {
    $(".left-menu-content").accordion({
        accordion:false,
        speed: 1500,
        closedSign: '[+]',
        openedSign: '[-]',
        heightStyle: 'content',
        active: false,
        collapsible: true,
    });
});
