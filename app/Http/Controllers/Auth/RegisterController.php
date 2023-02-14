<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //---- Función de visualización de la vista---\\
    public function show(){
        if(Auth::check()){
            return redirect('/');
        }
        return view('pages.auth.register');
    }
    //--- Función de Registrar---\\
    public function register(RegisterRequest $request){
        $user=User::create($request->validated());
        Profile::create([
            'user_id'=>$user['id'],
            'name'=>$user['name'],
        ]);
  
        return redirect('/login')->with('success','Se a registrado correctamente su información');
    }
}
