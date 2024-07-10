<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Caminadora Slider</title>
    <style>
      .slider {
        display: flex;
        background: white;
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
        height: 35vw;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: calc(100vw - 30px);
        flex-direction: row;
        align-content: center;
        flex-wrap: wrap;
        align-items: center;
      }

      .slide-track {
        animation: scroll 40s linear infinite;
        display: flex;
        width: calc(250px * 25);
      }

      .slider::before,
      .slider::after {
        content: "";
        height: 100%;
        position: absolute;
        width: 20rem;
        z-index: 2;
      }

      .slider::after {
        right: 0;
        top: 0;
        transform: rotateZ(180deg);
        background: linear-gradient(
          to left,
          rgba(255, 255, 255, 0.3),
          rgba(255, 255, 255, 0.9)
        );
      }

      .slider::before {
        left: 0;
        top: 0;
        background: linear-gradient(
          to right,
          rgba(255, 255, 255, 0.9),
          rgba(255, 255, 255, 0.3)
        );
      }

      .slide {
        width: 30rem;
        margin: 0 5px;
      }

      @keyframes scroll {
        0% {
          transform: translateX(0);
        }
        100% {
          transform: translateX(calc(-250px * 9));
        }
      }

      .card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-color: rgba(255, 255, 255, 1);
        padding: 20px;
        max-width: 500px;
        border: groove;
      }

      .stars {
        display: flex;
        grid-gap: 0.125rem;
        gap: 0.125rem;
        color: rgb(238, 203, 8);
      }

      .star {
        height: 1.25rem;
        width: 1.25rem;
      }

      .date-time {
        color: rgba(7, 63, 216, 1);
        font-size: 12px;
        font-weight: 600;
      }

      .description {
        margin-top: 0.4rem;
        line-height: 1.625;
        color: rgba(107, 114, 128, 1);
      }

      .author {
        margin-top: 1.3rem;
        font-size: 0.875rem;
        line-height: 1.25rem;
        color: rgba(107, 114, 128, 1);
        font-weight: bold;
      }

      @media (max-width: 720px) {
        .slider::before,
        .slider::after {
          width: 2rem;
        }

        .slide-track {
          width: calc(250px * 14);
        }
        
        .slider {
          height: 150vw;
        }

        .slider::after {
          transform: rotateZ(180deg);
          background: linear-gradient(
            to left,
            rgba(255, 255, 255, 0.1),
            rgba(255, 255, 255, 0.5)
          );
        }

      .slider::before {
          background: linear-gradient(
            to right,
            rgba(255, 255, 255, 0.5),
            rgba(255, 255, 255, 0.1)
          );
        }
      }
    </style>
  </head>
  <body>
    <div class="slider">
      <div class="slide-track">
        <!-- Aquí se generarán dinámicamente las tarjetas de testimonio -->
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">19/11/2020</p>
              <p class="description">Pixiux brindó un servicio excepcional en el desarrollo de nuestro software personalizado. Su equipo fue atento a nuestras necesidades y entregó una solución que superó nuestras expectativas.</p>
            </div>
            <div class="author">— Emily Johnson</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">15/09/2021</p>
              <p class="description">Trabajar con Pixiux para la implementación de HubSpot fue muy fácil. Nos guiaron expertamente en el proceso, y ahora estamos viendo excelentes resultados en nuestros esfuerzos de marketing.</p>
            </div>
            <div class="author">— Samantha Lee</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">03/05/2022</p>
              <p class="description">Los servicios de scraping de datos de Pixiux nos ayudaron a obtener rápidamente información crítica de mercado. Su experiencia en automatización y extracción de datos es excelente.</p>
            </div>
            <div class="author">— Michael Davis</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">20/07/2023</p>
              <p class="description">El equipo de diseño web de Pixiux creó una impresionante presencia digital para nuestra marca. Su creatividad y atención al detalle realmente los destacan.</p>
            </div>
            <div class="author">— Sarah Thompson</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">10/03/2024</p>
              <p class="description">Elegir Pixiux para el desarrollo de nuestro comercio electrónico fue un cambio de juego. Hicieron el proceso fácil y entregaron una plataforma que superó nuestras expectativas.</p>
            </div>
            <div class="author">— David Wilson</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">05/12/2020</p>
              <p class="description">La consultoría personalizada de HubSpot de Pixiux nos ayudó a optimizar nuestro CRM de manera efectiva. Sus ideas y estrategias fueron invaluables.</p>
            </div>
            <div class="author">— Olivia Brown</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">14/08/2022</p>
              <p class="description">Estamos encantados con los servicios de desarrollo de aplicaciones móviles de Pixiux. Entregaron una solución robusta que ha mejorado significativamente nuestro compromiso con los clientes.</p>
            </div>
            <div class="author">— Christopher Anderson</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">21/11/2021</p>
              <p class="description">La experiencia de Pixiux en el desarrollo de software personalizado es incomparable. Entregaron una solución que se alineó perfectamente con nuestras necesidades empresariales y superó nuestras expectativas.</p>
            </div>
            <div class="author">— Rachel Miller</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">16/10/2023</p>
              <p class="description">Contratamos a Pixiux para nuestro proyecto de scraping web, y su eficiencia y precisión fueron impresionantes. Nos proporcionaron información valiosa que nos ayudó a tomar decisiones informadas.</p>
            </div>
            <div class="author">— Thomas Scott</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">25/09/2021</p>
              <p class="description">Elegir a Pixiux para el desarrollo de nuestro comercio electrónico fue una decisión acertada. Entregaron una plataforma fácil de usar que ha aumentado significativamente nuestras ventas en línea.</p>
            </div>
            <div class="author">— Jessica Clark</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">08/08/2022</p>
              <p class="description">Los servicios de consultoría de HubSpot de Pixiux fueron fundamentales para optimizar nuestros esfuerzos de marketing. Proporcionaron soluciones prácticas que mejoraron nuestra eficiencia general.</p>
            </div>
            <div class="author">— Daniel Roberts</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">13/07/2021</p>
              <p class="description">La experiencia de Pixiux en la optimización de HubSpot ha sido invaluable para nuestro negocio. Nos ayudaron a maximizar el potencial de nuestro CRM y mejorar nuestra eficiencia general de ventas.</p>
            </div>
            <div class="author">— Emma Wilson</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">09/06/2022</p>
              <p class="description">Trabajar con Pixiux en nuestro proyecto de desarrollo web personalizado fue un placer. Entendieron nuestra visión y entregaron un sitio web que representa perfectamente nuestra marca.</p>
            </div>
            <div class="author">— Benjamin Taylor</div>
          </div>
        </div>
        <div class="slide">
          <div class="card">
            <div class="stars">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
              <img class="star" src="sources/icons/stars.svg" alt="">
            </div>
            <div class="infos">
              <p class="date-time">28/05/2022</p>
              <p class="description">Pixiux's expertise in optimizing HubSpot has been invaluable to our business. They helped us maximize our CRM's potential and improve our overall sales efficiency.</p>
            </div>
            <div class="author">— Sophia King</div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
