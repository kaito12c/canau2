<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function sessions()
    {
        //hasOne hasMany BelongsTo BelongsMany
        return $this->hasMany(Session::class);
    }

    public function supporter()
    {
        return $this->hasMany(User::class);
    }
}
