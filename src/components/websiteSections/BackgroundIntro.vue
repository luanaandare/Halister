<template>
  <div class="backgroundImage">
    <h1>TEMOS A SOLUÇÃO IDEAL EM REPOSIÇÃO DE PNEUS E PEÇAS PARA EMPILHADEIRAS E VEÍCULOS INDUSTRIAIS.</h1>
  </div>
</template>

<style scoped>
.backgroundImage{
  width: clamp(62.5rem, 100vw, 120rem); /* 62.5rem -> 120rem */ 
  height: clamp(30.2rem, 13.81rem + 26vw, 45rem); /* 30.2rem -> 38rem */
  background-image: linear-gradient(
        to right,
        rgba(6, 7, 14, 0.7) 40%,
        rgba(6, 7, 14, 0.2)
      ),
      url("../../assets/images/bg-home.png");
  background-size: cover;
  background-position: right;
}

h1 {
  position: relative;
  top: 5rem;
  left: 3rem;
  width: clamp(40rem, 29.13rem + 17vw, 50rem); /* 40rem -> 50rem */
  padding: 1.5rem 1rem;
  
  color: white;
  font-family: BebasNeue;
  line-height: 4.5rem; /* 4.5rem -> 6rem */
  font-size: 4rem; /* 4rem -> 4.75rem */
  cursor: default;
}

</style>