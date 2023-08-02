<template>
  <div class="wrapper">
    <svg
      preserveAspectRatio=none
      viewBox="0 0 100 100"
      width="390"
      height="170"
    >
      <path 
        :fill=shadeColor
        d="
          M 3.15,4.69 
          L 96.43,4.69 99.58,23.94 93.28,64.31 3.15,98.59
          z"
      />
      <path
        :fill=backColor
        d="
          M 0,0 
          L 93.28,0 96.43,19.25 90.13,59.62 0,93.9
          z"
      />
    </svg>
    <span :style="{'color':fontColor}">{{ string }}</span>
  </div>
</template>

<script>
export default {
  props: ['string', 'fontColor', 'backColor', 'shadeColor'],
};
</script>

<style scoped>
@media screen and (width < 999px) {
  .wrapper {
    top: 1rem;
    margin-bottom: 1rem;
    height: 3rem;
  }
  
  svg {
    height: 3rem;
    width: 8rem;
  }

  span {
    font-size: 1rem;
    padding: 0.25rem 0 0 0.5rem;
  }
}

@media screen and (width > 1000px) {
  .wrapper {
    top: 5rem;
    margin-bottom: 5rem;
    height: 10.7rem;
  }

  span {
    font-size: 3rem;
    padding: 2rem 1rem 1.5rem 3rem;
  }

}
.wrapper {
  position: relative;
  
}

svg {
  position: absolute;
}

span {
  font-family: BebasNeue;
  
  position: absolute;
  cursor: default;
}
</style>