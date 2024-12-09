<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function show(User $user) {
        return view('user.show', ['user' => $user]);
    }

    public function create() {
        return view('user.create');
    }

    public function store(StoreRequest $request){
        $data = $request->validated();
        User::firstOrCreate([
            'email' => $data['email']
        ], $data);
        return redirect()->route('users.index');
    }

    public function edit(User $user){
        return view('user.edit', ['user' => $user]);
    }

    public function update(UpdateRequest $request, User $user){
        $data = $request->validated();
        $user->update($data);

        return view('user.show', ['user' => $user]);
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.index');
    }
}
