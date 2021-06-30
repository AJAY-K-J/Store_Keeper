<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {

      return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            



          if (Auth::user()->role == 'Store-Keeper') {


            $request->session()->put('Store-Keeper', Auth::user()->id);
            return redirect('storedashboard');

        } elseif (Auth::user()->role == 'Section-Officer') {

            $request->session()->put('Section-Officer', Auth::user()->id);
            return redirect('sectiondashboard');

        } elseif (Auth::user()->role == 'Store-Officer') {

            $request->session()->put('Store-Officer', Auth::user()->id);
            return redirect('managerdashboard');

        } elseif (Auth::user()->role == 'SAS') {
            $request->session()->put('SAS', Auth::user()->id);
            return redirect('officedashboard');

        } elseif (Auth::user()->role == 'GeM-Consignee') {
            $request->session()->put('GeM-Consignee', Auth::user()->id);
            return redirect('gem-dashboard');

        } else {
            return redirect('login')->with('error', 'Invalid user');
        }
          


        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout() {
      Auth::logout();
      Session::flush();

      return redirect('login');
    }

    public function home()
    {

      return view('home');
    }

    public function change_password(Request $request)
	{
		$this->validate($request,[
			'currentPassword' => 'required',
			'password' => 'required|between:8,255|confirmed',
            
		]);

		if(Hash::check($request->currentPassword,Auth::user()->password)) {
            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password_confirmation)]);

   

           
			return ['status'=>1,'response'=>'Password changed successfully'];
		}
		else
			return ['status'=>0,'response'=>'Invalid Password'];
	}















}