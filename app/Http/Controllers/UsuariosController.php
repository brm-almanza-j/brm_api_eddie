<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Otb_Usuarios;
use Cookie;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Otb_Usuarios::with('area', 'ciudad', 'grupo', 'perfil', 'franja_horaria', 'cliente')->orderBy('id', 'ASC')->paginate(5);
        //$usuarios = Otb_Usuarios::orderBy('id', 'ASC')->paginate(5);
        return $usuarios->all();
    }

    public function getAllUsuarios(){
        $all_usuarios = Otb_Usuarios::all();
        return $all_usuarios;
    }

    public function addUsuarios(Request $request){
        $add_usuarios = $request->all();
        $add_usuarios->nombre;
        $add_usuarios->contrasena = bcrypt($request->contrasena);
        $add_usuarios->save();
        $idusuario  = $add_usuarios->id;
        Cookie::queue('dato', $idusuario, 5);
        return $add_usuarios;
    }

    public function getUsuarios($id){
        $find_usuarios = Otb_Usuarios::find($id);
        return $find_usuarios;
    }

    public function editUsuarios(Request $request, $id){
        $edit_usuarios = $this->getUsuarios($id);
        $edit_usuarios->fill($request->all());
        $edit_usuarios->save();
        return $edit_usuarios;
    }

    public function deleteUsuarios($id){
        $del_usuarios = $this->getUsuarios($id);
        $del_usuarios->delete();
        return $del_usuarios;
    }
}
