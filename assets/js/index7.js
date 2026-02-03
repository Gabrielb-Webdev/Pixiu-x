import "swiper/swiper-bundle.min.css";
import Swiper from "swiper/bundle"; // Import from bundle only
import AOS from 'aos';
 AOS.init();

const swiper = new Swiper(".client-logo-slider", {
    slidesPerView: 5,
    centeredSlides: true,
    spaceBetween: 20,
    speed: 1000,
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

  const testimonialSlider = new Swiper(".testimonial-slider", {
    speed: 600, 
    loop: true,
    slidesPerView: 2,
    spaceBetween: 20,
    centeredSlides: true,
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
      576: { slidesPerView: 2 },  
      320: { slidesPerView: 1 },  
      0: { slidesPerView: 1 },   
    }
  });

  // counter js
  document.addEventListener('DOMContentLoaded', () => {
    // Function to handle the counter effect
    function counter(element, start, end, duration) {
      let startTimestamp = null;
      const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        element.innerText = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
          window.requestAnimationFrame(step);
        }
      };
      window.requestAnimationFrame(step);
    }
  
    // Select all span elements with the class 'counter'
    const counters = document.querySelectorAll('.counter');
  
    // Initialize the counters
    counters.forEach((counterElement) => {
      const targetNumber = parseInt(counterElement.innerText);
      counter(counterElement, 0, targetNumber, 2000); // Adjust duration if necessary
    });
  });
  