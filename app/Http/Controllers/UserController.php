<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(12);
        return view('user.users', compact('users'));
    }

    protected function profileImagePath() {
        $pathprofile = '/storage/public/images/defecto.png';
        if(request()->hasfile('profile') && request()->file('profile')->isValid()){
            $pathprofile = request()->profile->store('profile');
        }

        return $pathprofile;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register_users');
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
            'name' => 'required',
            'email' => 'required',
            'password' => ['required', 'confirmed'],
        ]);
        
        $mean = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'profile'=>$this->profileImagePath(),
        ]);

        $mean->save();
        return redirect()->route('panel_admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $mean
     * @return \Illuminate\Http\Response
     */
    public function show($id, User $user)
    {
        $user = User::find($id);
        return view('info', ['user' =>$user]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, User $user)
    {
        $user = User::find($id);
        return view('user.edit_users', ['user' =>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    public function update(Request $request, $id, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'profile' => 'required|mimes:jpg,png|max:2048',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile = $request->profile;
       
        $user->update();
        return redirect()->route('user.users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $mean
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, User $user)
    {
        User::destroy($id);
        return redirect()->route('user.users');
    }
}
