<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baju extends Model
{
    public function ModelBaju() {
        return $this->belongsTo(ModelBaju::class);
    }

    public function User() {
        return $this->belongsTo(User::class);
    }


    use HasFactory;

    protected $table = 'bajus';
    protected $fillable = [
        "nama",
        "foto",
        "ukuran",
        "warna",
        "jumlah",
        "status",
        "model_baju_id",
        "user_id"
    ];
}
