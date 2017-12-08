<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\User;

class ProfileController extends Controller
{
    public function account(){
      return view('account.index');
    }

    public function profile(){
      $user = Auth::user();
      return new User($user);
    }
}
