<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinnedMajorTrophy extends Model
{
    use HasFactory;
    protected $fillable = ['user', 'trophy'];
    // PinnedMajorTrophy Model
public function user()
{
    return $this->belongsTo(User::class);
}

public function majorTrophy()
{
    return $this->belongsTo(MajorTrophy::class, 'trophy');
}
}
