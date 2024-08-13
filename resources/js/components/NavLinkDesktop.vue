<script setup>
const props = defineProps(['item']);
</script>

<template>
    <a :href="item.link" class="nav-desktop__item" :class="{ 'nav-desktop__item--active': item.active }">{{ item.label }}</a>
</template>
