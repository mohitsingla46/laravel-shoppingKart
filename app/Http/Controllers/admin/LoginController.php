<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(Request $request){
        if(Auth::guard('admin')->user()){
            return redirect('admin/dashboard');
        }
        else{
            return view('admin.auth.login');
        }
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{
            if(auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect('admin/dashboard')->with('message','You are successfully logged in.');
            }
            else{
                return redirect('admin')->with('error','Email or password is incorrect.');
            }
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin')->with('message','You are successfully logged out.');
    }
}
