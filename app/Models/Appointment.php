<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'barber_id',
        'fecha',
        'hora',
        
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relación inversa con Barbero
    public function barber(): BelongsTo
    {
        // return $this->belongsTo(Barber::class);
        return $this->belongsTo(Barber::class, 'barber_id', 'id');
    }

    // Relación muchos a muchos con Servicios
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'appointment_service');
    }
}
