<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
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
