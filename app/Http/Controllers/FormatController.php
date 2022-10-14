<?php

namespace App\Http\Controllers;

use App\Models\Format;
use Illuminate\Http\Request;

class FormatController extends Controller
{
    public function index()
    {
        $format = Format::all();
        return view('format_view', compact('format'));
    }
<<<<<<< HEAD

    public function add($id , Format $format) {
        $format = Format::find($id);
        return route('means.create', ['id' => $format->id]);
    }
=======
>>>>>>> develop
}
