<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description'
    ];

    public function formulaires()
    {
        return $this->hasMany(Formulaire::class);
    }
}
