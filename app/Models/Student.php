<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';

    protected $fillable = [
        'DNI',
        'student_name',
        'student_surname',
        'course',
        'user_id',
    ];

    public function User(){

        return $this->belongsTo(User::class,'id','user_id');
    }
}
