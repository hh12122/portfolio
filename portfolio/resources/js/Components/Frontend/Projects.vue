<template>
    <div class="container mx-auto">
        <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-100">
            <ul class="flex flex-col lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize mt-4">
                    <button
                    @click="filterProjects('all')"
                    class="felx text-center px-4 py-2 hover:text-light-tail-500 dark:hover:text-dark-navy-100"
                    :class="[
                        selectedSkill ==='all' ? 'text-light-tail-500 dark:hover:text-dark-navy-100' : ''
                    ]">
                        All
                    </button>
                </li>
                <li class="cursor-pointer capitalize mt-4"
                    v-for="projectSkill in skills.data" :key="projectSkill.id">
                    <button @click="filterProjects(projectSkill.id)"
                    :class="[
                        selectedSkill ===projectSkill.id ? 'text-light-tail-500 dark:hover:text-dark-navy-100' : ''
                    ]"
                    class="felx text-center px-4 py-2 hover:text-light-tail-500 dark:hover:text-dark-navy-100">
                        {{projectSkill.name}}
                    </button>
                </li>
            </ul>
        </nav>
        <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
            <Project v-for="project in filtredProjects" :key="project.id" :project="project"></Project>
        </section>
    </div>
</template>

<script setup>
import Project from "@/Components/Frontend/Project1.vue";
import { ref } from "vue";
const props = defineProps({
        skills:Object,
        projects:Object});
const filtredProjects = ref(props.projects.data);
const selectedSkill = ref("all");
const filterProjects= (id) =>{
    if(id==="all"){
        filtredProjects.value=props.projects.data;
        selectedSkill.value = id;
    }else{
        filtredProjects.value = props.projects.data.filter(project =>{
            return project.skill.id=id
        })
        selectedSkill.value=id;
    }
}
</script>

<style scoped lang="scss"></style>
