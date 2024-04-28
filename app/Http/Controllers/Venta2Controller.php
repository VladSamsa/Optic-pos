<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVentaRequest;
use App\Models\Cliente;
use App\Models\Comprobante;
use App\Models\Producto;
use App\Models\Venta;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Venta2Controller extends Controller
{
    public function index()
{
    $ventas = Venta::with(['comprobante', 'cliente.persona', 'user'])
        ->where('estado', 1)
        ->latest()
        ->get();

    return response()->json($ventas);
}
}
