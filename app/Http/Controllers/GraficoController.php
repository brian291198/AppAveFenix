<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoController extends Controller
{
    //

    public function index ()
    {
        $pasajes=DB::select('CALL pasajes_vendidos();');
        $puntos=[];
        foreach ($pasajes as $p) {
            // Verifica si el valor de 'total' es mayor que cero o no es nulo
            if ($p->total > 0) {
                $puntos[] = [
                    'name' => $p->Nomciudad, 
                    'y' => floatval($p->total),
                    'monto_total' => floatval($p->monto_total)

                ];
            }
        }
        return view('graficos.index', ['data' => json_encode($puntos)]);
        //return $puntos;
    }

}
