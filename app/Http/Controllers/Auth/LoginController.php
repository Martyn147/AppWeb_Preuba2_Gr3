<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        if(Auth::check()){
            return redirect('/');
        }
        return view('pages.auth.login');
    }
    public function login(LoginRequest $request)
    {
        $credecial = $request->getCredentials();
        if (!Auth::validate($credecial)) {
            return redirect()->to('/login')->withErrors(trans('El usuario y/o contraseña son incorrectas'));
        }
        $user=Auth::getProvider()->retrieveByCredentials($credecial);
        Auth::login($user);
        return $this->authenticated($request,$user);

    }

    public function authenticated(Request $request,$user){
        return redirect('/');
    }
}
