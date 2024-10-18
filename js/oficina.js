$(document).ready(function () {
  $('.banner .slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    responsive: [
      {
        breakpoint: 1024,  // Para telas menores que 1024px
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true
        }
      },
      {
        breakpoint: 768,   // Para telas menores que 768px (tablets)
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      },
      {
        breakpoint: 480,   // Para telas menores que 480px (celulares)
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: false
        }
      }
    ]
  });

  $('.logo_client .clientes').slick({
    slidesToScroll: 1,
    slidesToShow: 7,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]

  })

  $('.depoimento .depos_cliente').slick({
    slidesToScroll: 1,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: $('.slick-prev'),
    nextArrow: $('.slick-next'), /*chame do html para o js*/
    dots: false,
    fade: true, /*ele faz com que a apresentação seja suave*/
    pauseOnHover: false,
  });


});







