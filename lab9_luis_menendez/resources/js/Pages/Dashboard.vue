<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Lista from "../Components/Lista.vue";
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Items
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!--CARDS-->
                    <v-col cols="12" xl="12" lg="12" md="12" sm="12" xs="12">
                        <Lista></Lista>
                    </v-col>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
