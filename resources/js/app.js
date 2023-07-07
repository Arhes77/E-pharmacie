import './bootstrap';

import Alpine from 'alpinejs';

import {Carousel,Modal,Ripple, initTE,} from "tw-elements";

initTE({
    Carousel,Modal,Ripple,
});


window.Alpine = Alpine;
Alpine.start();
