<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use League\CommonMark\Inline\Element\Strong;

class securityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $security = DB::select('SELECT * FROM seguridad');
        return view('admin_seguridad.index')->with(compact('security'));
    }

    public function getInfo()
    {
        $data = DB::select('SELECT * FROM seguridad');
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //Aqui se almacenaran temporalmente los archivos
        $filerij = $request->file('rij');
        $filerim = $request->file('rim');
        $filesupervision = $request->file('supervicion');
        $filefoto = $request->file('foto');

        //renombrar los archivos

        $filename_rij = 'rij'.$id.uniqid().'.jpg';
        $filename_rim = 'rim '.$id.uniqid().'.jpg';
        $filename_supervision = 'supervision '.$id.uniqid().'.jpg';
        $filename_foto = 'foto '.$id.uniqid().'.jpg';

        //se van a mover a esta ruta física
        /*$path_rij = public_path().'images/security/rij';
        $path_rim = public_path().'images/security/rim';
        $path_supervision = public_path().'images/security/supervision';
        $path_foto = public_path().'images/security/foto';*/

        $guardo_rij = Storage::disk('local1')->put($filename_rij, File::get($filerij));
        $guardo_rim = Storage::disk('local2')->put($filename_rim, File::get($filerim));
        $guardo_supervision = Storage::disk('local3')->put($filename_supervision, File::get($filesupervision));
        $guardo_foto = Storage::disk('local4')->put($filename_foto, File::get($filefoto));




        //almacenar los archivos
//        $filerij->move($filename_rij, $path_rij);
//        $filerim->move($filename_rim, $path_rim);
//        $filesupervision->move($filename_supervision, $path_supervision);
//        $filefoto->move($filename_foto, $path_foto);

        if ($guardo_foto & $guardo_rij & $guardo_rim & $guardo_supervision){
            DB::table('seguridad')
                ->where('id_seguridad',$id)
                ->update([
                    'rij' => $filename_rij,
                    'rim' => $filename_rim,
                    'supervicion' => $filename_supervision,
                    'foto' => $filename_foto
                ]);
        }

        //crear registro en la DB


        return back();
//            @dd($val);
        /*->save();*/


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data['values'] = DB::select('SELECT id_seguridad, rij, rim, supervicion, foto FROM seguridad WHERE id_seguridad ='.$request->id_seguridad);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pass = true;

        if ($pass){
            DB::update('UPDATE `seguridad` SET `rij`= null,`rim`=null,`supervicion`=null,`foto`=null WHERE id_seguridad = '.$id);
        }

        $pass = false;
        return back();
    }
}
