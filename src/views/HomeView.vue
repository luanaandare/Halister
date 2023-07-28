<template>
  <main>
    <HeaderMenu />
    <BackgroundIntro />
    <WhoWeAre />
    <Pneus />
  </main>
</template>

<script>
import HeaderMenu from "../components/HeaderMenu.vue";
import BackgroundIntro from "../components/BackgroundIntro.vue";
import WhoWeAre from "../components/WhoWeAre.vue";
import Pneus from "../components/Pneus.vue";

export default {
  components: {
    WhoWeAre,
    Pneus,
    BackgroundIntro,
    HeaderMenu,
},
};
</script>

<style scoped>
#placeholder {
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 10rem;
  background-color: var(--color-background-mute);
}
</style>
