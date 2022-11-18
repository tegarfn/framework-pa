<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    public function ModelSepatu() {
        return $this->belongsTo(ModelSepatu::class);
    }

    public function User() {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
    protected $table = 'sepatus';
    protected $fillable = [
        "nama",
        "foto",
        "ukuran",
        "warna",
        "jumlah",
        "status",
        "model_sepatu_id",
        "user_id"
    ];
}
