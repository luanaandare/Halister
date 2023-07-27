<template>
  <main>
    <HeaderMenu />
    <div id="placeholder">placeholder image</div>
    <WhoWeAre />
  </main>
</template>

<script>
import WhoWeAre from "../components/WhoWeAre.vue";
import HeaderMenu from "../components/HeaderMenu.vue";

export default {
  components: {
    WhoWeAre,
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
