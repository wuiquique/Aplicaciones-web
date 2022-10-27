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
</script>

<template>
    <v-app
        ><v-main>
            <v-row>
                <v-col
                    v-for="item in items"
                    :key="item.name"
                    cols="12"
                    sm="6"
                    md="4"
                    lg="3"
                >
                    <v-card class="my-3" max-width="374" height="600">
                        <template slot="progress">
                            <v-progress-linear
                                color="deep-purple"
                                height="10"
                                indeterminate
                            >
                            </v-progress-linear>
                        </template>

                        <v-img height="250" v-bind:src="item.img"></v-img>

                        <v-card-title> {{ item.name }} </v-card-title>

                        <v-card-text>
                            <div class="my-4 text-subtitle-1">
                                Q. {{ item.price }}
                            </div>

                            <div>{{ item.desc }}</div>
                        </v-card-text>

                        <v-card-actions style="position: absolute; bottom: 0">
                            <v-btn
                                color="deep-purple lighten-2"
                                text
                                @click="addToCart(item)"
                            >
                                Add to my cart
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>
            </v-row>
        </v-main>
    </v-app>
</template>

<script>
export default {
    name: "Lista",

    data: () => ({
        itemsPerPage: 10,
        loading: false,
        items: [],
    }),
    mounted() {
        axios
            .get("/items")
            .then((response) => {
                console.log(response.data.items);
                this.items = response.data.items;
            })
            .catch((error) => {
                console.log(error);
            });
        console.log(this.items);
    },
    methods: {},
};
</script>
