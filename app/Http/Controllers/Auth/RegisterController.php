<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Section;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function register()
  {

    return view('auth.register');
  }

  public function storeUser(Request $request)
  {
      $request->validate([
          'name' => 'required|string|max:255',
          'username' => 'required|string|max:255|unique:users',
          'email' => 'required|string|email|max:255|unique:users',
          'role' => 'Required',

          // 'password' => 'required|string|min:8|confirmed',
          // 'password_confirmation' => 'required',
      ]);

      // User::create([
      //     'name' => $request->name,
      //     'email' => $request->email,
      //     'password' => Hash::make($request->password),
      // ]);

      // return redirect('home');
      if ($request->id) {
        $user = User::find($request->id);
    } else
        $user = new User;
    if ($request->name) {
        $user->name = $request->name;
    }


    if ($request->username) {
        $user->username = $request->username;
    }
    if ($request->email) {
        $user->email = $request->email;
    }
    $user->password = Hash::make('123');

    if ($request->role) {

        if ($request->role == 'Section-Officer') {
            $request->validate(
                [
                    'section' => 'Required',

                ]



            );

            

        }



        $user->role = $request->role;
    }
    if ($request->section) {

        $user->section = $request->section;
    }
    $user->save();
   
     if($request->section ==!null){
        $sec=Section::where('name', $request->section)->first();
        $sec->status=1;
        $sec->save();

     }

  
    return 'Success';

  }

}