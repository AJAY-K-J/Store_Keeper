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

}
