<template>
  <div id="pneus">
    <TitleWrapper string="PNEUS" color1="#f2c60f" color2="#2d2d2d" />
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
          <img src="../assets/images/logos/logo-continental.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../assets/images/tires/pneu-continental.png" class="tire" />
        </div>
        <h4>SUPERELÁSTICO PREMIUM</h4>
      </div>
      <div class="column">
        <div class="logoContainer">
          <img src="../assets/images/logos/logo-haulmax.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../assets/images/tires/pneu-haulmax.png" class="tire" />
        </div>
        <h4>DIAGONAL INDUSTRIAL</h4>
      </div>
      <div class="column">
        <div class="logoContainer">
          <img src="../assets/images/logos/logo-barum.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../assets/images/tires/pneu-barum.png" class="tire" />
        </div>
        <h4>SUPERELÁSTICO INTERMEDIÁRIO</h4>
      </div>
      <div class="column">
        <div class="logoContainer">
          <img src="../assets/images/logos/logo-gripmaster.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../assets/images/tires/pneu-gripmaster.png" class="tire" />
        </div>
        <h4>DIAGONAL</h4>
      </div>
      <div class="column">
        <div class="logoContainer">
          <img src="../assets/images/logos/logo-unisol.png" class="logo" />
        </div>
        <div class="tireContainer">
        <img src="../assets/images/tires/pneu-topflex.png" class="tire" />
        </div>
        <h4>MACIÇO</h4>
      </div>
    </div>
    <svg
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
import TitleWrapper from './TitleWrapper.vue';

export default {
  components: {
    TitleWrapper,
  },
};
</script>

<style scoped>
#pneus {
  position: relative;
  width: 100%;
}

.paragraphContainer {
  position: absolute;
  top: 6rem;
  right: 10rem;
  font-family: "SourceSans";
  font-size: 1.25rem;
  line-height: 1.5rem;
  color: var(--color-background);
  font-weight: 500;

  width: 55%;
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

  height: 34rem;
  margin: 5rem 2rem;
  justify-content: flex-start;
  align-items: center;
}

.logoContainer {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 10rem;
  height: 10rem;
}

.logo {
  width: 10rem;
}

.tireContainer {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 10rem;
  height: 20rem;
}

.tire {
  height: 15rem;
}

h4 {
  font-family: BebasNeue;
  font-size: 2rem;
  line-height: 2rem;
  color: var(--color-background);
  text-align: center;
  
  max-width: 10rem;
}

svg {
  position: absolute;
  background-color: #fff;
  width: 100%;
  height: 60rem;
  top: 0;
  z-index: -1;
}
</style>