
$(document).ready(function(){

    $("#main-carousel").on('slide.bs.carousel', function(event){
        
        
       var target=$(event.relatedTarget).find('.carousel-item-content');
       
        $("#slider-full-width").css("background-image", `url('${ target.data('image-url')}')`); 
    }); 


    $('.owl-carousel').owlCarousel({
        loop:true,
        autoplay : 3000,
        nav:true,
        responsive:{
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