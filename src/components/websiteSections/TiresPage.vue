<template>
  <div id="tires">
    <TitleWrapper string="PNEUS" fontColor="#ffffff" backColor="#2d2d2d" shadeColor="#f2c60f" />
    <div class="paragraphContainer">
      <p>
        A <span class="bold">HALISTER</span> é a sua solução em pneus especiais
        (<span class="yellow">super-elásticos, pneumáticos INDUSTRIAIS e press-on-band</span>)
        para empilhadeiras, rebocadores, guindastes, carretas, trailers Ro-Ro,
        tratores agrícolas, terraplanagem, mineração, implementos e diversas
        outras aplicações.
      </p>
      <p>
        Trabalhamos com distribuição, revenda e representação das principais
        marcas e fabricantes de <span class="bold">Pneus Industriais e OTR</span>:
      </p>  
      <p>
        Com isso, podemos oferecer soluções diferenciadas em pneus para aumentar
        seu desempenho com melhor custo benefício, consequentemente impactando de
        forma positiva no seu custo operacional.
      </p>
    </div>
    <div class="section">
      <div class="column flip">
        <div class="logoContainer">
          <img src="../../assets/images/logos/logo-continental.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-continental.png" class="tire" />
        </div>
        <h4>SUPERELÁSTICO PREMIUM</h4>
      </div>
      <div class="column base">
        <div class="logoContainer">
          <img src="../../assets/images/logos/logo-haulmax.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-haulmax.png" class="tire" />
        </div>
        <h4>DIAGONAL INDUSTRIAL</h4>
      </div>
      <div class="column flip">
        <div class="logoContainer">
          <img src="../../assets/images/logos/logo-barum.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-barum.png" class="tire" />
        </div>
        <h4>SUPERELÁSTICO INTERMEDIÁRIO</h4>
      </div>
      <div class="column base">
        <div class="logoContainer">
          <img src="../../assets/images/logos/logo-gripmaster.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-gripmaster.png" class="tire" />
        </div>
        <h4>DIAGONAL</h4>
      </div>
      <div class="column base">
        <div class="logoContainer">
          <img src="../../assets/images/logos/logo-unisol.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-topflex.png" class="tire" />
        </div>
        <h4>MACIÇO</h4>
      </div>
    </div>
    <svg
      class="svgPagePneus"
      preserveAspectRatio=none
      viewBox="0 0 100 100"
      style="transition: none 0s ease 0s;"
    >
      <path
          d="
            M 0,75
            L 70,50 100,25 100,100 0,100
            z
          "
          style="transition: none 0s ease 0s;
          fill: #f2c60f;"
        ></path>
        <path
          d="
            M 0,0
            L 0,75 70,50, 100,25 100,0
            z
          "
          style="transition: none 0s ease 0s;
          fill: #ffffff;"
        ></path>
    </svg>
  </div>
</template>

<script>
import TitleWrapper from '../TitleWrapper.vue';

export default {
  components: {
    TitleWrapper,
  },
};
</script>

