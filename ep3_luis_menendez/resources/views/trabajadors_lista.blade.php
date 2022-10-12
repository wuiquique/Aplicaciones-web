<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav>
            Menu
            <ul>
                <li>
                    <a href="/clientes">Clientes</a>
                </li>
                <li>
                    <a href="/trabajadors">Trabajadores</a>
                </li>
            </ul>
        </nav>

            @foreach ($trabajadors as $trabajador)
            <p><b>Nombre: </b> {{$trabajador->nombre}} </p>
            <p><b>Apellido: </b> {{$trabajador->apellido}} </p>
            <p><b>Cargo: </b> {{$trabajador->cargo}} </p>
            <button onclick="location.href='/trabajadors/{{$trabajador->id}}/edit'">Actualizar</button>
            <button onclick="location.href='/trabajadors/{{$trabajador->id}}'">Ver</button>
            <form action="/trabajadors/{{$trabajador->id}}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Borrar">
            </form>
            @endforeach

    </body>
</html>
