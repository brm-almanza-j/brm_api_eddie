<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Clientes;
use App\Otb_Ciudades;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Otb_Clientes::with('ciudad')->orderBy('id', 'ASC')->paginate(5);
        return view('admin.clientes.index')->with('clientes', $clientes);
    }

    public function create(){
        $relacion_ciudad = Otb_Ciudades::all('id', 'nombre');
        $atrib_ciudad = $relacion_ciudad->all('id', 'nombre');
        $array_ciudad = array('0' => 'Seleccionar...');
        for($i=0; $i<count($atrib_ciudad); $i++){
            $array_ciudad = $array_ciudad+[ $atrib_ciudad[$i]->id => $atrib_ciudad[$i]->nombre ];
        }
        return view('admin.clientes.create')->with('select_ciudad', $array_ciudad);;
    }

    public function store(Request $request){
        $cli = new Otb_Clientes($request->all());
        $cli->save();
    }
}
