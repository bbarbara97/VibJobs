<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    use HasFactory;

    protected $table = 'estudios';

    protected $fillable = [
        'name',
        'institute',
        'time',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(
            User::class,
        'id','user_id');
    }
}
