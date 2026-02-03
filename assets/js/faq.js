import "swiper/swiper-bundle.min.css";
import Swiper from "swiper/bundle"; // Import from bundle only

const faqSlider = new Swiper(".faq-slider", {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 20,
    speed: 1500,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
    },
        breakpoints: {
            1400: { slidesPerView: 3 }, 
            1024: { slidesPerView: 3 }, 
            768: { slidesPerView: 1 },  
            0: { slidesPerView: 1 },    
          },
  });

  const blogSlider = new Swiper(".blog-slider", {
    speed: 600, 
    loop: false,
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: false,
    effect: 'slide',
    slideShadows: false, 
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
      1024: { slidesPerView: 2 },  
      0: { slidesPerView: 1 },    
    },
  });