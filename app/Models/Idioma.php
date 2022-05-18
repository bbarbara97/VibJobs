<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    use HasFactory;

    protected $table = 'idiomas';

    protected $fillable = [
        'name',
        'level',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(
            User::class,
        'id','user_id');
    }
}
