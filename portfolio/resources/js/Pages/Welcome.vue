<script setup>
import { Head, Link } from "@inertiajs/vue3";
import FrontedLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from "@/Components/Frontend/Promote.vue";
import About from "@/Components/Frontend/About.vue";
import Skills from "@/Components/Frontend/Skills.vue";
import Portfolio from "@/Components/Frontend/Portfolio.vue";
import Services from "@/Components/Frontend/Services.vue";
import Contact from "@/Components/Frontend/ContactMe.vue";
defineProps( {
    skills:Object,
    projects:Object,
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
        <Skills :skills="skills"></Skills>
        <!-- Portfolio primary-->
        <Portfolio :skills="skills" :projects="projects"></Portfolio>
        <!-- Services secondary-->
        <Services></Services>
        <!-- Contact primary-->
        <Contact></Contact>

    </FrontedLayout>


</template>
