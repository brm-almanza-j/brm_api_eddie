<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Recursos;
use App\Otb_Ordenes_Trabajos;
use App\Otb_Historicos_Ots;

class OrdenesTrabajosController extends Controller
{
    public function index($id_usuario){
        $ots = Otb_Ordenes_Trabajos::with('estado', 'cliente', 'marca', 'grupo', 'tipo_ot', 'usuario_crea', 'franja_horaria')
            ->join('otb_usuarios_ot', 'otb_orden_trabajo.id', '=', 'otb_usuarios_ot.id_orde_trabajo')
            ->where('otb_usuarios_ot.id_usuario', '=', $id_usuario)
            ->orderBy('id', 'ASC')
            ->paginate(5);
        return $ots->all();
    }

    public function getAllOts(){
        $all_ots = Otb_Ordenes_Trabajos::all();
        return $all_ots;
    }

    public function addOts(Request $request){
        $add_ots = Otb_Ordenes_Trabajos::create($request->all());
        $idot  = $add_usuarios->id;
        $idusuario  = $add_usuarios->id_usuarios_responsables;
        $add_usu_ots = new Otb_Usuarios_Ots();
        $add_usu_ots->id_orde_trabajo = $idot;
        $add_usu_ots->id_usuario = $idusuario;
        $add_usu_ots->finalizado = "0";
        $add_usu_ots->save();
        $addhistorico = new Otb_Historicos_Ots();
        $addhistorico->id_estado = "1";
        $addhistorico->comentario = $request->comentario;
        $addhistorico->id_orden_trabajo = $request->id_orden_trabajo;
        $addhistorico->id_usuario_comenta = $request->id_usuario_comenta;
        $addhistorico->save();
        return $add_ots;
    }

    public function getOts($id){
        $find_ots = Otb_Ordenes_Trabajos::find($id);
        return $find_ots;
    }

    public function editOts(Request $request, $id){
        $edit_ots = $this->getOts($id);
        $edit_ots->fill($request->all());
        $edit_ots->save();
        return $edit_ots;
    }

    public function getOtsEst($id){
        $relacion_estados = Otb_Ordenes_Trabajos::join('otb_usuarios_ot', 'otb_orden_trabajo.id', '=', 'otb_usuarios_ot.id_orde_trabajo')
        ->where('otb_usuarios_ot.id_usuario', '=', $id_usuario)
        ->where('id_estado', $id)->get();
        return $relacion_estados;
    }

}
