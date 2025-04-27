<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinishedMajorTrophy extends Model
{
    use HasFactory;
    protected $fillable = ['user', 'trophy', 'pict', 'status'];

}
