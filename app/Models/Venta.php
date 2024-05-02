<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'cliente_id',
        'user_id',
        'comprobante_id',
        'numero_comprobante',
        'fecha_hora',
        'impuesto',
        'total',
        'estado'
    ];
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comprobante(){
        return $this->belongsTo(Comprobante::class);
    }

    public function productos(){
        return $this->belongsToMany(Producto::class)->withTimestamps()
        ->withPivot('cantidad','precio_venta','descuento');
    }
}
