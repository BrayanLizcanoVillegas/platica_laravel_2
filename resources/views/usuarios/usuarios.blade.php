@extends('usuarios.layaout')

@section('contenido')
<h1>tabla de productos </h1>

<div class="container p4">
    <div class="row">
        <div class="col-md-6 col-6">
            <h1>productos</h1>
            <a href="{{route('usuario.create')}}">crear producto</a>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col">precio</th>
                                <th scope="col">marca</th>
                                <th scope="col">acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $brayan)

                            <tr>

                                <th scope="row">{{ $brayan->nombre}}</th>
                                <td>{{ $brayan->precio}}</td>
                                <td>{{ $brayan->empresa}}</td>
                                <td>
                                    <a class="btn-btn-danger" href="{{ route('usuario.destroy',$brayan->id)}}">eliminar</a>
                                    <a class="btn-btn-info" href="{{ route('usuario.edit', $brayan->id)}}">modificar</a>
                                </td>

                            </tr>
                            @endforeach

                            {{ $usuarios->links() }}
                        </tbody>

                    </table>



                </div>
            </div>
        </div>
    </div>
</div>


@endsection
