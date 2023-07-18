@extends('layouts.plantilla')
@section('title', 'Tarifas') {{-- Edita "Ejemplo" por el nombre que corresponda, esto aparece en la pestaña del
navegador --}}

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">TARIFAS</h3>
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
                Editar Tarifa
            </div>
            <form class="space-y-4" method="post" action="{{route('tarifas.update', ['tarifa' => $tarifa])}}">
                @csrf
                @method('put')
        

                <div>
                    <label for="">Monto</label>
                    <input class="border p-3 rounded ml-6" type="number" name="Monto" placeholder="Monto" value="{{$tarifa->Monto}}">
                </div>
                <div>
                    <label for="">Descripcion</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Descripcion" placeholder="Descripcion" value="{{$tarifa->Descripcion}}">
                </div>
                <div>
                    <label for="">Estado</label>
                    <input class="border p-3 rounded ml-6" type="text" name="Estado" placeholder="Estado" value="{{$tarifa->Estado}}">
                </div>
                <div class="space-x-4">
                    <input class="bg-[#4D80F6] rounded p-3" type="submit" value="Update">
                    <a href="{{route('tarifas.index')}}" class="bg-[#b52321] rounded p-3">Cancelar</a>
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