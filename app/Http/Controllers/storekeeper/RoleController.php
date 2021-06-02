<?php

namespace App\Http\Controllers\storekeeper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleController extends Controller
{
    public function index(){
        return view('storekeeper.addroles');
    }


    public function roleslist(){

        $role= Role::all();
        return $role;
        
    }


    public function store(Request $request)
    {

        $request->validate([

            'name'=>'Required',

            ]);

if($request->id){
    $Role=Role::find($request->id);
}else
    $Role = new Role;
  if($request->name){
      $Role->name=$request->name;
  }


$Role->save();
return 'Success';     
        
    }





    public function destroy( $id)
    {
        $delete_role = Role::find($id);
        $delete_role->delete();
        return 'Success';
    }

}
