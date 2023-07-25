
@extends('layouts.plantilla')
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Postulante</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card table-responsive">
                        <div class="card-body">

 <div class="container">
<div class="title-tr">
    <h1>Registrando Nuevo Permiso</h1>
</div>



 <div class="title-center">
 
 <form method="POST" action="{{ route('permiso.store')}} " enctype="multipart/form-data">
 @csrf

       

     

        <div class="form-group" >
            <label for="">DNI: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" name="dni" id="dni">
            </div>
        </div>

        <div class="form-group" >
            <label for="">Fecha de Inicio: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="date" class="formcontrol" name="fecha_ini" id="fecha_ini" >
            </div>
        </div>
        <div class="form-group" >
            <label for="">Fecha de Fin: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="date" class="formcontrol" name="fecha_fin" id="fecha_fin" >
            </div>
        </div>

        <div class="form-group" >
            <label for="">Motivo:: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" name="motivo" id="motivo">
            </div>
        </div>

<button style="margin-left: 60px;margin-top: 20px"  type="submit" class="btn btn-primary"><i class="fas fasave"></i> Grabar</button>
<a style="margin-top: 20px"  href="{{ route('cancelarper')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</button></a>
</form>
</div>
</div>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection