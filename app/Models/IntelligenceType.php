<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntelligenceType extends Model
{
    use HasFactory;

    public function generalLessons()
    {
        return $this->belongsToMany(GeneralLesson::class);
    }
    
}
