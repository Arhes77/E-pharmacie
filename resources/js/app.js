import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from "vue/dist/vue.esm-bundler.js"
import VueCarousel from '@chenfengyuan/vue-carousel'
import Caroussell from './components/Caroussell.vue';



window.Alpine = Alpine;
Alpine.start();

// 2. On importe AppComponent.vue
const app = createApp({});
app.component('Caroussel',Caroussell);
app.component(VueCarousel.name='vue-carousel', VueCarousel);
app.mount("#app");

