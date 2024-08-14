<script setup>
import { RouterView } from 'vue-router'

</script>

<template>
  <RouterView />
</template>

<style>
/* color palette from <https://github.com/vuejs/theme> */
:root {
  --halister-theme-white: #ffffff;
  --halister-theme-lightgray: #626262;
  --halister-theme-darkgray: #2d2d2d;
  --halister-theme-yellow: #f2c60f;
  --halister-theme-darkyellow: #d49a0e;
  --havi-theme-white: #ffffff;
  --havi-theme-red: #bc0000;
  --havi-theme-darkred: #701710;
  --havi-theme-darkerred: #330a07;

  --color-text-dark: var(--halister-theme-darkgray);
  --color-text-light: var(--halister-theme-white);
  --color-highlight: var(--halister-theme-yellow);
  --color-background: var(--halister-theme-darkgray);
}


::-webkit-scrollbar {
  background-color: #2d2d2d;
  width: 0.5rem;
}

::-webkit-scrollbar-thumb {
  background-color: #626262;
  border-radius: 7px;
}

* {
  margin: 0;
  scroll-behavior: smooth;
  max-width: 100vw;
}

@font-face {
    font-family: "BebasNeue";
    src: url('assets/fonts/bebasneue-regular-webfont.eot');
    src: url('assets/fonts/bebasneue-regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('assets/fonts/bebasneue-regular-webfont.woff2') format('woff2'),
         url('assets/fonts/bebasneue-regular-webfont.woff') format('woff'),
         url('assets/fonts/bebasneue-regular-webfont.svg#bebas_neueregular') format('svg');
    font-weight: normal;
    font-style: normal;

}

@font-face {
    font-family: 'SourceSans';
    src: url('assets/fonts/sourcesans-webfont.eot');
    src: url('assets/fonts/sourcesans-webfont.eot?#iefix') format('embedded-opentype'),
         url('assets/fonts/sourcesans-webfont.woff2') format('woff2'),
         url('assets/fonts/sourcesans-webfont.woff') format('woff'),
         url('assets/fonts/sourcesans-webfont.svg#source_sans_3regular') format('svg');
    font-weight: normal;
    font-style: normal;

}
/*
@font-face {
  font-family: "BebasNeue";
  src: url("assets/fonts/BebasNeue.ttf") format("truetype");
}

@font-face {
  font-family: "SourceSans";
  src: url("./assets/fonts/SourceSans.ttf") format("truetype");
}
*/
/*
@font-face {
  font-family: "SourceSans";
  src: url("assets/fonts/montserrat.ttf");
}

@font-face {
  font-family: "BebasNeue";
  src: url("assets/fonts/montserrat.ttf");
}
*/
body {
  min-height: 100vh;
  overflow-x: hidden;
  position: relative;
  background: var(--halister-theme-darkgray);
  transition: color 0.5s, background-color 0.5s;
  line-height: 1.6;
  font-family: "MontSerrat", sans-serif;
  font-size: 1rem;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>