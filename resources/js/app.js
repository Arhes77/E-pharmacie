import './bootstrap';

import Alpine from 'alpinejs';

import {Carousel,Modal,Ripple,Dropdown,Chip,initTE,} from "tw-elements";

initTE({
    Carousel,Modal,Ripple, Dropdown,Chip,
});


window.Alpine = Alpine;
Alpine.start();
