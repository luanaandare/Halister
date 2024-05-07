<template>
  <div id="brands">
    <TitleWrapper
      string="TRABALHAMOS COM"
      fontColor="#ffffff"
      backColor="#2d2d2d"
      shadeColor="#bc0000"
    />
    <div class="section">
      <div
        class="logoContainer"
        v-for="(image, index) in brands"
        :key="index"
      ><img class="logo" :src="image" />
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
  setup() {
    //Get number of images in folder
    const brands = Object.values(import.meta.glob('../../assets/images/logos/*.{png,jpg,jpeg,PNG,JPEG}', { eager: true, as: 'url' }))

    return { brands };
  },
};
</script>

<style scoped>
#brands {
  position: relative;
  background-color: #fff;
  width: 100vw;
}

.section {

  display: flex;
  flex-flow: row wrap;
  align-items: center;
  justify-content: center;
}

.logoContainer {
  display: flex;
  align-items: center;
  justify-content: center;
}

@media (width < 1000px) {
  #brands {
    height: clamp(28rem, 22.35rem + 28.2vw, 40rem); /* 28rem -> 40rem */
    scroll-margin-top: 4.5rem;
  }

  .section {
    width: clamp(18rem, 2.9rem + 75.2vw, 50rem); /* 18rem -> 50rem */
    margin-left: clamp(0.5rem, -2.2rem + 13.5vw, 6.25rem); /* 0.5rem -> 6.25rem */
    margin-top: clamp(1rem, -0.88rem + 9.4vw, 5rem);
  }
  
  .logoContainer {
    margin: 0.5rem;
  }
  
  
  .logo {
    width: clamp(3.5rem, 2.3rem + 5.89vw, 6rem); /* 3.5rem -> 6rem */
  }
}

@media (width >= 1000px) {
  #brands {
    height: clamp(40rem, 29.13rem + 17vw, 50rem); /* 40rem -> 50rem */
  }

  .section {
    width: clamp(50rem, 39.13rem + 17vw, 60rem); /* 50rem -> 60rem */
    margin-left: clamp(6.25rem, -22.63rem + 46vw, 32.5rem); /* 6.25rem -> 32.5rem */
  }
  
  .logoContainer {
    margin: 1rem;
  }
  
  .logo {
    width: clamp(6rem, 3.83rem + 3.5vw, 8rem); /* 6rem -> 8rem */
  }
}

</style>
