<?php

use Illuminate\Support\Facades\Route;


// web.php
Route::get('/clientes', fn() => dd(App\Models\Cliente::all()));
Route::get('/empleados', fn() => dd(App\Models\Empleado::all()));
Route::get('/categorias', fn() => dd(App\Models\Categoria::all()));
Route::get('/productos', fn() => dd(App\Models\Producto::with('categoria','proveedor')->get()));
Route::get('/proveedores', fn() => dd(App\Models\Proveedor::all()));
Route::get('/pedidos', fn() => dd(App\Models\Pedido::with('cliente','empleado')->get()));

