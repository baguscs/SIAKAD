<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    public function struktur()
    {
        return $this->belongsTo(Struktur::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function guru()
    {
        return $this->hasOne(Guru::class);
    }
}
