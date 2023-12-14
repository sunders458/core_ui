<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded = ['id', 'created_at'];
}
