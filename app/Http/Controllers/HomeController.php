<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\municipio;
use App\colonia_municipio;
use App\luminarias;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datos=DB::select('SELECT municipio.nombre_municipio as nombre,
                           COUNT(municipio.nombre_municipio)as censadas,SUM(luminarias.conciliada)as conciliada 
                           FROM municipio,colonia_municipio,luminarias 
                           WHERE municipio.id=colonia_municipio.municipio_id 
                           AND colonia_municipio.colonia_id=luminarias.colonia_municipio_id 
                           GROUP by (municipio.nombre_municipio)');
        return view('home',compact('datos'));
    }
}
