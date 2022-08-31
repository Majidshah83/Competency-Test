<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
 use App\Http\Resources\UserResource;
  use App\Http\Resources\UserDepartmentResource;
 use App\Models\User;
 use App\Models\UserDepartment;

class UserController extends Controller
{
     public function index()
     {
        return UserResource::collection(User::with('departments')->get());

     }
   
}
