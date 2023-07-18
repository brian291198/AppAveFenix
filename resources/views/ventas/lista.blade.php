@extends('layouts.plantilla')
@section('title','Página Principal')
@section('content')
<div class="container">
    <div class="text-center">
        <h1 class="my-5">Lista de Ventas</h1>
    </div>
    @if (session('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('mensaje') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


    <div class="container">
        <table class="table table-hover">
            <thead class="table-dark ">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Estado</th>
                <th scope="col">Fecha</th>
                
                <th colspan="2" class="text-center">Accion</th>
                </tr>
            </thead>
            <tbody>
                @if (count($ventas)<=0)
                    <tr>
                    <td class="text-center" colspan="5">No hay Registros...</td>
                    </tr>
                @else
                    @foreach ($ventas as $ve)
                        <tr>
                            <td>{{$ve->idventas}}</td>
                            <td>{{$ve->nombre}}</td>
                            <td>{{$ve->idestado}}</td>
                            <td>{{$ve->fecha}}</td>
                        
                            <td class="text-center">
                                <form action="{{route('ventas.show',$ve->idventas)}}" method="GET">
                                    <button class="btn btn-success btn-sm" type="submit"><i class="fas fa-download"></i></button>  
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {{-- Para mostrar formato  --}}
        <div class="float-right">
            {{$ventas->links()}}
        </div>
    </div>

    
    
    <div class="text-center mb-5">
        <a href="{{route('ventas.create')}}" class="btn btn-primary">Nueva Venta</a>
    </div>

</div>
@endsection

@section('script')
<script>

    setTimeout(function () {
        document.querySelector('#mensaje').remove();
    }, 3000);

</script>
@endsection
