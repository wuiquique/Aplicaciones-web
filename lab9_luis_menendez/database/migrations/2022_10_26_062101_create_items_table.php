<?php

use App\Models\Item;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->string('desc');
            $table->string('img');
            $table->timestamps();
        });

        $productos = array(
            [
                'name' => 'Leche',
                'price' => 10,
                'desc' => 'Producto bebible lacteo',
                'img' => 'https://statics-cuidateplus.marca.com/cms/styles/natural/azblob/lecheok_0.jpg.webp?itok=0XaoEZv0',
            ],
            [
                'name' => 'Computadora',
                'price' => 12999,
                'desc' => 'Dispositivo informático que es capaz de recibir, almacenar y procesar información de una forma útil.',
                'img' => 'https://www.tecnologia-informatica.com/wp-content/uploads/2018/08/caracteristicas-de-las-computadoras-1.jpeg',
            ],
            [
                'name' => 'Cafe',
                'price' => 25,
                'desc' => 'Bebida que se obtiene a partir de los granos tostados y molidos de los frutos de la planta del café.',
                'img' => 'https://www.caracteristicas.co/wp-content/uploads/2018/09/caf%C3%A9-e1578772027254.jpg'
            ],
            [
                'name' => 'Servilletas',
                'price' => 5,
                'desc' => 'Pieza rectangular elaborada de tela para secar o limpiar manos o boca.',
                'img' => 'https://diccionarioactual.com/wp-content/uploads/2016/05/servilleta.jpg'
            ],
            [
                'name' => 'Audifonos',
                'price' => 649,
                'desc' => 'Aparato electrónico que se usa dentro o detrás de la oreja. Amplifica ciertos sonidos, y al hacerlos más fuertes se hace más fácil oírlos.',
                'img' => 'https://definicion.de/wp-content/uploads/2020/12/Auriculares-intraurales.jpg'
            ],
            [
                'name' => 'Termo',
                'price' => 39,
                'desc' => 'Recipiente que se utiliza para mantener la temperatura de un fluido.',
                'img' => 'https://upload.wikimedia.org/wikipedia/commons/f/fc/Thermos.JPG'
            ],
            [
                'name' => 'Lentes',
                'price' => 300,
                'desc' => 'Objeto colocado en los ojos, apoyado en la nariz, para ayudar a mejorar la vista.',
                'img' => 'https://espaciociencia.com//wp-content/uploads/tipos-de-lentes-instagram-ok-vision-lentes.jpg'
            ],
            [
                'name' => 'Telefono Celular',
                'price' => 8700,
                'desc' => 'Dispositivo informatico portatil capaz de realizar llamadas telefonicas y conectarse a la red.',
                'img' => 'https://m.media-amazon.com/images/I/61m1Dot5KCL._AC_SS450_.jpg'
            ],
            [
                'name' => 'Gorra',
                'price' => 150,
                'desc' => 'Accesorio diseñado y creado para cubrir la cabeza y proteger los ojos de la luz natural (solar) y la luz artificial (eléctrica) mediante una visera y una pieza ajustable al cráneo, que puede incluir alas laterales.',
                'img' => 'https://tottoguatemala.vteximg.com.br/arquivos/ids/292306-292-292/AC60IND675-2210M-G03_1.jpg?v=637868088300500000'
            ],
            [
                'name' => 'Mochila',
                'price' => 225,
                'desc' => 'Bolsa de lona provista de correas para ser cargada a la espalda , sirve para llevar provisiones o equipos en excursiones , expediciones , viajes , etc.',
                'img' => 'https://molvu.com/image/cache/catalog/Productos/Mochilas/MolvuU2/mochila-u2-azul-400x400.jpg'
            ]
        );

        foreach ($productos as $prod) {
            $item = new Item();
            $item->name = $prod['name'];
            $item->price = $prod['price'];
            $item->desc = $prod['desc'];
            $item->img = $prod['img'];
            $item->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
