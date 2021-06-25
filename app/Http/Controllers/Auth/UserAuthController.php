<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{

    public function usercheck(Request $request)
    {


        $request->validate([

            'username' => 'required',
            'password' => 'required',

        ]);

        $user = User::where('username', '=', $request->username)->first();

        if ($user) {

            if ($request->password == $user->password) {

                if ($user->role == 'Store-Keeper') {


                    $request->session()->put('Store-Keeper', $user->id);
                    return redirect('storedashboard');

                } elseif ($user->role == 'Section-Officer') {

                    $request->session()->put('Section-Officer', $user->id);
                    return redirect('sectiondashboard');

                } elseif ($user->role == 'Store-Officer') {

                    $request->session()->put('Store-Officer', $user->id);
                    return redirect('managerdashboard');

                } elseif ($user->role == 'Head-Office') {
                    $request->session()->put('Head-Office', $user->id);
                    return redirect('officedashboard');

                } elseif ($user->role == 'GeM-Consignee') {
                    $request->session()->put('GeM-Consignee', $user->id);
                    return redirect('gem-dashboard');

                } else {
                    return back()->with('fail', 'Invalid user');
                }
            } else {
                return back()->with('fail', 'Invalid password');
            }
        } else {
            return back()->with('fail', 'No account found');
        }
    }


    public function userlogout()
    {

        // if (Session()->has('store-keeper')) {

        //     Session()->pull('store-keeper');
        //     return redirect('/');
        // }

  $r=Auth::user();
  dd($r);


    }

























}
