<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('welcome'); // halaman awal company profile
    }

    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pendaftarans',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        Pendaftaran::create($validated);

        return redirect('/')->with('success', 'Pendaftaran berhasil!');
    }
}
