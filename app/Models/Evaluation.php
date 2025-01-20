<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = [
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
