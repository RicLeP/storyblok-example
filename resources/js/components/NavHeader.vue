<template>
    <component :is="state.isMobile ? NavMobile : NavDesktop" :nav="props.nav"></component>
</template>

<script setup>
import { reactive } from 'vue'
import NavMobile from "./NavMobile.vue";
import NavDesktop from "./NavDesktop.vue";

const props = defineProps(['nav']);

const state = reactive({
    isMobile: false
})

const ro = new ResizeObserver((entries, observer) => {
    state.isMobile = !window.matchMedia('(min-width: 720px)').matches;
});

ro.observe(document.body);
</script>
