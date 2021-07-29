jQuery(document).ready(function(){
    jQuery('.menu-item-23 a').prepend("<i class='fa fa-user'></i>"); 
    jQuery('.menu-item-24 a').prepend("<i class='fa fa-heart'></i>"); 
    jQuery('.menu-item-25 a').prepend("<i class='fa fa-user'></i>"); 
    jQuery('.menu-item-26 a').prepend("<i class='fa fa-heart'></i>"); 
    jQuery('.menu-item-36').append("<i class='fa fa-sort-down'></i>"); 
    jQuery('.menu-item-36 .menu-item-140').append("<i class='fa fa-sort-down'></i>"); 
    

});

jQuery(document).ready(function(){
   

    jQuery(".owl-one").owlCarousel({
      loop:true,
      margin:10,
      responsiveClass:true,
      autoplayTimeout: 2000,
      autoplay: true,
      responsive:{
          0:{
              items:1,
              nav:true
          },
          600:{
              items:1,
              nav:true
          },
          1000:{
              items:1,
              nav:true,
              loop:true
          }
      }
    });


    jQuery(".owl-two").owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        autoplayTimeout: 2000,
        autoplay: true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:4,
                nav:true,
                loop:true
            }
        }
      });
  
});