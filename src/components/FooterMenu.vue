<template>
  <div id="footer">
    <div class="col">
      <h4>NOSSA SEDE <font-awesome-icon :icon="['fas', 'location-dot']" /></h4>

      <p>Rua Cidade de Bagé, 161</p>
      <p>Palmeiras de São José</p>
      <p>São José dos Campos</p>
      <p>SP - 12237-831</p>
    </div>
    <div class="col">
      <h4>CONTATO</h4>
      <span class="row">
        <font-awesome-icon :icon="['fas', 'phone']" class="icon" />
        (12) 3322-2768
      </span>
      <span class="row">
        <font-awesome-icon :icon="['fas', 'phone']" class="icon" />
        (12) 3206-2860
      </span>
      <span class="row">
        <font-awesome-icon :icon="['fab', 'whatsapp']" class="icon" />
        (11) 98457-4754
      </span>
      <span class="row">
        <font-awesome-icon :icon="['fas', 'envelope']" class="icon" />
        contato@halister.com.br
      </span>
    </div>
    <div class="col">
      <h4>FUNCIONAMENTO</h4>
      <p>8:30 ~ 17:30</p>
      <p class="smaller">Atendimento via Whatsapp</p>
    </div>
    <div class="logoCol">
      <img src="../assets/images/h-light-vert.png" />
      <h3>Empilhadeiras e veículos industriais</h3>
    </div>
  </div>
</template>

<style scoped>
#footer {
  margin-left: clamp(1rem, -7.4rem + 13.4vw, 8.6rem); /* 1rem -> 8.6rem */
  width: 100vw;
  display: flex;
  flex-flow: row nowrap;
}

.col {
  width: clamp(8rem, -0.4rem + 13vw, 15.2rem); /* 8rem -> 15.2rem */
  margin: clamp(0.5rem, -2.65rem + 5vw, 3.35rem); /* 0.5rem -> 3.35rem */
  display: flex;
  flex-flow: column nowrap;
  align-items: center;
  justify-content: flex-start;
}

h4 {
  margin-top: 1rem;
  font-family:"BebasNeue";
  font-size: clamp(1rem, 0.16rem + 1.3vw, 1.72rem); /* 1rem -> 1.72rem */
  color: #f2c60f;
}

h4 img {
  width: 1.3rem;
}

.col p,
.col span {
  font-family: "SourceSans";
  color: #fff;
  font-size: clamp(0.7rem, 0.49rem + 0.3vw, 0.85rem); /* 0.7rem -> 0.85rem */
}

.smaller {
  font-size: 0.7rem;
}

.row {
  height: 1.5rem;
  display: flex;
  flex-flow: row nowrap;
  align-items: center;
  justify-content: center;
}

.row .icon {
  margin-right: 0.5rem;
  color: #f2c60f;
}

.logoCol {
  display: flex;
  flex-flow: row nowrap;
  align-items: center;
}

.logoCol img {
  width: clamp(7rem, 0.7rem + 10vw, 10rem); /* 7rem -> 10rem */
  margin-left: clamp(3rem, -1.2rem + 6.7vw, 5rem); /* 3rem -> 5rem */ 
}

h3 {
  width: clamp(10rem, 3.74rem + 5.2vw, 12rem); /* 10rem -> 12rem */
  text-align: start;
  margin-left: clamp(1rem, -0.1rem + 1.7vw, 2rem); /* 1rem -> 2rem */
  padding: 0.5rem;
  border-left: solid 1px white;
  font-size: clamp(1rem, 0.78rem + 0.3vw, 1.2rem); /* 1rem -> 1.2rem */

  cursor: default;
}
</style>