document.addEventListener("DOMContentLoaded", function () {
  // Obtener todos los encabezados <h1> en la descripción
  const mainTitles = document.querySelectorAll("#main-column h1");
  const tocTitles = document.querySelectorAll(".custom-column h6");

  function handleScroll() {
    const fromTop = window.scrollY + -500; // Ajuste para compensar cualquier offset o margen

    mainTitles.forEach((title, index) => {
      const tocTitle = tocTitles[index];

      if (tocTitle) {
        const titleTop = title.offsetTop;
        const titleHeight = title.offsetHeight;

        // Verificamos si el título principal está en la parte superior de la pantalla
        if (
          fromTop > titleTop &&
          fromTop < titleTop + window.innerHeight * 0.8
        ) {
          // Eliminamos cualquier clase activa de otros títulos
          tocTitles.forEach((toc) => toc.classList.remove("active-title"));
          // Agregamos la clase activa al título en la tabla de contenido
          tocTitle.classList.add("active-title");
        }
      }
    });
  }

  // Llama a la función al inicio para establecer el estado inicial
  handleScroll();

  // Agrega eventos para manejar el scroll y el resize
  window.addEventListener("scroll", handleScroll);
  window.addEventListener("resize", handleScroll); // Manejamos también el evento resize
});
