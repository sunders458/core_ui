<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'path',
        'user_id',
    ];

    public function mediasbyproject()
    {
        return $this->belongsToMany(Projet::class,'medias_projets','medias_id','projet_id');
    }
}
