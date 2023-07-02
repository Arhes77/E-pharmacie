import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from "vue/dist/vue.esm-bundler.js"
import VueCarousel from '@chenfengyuan/vue-carousel'
import App from './App.vue';
import Dropdown from './components/Dropdown.vue';
import Logo from './components/Logo.vue';
import Caroussell from './components/Caroussell.vue';



window.Alpine = Alpine;



// 2. On importe AppComponent.vue
const app = createApp({});

app.component('App',App);
app.component('Logo',Logo);
app.component('Caroussel',Caroussell);

app.component('Dropdown',Dropdown);

app.component(VueCarousel.name='vue-carousel', VueCarousel);

app.mount("#app")

Alpine.start();
