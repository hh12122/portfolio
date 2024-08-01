<template>
    <section id="service" class="section bg-light-secondary dark:bg-dark-secondary">
         <div class="container mx-auto"
         v-motion
    :initial="{ opacity: 0, y: 100 }"
    :visible="{ opacity: 1, y: 0 }">
             <div class="flex flex-col items-center text-center">
                <h2 class="section-title">What I Offer </h2>
                <p class="subtitle">Loremazuegzegazegazehzaljhsdvsqdgzadzaq</p>
                <div class="grid lg:grid-cols-4 gap-8">
                <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 flex justify-center items-center mb-24 text-[28px]">

                    </div>
                    <h4 class="text-xl font-medium mb-2">Web Design</h4>
                    <p>rzerezrezrzerezrezrezre</p>
                </div>
                <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 flex justify-center items-center mb-24 text-[28px]">

                    </div>
                    <h4 class="text-xl font-medium mb-2">Web Design</h4>
                    <p>rzerezrezrzerezrezrezre</p>
                </div>
                <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 flex justify-center items-center mb-24 text-[28px]">

                    </div>
                    <h4 class="text-xl font-medium mb-2">Web Design</h4>
                    <p>rzerezrezrzerezrezrezre</p>
                </div>
             </div>
             </div>

         </div>
    </section>
 </template>
<script setup>
import { ref} from 'vue';

const props = defineProps({});

</script>

<style scoped lang="scss"></style>
