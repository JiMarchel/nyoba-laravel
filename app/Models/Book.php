<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['title', 'author', 'is_fiction', 'is_read'])]
class Book extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
