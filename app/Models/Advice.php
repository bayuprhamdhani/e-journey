<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    use HasFactory;
    protected $table = 'advices'; // Tambahkan ini
    protected $fillable = ['user', 'advice', 'date', 'status'];
}
