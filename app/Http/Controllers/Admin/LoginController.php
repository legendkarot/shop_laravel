<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('backend.login', [
            'title' => 'Admin login'
        ]);
    }

    public function signup(Request $request){
        $request->validate([
            'email' => 'required|email:filter',
            'password' => 'required',
        ]);

        $remember = false;
        if(!empty($request->input('remember'))){
            $remember = true;
        }

        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $remember)){
            return redirect()->route('admin_index');
        }
        
        return redirect()->back();
    }
}
