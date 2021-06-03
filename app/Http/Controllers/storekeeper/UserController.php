<?php

namespace App\Http\Controllers\storekeeper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Designation;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $role_details=Role::all();
      $designation_details=Designation::all();
        return view('storekeeper.adduser',compact('role_details','designation_details'));
  
    }

    public function userslist(){

        $users = User::all();
        return $users;
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'name'=>'Required',
            'username'=>'Required',
            'email'=>'Required',
            'designation'=>'Required',
            'role'=>'Required',

            ]);

if($request->id){
    $user=User::find($request->id);
}else
    $user = new User;
  if($request->name){
      $user->name=$request->name;
  }


  if($request->username){
    $user->username=$request->username;
}
if($request->email){
    $user->email=$request->email;
}
if($request->designation){
    $user->designation=$request->designation;
}
if($request->role){
    $user->role=$request->role;
}

$user->save();
return 'Success';



      
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $delete_user = User::find($id);
        $delete_user->delete();
        return 'Success';
    }
}
