<template>
  <div id="services">
    <TitleWrapper string="SERVIÇOS" fontColor="#fff" backColor="#2d2d2d" shadeColor="#2d2d2d" />
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
          <img src="../../assets/images/services/services2.png" />
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
          <img src="../../assets/images/services/services3.jpeg" />
        </div>
      </div>
    </div>
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
  background-color: #fff;
  width: 100vw;
}

 .section {
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    align-items: center;

    width: 100%;
    max-width: 1200px;
    margin: 2rem auto 0 auto;
    padding: 0 2rem;
  }

.alignRight {
  text-align: end;
}

.alignLeft {
  text-align: start;
}

.paragraphTitle {
  font-family: BebasNeue, sans-serif;
  text-transform: uppercase;
  font-size: clamp(1.8rem, 1.2rem + 2vw, 3rem);
  line-height: 1.1;
  letter-spacing: 0.05em;
}

.paragraph {
  font-family: MontSerrat, sans-serif;
  font-size: clamp(0.95rem, 0.85rem + 0.4vw, 1.2rem);
  line-height: 1.6;
  max-width: 60ch;
}

.row {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2rem;
}

.imageContainer {
  position: relative;
  width: 100%;
  max-width: 32rem;
  aspect-ratio: 1 / 1;
  border-radius: 1.5rem;
  
  z-index: 2;
}

.imageContainer::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, #ff3c3c, #b30000);
  border-radius: 1.5rem;
  top: 1.2rem;
  left: -1.2rem;
  z-index: -1;
}

.svgPageServices   {
  position: absolute;
  top: 0;
  z-index: -1;
  
  background-color: var(--havi-theme-red);
}

@media (width < 1000px) {
  #services {
    scroll-margin-top: 4.5rem;
  }

 .row {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2rem;
}

.imageContainer {
  width: clamp(16rem, 70vw, 24rem);
  aspect-ratio: 1 / 1;
}

.imageContainer img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 1.5rem;  /* 👈 AQUI */
  display: block;
  position: relative;
  z-index: 2;
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
  
   .row {
    display: grid;
    grid-template-columns: 1.2fr 1fr; /* texto um pouco maior */
    align-items: center;
    gap: 4rem;

    max-width: 1200px;
    margin: 6rem auto 0 auto;
  }

.imageContainer img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 1.5rem;  /* 👈 AQUI */
  display: block;
  position: relative;
  z-index: 2;
}


}
  .svgPageServices   {
    width: 100vw;
    height: clamp(55rem, 38.70rem + 26vw, 70rem); /* 55rem -> 70rem */
  }

</style>