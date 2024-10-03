<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $table = 'voiture';

    protected $primaryKey = 'numVoiture';

    protected $fillable =[
        'vin', 'couleur', 'nbPlaces', 'cylindree', 'puissance', 'poids', 'longeur'
    ];
}
