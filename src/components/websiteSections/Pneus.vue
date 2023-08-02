<template>
  <div id="pneus">
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
      <div class="column">
        <div class="logoContainer">
          <img src="../../assets/images/logos/logo-continental.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-continental.png" class="tire" />
        </div>
        <h4>SUPERELÁSTICO PREMIUM</h4>
      </div>
      <div class="column">
        <div class="logoContainer">
          <img src="../../assets/images/logos/logo-haulmax.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-haulmax.png" class="tire" />
        </div>
        <h4>DIAGONAL INDUSTRIAL</h4>
      </div>
      <div class="column">
        <div class="logoContainer">
          <img src="../../assets/images/logos/logo-barum.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-barum.png" class="tire" />
        </div>
        <h4>SUPERELÁSTICO INTERMEDIÁRIO</h4>
      </div>
      <div class="column">
        <div class="logoContainer">
          <img src="../../assets/images/logos/logo-gripmaster.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-gripmaster.png" class="tire" />
        </div>
        <h4>DIAGONAL</h4>
      </div>
      <div class="column">
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
#pneus {
  position: relative;
  width: clamp(62.5rem, 100vw, 120rem);
}

.paragraphContainer {
  position: absolute;
  top: 6rem;
  right: clamp(4rem, 1.83rem + 3.5vw, 6rem); /* 4rem -> 6rem */
  font-family: "SourceSans";
  font-size: clamp(0.9rem, 0.52rem + 0.6vw, 1.25rem); /* 0.8rem -> 1.25rem */
  line-height: clamp(1.25rem, 0.98rem + 0.4vw, 1.5rem); /* 1.25 -> 1.5rem */
  color: var(--color-background);

  width: clamp(30rem, 8.26rem + 35vw, 50rem); /* 30rem -> 50rem */
}

.bold {
  font-weight: 700;
}

.yellow {
  color: #f2c60f;
}

.section {
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
}

.column {
  display: flex;
  flex-flow: column nowrap;

  height: clamp(30.3rem, 26.28rem + 6vw, 34rem); /* 30.3rem -> 34rem */
  margin: clamp(2rem, -1.26rem + 5vw, 5rem) clamp(1rem, -0.1rem + 1.7vw, 2rem); /* 2rem 1rem -> 5rem 2rem */
  justify-content: flex-start;
  align-items: center;
}

.logoContainer {
  display: flex;
  justify-content: center;
  align-items: center;
  width: clamp(8rem, 5.83rem + 3.5vw, 10rem); /* 8rem -> 10rem */
  height: clamp(8rem, 5.83rem + 3.5vw, 10rem); /* 8rem -> 10rem */
}

.logo {
  width: 8rem;
}

.tireContainer {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 8rem; /* 5rem -> 10rem */
  height: 16rem; /* 16rem -> 20rem */
}

.tire {
  height: 12rem; /* 12rem -> 15rem*/
}

h4 {
  font-family: BebasNeue;
  font-size: clamp(1.25rem, 0.98rem + 0.4vw, 1.5rem); /* 1.2rem -> 2rem */
  line-height: 1.5rem; /* 1.5rem -> 2rem */
  color: var(--color-background);
  text-align: center;
  
  max-width: clamp(8rem, 5.83rem + 3.5vw, 10rem); /* 8rem -> 10rem */
}

.svgPagePneus {
  position: absolute;
  background-color: #fff;
  width: clamp(62.5rem, 100vw, 120rem); /* 62.5rem -> 120rem */
  height: clamp(50rem, 39.46rem + 16.8vw, 59.7rem); /* 50rem -> 59.7rem */
  top: 0;
  z-index: -1;
}
</style>