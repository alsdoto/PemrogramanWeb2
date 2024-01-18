<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class GradeController extends Controller
{
    public function index(): View
    {
        $grades = Grade::latest()->paginate(5);
        return view('grades.index', compact('grades'));
    }

    public function create(): View{
        return view('grades.create');
    }

    public function store(Request $request){
        $nama = $request->input('nama');
        $nilai_uts = $request->input('uts');
        $nilai_uas = $request->input('uas');
        $nilai_tugas = $request->input('tugas');
        $nilai_kehadiran = $request->input('kehadiran');

        $messages = [
            'required' => ':attribute harus diisi guys!!!',
            'min' => ':attribute harus diisi minimal 5 huruf ya',
            'max' => ':attribute harus diisi maksimal 20 huruf ya',
            'numeric' => ':attribute harus diisi dengan angka ya',
            'uts.max' => 'Maaf, maksimal nilai untuk UTS adalah 100.',
            'uas.max' => 'Maaf, maksimal nilai untuk UAS adalah 100.',
            'tugas.max' => 'Maaf, maksimal nilai untuk tugas adalah 100.',
            'kehadiran.max' => 'Maaf, maksimal nilai untuk kehadiran adalah 18.',
        ];

        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'uts' => 'required|numeric|max:100',
            'uas' => 'required|numeric|max:100',
            'tugas' => 'required|numeric|max:100',
            'kehadiran' => 'required|numeric|max:18'
        ],$messages);

        // menghitung nilai akhir berdasarkan bobot
        $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.4) + ($nilai_tugas * 0.2) + ($nilai_kehadiran / 18 * 100 * 0.1);;

        Grade::create([
            'nama' => $request->nama,
            'uts' => $request->uts,
            'uas' => $request->uas,
            'tugas' => $request->tugas,
            'kehadiran' => $request->kehadiran,
            'nilai_akhir' => $nilai_akhir,
        ]);

        return redirect()->route('grades.index')->with('success', 'Nilai berhasil ditambahkan');
    }
}
