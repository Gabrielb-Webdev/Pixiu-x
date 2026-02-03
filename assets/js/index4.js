import "swiper/swiper-bundle.min.css";
import Swiper from "swiper/bundle"; // Import from bundle only
import AOS from 'aos';
AOS.init(); 
const imarqueeslider = new Swiper(".marquee-slider", {
    slidesPerView: "auto",
    centeredSlides: true,
    spaceBetween: 20,
    speed: 5500,
    loop: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
    },
        breakpoints: {
            1400: { slidesPerView: 4 }, 
            1024: { slidesPerView: 3 }, 
            640: { slidesPerView: 2 },  
            0: { slidesPerView: 1 },    
          },
  });
const marqueeslider2 = new Swiper(".marquee-slider2", {
    slidesPerView: "auto",
    centeredSlides: true,
    spaceBetween: 20,
    speed: 7000,
    loop: true,
    autoplay: {
      delay: 500,
      disableOnInteraction: false,
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
    },
        breakpoints: {
            1400: { slidesPerView: 4 }, 
            1024: { slidesPerView: 3 }, 
            640: { slidesPerView: 2 },  
            0: { slidesPerView: 1 },    
          },
  });

  const clientSlider = new Swiper(".client-slider", {
      speed: 600,
      loop: true,
      slidesPerView: 5,
      spaceBetween: 10,
      centeredSlides: true,
      navigation: {
        nextEl: '.swiper-button-next.testimonial4-next',
        prevEl: '.swiper-button-prev.testimonial4-prev',
    },
      breakpoints: {
        1200: { slidesPerView: 5 },
        480: { slidesPerView: 5 },
        0: { slidesPerView: 3 },
      },
    });

    const swiper = new Swiper(".testimonial-content-slider", {
    slidesPerView: 1,
        loop: true,
        speed: 800,
        centeredSlides: true,
        allowTouchMove: 1,
        spaceBetween: 10,
        navigation: {
              nextEl: '.swiper-button-next.testimonial4-next',
              prevEl: '.swiper-button-prev.testimonial4-prev',
          },
          effect: 'fade',
          fadeEffect: {
            crossFade: true, // Optional, enables smooth crossfading between slides
          },
    });