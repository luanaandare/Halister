<template>
  <div class="wrapper">
    <svg
      height="170.40000915527344"
      width="491.5"
    >
      <path 
        fill="#F2C60F"
        d="M 12.287500000000001,4.260000228881836 L 368.625,8.520000457763672 380.9125,42.60000228881836 356.3375,110.76000595092773 12.287500000000001,170.40000915527344 z"
      />
      <path
        fill="#626262"
        d="M 0,0 L 356.3375,0 368.625,34.08000183105469 344.04999999999995,102.24000549316406 0,161.88000869750977 z"
      />
    </svg>
    <span>{{ titulo }}</span>
  </div>
</template>

<script>
export default {
  props: ['titulo'],
};
</script>

<style scoped>
.wrapper {
  position: relative;
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

  padding: 0.75rem 1rem 1.5rem 1rem;
  position: absolute;
}
</style>