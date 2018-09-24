<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Recursos;
use App\Otb_Ordenes_Trabajos;

class OrdenesTrabajosController extends Controller
{
    public function index(){
        //
    }

    public function create(){
        $array_cliente = Recursos::getClientes();
        return view('gestion.ots.create')->with('select_cliente', $array_cliente);
    }
}
