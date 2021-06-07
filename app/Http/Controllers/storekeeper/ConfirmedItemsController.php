<?php

namespace App\Http\Controllers\storekeeper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\storearrival;

class ConfirmedItemsController extends Controller
{
    public function index(){


        return view('storekeeper.confirmed_items');
    }

    public function confirmedItems(){


        $result=storearrival::where([['store_officer',1],['sign_of_insp_officer',1]])->get();

        return $result;

        
    }




    



}
