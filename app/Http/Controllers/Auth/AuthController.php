<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\auth_user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        //
        // $request->validate(
        //     [
        //         'email' => 'required|email|unique:client_user',
        //         'password' => 'min:6|required',
        //     ]
        // );


        $email = $request->email;
        $password = $request->password;
        $auth = auth_user::where('email', $email)->first();

        if ($auth) {
            if (Hash::check($password, $auth->password) && $auth->status_active == 1) {
                if ($auth->id_role == 1) {
                    return redirect('/admin')->with('alert', 'Super Admin');
                } else if ($auth->id_role == 2) {
                    return redirect('/')->with('alert', 'Client');
                } else if ($auth->id_role == 3) {
                    return redirect('/')->with('alert', 'Client');
                } else if ($auth->id_role == 4) {
                    return redirect('/')->with('alert', 'Client');
                } else if ($auth->id_role == 5) {
                    return redirect('/')->with('alert', 'Client');
                } else if ($auth->id_role == 6) {
                    return redirect('/')->with('alert', 'Client');
                }
            } else if ($auth->status_active != 1) {
                return redirect()->back()->with('alert', 'Akun Anda Tidak Aktif');
            } else {
                return redirect()->back()->with('alert', 'Akun Anda Tidak Aktif');
            }
        } else {
            return redirect()->back()->with('alert', 'Akun Anda Tidak Aktif');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
