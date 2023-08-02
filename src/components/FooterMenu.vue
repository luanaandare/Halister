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
  margin-left: 1rem; /* 1rem -> 5rem */
  width: 92.5rem;
  display: flex;
  flex-flow: row nowrap;
}

.col {
  width: 12rem; /* 8rem -> 12rem */
  margin: 0.5rem; /* 0.5rem -> 2rem */
  display: flex;
  flex-flow: column nowrap;
  align-items: center;
  justify-content: flex-start;
}

h4 {
  margin-top: 1rem;
  font-family:"BebasNeue";
  font-size: 1rem; /* 1rem -> 1.4rem */
  color: #f2c60f;
}

h4 img {
  width: 1.3rem;
}

.col p,
.col span {
  font-family: "SourceSans";
  color: #fff;
  font-size: 0.7rem; /* 0.7rem -> 0.8rem */
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
  width: 7rem; /* 7rem -> 10rem */
  margin-left: 3rem; /* 3rem -> 5rem */ 
}

h3 {
  width: 10rem; /* 10rem -> 12rem */
  text-align: start;
  margin-left: 1rem; /* 1rem -> 2rem */
  padding: 0.5rem;
  border-left: solid 1px white;
  font-size: 1rem; /* 1rem -> 1.2rem */

  cursor: default;
}
</style>