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
@media screen and (width < 1000px) {
  #parts {
    height: clamp(30rem, 22.9rem + 35vw, 45rem); /* 30rem -> 45rem */
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
    height: 10rem;
    width: clamp(19rem, 9.12rem + 49vw, 40rem); /* 19rem -> 40rem */
    margin-left: clamp(0rem, -5.88rem + 29vw, 12.5rem);
    margin-top: 2rem;
  }
  .svgPageParts {
    height: clamp(3rem, 1.58rem + 7vw, 6rem);
  }
}

@media screen and (width >= 1000px) {
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
  background-position: right;
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