<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogoController extends Controller
{
    public function index()
    {
        return view('logo.logoform');
    }

    public function store(Request $request)
    {
        $logo = new Logo();

        $logo->logo_title = $request->input('logo_title');
        $logo->description = $request->input('description');

        $logo->save();

        return redirect('logoform')
            ->with('logo',$logo);
    }

    public function display()
    {
        $logos = Logo::all();

        return view('logo.logodata')
            ->with('logos',$logos);
    }
}
