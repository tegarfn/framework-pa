<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelSepatu extends Model
{
    public function Sepatu() {
        return $this->hasMany(Sepatu::class);
    }
    public function Supplier() {
        return $this->belongsTo(Supplier::class);
    }

    use HasFactory;
}
