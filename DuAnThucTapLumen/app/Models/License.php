<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class License extends Model {

    protected $table = 'licenses';

    protected $fillable = [
        'key',
        'expiration_date',
        'theme_id',
        'status',
    ];
    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class);
    }
}
