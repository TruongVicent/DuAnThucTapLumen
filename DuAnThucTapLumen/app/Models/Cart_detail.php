<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_detail extends Model
{
    use  HasFactory;
    protected $table = 'cart_details';

    protected $fillable = [
        'price',
        'thumbnail',
        // 'cart_id',
        // 'theme_id',
        'theme_name',
    ];
    protected $hidden = ['created_at', 'updated_at'];
   
}