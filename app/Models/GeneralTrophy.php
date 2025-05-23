<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralTrophy extends Model
{
    use HasFactory;

    public function committeeRelation()
{
    return $this->belongsTo(Committee::class, 'committee');
}

}
