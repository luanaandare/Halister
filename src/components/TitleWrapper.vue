<template>
  <div class="wrapper">
    <svg
      preserveAspectRatio=none
      viewBox="0 0 100 100"
      width="390"
      height="170"
    >
      <path 
        :fill=color1
        d="
          M 3.15,4.69 
          L 96.43,4.69 99.58,23.94 93.28,64.31 3.15,98.59
          z"
      />
      <path
        :fill=color2
        d="
          M 0,0 
          L 93.28,0 96.43,19.25 90.13,59.62 0,93.9
          z"
      />
    </svg>
    <span>{{ string }}</span>
  </div>
</template>

<script>
export default {
  props: ['string', 'color1', 'color2'],
};
</script>

<style scoped>
.wrapper {
  position: relative;
  top: 5rem;
  margin-bottom: 5rem;
  height: 10.7rem;
  width: 100%;
}

svg {
  position: absolute;
}

span {
  font-family: BebasNeue;
  font-size: 3rem;
  color: white;

  padding: 2rem 1rem 1.5rem 3rem;
  position: absolute;
}
</style>