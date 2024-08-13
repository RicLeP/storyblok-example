import './bootstrap';

import { defineAsyncComponent } from 'vue'

import { createApp } from 'vue/dist/vue.esm-bundler.js';

import NavHeader from "./components/NavHeader.vue";
// import SwiperTestimonials from "./components/SwiperTestimonials.vue";

const SwiperTestimonials = defineAsyncComponent(() => import('./components/SwiperTestimonials.vue'))

const app = createApp();

app.component('nav-header', NavHeader);
app.component('swiper-testimonials', SwiperTestimonials);

app.mount('#app');


const options = {
    rootMargin: '0px',
    threshold: 0.5
}

const callback = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            let element = entry.target;

            if (entry.intersectionRatio >= 0.3) {
                element.classList.add('anim-play');
            }
        }
    });
}

const observer = new IntersectionObserver(callback, options);

const animations = document.querySelectorAll('.anim');

animations.forEach((element) => {
    observer.observe(element);
})

