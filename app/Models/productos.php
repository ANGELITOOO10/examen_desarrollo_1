<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = ['nombre', 'precio', 'categoria_id', 'proveedor_id'];

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
