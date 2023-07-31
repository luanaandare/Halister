<template>
  <div id="contact">
    <TitleWrapper string="ENTRE EM CONTATO" fontColor="#ffffff" backColor="#2d2d2d" shadeColor="#d49a0e" />
    <div class="section">
      <form class="contactForm">
        <div class="inputContainer">
          <input class="halfColForm" type="text" name="name" placeholder="Nome" required="1" />
          <input class="halfColForm" type="text" name="sname" placeholder="Sobrenome" />
          <input class="halfColForm" type="mail" name="mail" placeholder="E-mail" required="1" />
          <input class="halfColForm" type="text" name="enterprise" placeholder="Empresa" />
          <textarea class="fullColForm" name="message" placeholder="Mensagem" required="1" />
        </div>
        <input class="submit" type="submit" value="ENVIAR">
      </form>
    </div>
  </div>
</template>

<script>
import TitleWrapper from "../TitleWrapper.vue";
export default {
  components: {
    TitleWrapper,
  },
};
</script>

<style scoped>
#contact {
  position: relative;
  height: 44rem;
  width: 100%;
  background-color: #f2c60f;
}

.section {
  display: flex;
  justify-content: center;
  align-items: center;
}

.contactForm {
  display: flex;
  flex-flow: column nowrap;
  justify-content: center;
  align-items: center;
}

.inputContainer {
  width: 40rem;
  position: relative;
  display: flex;
  flex-flow: row wrap;
}

.halfColForm,
.fullColForm {
  font-family: "SourceSans";
  margin: 0.75rem 0.5rem;
  padding: 1rem;
  border-radius: 0.5rem;
  border: 0px;
  
  font-size: 1rem;
}

.halfColForm {
  height: 3rem;
  width: 19rem;
}

.fullColForm {
  height: 6rem;
  width: 39rem;
  resize: none;
}

.halfColForm::placeholder,
.fullColForm::placeholder {
  font-family: "SourceSans";
  font-size: 1rem;
  color: rgba(0, 0, 0, 0.4);
}

.submit {
  font-family: "BebasNeue";
  font-size: 1.25rem;
  background-color: #f2c60f;
  border: solid 2px black;

  padding: 0.25rem 1rem;
  margin: 1rem;

  cursor: pointer;
  transition: 0.2s;
}

.submit:hover {
  background-color: #d49a0e;
}

</style>