<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['karyawan'] = Karyawan::all();

        return view('karyawan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName();    
            $destinationPath = 'assets/images';
            $file->move($destinationPath,$file->getClientOriginalName());

            $input['foto'] = $fileName;
        }
        Karyawan::create($input);

        alert()->success('Data berhasil disimpan', 'Berhasil');
        return redirect('karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['karyawan'] = Karyawan::find($id);
        return view('karyawan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Karyawan::find($id);
        $input = $request->all();
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $fileName = $file->getClientOriginalName();    
            $destinationPath = 'assets/images';
            $file->move($destinationPath,$file->getClientOriginalName());

            $input['foto'] = $fileName;
        }
        $model->update($input);

        alert()->success('Data berhasil diubah', 'Berhasil');
        return redirect('karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Karyawan::find($id);
        $model->delete();

        alert()->success('Data berhasil dihapus', 'Berhasil');
        return redirect('karyawan');
    }

    public function delete(Request $request)
    {
        $category = Karyawan::find($request->id);
        $category->delete();

        return 'success';
    }

    public function sendemail(Request $request, $id)
    {
        $karyawan = Karyawan::find($request->id);
        Mail::to($karyawan->email)->send(new SendEmail());
 
		alert()->success('Email berhasil dikirim', 'Berhasil');
        return redirect('karyawan');
    }
}
