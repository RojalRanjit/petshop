<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function registerUser(Request $req){

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,        
           'password' => Hash::make($req->password)
        ]);
        return redirect()->route('login');
    }    

    public function loginUser(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $admin = 'superadmin@gmail.com';
        $adminPassword ='superadmin123';
        $check = User::where('email','=',$admin)->first();
        // dd($req->all());
        // dd($check->password);
        if($check->email == $admin && Hash::check($adminPassword ,$check->password)){
            return redirect()->route('adminDashboard');
        }
        else if(Auth::attempt($req->only('email', 'password'))){
            return redirect()->route('home');
        }else{
            return back()->with('fail', 'User Not Found');
        }

    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
