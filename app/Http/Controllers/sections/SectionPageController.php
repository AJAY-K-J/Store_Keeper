<?php

namespace App\Http\Controllers\sections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class SectionPageController extends Controller
{
    //

    public function index(){

        return view('sections.sectiondashboard');

    }


}
