<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

<<<<<<< HEAD
=======
    // protected $table='courses';

>>>>>>> 9c1112dc9cdc8f4a83ebceb8f99f108f97d172c7
    protected $fillable = [
        'course_name', 'course_type_id','Active'
    ];

    function TypesOfCourses(){
        return $this->belongsTo(TypesOfCourse::class,'course_type_id');
    }
<<<<<<< HEAD
=======


>>>>>>> 9c1112dc9cdc8f4a83ebceb8f99f108f97d172c7
}
