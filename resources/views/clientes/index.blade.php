@extends('layouts.plantilla')
@section('title','Página Principal')
@section('content')
<div class="container">
    <div class="text-center">
        <h1 class="my-5">Lista de Clientes</h1>
    </div>
    @if (session('datos'))
      <div id="mensaje">
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          {{session('datos')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
    @endif
    <div class="container">
        <table class="table table-hover">
            <thead class="table-dark ">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre Completo:</th>
                  <th scope="col">Ciudad</th>
                  <th scope="col">Dirección</th>
                  <th scope="col">DNI</th>
                  <th scope="col">Celular</th>
                  <th colspan="2" class="text-center">Accion</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cliente as $c)
                  <tr>
                      <td>{{$c->idcliente}}</td>
                      <td>{{$c->nombre}}</td>
                      <td>{{$c->ciudad}}</td>
                      <td>{{$c->direccion}}</td>
                      <td>{{$c->dni}}</td>
                      <td>{{$c->celular}}</td>
                      <td class="text-right">
                        <form action="{{route('cliente.destroy',$c->idcliente)}}" method="POST">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </form>
                      </td>
                      <td class="text-left">
                        <form action="{{route('cliente.edit',$c->idcliente)}}" method="GET">
                          <button class="btn btn-warning btn-sm" type="submit"><i class="far fa-edit"></i></button>  
                        </form>
                      </td>
                  </tr>
              @endforeach
              </tbody>
        </table>
    </div>
    
    <div class="text-center mb-5">
        <a href="{{route('cliente.create')}}" class="btn btn-primary">Agregar Cliente</a>
    </div>

</div>
@endsection