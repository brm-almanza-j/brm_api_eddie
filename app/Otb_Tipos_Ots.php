<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Tipos_Ots extends Model
{
    protected $table = "otb_tipo_ot";

    protected $fillable = [
        'fecha', 'tipo', 'id_marca'
    ];

    public function subtipos_ots(){
        return $this->hasMany('App\Otb_Subtipos_Ots');
    }

    public function ordenes_trabajos(){
        return $this-hasMany('App\Otb_Ordenes_Trabajos');
    }

}
