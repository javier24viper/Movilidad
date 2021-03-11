<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $usuario = auth()->user();
        $rol = $usuario->roles;
        if($rol == '1'){
            return view('home');
        }
        if($rol == '2'){
            return redirect('movilidad');
        }
        if($rol == '3'){            
            return redirect('Aprobacion');
        }
        else{
            return view('home');
        }
    }
}
