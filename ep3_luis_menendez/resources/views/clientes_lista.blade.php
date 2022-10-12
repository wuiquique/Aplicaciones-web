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

        @foreach ($clientes as $cliente)
            <p><b>Nombre: </b> {{$cliente->nombre}} </p>
            <p><b>Apellido: </b> {{$cliente->apellido}} </p>
            <p><b>Tipo de cuenta: </b> {{$cliente->cuenta}} </p>
            <button onclick="location.href='/clientes/{{$cliente->id}}/edit'">Actualizar</button>
            <button onclick="location.href='/clientes/{{$cliente->id}}'">Ver</button>
            <form action="/clientes/{{$cliente->id}}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Borrar">
            </form>
            @endforeach

            <form action="/profesores" method="POST">
                @csrf

                <input name="nombre" type="text" placeholder="Nombre"> <br>
                <input name="apellido" type="text" placeholder="Apellido"> <br>
                <input name="direccion" type="text" placeholder="Direccion"> <br>
                <input name="correo" type="text" placeholder="Correo"> <br>
                <input name="telefono" type="text" placeholder="Telefono"> <br>
                <input name="estado" type="text" placeholder="Estado Civil"> <br>
                <input name="profesion" type="text" placeholder="Profesion"> <br>
                <input name="cuenta" type="date" placeholder="Tipo de cuenta"> <br>
                <select name="prof_id">
                    @foreach ($trabajadors as $trabajador)
                    <option value="{{$trabajador->id}}">{{ $trabajador->nombre }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Crear">
            </form>

    </body>
</html>
