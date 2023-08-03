<template>
  <div class="frame">
    <div class="imageContainer">
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
  props: ['image'],
  setup() {
  const getImageUrl = (name) => {
        return new URL(`../assets/images/parts/${name}.png`, import.meta.url).href
    }
  return { getImageUrl }
}
};
</script>

<style scoped>
@media screen and (width < 1000px) {
  .imageContainer {
    width: clamp(3.75rem, 2.22rem + 7.6vw, 7rem); /* 3.75rem -> 10rem */
    height: clamp(3.75rem, 2.22rem + 7.6vw, 7rem); /* 3.75rem -> 10rem */
  }

  .frame {
    width: clamp(7.5rem, 4.44rem + 15.2vw, 14rem); /* 7.5rem -> 20rem */
  }

  .svgFrame {
    width: clamp(5.625rem, 3.33rem + 11.4vw, 10.5rem); /* 5.625rem -> 15rem */
    height: clamp(5.625rem, 3.33rem + 11.4vw, 10.5rem); /* 5.625rem -> 15rem */
  }
}

@media screen and (width >= 1000px) {
  .imageContainer {
    width: clamp(7rem, 0.7rem + 10vw, 10rem); /* 7rem -> 10rem */
    height: clamp(7rem, 0.7rem + 10vw, 10rem); /* 7rem -> 10rem */
  }

  .frame {
    width: clamp(14rem, 1.4rem + 20vw, 20rem); /* 14rem -> 20rem */
  }

  .svgFrame {
    width: clamp(10.5rem, 1.05rem + 15vw, 15rem); /* 10.5rem -> 15rem */
    height: clamp(10.5rem, 1.05rem + 15vw, 15rem); /* 10.5rem -> 15rem */
  }
}

.imageContainer {
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
  align-items: center;

  z-index: 100;
}

.imageContainer img {
  width: 100%;
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
</style>