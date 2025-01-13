<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    protected $fillable = [
        'date_creation',
        'module_id'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
