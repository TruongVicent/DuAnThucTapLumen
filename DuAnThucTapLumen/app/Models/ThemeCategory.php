<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeCategory extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
    ];
}
