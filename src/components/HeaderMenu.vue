<template>
  <div id="head">
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
        href="#pneus"
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
#head {
  border-bottom: 1px solid rgba(255, 255, 255, 0.16);
}

.menuStyling {
  position: absolute;
  top: 0;
  right: 0;
  width: 50rem;
  height: 7rem;
}

.svgMenu {
  width: 50rem;
  height: 7rem;
}

.menu {
  position: absolute;
  top: 0;
  right: 0;
  width: 45rem;
  height: 6.5rem;

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
  width: 30rem;
  height: 2rem;
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
  font-size: 2rem;
  text-decoration: none;

  cursor: pointer;
  transition: 0.2s;
}

.menu a:hover {
  transform: scale(1.05);
  color: black;
}

#logo {
  height: 5.5rem;
  padding: 0.75rem 0 0.75rem 6rem;
}
</style>