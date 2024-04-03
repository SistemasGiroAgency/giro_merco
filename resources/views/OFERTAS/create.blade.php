<form action="{{route('ofertas.store')}}" method="POST">
@csrf
<div>
    <label for="">Imagen</label>
    <input type="file" name="imagen">
</div>
<div>
    <label for="">Zonas</label>
    <select name="" id="">
        @foreach ($oferta as $zonas)
            <option value="{{$zonas->id_zona}}">{{$zonas->nombre_zona}}</option>
        @endforeach
    </select>
</div>
<div>
    <input type="submit" value="Enviar">
</div>
</form>