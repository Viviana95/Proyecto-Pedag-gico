<?php

namespace App\Http\Controllers;

use App\Models\Format;
use App\Models\Language;
use Illuminate\Http\Request;

class FormatController extends Controller
{
    public function index()
    {
        $format = Format::all();
    
        return view('format_view', compact('format'));
    }
    
}
