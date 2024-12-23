<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Assurez-vous d'importer ce trait
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory; // Utilisation du trait HasFactory

    protected $fillable = [
        'nom',
        'prenom',
        'classe',
    ];
}
