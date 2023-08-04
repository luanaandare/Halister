<template>
  <div id="we">
    <TitleWrapper string="QUEM SOMOS" fontColor="#ffffff" backColor="#626262" shadeColor="#F2C60F" />
    <div class="section">
      <div class="biColumn">
        <h4>A empresa</h4>
        <p>
          Nossa empresa foi fundada em 2004 por profissionais com larga
          experiencia no seguimento de Veículos Industriais, e já atua há
          {{currentDate() - 2004 }} anos no mercado, inicialmente no
          seguimento de Locação de Empilhadeiras e Veículos Especiais,
          mais devido as necessidades dos clientes fechamos parcerias e
          direcionamos nossa linha principal para o mercado de distribuição
          e reposição das principais marcas de Pneus, Peças e Serviços
          para Empilhadeiras e Veículos Industriais.
        </p>
        <p>
          Possuímos Equipe de Vendas especializada para atendimento diferenciado
          e atualizados com as principais plataformas B2B Business-to-Business.
        </p>
      </div>
      <div class="biColumn">
        <h4>Frota própria</h4>
        <div class="imageDisplay">
          <img class="front" src="../../assets/images/frota/frota1.jpeg" />
          <img class="mid" src="../../assets/images/frota/frota2.jpeg" />
          <img class="rear" src="../../assets/images/frota/frota3.jpeg" />
        </div>
      </div>
    </div>
    <div class="section">
      <div class="triColumn">
        <img src="../../assets/images/icons/mission.svg">
        <h4>Missão</h4>
        <div class="textContainer">
          <p>
            Oferecer aos nossos clientes um atendimento Humanizado
            e de qualidade, e oferecer a solução completa em
            movimentação de cargas, de forma eficiente e dinâmica.
          </p>
        </div>
      </div>
      <div class="triColumn">
        <img src="../../assets/images/icons/vision.svg">
        <h4>Visão</h4>
        <div class="textContainer">
          <p>
            Ser referência no mercado de Empilhadeiras e
            Veículos industriais, visando sempre a satisfação
            de nossos clientes e parceiros. Obter um crescimento
            rentável por meio de inovação, qualidade e compromisso
            superior.
          </p>
        </div>
      </div>
      <div class="triColumn">
        <img src="../../assets/images/icons/values.svg">
        <h4>Valores</h4>
        <div class="textContainer">
          <span>
            Os valores essenciais da Halister nos orientam
            sobre como nos comportarmos, pessoal e
            profissionalmente.
          </span>
          <p>
            No mundo em constante mudança,
            nossos valores essenciais são sólidos. Nossos
            valores fundamentam em nosso trabalho, a forma como
            interagimos uns com os outros e quais estratégias
            empregamos para cumprir a nossa missão. Nossos valores
            ssenciais são as práticas que usamos diariamente em 
            tudo o que fazemos.
          </p>
        </div>
      </div>
    </div>
    <svg
      class="svgPageWe"
      preserveAspectRatio=none
      viewBox="0 0 100 100"
      style="transition: none 0s ease 0s;"
    >
      <path
          d="
            M 0,0
            L 0,14.16 6.21,100 100,100 100,88.5 6.59,88.5
            z
          "
          style="transition: none 0s ease 0s;
          fill: rgb(242, 198, 15);"
        ></path>
        <path
          d="
            M 0,14.16
            L 6.21,100 0,100
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
  methods: {
    currentDate() {
      const current = new Date();
      const date = `${current.getFullYear()}`;
      return date;
    }
  }
};
</script>

<style scoped>
#we {
  position: relative;
}

.section {
  display: flex;
  justify-content: center;
}

.biColumn h4,
.triColumn h4 {
  font-family: BebasNeue;
  color: var(--color-text-light);

  cursor: default;
}

.biColumn p {
  font-family: "SourceSans", sans-serif;
  color: var(--color-text-light);
}

.triColumn {
  display: flex;
  flex-flow: column nowrap;
  align-items: center;
}

.textContainer {
  display: flex;
  flex-flow: column nowrap;
  align-items: center;
  justify-content: center;
}

.textContainer p,
.textContainer span {
  font-family: "SourceSans", sans-serif;
  color: var(--color-text-light);
}

.textContainer span {
  font-weight: 700;
}

.svgPageWe {
  position: absolute;
  bottom: 0;
  width: 100vw;
}

