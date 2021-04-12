<?php

namespace App\Http\Controllers;

use App\artikel;
use Illuminate\Http\Request;


class ArtikelFormController extends Controller
{
    public function index()
    {
        return view('artikel.artikelform');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title_artikel' => 'required',
            'description' => 'required',
            'content_artikel' => 'required',
            'image' => 'required'
        ]);

        $artikel = new Artikel();

        $artikel->title_artikel = $request->input('title_artikel');
        $artikel->description = $request->input('description');
        $artikel->content_artikel = $request->input('content_artikel');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/artikel/', $filename);
            $artikel->image = $filename;
        } else {
            return $request;
            $artikel->image = '';
        }

        $artikel->save();

        return redirect('artikelpage')
            ->with('artikel',$artikel)
            ->with('success','Data Artikel Create Successfully');
    }

    public function display()
    {
        $artikels = Artikel::all();
        $artikels = Artikel::paginate(5);

        return view('artikel.artikeldata')
                ->with('artikels',$artikels);
    }

    public function edit($id)
    {
        $artikels = Artikel::find($id);
        return view('artikel.artikelupdate')->with('artikels',$artikels);
    }

    public function update(Request $request, $id)
    {

        $artikels = Artikel::find($id);

        $artikels->title_artikel = $request->input('title_artikel');
        $artikels->description = $request->input('description');
        $artikels->content_artikel = $request->input('content_artikel');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/artikel'.$filename);
            $artikels->image = $filename;
        }

        $artikels->save();

        return redirect('/artikelpage')
            ->with('artikels',$artikels)
            ->with('success','Update Data Artikel Successfuly');
    }

    public function delete($id)
    {
        $artikels = Artikel::find($id);
        $artikels->delete();
        return redirect('/artikelpage')
            ->with('artikels',$artikels)
            ->with('success','Delete Data Artikel Successfully');
    }


    // Artikel Data
    public function artikeldata()
    {
        return view('artikel.artikeldata');
    }

    // Artikel News Portal
    public function artikelnewsportal()
    {
        $artikels = Artikel::all();
        $artikels = Artikel::paginate(3);

        return view('artikel.berita')->with('artikels',$artikels);
    }
}
