const swiper = new Swiper('.swiper', {
    pagination: {
        speed: 600,
        parallax: true,
        el: '.swiper-pagination',
        clickable: true,
    },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
   
//     right: var(--swiper-pagination-right, 8px);
//     left: var(--swiper-pagination-left, auto);
//     top: 50%;
//     transform: translate3d(0px, -29%, 0);
// }



  
});