<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\UserResource;
use App\User;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;


class UsersController extends Controller
{
   public function test(Request $request){
       $users = QueryBuilder::for(User::class)
           ->allowedFilters(['name'])
           ->get();
       return UserResource::collection($users);
   }
}
