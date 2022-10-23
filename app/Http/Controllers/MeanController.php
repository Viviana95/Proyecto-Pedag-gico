<?php

namespace App\Http\Controllers;

use App\Models\Format;

use App\Models\Language;
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
    public function index(Request $request)
    {
        $means = Mean::latest()->paginate(12);
        $format = Format::all();
        $languages = Language::all();

        return view('mean.index', compact('means', 'format', 'languages'));
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
        $languages = Language::all();
        return view('mean.create', ['format' => $format, 'image' => $image, 'languages' => $languages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id,)
    {

        if ($id == 2) {
            $pathfile = $request->file('file')->storeAs('files', $request->file('file')->getClientOriginalName());

            $request->validate([
                'title' => 'required',
                //  'language' => 'required',
                'file' => 'mimes:ppt,pdf,docx|max:2048',
            ]);

            $mean = Mean::create([
                'title' => $request->title,
                'language_id' => $request->language_id,
                'file' => $pathfile,

            ]);
        } else if ($id == 1) {

            $request->validate([
                'title' => 'required',
                //  'language' => 'required',
                'link' => 'required',
            ]);

            $mean = Mean::create([
                'title' => $request->title,
                'language_id' => $request->language_id,
                'file' => $request->link,
            ]);
        }
        $mean->formats()->attach($id);
       // $mean->languages()->attach($id);
        $mean->users()->attach(Auth::user()->id);
        $mean->save();
        return redirect()->route('home')->with('sucess', 'Recurso añadido satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mean  $mean
     * @return \Illuminate\Http\Response
     */



    

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
            'language',
            'format',
            'file' => 'mimes:ppt,pdf,docx|max:2048',
        ]);

        $pathfile = $request->file('file')->storeAs('files', $request->file('file')->getClientOriginalName());

        $mean = Mean::find($id);
        $mean->title = $request->title;
        $mean->lenguage = $request->language;
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
