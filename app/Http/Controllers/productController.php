<?php

namespace App\Http\Controllers;
use App\Models\Bebida;
use Illuminate\Http\Request;

class productController extends Controller
{   
    public function getProductos(){
        return Bebida::all();
    }

    public function getProductoById($id){ 
        return Bebida::find($id);
    }  
    public function index(){
        $productos = $this->getProductos();
        return view("home",['productos'=>$productos]);
    }

    public function producto($id){
        $producto = $this->getProductoById($id);
        return view("producto",['producto'=>$producto]);
    }
}
