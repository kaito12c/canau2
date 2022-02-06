<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Supporter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Session extends Model
{
    use HasFactory;

    protected  $guarded = [];

    // protected $fillable = ['title', 'company_name', 'body', 'id'];

    //セットで情報をとってきています。
    // protected $with = ['category', 'supporter'];

    public function scopeFilter($query, array $filters)//Session::newQuery->filter()
    {
        $query->when($filters['search'] ?? false, function($query, $search)
            {
                $query 
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');

            });
        // $query->when($filters['category'] ?? false, fn($query, $category)=>
        //     $query->whereHas('category', fn($query) =>
        //         $query->where('slug', $category)
        //         )

        //     );
        $query->when($filters['session'] ?? false, fn($query, $session)=>
            $query->whereHas('session', fn($query) =>
                $query->where('name', $session)
                )

            );
    }

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

    public function supporter()
    {
        //hasOne hasMany BelongsTo BelongsMany
        return $this->belongsTo(Supporter::class);
    }

    public function student()
    {
        //hasOne hasMany BelongsTo BelongsMany
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function admin()
    {
        //hasOne hasMany BelongsTo BelongsMany
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function tags()
    {
        //hasOne hasMany BelongsTo BelongsMany
        return $this->belongsToMany(Tag::class);
    }

}
