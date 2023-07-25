
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
    <h1>Editar Registro de Personal - {{ $personal->idpersonal }}</h1>
</div>
 <div class="title-center">
 
 <form method="POST" action="{{ route("Personal.update",$personal->id_personal)}}">
@method('put') 
 @csrf




        <div class="form-group">
        <label for="">Código</label>
        <input style="margin-left: 55px" type="text" class="formcontrol" id="id" name="id" value="{{ $personal->idpersonal }}" disabled>
        </div>



        <div class="form-group" >
            <label for="">DNI: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" class="formcontrol" name="dni" id="dni" value="{{ $personal->dni }}"{{-- readonly="readonly" --}}>
            </div>
        </div>

        <div class="form-group" >
            <label for="">Nombre: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" class="formcontrol" name="nombre" id="nombre" value="{{ $personal->nombre }}"{{-- readonly="readonly" --}}>
            </div>
        </div>

        <div class="form-group" >
            <label for="">Apellidos: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" class="formcontrol" name="apellidos" id="apellidos" value="{{ $personal->apellidos }}"{{-- readonly="readonly" --}}>
            </div>
        </div>


        
        <div class="form-group" >
            <label for="">Edad: </label>
            <div class="input-group" >
            <input  style="padding:5px 0px;width:200px" type="number" class="formcontrol" name="edad" id="edad" value="{{ $personal->edad }}"{{-- readonly="readonly" --}}>
            </div>
        </div>



        <div class="form-group" >
            <label for="">Género: </label>
            <br>
            <select class="formcontrol" style="padding:10px 0px;width:200px" name="genero" id="genero" value="{{ $personal->genero }}"> 
                <option value="{{ $personal->genero }}" selected>{{ $personal->genero }}</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
                <option value="N">No definido</option>
            </select>
        </div>


        <div class="form-group" >
            <label for="">Estado Civil: </label>
            <br>
            <select class="formcontrol" style="padding:10px 0px;width:200px" name="estado_civil" id="estado_civil" > 
                <option value="{{ $personal->estado_civil }}"selected>{{ $personal->estado_civil }}</option>
                <option value="C">Casado</option>
                <option value="D">Divorciado</option>
                <option value="V">Viudo</option>
                <option value="S">Soltero</option>
                <option value="N">No definido</option>
            </select>
        </div>


    

        <div class="form-group" >
            <label for="">Dirección: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" class="formcontrol" name="direccion" id="direccion" value="{{ $personal->direccion }}"{{-- readonly="readonly" --}}>
            </div>
        </div>


        <div class="form-group" >
            <label for="">Teléfono: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" class="formcontrol" name="telefono" id="telefono" value="{{ $personal->telefono }}"{{-- readonly="readonly" --}}>
            </div>
        </div>

        <div class="form-group" >
            <label for="">Email: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" class="formcontrol" name="email" id="email" value="{{ $personal->email }}"{{-- readonly="readonly" --}}>
            </div>
        </div>

        <div class="form-group" >
            <label for="">Fecha de Nacimiento: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="date" class="formcontrol" name="fecha_nac" id="fecha_nac" value="{{ $personal->fecha_nac }}"{{-- readonly="readonly" --}}>
            </div>
        </div>

        <div class="form-group" >
            <label for="">Número de licencia: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" class="formcontrol" name="num_licencia" id="num_licencia" value="{{ $personal->num_licencia }}"{{-- readonly="readonly" --}}>
            </div>
        </div>

        <div class="form-group" >
            <label for="">Tipo de licencia: </label>
            <div class="input-group" >
            <input  style="padding-bottom:10px;width:200px" type="text" class="formcontrol" name="tip_licencia" id="tip_licencia" value="{{ $personal->tip_licencia }}"{{-- readonly="readonly" --}}>
            </div>
        </div>


           


<!-- {{-- <button style="margin-left: 300px;margin-top:40px;margin-right:10px"type="submit" class="btn btn-primary"><i class="fas fasave"></i> Grabar</button>
<a style="margin-top:40px" href="{{ route('cancelare')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</button></a>
 --}} -->
<button style="margin-left: 60px;margin-top: 20px"  type="submit" class="btn btn-primary"><i class="fas fasave"></i> Grabar</button>
<a style="margin-top: 20px"  href="{{ route('cancelarp')}}" class="btn btn-danger"><i class="fas fa-ban"></i> Cancelar</button></a>
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