<?php namespace App\Http\Controllers\v1;

use App\Course;
use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Course as CourseResource;
use App\Http\Resources\v1\CourseCollection;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(3);
        return new CourseCollection($courses);
    }

    public function single($id)
    {
        $course = Course::findOrFail($id);
        return new CourseResource($course);
    }
}