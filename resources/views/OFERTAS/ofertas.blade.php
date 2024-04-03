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
        <a href="{{route('ofertas.create')}}">Crear oferta</a>
    <hr>

    <table>
        @foreach ($oferta as $ofertas)
        <thead>
            <th>
                {{$ofertas->imagen}}
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{$ofertas->id_zona}}
                    {{$ofertas->id_sucursal}}
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>