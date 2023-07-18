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
            <div>
                <a class="bg-[#4D80F6] rounded p-3" href="{{route('tarifas.create')}}">Registrar tarifa</a>
            </div>
            <table class="w-full">
                <tr>
                    <th>ID</th>
                    <th>Monto</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                </tr>
                @foreach($tarifas as $tarifa)
                    <tr>
                        <td class="border p-2">{{$tarifa->TarifaID}}</td>
                        <td class="border p-2">{{$tarifa->Monto}}</td>
                        <td class="border p-2">{{$tarifa->Descripcion}}</td>
                        <td class="border p-2">{{$tarifa->Estado}}</td>
                        <td class="border p-2 space-y-2">
                            <a class="text-xs bg-[#20fc03] rounded p-1" href="{{route('tarifas.edit', ['tarifa' => $tarifa])}}">Editar</a>
                            <form method="post" action="{{route('tarifas.delete', ['tarifa' => $tarifa])}}">
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