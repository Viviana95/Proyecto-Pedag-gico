<?php

namespace App\Http\Controllers;

use App\Models\Format;
use App\Models\FormatMean;
use App\Models\Mean;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MeanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $means = Mean::latest()->paginate(12);
        $format = Format::all();
        return view('mean.index', compact('means','format'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $format = Format::find($id);
        $image = $format->images;


        return view('mean.create', ['format' =>$format, 'image' => $image]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

     if ($id == 2) {
        $pathfile = $request->file('file')->storeAs('files', $request->file('file')->getClientOriginalName());

        $request->validate([
            'title' => 'required',
            'lenguage' => 'required',
            'file' =>'mimes:ppt,pdf,docx|max:2048',
        ]);

        $mean = Mean::create([
            'title'=>$request->title,
            'lenguage'=>$request->lenguage,
            'file'=>$pathfile,

        ]);
    } 

    else if ($id == 1) {

        $request->validate([
            'title' => 'required',
            'lenguage' => 'required',
            'link' =>'required',
        ]);

        $mean = Mean::create([
            'title'=>$request->title,
            'lenguage'=>$request->lenguage,
            'file'=>$request->link,
        ]);
    }
        $mean->formats()->attach($id);
        $mean->users()->attach(Auth::user()->id);
        $mean->save();
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mean  $mean
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $means = Mean::latest()->paginate(12);
        $format = FormatMean::all();
        $user = User::all();
        return view('home' , ['means' => $means,'format' => $format, 'user' => $user]);
    }

    public function view($id, Mean $mean){
        $mean= Mean::find($id);
        return view('probar', ['mean' =>$mean]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mean = Mean::find($id);
        $format = Format::find($id);
        return view('mean.edit', ['mean' =>$mean, 'format'=> $format]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $id)
    {

        if ($id == 2) {
        $request->validate([
            'title',
            'lenguage',
            'file' =>'mimes:ppt,pdf,docx|max:2048',
            'format',
        ]);

        $pathfile = $request->file('file')->storeAs('files', $request->file('file')->getClientOriginalName());

        $mean = Mean::find($id);
        $mean->title = $request->title;
        $mean->lenguage = $request->lenguage;
        $mean->file = $pathfile;

        $format = Format::find($id);
        $format->format = $request->format;
    }

    else if ($id == 1) {
        $request->validate([
            'title',
            'lenguage',
            'link',
            'format',
        ]);

        $mean = Mean::find($id);
        $mean->title = $request->title;
        $mean->lenguage = $request->lenguage;
        $mean->file = $request->link;

        $format= Format::find($id);
        $format->format = $request->format;
    }
        $mean->update();
        return redirect()->route('means.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mean  $mean
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Mean::destroy($id);
      return redirect()->route('means.index');
    }
}
