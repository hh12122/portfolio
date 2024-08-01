<template>
   <section id="skill" class="bg-light-tail-100 dark:bg-dark-navy-500 py-12">
        <div class="container mx-auto">
            <div class="grid grid-cols-8 md:grod-flow-col">
                <div class="fle items-center justify-center" v-for="skill in skills.data" :key="skill.id">
                    <img :src="skill.image" :alt="skill.name" class="lg:h-20">
                </div>
            </div>
        </div>
   </section>
</template>

<script setup>
import { ref, reactive, getCurrentInstance, onMounted } from 'vue';
defineProps({
    skills:Object,
});


</script>

<style scoped lang="scss"></style>
