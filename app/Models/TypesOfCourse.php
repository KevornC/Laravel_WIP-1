<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypesOfCourse extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        'course_type','desc','Active'
=======
    protected $table='types_of_courses';

    protected $fillable = [
        'course_type','desc',
>>>>>>> 9c1112dc9cdc8f4a83ebceb8f99f108f97d172c7
    ];

    function Courses(){
        return $this->hasMany(Course::class,'course_type_id');
    }
}
