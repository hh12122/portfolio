<template>
    <Head title="Projects" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pojects</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               <div class="flex justify-end m-2 p_2">
                <Link
                :href="route('projects.create')"
                class="px-4
                px-2
                bg-indigo-500
                hover:bg_indego-700
                text-white
                rounded-md"
                >New Project</Link>
               </div>
               <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                  ID
                </th>
                <th scope="col" class="px-6 py-3">
                  Name
                </th>
                <th scope="col" class="px-6 py-3">
                 Url
                </th>
                <th scope="col" class="px-6 py-3">
                 Skill
                </th>
                <th scope="col" class="px-6 py-3">
                   Image
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"  v-for="project in projects.data" :key="project.id">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   {{project.id}}
                </th>
                <td class="px-6 py-4">
                    {{project.name}}
                </td><td class="px-6 py-4">
                    {{project.project_url}}
                </td>
                <td class="px-6 py-4">
                    {{project.skill.name}}
                </td>
                <td class="px-6 py-4" >
                  <img :src="project.image" class="h-12 w-12 rounded-full" >
                </td>
                <td class="px-6 py-4">
                    <Link
                                        :href="route('projects.edit', project.id)"

                                        class="font-medium text-green-500 hover:text-red-700 mr-2"
                                    >Edit</Link>
                                    <Link
                                        :href="route('projects.destroy', project.id)"
                                        method="delete"
                                        as="button"
                                        type="button"
                                        class="font-medium text-red-500 hover:text-red-700 mr-2"
                                    >Delete</Link>
                </td>
            </tr>

        </tbody>
    </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
export default {
    name: '',
    data() {
        return {};
    },
    props: {projects:Object},

    components: {AuthenticatedLayout,Head, Link},

    created() {},

    mounted() {},

    beforeDestroy() {},

    methods: {},

    computed: {},

    watch: {},

    directives: {},

    filters: {}
};
</script>

<style scoped lang="scss"></style>
