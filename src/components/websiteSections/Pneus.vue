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
  width: 62.5rem;
}

.paragraphContainer {
  position: absolute;
  top: 6rem;
  right: 4rem; /* 4rem -> 6rem */
  font-family: "SourceSans";
  font-size: 0.9rem; /* 0.8rem -> 1.25rem */
  line-height: 1.25rem; /* 1.25 -> 1.5rem */
  color: var(--color-background);

  width: 30rem; /* 30rem -> 50rem */
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

  height: 30.3rem; /* 30.3rem -> 34rem */
  margin: 2rem 1rem; /* 2rem 1rem -> 5rem 2rem */
  justify-content: flex-start;
  align-items: center;
}

.logoContainer {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 8rem; /* 8rem -> 10rem */
  height: 8rem; /* 8rem -> 10rem */
}

.logo {
  width: 8rem;
}

.tireContainer {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 8rem; /* 5rem -> 10rem */
  height: 16rem; /* 10rem -> 20rem */
}

.tire {
  height: 12rem; /* 7.5rem -> 15rem*/
}

h4 {
  font-family: BebasNeue;
  font-size: 1.2rem; /* 1.2rem -> 2rem */
  line-height: 1.5rem; /* 1.5rem -> 2rem */
  color: var(--color-background);
  text-align: center;
  
  max-width: 8rem; /* 8rem -> 10rem */
}

.svgPagePneus {
  position: absolute;
  background-color: #fff;
  width: 62.5rem; /* 62.5rem -> 120rem */
  height: 50rem; /* 50rem -> 59.7rem */
  top: 0;
  z-index: -1;
}
</style>