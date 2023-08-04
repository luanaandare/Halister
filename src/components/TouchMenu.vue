<template>
  <div>
    <div class="tMenu">
      <img id="logo" src="../assets/images/h-light.png" />
      <div class="toggleContainer" @click="toggleMenu = !toggleMenu">
        <font-awesome-icon
          class="toggle"
          v-if="toggleMenu == false"
          :icon="['fas', 'bars']"
        />
        <font-awesome-icon
          class="toggle"
          v-if="toggleMenu == true"
          :icon="['fas', 'xmark']"
        />
      </div>
    </div>
    <Transition name="fade">
      <nav class="menu" v-if="toggleMenu == true">
          <a
            href="#we"
            title="Quem nós somos"
            @click="toggleMenu = !toggleMenu"
          >
            QUEM SOMOS
          </a>
          <a
            href="#tires"
            title="Sobre os nossos pneus"
            @click="toggleMenu = !toggleMenu"
          >
            PNEUS
          </a>
          <a
            href="#parts"
            title="Sobre as peças que utilizamos"
            @click="toggleMenu = !toggleMenu"
          >
            PEÇAS
          </a>
          <a
            href="#services"
            title="Sobre os nossos serviços"
            @click="toggleMenu = !toggleMenu"
          >
            SERVIÇOS
          </a>
          <a
            href="#rent"
            title="Locação de equipamentos"
            @click="toggleMenu = !toggleMenu"
          >
            LOCAÇÃO
          </a>
          <a
            href="#brands"
            title="As marcas que trabalhamos"
            @click="toggleMenu = !toggleMenu"
          >
            MARCAS
          </a>
          <a
            href="#contact"
            title="Fale conosco"
            @click="toggleMenu = !toggleMenu"
          >
            CONTATO
          </a>
        </nav>
    </Transition>
      <div
        class="negativeSpace"
        v-if="toggleMenu == true"
        @click="toggleMenu = !toggleMenu"
      />
  </div>
</template>

<script>
import { ref } from 'vue';
export default {
  setup() {
    const toggleMenu = ref(false);

    return { toggleMenu }
  }
}
</script>

<style scoped>
.tMenu {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 4.5rem;
  z-index: 150;
  background-color: var(--color-background);
  border-bottom: 1px solid rgba(255, 255, 255, 0.16);

  display: flex;
  flex-flow: row nowrap;
  justify-content: space-between;
  align-items: center;
}

.menu {
  position: fixed;
  top: 4.5rem;
  left: 0;
  right: 0;
  z-index: 150;

  display: flex;
  flex-flow: column nowrap;
  justify-content: center;
  align-items: flex-end;

  background-color: var(--color-background);
  border-bottom: 1px solid rgba(255, 255, 255, 0.16);
}

.menu a,
.menu a:visited,
.menu a:hover {
  font-family: "BebasNeue";
  text-decoration: none;
  color: #fff;
  background-color: var(--color-background);
  padding: 1rem 1rem;
}

.negativeSpace {
  position: fixed;
  backdrop-filter: blur(5px);
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 149;
}

#logo {
  height: 2rem; /* 4.5rem -> 5.5rem */
  padding: 0.75rem 0 0.75rem 1rem; /* 0.75rem 0 0.75rem 3rem -> 0.75rem 0 0.75rem 6rem */
}

.toggleContainer {
  position: relative;
}

.toggle {
  height: 1.5rem;
  padding: 0.75rem 1rem 0.75rem 0;
  color: var(--color-text-light);
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
