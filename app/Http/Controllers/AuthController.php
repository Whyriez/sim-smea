<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }
    public function proses_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $request->session()->regenerate();
            // $user = Auth::user();
            return redirect()->intended('dashboard');
            // dd($user);
            // if ($user->role == 0 || $user->role == 1 || $user->role == 2) {

            // }else
            // if ($user->role == 0) {
            //     return redirect()->intended('dashboard');
            // } else if ($user->role == 'user') {
            //     return redirect()->intended('home');
            // }
            // return redirect()->intended('/');
        }
        return back()->withErrors('Email Dan Password Salah!!');
        // return back()->withErrors([
        //     'nim' => 'Maaf nim dan password anda salah',
        // ])->onlyInput('nim');
    }

    public function proses_logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function changePassword()
    {
        return view('pages.auth.changePassword');
    }

    public function proseschangePassword(Request $request)
    {
        $data = User::find(Auth::user()->id);

        $password = $request->password;
        $confirmPassword = $request->confirmPassword;

        if ($password != $confirmPassword) {
            Session::flash('notvalid', 'Password Dan Konfirmasi Password Tidak Sama');
        }

        $data->password = bcrypt($password);
        $data->save();

        Session::flash('valid', 'Berhasil Mengubah Password');
        return redirect()->back();
    }
}
