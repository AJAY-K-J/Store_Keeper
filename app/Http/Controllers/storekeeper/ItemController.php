<?php

namespace App\Http\Controllers\storekeeper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        return view('storekeeper.additems');
    }
}
