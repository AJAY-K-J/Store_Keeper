<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAuthController extends Controller
{
    
public function usercheck(Request $request){


 $request->validate([

   'username'=>'required',
   'password'=>'required',

 ]);

 $user= User::where('username','=',$request->username)->first();

 if($user){

    if($request->password == $user->password){

if($user->role == 'store-keeper'){


$request->session()->put('store-keeper',$user->id);
return redirect('storedashboard');

}elseif($user->role == 'section-in-charge'){

    $request->session()->put('section-in-charge',$user->id);
    return redirect('sectiondashboard');
    

}elseif($user->role == 'store-manager'){

    $request->session()->put('store-manager',$user->id);
    return redirect('managerdashboard');

}elseif($user->role == 'office'){


}else{
    return back()->with('fail','Invalid user');

}




    }else{
        return back()->with('fail','Invalid password');
    }


 }else{
     return back()->with('fail','No account found');
 }


}


public function userlogout(){

    if(Session()->has('store-keeper')){

        Session()->pull('store-keeper');
        return redirect('/');
    }
}


}
