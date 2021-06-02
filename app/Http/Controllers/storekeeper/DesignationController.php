<?php

namespace App\Http\Controllers\storekeeper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Designation;
class DesignationController extends Controller
{
    //

    public function index(){
        return view('storekeeper.adddesignations');
    }

    public function designationslist(){

        $designation= Designation::all();
        return $designation;
        
    }


    public function store(Request $request)
    {

        $request->validate([

            'name'=>'Required',

            ]);

if($request->id){
    $Designation=Designation::find($request->id);
}else
    $Designation = new Designation;
  if($request->name){
      $Designation->name=$request->name;
  }


$Designation->save();
return 'Success';     
        
    }





    public function destroy( $id)
    {
        $delete_designation =Designation::find($id);
        $delete_designation->delete();
        return 'Success';
    }



}
