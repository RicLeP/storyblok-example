<script setup>
import { useSlots } from "vue";

import { Swiper, SwiperSlide } from 'swiper/vue';
import {Autoplay, Navigation, Pagination} from "swiper/modules";
import 'swiper/css';
import "swiper/css/navigation";
import "swiper/css/pagination";

const slots = useSlots();

const modules = [Autoplay, Navigation, Pagination];
</script>

<template>
    <div class="testimonials">
        <div class="testimonials-controls">
            <img class="swiper-button testimonials-controls__prev testimonials-prev" src="/img/arrow-left.svg" alt="Previous testimonial">
            <img class="swiper-button testimonials-controls__next testimonials-next" src="/img/arrow-right.svg" alt="Next testimonial">
        </div>

        <swiper
            :autoplay="{
                delay: 5000,
            }"
            :loop="true"
            :modules="modules"
            :navigation="{
                prevEl: '.testimonials-prev',
                nextEl: '.testimonials-next'
            }"
            :space-between="32"
        >
            <swiper-slide v-for="(slide, key) in slots.slides()">
                <component :is="slide" />
            </swiper-slide>
        </swiper>
    </div>
</template>

<style lang="pcss">
    .testimonials {
        position: relative;
    }

    .testimonials-controls {
        display: flex;

        justify-content: end;

        gap: 50px;

        margin-bottom: 40px;
    }

    .testimonials-prev {
        cursor: pointer;

        @media all and (min-width: 1000px) {
            position: absolute;
            left: -13%;
        }
    }

    .testimonials-next {
        cursor: pointer;

        @media all and (min-width: 1000px) {
            position: absolute;
            right: -13%;
        }
    }
</style>
