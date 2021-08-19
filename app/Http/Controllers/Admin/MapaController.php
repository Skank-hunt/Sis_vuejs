<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapaController extends Controller
{
    public function index()
    {
        $datos = DB::select('SELECT latitud,longitud, nombre_municipio, nombre_colonia, nombre_calle, tipo_via, 
                                   carga_aceptada, fotografia FROM luminarias_completa');
        $datos2 = DB::select('SELECT DISTINCT(nombre_colonia) FROM luminarias_completa');
        return view('admin_mapa.index',compact('datos','datos2'));
    }
}