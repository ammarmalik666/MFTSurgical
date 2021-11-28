<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function login_view(Request $request)
    {
        if ($request->session()->exists('AdminEmail')) {
            return redirect('/admin/dashboard');
        }else{
            return view('admin.login');
        }
    }
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|max:255'
        ]);
        $email = $request->email;
        $password = $request->password;

        $user = Admin::where('email', $email)->get();
        if(!$user->isEmpty())
        {   
            $dbPass = $user[0]->password;
            if(password_verify($password, $dbPass))
            {
                $request->session()->put('AdminEmail',$email);
                return redirect('/admin/dashboard');
            }
            else
            {
                return back()->withErrors('pass_not_match');
            }
        }else{
            return back()->withErrors('email_not_match');

        }
    }
    public function logout()
    {
        session()->forget('AdminEmail');
        return redirect('/admin/login');
    }
}
