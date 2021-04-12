<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikel.berita')->with('artikels', $artikels);
    }
}
