<template>
  <div id="rent">
    <TitleWrapper string="LOCAÇÃO" fontColor="#ffffff" backColor="#626262" shadeColor="#f2c60f" />
    <div class="placeholder">
      <p>Seção reservada para locação de equipamentos</p>
    </div>
  </div>
</template>

<script>
import TitleWrapper from "../TitleWrapper.vue";
export default {
  components: {
    TitleWrapper,
  },
};
</script>

<style scoped>
@media screen and (width < 999px) {
  #rent {
    height: 20rem;
    width: 100vw;
  }
  
  .placeholder {
    font-size: 1rem;
  }
}

@media screen and (width > 1000px) {
  #rent {
    height: 50rem;
  }

  .placeholder {
    font-size: 4rem;
  }
}
#rent {
  background-color: #2d2d2d;
}

.placeholder {
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: "BebasNeue";
}
</style>