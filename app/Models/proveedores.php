<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $fillable = ['nombre', 'contacto', 'telefono'];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
