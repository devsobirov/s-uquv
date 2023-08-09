<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $search = \request('search') ?? null;
        $paginated = Course::select(['id', 'title', 'image', 'duration'])->search($search)
            ->orderBy('id', 'desc')
            ->paginate(20);

        return view(!$search ? 'course-list' : 'search-results', compact('paginated'));
    }

    public function show(Course $course)
    {
        $courses = Course::getRandomCourses();
        return view('course-single', compact('course', 'courses'));
    }
}
