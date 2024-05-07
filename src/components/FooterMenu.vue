<template>
  <div id="footer">
    <div class="col">
      <h4>NOSSA SEDE <font-awesome-icon :icon="['fas', 'location-dot']" /></h4>
      <div class="subContainer">
        <p>Rua Cidade de Bagé, 161</p>
        <p>Palmeiras de São José</p>
        <p>São José dos Campos</p>
        <p>SP - 12237-831</p>
      </div>
    </div>
    <div class="col">
      <h4>CONTATO</h4>
      <div class="subContainer">
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
    </div>
    <div class="col">
      <h4>FUNCIONAMENTO</h4>
      <div class="subContainer">
        <p>8:30 ~ 17:30</p>
        <p class="smaller">Atendimento via Whatsapp</p>
      </div>
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
}

.col {
  display: flex;
}

.subContainer {
  display: flex;
  flex-flow: column nowrap;
  justify-content: flex-start;
}

h4 {
  font-family:"BebasNeue", sans-serif;
  text-transform: uppercase;
  color: var(--havi-theme-red);
}

h4 img {
  width: 1.3rem;
}

.col p,
.col span {
  font-family: "SourceSans", sans-serif;
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

.row .icon {
  margin-right: 0.5rem;
  color: var(--havi-theme-red);
}

.logoCol {
  display: flex;
  flex-flow: row nowrap;
  align-items: center;
}

.logoCol img {
  width: clamp(7rem, 0.7rem + 10vw, 10rem); /* 7rem -> 10rem */
}

h3 {
  width: clamp(10rem, 3.74rem + 5.2vw, 12rem); /* 10rem -> 12rem */
  text-align: start;
  margin-left: clamp(1rem, -0.1rem + 1.7vw, 2rem); /* 1rem -> 2rem */
  padding: 0.5rem;
  border-left: solid 1px white;
  font-size: clamp(1rem, 0.78rem + 0.3vw, 1.2rem); /* 1rem -> 1.2rem */
  
  color: var(--color-text-light);

  cursor: default;
}

@media (width < 1000px) {
  #footer {
    flex-flow: column nowrap;
  }

  .col {
    flex-flow: row nowrap;
    width: clamp(17rem, -2.29rem + 96.4vw, 58rem); /* 17rem -> 58rem */
    margin: 0.5rem;
    align-items: center;
    justify-content: space-between;
    border-bottom: solid 1px #f2c60f;
    margin-bottom: 1rem;
  }

  h4 {
    margin-top: 1rem;
    font-size: clamp(1rem, 0.53rem + 2.3vw, 2rem); /* 1rem -> 2rem */
  }

  .col p,
  .col span {
    font-size: clamp(0.7rem, 0.47rem + 1.2vw, 1.2rem); /* 0.7rem -> 1.2rem */
  }

  .subContainer {
    align-items: flex-end;

  }
  .logoCol {
    width: clamp(17rem, -2.29rem + 96.4vw, 58rem); /* 17rem -> 58rem */
    justify-content: center;
  }
}

@media (width >= 1000px) {
  #footer {
    flex-flow: row nowrap;
  }

  .col {
    flex-flow: column nowrap;
    width: clamp(8rem, -0.4rem + 13vw, 15.2rem); /* 8rem -> 15.2rem */
    margin: clamp(0.5rem, -2.65rem + 5vw, 3.35rem); /* 0.5rem -> 3.35rem */
    align-items: center;
    justify-content: flex-start;
  }
  
  .subContainer {
    align-items: center;
  }

  h4 {
    margin-top: 1rem;
    font-size: clamp(1rem, 0.16rem + 1.3vw, 1.72rem); /* 1rem -> 1.72rem */
  }

  .col p,
  .col span {
    font-size: clamp(0.7rem, 0.49rem + 0.3vw, 0.85rem); /* 0.7rem -> 0.85rem */
  }

  .logoCol img {
    margin-left: clamp(3rem, -1.2rem + 6.7vw, 5rem); /* 3rem -> 5rem */ 
  }
}
</style>