<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celana extends Model
{
    public function ModelCelana() {
        return $this->belongsTo(ModelCelana::class);
    }

    public function User() {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
    protected $table = 'celanas';
    protected $fillable = [
        "nama",
        "foto",
        "ukuran",
        "warna",
        "jumlah",
        "status",
        "model_celana_id",
        "user_id"
    ];
}
