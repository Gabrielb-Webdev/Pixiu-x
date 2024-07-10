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
        width: calc(250px * 14);
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
    background: linear-gradient(to left, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.9));
}

.slider::before {
  left: 0;
  top: 0;
  background: linear-gradient(to right, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.3));
}

      .slide {
        width: 250px;
      }

      @keyframes scroll {
        0% {
          transform: translateX(0);
        }
        100% {
          transform: translateX(calc(-250px * 7));
        }
      }
      .card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        background-color: rgba(255, 255, 255, 1);
        padding: 20px;
        max-width: 320px;
        border: groove;
        margin: 0 5px 0 5px;
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

      .infos {
        margin-top: 1rem;
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
      }
    </style>
  </head>
  <body>
    <div class="slider">
      <div class="slide-track">
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
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
              <p class="date-time">2 day ago</p>
              <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                mollitia, molestiae quas vel sint commodi repudiandae
                consequuntur.
              </p>
            </div>

            <div class="author">— John Doe</div>
          </div>
        </div>
      </div>
    </div>

    <script>
      // Este script es opcional, aquí podrías añadir funcionalidades adicionales si las necesitas
    </script>
  </body>
</html>
