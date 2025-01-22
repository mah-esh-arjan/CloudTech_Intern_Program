<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\Subject;
use App\Models\Image;

class Student extends Model
{
    use HasFactory;
    protected $table = "student";
    protected $primaryKey = "student_id";

    protected $fillable = [
        'name',
        'password',
        'age',
        'gender',
        'course'
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class, 'student_id');
    }

    public function subject(){
        return $this->hasMany(Subject::class, 'student_id');
    }

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

}
