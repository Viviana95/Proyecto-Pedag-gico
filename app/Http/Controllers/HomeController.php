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
        $request->user()->authorizeRoles(['user']);
        return view('home');
    }

    public function home()
    {
        $means = Mean::latest()->paginate(8);
        $format = FormatMean::all();
        $languages = Language::all();      
        $user = MeanUser::all();
        return view('home' , ['means' => $means,'format' => $format, 'user' => $user, 'languages' => $languages]);
    }

    public function filterByLanguage(Request $request, $id){
        $search = $request -> search;
        $format = FormatMean::all();      
        $language = Language::find($id);
        $user = MeanUser::all();
        $means = $language->means()->latest()->paginate(3);
        return view('homeLanguage' , ['means' => $means,'format' => $format, 'user' => $user,  'language' => $language, 'search' => $search]);  
    }

    public function searchMeanByTitle(Request $request){
        /*  $means = Mean::query()->when(request('search'), function($query){
            return $query->where('title', 'like', '%' . request('search') .  '%');
        })  */
        $search = $request -> search;
         $means = Mean::where('title', 'like', '%' . $search .  '%')
        ->latest()->paginate(8);
        $format = FormatMean::all();
        $languages = Language::all();      
        $user = MeanUser::all();
        return view('home' , ['means' => $means,'format' => $format, 'user' => $user, 'languages' => $languages, 'search' => $search]);
    }

    public function meanDetail($id, Mean $mean)
    {
        $mean = Mean::find($id);
        return view('detailMean', ['mean' => $mean]);
    }
}