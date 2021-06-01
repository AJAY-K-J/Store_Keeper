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



    public function store(Request $request)
    {

        $request->validate([

            'name'=>'Required',
            

            ]);

        $adduser = new Role;
        $adduser->name = $request->name;
     
        $adduser->save();
        return 'Success';
    }

}
