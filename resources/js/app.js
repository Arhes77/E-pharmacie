import './bootstrap';

import Alpine from 'alpinejs';
import { createApp } from "vue/dist/vue.esm-bundler.js"
import App from './App.vue';
import Dropdown from './components/Dropdown.vue';
import Logo from './components/Logo.vue';


window.Alpine = Alpine;



// 2. On importe AppComponent.vue
const app = createApp();

app.component('App',App);
app.component('Logo',Logo);
app.component('Dropdown',Dropdown);

app.mount("#app")

Alpine.start();
