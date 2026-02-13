<template>
  <div id="services">
    <TitleWrapper string="SERVIÇOS" fontColor="#fff" backColor="#2d2d2d" shadeColor="#2d2d2d" />
    <div class="section">
      <div class="row">
        <div class="paragraphContainer">
          <h5 class="paragraphTitle">
            PRENSAGEM DE PNEUS MACIÇOS.
          </h5><br>
          <p class="paragraph">
            Temos prensas hidráulicas para montagem e desmontagem dos
            pneus maciços até 20”. Nossa equipe técnica tem treinamento
            especializado para garantir a qualidade dos serviços prestados.
          </p><br>
        </div>
        <div class="imageContainer">
          <img src="../../assets/images/services/services1.jpeg" />
        </div>
      </div>
      <div class="row">
        <div class="paragraphContainer">
          <h5 class="paragraphTitle">
            MONTAGEM DE RODAS A BASE DE TROCA.
          </h5><br>
          <p class="paragraph">
            Entregamos seus pneus prensados, efetuamos a desmontagem
            e montagem dos pneus maciços na sua empilhadeira, reduzindo o
            tempo de máquina parada, aumentando assim sua disponibilidade
            operacional.
          </p>
        </div>
        <div class="imageContainer">
          <img src="../../assets/images/services/services2.png" />
        </div><br>
      </div>
      <div class="row">
        <div class="paragraphContainer">
          <h5 class="paragraphTitle">
            SERVIÇOS DE MANUTENÇÃO PREVENTIVA E CORRETIVA.
          </h5><br>
          <p class="paragraph">
            Serviços para Empilhadeiras elétricas, GLP, à Combustão e Veículos
            Industriais (Rebocadores, Plataforma, Tratores e mais).
          </p><br>

          <p class="paragraph">
            Manutenção Geral, Elétrica, Eletrônica, Hidráulica, Pintura,
            Retificas, Usinagem, desenvolvimento e aprimoramento técnico.
          </p><br>
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
  background-color: #ffffff; /* ou a cor que quiser */
  padding: clamp(4rem, 6vw, 8rem) 1.5rem;
}
/* =========================
   ROW (MOBILE FIRST)
========================= */

.row {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 2rem;
  margin-bottom: clamp(4rem, 8vw, 6rem);
}

/* Container texto */
.paragraphContainer {
  max-width: 700px;
}

/* Controle de título */
.paragraphTitle {
  margin-bottom: 1rem;
}

/* Controle de parágrafo */
.paragraph {
  margin-bottom: 1rem;
}

/* =========================
   IMAGEM
========================= */

.imageContainer {
  width: 100%;
  max-width: 28rem; /* MOBILE */
  aspect-ratio: 1 / 1;
  position: relative;
  border-radius: 1.5rem;
}

/* imagem */
.imageContainer img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 1.5rem;
  display: block;
  position: relative;

  z-index: 2;
}

/* fundo decorativo */
.imageContainer::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, #ff3c3c, #b30000);
  border-radius: 1.5rem;
  transform: translate(-1.2rem, 1.2rem);
  z-index: 0;
}

/* Estilo da fontes */ 

.paragraphTitle {
  font-family: 'BebasNeue', sans-serif;
  text-transform: uppercase;

  font-size: clamp(2rem, 1.5rem + 2.5vw, 3.5rem);
  line-height: 1;
  letter-spacing: 0.05em;

  margin-bottom: 1rem;
  text-wrap: balance;
}

.paragraph {
  font-family: 'MontSerrat', sans-serif;
  font-size: clamp(1rem, 0.9rem + 0.4vw, 1.25rem);
  line-height: 1.7;
  
}

@media (max-width: 999px) {

  .row {
    display: flex;
    flex-direction: column;
    align-items: center;
  

    margin-bottom: clamp(3rem, 8vw, 5rem);
    
  }

  /* FORÇA ORDEM: TEXTO → IMAGEM */
  .paragraphContainer {
    order: 1;
    width: 100%;
  }

  .imageContainer {
    order: 2;
    width: 100%;
    max-width: 24rem;
  }

  .alignRight,
  .alignLeft {
    text-align: center;
  }

  .paragraphTitle {
    font-size: clamp(1.8rem, 6vw, 2.5rem);
  }

  .paragraph {
    font-size: clamp(1rem, 4vw, 1.15rem);
  }

}
/* =========================
   DESKTOP
========================= */

@media (min-width: 1000px) {

  .row {
    flex-direction: row;
    justify-content: center;
    align-items: center;
    text-align: left;
    gap: 6rem;
  }

  .paragraphContainer {
    flex: 1;
    max-width: 600px;
  }

  .imageContainer {
    flex: 1;
    max-width: 420px; /* CONTROLE REAL DA IMAGEM */
  }

  /* Inverte linhas pares */
  .row:nth-child(even) {
    flex-direction: row-reverse;
  }

}
</style>