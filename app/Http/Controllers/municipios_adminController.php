<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Municipios;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class municipios_adminController extends Controller
{
    public function index()
    {
     	return view('admin_municipios.index');
    }

    public  function listarmun(Request $request){
        $data=DB::select('SELECT id,nombre_municipio FROM municipio');
        return $data;
    }

    public function agregamun(Request $request){
        $mun = array(
            "nombre_municipio"=>$request->nombre_municipio
        );
        Municipios::create($mun);
    }

    public function verelimina(Request $request){
        $data['valores']=DB::select('SELECT id FROM municipio WHERE id='.$request->id);
        return $data;
    }

    public function aceptaelimina(Request $request){

        DB::table('municipio')->where('id', $request->id_mun)->delete();
        DB::table('users')->where('municipio_id', $request->id_mun)->delete();
    }

    public function vereactualiza(Request $request){
        $data['valores']=DB::select('SELECT id,nombre_municipio FROM municipio WHERE id='.$request->id);
        return $data;
    }

    public function aceptactualizar(Request $request){
        DB::table('municipio')
                ->where('id', '=', $request->id_mun)
                ->update(array("nombre_municipio"=>$request->nom_mun));
    }
}