<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'supplier_id'
    ];
    // Relación inversa con Proveedor
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
}
