<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'contenu',
        'type',
        'formulaire_id'
    ];

    public function formulaire()
    {
        return $this->belongsTo(Formulaire::class);
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }
}
