<script setup>
import { Head, Link } from "@inertiajs/vue3";
import FrontedLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from "@/Components/Frontend/Promote.vue";
import About from "@/Components/Frontend/About.vue";

defineProps( {
    skills:Object,
})

</script>

<template>
    <Head title="Welcome to portfolio"  />
    <FrontedLayout>

        <!-- Hero primary-->
        <Hero></Hero>
        <!-- Promote tail-100-->
        <Promote></Promote>
        <!-- About secondary-->
        <About></About>
        <!-- Skills tail-100-->
        <!-- Portfolio primary-->
        <!-- Services secondary-->
        <!-- Contact primary-->

    </FrontedLayout>


</template>
