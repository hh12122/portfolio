<template>
    <section id="service" class="section bg-light-secondary dark:bg-dark-secondary">
         <div class="container mx-auto"
         v-motion
    :initial="{ opacity: 0, y: 100 }"
    :visible="{ opacity: 1, y: 0 }">
             <div class="flex flex-col items-center text-center">
                <h2 class="section-title">What I Offer </h2>
                <p class="subtitle">I provide a range of services to help businesses and individuals build,
                    optimize, and grow their digital presence.</p>
                <div class="grid lg:grid-cols-3 gap-8">
                <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 flex justify-center items-center mb-7 text-[28px]">
                        <svg viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.7280000000000002"></g><g id="SVGRepo_iconCarrier"> <path d="M15.5 15L18.5 12L15.5 9M8.5 9L5.5 12L8.5 15M13 7L11 17M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke="#000000" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>
                    <h4 class="text-xl font-medium mb-2">Web Development</h4>
                    <p>Custom-built websites and web applications tailored to your business needs.</p>
                </div>
                <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 flex justify-center items-center mb-7 text-[28px]">
                        <svg fill="#000000"  viewBox="-1.9 -1.9 22.80 22.80" xmlns="http://www.w3.org/2000/svg" class="cf-icon-svg" transform="matrix(1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16.417 9.579A7.917 7.917 0 1 1 8.5 1.662a7.917 7.917 0 0 1 7.917 7.917zM4.63 8.182l2.45-2.449-.966-.966a.794.794 0 0 0-1.12 0l-1.329 1.33a.794.794 0 0 0 0 1.12zm8.23 5.961c.13 0 .206-.1.173-.247l-.573-2.542a1.289 1.289 0 0 0-.292-.532l-4.53-4.53-.634.636 4.529 4.529.252-.252a.793.793 0 0 1 .147.268l.253 1.124-.69.69-1.125-.252a.799.799 0 0 1-.268-.148l.871-.87-4.53-4.53L5.19 8.742l4.53 4.528a1.294 1.294 0 0 0 .533.293l2.542.573a.3.3 0 0 0 .066.008z"></path></g></svg>
                    </div>
                    <h4 class="text-xl font-medium mb-2">UI/UX Design</h4>
                    <p>Creating modern, user-friendly interfaces that enhance user experience.</p>
                </div>
                <div class="bg-light-tail-100 dark:bg-dark-navy-500 p-6 rounded-2xl">
                    <div class="text-accent rounded-sm w-12 flex justify-center items-center mb-7 text-[28px]">
                        <svg fill="#000000" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="7935ec95c421cee6d86eb22ecd133f51"> <path style="display: inline;" d="M0.513,255.987c0,101.127,58.76,188.531,144.006,229.938L22.645,152.016 C8.472,183.779,0.513,218.96,0.513,255.987z M428.476,243.101c0-31.588-11.341-53.446-21.06-70.45 c-12.949-21.059-25.088-38.874-25.088-59.92c0-23.492,17.803-45.349,42.891-45.349c1.148,0,2.221,0.137,3.307,0.199 C383.089,25.938,322.521,0.5,256,0.5c-89.263,0-167.784,45.798-213.47,115.149c6.001,0.2,11.652,0.325,16.443,0.325 c26.723,0,68.104-3.244,68.104-3.244c13.76-0.823,15.395,19.412,1.634,21.046c0,0-13.848,1.622-29.243,2.42l93.042,276.747 l55.903-167.685l-39.797-109.062c-13.773-0.798-26.798-2.42-26.798-2.42c-13.761-0.824-12.151-21.87,1.622-21.046 c0,0,42.18,3.244,67.293,3.244c26.71,0,68.092-3.244,68.092-3.244c13.773-0.823,15.395,19.412,1.622,21.046 c0,0-13.86,1.622-29.23,2.42l92.332,274.638l25.487-85.134C421.988,292.491,428.476,264.957,428.476,243.101z M260.491,278.331 l-76.662,222.765C206.722,507.819,230.937,511.5,256,511.5c29.768,0,58.299-5.14,84.847-14.484c-0.674-1.098-1.31-2.258-1.821-3.53 L260.491,278.331z M480.199,133.427c1.098,8.134,1.722,16.867,1.722,26.261c0,25.924-4.866,55.08-19.425,91.509l-78.035,225.621 c75.952-44.289,127.026-126.565,127.026-220.831C511.487,211.574,500.135,169.806,480.199,133.427z"> </path> </g> </g></svg>
                    </div>
                    <h4 class="text-xl font-medium mb-2">Wordpress</h4>
                    <p>Custom themes, plugins, and website optimization for WordPress.</p>
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
