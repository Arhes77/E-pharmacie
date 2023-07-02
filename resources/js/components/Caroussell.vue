<template>
    <vue-carousel :data="data" indicators="hover" autoplay="true"></vue-carousel>
    
  </template>
  
  <script>
  export default {
    data() {
      return {
        data: [
          '<div class="example-slide"><img class="h-15" src="images/cover/affiche3.jpg" alt=""></div>',
          '<div class="example-slide"><img class="h-15" src="images/cover/affiche2.jpg" alt=""></div>',
          '<div class="example-slide"><img class="h-15" src="images/cover/cover.jpg" alt=""></div>',
          '<div class="example-slide"><img class="h-15" src="images/cover/affiche4.jpg" alt=""></div>',
          '<div class="example-slide"><img class="h-15" src="images/cover/care.jpg" alt=""></div>',

        ],
      };
    },
  };
  </script>
  
  <style>
  .example-slide {
    align-items: center;
    display: flex;
    font-size: 1.5rem;
    justify-content: center;
    min-height: 10rem;
    max-height: 30rem;
    width: 100%;
    height: 30rem;
  }
  </style>