<style scoped>
@media (width < 1000px) {
  #tires {
    scroll-margin-top: 4.5rem;
  }

  .paragraphContainer {
    position: relative;
    font-size: clamp(0.7rem, 0.37rem + 1.6vw, 1.4rem); /* 0.7rem -> 0.9rem */
    line-height: clamp(0.9rem, 0.57rem + 1.6vw, 1.6rem); /* 0.9rem -> 1.25rem  */

    width: clamp(19rem, 9.12rem + 49vw, 40rem); /* 25rem -> 40rem */
    margin-left: clamp(0rem, -5.88rem + 29vw, 12.5rem);
    margin-top: clamp(1rem, -0.88rem + 9.4vw, 5rem);

    text-align: justify;
  }

  .paragraphContainer p {
    margin: 0 clamp(1rem, 0.76rem + 1.2vw, 1.5rem); /* 0 1rem -> 0 1.5rem */
  }

  .section {
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    align-items: flex-start;
    width: clamp(19rem, 9.12rem + 49vw, 40rem); /* 25rem -> 40rem */
    margin-left: clamp(0rem, -5.88rem + 29vw, 12.5rem);
  }

  .column {
  position: relative;
  width: clamp(8rem, 3.68rem + 20vw, 16.8rem); /* 8rem -> 16.8rem */
  height: clamp(5rem, 2.41rem + 13vw, 10.5rem); /* 5rem -> 10.5rem */
  margin: 0.5rem 0;
  }

  .logoContainer {
    position: absolute;
    top: clamp(0.5rem, 0.24rem + 1.3vw, 1.05rem); /* 0.5rem -> 1.05rem */
    width: clamp(4rem, 1.93rem + 10vw, 8.4rem); /* 4rem -> 8.4rem */
    height: clamp(2rem, 0.96rem + 5vw, 4.2rem); /* 2rem -> 4.2rem */
  }

  .base .logoContainer{
    right: 0;
  }

  .flip .logoContainer {
    left: 0;
  }

  .logo {
    width: clamp(3rem, 1.44rem + 7.65vw, 6.3rem); /* 3rem -> 6.3rem */
  }

  .tireContainer {
    position: absolute;
    width: clamp(4rem, 1.93rem + 10vw, 8.4rem); /* 4rem -> 8.4rem */
    height: clamp(5rem, 2.41rem + 13vw, 10.5rem); /* 5rem -> 10.5rem */
  }

  .base .tireContainer {
    left: 0;
  }

  .flip .tireContainer {
    right: 0;
  }
  .tire {
    height: clamp(5rem, 2.41rem + 13vw, 10.5rem); /* 5rem -> 10.5rem */
  }
  
  h4 {
    text-align: center;
    position: absolute;
    bottom: clamp(0.5rem, 0.24rem + 1.3vw, 1.05rem); /* 0.5rem -> 1.05rem */
    font-size: clamp(0.7rem, 0.34rem + 1.8vw, 1.47rem); /* 0.7rem -> 1.47rem */
    line-height: clamp(0.9rem, 0.44rem + 2.3vw, 1.89rem); /* 0.9rem -> 1.89rem */
    
    width: clamp(4rem, 1.93rem + 10vw, 8.4rem); /* 4rem -> 8.4rem */
  }

  .base h4 {
    right: 0;
  }

  .flip h4 {
    left: 0;
  }
  .svgPagePneus {
    width: 100vw; /* 62.5rem -> 120rem */
    height: clamp(38rem, 22.94rem + 75vw, 70rem); /* 38rem -> 65rem */
  }
}

@media (width >= 1000px) {
  .paragraphContainer {
    position: absolute;
    top: 6rem;
    right: clamp(4rem, 1.83rem + 3.5vw, 6rem); /* 4rem -> 6rem */
    font-size: clamp(0.9rem, 0.52rem + 0.6vw, 1.25rem); /* 0.8rem -> 1.25rem */
    line-height: clamp(1.25rem, 0.98rem + 0.4vw, 1.5rem); /* 1.25 -> 1.5rem */

    width: clamp(30rem, 8.26rem + 35vw, 50rem); /* 30rem -> 50rem */
  }
  
  .section {
    display: flex;
    flex-flow: row nowrap;
    justify-content: center;
  }

  .column {
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: center;
    height: clamp(30.3rem, 26.28rem + 6vw, 34rem); /* 30.3rem -> 34rem */
    margin: clamp(2rem, -1.26rem + 5vw, 5rem) clamp(1rem, -0.1rem + 1.7vw, 2rem); /* 2rem 1rem -> 5rem 2rem */
  }

  .logoContainer {
    width: clamp(8rem, 5.83rem + 3.5vw, 10rem); /* 8rem -> 10rem */
    height: clamp(8rem, 5.83rem + 3.5vw, 10rem); /* 8rem -> 10rem */
  }

  .logo {
    width: 8rem;
  }

  .tireContainer {
    width: 8rem; /* 5rem -> 10rem */
    height: 16rem; /* 16rem -> 20rem */
  }

  .tire {
    height: 12rem; /* 12rem -> 15rem*/
  }

  h4 {
    font-size: clamp(1.25rem, 0.98rem + 0.4vw, 1.5rem); /* 1.2rem -> 2rem */
    line-height: 1.5rem; /* 1.5rem -> 2rem */
    
    max-width: clamp(8rem, 5.83rem + 3.5vw, 10rem); /* 8rem -> 10rem */
  }
  .svgPagePneus {
    width: clamp(62.5rem, 100vw, 120rem); /* 62.5rem -> 120rem */
    height: clamp(50rem, 39.46rem + 16.8vw, 59.7rem); /* 50rem -> 59.7rem */
  }
}

#tires {
  position: relative;
  width: 100vw;
}

.paragraphContainer {
  font-family: "SourceSans";
  color: var(--color-background);
}

.bold {
  font-weight: 700;
}

.yellow {
  color: #f2c60f;
}

.logoContainer {
  display: flex;
  justify-content: center;
  align-items: center;
}

.tireContainer {
  display: flex;
  justify-content: center;
  align-items: center;
}

h4 {
  font-family: BebasNeue;
  color: var(--color-background);
  text-align: center;
}

.svgPagePneus {
  position: absolute;
  background-color: #fff;
  top: 0;
  z-index: -1;
}
</style>