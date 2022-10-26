<script setup>
import { VRow, VCol, VImg, VCardTitle, VCardText, VCardActions, VBtn, VTextField, VApp, VMain } from 'vuetify/components';
</script>

<template>
    <v-row>
        <v-col v-for="item in items" :key="item.name" cols="12" sm="6" md="4" lg="3">

            <v-card :loading="item.loading" class="my-3" max-width="374" height="600">
                <template slot="progress">
                    <v-progress-linear color="deep-purple" height="10" indeterminate>
                    </v-progress-linear>
                </template>

                <v-img height="250" v-bind:src="item.imagen"></v-img>

                <v-card-title> {{ item.titulo }} </v-card-title>

                <v-card-text>
                    <div class="my-4 text-subtitle-1">
                        Q. {{ item.precio }}
                    </div>

                    <div> {{ item.descripcion }} </div>
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

<script>
export default {
    name: 'Lista',

    data() {
        return {
            itemsPerPage: 10,
            loading: false,
            items: productos
        }
    },
    methods: {
        reserve(item) {
            item.loading = true

            setTimeout(() => (item.loading = false), 2000)
        },
    }
}
var productos = [
    { titulo: 'Leche', cantidad: 1, precio: 10, descripcion: 'Producto bebible lacteo', imagen: 'https://statics-cuidateplus.marca.com/cms/styles/natural/azblob/lecheok_0.jpg.webp?itok=0XaoEZv0', loading: false },
    { titulo: 'Computadora', cantidad: 1, precio: 12999, descripcion: 'Dispositivo informático que es capaz de recibir, almacenar y procesar información de una forma útil.', imagen: 'https://www.tecnologia-informatica.com/wp-content/uploads/2018/08/caracteristicas-de-las-computadoras-1.jpeg', loading: false },
    { titulo: 'Cafe', cantidad: 1, precio: 25, descripcion: 'Bebida que se obtiene a partir de los granos tostados y molidos de los frutos de la planta del café', imagen: 'https://www.caracteristicas.co/wp-content/uploads/2018/09/caf%C3%A9-e1578772027254.jpg', loading: false },
    { titulo: 'Servilletas', cantidad: 1, precio: 5, descripcion: 'Pieza rectangular elaborada de tela para secar o limpiar manos o boca', imagen: 'https://diccionarioactual.com/wp-content/uploads/2016/05/servilleta.jpg', loading: false },
    { titulo: 'Audifonos', cantidad: 1, precio: 649, descripcion: 'Aparato electrónico que se usa dentro o detrás de la oreja. Amplifica ciertos sonidos, y al hacerlos más fuertes se hace más fácil oírlos.', imagen: 'https://definicion.de/wp-content/uploads/2020/12/Auriculares-intraurales.jpg', loading: false },
    { titulo: 'Termo', cantidad: 1, precio: 39, descripcion: 'Recipiente que se utiliza para mantener la temperatura de un fluido.', imagen: 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Thermos.JPG', loading: false },
    { titulo: 'Lentes', cantidad: 1, precio: 300, descripcion: 'Objeto colocado en los ojos, apoyado en la nariz, para ayudar a mejorar la vista.', imagen: 'https://espaciociencia.com//wp-content/uploads/tipos-de-lentes-instagram-ok-vision-lentes.jpg', loading: false },
    { titulo: 'Telefono Celular', cantidad: 1, precio: 8700, descripcion: 'Dispositivo informatico portatil capaz de realizar llamadas telefonicas y conectarse a la red.', imagen: 'https://m.media-amazon.com/images/I/61m1Dot5KCL._AC_SS450_.jpg', loading: false },
    { titulo: 'Gorra', cantidad: 1, precio: 150, descripcion: 'Accesorio diseñado y creado para cubrir la cabeza y proteger los ojos de la luz natural (solar) y la luz artificial (eléctrica) mediante una visera y una pieza ajustable al cráneo, que puede incluir alas laterales.', imagen: 'https://tottoguatemala.vteximg.com.br/arquivos/ids/292306-292-292/AC60IND675-2210M-G03_1.jpg?v=637868088300500000', loading: false },
    { titulo: 'Mochila', cantidad: 1, precio: 225, descripcion: 'Bolsa de lona provista de correas para ser cargada a la espalda , sirve para llevar provisiones o equipos en excursiones , expediciones , viajes , etc.', imagen: 'https://molvu.com/image/cache/catalog/Productos/Mochilas/MolvuU2/mochila-u2-azul-400x400.jpg', loading: false }
]
</script>