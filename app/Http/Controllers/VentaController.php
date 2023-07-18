<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Estado;
use App\Models\DetalleVenta;
use App\Models\Ventas;
use App\Models\Itinerario;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PAGINATION=10;
    public function index()
    {
        //
        // $ventas = Ventas::join('clientes', 'ventas.idcliente', '=', 'clientes.idcliente')
        // ->select('ventas.idventas', 'clientes.nombre', 'ventas.fecha')
        // ->get();

        //return view('ventas.lista', ['ventas' => $ventas]);

        $ventas=DB::table('ventas as v')->join('clientes as c','v.idcliente','=','c.idcliente')->select('v.idventas','c.nombre','v.idestado','v.fecha')->paginate($this::PAGINATION);

        return view('ventas.lista', compact('ventas')); // Pasar 'ventas' en lugar de 'ventas.lista'
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $cliente = Cliente::all();
        $estado = Estado::all();
        $itinerarios = Itinerario::all();

        //return $itinerario;
        return view('ventas.create', compact('cliente', 'itinerarios','estado'));
        //return view('ventas.create', ['opciones' => $opciones],compact('cliente','ciudades','itinerario'));

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $ventas=new Ventas();
            $ventas->idcliente=$request->idcliente;
            $ventas->idestado=$request->idestado;
            $ventas->fecha=now();
            $ventas->fechaIda = $request->fechaIda_hidden;
            $ventas->fechaRetorno = $request->fechaRetorno_hidden;
            $ventas->save();
            $itinerarios=$request->iditinerarios;
            $i=0;
            foreach($itinerarios as $it){
                $detalle=new DetalleVenta();
                $detalle->idventas=$ventas->idventas;
                $detalle->iditinerario=$it[0];
                $detalle->cantidad=$request->cantidad[$i];
                $detalle->save();

                $itinerario=Itinerario::find($it[0]);
                $itinerario->asientos=$itinerario->asientos-$request->cantidad[$i];
                $itinerario->save();

                $i++;
            }

        //return $request;
        return redirect()->route('ventas.index')->with('datos','La venta se ha creado correctamente');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $ventas=Ventas::find($id);
        $clientes=DB::table('clientes')->where('idcliente','=',$ventas->idcliente)->get();
        $estado=DB::table('estado')->where('idestado','=',$ventas->idestado)->get();
        $itinerario=DB::table('detalleventa as d')->join('itinerario as i','d.iditinerario','=','i.iditinerario')->where('d.idventas','=',$ventas->idventas)->select('d.cantidad','i.Nomciudad','i.PrecioCiud','i.NomServicio','i.PrecioServ','i.horaida','i.horallegada')->get();
        return view('ventas.show',compact('ventas','clientes','estado','itinerario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
