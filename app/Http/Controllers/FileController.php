<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ProfilesController;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        $files = File::latest()->paginate(10);
        return view('layouts.private.profiles.index', compact('files'));
    }
    public function create()
    {
        return view('files.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:docx,pdf|max:2048'
        ]);
        $file = $request->file('file');
        $fileName = $file->hashName();
        $file->storeAs('uploads', $fileName);
        File::create([
            'original_name' => $file->getClientOriginalName(),
            'generated_name' => $fileName
        ]);
        return redirect()
            ->route('profiles.index')
            ->with('success', 'File berhasil diupload');
    }
    public function download(File $file)
    {
        $filePath = storage_path("app/uploads/{$file->generated_name}");
        if (file_exists($filePath)) {
            return response()->download($filePath, $file->original_name);
        } else {
            abort(404, 'File not found');
        }
    }
    public function show(File $file): View
    {
        return view('layouts.private.profiles.show', ['files' => $file]);
    }
}