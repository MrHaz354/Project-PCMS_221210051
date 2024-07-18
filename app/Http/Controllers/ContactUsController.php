<?php

namespace App\Http\Controllers;

use App\Models\Footers;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $footers = Footers::first();
        return view('layouts.public.contact', compact('footers'));
    }

}