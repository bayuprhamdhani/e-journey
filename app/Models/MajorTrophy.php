<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorTrophy extends Model
{
    use HasFactory;

    public function committeeRelation2()
    {
        return $this->belongsTo(Committee::class, 'committee');
    }
}
