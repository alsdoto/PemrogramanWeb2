<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CompanyController extends Controller
{
    public function index(): View
    {
        $companies = Company::latest()->paginate(5);
        return view('companies.index', compact('companies'));
    }

    public function create(): View
    {
        return view('companies.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // validasi request
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'address' => 'required|min:10'
        ]);

        // simpan data ke database
        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address
        ]);

        // redirect ke halaman companies
        return redirect()->route('companies.index')->with('success', 'Company berhasil ditambahkan');
    }
}
