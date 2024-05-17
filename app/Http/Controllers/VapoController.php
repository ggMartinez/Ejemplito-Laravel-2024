<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Vapo;

class VapoController extends Controller
{

    public function Listar(){
        $vapos = Vapo::all();
        return view("Listar",[ "vapos" => $vapos ]);
    }
    public function Insertar(Request $request){
        $vapo = new Vapo();
        $vapo -> marca = $request -> post("marca");
        $vapo -> modelo = $request -> post("modelo");
        $vapo -> color = $request -> post("color");
        $vapo -> cantidad_de_pilas = $request -> post("cantidad_de_pilas");
        $vapo -> potencia_maxima = $request -> post("potencia_maxima");
        $vapo -> capacidad = $request -> post("capacidad");

        $vapo -> save();
        return redirect("/")->with("mensaje","Vapo insertado correctamente");
    }

    public function Eliminar(Request $request,$id){
        $vapo = Vapo::findOrFail($id);
        $vapo -> delete();
        return redirect("/")->with("mensaje","Vapo eliminado correctamente");
    }

    public function MostrarFormularioDeEdicion(Request $request,$id){
        $vapo = Vapo::findOrFail($id);
        return view("editar",[ "vapo" => $vapo ]);
    }

    public function Modificar(Request $request){
        $vapo = Vapo::findOrFail($request -> post("id"));
        $vapo -> marca = $request -> post("marca");
        $vapo -> modelo = $request -> post("modelo");
        $vapo -> color = $request -> post("color");
        $vapo -> cantidad_de_pilas = $request -> post("cantidad_de_pilas");
        $vapo -> potencia_maxima = $request -> post("potencia_maxima");
        $vapo -> capacidad = $request -> post("capacidad");

        $vapo -> save();
        return redirect("/")->with("mensaje","Vapo modificado correctamente"); 
    }
}
