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
#parts {
  position: relative;
  height: 50rem;
  background-color: rgba(255, 255, 255, 0.1);
}

.paragraphContainer {
  position: absolute;
  top: 6rem;
  right: 10rem;
  font-family: "SourceSans";
  font-size: 1.25rem;
  line-height: 1.5rem;
  color: var(--color-heading);
  font-weight: 400;

  width: 55%;
}

.yellow {
  color: #f2c60f;
}

.section {
  position: absolute;
  top: 23rem;
  display: flex;
  flex-flow: row nowrap;
  align-items: center;
  justify-content: flex-start;
  height: 15rem;
  margin-left: 10%;
}

.upper {
  align-self: flex-start;
}

.lower {
  align-self: flex-end;
}

.svgPageParts {
  width: 100%;
  height: 8rem;
  position: absolute;
  bottom: 0;
}
</style>