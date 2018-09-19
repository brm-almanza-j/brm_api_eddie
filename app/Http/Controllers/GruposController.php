<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Grupos;
use App\Otb_Areas;

class GruposController extends Controller
{
    public function index(){
        $grupos = Otb_Grupos::with('area')->orderBy('id', 'ASC')->paginate(5);
        return view('admin.grupos.index')->with('grupos', $grupos);
    }

    public function create(){
        $relacion_area = Otb_Areas::all('id', 'nombre');
        $atrib_area = $relacion_area->all('id', 'nombre');
        $array_area = array('0' => 'Seleccionar...');
        for($i=0; $i<count($atrib_area); $i++){
            $array_area = $array_area+[ $atrib_area[$i]->id => $atrib_area[$i]->nombre ];
        }
        return view('admin.grupos.create')->with('select_area', $array_area);;
    }

    public function store(Request $request){
        $gru = new Otb_Grupos($request->all());
        $gru->save();
    }
}
