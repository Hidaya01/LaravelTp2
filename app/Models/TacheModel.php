<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TacheModel extends Model
{
    use HasFactory;
    protected $table = 'taches';

    protected $fillable = [
        'titre',          // Le titre de la tâche
        'description',    // La description de la tâche
        'completed',      // L'état de la tâche (terminée ou non)
    ];
}
