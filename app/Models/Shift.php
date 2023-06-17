<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    public function hours()
    {
        return $this->belongsToMany(Hour::class, 'shift_hours');
    }
}
