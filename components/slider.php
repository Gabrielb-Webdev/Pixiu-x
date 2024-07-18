<?php
require_once('database/session.php');
check_session();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Testimonial Slider</title>
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
      border-radius: 25px;
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
      font-weight: 400;
    }

    .author {
      margin-top: 0rem;
      font-size: 1.2rem;
      line-height: 1.25rem;
      color: rgba(107, 114, 128, 1);
      font-weight: 900;
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
      <!-- Testimonials dynamically generated here -->
      <div class="slide">
        <div class="card">
          <div class="stars">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
          </div>
          <p class="date-time">18/12/2022</p>
          <p class="description">Pixiux provided exceptional service in developing our custom software. Their team was attentive to our needs and delivered a solution that exceeded our expectations.</p>
          <p class="author">— Emily Johnson</p>
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
          <p class="date-time">15/06/2023</p>
          <p class="description">Working with Pixiux for our HubSpot implementation was seamless. They guided us through the process expertly, and we're now seeing great results in our marketing efforts.</p>
          <p class="author">— Samantha Lee</p>
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
          <p class="date-time">29/02/2024</p>
          <p class="description">Pixiux's data scraping services helped us gather critical market insights swiftly. Their expertise in automation and data extraction is top-notch.</p>
          <p class="author">— Michael Davis</p>
        </div>
      </div>
      <div class="slide">
        <div class="card">
          <div class="stars">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
          </div>
          <p class="date-time">10/09/2023</p>
          <p class="description">Pixiux's web design team created a stunning digital presence for our brand. Their creativity and attention to detail truly set them apart.</p>
          <p class="author">— Sarah Thompson</p>
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
          <p class="date-time">05/04/2023</p>
          <p class="description">Choosing Pixiux for our e-commerce web development was a game-changer. They made the process smooth and delivered a platform that exceeded our expectations.</p>
          <p class="author">— David Wilson</p>
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
          <p class="date-time">19/11/2023</p>
          <p class="description">Pixiux's personalized HubSpot consulting helped us optimize our CRM effectively. Their insights and strategies were invaluable.</p>
          <p class="author">— Olivia Brown</p>
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
          <p class="date-time">11/05/2024</p>
          <p class="description">We are thrilled with Pixiux's mobile app development services. They delivered a robust solution that has significantly enhanced our customer engagement.</p>
          <p class="author">— Christopher Anderson</p>
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
          <p class="date-time">25/02/2024</p>
          <p class="description">Pixiux's expertise in custom software development is unparalleled. They delivered a solution that perfectly aligned with our business needs and exceeded our expectations.</p>
          <p class="author">— Rachel Miller</p>
        </div>
      </div>
      <div class="slide">
        <div class="card">
          <div class="stars">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
          </div>
          <p class="date-time">08/07/2023</p>
          <p class="description">We engaged Pixiux for our web scraping project, and their efficiency and accuracy were impressive. They provided valuable insights that helped us make informed decisions.</p>
          <p class="author">— Thomas Scott</p>
        </div>
      </div>
      <div class="slide">
        <div class="card">
          <div class="stars">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
          </div>
          <p class="date-time">30/01/2024</p>
          <p class="description">Choosing Pixiux for our e-commerce web development was a wise decision. They delivered a user-friendly platform that has significantly boosted our online sales.</p>
          <p class="author">— Jessica Clark</p>
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
          <p class="date-time">17/03/2024</p>
          <p class="description">Pixiux's HubSpot consulting services were instrumental in streamlining our marketing efforts. They provided practical solutions that enhanced our overall efficiency.</p>
          <p class="author">— Daniel Roberts</p>
        </div>
      </div>
      <div class="slide">
        <div class="card">
          <div class="stars">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
          </div>
          <p class="date-time">22/08/2023</p>
          <p class="description">Pixiux's mobile app development team delivered exactly what we needed. They were responsive, creative, and produced a high-quality app that our users love.</p>
          <p class="author">— Emma Wilson</p>
        </div>
      </div>
      <div class="slide">
        <div class="card">
          <div class="stars">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
            <img class="star" src="sources/icons/stars.svg" alt="">
          </div>
          <p class="date-time">14/06/2023</p>
          <p class="description">Working with Pixiux on our custom web development project was a pleasure. They understood our vision and delivered a website that perfectly represents our brand.</p>
          <p class="author">— Benjamin Taylor</p>
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
          <p class="date-time">03/10/2023</p>
          <p class="description">Pixiux's expertise in optimizing HubSpot has been invaluable to our business. They helped us maximize our CRM's potential and improve our overall sales efficiency.</p>
          <p class="author">— Sophia King</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
