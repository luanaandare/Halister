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
        title="Pneus"
      >
        PNEUS
      </a>
      <a
        href="#parts"
        title="Peças"
      >
        PEÇAS
      </a>
      <a
        href="#services"
        title="Serviços"
      >
        SERVIÇOS
      </a>
      <a
        href="#brands"
        title="As marcas que trabalhamos"
      >
        MARCAS
      </a>
      <a>
        CONTATO
      </a>
    </nav>
    <div class="contato">
      <p>(12) 3322-2768</p>
      <a href="mailto:contato@halister.com.br">contato@halister.com.br</a>
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
  width: 58%;
  height: 7rem;
}

.svgMenu {
  width: 100%;
  height: 7rem;
}

.menu {
  position: absolute;
  top: 0;
  right: 0;
  width: 47.5%;
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
  width: 28%;
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

img {
  height: 5.5rem;
  padding: 0.75rem 0 0.75rem 6rem;
}
</style>