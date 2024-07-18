<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footers;

class FootersController extends Controller
{
    public function index()
    {
        $footers = Footers::all();
        return view('layouts.private.footers.index', compact('footers'));
    }

    public function create()
    {
        return view('layouts.private.footers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'copyright' => 'required|string',
            'socialmedialink1' => 'required|string',
            'socialmedialink2' => 'required|string',
            'socialmedialink3' => 'required|string',
            'pagelink1' => 'required|string',
            'pagelink2' => 'required|string',
            'pagelink3' => 'required|string'
        ]);
        Footers::create($request->all());
        return redirect()->route('footers.index')
                        ->with('success', 'Footer created successfully.');
    }

    public function edit($id)
    {
        $footer = Footers::findOrFail($id);
        return view('layouts.private.footers.edit', compact('footer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'copyright' => 'required|string',
            'socialmedialink1' => 'required|string',
            'socialmedialink2' => 'required|string',
            'socialmedialink3' => 'required|string',
            'pagelink1' => 'required|string',
            'pagelink2' => 'required|string',
            'pagelink3' => 'required|string'
        ]);

        $footer = Footers::findOrFail($id);
        $footer->update($request->all());
        return redirect()->route('footers.index')
                        ->with('success', 'Footer updated successfully');
    }
    public function destroy($id)
    {
        $footer = Footers::findOrFail($id);
        $footer->delete();
        return redirect()->route('footers.index')
                        ->with('success', 'Footer deleted successfully');
    }
}