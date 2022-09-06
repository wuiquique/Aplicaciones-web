let lista = Vue.component('lista', {
    template: `
            <v-card :loading="loading" class="my-3" max-width="374">
                <template slot="progress">
                    <v-progress-linear color="deep-purple" height="10" indeterminate>
                    </v-progress-linear>
                </template>

                <v-img height="250" src="#"></v-img>

                <v-card-title> # </v-card-title>

                <v-card-text>
                    <v-row align="center" class="mx-0">

                        <div class="grey--text ms-4">
                            Subtitulo?
                        </div>
                    </v-row>

                    <div class="my-4 text-subtitle-1">
                        Q • Precio
                    </div>

                    <div>Descripcion</div>
                </v-card-text>

                <v-card-actions>
                    <v-btn color="deep-purple lighten-2" text @click="reserve">
                        Add to my cart
                    </v-btn>
                </v-card-actions>
            </v-card>
    `,
    data() {
        return {
            items: productos
        }
    }
})