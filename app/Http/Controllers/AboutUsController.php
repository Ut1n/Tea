<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function inform()
    {
        $inform = AboutUs::all();

        return view('aboutUs', compact('inform'));
    }
}
