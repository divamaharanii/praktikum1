<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class provinsicontroller extends Controller
{
    public function provinsi()
    {
        $prov = DB::table('provinsi')->get();

        return view('provinsi',['provinsi' => $prov]);
    }
    
    
}