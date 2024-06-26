<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class Venta2Controller extends Controller
{
    public function index(Request $request)
    {
        $query = Venta::with(['comprobante', 'cliente.persona', 'user'])->latest();

        if ($request->has('estado')) {
            $query->where('estado', $request->estado);
        }
        if ($request->has('graduacion')){
            $query->where('numero_comprobante',"LIKE", "%".$request->graduacion."%");
        }

        if ($request->has('fecha')){
            $query->whereDate('fecha_hora', $request->fecha);
        }

        $ventas = $query->get()->map(function ($venta) {
            $venta['isCompleted'] = $venta['estado'] > 0;
            return $venta;
        });

        return response()->json($ventas);
    }
}
