<template>
  <div id="parts">
    <TitleWrapper string="PEÇAS" fontColor="#ffffff" backColor="#626262" shadeColor="#f2c60f" />
    <div class="paragraphContainer">
      <p>
        Trabalhamos com peças de Qualidade <span class="yellow">OEM
        (Original Equipament Manufacturer)</span>. Desta forma, temos
        a segurança de garantir os materiais por nos fornecidos quanto
        a sua procedência e aplicação.
      </p>
      <p>
        Identificamos nossas peças com sua descrição Original e através
        de códigos de barras para facilitar a rastreabilidade dos itens.
        Possuímos Catálogos dos Equipamentos e Programa para conversão das
        peças de Empilhadeiras e Veículos Industriais através de seu Modelo
        e Número de série.
      </p>
    </div>
    <div class="section">
      <StylizedFrame class="upper" image="parts1" />
      <StylizedFrame class="lower" image="parts2" />
      <StylizedFrameAlt class="middle" image="parts3" />
    </div>
    <svg
      class="svgPageParts"
      preserveAspectRatio=none
      viewBox="0 0 100 100"
      style="transition: none 0s ease 0s;"
    >
      <path
        d="
          M 40,100
          L 100,0 100,100
          z
        "
        style="transition: none 0s ease 0s;
        fill: #f2c60f;"
      ></path>
    </svg>
  </div>
</template>

<script>
import TitleWrapper from '../TitleWrapper.vue';
import StylizedFrame from '../StylizedFrame.vue';
import StylizedFrameAlt from '../StylizedFrameAlt.vue';

export default {
  components: {
    TitleWrapper,
    StylizedFrame,
    StylizedFrameAlt,
  },
};
</script>

<style scoped>
@media screen and (width < 999px) {
  #parts {
    height: 30rem;
  }

  .paragraphContainer {
    position: relative;
    font-size: 0.7rem; /* 0.8rem -> 1.25rem */
    line-height: 0.9rem; /* 1.25 -> 1.5rem */

    width: 17rem;
    margin: 2rem 1rem;

    text-align: justify;
  }
  
  .section {
    height: 10rem;
    width: 18rem;
    margin-left: 1rem;
  }
  .svgPageParts {
    height: 3rem;
  }
}

@media screen and (width > 1000px) {
  #parts {
    height: clamp(45rem, 39.57rem + 8.7vw, 50rem); /* 45rem -> 50rem */
  }

  .paragraphContainer {
    position: absolute;
    top: 6rem;
    right: clamp(4rem, 1.83rem + 3.5vw, 6rem); /* 4rem -> 6rem */
    font-size: clamp(0.9rem, 0.52rem + 0.6vw, 1.25rem); /* 0.9rem -> 1.25rem */
    line-height: clamp(1.25rem, 0.98rem + 0.4vw, 1.5rem); /* 1.25 -> 1.5rem */

    width: clamp(30rem, 8.26rem + 34.8vw, 50rem); /* 30rem -> 50rem */
  }
  
  .section {
    top: 23rem;
    height: 15rem;
    margin-left: 10rem;
  }
  .svgPageParts {
    height: 8rem;
  }
}

#parts {
  position: relative;
  background-image: linear-gradient(
        to right,
        rgba(45, 45, 45, 0.9) 40%,
        rgba(45, 45, 45, 0.9)
      ),
      url("../../assets/images/bg-parts.png"); 
  background-size: cover;
}

.paragraphContainer {
  font-family: "SourceSans";
  color: #fff;
}

.yellow {
  color: #f2c60f;
}

.section {
  position: absolute;
  display: flex;
  flex-flow: row nowrap;
  align-items: center;
  justify-content: flex-start;
}

.upper {
  align-self: flex-start;
}

.lower {
  align-self: flex-end;
}

.svgPageParts {
  width: 100vw;
  position: absolute;
  bottom: 0;
}
</style>