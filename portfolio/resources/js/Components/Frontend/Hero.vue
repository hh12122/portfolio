<template>
<section id="home" class="lg:h-[85vh] flex items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-0 overflow-hidden">
<div class="container mx-auto h-full"
v-motion
    :initial="{ opacity: 0, y: 100 }"
    :visible="{ opacity: 1, y: 0 }">
   <div class="flex flex-col md:flex-row items-center h-full pt-8">
        <div class="flex-1 flex flex-col items-center lg:items-start">
            <p class="text-lg text-accent text-md mb-[22px]">Hey I'am Hocine</p>
            <h1 class="text-4xl leading-[44px] md:text-5xl md:leading-tight lg:text-7xl lg:leading-[1.2] font-bold md:tracking-[-2px]">
                I build & Maintain <br> Web App
            </h1>
            <p class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg text-center lg:text-left">
                Passionate On Web technologies
            </p>
            <a href="#contact"  class="btn btn-md bg-accent dark:bg-dark-secondary dark:hover:text-dark-navy-100 hover:bg-light-secondary hover:text-light-tail-500  md:btn-lg transition-all">
                Work with me</a>

        </div>
        <div class=" flex  flex-1 justify-end  h-full items-center mt-8 md:mt-0">
            <img src="http://localhost:8000/img/hero.jpg" alt="Hero" class="rounded-lg"/>
        </div>
    </div>
</div>
</section>
</template>

<script setup>

</script>

<style lang="scss" scoped>

</style>e
