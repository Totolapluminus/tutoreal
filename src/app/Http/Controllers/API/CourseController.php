<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\StoreRequest;
use App\Http\Requests\Course\UpdateRequest;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with(['lessons', 'reviews', 'users', 'topics'])->get();
        return CourseResource::collection($courses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if(isset($data['is_published']) && $data['is_published'] === 'on') $data['is_published'] = 1;
        if(isset($data['is_premium']) && $data['is_premium'] === 'on') $data['is_premium'] = 1;

        if(isset($data['preview_image'])) $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        Course::firstOrCreate($data);
        return 'Ok';
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return new CourseResource($course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Course $course)
    {
        $data = $request->validated();

        if(isset($data['is_published']) && $data['is_published'] === 'on') $data['is_published'] = 1;
        else $data['is_published'] = 0;
        if(isset($data['is_premium']) && $data['is_premium'] === 'on') $data['is_premium'] = 1;
        else $data['is_premium'] = 0;

        if(isset($data['preview_image'])) $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $course->update($data);
        return 'Ok';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
    }
}
