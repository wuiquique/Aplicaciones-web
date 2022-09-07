let lista = Vue.component('lista', {
    template: `
            <v-data-iterator
            :items="items"
            :items-per-page.sync="itemsPerPage"
            >
                <template v-slot:default="props">
                    <v-row>
                        <v-col
                        v-for="item in props.items"
                        :key="item.name"
                        cols="12"
                        sm="6"
                        md="4"
                        lg="3"
                        >

                            <v-card :loading="item.loading" class="my-3" max-width="374" height="600">
                                <template slot="progress">
                                    <v-progress-linear color="deep-purple" height="10" indeterminate>
                                    </v-progress-linear>
                                </template>

                                <v-img height="250" v-bind:src="item.imagen"></v-img>

                                <v-card-title> {{item.titulo}} </v-card-title>

                                <v-card-text>
                                    <div class="my-4 text-subtitle-1">
                                        Q. {{item.precio}}
                                    </div>

                                    <div> {{item.descripcion}} </div>
                                </v-card-text>

                                <v-card-actions style="position: absolute; bottom: 0">
                                    <v-btn color="deep-purple lighten-2" text @click="reserve(item); addToCart(item)">
                                        Add to my cart
                                    </v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-col>
                    </v-row>
                </template>
            </v-data-iterator>
    `,
    data() {
        return {
            itemsPerPage: 10,
            loading: false,
            items: productos
        }
    },
    methods: {
        reserve (item) {
            item.loading = true
    
            setTimeout(() => (item.loading = false), 2000)
          },
        ...Vuex.mapMutations ([
            "addToCart"
        ])
    }
})

let cart = Vue.component('cart', {
    template: `
            <v-data-iterator
            :items="items"
            :items-per-page.sync="itemsPerPage"
            >
                <template v-slot:default="props">
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

                                <v-card-title> {{item.titulo}} </v-card-title>

                                <v-card-text>
                                    <div class="my-4 text-subtitle-1">
                                        Q. {{item.precio}}
                                    </div>

                                    <div> {{item.descripcion}} </div>
                                </v-card-text>

                                <row style="position: absolute; bottom: 0">
                                    <v-btn class="mx-3 my-1" @click="menos(item)"> -1 </v-btn>
                                    {{item.cantidad}}
                                    <v-btn class="mx-3 my-1" @click="mas(item)"> +1 </v-btn

                                    <v-card-actions>
                                        <v-btn color="red" text @click="deleteItem(item)">
                                            Delete
                                        </v-btn>
                                    </v-card-actions>
                                </row>
                            </v-card>
                        </v-col>
                    </v-row>
                </template>
            </v-data-iterator>
    `,
    data() {
        return {
            itemsPerPage: 10,
            loading: false,
            count: 1
        }
    },
    computed: {
        items() {
            return this.$store.state.carrito
        }
    },
    methods: {
        reserve (item) {
            item.loading = true
    
            setTimeout(() => (item.loading = false), 2000)
        },
        ...Vuex.mapMutations ([
            "deleteItem",
            "menos",
            "mas"
        ])
    },
})