<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = ['nombre', 'correo', 'telefono', 'direccion'];

    public function clientes()
    {
        return $this->hasMany(Pedido::class);
    }
}
