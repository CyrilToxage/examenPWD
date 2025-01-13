<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    protected $fillable = [
        'contenu',
        'evaluation_id',
        'question_id'
    ];

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
