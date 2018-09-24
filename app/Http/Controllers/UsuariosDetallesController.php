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
        $usuarios = Otb_Usuarios::with('area', 'ciudad', 'grupo', 'perfil', 'franja_horaria', 'cliente')->orderBy('id', 'ASC')->paginate(5);
        //$usuarios = Otb_Usuarios::orderBy('id', 'ASC')->paginate(5);
        return $usuarios->all();
    }

    public function getAllUsuarios(){
        $all_usuarios = Otb_Usuarios_Detalles::all();
        return $all_usuarios;
    }

    public function create(){
        $id_usuario = \Request::cookie('dato');
        $datos_area = Recursos::getAreas();
        $datos_ciudad = Recursos::getCiudades();
        $datos_grupo = Recursos::getGrupos();
        $datos_perfil = Recursos::getPerfiles();
        $datos_fran_hora = Recursos::getFranjasHorarias();
        $datos_cliente = Recursos::getClientes();
        $array_datos = array(
            $datos_area, $datos_ciudad, $datos_grupo, $datos_perfil,
            $datos_fran_hora, $datos_cliente, $id_usuario
        );
        return view('admin.usuarios.createdetail')->with('select', $array_datos);
    }

    public function store(Request $request){
        $usuadetail = new Otb_Usuarios_Detalles($request->all());
        $usuadetail->save();
        return view('admin.usuarios.index');
    }
}
