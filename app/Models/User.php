<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 
        'firstname',
        'user_id', 
        'person_type', 
        'numero_cni',
        'sigle', 
        'photo', 
        'birthday', 
        'birthlocation', 
        'matricule', 
        'grade', 
        'bapteme', 
        'genre', 
        'juridique_forme', 
        'legale_representent', 
        'cc_number',
        'social_siege', 
        'matrimoniale',
        'conjoint', 
        'city',
        'residence',
        'nationality', 
        'eglise_id', 
        'pays_id', 
        'phone', 
        'phone_representant',
        'status', 
        'type',
        'email', 
        'entry_at',
        'out_at', 
        'password', 
        'address',
        'parent_id',
        'societe_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function Posts()
    {
        return $this->hasMany(Post::class, 'created_by', 'id');
    } 
    public function bien()
    {
        return $this->belongsToMany(Bien::class,'Bien_User','bien_id','user_id');
    }

    public function countries()
    {
        return $this->belongsTo(Pays::class,'pays_id');
    }

    // La relation entre User et Societe
    public function societe()
    {
        return $this->belongsTo(Societe::class);
    }
}
