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
    <div class="imageContainer">
      <div
        v-for="(image, index) in rentImages"
        :key="index"
      ><img class="photo" :src="image" />
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
export default {
  components: {
    TitleWrapper,
  },
  setup() {
    //Get number of images in folder
    const rentImages = Object.values(import.meta.glob('../../assets/images/rent/*.{png,jpg,jpeg,PNG,JPEG}', { eager: true, as: 'url' }))

    return { rentImages };
  },
};
</script>

<style scoped>
#rent {
  position: relative;
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
    height: clamp(20rem, 10.58rem + 47vw, 50rem);
    width: 100vw;
    scroll-margin-top: 4.5rem;
  }
  
  .paragraphContainer {
    position: relative;
    color: var(--halister-theme-yellow);
    font-size: clamp(0.7rem, 0.37rem + 1.6vw, 1.4rem); /* 0.7rem -> 0.9rem */
    line-height: clamp(0.9rem, 0.57rem + 1.6vw, 1.6rem); /* 0.9rem -> 1.25rem  */
    
    width: clamp(19rem, 9.12rem + 49vw, 40rem); /* 25rem -> 40rem */
    margin-left: clamp(0rem, -5.88rem + 29vw, 12.5rem);
    margin-top: clamp(1rem, -0.88rem + 9.4vw, 5rem);

    text-align: justify;
    text-shadow: 1px 1px 0 black;
  }

  .paragraphContainer p {
    margin: 0 clamp(1rem, 0.76rem + 1.2vw, 1.5rem); /* 0 1rem -> 0 1.5rem */
  }

  .imageContainer {
    display: flex;
    flex-flow: row nowrap;
    justify-content: center;
    align-items: center;
    height: 16rem;
    width: 95vw;
  }
  
  .imageContainer img {
    height: clamp(4rem, -0.71rem + 23.5vw, 14rem);
    margin: 0.25rem;
  }

  .svgPageRent {
    height: clamp(20rem, 10.58rem + 47vw, 50rem);
  }
}

@media (width >= 1000px) {
  #rent {
    height: 50rem;
  }

  .paragraphContainer {
    position: absolute;
    color: var(--color-text-light);
    top: 6rem;
    right: clamp(4rem, 1.83rem + 3.5vw, 6rem); /* 4rem -> 6rem */
    font-size: clamp(0.9rem, 0.52rem + 0.6vw, 1.25rem); /* 0.9rem -> 1.25rem */
    line-height: clamp(1.25rem, 0.98rem + 0.4vw, 1.5rem); /* 1.25 -> 1.5rem */

    width: clamp(30rem, 8.26rem + 34.8vw, 50rem); /* 30rem -> 50rem */
  }

  .imageContainer {
    display: flex;
    flex-flow: row nowrap;
    justify-content: center;
    align-items: center;
    height: 30rem;
    width: 100vw;
  }
  
  .imageContainer img {
    height: clamp(14rem, 1.4rem + 20vw, 25.4rem); /* 14rem -> 20rem */
    margin: 0.5rem;
  }

  .svgPageRent {
    height: 50rem;
  }
}


</style>