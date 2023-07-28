<template>
  <TitleWrapper string="QUEM SOMOS" color1="#F2C60F" color2="#626262" />
  <div class="section">
    <div class="column">
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
    <div class="column">
      <h4>Frota própria</h4>
      <div class="imageDisplay">
        <div>foto1</div>
        <div>foto2</div>
        <div>foto3</div>
      </div>
    </div>
  </div>
  <div class="section">
    <Mission />
    <Vision />
    <Values />
  </div>
</template>

<script>
import TitleWrapper from './TitleWrapper.vue';
import Mission from './WhoWeAre/Mission.vue';
import Vision from './WhoWeAre/Mission.vue';
import Values from './WhoWeAre/Mission.vue';

export default {
  components: {
    TitleWrapper,
    Mission,
    Vision,
    Values,
  },
};
</script>

<style scoped>
.section {
  display: flex;
  flex-flow: row nowrap;
}

.column {
  width: 30rem;
  margin: 1rem;
}

.imageDisplay {
  display: flex;
  flex-flow: row nowrap;
}
</style>