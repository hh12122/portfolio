<template>
<footer>
    <div class="bg-light-secondary dark:bg-dark-secondary py-12">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row space-y-6 lg:space-y-0 items-center justify-between">
                <p class="text-paragraph opacity-80 text-[15px]">
                &copy; {{ currentTime }} year All right reserved
            </p>
            </div>

        </div>
    </div>
</footer>
</template>

<script setup>
import { ref } from 'vue';

// Define a reactive ref for time
const currentTime = ref(new Date().getFullYear());


</script>

<style lang="scss" scoped>

</style>
