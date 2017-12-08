<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\User;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function get(){
      $user = Auth::user();
      return new User($user);
    }
}
