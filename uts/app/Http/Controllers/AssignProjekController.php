<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignProjek;
use App\Models\Projek;
use App\Models\Karyawan;

class AssignProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['assignprojek'] = AssignProjek::all();

        return view('assignprojek.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['karyawan'] = Karyawan::pluck('nama', 'id');
        $data['projek'] = Projek::pluck('nama_projek', 'id');
        return view('assignprojek.create', $data);
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
        AssignProjek::create($input);

        alert()->success('Data berhasil disimpan', 'Berhasil');
        return redirect('assignprojek');
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
        $data['assignprojek'] = AssignProjek::find($id);
        $data['karyawan'] = Karyawan::pluck('nama', 'id');
        $data['projek'] = Projek::pluck('nama_projek', 'id');
        
        return view('assignprojek.edit', $data);
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
        $model = AssignProjek::find($id);
        $input = $request->all();
        $model->update($input);

        alert()->success('Data berhasil diubah', 'Berhasil');
        return redirect('assignprojek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = AssignProjek::find($id);
        $model->delete();

        alert()->success('Data berhasil dihapus', 'Berhasil');
        return redirect('assignprojek');
    }

    public function delete(Request $request)
    {
        $category = AssignProjek::find($request->id);
        $category->delete();

        return 'success';
    }
}
