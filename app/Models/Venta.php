<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente; 
use App\Models\empleados; 

class Venta extends Model
{
    use HasFactory;
    public function clientes()
    {
        return $this->belongsTo(Cliente::class, 'cliente');
    }

    public function empleados()
    {
        return $this->belongsTo(empleados::class, 'empleado');
    }
}
