<?php

namespace App\Http\Controllers;

use App\Models\FormatMean;
use App\Models\Language;
use App\Models\Mean;
use App\Models\MeanUser;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user',]);
        return view('home');
    }

    public function show()
    {

        $means = Mean::query()->when(request('search'), function($query){
            return $query->where('title', 'like', '%' . request('search') .  '%');
        })
        ->latest()->paginate(8);

        $format = FormatMean::all();
        $language = Language::all();      
        $user = MeanUser::all();
        return view('home' , ['means' => $means,'format' => $format, 'user' => $user, 'language' => $language]);
    }
}