import "swiper/swiper-bundle.min.css";
import Swiper from "swiper/bundle"; // Import from bundle only
import AOS from 'aos';
 AOS.init(); 
 
// benefits-section
const cards = document.querySelectorAll('.benefits-card');

let activeCard = document.getElementById('card-1');

cards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        activeCard.classList.remove('active');
        card.classList.add('active');
        activeCard = card;
    });
});

const blogSlider = new Swiper(".testimonial3-slider", {
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

