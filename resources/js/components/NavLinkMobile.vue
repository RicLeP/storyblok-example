<script setup>
const props = defineProps(['item']);
</script>

<template>
    <a :href="item.link" class="nav-mobile__item">{{ item.label }}</a>
</template>
