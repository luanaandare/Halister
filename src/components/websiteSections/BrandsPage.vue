<template>
  <div id="brands">
    <TitleWrapper
      string="TRABALHAMOS COM"
      fontColor="#ffffff"
      backColor="#2d2d2d"
      shadeColor="#f2c60f"
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
@media screen and (width < 999px) {
  #brands {
    height: 28rem; /* 40rem -> 50rem */
  }

  .section {
    width: 18rem; /* 50rem -> 60rem */
    margin-left: 0.5rem;
  }
  
  .logoContainer {
    margin: 0.5rem;
  }
  
  
  .logo {
    width: 3.5rem; /* 6rem -> 8rem */
  }
}

@media screen and (width > 1000px) {
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

#brands {
  background-color: #fff;
}

.section {

  display: flex;
  flex-flow: row wrap;
}

.logoContainer {
  display: flex;
  align-items: center;
  justify-content: center;
}

</style>
