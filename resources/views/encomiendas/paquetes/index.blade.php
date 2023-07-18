@extends('layouts.plantilla')
@section('title', 'Paquetes') {{-- Edita "Ejemplo" por el nombre que corresponda, esto aparece en la pestaña del
navegador --}}

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">PAQUETES</h3>
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
                <a class="bg-[#4D80F6] rounded p-4">Registrar paquete</a>
            </div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Peso</th>
                    <th>Descripcion</th>
                </tr>
                @foreach($vehiculos as $vehiculo)
                    <tr>
                        <!-- <td class="border p-2">{{$vehiculo->id}}</td> -->
                        <!-- <td class="border p-2">{{$vehiculo->modelo}}</td> -->
                        <!-- <td class="border p-2">{{$vehiculo->año}}</td> -->
                        <!-- <td class="border p-2">{{$vehiculo->descripcion}}</td> -->
                        <!-- <td class="border p-2">{{$vehiculo->kilometraje}}</td> -->
                        <td class="border p-2 space-y-2">
                            <!-- <a class="text-xs bg-[#20fc03] rounded p-1" href="{{route('vehiculo.edit', ['vehiculo' => $vehiculo])}}">Editar</a> -->
                            <!-- <form method="post" action="{{route('vehiculo.delete', ['vehiculo' => $vehiculo])}}">
                                @csrf
                                @method('delete')
                                <input class="text-xs bg-[#fc0703] rounded p-1" type="submit" value="Eliminar">
                            </form> -->
                        </td>
                    </tr>
                <!-- @endforeach -->
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