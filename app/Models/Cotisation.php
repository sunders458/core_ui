<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotisation extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at'];

    protected $fillable = [
        'user_id',
        'projet_id',
        'type_cotisation_id',
        'montant',
        'user_validate_id',
        'user_delete_id',
    ];
}
