<?php

namespace App\Http\Controllers;

use App\Models\Mean;
use Illuminate\Http\Request;

class MeanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $means = Mean::latest()->paginate(2);
        return view('mean.index', compact('means'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mean.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png|max:2048',
            'title' => 'required',
            'lenguage' => 'required',
            'format' =>'required',
            'file' =>'required',
        ]);

        $path = $request->file('image')->storeAs('public/images', $request->file('image')->getClientOriginalName());

        $mean = Mean::create([
            'title'=>$request->title,
            'image'=>$path,
            'lenguage'=>$request->lenguage,
            'format'=>$request->format,
            'file'=>$request->file
        ]);
        $mean->save();
        return redirect()->route('means.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mean  $mean
     * @return \Illuminate\Http\Response
     */
    public function show(Mean $mean)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mean  $mean
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Mean $mean)
    {
       $mean = Mean::find($id);
        return view('mean.edit', ['mean' =>$mean]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mean  $mean
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Mean $mean)
    {
        Mean::find($id);
        $mean->title = $request->title;
        $mean->image = $request->image;
        $mean->lenguage = $request->lenguage;
        $mean->format = $request->format;
        $mean->file = $request->file;
       
        $mean->update();
        return redirect()->route('means.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mean  $mean
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Mean $mean)
    {
      Mean::destroy($id);
      return redirect()->route('means.index');
    }
}
