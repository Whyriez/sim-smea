<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
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
            return redirect()->intended('dashboard');
        }
        return back()->withErrors('Email Dan Password Salah!!');
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
        $count = SuratKeluar::where('status_persetujuan', 'diajukan')->count();
        $belumTTD = SuratKeluar::where('status_persetujuan', 'belum')->count();
        $sudahTTD = SuratKeluar::where('status_persetujuan', 'diterima')->count();
        $countSudah = SuratKeluar::where('status_persetujuan', 'diterima')->count();
        $totMasuk = SuratMasuk::count();
        return view('pages.auth.changePassword')->with([
            'count' => $count, 'countSudah' => $countSudah, 'belumTTD' => $belumTTD, 'sudahTTD' => $sudahTTD,
            'totMasuk' => $totMasuk
        ]);
    }

    public function proseschangePassword(Request $request)
    {
        $data = User::find(Auth::user()->id);

        $password = $request->password;
        $confirmPassword = $request->confirmPassword;

        if ($password == $confirmPassword) {
            $data->password = bcrypt($password);
            $data->save();
            Session::flash('valid', 'Berhasil Mengubah Password');
        } else {
            Session::flash('notvalid', 'Password Dan Konfirmasi Password Tidak Sama');
        }

        return redirect()->back();
    }
}
