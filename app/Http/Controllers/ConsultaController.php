<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
class ConsultaController extends Controller
{
    public function index() {
        $user_id = Auth::id();
        $citas = Appointment::where('user_id', $user_id)->with('barber')->get();

        return view('consultar', compact('citas'));
    }

    // public function cancelarCita(Appointment $cita)
    // {
    //     $cita->delete();
    //     return redirect()->back()->with('success', 'Cita cancelada correctamente.');
    // }
}
