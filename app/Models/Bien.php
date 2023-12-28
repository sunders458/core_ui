<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;
    
    protected $table = 'biens';

    protected $fillable = [
        'libelle',
        'description',
        'status',
        'illustration',
        'publie',
        'publie_at_debut',
        'publie_at_fin_prevue',
        'publie_at_fin',
        'prix',
        'views',
        'localisation',
        'longitude',
        'latitude',
        'superficie',
        'nbre_pieces',
        'nbre_douche',
        'lot',
        'ilot',
        'type_logement',
        'finition',
        'garage',
        'dependance',
        'condition',
        'promotion_id',
        'client_id',
        'etat_avancement',
        'type_bien',
        'site_id',
    ];
}
