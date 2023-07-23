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
        foreach($pasajes as $p){
            $puntos[] = ['name' => $p->Nomciudad, 'y' => floatval($p->total)];
        }
        return view('graficos.index', ['data' => json_encode($puntos)]);
        /* return $puntos; */
    }

}
