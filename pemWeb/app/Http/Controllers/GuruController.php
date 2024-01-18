<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          // mengambil data dari table guru
        $guru = Guru::all();

          //mengirim data guru ke view index
          return view('guru.index',['guru' => $guru]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // menagmbil data guru ke view index
        $guru = Guru::find('guru')
            ->where('nama','like',"%".$cari."%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('guru.index',['guru' => $guru]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuruRequest $request) : RedirectResponse
    {
       
            // Membuat dan menyimpan data guru baru menggunakan model Guru
            Guru::create($request->all());
        
            // Mengarahkan kembali ke halaman indeks guru setelah penyimpanan berhasil
            return redirect()->route('guru.index')->with('success', 'Guru created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        return view('guru.show', [
            'guru' => $guru
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        return view('guru.edit', [
            'guru' => $guru
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruRequest $request, Guru $guru) : RedirectResponse
    {
        $guru->update($request->all());
        return redirect()->route('guru.index')
            ->with('success', 'Guru updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru) : RedirectResponse
    {
        $guru->delete();
        return redirect()->route('guru.index')
            ->with('success', 'Guru deleted successfully');
    }

    public function trash()
    {
        $guru = Guru::onlyTrashed()->paginate(10);
        return view('guru.delete', ['guru' => $guru]);
    }

    public function restore($id)
    {
        $guru = Guru::withTrashed()->find($id);
        $guru->restore();
        return redirect()->route('guru.index')
            ->with('success', 'Guru restored successfully');
    }
}
