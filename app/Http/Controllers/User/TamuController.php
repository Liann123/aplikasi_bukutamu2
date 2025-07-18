<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class TamuController extends Controller
{
    public function simpanTamu(Request $request){
        $nama    = $request->nama;
        $telepon = $request->tlp;
        $email   = $request->email;
        $alamat  = $request->alamat;

        

        $data = new User();
        $data-> nama = $nama;
        $data-> tlp = $telepon;
        $data-> email = $email;
        $data-> alamat = $alamat;
        $data-> password = Hash::make('rahasia');
        $data-> save();

        return redirect('/')->with('status', 'Data Berhasil Disimpan');
    }
}
