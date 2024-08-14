<template>
  <div id="tires">
    <TitleWrapper string="PNEUS" fontColor="#ffffff" backColor="#2d2d2d" shadeColor="#bc0000" />
    <div class="paragraphContainer">
      <p>
        A <span class="bold">HAVI</span> é a sua solução em pneus especiais
        (<span class="red">super-elásticos, pneumáticos INDUSTRIAIS e press-on-band</span>)
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
      <a class="column flip" href="/catalogo-ultimatext.pdf" target="_blank">
        <div class="tireContainer catalog">
          <img src="../../assets/images/tires/pneu-ultimatext.png" class="tire" />
        </div>
        <h4>catálogo</h4>
        <h4>ULTIMATE XT</h4>
        <font-awesome-icon class="faIcon" :icon="['fas', 'file-arrow-down']" />
      </a>
      <a class="column base" href="/catalogo-peakmaster.pdf" target="_blank">
        <div class="tireContainer">
          <img src="../../assets/images/tires/pneu-peakmaster.png" class="tire" />
        </div>
        <h4>catálogo</h4>
        <h4>PEAKMASTER</h4>
        <font-awesome-icon class="faIcon" :icon="['fas', 'file-arrow-down']" />
      </a>
      <a class="column flip" href="/catalogo-globestarwt.pdf" target="_blank">
        <div class="tireContainer">
          <img src="../../assets/images/tires/pneu-globestar.png" class="tire" />
        </div>
        <h4>catálogo</h4>
        <h4>GLOBESTAR WT</h4>
        <font-awesome-icon class="faIcon" :icon="['fas', 'file-arrow-down']" />
      </a>
      <a class="column base" href="/catalogo-ultimategreenxt.pdf" target="_blank">
        <div class="tireContainer">
          <img src="../../assets/images/tires/pneu-ultimategreen.png" class="tire" />
        </div>
        <h4>catálogo</h4>
        <h4>ULTIMATE GREEN XT</h4>
        <font-awesome-icon class="faIcon" :icon="['fas', 'file-arrow-down']" />
      </a>
      <a class="column flip" href="/catalogo-liftex.pdf" target="_blank">
        <div class="tireContainer">
          <img src="../../assets/images/tires/pneu-lift-ex.png" class="tire" />
        </div>
        <h4>catálogo</h4>
        <h4>LIFT EX</h4>
        <font-awesome-icon class="faIcon" :icon="['fas', 'file-arrow-down']" />
      </a>
    </div>
    <!--
    <div class="section">
      <a class="column flip" href="/catalog-ultimatext.pdf" target="_blank">
        <h4 class="call">Clique para conferir o nosso catálogo</h4>
        <div class="tireContainer catalog">
        <img src="../../assets/images/tires/pneu-gri.png" class="tire" />
        </div>
        <h4>SUPERELÁSTICO PREMIUM</h4>
      </a>
      <div class="column base">
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-haulmax.png" class="tire" />
        </div>
        <h4>DIAGONAL INDUSTRIAL</h4>
      </div>
      <div class="column flip">
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-barum.png" class="tire" />
        </div>
        <h4>SUPERELÁSTICO INTERMEDIÁRIO</h4>
      </div>
      <div class="column base">
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-gripmaster.png" class="tire" />
        </div>
        <h4>DIAGONAL</h4>
      </div>
      <div class="column base">
        <div class="tireContainer">
        <img src="../../assets/images/tires/pneu-topflex.png" class="tire" />
        </div>
        <h4>MACIÇO</h4>
      </div>
    </div>-->
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
a {
  text-decoration: none;
}

.faIcon {
  color: #2d2d2d;
}

#tires {
  position: relative;
  background-color: #fff;
  width: 100vw;
}

.paragraphContainer {
  font-family: "MontSerrat", sans-serif;
  color: var(--color-background);
}

.bold {
  font-weight: 700;
}

.red {
  color: #bc0000;
}

.tireContainer {
  display: flex;
  justify-content: center;
  align-items: center;
}

.catalog {
  cursor: pointer;
}

