<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('admin.user.index', compact('users'));
  }


  public function edit(User $user)
  {
    return view('admin.user.edit', compact('user'));
  }



  public function update(UserRequest $request, User $user)
  {
    $data = $request->validated();
    $user->update($data);
    return redirect()->route("admin.user.index");
  }
}
