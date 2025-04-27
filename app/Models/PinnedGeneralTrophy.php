<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinnedGeneralTrophy extends Model
{
    use HasFactory;
    protected $fillable = ['user', 'trophy'];

    // PinnedGeneralTrophy Model
public function user()
{
    return $this->belongsTo(User::class);
}

public function generalTrophy()
{
    return $this->belongsTo(GeneralTrophy::class, 'trophy');
}

}
