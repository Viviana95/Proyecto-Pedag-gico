<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormatController extends Controller
{
    public function index(Format $format)
    {
        return view('format_view', compact('format'));
    }

    public function video (Format $format)
    {
        $format = Format::find(2);
        return route('means.create', ['format' => $format]);
    }

    public function link (Format $format)
    {
        $format = Format::find(1);
        return route('means.create', ['format' => $format]);
    }

    public function file (Format $format)
    {
        $format = Format::find(3);
        return route('means.create', ['format' => $format]);
    }
}
