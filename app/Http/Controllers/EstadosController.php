<?php

namespace App\Http\Controllers;

use App\Otb_Estados;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    public function index(){
        $estados = Otb_Estados::orderBy('id', 'ASC')->paginate(5);
        return view('admin.estados.index')->with('estados', $estados);
    }

    public function create(){
        return view('admin.estados.create');
    }

    public function store(Request $request){
        $estado = new Otb_Estados($request->all());
        $estado->save();
    }
}
