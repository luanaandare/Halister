<template>
  <div class="frame">
    <div class="imageContainer">
      <p>{{ string1 }}</p>
      <p>{{ string2 }}</p>
      <img :src="getImageUrl(image)" />
    </div>
    <svg
      class="svgFrame"
      preserveAspectRatio=none
      viewBox="0 0 100 100"
      style="transition: none 0s ease 0s;"
    >
      <path
        d="
          M 9.06,0
          L 95.47,0.32 100,69.91 97.40,93.52 11,93.52 6.47,69.91
          z
        "
        style="transition: none 0s ease 0s;
        fill: #f2c60f;"
      ></path>
      <path
        d="
          M 2.59,6.47
          L 89,6.79 93.52,76.38 90.93,100 4.53,100 0,76.38
          z
        "
        style="transition: none 0s ease 0s;
        fill: #ffffff;"
      ></path>
    </svg>
  </div>
</template>

<script>
export default {
  props: ['image', 'string1', 'string2'],
  setup() {
  const getImageUrl = (name) => {
        return new URL(`../assets/images/parts/${name}.jpeg`, import.meta.url).href
    }
  return { getImageUrl }
}
};
</script>

<style scoped>
.imageContainer {
  display: flex;
  flex-flow: column nowrap;
  justify-content: center;
  align-items: flex-end;

  z-index: 100;
}

p {
  text-align: end;
  font-family: "BebasNeue";
  cursor: default;
  color: #d49a0e;
}

.frame {
  position: relative;
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
  align-items: center;
}

.svgFrame {
  position: absolute;
}

@media (width < 1000px) {
  .imageContainer img {
    width: clamp(3.25rem, 1.97rem + 7.6vw, 6.5rem); /* 3.75rem -> 10rem */
    height: clamp(3.25rem, 1.97rem + 7.6vw, 6.5rem); /* 3.75rem -> 10rem */
  }

  p {
    max-width: clamp(5.625rem, 3.33rem + 11.4vw, 10.5rem); /* 5.625rem -> 15rem */
    font-size: 0.6rem;
  }

  .frame {
    width: clamp(6rem, 2.94rem + 15.2vw, 12.5rem); /* 7.5rem -> 20rem */
  }

  .svgFrame {
    width: clamp(5.625rem, 3.33rem + 11.4vw, 10.5rem); /* 5.625rem -> 15rem */
    height: clamp(5.625rem, 3.33rem + 11.4vw, 10.5rem); /* 5.625rem -> 15rem */
  }
}

@media (width >= 1000px) {
  .imageContainer {
    height: clamp(10.5rem, 1.05rem + 15vw, 15rem); /* 10.5rem -> 15rem */ 
  }
  
  p {
    max-width: clamp(10.5rem, 1.05rem + 15vw, 15rem); /* 10.5rem -> 15rem */
    font-size: clamp(0.9rem, 0.57rem + 0.5vw, 1.2rem);
  }

  .imageContainer  img {
    object-fit: contain;
    width: clamp(6.5rem, 0.2rem + 10vw, 9.5rem); /* 7rem -> 10rem */
    height: clamp(6.5rem, 0.2rem + 10vw, 9.5rem); /* 7rem -> 10rem */
  }

  .frame {
    width: clamp(14rem, 1.4rem + 20vw, 20rem); /* 14rem -> 20rem */
  }

  .svgFrame {
    width: clamp(10.5rem, 1.05rem + 15vw, 15rem); /* 10.5rem -> 15rem */
    height: clamp(10.5rem, 1.05rem + 15vw, 15rem); /* 10.5rem -> 15rem */
  }
}

</style>