<template>
    <Link :href="project.project_url" target="_blank" rel="noopener noreferrer" class="group flex flex-col items-center text-center cursor-pointer"
    v-motion
    :initial="{ opacity: 0, y: 100 }"
    :visible="{ opacity: 1, y: 0 }" >
    <div class="mb-6">
        <img class="rounded-2xl h-56" :src="project.image" :alt="project.name">
    </div>
    <span class="group-hover:text-light-tail-500
    capitalize text-accent text-sm mb-3" >
    {{ project.skill.name }}
    </span>
    <h3 class="group-hover:text-light-tail-500
    text-2xl font-semibold mb-3"> {{ project.name }}</h3>
</Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
 defineProps({
    project:Object
 });
</script>

<style scoped lang="scss"></style>
