document.addEventListener('DOMContentLoaded', () => {
  // Parallax effect for sections
  document.addEventListener('scroll', function() {
    const parallaxSections = document.querySelectorAll('.parallax');
    let scrollPosition = window.pageYOffset;

    parallaxSections.forEach(section => {
      let speed = section.getAttribute('data-speed') || 0.5;
      section.style.backgroundPositionY = (scrollPosition * speed) + 'px';
    });
  });

  // Smooth scroll
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });

  // Navbar burger menu toggle
  const navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  if (navbarBurgers.length > 0) {
    navbarBurgers.forEach(el => {
      el.addEventListener('click', () => {
        const target = el.dataset.target;
        const targetElement = document.getElementById(target);

        el.classList.toggle('is-active');
        targetElement.classList.toggle('is-active');
      });
    });
  }
});
