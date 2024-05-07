<template>
  <div id="contact">
    <Transition name="fade">
      <AlertMessage v-if="alertVisible == 1" :fechar="fecharModal" />
    </Transition>
    <TitleWrapper string="ENTRE EM CONTATO" fontColor="#ffffff" backColor="#2d2d2d" shadeColor="#701710" />
    <div class="section">
      <form class="contactForm" @submit.prevent="sendMail">
        <div class="inputContainer">
          <input name="Nome" class="halfColForm" type="text" v-model="name" placeholder="Nome" required="1" />
          <input name="Sobrenome" class="halfColForm" type="text" v-model="sname" placeholder="Sobrenome" />
          <input name="E-mail" class="halfColForm" type="mail" v-model="mail" placeholder="E-mail" required="1" />
          <input name="Empresa" class="halfColForm" type="text" v-model="enterprise" placeholder="Empresa" />
          <textarea name="Mensagem" class="fullColForm" v-model="message" placeholder="Mensagem" required="1" />
        </div>
        <input class="submit" type="submit" value="ENVIAR">
      </form>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';
import TitleWrapper from "../TitleWrapper.vue";
import AlertMessage from "../AlertMessage.vue";
import axios from 'axios';

export default {
  components: {
    TitleWrapper,
    AlertMessage,
  },
  data() {
    return {
      name: '',
      sname: '',
      mail: '',
      enterprise: '',
      message: '',
    }
  },
  setup() {
    const alertVisible = ref(0);
    const fecharModal = () => {
      alertVisible.value = 0;
    };

    return { fecharModal, alertVisible };
  },
  methods: {
    async sendMail() {
      try {
        const form = JSON.stringify({
          name: this.name,
          sname: this.sname,
          mail: this.mail,
          enterprise: this.enterprise,
          message: this.message
        });
        axios
          .post('php/mailer.php', form)
          .then((res) => {
            if(res.status == 200) {
              this.name = '';
              this.sname = '';
              this.mail = '';
              this.enterprise = '';
              this.message = '';
              this.alertVisible = 1;
            }
          });
      } catch (error) {
        console.error('Error fetching message:', error);
      }
    },
  },
};
</script>

<style scoped>
#contact {
  position: relative;
  width: 100vw;
  background-color: #bc0000;
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
  font-family: "MontSerrat", sans-serif;
}

.fullColForm {
  resize: none;
}

.halfColForm::placeholder,
.fullColForm::placeholder {
  font-family: "MontSerrat", sans-serif;
  color: rgba(0, 0, 0, 0.4);
}

.submit {
  font-family: "BebasNeue", sans-serif;
  color: var(--havi-theme-darkerred);
  text-transform: uppercase;
  background-color: #bc0000;
  border: solid 2px var(--havi-theme-darkerred);

  cursor: pointer;
  transition: 0.2s;
  padding: 0.25rem 1rem;
  margin: 1rem;
}

.submit:hover {
  background-color: var(--havi-theme-darkred);
  color: var(--havi-theme-red);
}

@media (width < 1000px) {
  
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
    width: clamp(6rem, 0.82rem + 25.8vw, 17rem); /* 6rem -> 17rem */
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
    padding: 0 clamp(0.5rem, 0.26rem + 1.1vw, 1rem); /* 0.5rem -> 1rem */
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

@media (width >= 1000px) {
  #contact {
    height: 44rem;
  }

  .inputContainer {
    width: 40rem;
  }
  
  .halfColForm {
    height: 3rem;
    width: 17rem;
  }

  .fullColForm {
    height: 10rem;
    width: 37rem;
    resize: none;
  }
  
  .halfColForm,
  .fullColForm {
    margin: 0.75rem 0.5rem;
    border-radius: 0.5rem;
    padding: 0 1rem;
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

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}


</style>