<script>
  $(document).ready(function() {
    // Agregar el evento de clic para los enlaces de la navbar
    $('.navbar-nav a').on('click', function(event) {
      // Verificar si este enlace apunta a un ID en la página
      if (this.hash !== "") {
        event.preventDefault();
        
        // Guardar el valor del hash
        var hash = this.hash;
        
        // Usar jQuery animate() para agregar desplazamiento suave
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function() {
          // Añadir hash (#) a la URL cuando termine de desplazarse (comportamiento por defecto del clic)
          window.location.hash = hash;
        });
      }
    });
  });
</script>
