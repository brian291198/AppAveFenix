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
            <div>
                <a class="bg-[#4D80F6] rounded p-3" href="{{route('transportes.create')}}">Registrar transporte</a>
            </div>
            <table class="w-full">
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Año</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                </tr>
                @foreach($transportes as $transporte)
                    <tr>
                        <td class="border p-2">{{$transporte->TransporteID}}</td>
                        <td class="border p-2">{{$transporte->Modelo}}</td>
                        <td class="border p-2">{{$transporte->Marca}}</td>
                        <td class="border p-2">{{$transporte->Año}}</td>
                        <td class="border p-2">{{$transporte->Descripcion}}</td>
                        <td class="border p-2">{{$transporte->Estado}}</td>
                        <td class="border p-2 space-y-2">
                            <a class="text-xs bg-[#20fc03] rounded p-1" href="{{route('transportes.edit', ['transporte' => $transporte])}}">Editar</a>
                            <form method="post" action="{{route('transportes.delete', ['transporte' => $transporte])}}">
                                @csrf
                                @method('delete')
                                <input class="text-xs bg-[#fc0703] rounded p-1" type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
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