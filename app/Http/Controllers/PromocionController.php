<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocion;

class PromocionController extends Controller
{
    public function index() {
        $promociones = Promocion::all();
        return view('encomiendas.promociones.index', ['promociones' => $promociones]);
    }

    public function create() {
        return view('encomiendas.promociones.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'Nombre' => 'required|max:30',
            'Codigo' => 'required|max:20',
            'Descuento' => 'required|numeric',
            'Estado' => 'required|max:10',
        ]);

        $newTransporte = Promocion::create($data);
        return redirect(route('promociones.index'));
    }

    public function edit(Promocion $promocion) {
        return view('encomiendas.promociones.edit', ['promocion' => $promocion]);
    }

    public function update(Promocion $promocion, Request $request) {
        $data = $request->validate([
            'Nombre' => 'required|max:30',
            'Codigo' => 'required|max:20',
            'Descuento' => 'required|numeric',
            'Estado' => 'required|max:10',
        ]);

        $promocion->update($data);
        return redirect(route('promociones.index'))->with('success', 'Promocion actualizada');
    }

    public function delete(Promocion $promocion) {
        $promocion->delete();
        return redirect(route('promociones.index'))->with('success', 'Promocion eliminada');
    }
}
