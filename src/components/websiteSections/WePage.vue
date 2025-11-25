<template>
  <div id="we">
    <TitleWrapper string="QUEM SOMOS" fontColor="#ffffff" backColor="#ba0101" shadeColor="#701710" />
    <div class="section">
      <div class="biColumn">
        <h4>A empresa</h4>
        <p>
        A HAVI foi fundada em 2004 por especialistas com ampla experiência no setor de Veículos Industriais. 
        Desde o início, os fundadores tinham um propósito claro: 
        <strong>oferecer ao mercado uma solução completa, prática e confiável</strong>, capaz de atender todas as 
        necessidades do cliente em um único lugar.
    </p>

    <p>
        Começamos atuando no segmento de 
        <strong>locação de empilhadeiras e veículos especiais</strong>, sempre com foco em atendimento próximo, 
        transparente e eficiente. Com o tempo — e ouvindo atentamente nossos clientes — expandimos nossas operações 
        para incluir a <strong>distribuição e fornecimento de peças, pneus e acessórios</strong>, além de serviços 
        técnicos especializados.
    </p>

    <p>
        Essa evolução natural nos permitiu entregar ainda mais conveniência e agilidade, fortalecendo nosso compromisso 
        de ser um parceiro completo para cada operação.
    </p>

    <p>
        Contamos com uma <strong>equipe de vendas altamente capacitada</strong>, preparada para oferecer um atendimento 
        diferenciado e alinhado às principais plataformas Business-to-Business do mercado. Nosso objetivo é garantir 
        que cada cliente encontre, na HAVI, soluções personalizadas e uma parceria duradoura.
    </p>
      </div>
      <div class="biColumn space">
        <h4 class="par">{{ photoTitle }}</h4>
        <div
          class="photoContainer"
          v-for="(image, index) in photoSrc"
          :key="index"
        >
          <Transition name="fade">
            <img class="photo" v-if="currentPhoto == index" :src="image" />
          </Transition>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="triColumn">
        <img src="../../assets/images/icons/mission.svg">
        <h4>Missão</h4>
        <div class="textContainer">
          <p>
            Oferecer soluções completas e confiáveis para o setor de Veículos Industriais, unindo locação, 
            peças, pneus e serviços em um único lugar. Nosso compromisso é facilitar a operação dos clientes 
            com atendimento humano, ágil e de qualidade.
          </p>
        </div>
      </div>
      <div class="triColumn">
        <img src="../../assets/images/icons/vision.svg">
        <h4>Visão</h4>
        <div class="textContainer">
          <p>
            Ser referência nacional em conveniência e eficiência no segmento de Veículos Industriais, 
            expandindo continuamente nosso portfólio e tecnologia para entregar a melhor experiência ao cliente.
          </p>
        </div>
      </div>
      <div class="triColumn">
        <img src="../../assets/images/icons/values.svg">
        <h4>Valores</h4>
        <div class="textContainer">
            <p>
            <span>Compromisso:</span>  Atendimento próximo, transparente e orientado a resultados.
            <span>Qualidade e confiabilidade:</span> produtos e serviços de qualidade.<br>
            <span>Ética e respeito:</span> relações sólidas, responsáveis e verdadeiras.<br>
            <span>Trabalho em equipe:</span> união e colaboração para entregar sempre o melhor.
            </p>
        </div>
      </div>
    </div>
    
  </div>
</template>

<script>
import TitleWrapper from '../TitleWrapper.vue';
import { ref } from 'vue';

export default {
  components: {
    TitleWrapper,
  },
  data() {
    const photoTitle = ref("Unidade de Serviço");
    const photoSrc = Object.values(import.meta.glob('../../assets/images/wePage/*.{png,jpg,jpeg,PNG,JPEG}', { eager: true, as: 'url' }))
    const currentPhoto = ref(0);
    return { photoTitle, photoSrc, currentPhoto }
  },
  methods: {
    currentDate() {
      const current = new Date();
      const date = `${current.getFullYear()}`;
      return date;
    },
    photoSwitch() {
      if(this.currentPhoto == this.photoSrc.length - 1) this.currentPhoto = 0;
      else this.currentPhoto++;
      this.titleSwitch(this.currentPhoto);
    },
    titleSwitch(index) {
      if (index > 1 && index <= 6) this.photoTitle = "Nossa Frota"
      else if (index > 6 && index <= 12) this.photoTitle = "Nossa Sede"
      else this.photoTitle = "Unidade de Serviço"
    },
  },
  created() {
    setInterval(this.photoSwitch, 3000);
  }
};
</script>

<style scoped>
#we {
  position: relative;
  width: 100vw;
}

.section {
  display: flex;
  justify-content: center;
}

.biColumn h4,
.triColumn h4 {
  font-family: BebasNeue, sans-serif;
  text-transform: uppercase;
  color: var(--color-text-light);

  cursor: default;
}

.biColumn p {
  font-family: "MontSerrat", sans-serif;
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
  font-family: "MontSerrat", sans-serif;
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
    display: flex;
    flex-flow: column nowrap;
    justify-content: center;
    align-items: center;
    width: clamp(19rem, 9.12rem + 49vw, 40rem); /* 25rem -> 40rem */
    margin-left: clamp(1rem, -4.88rem + 29vw, 13.5rem);
  }
  
  .biColumn h4,
  .triColumn h4 {
    text-align: center;
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
  
  .photoContainer {
    display: flex;
    flex-flow: row nowrap;
    position: relative;
    
    width: clamp(12rem, 3.53rem + 42vw, 30rem);
  }

  .photoContainer .photo {
    object-fit: cover;
    position: absolute;
    width: clamp(12rem, 3.53rem + 42vw, 30rem);
    height: clamp(12rem, 3.53rem + 42vw, 30rem);
  }

  .space {
    margin-bottom: clamp(12rem, 3.53rem + 42vw, 30rem);
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

  .par {
    margin-left: clamp(2rem, -10.6rem + 20vw, 13.4rem);
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

  .photoContainer {
    display: flex;
    position: relative;
  }

  .photoContainer .photo {
    object-fit: cover;
    position: absolute;
    width: 20rem;
    height: 20rem;
    left: clamp(4rem, -8.6rem + 20vw, 15.4rem);
  }
  .svgPageWe {
    height: clamp(8rem, 4.74rem + 5.2vw, 11rem); /* 8rem -> 11rem */
  }
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.8s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

</style>