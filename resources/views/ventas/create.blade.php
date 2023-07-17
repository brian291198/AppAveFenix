@extends('layouts.plantilla')
@section('title','Página Principal')
@section('content')
<div class="container">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <div class="text-center">
        <h1 class="my-5">Venta de pasajes</h1>
    </div>
    <form action="{{route('ventas.store')}}" method="POST">
        @csrf
        <div class="row">

            <div class="mb-3 col-sm-12 col-md-4">
                <label for="idcliente" class="form-label">Cliente: </label>
                <select name="idcliente" id="idcliente" class="form-control">
                    @foreach ($cliente as $c)
                        <option value="{{$c->idcliente}}">{{$c->nombre}}</option>
                    @endforeach
                </select>
            </div>
    
            <div class="mb-3 col-sm-12 col-md-4">
                <label for="a" class="form-label">Fecha de Ida:</label>
                <input type="text" id="fechaida" class="form-control" name="fechaida" value="" placeholder="Seleccione una fecha">
            </div>
    
            <div class="mb-3 col-sm-12 col-md-4">
                <label for="a" class="form-label">Fecha de Retorno:</label>
                <input type="text" id="fecharetorno" class="form-control" name="fecharetorno" value="" placeholder="Seleccione una fecha">
            </div>
            
            <div class="mb-3 col-sm-12 col-md-4">
                <label for="ciudades" class="form-label">Ciudad-Servicio: </label>
                <select name="idciudad" id="idciudad" class="form-control js-example-basic-single" onchange="agregar()">
                    @foreach($ciudades as $ciudad)
                        @foreach($itinerario->where('Nomciudad', $ciudad->Nomciudad) as $iti)
                            @php
                                $ciudades = $itinerario->unique('Nomciudad');
                                $precio_total = $iti->PrecioCiud + $iti->PrecioServ;
                            @endphp
                            <option value="{{ $iti->idciudad }}_{{ $iti->Nomciudad }}_{{ $precio_total }}_{{ $iti->NomServicio }}_{{ $iti->asientos }}_{{ $iti->horaida }}_{{ $iti->horallegada }}">{{ $ciudad->Nomciudad }}--{{ $iti->NomServicio }}</option>
                        @endforeach
                    @endforeach
                </select>
            </div>

            {{-- <div class="mb-3 col-sm-12 col-md-4">
                <label for="ciudades" class="form-label">Ciudad-Servicio: </label>
                <select name="idciudad" id="idciudad" class="form-control js-example-basic-single" onchange="agregar()">
                    @foreach($ciudades as $ciudad)
                        <option value="{{ $ciudad->Nomciudad }}_">{{ $ciudad->Nomciudad }}</option>
                    @endforeach
                </select>
            </div> --}}
    
            <div class="table-responsive">
                <table id="detalle" class="table table-hover">
                    <thead class="table-dark text-center">
                        <tr>
                        <th>Accion</th>
                        <th>Ciudad</th>
                        <th>Servicio</th>
                        <th>Hora de Ida</th>
                        <th>Hora de llegada</th>
                        <th>Precio</th>
                        <th>Cantidad Pasajes</th>
                        <th>Totales</th>
                        
                        </tr>
                    </thead>
                </table>
            </div>
    
            <div class="col mt-3">
                <div class="text-right">
                    <label for="">Sub-Total: &nbsp;&nbsp;&nbsp;&nbsp; <span id="sub-total"></span></label><br>
                    <label for="">Igv: &nbsp;&nbsp;&nbsp;&nbsp; <span id="igv"></span></label><br>
                    <label for="">TOTAL: &nbsp;&nbsp;&nbsp;&nbsp; <span id="total"></span></label><br>
                </div>
            </div>
    
            
    
        </div>
        <div class="text-center mb-5">
            <input class="btn btn-primary" id="idagregar" type="submit" value="Relizar venta" disabled="">
            <a class="btn btn-secondary" href="{{route('ventas.index')}}">Volver</a>
        </div>
    </form>
    
    
