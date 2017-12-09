<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Constraint;
use Intervention\Image\Facades\Image;


class ProfileController extends Controller
{
    public function account(){
      return view('account.index');
    }

    public function edit(){
      return view('account.edit');
    }

    public function post(Request $request){
      $this->validate($request, [
       "name" => 'required|min:3|max:255',
       "email" => 'required|email',
      ]);
      $user = User::find(Auth::user()->id);
      $user->name = $request->name;
      $user->email = $request->email;

      if($request->hasFile('avatar')){
        $file = $request->file('avatar');
        $filename = Str::random(20);
        $path = 'users'.'/'.date('FY').'/';
        $filePath = $path.$filename.'.'.$file->getClientOriginalExtension();

        $image = Image::make($file)->resize(
                                    800,
                                    600,
                                    function (Constraint $constraint) {
                                        $constraint->aspectRatio();
                                        $constraint->upsize();
                                    }
                                )->encode($file->getClientOriginalExtension(), 75);
        Storage::disk(config('voyager.storage.disk'))->put($filePath, (string) $image, 'public');
      }
      $user->avatar = $filePath;

      $user->save();

      return redirect()->back();
    }
}
