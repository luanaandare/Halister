<template>
  <div class="backgroundImage">
    <h1>TEMOS A SOLUÇÃO IDEAL EM REPOSIÇÃO DE PNEUS E PEÇAS PARA EMPILHADEIRAS E VEÍCULOS INDUSTRIAIS.</h1>
  </div>
</template>

<style scoped>
@media screen and (width < 999px) {
  .backgroundImage {
    background-image: linear-gradient(
        to right,
        rgba(6, 7, 14, 0.7) 40%,
        rgba(6, 7, 14, 0.2)
      ),
      url("../../assets/images/bg-home-mob.png");
    width: 20rem; /* 30rem ->  */ 
    height: 15rem; /* 15rem ->  */
    
    position: relative;
    margin-top: 4.5rem;
  }

  h1 {
    top: 3rem;
    width: 14rem; /* 14rem -> rem */
    padding: 1.5rem 1rem;
    
    line-height: 1.5rem; /* 1.5rem ->  rem */
    font-size: 1.2rem; /* 1.2rem ->  rem */
  }
}

@media screen and (width > 1000px) {
  .backgroundImage {
    background-image: linear-gradient(
        to right,
        rgba(6, 7, 14, 0.7) 40%,
        rgba(6, 7, 14, 0.2)
      ),
      url("../../assets/images/bg-home.png");
    width: clamp(62.5rem, 100vw, 120rem); /* 62.5rem -> 120rem */ 
    height: clamp(30.2rem, 13.81rem + 26vw, 45rem); /* 30.2rem -> 38rem */
  }

  h1 {
    top: 5rem;
    left: 3rem;
    width: clamp(40rem, 29.13rem + 17vw, 50rem); /* 40rem -> 50rem */
    padding: 1.5rem 1rem;

    line-height: 4.5rem; /* 4.5rem -> 6rem */
    font-size: 4rem; /* 4rem -> 4.75rem */
  }
}
.backgroundImage{
  background-position: right;
  background-size: cover;
  background-repeat: no-repeat;
}

h1 {
  position: relative;
  color: white;
  font-family: BebasNeue;
  cursor: default;
}

</style>