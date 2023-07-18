@extends('layouts.plantilla')
@section('title', 'Promociones') {{-- Edita "Ejemplo" por el nombre que corresponda, esto aparece en la pestaña del
navegador --}}

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">PROMOCIONES</h3>
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
                <a class="bg-[#4D80F6] rounded p-3" href="{{route('promociones.create')}}">Registrar promocion</a>
            </div>
            <table class="w-full">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Codigo</th>
                    <th>Descuento</th>
                    <th>Estado</th>
                </tr>
                @foreach($promociones as $promocion)
                    <tr>
                        <td class="border p-2">{{$promocion->PromociónID}}</td>
                        <td class="border p-2">{{$promocion->Nombre}}</td>
                        <td class="border p-2">{{$promocion->Codigo}}</td>
                        <td class="border p-2">{{$promocion->Descuento}}</td>
                        <td class="border p-2">{{$promocion->Estado}}</td>
                        <td class="border p-2 space-y-2">
                            <a class="text-xs bg-[#20fc03] rounded p-1" href="{{route('promociones.edit', ['promocion' => $promocion])}}">Editar</a>
                            <form method="post" action="{{route('promociones.delete', ['promocion' => $promocion])}}">
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