<?php

namespace App\Http\Controllers;

use App\Models\Lenguage;
use Illuminate\Http\Request;

class LenguageController extends Controller
{
    public function index()
    {
        $lenguage = Lenguage::all();
        return view('mean.create', compact('lenguage'));
    }
}
