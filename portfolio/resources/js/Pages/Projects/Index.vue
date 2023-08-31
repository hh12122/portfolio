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
    props: {},

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
