<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'budget',
        'montant_obtenu',
        'delais',
        'status',
        'obsevation',
        'user_id',
        'description',
    ];

    public function projectbymedias()
    {
        return $this->belongsToMany(Medias::class,'medias_projets','projet_id','medias_id');
    }

    public function projectbypartenaire()
    {
        return $this->belongsToMany(User::class,'cotisations','projet_id','user_id')->distinct();
    }
}
