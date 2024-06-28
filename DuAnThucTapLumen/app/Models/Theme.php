<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Theme extends Model
{
    protected $table = 'themes';

    protected $fillable = [
        'name',
        'description',
        'price',
        'thumbnail',
        'slug',
        'status',
        'file',
        'category_id'
    ];
    public function category():BelongsTo
    {
        return $this->belongsTo(ThemeCategory::class);
    }
}
