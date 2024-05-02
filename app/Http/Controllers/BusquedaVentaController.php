<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class BusquedaVentaController extends Controller
{
    public function search(Request $request)
    {
        $keyword1 = $request->input('keyword1');
        $keyword2 = $request->input('keyword2');

        if ($keyword1 && $keyword2) {
            $ventas = Venta::where('fecha_hora', 'LIKE', "%{$keyword1}%")
                         ->orWhere('numero_comprobante', 'LIKE', "%{$keyword2}%")
                         ->get();
            return response()->json($ventas);
        } else {
            return response()->json(['message' => 'Please provide both keywords'], 400);
        }
    }
}
