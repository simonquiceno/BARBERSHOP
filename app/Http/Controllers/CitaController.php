<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class CitaController extends Controller
{
    public function cita_vista_admin(){
        $citas = Appointment::with(['user', 'barber'])->get();
        return view('citas_admin', compact('citas'));
    }
}
