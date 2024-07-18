<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Profiles;
use App\Models\File;
use App\Http\Controllers\FileController;


class ProfilesController extends Controller
{
    public function index(): View
    {
        $profiles = Profiles::all();
        return view('layouts.private.profiles.index', compact('profiles'));
    }
    public function create(): View
    {
        return view('layouts.private.profiles.create');
    }
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'tahun_kerja' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'perusahaan' => 'required|string|max:255',
            'lokasi_perusahan' => 'required|string|max:255',
            'deskripsi1' => 'nullable|string',
            'tahun_masuk' => 'required|string|max:255',
            'universitas' => 'required|string|max:255',
            'lokasi_univ' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'deskripsi2' => 'nullable|string',
            'hard_skill_1' => 'nullable|string|max:255',
            'hard_skill_2' => 'nullable|string|max:255',
            'hard_skill_3' => 'nullable|string|max:255',
            'soft_skill_1' => 'nullable|string|max:255',
            'soft_skill_2' => 'nullable|string|max:255',
            'soft_skill_3' => 'nullable|string|max:255',
        ]);

        Profiles::create($validatedData);

        return Redirect::route('profiles.index')->with('success', 'Profile created successfully.');
    }

    public function show(Profiles $profile): View
    {
        return view('layouts.private.profiles.show', ['profile' => $profile]);
    }

    public function edit(Profiles $profile): View
    {
        return view('layouts.private.profiles.edit', ['profile' => $profile]);
    }

    public function update(Request $request, Profiles $profile): RedirectResponse
    {
        $validatedData = $request->validate([
            'tahun_kerja' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',
            'perusahaan' => 'required|string|max:255',
            'lokasi_perusahan' => 'required|string|max:255',
            'deskripsi1' => 'nullable|string',
            'tahun_masuk' => 'required|string|max:255',
            'universitas' => 'required|string|max:255',
            'lokasi_univ' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'deskripsi2' => 'nullable|string',
            'hard_skill_1' => 'nullable|string|max:255',
            'hard_skill_2' => 'nullable|string|max:255',
            'hard_skill_3' => 'nullable|string|max:255',
            'soft_skill_1' => 'nullable|string|max:255',
            'soft_skill_2' => 'nullable|string|max:255',
            'soft_skill_3' => 'nullable|string|max:255',
        ]);

        $profile->update($validatedData);

        return Redirect::route('profiles.index')->with('success', 'Profile updated successfully.');
    }

    public function destroy(Profiles $profile): RedirectResponse
    {
        $profile->delete();

        return Redirect::route('profiles.index')->with('success', 'Profile deleted successfully.');
    }

}