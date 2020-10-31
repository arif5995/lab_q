<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use App\Models\client_user;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name_company' => 'required',
            'no_hp' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'username' => 'required',
            'email' => 'required|string|email|max:255|unique:client_users',
            'password' => 'required|string|min:8|confirmed'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }

    public function postRegister(Request $request)
    {

        // $validatedData = $request->validate([
        //     'name_company' => 'required',
        //     'no_hp' => 'required',
        //     'nama_depan' => 'required',
        //     'nama_belakang' => 'required',
        //     'username' => 'required',
        //     'email' => 'required|string|email|max:255|unique:client_users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);
        
        client_user::create([
            'name_company'=> $request->name_company,
            'no_hp'=> $request->no_hp,
            'nama_depan'=>$request->nama_depan,
            'nama_belakang'=>$request->nama_belakang,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'status_auth'=>0,
            'status_active'=>0
        ]);
        return redirect('/')->with('status', 'Email anda sedang diverifikasi');
    }
}
