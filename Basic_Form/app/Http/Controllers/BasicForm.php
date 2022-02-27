<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicForm extends Controller
{
    public function input(){
        return view('basic_form');
    }

    public function valid(Request $request){
        $messageError = [
            'required' => ':attribute Wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute melebihi :max kB',
            'numeric' => 'Karakter yang harus dimasukan adalah berupa angka',
            'mimes' => 'File yang dimasukan harus berupa png dan jpg (dan variannya)',
            'size' => 'Angka yang dimasukan yada yada ada masalah :size',
        ];

        $this->validate($request, [
            'Nama' => 'required|max:50',
            'Alamat' => 'required|max:100',
            'Nomor_WA' => 'required|numeric',
            'ID_Line' => 'required',
            'Email' => 'required',
            'Foto' => 'required|mimes:jpg,jpeg,png|max:2048',
            'Nomor' => 'required|numeric|min:2.5|max:99.99',
        ], $messageError);

        return redirect('basicform')->with('status', 'Data berhasil dimasukkan');
    }
}
