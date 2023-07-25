@extends('layouts.plantilla')
@section('title', 'Transportes') {{-- Edita "Ejemplo" por el nombre que corresponda, esto aparece en la pestaña del
navegador --}}

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">TRANSPORTES</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        {{--
        -------------------------------------------------------------------------------------------------------------------------------------------
        - --}}
        {{-- INICIO DE CONTENIDO --}}

        <div>
            <div class="text-center fs-2">
                Crear Transporte
            </div>
            <form class="container" method="post" action="{{route('transportes.store')}}">
                @csrf
                @method('post')

                <div class="row">
                    <label for="">Año</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Año" placeholder="Año">
                </div>
                <div class="row mt-4">
                    <label for="">Descripcion</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Descripcion" placeholder="Descripcion">
                </div>
                <div class="row mt-4">
                    <label for="">Marca</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Marca" placeholder="Marca">
                </div>
                <div class="row mt-4">
                    <label for="">Modelo</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Modelo" placeholder="Modelo">
                </div>
                <div class="row mt-4">
                    <label for="">Estado</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Estado" placeholder="Estado">
                </div>
                <div class="mt-4">
                    <input class="btn btn-success" type="submit" value="Guardar">
                    <a href="{{route('transportes.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>


        {{--
        -------------------------------------------------------------------------------------------------------------------------------------------
        - --}}
        {{-- FIN DE CONTENIDO --}}
    </div>
</div>

@endsection

@section('script')

{{-- Aquí va el contenido del js si hubiera --}}

@endsection