<template>
<section id="about" class="section bg-light-secondary dark:bg-dark-secondary" >
    <div class="container mx-auto"
    v-motion
    :initial="{ opacity: 0, y: 100 }"
    :visible="{ opacity: 1, y: 0 }">

<div class="flex flex-col xl:flex-row gap-24">
<img src="http://localhost:8000/img/about.jpg" alt="about"
class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl " >
<div class="flex flex-col items-center text-center lg:items-start lg:text-left ">
    <div class="flex flex-col">
            <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3" >
                About Me
            </h2>
            <p class="mb-4 text-accent " >Developer</p>
            <hr class="mb-8 opacity-90 dark:opacity-5" >
            <p calss="mb-8">paeaze</p>
    </div>
    <button href="#contact" class="btn btn-md bg-accent text-slate-200 text-light-tail-100">
        Contact me
    </button>
</div>
</div>
</div>
</section>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>
