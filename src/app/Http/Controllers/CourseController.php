<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course\StoreRequest;
use App\Http\Requests\Course\UpdateRequest;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::with(['lessons', 'reviews', 'users', 'topics'])->get();
        return view('course.index', ['courses' => $courses]);
    }

    public function show(Course $course) {
        $authors = $course->users()->wherePivot('role', 'author')->get();
        $viewers = $course->users()->wherePivot('role', 'viewer')->get();

        $lessons = Lesson::with('course')->get();
        $reviews = Review::with('course', 'user')->get();

        return view('course.show', [
            'course' => $course,
            'authors' => $authors,
            'viewers' => $viewers,
            'lessons' => $lessons,
            'reviews' => $reviews
        ]);
    }

    public function create() {
        return view('course.create');
    }

    public function store(StoreRequest $request){
        $data = $request->validated();

        if(isset($data['is_published']) && $data['is_published'] === 'on') $data['is_published'] = 1;
        if(isset($data['is_premium']) && $data['is_premium'] === 'on') $data['is_premium'] = 1;

        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        Course::firstOrCreate($data);
        return redirect()->route('courses.index');
    }

    public function edit(Course $course){
        return view('course.edit', ['course' => $course]);
    }

    public function update(UpdateRequest $request, Course $course){
        $data = $request->validated();

        if(isset($data['is_published']) && $data['is_published'] === 'on') $data['is_published'] = 1;
        else $data['is_published'] = 0;
        if(isset($data['is_premium']) && $data['is_premium'] === 'on') $data['is_premium'] = 1;
        else $data['is_premium'] = 0;

        $course->update($data);
        return redirect()->route('courses.show', $course);
    }

    public function destroy(Course $course){
        $course->delete();
        return redirect()->route('courses.index');
    }
}
