<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramStudiController extends Controller
{
    public function index()
    {
        $result = DB::table('tbl_program_studi')->get();
        return view('prodi.index', ['coro' => $result]);
    }
}
