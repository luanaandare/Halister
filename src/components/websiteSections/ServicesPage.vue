<template>
  <div id="services">
    <TitleWrapper string="SERVIÇOS" fontColor="#000000" backColor="#ffffff" shadeColor="#d49a0e" />
    <div class="section">
      <div class="row">
        <div class="paragraphContainer alignRight">
          <h5 class="paragraphTitle">
            PRENSAGEM DE PNEUS MACIÇOS.
          </h5>
          <p class="paragraph">
            Temos prensas hidráulicas para montagem e desmontagem dos
            pneus maciços até 20”. Nossa equipe técnica tem treinamento
            especializado para garantir a qualidade dos serviços prestados.
          </p>
        </div>
        <div class="imageContainer">
          <img src="../../assets/images/services/services1.jpeg" />
        </div>
      </div>
      <div class="row">
        <div class="imageContainer">
          <img src="../../assets/images/services/services2.jpeg" />
        </div>
        <div class="paragraphContainer alignLeft">
          <h5 class="paragraphTitle">
            MONTAGEM DE RODAS PARA PNEUS MACIÇOS A BASE DE TROCA.
          </h5>
          <p class="paragraph">
            Entregamos seus pneus prensados e efetuamos a desmontagem
            e montagem dos pneus maciços na sua empilhadeira, reduzindo o
            tempo de máquina parada, aumentando assim sua disponibilidade
            operacional.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="paragraphContainer alignRight">
          <h5 class="paragraphTitle">
            SERVIÇOS PROGRAMADOS DE MANUTENÇÃO PREVENTIVA E CORRETIVA.
          </h5>
          <p class="paragraph">
            Empilhadeiras a Combustão, Empilhadeiras Elétricas e Veículos
            Industriais (Rebocadores, Plataforma, Tratores, Equipamentos de
            Construção Civil e Mineração).
          </p>
          <p class="paragraph">
            Manutenção Geral, Elétrica, Eletrônica, Hidráulica, Pintura,
            Retificas, Usinagem, desenvolvimento e aprimoramento Técnico.
          </p>
        </div>
        <div class="imageContainer">
          <img src="../../assets/images/services/services3.jpg" />
        </div>
      </div>
    </div>
    <svg
      class="svgPageServices"
      preserveAspectRatio=none
      viewBox="0 0 100 100"
      style="transition: none 0s ease 0s;"
    >
      <path
        d="
          M 0,50
          L 100,85 100,100 0,100
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
  #services {
    scroll-margin-top: 4.5rem;
  }

  .paragraphContainer {
    width: clamp(10rem, 0.59rem + 47vw, 30rem); /* 10rem -> 30rem */
    height: clamp(8rem, 7.06rem + 4.7vw, 10rem); /* 8rem -> 10rem */
  }
  
  .paragraphTitle {
    font-size: clamp(0.8rem, 0.59rem + 1.1vw, 1.25rem); /* 0.8rem -> 1.25rem */
  }

  .paragraph {
    font-size: clamp(0.5rem, 0.36rem + 0.7vw, 0.8rem); /* 0.5rem -> 0.8rem */
  }

  
  .imageContainer {
    margin: 0 clamp(0.5rem, -0.21rem + 3.5vw, 2rem); /* 0 0.5rem -> 0 2rem */
    height: clamp(8rem, 7.06rem + 4.7vw, 10rem); /* 8rem -> 10rem */
  }
  
  .imageContainer img {
    width: auto;
    height: clamp(5rem, 3.12rem + 9.4vw, 9rem); /* 5rem -> 9rem */
  }

  .svgPageServices   {
    width: 100vw;
    height: clamp(35rem, 25.59rem + 47vw, 55rem); /* 35rem -> 55rem */
  }
}

@media (width >= 1000px) {

  .section {
    margin-left: clamp(3rem, -0,26rem + 5.2vw, 6rem); /* 3rem -> 6rem */
  }

  .paragraphContainer {
    width: clamp(30rem, 8.26rem + 34.8vw, 50rem); /* 30rem -> 50rem */
    height: clamp(10rem, 4.57rem + 8.7vw, 15rem); /* 10rem -> 15rem */
  }
  .paragraphTitle {
    font-size: clamp(1.25rem, 0.98rem + 0.4vw, 1.5rem); /* 1.2rem -> 1.5rem */
  }

  .paragraph {
    font-size: clamp(0.8rem, 0.58rem + 0.3vw, 1rem); /* 0.8rem -> 1rem */
  }

  
  .imageContainer {
    margin: 0 clamp(2rem, -1.26rem + 5.2vw, 5rem); /* 0 2rem -> 0 5rem */
    height: clamp(10rem, 4.57rem + 8.7vw, 15rem); /* 10rem -> 15rem */
  }
  
  .imageContainer img {
    width: auto;
    height: clamp(9rem, 5.2rem + 6vw, 12.5rem); /* 9rem -> 12.5rem */
  }

  .svgPageServices   {
    width: 100vw;
    height: clamp(55rem, 38.70rem + 26vw, 70rem); /* 55rem -> 70rem */
  }
}

#services {
  position: relative;
}

.section {
  display: flex;
  flex-flow: column nowrap;
  align-items: center;
  justify-content: center;
  width: 100vw;
}

.row {
  display: flex;
  flex-flow: row nowrap;
  margin: 1rem;
  position: relative;
}

.paragraphContainer {
  display: flex;
  flex-flow: column nowrap;
  justify-content: space-evenly;
  color: var(--color-background);
}

.alignRight {
  text-align: end;
}

.alignLeft {
  text-align: start;
}

.paragraphTitle {
  font-family: BebasNeue;
}

.paragraph {
  font-family: SourceSans;
}

.imageContainer {
  display: flex;
  flex-flow: column nowrap;
  justify-content: center;
}

.svgPageServices   {
  position: absolute;
  top: 0;
  z-index: -1;

  background-color: #f2c60f;
}
</style>