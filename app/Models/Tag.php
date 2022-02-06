<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected  $guarded = [];


    public function comments()
    {
        //hasOne hasMany BelongsTo BelongsMany
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        //hasOne hasMany BelongsTo BelongsMany
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function session()
    {
        //hasOne hasMany BelongsTo BelongsMany
        return $this->belongsToMany(Session::class, 'session_id');
    }

    public function supporter()
    {
        //hasOne hasMany BelongsTo BelongsMany
        return $this->belongsTo(Supporter::class, 'supporter_id');
    }

    public function student()
    {
        //hasOne hasMany BelongsTo BelongsMany
        return $this->belongsTo(Student::class, 'student_id');
    }
}
