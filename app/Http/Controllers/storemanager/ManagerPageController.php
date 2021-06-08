<?php

namespace App\Http\Controllers\storemanager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\storearrival;


class ManagerPageController extends Controller
{
    
public function index(){


    return view('storemanager.storemanagerdashboard');
}



public function managerlist(){

    
    $manager_list=storearrival::where([['store_officer', 0],['sign_of_insp_officer',1]])->get();
    return    $manager_list;


}

public function arrivalbook(){
    return view('storemanager.arrivalbook');

}

public function storelist(){
    
$data= storearrival::all();
return $data;

}


}
