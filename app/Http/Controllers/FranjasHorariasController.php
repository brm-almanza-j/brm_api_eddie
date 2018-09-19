<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Franjas_Horarias;

class FranjasHorariasController extends Controller
{
    public function index(){
        $franjas = Otb_Franjas_Horarias::orderBy('id', 'ASC')->paginate(5);
        return view('admin.franjashorarias.index')->with('franja', $franjas);
    }

    public function create(){
        return view('admin.franjashorarias.create');
    }

    public function store(Request $request){
        $franja = new Otb_Franjas_Horarias($request->all());
        $franja->save();
    }
}
