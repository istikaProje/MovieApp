document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiperHero', {
       loop: true,
       autoplay: {
          delay: 5000,
       },
       navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
       },
       pagination: {
          el: '.swiper-pagination',
          clickable: true,
       },
       slidesPerView: 1,
       spaceBetween: 10,
    });
 });