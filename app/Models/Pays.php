<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;
    protected $table = 'pays';

    protected $fillable = [
        'num',
        'libelle',
        'gentile',
        'iso',
        'prefixe',
        'sup',
    ];

    public function user()
    {
        return $this->HasMany(user::class);
    }
}
