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
        return back();
    }
    public function productos(){

        $productos =productos::all();
        return view('Productos.producto',compact('productos'));
     
    }
    public function delete($id){
        $productos = productos::find($id);
        $productos->delete();
        return back();
    }
    public function edit($id){
        $productos = productos::find($id);
        return view('welcome',compact('productos'));
    }
    public function Update($id,Request $resquest){
        $productos = productos::find($id);
        $productos->producto = $resquest->producto;
        $productos->precio = $resquest->precio;
        $productos->cantidad = $resquest->cantidad;
        $productos->save();
        return redirect('/');
        
    }
}
