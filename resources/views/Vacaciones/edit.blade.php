
@extends('layouts.plantilla')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Marcas</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card table-responsive">
                        <div class="card-body">
{{--  -------------------------------------------------------------------------------------------------------------------------------------------   -  --}}
{{-- CONTENIDO --}}

<div class="title-ar">
    <h1>Editar Vacaciones de {{$nombre}} {{$apellidos}} </h1>
</div>
 <div class="title-center">
 
 <form method="POST" action="{{ route("vacaciones.update",$vacaciones->id_vacaciones)}}">
@method('put') 
 @csrf

 <div class="form-group" >
    <label for="">DNI: </label>
    <div class="input-group" >
    <input  style="padding-bottom:10px;width:200px" type="text" class="formcontrol" name="dni" id="dni" value="{{ $dni }}" readonly>
    </div>

<div class="form-group" >
    <label for="">Fecha de Inicio: </label>
    <div class="input-group" >
    <input  style="padding-bottom:10px;width:200px" type="date" class="formcontrol" name="fecha_ini" id="fecha_ini" value="{{ $vacaciones->fecha_ini }}">
    </div>
</div>
<div class="form-group" >
    <label for="">Fecha de Fin: </label>
    <div class="input-group" >
    <input  style="padding-bottom:10px;width:200px" type="date" class="formcontrol" name="fecha_fin" id="fecha_fin" value="{{ $vacaciones->fecha_fin }}">
    </div>
</div>

<div class="form-group" >
    <label for="">Tipo: </label>
    <div class="input-group" >
    <input  style="padding-bottom:10px;width:200px" type="text" name="tipo_vac" id="tipo_vac" value="{{ $vacaciones->tipo_vac }}">
    </div>
</div>

<!-- {{-- <button style="margin-left: 300px;margin-top:40px;margin-right:10px"type="submit" class="btn btn-primary"><i class="fas fasave"></i> Grabar</button>
<a style="margin-top:40px" href="{{ route('cancelare')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</button></a>
 --}} -->
<button style="margin-left: 60px;margin-top: 20px"  type="submit" class="btn btn-primary"><i class="fas fasave"></i> Grabar</button>
<a style="margin-top: 20px"  href="{{ route('cancelarvac')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</button></a>
</form>
</div>




{{--  -------------------------------------------------------------------------------------------------------------------------------------------   -  --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection