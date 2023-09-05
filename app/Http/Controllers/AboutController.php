<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    function about()
    {
        $about = About::first();
        return view('backend.pages.about.about', compact('about'));
    }
}
