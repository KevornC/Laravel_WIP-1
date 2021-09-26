<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentSelection extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'enroll_dt',
        'is_approved',
<<<<<<< HEAD
        'Active'
=======
>>>>>>> 9c1112dc9cdc8f4a83ebceb8f99f108f97d172c7
    ];

    function Users (){
        return $this->belongsTo(User::class,'user_id');
    }

    function Courses (){
        return $this->belongsTo(Course::class,'course_id');
    }
}
