<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendataanController extends Controller
{
    public function pendataan(){

    return view('halaman.pendataan');
    }
    public function welcome(Request $request)
    {
        $nama =$request['Nama'];
        $alamat =$request['Alamat'];
        return view('halaman.welcome',compact('nama','alamat'));
    }
}
