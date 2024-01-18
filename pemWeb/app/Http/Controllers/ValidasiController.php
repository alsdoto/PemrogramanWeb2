<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    public function input()
    {
        return view('input10');
    }

    public function proses(Request $request)
    {
        $messages = [
            'required' => ':attribute harus di isi guys!!!',
            'min' => ':attribute harus di isi minimal 5 huruf ya',
            'max' => ':attribute harus di isi maksimal 20 huruf ya',
        ];

        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ],$messages);

        return view('proses',['data' => $request]);
    }
}
