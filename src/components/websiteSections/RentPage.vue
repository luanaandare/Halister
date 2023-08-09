<template>
  <div id="rent">
    <TitleWrapper string="LOCAÇÃO" fontColor="#ffffff" backColor="#626262" shadeColor="#f2c60f" />
    <div class="paragraphContainer">
      <p>
        Locação e Venda de empilhadeiras, carrinhos hidráulicos,
        veículos industriais em geral movidos à diesel, GLP, elétricos
        e manuais novos e semi novos. Possuímos equipamentos modernos,
        com boa ergonomia e segurança, visando a melhoria contínua no
        atendimento as necessidades dos clientes.
      </p>
      <p>
        Temos disponibilidade para Locações através de contratos para
        longos períodos.
      </p>
    </div>
    <div class="photoContainer">
      <div
        v-for="(image, index) in rentSrc"
        :key="index"
      >
        <Transition name="fade">
          <img class="photo left" v-if="currentRent == index + 1" :src="image" />
        </Transition>
        <Transition name="fade">
          <img class="photo middle" v-if="currentRent == index" :src="image" />
        </Transition>
        <Transition name="fade">
          <img class="photo right" v-if="currentRent == index - 1" :src="image" />
        </Transition>
      </div>
    </div>
    <svg
      class="svgPageRent"
      preserveAspectRatio=none
      viewBox="0 0 100 100"
      style="transition: none 0s ease 0s;"
    >
    <path
        d="
          M 0,2
          L 100,2 100,57 0,87
          z
        "
        style="transition: none 0s ease 0s;
        fill: #d49a0e;"
      ></path>
    <path
        d="
          M 0,0
          L 98,0 98,55 0,85
          z
        "
        style="transition: none 0s ease 0s;
        fill: #2d2d2d;"
      ></path>
      
    </svg>
  </div>
</template>

<script>
import TitleWrapper from "../TitleWrapper.vue";
import { ref } from 'vue';

export default {
  components: {
    TitleWrapper,
  },
  data() {
    const rentSrc = Object.values(import.meta.glob('../../assets/images/rent/*.{png,jpg,jpeg,PNG,JPEG}', { eager: true, as: 'url' }))
    const currentRent = ref(1);
    return { rentSrc, currentRent }
  },
  methods: {
    photoSwitch() {
      if(this.currentRent == this.rentSrc.length - 2) this.currentRent = 1;
      else this.currentRent++;
    },
  },
  created() {
    setInterval(this.photoSwitch, 3000);
  }
};
</script>

<style scoped>
#rent {
  position: relative;
  width: 100vw;
}

.placeholder {
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "SourceSans";
}

.svgPageRent {
  background-color: var(--color-text-light);
  position: absolute;
  width: 100vw;
  top: 0;
  z-index: -1;
}

@media (width < 1000px) {
  #rent {
    height: clamp(40rem, 30.6rem + 47vw, 60rem); /* 40rem -> 60rem */
    width: 100vw;
    scroll-margin-top: 4.5rem;
  }
  
  .paragraphContainer {
    position: relative;
    color: var(--halister-theme-yellow);
    font-size: clamp(0.7rem, 0.37rem + 1.6vw, 1.4rem); /* 0.7rem -> 0.9rem */
    line-height: clamp(0.9rem, 0.57rem + 1.6vw, 1.6rem); /* 0.9rem -> 1.25rem  */
    
    width: clamp(18rem, 8.12rem + 49vw, 39rem); /* 25rem -> 40rem */
    margin-left: clamp(1rem, -4.88rem + 29vw, 13.5rem);
    margin-top: clamp(1rem, -0.88rem + 9.4vw, 5rem);

    text-align: justify;
    text-shadow: 1px 1px 0 black;
  }

  .paragraphContainer p {
    margin: 0 clamp(0.5rem, 0.26rem + 1.2vw, 1rem); /* 0 1rem -> 0 1.5rem */
  }
  
  .photoContainer {
    display: flex;
    flex-flow: column nowrap;
    position: relative;
    width: 18rem;
  }

  .photoContainer .photo {
    object-fit: cover;
    position: absolute;
  }

  .left {
    left: clamp(1.5rem, -9rem + 53vw, 24rem);
    top: clamp(17.5rem, 16.56rem + 4.7vw, 19.5rem); /* 1rem -> 3rem */
    width: 7.75rem;
    height: 7.75rem;
    filter: grayscale(0.5);
  }

  .middle {
    top: clamp(1rem, 0.06rem + 4.7vw, 3rem); /* 1rem -> 3rem */
    left: clamp(1.5rem, -9rem + 53vw, 24rem); /* 1.5rem -> 24rem */
    width: 16rem;
    height: 16rem;
  }

  .right {
    top: clamp(17.5rem, 16.56rem + 4.7vw, 19.5rem); /* 1rem -> 3rem */
    left: clamp(9.75rem, -0.84rem + 53vw, 32.25rem); /* 9.75rem -> 32.25rem */
    width: 7.75rem;
    height: 7.75rem;
    filter: grayscale(0.5);
  
  }


  .svgPageRent {
    height: clamp(40rem, 30.6rem + 47vw, 60rem); /* 40rem -> 60rem */
  }
}

@media (width >= 1000px) {
  #rent {
    height: 50rem;
  }

  .paragraphContainer {
    position: absolute;
    text-align: justify;
    color: var(--color-text-light);
    top: 6rem;
    right: clamp(6rem, -27.6rem + 54vw, 37.2rem); /* 6rem -> 37.2rem */
    font-size: clamp(0.9rem, 0.52rem + 0.6vw, 1.25rem); /* 0.9rem -> 1.25rem */
    line-height: clamp(1.25rem, 0.98rem + 0.4vw, 1.5rem); /* 1.25rem -> 1.5rem */

    width: clamp(30rem, 8.26rem + 34.8vw, 50rem); /* 30rem -> 50rem */
  }
  
  .photoContainer {
    display: flex;
    position: relative;
    margin-top: 10rem;
    margin-left: clamp(20rem,-11.5rem + 50vw, 48.5rem);
  }

  .photoContainer .photo {
    object-fit: cover;
    position: absolute;
  }

  .left {
    left: -16rem;
    top: 2.5rem;
    width: 15rem;
    height: 15rem;
  }

  .middle {
    width: 20rem;
    height: 20rem;
  }

  .right {
    left: 21rem;
    top: 2.5rem;
    width: 15rem;
    height: 15rem;
  
  }

  .svgPageRent {
    height: 50rem;
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