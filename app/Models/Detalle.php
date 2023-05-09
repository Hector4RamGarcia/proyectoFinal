<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Venta;
use app\Models\productos;

class Detalle extends Model
{
    use HasFactory;
    public function ventas(){
        return $this->belongsTo(Venta::class,'venta_id','id'); 
    }
    public function productos(){
        return $this->belongsTo(productos::class,'producto','id'); 
    }
}
