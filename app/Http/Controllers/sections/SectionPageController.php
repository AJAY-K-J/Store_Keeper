<?php

namespace App\Http\Controllers\sections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Models\User;
use App\Models\storearrival;
class SectionPageController extends Controller
{
    //

    public function index(){

        if(Session()->has('section-in-charge')){

            $section= Session()->get('section-in-charge'); 
           
          $section_details=storearrival::where([['sign_of_insp_officer','0'],['section',$section]])->get();
//print_r($section_details);

return view('sections.sectiondashboard',compact('section_details'));
    
    }

    }


}
