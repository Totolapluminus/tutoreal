<?php

namespace App\Http\Controllers;

use App\Http\Requests\Topic\StoreRequest;
use App\Http\Requests\Topic\UpdateRequest;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index() {
        $topics = Topic::all();
        return view('topic.index', ['topics' => $topics]);
    }

    public function show(Topic $topic) {
        return view('topic.show', ['topic' => $topic]);
    }

    public function create() {
        return view('topic.create');
    }

    public function store(StoreRequest $request){
        $data = $request->validated();
        Topic::firstOrCreate($data);
        return redirect()->route('topics.index');
    }

    public function edit(Topic $topic){
        return view('topic.edit', ['topic' => $topic]);
    }

    public function update(UpdateRequest $request, Topic $topic){
        $data = $request->validated();
        $topic->update($data);

        return view('topic.show', ['topic' => $topic]);
    }

    public function destroy(Topic $topic){
        $topic->delete();
        return redirect()->route('topics.index');
    }
}
