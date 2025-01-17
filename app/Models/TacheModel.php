<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TacheModel extends Model
{
    use HasFactory;
    protected $table = 'taches';

    protected $fillable = [
        'titre',          
        'description',   
        'completed',     
    ];
}
