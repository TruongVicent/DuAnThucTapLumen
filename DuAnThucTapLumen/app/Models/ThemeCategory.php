<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeCategory extends Model
{
    protected $table = 'theme_categories';
    protected $fillable = [
        'name',
        'description',
        'status',
    ];
}
