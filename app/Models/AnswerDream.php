<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerDream extends Model
{
    use HasFactory;
    protected $table = 'answer_dreams'; // Tambahkan ini
    protected $fillable = ['user', 'question_dream', 'option_answer'];

    public function questionDream()
{
    return $this->belongsTo(QuestionDream::class, 'question');
}

public function optionAnswer()
{
    return $this->belongsTo(OptionAnswer::class, 'answer');
}

}
