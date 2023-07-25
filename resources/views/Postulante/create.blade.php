
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
 
 <form method="POST" action="{{ route('Postulante.store')}} " enctype="multipart/form-data">
 @csrf

       

     

        <div class="form-group" >
            <label for="">DNI: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" name="dni" id="dni">
            </div>
        </div>

        <div class="form-group" >
            <label for="">Nombre: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" name="nombre" id="nombre">
            </div>
        </div>

        <div class="form-group" >
            <label for="">Apellidos: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" name="apellidos" id="apellidos">
            </div>
        </div>


       
        <div class="form-group" >
            <label for="">Edad: </label>
            <div class="input-group" >
            <input  style="padding:5px 0px;width:200px" type="number" class="formcontrol" name="edad" id="edad">
            </div>
        </div>



        {{-- <div class="form-group" >
            <label for="">Estado Civil: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" name="estado_civil" id="estado_civil" >
            </div>
        </div> --}}



        <div class="form-group" >
            <label for="">Dirección: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" name="direccion" id="direccion">
            </div>
        </div>


        <div class="form-group" >
            <label for="">Teléfono: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" name="telefono" id="telefono">
            </div>
        </div>

        <div class="form-group" >
            <label for="">Email: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="email" name="email" id="email">
            </div>
        </div>



 
      
<button style="margin-left: 60px;margin-top: 20px"  type="submit" class="btn btn-primary"><i class="fas fasave"></i> Grabar</button>
<a style="margin-top: 20px"  href="{{ route('cancelarpos')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</button></a>
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