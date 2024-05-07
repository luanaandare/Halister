<template>
  <div class="frame">
    <div class="imageContainer">
      <img :src="getImageUrl(image)" />
      <p>{{ string1 }}</p>
      <p>{{ string2 }}</p>
    </div>
    <svg
      class="svgFrame"
      preserveAspectRatio=none
      viewBox="0 0 100 100"
      style="transition: none 0s ease 0s;"
    >
      <path
        d="
          M 2.59,6.47
          L 89,6.79 93.52,76.38 90.93,100 4.53,100 0,76.38
          z
        "
        style="transition: none 0s ease 0s;
        fill: #701710;"
      ></path>
      <path
        d="
          M 9.06,0
          L 95.47,0.32 100,69.91 97.40,93.52 11,93.52  6.47,69.91
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
  align-items: flex-start;

  z-index: 100;
}

p {
  max-width: clamp(10.5rem, 1.05rem + 15vw, 15rem); /* 10.5rem -> 15rem */
  font-size: clamp(0.9rem, 0.57rem + 0.5vw, 1.2rem);
  text-align: end;
  cursor: default;
  font-family: "BebasNeue", sans-serif;
  text-transform: uppercase;
  color: var(--havi-theme-darkred);
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
  .imageContainer {
    height: clamp(5rem, 2.4rem + 12.9vw, 10.5rem); /* 5rem -> 10.5rem */
  }

  .imageContainer img {
    object-fit: contain;
    width: clamp(5rem, 4.3rem + 3.5vw, 6.5rem); /* 5rem -> 6.5rem */
    height: clamp(5rem, 4.3rem + 3.5vw, 6.5rem); /* 5rem -> 6.5rem */
  }

  p {
    max-width: clamp(5.625rem, 3.33rem + 11.4vw, 10.5rem); /* 5.625rem -> 15rem */
    font-size: 0.6rem;
  }

  .frame {
    width: clamp(10rem, 8.1rem + 9.4vw, 14rem); /* 10rem -> 14rem */
  }

  .svgFrame {
    width: clamp(8rem, 6.8rem + 5.8vw, 10.5rem); /* 8rem -> 10.5rem */
    height: clamp(8rem, 6.8rem + 5.8vw, 10.5rem); /* 8rem -> 10.5rem */
  }
}

@media (width >= 1000px) {
  .imageContainer {
    height: clamp(10.5rem, 1.05rem + 15vw, 15rem); /* 10.5rem -> 15rem */ 
  }

  .imageContainer img {
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