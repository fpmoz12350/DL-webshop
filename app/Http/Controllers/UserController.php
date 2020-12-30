<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('admin.users.index', compact(['users']));
    }

    public function create()
    {
        return view('admin.users.create')
        ->with('roles', Role::all());
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $data['password'] = Hash::make(auth()->user()->password);
        #$data['password_confirmation'] = Hash::make(auth()->user()->password_confirmation);

        #dd($data);

        $user = User::create($data);
        $user->roles()->attach($request->roles);

        return redirect()->route('users-index');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show', compact(['user']));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $user_roles = $user->roles->pluck('id')->toArray();

        return view('admin.users.edit', compact(['user', 'user_roles']))
        ->with('roles', Role::all());
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->roles);

        return redirect()->route('users-index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users-index');
    }
}
