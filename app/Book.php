<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    protected $guarded = ['book_id'];
    protected $dates = ['published_at'];

    public function getPathAttribute(): String {
        return '/books/' . $this->id;
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
