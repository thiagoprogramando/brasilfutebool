<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{

    public function auth(Request $request) {

        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email é um campo obrigatório!',
            'email.email' => 'Email não é válido!',
            'password.required' => 'Senha é um campo obrigatório!'
        ]);

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('index');
        }else{
         return redirect()->back()->with('erro', 'Email ou senha inválido.');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
