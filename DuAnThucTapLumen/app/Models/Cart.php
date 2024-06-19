<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use  HasFactory;
    protected $table = 'carts';

    protected $fillable = [
        'fullname',
        'email',
        // 'user_id',
        'status',
    ];

    protected $hidden = ['created_at', 'updated_at'];
   
}
