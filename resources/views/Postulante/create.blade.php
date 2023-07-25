
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
    <h1>Registrando Nuevo Postulante</h1>
</div>



 <div class="title-center">
 
 <form method="POST" action="{{ route('Postulante.store')}} " enctype="multipart/form-data" class="row g-3">
 @csrf

       

     

        <div class="col-md-2" >
            <label for=""  style="color: steelblue;">DNI: </label>
            <div class="input-group" >
            <input   class="form-control" style="padding-bottom:10px;width:200px;border-color:dimgray;" type="text" name="dni" id="dni">
            </div>
        </div>

        <div class="col-md-5" >
            <label for=""  style="color: steelblue;">Nombre: </label>
            <div class="input-group" >
            <input  class="form-control"  style="padding-bottom:10px;width:200px;border-color:dimgray;" type="text" name="nombre" id="nombre">
            </div>
        </div>

        <div class="col-md-5" >
            <label for=""  style="color: steelblue;">Apellidos: </label>
            <div class="input-group" >
            <input   class="form-control" style="padding-bottom:10px;width:200px;border-color:dimgray;" type="text" name="apellidos" id="apellidos">
            </div>
        </div>


       
        <div class="col-md-2" >
            <label for=""  style="color: steelblue;">Edad: </label>
            <div class="input-group" >
            <input  style="padding:5px 0px;width:200px;border-color:dimgray;" type="number" class="form-control" name="edad" id="edad">
            </div>
        </div>


        <div class="col-md-10" >
            <label for=""  style="color: steelblue;">Dirección: </label>
            <div class="input-group" >
            <input   class="form-control" style="padding-bottom:10px;width:200px;border-color:dimgray;" type="text" name="direccion" id="direccion">
            </div>
        </div>


        <div class="col-md-5" >
            <label for=""  style="color: steelblue;">Teléfono: </label>
            <div class="input-group" >
            <input  class="form-control" style="padding-bottom:10px;width:200px;border-color:dimgray;" type="text" name="telefono" id="telefono">
            </div>
        </div>

        <div class="col-md-5" >
            <label for=""  style="color: steelblue;">Email: </label>
            <div class="input-group" >
            <input  class="form-control" style="padding-bottom:10px;width:200px;border-color:dimgray;" type="email" name="email" id="email">
            </div>
        </div>

        <div class="col-md-3" >
            <button style="margin-left: 60px;margin-top: 20px"  type="submit" class="btn btn-primary"><i class="fas fasave"></i> Grabar</button>
        </div>

        <div class="col-md-3" >
            <a style="margin-top: 20px"  href="{{ route('cancelarpos')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</button></a>
        </div>
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