<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //protected $table = 'usuario';
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'country',
        'location',
        'cp',
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

    public function getIsAdminAttribute()
    {
        // role_id = 0, normal
        // role_id = 1, empresa
        // role_id = 2, Admin
        return $this->role_id == 2;
    }
    public function getIsBusinessAttribute()
    {
        return $this->role_id == 1;
    }

    
    public function business()
    {
        return $this->hasMany(Business::class, 'user_id','id');
    }

    public function student()
    {
        return $this->hasMany(Student::class, 'user_id','id');
    }

    public function ofertas(){
        return $this->belongsToMany(
            Oferta::class,
        'oferta_user');
    }
}
