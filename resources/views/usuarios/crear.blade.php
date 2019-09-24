@extends('usuarios.layaout')

@section('contenido')
<h1> productos </h1>
<div class="conteiner">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('usuario.store')}}" method="post">
                {{ csrf_field() }}
                <div class="label">nombre</div>
                <input class="form-control" type="text" name="nombre" id="">
                <div class="label">precio</div>
                <input class="form-control" type="text" name="precio" id="">
                <div class="label">empresa</div>
                <input class="form-control" type="text" name="empresa" id="">
                <input type="submit" value="agregar">

            </form>
        </div>
    </div>
</div>
@endsection
