<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Recursos;
use App\Otb_Usuarios;
use App\Otb_Usuarios_Detalles;
use Cookie;

class UsuariosDetallesController extends Controller
{
    public function index(){
        $usuarios = Otb_Usuarios_Detalles::with('usuario', 'area', 'ciudad', 'grupo', 'perfil', 'franja_horaria', 'cliente')->orderBy('id_usuario', 'ASC')->paginate(5);
        //$usuarios = Otb_Usuarios::orderBy('id', 'ASC')->paginate(5);
        return $usuarios->all();
    }

    public function getAllUsuarios(){
        $all_usuarios = Otb_Usuarios_Detalles::all();
        return $all_usuarios;
    }

    public function addUsuarios($request){
        $add_detalles = Otb_Usuarios_Detalles::create($request->all());
    }
}
