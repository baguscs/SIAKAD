<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
