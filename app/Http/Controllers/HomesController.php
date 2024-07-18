<?php

namespace App\Http\Controllers;

use App\Models\Homes;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index()
    {
        $homes = Homes::all();
        return view('layouts.private.homes.index', compact('homes'));
    }
    public function create()
    {
        return view('layouts.private.homes.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keahlian' => 'required|string|max:255',
            'deskripsi_keahlian' => 'required|string|max:255',
            'about_me' => 'required|string|max:255',
            'deskripsi_about_me' => 'required|string|max:255',
        ]);

        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->move(public_path('storage/images'), $imageName);

        Homes::create([
            'foto' => $imageName,
            'keahlian' => $request->keahlian,
            'deskripsi_keahlian' => $request->deskripsi_keahlian,
            'about_me' => $request->about_me,
            'deskripsi_about_me' => $request->deskripsi_about_me,
        ]);

        return redirect()->route('homes.index')
            ->with('success', 'Home data created successfully.');
    }
    public function show($id)
    {
        $home = Homes::findOrFail($id);
        return view('layouts.private.homes.show', compact('home'));
    }

    public function edit($id)
    {
        $home = Homes::findOrFail($id);
        return view('layouts.private.homes.edit', compact('home'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'keahlian' => 'required|string|max:255',
            'deskripsi_keahlian' => 'required|string|max:255',
            'about_me' => 'required|string|max:255',
            'deskripsi_about_me' => 'required|string|max:255',
        ]);
        $home = Homes::findOrFail($id);
        if ($request->hasFile('foto')) {
            if ($home->foto) {
                $imagePath = public_path('storage/images/' . $home->foto);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $imageName = time().'.'.$request->foto->extension();  
            $request->foto->move(public_path('storage/images'), $imageName);
            $home->foto = $imageName;
        }
        $home->keahlian = $request->keahlian;
        $home->deskripsi_keahlian = $request->deskripsi_keahlian;
        $home->about_me = $request->about_me;
        $home->deskripsi_about_me = $request->deskripsi_about_me;

        $home->save();
        return redirect()->route('homes.index')
            ->with('success', 'Home data updated successfully.');
    }
    public function destroy($id)
    {
        $home = Homes::findOrFail($id);
        if ($home->foto) {
            $imagePath = public_path('storage/images/' . $home->foto);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $home->delete();
        return redirect()->route('homes.index')
            ->with('success', 'Home data deleted successfully.');
    }
}