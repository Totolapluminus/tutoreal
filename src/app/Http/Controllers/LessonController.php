<?php

namespace App\Http\Controllers;

use App\Http\Requests\Lesson\StoreRequest;
use App\Http\Requests\Lesson\UpdateRequest;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index() {
        $lessons = Lesson::all();
        return view('lesson.index', ['lessons' => $lessons]);
    }

    public function show(Course $course, Lesson $lesson) {
        return view('lesson.show', ['lesson' => $lesson, 'course' => $course]);
    }

    public function create(Course $course) {
        return view('lesson.create', ['course' => $course]);
    }

    public function store(StoreRequest $request, Course $course){
        // dd($course);
        $data = $request->validated();
        Lesson::firstOrCreate(['course_id' => $course->id], $data);
        return redirect()->route('courses.show', $course->id);
    }

    public function edit(Course $course, Lesson $lesson){
        return view('lesson.edit', ['lesson' => $lesson, 'course' => $course]);
    }

    public function update(UpdateRequest $request, Course $course, Lesson $lesson){
        $data = $request->validated();
        $lesson->update($data);

        return view('lesson.show', ['lesson' => $lesson, 'course' => $course]);
    }

    public function destroy(Course $course, Lesson $lesson){
        $lesson->delete();
        return redirect()->route('courses.show', $course->id);
    }
}
