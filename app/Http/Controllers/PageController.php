<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function sejarah()   { return view('pages.sejarah'); }
    public function informasi() { return view('pages.informasi'); }
    public function jadwal()    { return view('pages.jadwal'); }
    public function prestasi()  { return view('pages.prestasi'); }
    public function kegiatan()  { return view('pages.kegiatan'); }
}
