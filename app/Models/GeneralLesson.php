<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralLesson extends Model
{
    use HasFactory;

    public function intelligenceTypes()
    {
        return $this->belongsToMany(IntelligenceType::class);
    }
    
}
