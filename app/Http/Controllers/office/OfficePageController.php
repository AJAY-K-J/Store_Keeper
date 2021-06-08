<?php

namespace App\Http\Controllers\office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfficePageController extends Controller
{
   public function index(){

    return view('office.officedashboard');
   }
}
