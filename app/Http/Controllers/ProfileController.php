<?php

namespace App\Http\Controllers;

use App\Models\Footers;
use App\Models\Profiles;
use Illuminate\Http\Request;
use App\Http\Controllers\FileController;
use App\Models\File;

class ProfileController extends Controller
{
    public function index()
    {
        $files = File::all();
        $profile = Profiles::all();
        $footers = Footers::first(); 
        $data = [
            'title' => 'Profile',
            'profile' => $profile,
            'footers' => $footers,
        ];

        return view('layouts.public.profile', $data)->with([
          'files'=>$files
        ]);
    }
}