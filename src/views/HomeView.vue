<template>
  <main id="home">
    <HeaderMenu />
    <BackgroundIntro />
    <WhoWeAre />
    <Pneus />
    <Parts />
    <Services />
    <Brands />
    <Contact />
    <FooterMenu />
    <Transition name="fade">
      <a
        v-show="scrollpx > 0.29 * iw + 270 && scrollpx < 0.97 * iw + 3661"
        href="#home"
        class="hoveringButton alignLeft"
        title="Voltar para o topo da página"
      ><font-awesome-icon :icon="['fas', 'chevron-up']" /></a>
    </Transition>
    <Transition name="fade">
      <a
        v-show="scrollpx < 0.97 * iw + 3661"
        href="https://wa.me/5511984574754?text=Olá%2C%20estive%20no%20seu%20site%20e%20tenho%20interesse%20em%20conhecer%20melhor%20vocês!"
        class="hoveringButton alignRight"
        title="Contate-nos no whatsapp!"
      ><img src="../assets/images/icons/wpp.png"></a>
    </Transition>
  </main>
</template>

<script>
import { ref } from 'vue';
import HeaderMenu from "../components/HeaderMenu.vue";
import BackgroundIntro from "../components/websiteSections/BackgroundIntro.vue";
import WhoWeAre from "../components/websiteSections/WhoWeAre.vue";
import Pneus from "../components/websiteSections/Pneus.vue";
import Parts from "../components/websiteSections/Parts.vue";
import Services from "../components/websiteSections/Services.vue";
import Brands from "../components/websiteSections/Brands.vue";
import Contact from "../components/websiteSections/Contact.vue";
import FooterMenu from "../components/FooterMenu.vue";

export default {
  components: {
    HeaderMenu,
    BackgroundIntro,
    WhoWeAre,
    Pneus,
    Parts,
    Services,
    Brands,
    Contact,
    FooterMenu,
  },
  data() {
    const scrollpx = ref(0);
    const iw = ref(0);

    return { scrollpx, iw }
  },
  destroyed() {
    window.removeEventListener('scroll', this.actionScroll);
    window.removeEventListener("resize", this.resizeCheck);
  },
  created() {
    this.actionScroll();
    this.resizeCheck();
    window.addEventListener('scroll', this.actionScroll);
    window.addEventListener("resize", this.resizeCheck);
  },
  methods:{
    actionScroll (event) {
      this.scrollpx = window.scrollY;
    },
    resizeCheck (event) {
      this. iw = window.innerWidth;
    }
  },
};
</script>

<style scoped>
.hoveringButton {
  position: fixed;
  bottom: 3rem;
  transition: 0.2s;
  width: 4rem;
  height: 4rem
}

.hoveringButton img {
  width: 4rem;
  height: 4rem
}

.alignLeft {
  border-radius: 0.8rem;
  left: 3rem;
  background-color: #ddd;
  text-decoration: none;

  display: flex;
  align-items: center;
  justify-content: center;
}

.alignLeft:hover {
  transform: scale(1.05);
}

.alignRight {
  right: 3rem;
}

.alignRight:hover {
  background-color: rgba(0, 0, 0, 0);
  transform: scale(1.05);
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.2s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
