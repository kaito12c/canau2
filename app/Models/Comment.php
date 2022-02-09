<?php

namespace App\Models;

use App\Models\Session;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected  $guarded = [];


    public function sessions()
    {
        return $this->belongsTo(Session::class, 'session_id');

    }

    public function students()
    {
        return $this->belongsTo(Student::class,'student_id');
    }    
}
