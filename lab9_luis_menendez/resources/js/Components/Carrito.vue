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
} from "vuetify/components";
import axios from "axios";
import { def } from "@vue/shared";
</script>

<template>
    <v-app>
        <v-main>
            <v-row>
                <v-col v-for="item in items" :key="item.name" cols="12" sm="6" md="4" lg="3">
                    <v-card class="my-3" max-width="374" height="600">
                        <v-img height="250" v-bind:src="item.img"></v-img>

                        <v-card-title> {{ item.name }} </v-card-title>

                        <v-card-text>
                            <div class="my-4 text-subtitle-1">
                                Q. {{ item.price }}
                            </div>

                            <div>{{ item.desc }}</div>
                        </v-card-text>

                        <row style="position: absolute; bottom: 0">
                            <v-btn class="mx-3 my-1" @click="menos(item)">
                                -1
                            </v-btn>
                            {{ item.cant }}
                            <v-btn class="mx-3 my-1" @click="mas(item)">
                                +1
                            </v-btn>

                            <v-card-actions>
                                <v-btn color="red" text @click="deleteItem(item)">
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

    data: () => ({
        items: [],
    }),
    mounted() {
        axios
            .get("/carrito")
            .then(response => {
                console.log(response.data.carrito);
                this.items = response.data.carrito;
            })
            .catch(error => {
                console.log(error);
            })
        console.log(this.items)
    },
    methods: {
        mas(item) {
            item.cant = item.cant + 1
            let cartObj = {
                item_id: item.id,
                cant: item.cant
            }
            axios
                .post("/carrito", cartObj)
        },
        menos(item) {
            if (item.cant > 1) {
                item.cant = item.cant - 1
                let cartObj = {
                    item_id: item.id,
                    cant: item.cant
                }
                axios
                    .post("/carrito", cartObj)
            }
        },
        deleteItem(item) {
            let cartObj = {
                item_id: item.id,
                cant: 0
            }
            axios
                .post("/carrito", cartObj)
                .then(response => {
                    axios
                        .get("/carrito")
                        .then(response => {
                            console.log(response.data.carrito);
                            this.items = response.data.carrito;
                        })
                        .catch(error => {
                            console.log(error);
                        })
                })
        }
    },
};
</script>
