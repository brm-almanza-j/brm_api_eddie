<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Perfiles;
use App\Otb_Grupos;

class PerfilesController extends Controller
{
    public function index(){
        $perfiles = Otb_Perfiles::with('grupo')->orderBy('id', 'ASC')->paginate(5);
        return view('admin.perfiles.index')->with('perfiles', $perfiles);
    }

    public function create(){
        $relacion_grupo = Otb_Grupos::all('id', 'nombre');
        $atrib_grupo = $relacion_grupo->all('id', 'nombre');
        $array_grupo = array('0' => 'Seleccionar...');
        for($i=0; $i<count($atrib_grupo); $i++){
            $array_grupo = $array_grupo+[ $atrib_grupo[$i]->id => $atrib_grupo[$i]->nombre ];
        }
        return view('admin.perfiles.create')->with('select_grupo', $array_grupo);;
    }

    public function store(Request $request){
        $gru = new Otb_Perfiles($request->all());
        $gru->save();
    }
}
