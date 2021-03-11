<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        return [
            'uid' => $request->get('username'),
            'password' => $request->get('password'),
        ];
    }

    public function username()
    {
        return 'username';
    }

    public function authenticate(Request $request){
         // Retrive Input
         $credentials = $request->only('email', 'password');
         if (Auth::attempt($credentials)) {
             // si es rol 1 entra a solicitud
             //el rol 1 es para usuarios
             if(auth()->user()->roles == '1'){
                 return redirect('Solicitante');
             }
             //si es rol 2 entra a movilidad
             //rol 2 es quien confirma el cambio
             if(auth()->user()->roles == '2'){
                 return redirect('movilidad');
             }
             //si es rol 3 entra a autorizar
             //rol 3 es quien autorisa el cambio
             if(auth()->user()->roles == '3'){
                 return redirect('Aprobacion');
             }   
         }        
         // if failed login
         return redirect('login');
    }
}
