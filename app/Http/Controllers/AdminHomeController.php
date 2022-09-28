<?php

namespace App\Http\Controllers;

use App\Models\Mean;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        // $means = Mean::latest()->paginate(2);
        // return view('home_admin' , compact('means'));
        
    }
}
