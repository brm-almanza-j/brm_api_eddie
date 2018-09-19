<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Usuarios;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Otb_Usuarios::orderBy('id', 'ASC')->paginate(5);
        return view('admin.usuarios.index')->with('usuarios', $usuarios);
    }

    public function create(){
        return view('admin.usuarios.create');
    }

    public function store(Request $request){
        $usua = new Otb_Usuarios($request->all());
        $usua->contrasena = bcrypt($request->contrasena);
        $usua->save();
    }
}
