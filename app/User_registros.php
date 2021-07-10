<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_registros extends Model
{
    protected $table ="users";
    protected $primaryKey="id";
    protected $fillable=["email","municipio_id","password","name","a_paterno","a_materno","remember_token",        
    "created_at","updated_at", "rol_id","admin"];
}