@media (width < 1000px) {
  #we {
    scroll-margin-top: 4.5rem;
  }
  
  .section {
    margin-top: clamp(1rem, -0.88rem + 9.4vw, 5rem);
    position: relative;
    flex-flow: column nowrap;
  }

  .biColumn,
  .triColumn {
    width: clamp(19rem, 9.12rem + 49vw, 40rem); /* 25rem -> 40rem */
    margin-left: clamp(0rem, -5.88rem + 29vw, 12.5rem);
  }
  
  .biColumn h4,
  .triColumn h4 {
    font-size: clamp(1rem, 0.53rem + 2.3vw, 2rem); /* 1rem -> 2rem */
    margin: 0 clamp(1rem, 0.76rem + 1.2vw, 1.5rem); /* 0 1rem -> 0 1.5rem */
  }

  .biColumn p {
    text-align: justify;
    font-size: clamp(0.7rem, 0.37rem + 1.6vw, 1.4rem); /* 0.7rem -> 0.9rem */

    line-height: clamp(0.9rem, 0.57rem + 1.6vw, 1.6rem); /* 0.9rem -> 1.25rem  */
    margin: 0 clamp(1rem, 0.76rem + 1.2vw, 1.5rem); /* 0 1rem -> 0 1.5rem */
    margin-bottom: clamp(0.5rem, 0.3rem + 2.4vw, 1.5rem); /* 0.5rem -> 1.5rem */
  }
  
  .textContainer {
    margin: 2rem;
  }

  .textContainer p,
  .textContainer span {
    font-size: clamp(0.7rem, 0.37rem + 1.6vw, 1.4rem); /* 0.7rem -> 0.9rem */

    line-height: clamp(0.9rem, 0.57rem + 1.6vw, 1.6rem); /* 0.9rem -> 1.25rem  */
    text-align: justify;
  }

  .triColumn img {
    height: clamp(3rem, 1.59rem + 7vw, 6rem); /* 4rem -> 6rem */
    margin: clamp(1.5rem, -0.13rem + 2.6vw, 3rem); /* 1.5rem -> 3rem */
  }
  
  .imageDisplay {
    display: flex;
    flex-flow: row nowrap;
    position: relative;
    width: 18rem;
    margin: 1rem;
  }

  .imageDisplay img {
    width: 5rem;
    margin: 0.2rem;
    height: auto;
  }

  .svgPageWe {
    height: clamp(4rem, 2.12rem + 9.4vw, 8rem); /* 8rem -> 11rem */
  }
}

@media (width >= 1000px) {
  .section {
    flex-flow: row nowrap;
  }

  .biColumn {
    width: clamp(25rem, 8.7rem + 26vw, 40rem); /* 25rem -> 40rem */
    margin: 5rem 2rem;
  }

  .biColumn h4,
  .triColumn h4 {
    font-size: clamp(1.5rem, 0.96rem + 0.85vw, 2rem); /* 1.5rem -> 2rem */
    padding: 0 clamp(0.75rem, -0.065rem + 1.3vw, 1.5rem); /* 0 0.75rem -> 0 1.5rem */
  }

  .biColumn p {
    font-size: clamp(0.9rem, 0.52rem+ 0.6vw, 1.25rem);

    line-height: clamp(1.25rem, 0.98rem + 0.4vw, 1.5rem); /* 1.25rem -> 1.5rem  */
    padding: 0 1.5rem;
    margin-bottom: 1.5rem;
  }

  .triColumn {
    width: clamp(18rem, 13.11rem + 8vw, 22.5rem); /* 18rem -> 22.5rem */
    margin: clamp(0.5rem, -0.04rem + 0.8vw, 1rem); /* 0.5rem -> 1rem */
  }

  .textContainer {
    height: clamp(20rem, 14.57rem + 8.7vw, 25rem); /* 20rem -> 25rem */
  }
  
  .textContainer p,
  .textContainer span {
    font-size: clamp(0.8rem, 0.58rem + 0.3vw, 1rem); /* 0.8rem -> 1rem */

    line-height: 1.5rem;
    padding: 0 clamp(1.5rem, -0.13rem + 2.6vw); /* 0 1.5rem -> 0 3rem */
    text-align: center;
  }

  .triColumn img {
    height: clamp(4rem, 1.83rem + 3.5vw, 6rem); /* 4rem -> 6rem */
    margin: clamp(1.5rem, -0.13rem + 2.6vw, 3rem); /* 1.5rem -> 3rem */
  }

  .imageDisplay {
    display: flex;
    position: relative;
  }

  .imageDisplay img {
    width: 20rem;
  }

  .front,
  .mid,
  .rear {
    position: absolute;
  }

  .front {
    z-index: 100;
  }

  .mid {
    top: 1.5rem;
    left: 2rem;
    z-index: 99;
    opacity: 0.6;
  }

  .rear {
    top: 3rem;
    left: 4rem;
    z-index: 98;
    opacity: 0.4;
  }
  
  .svgPageWe {
    height: clamp(8rem, 4.74rem + 5.2vw, 11rem); /* 8rem -> 11rem */
  }
}

</style>