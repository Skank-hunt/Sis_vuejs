<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User_registros;

class usuarios_adminController extends Controller
{
	public function index()
    {
     	return view('admin_usuarios.index');
    }

    public function listauser(Request $request){
        $data=DB::select('SELECT users.id,municipio.nombre_municipio,users.email,users.name,
                          users.a_paterno,users.a_materno 
                          FROM municipio,users
                          WHERE municipio.id=users.municipio_id');
        return $data;
    }

    public function combo(Request $request){
        $data['mun']=DB::select('SELECT id,nombre_municipio FROM municipio');
        return $data;
    }

    public function agregauser(Request $request){

    	$user = array('email' =>$request->email, 
                      'municipio_id'=>$request->id,
                      'password' =>Hash::make($request->password),
                      'name'=>$request->name,
                      'a_paterno'=>$request->a_paterno,
                      'a_materno'=>$request->a_materno,  
                      'created_at'=>date("Y-m-d H:i:s"),
                      'rol_id'=>3,
                      'admin'=>0);
        User_registros::create($user);
    }

    public function verelimina_user(Request $request){
    	$data['valores']=DB::select('SELECT id FROM users WHERE id='.$request->id);
        return $data;
    }

    public function aceptaelimina_user(Request $request){

    	DB::table('users')->where('id', $request->id)->delete();
    }

    public function vereactualiza_user(Request $request){
        $data['valores']=DB::select('SELECT municipio.nombre_municipio,users.email
                                     FROM municipio,users 
                                     WHERE municipio.id=users.municipio_id 
                                     AND users.id='.$request->id);
        return $data;
    }

    public function aceptactualizar_user(Request $request){
        DB::table('users')
                ->where('id', '=', $request->id)
                ->update(array("password"=>Hash::make($request->password),));
    }
}