.call{
  position: absolute;
  top: 22.5%;
  transform: translate(0, -22.5%);
  opacity: 0;
  transition: 0.2s;
  color: var(--havi-theme-darkred);
}

h4 {
  font-family: BebasNeue, sans-serif;
  text-transform: uppercase;
  color: #2d2d2d;
  text-align: center;
}

.svgPagePneus {
  position: absolute;
  background-color: #fff;
  top: 0;
  z-index: -1;
}

@media (width < 1000px) {
  #tires {
    scroll-margin-top: 4.5rem;
  }

  .paragraphContainer {
    position: relative;
    font-size: clamp(0.7rem, 0.37rem + 1.6vw, 1.4rem); /* 0.7rem -> 0.9rem */
    line-height: clamp(0.9rem, 0.57rem + 1.6vw, 1.6rem); /* 0.9rem -> 1.25rem  */

    width: clamp(19rem, 9.12rem + 49vw, 40rem); /* 25rem -> 40rem */
    margin-left: clamp(1rem, -4.88rem + 29vw, 13.5rem);
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
    align-items: center;
    width: clamp(19rem, 9.12rem + 49vw, 40rem); /* 25rem -> 40rem */
    margin-left: clamp(1rem, -4.88rem + 29vw, 13.5rem);
  }

  .column {
  position: relative;
  display: flex;
  flex-flow: column wrap;
  align-items: center;
  width: clamp(8rem, 3.68rem + 20vw, 16.8rem); /* 8rem -> 16.8rem */
  margin: 0.5rem 0;
  }

  .logo {
    width: clamp(3rem, 1.44rem + 7.65vw, 6.3rem); /* 3rem -> 6.3rem */
  }

  .tireContainer {
    position: relative;
    height: clamp(5rem, 2.41rem + 13vw, 10.5rem); /* 5rem -> 10.5rem */
  }

  .tire {
    height: clamp(5rem, 2.41rem + 13vw, 10.5rem); /* 5rem -> 10.5rem */
  }

  .tireContainer img {
    position: relative;
  }
  
  h4 {
    text-align: center;
    font-size: clamp(0.7rem, 0.34rem + 1.8vw, 1.47rem); /* 0.7rem -> 1.47rem */
    line-height: clamp(0.9rem, 0.44rem + 2.3vw, 1.89rem); /* 0.9rem -> 1.89rem */
    
    width: clamp(5rem, 2.93rem + 10vw, 9.4rem); /* 4rem -> 8.4rem */
  }

  .svgPagePneus {
    width: 100vw; /* 62.5rem -> 120rem */
    height: clamp(38rem, 22.94rem + 75vw, 70rem); /* 38rem -> 65rem */
  }
}

@media (width >= 1000px) {
  .paragraphContainer {
    position: absolute;
    text-align: justify;
    color: var(--color-text-dark);
    top: 6rem;
    right: clamp(6rem, -27.6rem + 54vw, 37.2rem); /* 6rem -> 22rem */
    font-size: clamp(0.9rem, 0.52rem + 0.6vw, 1.25rem); /* 0.9rem -> 1.25rem */
    line-height: clamp(1.25rem, 0.98rem + 0.4vw, 1.5rem); /* 1.25 -> 1.5rem */

    width: clamp(30rem, 8.26rem + 34.8vw, 50rem); /* 30rem -> 50rem */
  }
  
  .section {
    display: flex;
    flex-flow: row nowrap;
    justify-content: center;
  }

  .column {
    position: relative;
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    align-items: center;
    text-decoration: none;
    transition: 0.2s;
    height: clamp(30.3rem, 26.28rem + 6vw, 34rem); /* 30.3rem -> 34rem */
    margin: clamp(2rem, -1.26rem + 5vw, 5rem) clamp(1rem, -0.1rem + 1.7vw, 2rem); /* 2rem 1rem -> 5rem 2rem */
  }

  .logo {
    width: 8rem;
  }

  .tireContainer {
    width: 10rem; /* 5rem -> 10rem */
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
    width: 100vw;
    height: clamp(50rem, 39.46rem + 16.8vw, 59.7rem); /* 50rem -> 59.7rem */
  }
}

</style>