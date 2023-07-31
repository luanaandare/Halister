<template>
  <main id="home">
    <HeaderMenu />
    <BackgroundIntro />
    <WhoWeAre />
    <Pneus />
    <Parts />
    <Services />
    <Brands />
    <a
      href="#home"
      class="hoveringButton alignLeft"
    >Voltar</a>
    <a
      href="https://wa.me/5511984574754?text=Olá%2C%20estive%20no%20seu%20site%20e%20tenho%20interesse%20em%20conhecer%20melhor%20vocês!"
      class="hoveringButton alignRight"
    ><img src="../assets/images/icons/wpp.png"></a>
  </main>
</template>

<script>
import HeaderMenu from "../components/HeaderMenu.vue";
import BackgroundIntro from "../components/websiteSections/BackgroundIntro.vue";
import WhoWeAre from "../components/websiteSections/WhoWeAre.vue";
import Pneus from "../components/websiteSections/Pneus.vue";
import Parts from "../components/websiteSections/Parts.vue";
import Services from "../components/websiteSections/Services.vue";
import Brands from "../components/websiteSections/Brands.vue";

export default {
  components: {
    HeaderMenu,
    BackgroundIntro,
    WhoWeAre,
    Pneus,
    Parts,
    Services,
    Brands,
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

.hoveringButton {
  position: fixed;
  bottom: 3rem;
  transition: 0.2s;
}

a:hover {
  background-color: rgba(0, 0, 0, 0);
  transform: scale(1.05);
}

.hoveringButton img {
  width: 4rem;
  height: 4rem
}

.alignLeft {
  left: 3rem;
}

.alignRight {
  right: 3rem;
}
</style>
