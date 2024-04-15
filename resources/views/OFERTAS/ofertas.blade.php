<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <hr>
        <ul>
            <li><a href="/admin">Admin</a></li>
            <li><a href="{{route('ofertas.create')}}">Crear oferta</a></li>
        </ul>
    <hr>

    <table> 
        @foreach ($main as $main_ofertas)
        <thead>
            <th>
                @foreach ($oferta_imagen as $ofertaimg)
                    <p>{{$ofertaimg->imagen}}</p>
                @endforeach
            </th>
            <th> 
                <a href="{{route('ofertas.edit', $main_ofertas->id)}}">Editar</a>
                <form action="{{route('ofertas.destroy', $main_ofertas->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
            </th>
        </thead>
        <tbody>
            @foreach ($oferta as $ofertas)
            <tr>
                <td>
                    <p>Id_oferta = {{$ofertas->id_oferta}}</p>
                    <p>id_zona = {{$ofertas->id_zona}}</p>
                    <p>id_sucursal = {{$ofertas->id_sucursal}}</p>
                </td>
            </tr>
            @endforeach
        </tbody>
        @endforeach
    </table>
</body>
</html>