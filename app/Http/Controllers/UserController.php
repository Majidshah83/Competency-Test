<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
 use App\Http\Resources\UserResource;
  use App\Http\Resources\UserDepartmentResource;
 use App\Models\User;
 use App\Models\Department;
 use App\Models\UserDepartment;

class UserController extends Controller
{
     public function index()
     {
        return UserResource::collection(User::with('departments')->get());

     }
    public function store(UserRequest $request)
    {

        $users=new User();
        $users->name=$request->name;
        $users->email=$request->email;
        $users->save();
        $profile = Department::find(1);
        $profile->departments()->attach($users);
        return $profile;
    }
}