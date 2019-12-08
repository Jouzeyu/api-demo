<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
   public function test(Request $request){
       $user=User::get();
       return $this->error('服务器错误',500);
   }
}
