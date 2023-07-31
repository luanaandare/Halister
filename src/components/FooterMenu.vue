<template>
  <div id="footer">
    <div class="col">
      <h4>NOSSA SEDE <img src="../assets/images/icons/location.svg" /></h4>

      <p>Rua Cidade de Bagé, 161</p>
      <p>Palmeiras de São José</p>
      <p>São José dos Campos</p>
      <p>SP - 12237-831</p>
    </div>
    <div class="col">
      <h4>CONTATO</h4>
      <span class="row">
        <img class="icon" src="../assets/images/icons/phoneFilled.svg" />
        (12) 3322-2768
      </span>
      <span class="row">
        <img class="icon" src="../assets/images/icons/phoneFilled.svg" />
        (12) 3206-2860
      </span>
      <span class="row">
        <img class="icon" src="../assets/images/icons/wppFilled.svg" />
        (11) 98457-4754
      </span>
      <span class="row">
        <img class="icon" src="../assets/images/icons/mailFilled.svg" />
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
  margin-left: 7.5%;
  width: 92.5%;
  display: flex;
  flex-flow: row nowrap;
}

.col {
  width: 12rem;
  margin: 2rem;
  display: flex;
  flex-flow: column nowrap;
  align-items: center;
  justify-content: flex-start;
}

h4 {
  margin-top: 1rem;
  font-family:"BebasNeue";
  font-size: 1.4rem;
  color: #f2c60f;
}

h4 img {
  width: 1.3rem;
}

.col p,
.col span {
  font-family: "SourceSans";
  color: #fff;
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

.row img {
  margin-right: 0.75rem;
}

.icon {
  width: 1rem;
}

.logoCol {
  display: flex;
  flex-flow: row nowrap;
  align-items: center;
}

.logoCol img {
  width: 10rem;
  margin-left: 5rem;
}

h3 {
  width: 12rem;
  text-align: start;
  margin-left: 2rem;
  padding: 0.5rem;
  border-left: solid 1px white;

  cursor: default;
}
</style>