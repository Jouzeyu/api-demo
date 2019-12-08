<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\UserResource;
use App\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
   public function test(Request $request){
       $user=User::where('id',2)->first();
       return $this->success(new UserResource($user));
   }
}
