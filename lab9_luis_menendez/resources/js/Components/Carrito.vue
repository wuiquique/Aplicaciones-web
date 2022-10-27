<script setup>
import {
    VRow,
    VCol,
    VImg,
    VCardTitle,
    VCardText,
    VCardActions,
    VBtn,
    VTextField,
    VApp,
    VMain,
    VProgressLinear,
    VCardActions,
} from "vuetify/components";
import axios from "axios";
import { def } from "@vue/shared";
</script>

<template>
    <v-app>
        <v-main>
            <v-row>
                <v-col
                    v-for="item in props.items"
                    :key="item.name"
                    cols="12"
                    sm="6"
                    md="4"
                    lg="3"
                >
                    <v-card class="my-3" max-width="374" height="600">
                        <v-img height="250" v-bind:src="item.imagen"></v-img>

                        <v-card-title> {{ item.titulo }} </v-card-title>

                        <v-card-text>
                            <div class="my-4 text-subtitle-1">
                                Q. {{ item.precio }}
                            </div>

                            <div>{{ item.descripcion }}</div>
                        </v-card-text>

                        <row style="position: absolute; bottom: 0">
                            <v-btn class="mx-3 my-1" @click="menos(item)">
                                -1
                            </v-btn>
                            {{ item.cantidad }}
                            <v-btn class="mx-3 my-1" @click="mas(item)">
                                +1
                            </v-btn>

                            <v-card-actions>
                                <v-btn
                                    color="red"
                                    text
                                    @click="deleteItem(item)"
                                >
                                    Delete
                                </v-btn>
                            </v-card-actions>
                        </row>
                    </v-card>
                </v-col>
            </v-row>
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: "Carrito",

    data: () => ({}),
    mounted() {},
    methods: {},
};
</script>
