<template>
    <section id="portfolio" class="section bg-light-tail-100 dark:bg-dark-primary min-h-[1400px]">
         <div class="container mx-auto"
         v-motion
    :initial="{ opacity: 0, y: 100 }"
    :visible="{ opacity: 1, y: 0 }">
             <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My latest work</h2>
                <p class="subtitle">Loremazuegzegazegazehzaljhsdvsqdgzadzaq</p>

             </div>

         </div>
         <Projects :skills="skills" :projects="projects" ></Projects>
    </section>
 </template>


<script setup>

defineProps({
    skills:Object,
    projects:Object
});
import Projects from "@/Components/Frontend/Projects.vue";
</script>

<style scoped lang="scss"></style>
