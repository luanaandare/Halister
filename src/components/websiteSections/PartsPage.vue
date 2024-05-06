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
      <StylizedFrame 
        image="banco"
        string1="Bancos"
      />
      <StylizedFrameAlt
        image="acessorios"
        string1="Acessórios"
        string2="de segurança"
      />
      <StylizedFrame
        image="conector"
        string1="Conectores"
      />
      <StylizedFrameAlt
        image="filtros"
        string1="Filtros"
      />
      <StylizedFrame
        image="garfo"
        string1="Garfos"
      />
      <StylizedFrameAlt
        image="manutencao_hyster"
        string1="Kits de manutenção"
        />
      <StylizedFrame
        image="redutor_glp"
        string1="Redutores GLP"
      />
      <StylizedFrameAlt
        image="roda_combustao"
        string1="Rodas"
        string2="(Empilhadeira à combustão)"
      />
      <StylizedFrame
        image="roda_eletrica"
        string1="Rodas"
        string2="(Empilhadeira elétrica)"
      />
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
  background-image: linear-gradient(
        to right,
        rgba(45, 45, 45, 0.9) 40%,
        rgba(45, 45, 45, 0.9)
      ),
      url("../../assets/images/bg-parts.png"); 
  background-size: cover;
  background-position: right;
  width: 100vw;
}

.paragraphContainer {
  font-family: "SourceSans", sans-serif;
  color: #fff;
}

.yellow {
  color: #f2c60f;
}

.section {
  position: relative;
  display: flex;
  flex-flow: row wrap;
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

@media (width < 1000px) {
  #parts {
    height: clamp(65rem, 55rem + 47vw, 85rem); /* 65rem -> 85rem */
    
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
    height: 45rem;
    width: clamp(20rem, 5.9rem + 70.6vw, 50rem); /* 18rem -> 50rem */
    margin-left: clamp(1rem, -4.88rem + 29vw, 13.5rem);
    margin-top: 2rem;
  }
  .svgPageParts {
    height: clamp(3rem, 1.58rem + 7vw, 6rem);
  }
}

@media (width >= 1000px) {
  #parts {
    height: 75rem; /* 45rem -> 50rem */
  }

  .paragraphContainer {
    position: absolute;
    text-align: justify;
    color: var(--color-text-light);
    top: 6rem;
    right: clamp(6rem, -27.6rem + 54vw, 37.2rem); /* 6rem -> 22rem */
    font-size: clamp(0.9rem, 0.52rem + 0.6vw, 1.25rem); /* 0.9rem -> 1.25rem */
    line-height: clamp(1.25rem, 0.98rem + 0.4vw, 1.5rem); /* 1.25 -> 1.5rem */

    width: clamp(30rem, 8.26rem + 34.8vw, 50rem); /* 30rem -> 50rem */
  }
  
  .section {
    top: 1rem;
    height: 50rem;
    width: clamp(50rem, 29rem + 33.6vw, 70rem);
    margin-left: clamp(10rem, -0.5rem + 16.8vw, 19.66rem); /* 10rem -> */
  }

  .svgPageParts {
    height: 8rem;
  }
}

</style>