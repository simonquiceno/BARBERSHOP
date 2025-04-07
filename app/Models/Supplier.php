<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'nombre',
    //     'telefono',
    //     'email',
    //     'direccion'
    // ];

    protected $fillable = ['nombre', 'email', 'telefono', 'direccion'];

    // Relación uno a muchos con Productos
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
