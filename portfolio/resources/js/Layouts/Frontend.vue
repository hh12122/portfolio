<script setup>
import HeaderView from '@/Components/Frontend/Header.vue';
import FooterView from '@/Components/Frontend/Footer.vue';
</script>
<template>
    <div class="bg-slate-200 dark:bg-slate-900">

        <HeaderView></HeaderView>
        <main class="min-h-screen">
            <slot />

        </main>
<FooterView></FooterView>
    </div>
</template>



<style lang="scss" scoped>

</style>
