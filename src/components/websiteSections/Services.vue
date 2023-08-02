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
#services {
  position: relative;
}

.section {
  display: flex;
  flex-flow: column nowrap;
  align-items: center;
  justify-content: center;
  width: 55rem;
  margin-left: 3rem; /* 3rem -> 6rem */
}

.row {
  display: flex;
  flex-flow: row nowrap;
  margin: 1rem;
}

.paragraphContainer {
  display: flex;
  flex-flow: column nowrap;
  justify-content: space-evenly;
  width: 30rem; /* 30rem -> 50rem */
  height: 10rem; /* 10rem -> 15rem */
  color: var(--color-background);
}

.alignRight {
  text-align: end;
}

.alignLeft {
  text-align: start;
}

.paragraphTitle {
  font-size: 1.2rem; /* 1.2rem -> 1.5rem */
  font-family: BebasNeue;
}

.paragraph {
  font-size: 0.8rem; /* 0.8rem -> 1rem */
  font-family: SourceSans;
}

.imageContainer {
  margin: 0 2rem; /* 0 2rem -> 0 5rem */
  height: 10rem; /* 10rem -> 15rem */
  display: flex;
  flex-flow: column nowrap;
  justify-content: center;
}

.imageContainer img {
  width: auto;
  height: 9rem; /* 9rem -> 12.5rem */
}

.svgPageServices   {
  position: absolute;
  top: 0;
  z-index: -1;
  width: 62.5rem;
  height: 55rem; /* 55rem -> 70rem */

  background-color: #f2c60f;
}
</style>