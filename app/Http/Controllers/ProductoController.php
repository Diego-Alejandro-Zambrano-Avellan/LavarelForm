<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
class ProductoController extends Controller
{
    public function store(Request $resquest){

        $productos = new productos();
        $productos->producto = $resquest->producto;
        $productos->precio = $resquest->precio;
        $productos->cantidad = $resquest->cantidad;
        $productos->save();
        
    }
    public function productos(){
        return view('Productos.producto');
    }
}
