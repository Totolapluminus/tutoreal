<?php

namespace App\Http\Controllers;

use App\Http\Requests\Review\StoreRequest;
use App\Http\Requests\Review\UpdateRequest;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index() {
        $reviews = Review::all();
        return view('review.index', ['reviews' => $reviews]);
    }

    public function show(Course $course, Review $review) {
        return view('review.show', ['review' => $review, 'course' => $course]);
    }

    public function create(Course $course) {
        return view('review.create', ['course' => $course]);
    }

    public function store(StoreRequest $request, Course $course){
        // dd($course);
        $data = $request->validated();
        Review::firstOrCreate(['course_id' => $course->id], $data);
        return redirect()->route('courses.show', $course->id);
    }

    public function edit(Course $course, Review $review){
        return view('review.edit', ['review' => $review, 'course' => $course]);
    }

    public function update(UpdateRequest $request, Course $course, Review $review){
        $data = $request->validated();
        $review->update($data);

        return view('review.show', ['review' => $review, 'course' => $course]);
    }

    public function destroy(Course $course, Review $review){
        $review->delete();
        return redirect()->route('courses.show', $course->id);
    }
}
