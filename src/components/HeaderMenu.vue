<template>
  <div id="header">
    <img id="logo" src="../assets/images/h-light.png" />
    <div class="menuStyling">
      <svg
        class="svgMenu"
        preserveAspectRatio=none
        viewBox="0 0 100 30"
        style="transition: none 0s ease 0s;"
      >
        <path
          d="
            M 0,0
            L 100,0 100,30 12,30 0,15
            z
          "
          style="transition: none 0s ease 0s;
          fill: rgb(242, 198, 15);"
        ></path>
      </svg>
    </div>
    <nav class="menu">
      <a
        href="#we"
        title="Quem nós somos"
      >
        QUEM SOMOS
      </a>
      <a
        href="#tires"
        title="Sobre os nossos pneus"
      >
        PNEUS
      </a>
      <a
        href="#parts"
        title="Sobre as peças que utilizamos"
      >
        PEÇAS
      </a>
      <a
        href="#services"
        title="Sobre os nossos serviços"
      >
        SERVIÇOS
      </a>
      <a
        href="#rent"
        title="Locação de equipamentos"
      >
        LOCAÇÃO
      </a>
      <a
        href="#brands"
        title="As marcas que trabalhamos"
      >
        MARCAS
      </a>
      <a
        href="#contact"
        title="Fale conosco"
      >
        CONTATO
      </a>
    </nav>
    <div class="contato">
      <p>
        <font-awesome-icon :icon="['fas', 'phone']" class="icon" />
        (12) 3322-2768
      </p>
      <a href="mailto:contato@halister.com.br">
        <font-awesome-icon :icon="['fas', 'envelope']" class="icon" />
        contato@halister.com.br
      </a>
    </div>
  </div>
</template>

<style scoped>
#header {
  border-bottom: 1px solid rgba(255, 255, 255, 0.16);
}

.menuStyling {
  position: absolute;
  top: 0;
  right: 0;
  width: clamp(40rem, 29.13rem + 17vw, 50rem); /*40rem -> 50rem */
  height: clamp(6rem, 4.93rem + 1.7vw, 6rem); /* 6rem -> 7rem */
}

.svgMenu {
  width: clamp(40rem, 29.13rem + 17vw, 50rem); /* 40rem -> 50rem */
  height: clamp(6rem, 4.93rem + 1.7vw, 6rem); /* 6rem -> 7rem */
}

.menu {
  position: absolute;
  top: 0;
  right: 0;
  width: clamp(35rem, 24.13rem + 17vw, 45rem); /* 35rem -> 45rem */
  height: clamp(5.5rem, 4.41rem + 1.7vw, 6.5rem); /*5.5rem -> 6.5rem */

  display: flex;
  flex-flow: row nowrap;
  text-align: right;
  justify-content: space-evenly;
  align-items: flex-end;
}

.contato {
  position: absolute;
  top: 0;
  right: 0;
  width: clamp(20rem, 9.13rem + 17vw, 30rem); /* 20rem -> 30rem */
  height: clamp(1.5rem, 0.96rem + 0.85vw, 2rem); /* 1.5rem -> 2rem */
  background-color: white;
  display: flex;
  flex-flow: row nowrap;
  text-align: right;
  justify-content: space-evenly;
  align-items: flex-end;
}

.contato p,
.contato a {
  font-family: BebasNeue;
  color: rgba(0, 0, 0, 0.64);
  text-decoration: none;
  font-size: clamp(0.8rem, 0.58rem + 0.3vw, 1rem); /* 0.8rem -> 1rem */
}

p .icon,
a .icon {
  color: #f2c60f;
}

.contatoIcon {
  height: 1rem;
  width: 1rem;
  margin-right: 0.75rem;
}

a:hover {
  background-color: rgba(0, 0, 0, 0);
}

.menu a,
.menu a:visited,
.menu a:active {
  color: var(--color-background);
  font-family: "BebasNeue";
  font-size: clamp(1.4rem, 0.75rem + 1vw, 2rem); /* 1.4rem -> 2rem */
  text-decoration: none;

  cursor: pointer;
  transition: 0.2s;
}

.menu a:hover {
  transform: scale(1.05);
  color: black;
}

#logo {
  height: clamp(2.5rem, 1.41rem + 1.7vw, 3.5rem); /* 4.5rem -> 5.5rem */
  padding: 0.75rem 0 0.75rem clamp(3rem, 0.26rem + 5.2vw, 6rem); /* 0.75rem 0 0.75rem 3rem -> 0.75rem 0 0.75rem 6rem */
}
</style>