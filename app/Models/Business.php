<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'business';

    protected $fillable = [
        'CIF',
        'business_name',
        'tlf',
        'description',
        'user_id',
    ];

    public function User(){

        return $this->belongsTo(User::class,'id','user_id');
    }
}
