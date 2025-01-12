<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    use HasFactory;
    protected $table = 'societes';

    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'email',
        'site_web',
        'numero_siret',
        'numero_tva',
        'statut_juridique',
        'annee_creation',
        'historique',
        'mission',
        'vision',
        'valeurs',
        'dirigeant',
        'effectif',
        'services',
        'secteurs',
        'specialites',
        'projets_emblematiques',
        'clients_principaux',
        'certifications',
        'affiliations',
        'responsabilite_sociale',
        'innovation',
        'logo',
    ];

    protected $casts = [
        'annee_creation' => 'integer',
    ];

    // Les attributs qui devraient être traités comme des dates.
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
