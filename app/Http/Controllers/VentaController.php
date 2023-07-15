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
        $ventas = Ventas::join('clientes', 'ventas.idcliente', '=', 'clientes.idcliente')
        ->select('ventas.idventas', 'clientes.nombre', 'ventas.fecha')
        ->get();

        //$ventas=DB::table('ventas as v')->join('clientes as c','v.idcliente','=','c.idcliente')->select('v.idventas','c.nombre','v.fecha')->paginate($this::PAGINATION);

        // $ventas = Ventas::all();
        return view('ventas.lista', ['ventas' => $ventas]);

        //return view('ventas.lista', compact('ventas')); // Pasar 'ventas' en lugar de 'ventas.lista'
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cliente = Cliente::all();
        $ciudades = DB::table('itinerario')->select('Nomciudad')->distinct()->get();
        $itinerario = Itinerario::all();


        //return $itinerario;
        return view('ventas.create', compact('cliente', 'itinerario', 'ciudades'));
        //return view('ventas.create', ['opciones' => $opciones],compact('cliente','ciudades','itinerario'));

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $venta = new Ventas();
        $venta->idcliente = $request->input('idcliente');
        $venta->idestado = 1; // Estado predeterminado, puedes ajustarlo según tu lógica
        $venta->fecha = now();
        $venta->save();

        // $itinerarios = $request->input('idciudad');

        // foreach ($itinerarios as $itinerario) {
        //     $datos = explode('_', $itinerario);
        //     $iditinerario = $datos[0];
        //     $cantidad = $request->input('cantidad_'.$iditinerario);

        //     $detalleVenta = new DetalleVenta();
        //     //$detalleVenta->idventas =$request-> $idventa;
        //     $detalleVenta->iditinerario =$request-> $iditinerario;
        //     $detalleVenta->cantidad =$request-> $cantidad;
        //     $detalleVenta->save();
        // }

        return $idventa;

        // Redirigir a la vista de confirmación o a la lista de ventas
        //return redirect()->route('ventas.index')->with('mensaje', 'La venta se ha registrado correctamente.');
        
        //return redirect()->route('ventas.index')->with('datos','Venta de pasaje se ha creado correctamente');
        //return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
