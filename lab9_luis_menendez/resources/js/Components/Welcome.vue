<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Lista from './Lista.vue';
import { VRow, VCol, VImg, VCardTitle, VCardText, VCardActions, VBtn, VTextField, VApp, VMain } from 'vuetify/components';
</script>

<template>
    <v-app>
        <v-main>
            <v-row>
                <!--CARDS-->
                <v-col cols="12" xl="10" lg="10" md="10" sm="12" xs="12">
                    <Lista></Lista>
                </v-col>
            </v-row>
        </v-main>
    </v-app>
</template>
