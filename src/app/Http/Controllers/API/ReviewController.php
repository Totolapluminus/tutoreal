<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Review\StoreRequest;
use App\Http\Requests\Review\UpdateRequest;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request, Course $course)
    {
        $data = $request->validated();
        Review::firstOrCreate(['course_id' => $course->id], $data);
        return 'ok';
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Course $course, Review $review)
    {
        $data = $request->validated();
        $review->update($data);

        return 'ok';

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return 'ok';
    }
}
