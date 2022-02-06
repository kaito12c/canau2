<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function session()
    {
        return $this->belongsTo(Session::class);

    }

    public function supporter()
    {
        return $this->belongsTo(User::class,'user_id');
    }    
}
