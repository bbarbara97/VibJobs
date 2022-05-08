<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'location',
        'contract',
        'course',
        'requeriments',
        'description',
        'user_id'
    ];

    public function User(){

        return $this->belongsToMany(
            User::class,
        'oferta_user');
    }
}
