<?php

namespace App\Http\Controllers;

use iluminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view ('layouts.public.profile');
    }
}