<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Marcas;
use App\Otb_Ciudades;
use App\Otb_Clientes;

class MarcasController extends Controller
{
    public function index(){
        $marcas = Otb_Marcas::with('ciudad', 'cliente')->orderBy('id', 'ASC')->paginate(5);
        return view('admin.marcas.index')->with('marcas', $marcas);
    }

    public function create(){
        $relacion_ciudad = Otb_Ciudades::all('id', 'nombre');
        $atrib_ciudad = $relacion_ciudad->all('id', 'nombre');
        $array_ciudad = array('0' => 'Seleccionar...');
        for($i=0; $i<count($atrib_ciudad); $i++){
            $array_ciudad = $array_ciudad+[ $atrib_ciudad[$i]->id => $atrib_ciudad[$i]->nombre ];
        }
        $relacion_cliente = Otb_Clientes::all('id', 'nombre');
        $atrib_cliente = $relacion_cliente->all('id', 'nombre');
        $array_cliente = array('0' => 'Seleccionar...');
        for($i=0; $i<count($atrib_cliente); $i++){
            $array_cliente = $array_cliente+[ $atrib_cliente[$i]->id => $atrib_cliente[$i]->nombre ];
        }
        $array_datos = array($array_ciudad, $array_cliente);
        return view('admin.marcas.create')->with('select', $array_datos);
    }

    public function store(Request $request){
        $mar = new Otb_Marcas($request->all());
        $mar->save();
    }
}
