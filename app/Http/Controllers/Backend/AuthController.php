<?php

namespace App\Http\Controllers\Backend;

use Session;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('backend.auth.login');
    }

    public function proseslogin(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password], true)) {
            // Cek status pengguna
            if (!empty(Auth::user()->status)) {
                if (Auth::user()->is_role == '1') {
                    return redirect()->intended('admin/dashboard');
                }else {
                    return redirect('login')->with('error', 'You are not admin');
                }
            } else {
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::find($user_id);

                return redirect('login')->with('error', 'This email is not verified yet!.');
            }
        } else {
            return redirect('login')->withInput()->with('error', 'Please enter the correct email and password');
        }
    }

    public function forgot(Request $request)
    {
        return view('backend.auth.forgot-password');
    }

    public function prosesforgot(Request $request)
    {
        // Validasi email yang dikirimkan oleh pengguna
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $str = Str::random(10);
        $user = User::where('email', '=', $request->email)->first();
        if (!empty($user)) {
            $user->password = Hash::make($str);
            $user->save();

            $user->str = $str;
            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect('login')->with('success', 'A new password has been sent to your email. Please check your inbox.');
        }else {
            return redirect()->back()->with('error', 'Email ID Not Found!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
}
