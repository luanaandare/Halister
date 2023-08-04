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
@media screen and (width < 1000px) {
  
  #contact {
    height: clamp(20rem, 8.7rem + 56.5vw, 44rem); /* 20rem -> 44rem */
    scroll-margin-top: 4.5rem;
  }

  .inputContainer {
    margin-top: clamp(1rem, -0.88rem + 9.4vw, 5rem);
    width: clamp(15rem, 3.24rem + 58.8vw, 40rem); /* 15rem -> 40rem */
  }
  
  .halfColForm {
    height: clamp(1.5rem, 0.8rem + 3.5vw, 3rem); /* 1.5rem -> 3rem */
    width: clamp(7rem, 1.3rem + 28.2vw, 19rem); /* 7rem -> 19rem */
  }

  .fullColForm {
    height: clamp(6rem, 4.12rem + 9.4vw, 10rem); /* 6rem -> 10rem*/
    width: clamp(14.5rem, 2.97rem + 57.6vw, 39rem); /* 14.5rem -> 39rem */
    resize: none;
  }
  
  .halfColForm,
  .fullColForm {
    margin:
      clamp(0.125rem, 0.17rem + 1.4vw, 0.75rem)
      clamp(0.25rem, 0.13rem + 0.6vw, 0.5rem); /* 0.125rem 0.25rem -> 0.75rem 0.5rem */
    padding: clamp(0.5rem, 0.26rem + 1.1vw, 1rem); /* 0.5rem -> 1rem */
    border-radius: clamp(0.25rem, 0.13rem + 0.6vw, 0.5rem); /* 0.25rem -> 0.5rem */
    border: 0px;
    
    font-size: clamp(0.8rem, 0.7rem + 0.47vw, 1rem); /* 0.8rem -> 1rem */
  }
  
  .halfColForm::placeholder,
  .fullColForm::placeholder {
    font-size: clamp(0.8rem, 0.7rem + 0.47vw, 1rem); /* 0.8rem -> 1rem */
  }
  
  .submit {
    font-size: clamp(1rem, 0.89rem + 0.5vw, 1.25rem); /* 1rem -> 1.25rem */
  }
}

@media screen and (width >= 1000px) {
  #contact {
    height: 44rem;
  }

  .inputContainer {
    width: 40rem;
  }
  
  .halfColForm {
    height: 3rem;
    width: 19rem;
  }

  .fullColForm {
    height: 10rem;
    width: 39rem;
    resize: none;
  }
  
  .halfColForm,
  .fullColForm {
    margin: 0.75rem 0.5rem;
    padding: 1rem;
    border-radius: 0.5rem;
    border: 0px;
    
    font-size: 1rem;
  }
  
  .halfColForm::placeholder,
  .fullColForm::placeholder {
    font-size: 1rem;
  }
  
  .submit {
    font-size: 1.25rem;
  }
}
#contact {
  position: relative;
  width: 100vw;
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
  position: relative;
  display: flex;
  flex-flow: row wrap;
}

.halfColForm,
.fullColForm {
  font-family: "SourceSans";
}

.fullColForm {
  resize: none;
}

.halfColForm::placeholder,
.fullColForm::placeholder {
  font-family: "SourceSans";
  color: rgba(0, 0, 0, 0.4);
}

.submit {
  font-family: "BebasNeue";
  background-color: #f2c60f;
  border: solid 2px black;

  cursor: pointer;
  transition: 0.2s;
  padding: 0.25rem 1rem;
  margin: 1rem;
}

.submit:hover {
  background-color: #d49a0e;
}

</style>