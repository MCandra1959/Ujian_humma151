<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where(
            'email',
            $request->email
        )->first();
// dd(
//     $request->password,
//     $user->password,
//     Hash::check($request->password, $user->password)
// );
        if (
            $user &&
            Hash::check(
                $request->password,
                $user->password
            )
        ) {

            session([
                'login' => true,
                'user_id' => $user->id,
                'nama' => $user->name
            ]);

            return redirect('/dashboard');
        }

        return back()->with(
            'error',
            'Email atau Password Salah'
        );
    }

    public function logout()
    {
        session()->flush();

        return redirect('/');
    }
}