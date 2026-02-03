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
    const increment = target / 400;
    if (count < target) {
      counter.innerText = `${Math.ceil(count + increment)}`;
      setTimeout(updateCounter, 1);
    } else counter.innerText = target;
  };
  updateCounter();
});
const seoslider = new Swiper(".seo-slider", {
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

  // Function to check if elements exist
function elementExists(selector) {
  return document.querySelector(selector) !== null;
}

if (elementExists(".popup-youtube")) {
  // Get the modal and iframe elements
  var modal = document.getElementById("videoModal");
  var videoIframe = document.getElementById("youtubeVideo");

  // Get all the popup-youtube links
  var links = document.querySelectorAll('.popup-youtube');
  links.forEach(function(link) {
      link.addEventListener('click', function(e) {
          e.preventDefault();
          var videoUrl = this.getAttribute('data-video');
          videoIframe.src = videoUrl;
          modal.style.display = 'flex'; // Show the modal

          // Disable background scrolling
          document.body.classList.add('modal-open');
          document.documentElement.classList.add('overflow-hidden');
          document.body.classList.add('overflow-hidden');
      });
  });

  // Close the modal when clicking on the close button
  var closeBtn = document.querySelector('.close-btn');
  closeBtn.addEventListener('click', function() {
      modal.style.display = 'none';
      videoIframe.src = ''; // Stop the video

      // Re-enable background scrolling
      document.body.classList.remove('modal-open');
      document.documentElement.classList.remove('overflow-hidden');
      document.body.classList.remove('overflow-hidden');
  });

  // Close the modal when clicking outside the modal content
  window.addEventListener('click', function(e) {
      if (e.target === modal) {
          modal.style.display = 'none';
          videoIframe.src = ''; // Stop the video

          // Re-enable background scrolling
          document.body.classList.remove('modal-open');
          document.documentElement.classList.remove('overflow-hidden');
          document.body.classList.remove('overflow-hidden');
      }
  });
}
