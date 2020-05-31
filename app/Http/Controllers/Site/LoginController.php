<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserIlluminate\Contracts\Auth\CanResetPasswordApp\UserIlluminate\Auth\Passwords\CanResetPassword;
//Sistema que vai gerenciar a autenticação do usuário.
use Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index');
    }

    public function entrar(Request $req)
    {
        //Autentica mantendo logado.
        //Auth :: try ([ ' email '  =>  $ request -> email , ' password '  =>  $ request -> senha ], $ request -> lembrar );
        //https://medium.com/@sagarmaheshwary31/laravel-5-8-from-scratch-authentication-middleware-email-verify-and-password-reset-93a4b2103794
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
            return redirect()->route('admin.alunos');    
        }
        
        return redirect()->route('site.login');
    }

    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.login');
    }
    
/*
    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
*/
}
