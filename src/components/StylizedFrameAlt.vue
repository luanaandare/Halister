<template>
  <div class="frame">
    <div class="imageContainer">
      <img :src="getImageUrl(image)" />
    </div>
    <svg
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
        fill: #f2c60f;"
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

.imageContainer {
  width: 10rem;
  height: 10rem;
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
  width: 20rem;
  display: flex;
  flex-flow: row nowrap;
  justify-content: center;
  align-items: center;
}

svg {
  position: absolute;
  width: 15rem;
  height: 15rem;
}
</style>