<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCelana extends Model
{
    public function Celana() {
        return $this->hasMany(Celana::class);
    }
    public function Supplier() {
        return $this->belongsTo(Supplier::class);
    }

    use HasFactory;
}
