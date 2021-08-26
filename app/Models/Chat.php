<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        "nursery_id",
        "user_id",
        "message"
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function nursery()
    {
        return $this->hasMany("App\Nursery");
    }
}
