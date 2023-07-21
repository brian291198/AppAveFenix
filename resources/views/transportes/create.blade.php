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

        <div class="space-y-10">
            <div class="text-center text-3xl">
                Crear Transporte
            </div>
            <form class="space-y-4" method="post" action="{{route('transportes.store')}}">
                @csrf
                @method('post')

                <div>
                    <label for="">Año</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Año" placeholder="Año">
                </div>
                <div>
                    <label for="">Descripcion</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Descripcion" placeholder="Descripcion">
                </div>
                <div>
                    <label for="">Marca</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Marca" placeholder="Marca">
                </div>
                <div>
                    <label for="">Modelo</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Modelo" placeholder="Modelo">
                </div>
                <div>
                    <label for="">Estado</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Estado" placeholder="Estado">
                </div>
                <div class="space-x-4">
                    <input class="bg-[#4D80F6] rounded p-3" type="submit" value="Guardar">
                    <a href="{{route('transportes.index')}}" class="bg-[#b52321] rounded p-3">Cancelar</a>
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