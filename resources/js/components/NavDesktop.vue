<template>
    <div  class="nav-desktop">
        <nav class="nav-desktop__nav" :class="{ 'nav-desktop__nav--hidden': hideNav }">
            <template v-for="item in props.nav">
                <component
                    :is="components[item.component + 'Desktop']"
                    :item="item"
                ></component>
            </template>
        </nav>
    </div>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import NavLinkDesktop from "./NavLinkDesktop.vue";
import debounce from 'lodash.debounce'

const props = defineProps(['nav']);

// allows accessing components by string
const components = {
    NavLinkDesktop: NavLinkDesktop,
};

let lastScrollPosition = ref(0);
let hideNav = ref(false);


onMounted(() => {
    window.addEventListener('scroll', debounce(() => {onScroll()}, 50))
});

function onScroll() {
    const currentScrollPosition = window.scrollY || document.documentElement.scrollTop;

    if (currentScrollPosition < 0) {
        return
    }

    if (Math.abs(currentScrollPosition - lastScrollPosition) < 100) {
        return
    }

    hideNav.value = currentScrollPosition > lastScrollPosition;
    lastScrollPosition = currentScrollPosition;
}
</script>
