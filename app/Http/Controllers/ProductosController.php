<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function getProductos(){
        return view('productos.productos_index');

    }

    public function getCreate(){
        return view('productos.productos_create');

    }

    public function getEdit(){
        return view('productos.productos_edit');

    }
}
