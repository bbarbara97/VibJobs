<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    use HasFactory;
    protected $table = 'experiencia';

    protected $fillable = [
        'name',
        'business',
        'time',
        'description',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(
            User::class,
        'id','user_id');
    }
}
