<template>
  <div class="pageOverlay"  @click="this.fechar()">
    <div class="messageBox">
      <img src="../assets/halister-logos/h-light.png" />
      <p>Mensagem enviada com sucesso, entraremos em contato em breve!</p>
      <button class="close" @click="this.fechar()">Fechar</button>
    </div>
  </div>
</template>

<script>
export default {
  props: ['fechar'],
};
</script>

<style scoped>
.pageOverlay {
  transition: 0.2s;
  position: fixed;
  backdrop-filter: blur(5px);
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 1500;

  display: flex;
  justify-content: center;
  align-items: center;
}

.messageBox {
  position: relative;
  font-family: BebasNeue;
  font-size: 2rem;
  background-color: var(--color-background);
  color: var(--color-text-light);
  padding: 2rem 1rem 1rem 1rem;
  display: flex;
  flex-flow: column nowrap;
  justify-content: center;
  align-items: center;
  text-align: center;
}

img {
  position: absolute;
  top: 0.5rem;
  right: 0.5rem;
  width: 5rem;
}
.close {
  font-family: "BebasNeue";
  background-color: #f2c60f;
  border: solid 2px black;

  cursor: pointer;
  transition: 0.2s;
  padding: 0.25rem 1rem;
  margin: 1rem;
  width: 5rem;
}

.close:hover {
  background-color: #d49a0e;
}
</style>

