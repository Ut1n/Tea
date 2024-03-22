<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wish;


class WishController extends Controller
{
    public function love()
    {
        $card = Wish::all();

        return view('wish', compact('card'));
    }

}
