<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class BusquedaVentaController extends Controller
{
    public function search(Request $request)
    {
        // Verifica si se han proporcionado keyword y fecha en la solicitud
        if ($request->has('keyword') && $request->has('fecha')) {
            // Obtén la palabra clave y la fecha de la solicitud
            $keyword = $request->input('keyword');
            $fecha = $request->input('fecha');

            // Realiza la búsqueda en la base de datos utilizando Eloquent, filtrando por keyword y fecha
            $ventas = Venta::where('graduacion', $keyword)
                           ->whereDate('fecha', $fecha)
                           ->get();

            // Devuelve los resultados de la búsqueda
            return response()->json(['ventas' => $ventas], 200);
        } else {
            // Si no se proporciona alguno de los parámetros, devuelve un mensaje de error
            return response()->json(['message' => 'Debe proporcionar keyword y fecha'], 400);
        }
    }

}
