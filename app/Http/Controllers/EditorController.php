<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function editor($image)
    {
        return view('editor', ['image' => $image]);
    }
}
