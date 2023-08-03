<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $items = Course::orderBy('id', 'desc')->paginate(15);
        return view('admin.courses.index', compact('items'));
    }

    public function create()
    {
        return view('admin.courses.create');
    }

    public function edit(Course $course)
    {
        return view('admin.courses.edit', [
            'item' => $course
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|max:3074'
        ]);

        $filename = \Str::random(8). '.'. $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('assets/images/courses'), $filename);//storeAs('assets/images/slides', $filename, 'public');

        $course = new Course();
        $course->setTranslation('title', config('app.defaultLocale', 'uz'), $request->title);
        $course->setTranslation('content', config('app.defaultLocale', 'uz'), $request->post('content'));
        $course->image = 'assets/images/courses/'.$filename;
        $course->save();

        return redirect()->route('courses.edit', $course->id)
            ->with('success', "Kurs muvaffaqiyatli yaratildi");
    }

    public function update(Request $request, Course $course)
    {
        if ($img = $request->image) {
            $request->validate([
                'image' => 'nullable|image|max:3074'
            ]);
            $filename = \Str::random(8). '.'. $img->getClientOriginalExtension();
            $request->file('image')->move(public_path('assets/images/courses'), $filename);
            $course->image = 'assets/images/courses/'.$filename;
        }

        if ($request->lang) {
            $request->validate([
                'lang.*.title' => 'required|string',
                'lang.*.content' => 'required|string',
            ]);
            foreach ($request->lang as $locale => $data) {
                $course = $this->setTranslations($course, $locale, $data);
            }

            $course->save();
        }

        $course->save();
        return redirect()->back()->with('success', "Muvaffaqiyatli saqlandi");
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->back()->with('success', "Muvaffaqiyatli o'chirildi");
    }
}
