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
        $data=DB::select('SELECT municipio.nombre_municipio,users.email,users.name,users.a_paterno,users.a_materno 
                          FROM municipio,users
                          WHERE municipio.id=users.municipio_id');
        return $data;
    }

    public function agregamun(Request $request){
        $planea = array(
            "nom_municipio"=>$request->nom_municipio,
            "cargo" => $request->cargo,
            "representante" => $request->representante,
        );

        Municipios::create($planea);
    }

    public function verelimina(Request $request){
        $data['valores']=DB::select('SELECT id_municipios FROM municipios WHERE id_municipios='.$request->id);
        return $data;
    }

    public function aceptaelimina(Request $request){

        DB::table('municipios')->where('id_municipios', $request->id_mun)->delete();
        DB::table('users')->where('id_municipios', $request->id_mun)->delete();
    }

    public function vereactualiza(Request $request){
        $data['valores']=DB::select('SELECT * FROM municipios WHERE id_municipios='.$request->id);
        return $data;
    }

    public function aceptactualizar(Request $request){
        DB::table('municipios')
                ->where('id_municipios', '=', $request->id_mun)
                ->update(array("nom_municipio"=>$request->nom_mun,
                               "representante"=>$request->repre,
                               "cargo"=>$request->cargo));
    }
}