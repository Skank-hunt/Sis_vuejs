<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $table ="municipio";
    protected $primaryKey="id";
    public $timestamps = false;
    protected $fillable=["nombre_municipio"];
}
