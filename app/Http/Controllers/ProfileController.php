<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user)
    {
            $data = request()->validate([
                'username' => 'required',
                'age' => 'required',
                'gender' => 'required',
                'phone' => 'required',
            ]);
            
            auth()->user()->profile()->create([
                'username' => $data['username'],
                'age' => $data['age'],
                'gender' => $data['gender'],
                'phone' => $data['phone'],           
            ]);
        
        return redirect('/profile/'.auth()->user()->id)->with('msg','Profile Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('profile.index')->with(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profile.edit')->with(compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Profile $profile)
    {
        $data = request()->validate([
            'username' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'phone' => 'required',
        ]);
        
        auth()->user()->profile()->update($data);
        return redirect('/profile/'.auth()->user()->id)->with('msg','Profile updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
