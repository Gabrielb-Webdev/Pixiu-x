import "swiper/swiper-bundle.min.css";
import Swiper from "swiper/bundle";
import AOS from 'aos';
 AOS.init();
 
const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  counter.innerText = "0";
  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const count = +counter.innerText;
    const increment = target / 200;
    if (count < target) {
      counter.innerText = `${Math.ceil(count + increment)}`;
      setTimeout(updateCounter, 1);
    } else counter.innerText = target;
  };
  updateCounter();
});

  const agencyslider = new Swiper(".agency-slider", {
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 20,
    speed: 2000,
    loop: true,
    autoplay: {
    delay: 2000,
    disableOnInteraction: false,
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      draggable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next.testimonial9-next',
        prevEl: '.swiper-button-prev.testimonial9-prev',
    },
  });

  const clientlogoslider = new Swiper(".client-logo-slider", {
    slidesPerView: 5,
    centeredSlides: true,
    spaceBetween: 20,
    speed: 1000,
    loop: true,
    autoplay: {
      delay: 2000,
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