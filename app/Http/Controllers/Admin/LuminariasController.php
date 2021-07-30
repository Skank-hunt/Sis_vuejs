<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LuminariasController extends Controller
{
    public function index()
    {
        return view('admin_luminaria.index');
    }

    public function view()
    {
        $data = DB::select('SELECT * FROM luminarias_completa');
        return $data;
    }

    public function getOne(Request $request)
    {
        $data['values'] = DB::select('SELECT * FROM luminarias_completa WHERE coodigo_luminaria='.$request->coodigo_luminaria);
        return $data;
    }

}
