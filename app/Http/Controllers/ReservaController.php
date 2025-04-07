<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barber;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use Carbon\Carbon;
class ReservaController extends Controller
{
    public function index()
    {
        $barberos = Barber::all(); // Obtener todos los barberos
        return view('reserva', compact('barberos'));
    }

    public function guardarReserva(Request $request)
    {
        // Validación de datos
        $request->validate([
            'barber_id' => 'required|exists:barbers,id',
            'fecha' => 'required|date|after_or_equal:today',
            'hora' => 'required',
        ]);

        // Obtener el usuario autenticado
        $user_id = Auth::id();

        // Combinar fecha y hora para la comparación
        $appointmentDateTime = Carbon::parse($request->fecha . ' ' . $request->hora);

        // Verificar citas existentes del mismo usuario con el mismo barbero
        $lastAppointment = Appointment::where('user_id', $user_id)
            ->where('barber_id', $request->barber_id)
            ->where('fecha', $request->fecha)
            ->orderBy('hora', 'desc')
            ->first();

        if ($lastAppointment) {
            $lastAppointmentDateTime = Carbon::parse($lastAppointment->fecha . ' ' . $lastAppointment->hora);
            $timeDifference = $appointmentDateTime->diffInHours($lastAppointmentDateTime);

            if ($timeDifference < 1) {
                return redirect()->back()->withErrors(['hora' => 'Debe haber al menos una hora de diferencia entre citas con el mismo barbero.']);
            }
        }

        // Guardar la cita en la base de datos
        Appointment::create([
            'user_id' => $user_id,
            'barber_id' => $request->barber_id,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
        ]);

        return redirect()->back()->with('success', 'Cita reservada correctamente');
    }
}
