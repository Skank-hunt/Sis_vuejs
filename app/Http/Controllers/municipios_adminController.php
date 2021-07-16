<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Municipios;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class municipios_adminController extends Controller
{
    public function index()
    {
     	return view('admin_municipios.index');
    }

    public function view()
    {
        $data = DB::select('SELECT * FROM municipio ');
        return $data;
    }


    public function getOne(Request $request)
    {
        $data ['values'] = DB::select('SELECT id FROM municipio WHERE id ='.$request->id);
        return $data;
    }

    public function destroy(Request $request)
    {
        DB::table('municipio')->where('id',$request->id)->delete();
    }

    public function store(Request $request)
    {
        $fecha = Carbon::now();
        $this->validate($request,[
            'nombre_municipio' => 'required'
        ]);

        $datum = array(
            "nombre_municipio"=> $request->nombre_municipio,
            'created_at' => $fecha,
            'updated_at' => null
            );

        Municipios::create($datum);
    }

    public function getData(Request $request)
    {
        $data['values'] = DB::select('SELECT id, nombre_municipio FROM municipio WHERE id ='.$request->id);
        return $data;
    }

    public function update(Request $request)
    {
        DB::table('municipio')
            ->where('id','=',$request->id)
            ->update(['nombre_municipio' => $request->nombre_municipio]);
    }
}