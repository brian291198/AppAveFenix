<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Personal;


class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PAGINATION=10;
    public function index(Request $request)
    {
        //
        $buscarpor=$request->get('buscarpor');
         $bus=Bus::where('control','=','1')->where('cod_institucional','like',$buscarpor.'%')->paginate($this::PAGINATION); 
   
         return view('Bus.index',compact('bus','buscarpor')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        

        $bus=Bus::where('control','=','1')->get();
        $personal=Personal::where('control','=','1')->get();
        return view('Bus.create',compact('bus','personal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=request()->validate([ 

            'cod_institucional'=>'required|max:100',
            'modelo'=>'required|max:100',
            'anio_fabricacion'=>'required',
            'peso_toneladas'=>'required',
            'num_cilindros'=>'required',
            'num_ocupantes'=>'required',
            'tipo_transmision'=>'required',
            'num_ejes'=>'required',
            'num_ruedas'=>'required',
            'cod_neumaticos'=>'required',
            'potencia'=>'required',
            'torque'=>'required',
            'ancho'=>'required',
            'largo'=>'required',
            'alto'=>'required',
            'placa'=>'required',
            'num_motor'=>'required',
            'num_chasis'=>'required',
            'combustible'=>'required',
            'estado_actual'=>'required',
            'valor'=>'required',

    
            ],
            [
            'cod_institucional.required'=>'Ingrese un codigo_institucional',
            'cod_institucional.max'=>'No exceder de 100 caracteres',

            'modelo.required'=>'Ingrese el modelo',
            'modelo.max'=>'No exceder de 100 caracteres',

            'anio_fabricacion.required'=>'Ingrese la información solicitada',
            'peso_toneladas.required'=>'Ingrese la información solicitada',
            'num_cilindros.required'=>'Ingrese la información solicitada',
            'num_ocupantes.required'=>'Ingrese la información solicitada',
            'tipo_transmision.required'=>'Ingrese la información solicitada',
            'num_ejes.required'=>'Ingrese la información solicitada',
            'num_ruedas.required'=>'Ingrese la información solicitada',
            'cod_neumaticos.required'=>'Ingrese la información solicitada',
            'potencia.required'=>'Ingrese la información solicitada',
            'torque.required'=>'Ingrese la información solicitada',
            'ancho.required'=>'Ingrese la información solicitada',
            'largo.required'=>'Ingrese la información solicitada',
            'alto.required'=>'Ingrese la información solicitada',
            'placa.required'=>'Ingrese la información solicitada',
            'num_motor.required'=>'Ingrese la información solicitada',
            'num_chasis.required'=>'Ingrese la información solicitada',
            'combustible.required'=>'Ingrese la información solicitada',
            'estado_actual.required'=>'Ingrese la información solicitada',
            'valor.required'=>'Ingrese la información solicitada',

           
            ]);
           

            $bus=new Bus();

            $bus->cod_institucional=$request->cod_institucional;
            $bus->anio_fabricacion=$request->anio_fabricacion;
            $bus->peso_toneladas=$request->peso_toneladas;
            $bus->num_cilindros=$request->num_cilindros;
            $bus->num_ocupantes=$request->num_ocupantes;
            $bus->tipo_transmision=$request->tipo_transmision;
            $bus->num_ejes=$request->num_ejes; 
            $bus->num_ruedas=$request->num_ruedas;
            $bus->cod_neumaticos=$request->cod_neumaticos;
            $bus->modelo=$request->modelo;
            $bus->potencia=$request->potencia;
            $bus->torque=$request->torque;
            $bus->ancho=$request->ancho;
            $bus->largo=$request->largo;
            $bus->alto=$request->alto;
            $bus->placa=$request->placa;
            $bus->num_motor=$request->num_motor;
            $bus->num_chasis=$request->num_chasis;
            $bus->combustible=$request->combustible;
            $bus->estado_actual=$request->estado_actual;
            $bus->valor=$request->valor;
            $bus->id_personal=$request->id_personal;

            $bus->control='1';
            $bus->save();
   
              return redirect()->route('Bus.index')->with('datos','Registro Nuevo Guardado...!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $bus=Bus::findOrFail($id);
        $personal=Personal::where('control','=','1')->get();

    
        return view('Bus.edit',compact('bus','personal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data=request()->validate([ 

            'cod_institucional'=>'required|max:100',
            'modelo'=>'required|max:100',
            'anio_fabricacion'=>'required',
            'peso_toneladas'=>'required',
            'num_cilindros'=>'required',
            'num_ocupantes'=>'required',
            'tipo_transmision'=>'required',
            'num_ejes'=>'required',
            'num_ruedas'=>'required',
            'cod_neumaticos'=>'required',
            'potencia'=>'required',
            'torque'=>'required',
            'ancho'=>'required',
            'largo'=>'required',
            'alto'=>'required',
            'placa'=>'required',
            'num_motor'=>'required',
            'num_chasis'=>'required',
            'combustible'=>'required',
            'estado_actual'=>'required',
            'valor'=>'required',

    
            ],
            [
            'cod_institucional.required'=>'Ingrese un codigo_institucional',
            'cod_institucional.max'=>'No exceder de 100 caracteres',

            'modelo.required'=>'Ingrese el modelo',
            'modelo.max'=>'No exceder de 100 caracteres',

            'anio_fabricacion.required'=>'Ingrese la información solicitada',
            'peso_toneladas.required'=>'Ingrese la información solicitada',
            'num_cilindros.required'=>'Ingrese la información solicitada',
            'num_ocupantes.required'=>'Ingrese la información solicitada',
            'tipo_transmision.required'=>'Ingrese la información solicitada',
            'num_ejes.required'=>'Ingrese la información solicitada',
            'num_ruedas.required'=>'Ingrese la información solicitada',
            'cod_neumaticos.required'=>'Ingrese la información solicitada',
            'potencia.required'=>'Ingrese la información solicitada',
            'torque.required'=>'Ingrese la información solicitada',
            'ancho.required'=>'Ingrese la información solicitada',
            'largo.required'=>'Ingrese la información solicitada',
            'alto.required'=>'Ingrese la información solicitada',
            'placa.required'=>'Ingrese la información solicitada',
            'num_motor.required'=>'Ingrese la información solicitada',
            'num_chasis.required'=>'Ingrese la información solicitada',
            'combustible.required'=>'Ingrese la información solicitada',
            'estado_actual.required'=>'Ingrese la información solicitada',
            'valor.required'=>'Ingrese la información solicitada',

           
            ]);
        
            $bus=Bus::findOrFail($id);
            $bus->cod_institucional=$request->cod_institucional;
            $bus->anio_fabricacion=$request->anio_fabricacion;
            $bus->peso_toneladas=$request->peso_toneladas;
            $bus->num_cilindros=$request->num_cilindros;
            $bus->num_ocupantes=$request->num_ocupantes;
            $bus->tipo_transmision=$request->tipo_transmision;
            $bus->num_ejes=$request->num_ejes; 
            $bus->num_ruedas=$request->num_ruedas;
            $bus->cod_neumaticos=$request->cod_neumaticos;
            $bus->modelo=$request->modelo;
            $bus->potencia=$request->potencia;
            $bus->torque=$request->torque;
            $bus->ancho=$request->ancho;
            $bus->largo=$request->largo;
            $bus->alto=$request->alto;
            $bus->placa=$request->placa;
            $bus->num_motor=$request->num_motor;
            $bus->num_chasis=$request->num_chasis;
            $bus->combustible=$request->combustible;
            $bus->estado_actual=$request->estado_actual;
            $bus->valor=$request->valor;

            $bus->id_personal=$request->id_personal;
            $bus->save();
   
              return redirect()->route('Bus.index')->with('datos','Registro Nuevo Guardado...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $bus=Bus::findOrFail($id);
        $bus->control='0';
        $bus->save();
        return redirect()->route('Bus.index')->with('datos','Registro Eliminado...!');
    }
}
