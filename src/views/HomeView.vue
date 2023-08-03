<template>
  <main id="home">
    <HeaderMenu class="desktop" />
    <TouchMenu class="mobile" />
    <BackgroundIntro />
    <WePage />
    <TiresPage />
    <PartsPage />
    <ServicesPage />
    <!--<RentPage />
    <BrandsPage />
    <ContactPage />
    <FooterMenu />-->
    <Transition name="fade">
      <a
        v-if="scrollpx > 0.29 * iw + 270 && scrollpx < 0.97 * iw + 3661"
        href="#home"
        class="hoveringButton alignLeft desktop"
        title="Voltar para o topo da página"
      ><font-awesome-icon :icon="['fas', 'chevron-up']" /></a>
    </Transition>
    <Transition name="fade">
      <a
        v-if="scrollpx < 0.97 * iw + 3661"
        href="https://wa.me/5511984574754?text=Olá%2C%20estive%20no%20seu%20site%20e%20tenho%20interesse%20em%20conhecer%20melhor%20vocês!"
        class="hoveringButton alignRight desktop"
        title="Contate-nos no whatsapp!"
      ><img src="../assets/images/icons/wpp.png"></a>
    </Transition>
  </main>
</template>

<script>
import { ref } from 'vue';
import HeaderMenu from "../components/HeaderMenu.vue";
import TouchMenu from "../components/TouchMenu.vue";
import BackgroundIntro from "../components/websiteSections/BackgroundIntro.vue";
import WePage from "../components/websiteSections/WePage.vue";
import TiresPage from "../components/websiteSections/TiresPage.vue";
import PartsPage from "../components/websiteSections/PartsPage.vue";
import ServicesPage from "../components/websiteSections/ServicesPage.vue";
import RentPage from "../components/websiteSections/RentPage.vue";
import BrandsPage from "../components/websiteSections/BrandsPage.vue";
import ContactPage from "../components/websiteSections/ContactPage.vue";
import FooterMenu from "../components/FooterMenu.vue";

export default {
  components: {
    HeaderMenu,
    TouchMenu,
    BackgroundIntro,
    WePage,
    TiresPage,
    PartsPage,
    ServicesPage,
    RentPage,
    BrandsPage,
    ContactPage,
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
@media screen and (width < 1000px) {
  .desktop {
    display: none !important;
  }
}

@media screen and (width >= 1000px) {
  .mobile {
    display: none !important;
  }
}
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
