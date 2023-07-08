import './bootstrap';

import Alpine from 'alpinejs';

import {Carousel,Modal,Ripple,Dropdown,Collapse,initTE,} from "tw-elements";

initTE({
    Carousel,Modal,Ripple, Dropdown,Collapse,
});


window.Alpine = Alpine;
Alpine.start();
