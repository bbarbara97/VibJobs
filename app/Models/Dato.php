<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    use HasFactory;

    protected $table = 'datos';

    protected $fillable = [
        'license',
        'vehicle',
        'nationality',
        'work_permit',
        'autonomous',
        'user_id'
    ];

    public function User(){
        return $this->belongsTo(
            User::class,
        'id','user_id');
    }
}
