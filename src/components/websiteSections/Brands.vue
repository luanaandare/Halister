<template>
  <div id="brands">
    <TitleWrapper string="TRABALHAMOS COM" fontColor="#ffffff" backColor="#2d2d2d" shadeColor="#f2c60f" />
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
  height: 50rem;
}

.section {
  width: 60rem;
  margin-left: 15rem;

  display: flex;
  flex-flow: row wrap;
}

.logoContainer {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 1rem;
}

.logo {
  width: 8rem;
}

</style>
