<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\StoreRequest;
use App\Http\Requests\Lesson\UpdateRequest;
use App\Http\Resources\LessonResource;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request, Course $course)
    {
        $data = $request->validated();
        Lesson::firstOrCreate(['course_id' => $course->id], $data);
        return 'ok';
    }

    /**
     * Display the specified resource.
     */
    public function show(Lesson $lesson)
    {
        return new LessonResource($lesson);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Course $course, Lesson $lesson)
    {
        $data = $request->validated();
        $lesson->update($data);

        return 'ok';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return 'ok';
    }
}
