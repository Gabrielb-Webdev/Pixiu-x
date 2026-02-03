import "swiper/swiper-bundle.min.css";
import Swiper from "swiper/bundle"; // Import from bundle only
import AOS from 'aos';
AOS.init();
const swiper = new Swiper(".client-logo-slider", {
    slidesPerView: 5,
    centeredSlides: true,
    spaceBetween: 20,
    speed: 500,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
    },
    breakpoints: {
      1200: { slidesPerView: 5 }, 
      992: { slidesPerView: 4 },  
      768: { slidesPerView: 4 },  
      576: { slidesPerView: 3 },  
      476: { slidesPerView: 2 },  
      0: { slidesPerView: 1 },    
    },
  });
  const faqSlider = new Swiper(".faq-slider", {
    speed: 600,
    loop: true,
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: true,
  
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      1200: { slidesPerView: 3 },
      768: { slidesPerView: 2 },
      0: { slidesPerView: 1 },
    },
  });