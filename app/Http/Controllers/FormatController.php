<?php

namespace App\Http\Controllers;

use App\Models\Format;
use Illuminate\Http\Request;

class FormatController extends Controller
{
    public function index(Format $format)
    {
        return view('format_view', compact('format'));
    }
}
