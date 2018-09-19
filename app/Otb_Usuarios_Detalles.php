<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Usuarios_Detalles extends Model
{
    protected $table = "otb_usuario_detalle";

    protected $fillable = [
        'id_usuario', 'id_area', 'id_ciudad', 'id_grupo', 
        'id_perfil', 'id_franja_horaria', 'id_cliente'
    ];

    public function usuario(){
        return $this->belongsTo('App\Otb_Usuarios');
    }

    public function area(){
        return $this->belongsTo('App\Otb_Areas');
    }

    public function ciudad(){
        return $this->belongsTo('App\Otb_Ciudades');
    }
    
    public function grupo(){
        return $this->belongsTo('App\Otb_Grupos');
    }

    public function perfil(){
        return $this->belongsTo('App\Otb_Perfiles');
    }

    public function franja_horaria(){
        return $this->belongsTo('App\Otb_Franjas_Horarias');
    }

    public function cliente(){
        return $this->belongsTo('App\Otb_Clientes');
    }
    
}
