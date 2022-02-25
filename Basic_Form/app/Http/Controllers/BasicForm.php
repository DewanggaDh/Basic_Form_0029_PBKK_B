<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicForm extends Controller
{
    public function input(){
        return view('basic_form');
    }

    // public function formia(Request $request){
    //     echo "</br> Nama anda adalah " . $request->input('nama');
    //     echo "</br> Anda tinggal di " . $request->input('alamat');
    //     echo "</br> Nomor WA dan akun Line anda adalah " . $request->input('wa') . " dan " . $request->input('line');
    //     echo "</br> Email anda adalah " . $request->input('email');
        
    // }

    public function valid(Request $request){
        $messageError = [
            'required' => ':Wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => 'Jumlah karakter :attribute melebihi :max karakter',
            'numeric' => 'Karakter yang harus dimasukan adalah berupa angka',
        ];

        $this->validate($request, [
            'nama' => 'required|max:50',
            'alamat' => 'required|max:100',
            'wa' => 'required|numeric|min:10',
            'line' => 'required',
            'email' => 'required'
        ], $messageError);
        return view('hasil', ['data' => $request]);
    }
}
