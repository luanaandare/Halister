<template>
  <div id="we">
    <TitleWrapper string="QUEM SOMOS" fontColor="#ffffff" backColor="#626262" shadeColor="#F2C60F" />
    <div class="section">
      <div class="biColumn">
        <h4>A empresa</h4>
        <p>
          Nossa empresa foi fundada em 2004 por profissionais com larga
          experiencia no seguimento de Veículos Industriais, e já atua a
          16 anos no mercado, inicialmente no seguimento de Locação de
          Empilhadeiras e Veículos Especiais, mais devido as necessidades
          dos clientes fechamos parcerias e direcionamos nossa linha
          principal para o mercado de distribuição e reposição das principais
          marcas de Pneus, Peças e Serviços para Empilhadeiras e Veículos
          Industriais.
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
};
</script>

<style scoped>

#we {
  position: relative;
}

.section {
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
}

.biColumn {
  width: 45%;
  margin: 2rem;
}

.biColumn h4,
.triColumn h4 {
  font-family: BebasNeue;
  font-size: 2rem;
  color: var(--color-heading);
  padding: 0 1.5rem;
}

.biColumn p {
  font-family: "SourceSans", sans-serif;
  font-size: 1.25rem;
  font-weight: 300;
  color: var(--color-heading);

  line-height: 1.5rem;
  padding: 0 3rem;
  margin-bottom: 1.5rem;
}

.triColumn {
  width: 25%;
  margin: 1rem;
  display: flex;
  flex-flow: column nowrap;
  align-items: center;
}

.triColumn img {
  height: 6rem;
  margin: 3rem;
}

.textContainer {
  display: flex;
  flex-flow: column nowrap;
  align-items: center;
  justify-content: center;
  height: 25rem;
}

.textContainer p,
.textContainer span {
  font-family: "SourceSans", sans-serif;
  font-size: 1.25rem;
  font-weight: 300;
  color: var(--color-heading);

  line-height: 1.5rem;
  padding: 0 3rem;
  text-align: center;
}

.textContainer span {
  font-weight: 700;
}

.imageDisplay {
  display: flex;
  flex-flow: row nowrap;
  position: relative;
}

.front,
.mid,
.rear {
  position: absolute;
  width: 22rem;
}

.front {
  z-index: 100;
}

.mid {
  top: 2rem;
  left: 3rem;
  filter: blur(2px);
  z-index: 99;
}

.rear {
  top: 4rem;
  left: 6rem;
  filter: blur(4px);
  z-index: 98;
}

.svgPageWe {
  position: absolute;
  bottom: 0;
  height: 170px;
  width: 100%;
}
</style>