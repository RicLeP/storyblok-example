<template>
    <div  class="nav-mobile" :class="{ 'nav-mobile--hidden': hideNav }">
        <button @click="openNav" class="nav-mobile__toggle">
            <img src="/img/burger-menu.svg" alt="Open menu">
        </button>

        <Transition>
            <nav class="nav-mobile__nav" v-if="navOpen">
                <div class="nav-mobile__nav-header">
                    <button @click="openNav" class="nav-mobile__toggle">
                        <img src="/img/cross.svg" alt="Close menu">
                    </button>
                </div>

                <template v-for="item in props.nav">
                    <component
                        :is="components[item.component + 'Mobile']"
                        :item="item"
                    ></component>
                </template>
            </nav>
        </Transition>
    </div>
</template>

<script setup>
import { onMounted, reactive, ref } from 'vue';
import NavLinkMobile from "./NavLinkMobile.vue";
import debounce from 'lodash.debounce'

const props = defineProps(['nav']);

// allows accessing components by string
const components = {
    NavLinkMobile: NavLinkMobile,
};

let lastScrollPosition = ref(0);
let hideNav = ref(false);
let navOpen = ref(false);

function openNav() {
    navOpen.value = !navOpen.value;
}

onMounted(() => {
    window.addEventListener('scroll', debounce(() => {onScroll()}, 50))
});

function onScroll() {
    const currentScrollPosition = window.scrollY || document.documentElement.scrollTop;

    if (navOpen.value) {
        return
    }

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

<style>
.v-enter-active,
.v-leave-active {
    transition: transform 0.3s ease;
    transform: translate3d(0, 0, 0);
}

.v-enter-from,
.v-leave-to {
    transform: translate3d(100%, 0, 0);
}
</style>
