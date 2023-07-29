<template>
  <main>
    <HeaderMenu />
    <BackgroundIntro />
    <WhoWeAre />
    <Pneus />
    <Parts />
    <Services />
  </main>
</template>

<script>
import HeaderMenu from "../components/HeaderMenu.vue";
import BackgroundIntro from "../components/websiteSections/BackgroundIntro.vue";
import WhoWeAre from "../components/websiteSections/WhoWeAre.vue";
import Pneus from "../components/websiteSections/Pneus.vue";
import Parts from "../components/websiteSections/Parts.vue";
import Services from "../components/websiteSections/Services.vue";

export default {
  components: {
    HeaderMenu,
    BackgroundIntro,
    WhoWeAre,
    Pneus,
    Parts,
    Services,
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
