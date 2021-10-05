<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class kecamatancontroller extends Controller
{
    public function kecamatan()
    {
        $kec = DB::table('kecamatan')->get();

        return view('kecamatan',['kecamatan' => $kec]);
    }
    
    
}