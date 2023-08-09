<template>
  <div class="backgroundImage">
    <h1>
      HÁ <span>{{currentDate() - 2004 }}</span> ANOS FORNECENDO
      A SOLUÇÃO IDEAL EM REPOSIÇÃO DE PNEUS E PEÇAS PARA
      <span>EMPILHADEIRAS</span> E <span>VEÍCULOS INDUSTRIAIS</span>.</h1>
  </div>
</template>

<script>
export default {
  methods: {
    currentDate() {
      const current = new Date();
      const date = `${current.getFullYear()}`;
      return date;
    },
  }
}
</script>

<style scoped>
.backgroundImage{
  background-position: right;
  background-size: cover;
  background-repeat: no-repeat;
}

h1 {
  position: relative;
  color: var(--color-text-light);
  font-family: BebasNeue;
  cursor: default;
}

h1 span {
  color: var(--halister-theme-yellow);
}

@media (width < 1000px) {
  .backgroundImage {
    background-image: linear-gradient(
        to right,
        rgba(6, 7, 14, 0.7) 40%,
        rgba(6, 7, 14, 0.2)
      ),
      url("../../assets/images/bg-home-mob.png");
    width: 100vw;
    height: 75vw;
    
    position: relative;
    margin-top: 4.5rem;
  }

  h1 {
    top: clamp(3rem, 2.06rem + 4.7vw, 5rem); /* 3rem -> 5rem */
    width: clamp(14rem, 1.76rem + 61vw, 40rem); /* 14rem -> 40rem */
    padding: 1.5rem 1rem;
    
    line-height: clamp(1.5rem, 0.09rem + 7vw, 4.5rem); /* 1.5rem -> 4.5 rem */
    font-size: clamp(1.2rem, -0.12rem + 6.5vw, 4rem); /* 1.2rem -> 4 rem */
  }

  h1 span {
    font-size: clamp(1.7rem, 0.38rem + 6.5vw, 4.5rem); /* 1.2rem -> 4 rem */  
  }
}

@media (width >= 1000px) {
  .backgroundImage {
    background-image: linear-gradient(
        to right,
        rgba(6, 7, 14, 0.7) 40%,
        rgba(6, 7, 14, 0.2)
      ),
      url("../../assets/images/bg-home.png");
    width: 100vw;
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
  
  h1 span {
    font-size: 4.5rem; /* 1.2rem -> 4 rem */  
  }
}

</style>