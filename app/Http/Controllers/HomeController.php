<?php

namespace App\Http\Controllers;

use App\Models\Footers;
use App\Models\Homes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $home = Homes::first();
        $footers = Footers::first(); 
        $data = [
            'title' => 'home',
            'home' => $home,
            'footers' => $footers,
        ];
        return view('layouts.public.home', $data);
    }

}
