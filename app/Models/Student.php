<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name',
        'nis',
        'graduate',
        'contact',
        'country',
        'province',
        'city',
        'subdistrict',
        'type_school',
        'major',
    ];

}
