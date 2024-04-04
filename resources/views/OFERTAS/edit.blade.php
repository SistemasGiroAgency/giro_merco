<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <title></title>
    </head>
    <body>
        <form action="{{route('ofertas.update', $edit->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <label for="">Imagen</label>
                <input type="file" name="imagen">
                <input type="hidden" name="imagen" value="{{$edit->imagen}}">
            </div>
            <div>
                <label for=""><b>Zonas</b></label><br>
                @foreach ($zona as $zonas)
                    <input class="zona" id="{{$zonas->id}}" type="checkbox" name="id_zona" value="{{$zonas->id}}" @if($zonas->id == $edit->id_zona) checked @endif>
                    <label for="">{{$zonas->nombre_zona}}</label>
                @endforeach
            </div>
            <div>
                <label for=""><b>Sucursales</b></label><br>
                @foreach ($sucursal as $sucursales)
                    <input class="accesos" id="check{{$sucursales->id}}" data-sucursal="{{$sucursales->id}}" type="checkbox" name="id_sucursal" value="{{$sucursales->id}}" @if($sucursales->id == $edit->id_sucursal) checked @endif>
                    <label for="">{{$sucursales->nombre_sucursal}}</label>   
                @endforeach
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </body>

    <script>
        $( ".zona" ).change(function() {
            var id = $(this).attr('id');
            if($(this).is(':checked')) {
            $( ".accesos" ).each(function( index ) {
                var dataZona = $(this).attr('data-sucursal');
                if(dataZona == id){
                $(this).prop('checked', true);
                }
            });
            }else{
            $( ".accesos" ).each(function( index ) {
                var dataZona = $(this).attr('data-sucursal');
                if(dataZona == id){
                $(this).prop('checked', false);
                }
            });
            }
        });
    </script>
</html>