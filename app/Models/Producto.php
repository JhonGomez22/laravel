<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','detalle','precio'
    ];

    public function compra() {
        return $this->hasMany(Compra::class, 'id');
    }
}

