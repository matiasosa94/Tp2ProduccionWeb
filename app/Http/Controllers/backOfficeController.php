<?php

namespace App\Http\Controllers;

use App\Models\Bebida;
use App\Models\Marca;
use App\Models\Tipo;
use Illuminate\Http\Request;

class backOfficeController extends Controller
{
    /*mostrar productos para editar o eliminar*/
    public function index(){
        $productos= Bebida::all();
        return view("backOffice.listadoBebidas",compact("productos"));
    }

    /*crear un producto*/
    public function altaBebida(){
        $marcas=Marca::all();
        $tipos=Tipo::all();
        return view("backOffice.altaProducto",compact("marcas","tipos"));
    }
/* persistir el producto en la bd*/
    public function guardarBebida(){
        $bebida= new Bebida();
        $bebida->nombre =request()->input("nombre");
        $bebida->cantidad=request()->input("cantidad");
        $bebida->precio=request()->input("precio");
        $bebida->marca_id=request()->input("marca");
        $bebida->tipo_id=request()->input("tipo");
        $bebida->imagen=request()->input("imagen");
        $bebida->descripcion=request()->input("descripcion");
        $bebida->save();
        return redirect("backOffice/bebida");
    }
    /*formulario para editar bebida*/
    public function editarBebida(){

    }
    /*guardar cambios de una bebida*/
    public function updateBebida(Request $request){
    }


/*mostrar listado de marcas*/
    public function marcas(){
        $marcas = Marca::all(); 
        return view("backOffice.listadoMarcas",compact("marcas"));

    }
/*formulario de creacion de marcas*/
    public function altaMarca(){
        return view("backOffice.altaMarca");
    }
/*persistencia de la nueva marca en la bd*/
    public function guardarMarca(){
        $marca= new Marca();
        $marca->marca = request()->input('marca');
        $marca->save();
        return redirect("backOffice/marca");

    }
    /*mostrar listado de tipos*/
    public function tipos(){
        $tipos = Tipo::all(); 
        return view("backOffice.listadoTipos",compact("tipos"));

    }

    /*formulario de creacion de tiposBebidas*/
    public function altaTipo(){
        return view("backOffice.altaTipoBebida");
    }

    /*persistencia del nuevo tipo en la bd*/
    public function guardarTipo(){
        $tipo= new Tipo();
        $tipo->tipo = request()->input('tipo');
        $tipo->save();
        return redirect("backOffice/tipo");
    }
}
