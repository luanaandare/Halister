<template>
  <div id="services">
    <TitleWrapper string="SERVIÇOS" fontColor="#000000" backColor="#ffffff" shadeColor="#d49a0e" />
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
  position: relative;
  background-color: #f2c60f;

  height: 20rem;
}
</style>