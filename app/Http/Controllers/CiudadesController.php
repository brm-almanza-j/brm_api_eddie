<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Ciudades;
use App\Otb_Regionales;

class CiudadesController extends Controller
{
    public function index(){
        $city = Otb_Ciudades::with('regional')->orderBy('id', 'ASC')->paginate(5);
        return view('admin.ciudades.index')->with('city', $city);
    }

    public function create(){
        $relacion_regional = Otb_Regionales::all('id', 'nombre');
        $atrib_regional = $relacion_regional->all('id', 'nombre');
        $array_regional= array('0'=> 'Seleccionar...');
        for($i=0; $i<count($atrib_regional); $i++){
            $array_regional = $array_regional+[ $atrib_regional[$i]->id => $atrib_regional[$i]->nombre ];
        }
        return view('admin.ciudades.create')->with('select_regionales', $array_regional);
    }

    public function store(Request $request){
        $ciudades = new Otb_Ciudades($request->all());
        $ciudades->save();
    }
}
