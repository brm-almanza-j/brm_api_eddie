<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Ordenes_Trabajos extends Model
{
    protected $table = "otb_orden_trabajo";

    protected $fillable = [
        'identificador', 'fecha', 'id_estado', 'titulo',
        'descripcion', 'fecha_inicio', 'fecha_fin', 'id_cliente',
        'id_marca', 'id_grupo', 'id_tipo_ot', 'tiempo_asignado',
        'id_usuario_crea', 'id_franja_horaria',
        'tiempo_gastado', 'url_archivos', 'fecha_cierre'
    ];

    public function historicos_ots(){
        return $this->hasMany('App\Otb_Historicos_Ots');
    }

    public function usuarios_ots(){
        return $this->hasMany('App\Otb_Usuarios_Ots');
    }

    public function estado(){
        return $this->belongsTo('App\Otb_Estados');
    }

    public function cliente(){
        return $this->belongsTo('App\Otb_Clientes');
    }

    public function marca(){
        return $this->belongsTo('App\Otb_Marcas');
    }

    public function grupo(){
        return $this->belongsTo('App\Otb_Grupos');
    }

    public function tipo_ot(){
        return $this->belongsTo('App\Otb_Tipos_Ots');
    }

    public function usuario_crea(){
        return $this->belongsTo('App\Otb_Usuarios');
    }

    public function franja_horaria(){
        return $this->belongsTo('App\Otb_Franjas_Horarias');
    }
}
