<?php

namespace App\Models;

use App\Models\Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meeting extends Model
{
    use HasFactory;

    protected  $guarded = [];

        /**
     * ネイティブなタイプへキャストする属性
     *
     * @var array
     */
    // protected $casts = [
    //     'start_at' => 'array',
    // ];

    public function session()
    {
        //hasOne hasMany BelongsTo BelongsMany
        return $this->hasOne(Session::class, 'session_id');
    }
}
