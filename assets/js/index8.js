
import "swiper/swiper-bundle.min.css";
import Swiper from "swiper/bundle"; // Import from bundle only
import AOS from 'aos';
 AOS.init();

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
      0: { slidesPerView: 1 },    
    },
  });

  const testimonial3 = new Swiper(".testimonial3-slider", {
    speed: 600, 
    loop: true,
    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.swiper-button-next.testimonial3-next',
        prevEl: '.swiper-button-prev.testimonial3-prev',
    },
    breakpoints: {
      1200: { slidesPerView: 3 }, 
      991: { slidesPerView: 2 },  
      0: { slidesPerView: 1 },    
    },
  });

  const caseSlider = new Swiper(".case-slider", {
    speed: 1000, 
    loop: true,
    slidesPerView: 2,
    spaceBetween: 30,
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
      640: { slidesPerView: 2 },  
      0: { slidesPerView: 1 },    
    },
  });