<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Areas;
use App\Otb_Ciudades;
use App\Otb_Usuarios;

class AreasController extends Controller
{
    public function index(){
        $areas = Otb_Areas::with('ciudad', 'usuario_jefe')->orderBy('id', 'ASC')->paginate(5);
        return view('admin.areas.index')->with('areas', $areas);
    }

    public function create(){
        $relacion_ciudad = Otb_Ciudades::all('id', 'nombre');
        $atrib_ciudad = $relacion_ciudad->all('id', 'nombre');
        $array_ciudad = array('0' => 'Seleccionar...');
        for($i=0; $i<count($atrib_ciudad); $i++){
            $array_ciudad = $array_ciudad+[ $atrib_ciudad[$i]->id => $atrib_ciudad[$i]->nombre ];
        }
        $relacion_usuario = Otb_Usuarios::all('id', 'nombre');
        $atrib_usuario = $relacion_usuario->all('id', 'nombre');
        $array_usuario = array('0' => 'Seleccionar...');
        for($i=0; $i<count($atrib_usuario); $i++){
            $array_usuario = $array_usuario+[ $atrib_usuario[$i]->id => $atrib_usuario[$i]->nombre ];
        }
        $array_datos = array($array_ciudad, $array_usuario);

        return view('admin.areas.create')->with('select', $array_datos);
    }

    public function store(Request $request){
        $are = new Otb_Areas($request->all());
        $are->save();
    }
}