</div>

@endsection
@section('script')
<script>
    $(document).ready(function() {
    	$('.js-example-basic-single').select2();
	});
</script>

<script>
    var fechaInput = document.getElementById("fechaida");

    flatpickr(fechaInput, 
    {
        enableTime: false,
        dateFormat: "Y-m-d",
    });

    var fechaInputIda = document.querySelector(".datepicker#fechaida");

    flatpickr(fechaInputIda, 
    {
        enableTime: false,
        dateFormat: "Y-m-d",
    });
</script> 


<script>
    var fechaInput = document.getElementById("fecharetorno");

    flatpickr(fechaInput, 
    {
        enableTime: false,
        dateFormat: "Y-m-d",
    });

    var fechaInputRetorno = document.querySelector(".datepicker#fecharetorno");

    flatpickr(fechaInputRetorno, 
    {
        enableTime: false,
        dateFormat: "Y-m-d",
    });

</script> 

<script>
    var indice=0;
	var i=0;
	let vector=[]; 
    var total=0;
    var totales=0;
	var sum=0;
    var igv=0;
    var sub_total=0;

	function agregar()
	{
        vector = [];
		var cantidad=parseInt(prompt('Ingrese Cantidad de Pasajes'));
        if(cantidad>0){
            datosciudad=document.getElementById('idciudad').value.split('_');
            var dato=datosciudad[0];
            if (compara(dato,vector)){
                alert('Ya ha seleccionado esa Ciudad');
            }else{
                
                vector[i] = dato;	

                totales=parseFloat(datosciudad[2])*cantidad;
                sub_total=parseFloat(sub_total+totales);
                igv=sub_total*0.18;
                total=igv+sub_total;


                fila = '<tr id="fila' + indice + '" class="text-center"><td><a href="#" class="btn btn-danger btn-sm" onclick="quitar(' + indice + ',' + totales + ',' + datosciudad[0] + ')">Quitar</a></td><td><input type="hidden" name="idciudad[]" value="' + datosciudad[1] + '">' + datosciudad[1] + '</td><td>' + datosciudad[3] + '</td><td>' + datosciudad[5] + '</td><td>' + datosciudad[6] + '</td> <td>' + datosciudad[2] + '</td><td><input type="hidden" name="cantidad[]" value="' + cantidad + '">' + cantidad + '</td><td>' + parseFloat(totales).toFixed(2) + '</td></tr>';

                $('#detalle').append(fila);	                    

                actualizarValores();

                /* alert('vector'+vector);	 */	
                indice++;
                i++;		
		    }
        }else{
            alert('Debe ingresar una cantidad mayor a 0')
        }
		
	}

    function actualizarValores() {
        document.getElementById('sub-total').innerHTML = parseFloat(sub_total).toFixed(2);
        document.getElementById('igv').innerHTML = parseFloat(igv).toFixed(2);
        document.getElementById('total').innerHTML = parseFloat(total).toFixed(2);
        document.getElementById('idagregar').disabled = false;
    }
    
    function compara(producto,vector){
		for(let i=0; i<vector.length; i++){
			if(producto==vector[i]){
				return true;
			}
		}
		return false;
	}

	function borrar(producto, vector) {
        for (let i = 0; i < vector.length; i++) {
            if (producto == vector[i]) {
                vector[i] = -1;
            }
        }
    }

    function quitar(item, valor, id) {
        borrar(id, vector);
        $('#fila' + item).remove();
        sub_total = parseFloat(sub_total) - parseFloat(valor);
        igv = parseFloat(sub_total) * 0.18;
        total = parseFloat(sub_total) + parseFloat(igv);
        actualizarValores();
        indice--;
        if (indice == 0) {
            document.getElementById('idagregar').disabled = true;
        }
    }

</script>




@endsection