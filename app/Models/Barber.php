<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Barber extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'correo',
        'telefono'
    ];
    // Relación uno a muchos con Citas
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
