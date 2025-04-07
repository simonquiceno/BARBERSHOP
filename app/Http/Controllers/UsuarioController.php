<?php

namespace App\Http\Controllers;
use App\Models\Barber;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuario_vista_admin(){
        $usuarios = User::all();
        return view('usuarios_admin', compact('usuarios'));
    }

    public function nosotros(){
        $barberos = Barber::all();
        return view('nosotros');
    }
}
