document.addEventListener('DOMContentLoaded', function () {
  const visao = document.getElementById('visao');
  const historia = document.getElementById('historia');
  const missao = document.getElementById('missao');
  const conteudoVisao = document.getElementById('conteudoVisao');
  const conteudohistoria = document.getElementById('conteudohistoria');
  const conteudoMissao = document.getElementById('conteudoMissao');

  visao.addEventListener('click', function () {
      conteudoVisao.classList.add('ativo');
      conteudohistoria.classList.remove('ativo');
      conteudoMissao.classList.remove('ativo');
  });

  historia.addEventListener('click', function () {
      conteudoVisao.classList.remove('ativo');
      conteudohistoria.classList.add('ativo');
      conteudoMissao.classList.remove('ativo');
  });

  missao.addEventListener('click', function () {
      conteudoVisao.classList.remove('ativo');
      conteudohistoria.classList.remove('ativo');
      conteudoMissao.classList.add('ativo');
  });
});




$(document).ready(function () {
  // Carrossel do banner
  $('.banner .slide').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    pauseOnHover: false,
    dots: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: false
        }
      }
    ]
  });

  // Carrossel de Marcas
  $('.logo_client .clientes').slick({
    slidesToScroll: 1,
    slidesToShow: 7,
    
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
  });

  // Carrossel de Depoimentos
  $('.depoimento .depos_cliente').slick({
    slidesToScroll: 1,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: $('.slick-prev'),
    nextArrow: $('.slick-next'),
    dots: false,
    fade: true, // Transição suave
    pauseOnHover: false,
  });
});
