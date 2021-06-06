<?php

namespace App\Http\Controllers\sections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\storearrival;

class SectionPageController extends Controller
{
    //

    public function index()
    {


       


        if (Session()->has('section-in-charge')) {

   $section_details=storearrival::where([['section',Session('section-in-charge')],['sign_of_insp_officer',0]])->get();

 return   view('sections.sectiondashboard',compact('section_details'));


        } else {
            return redirect('/');
        }


        
    }


   public function sectionItem(){



        $section_details=storearrival::where([['section',Session('section-in-charge')],['sign_of_insp_officer',0]])->get();
     
      return  json_encode( $section_details);
    

   }






    public function logout()
    {
        if (Session()->has('section-in-charge')) {

            Session()->pull('section-in-charge');
            return redirect('/');
        }
    }
}
