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



 return   view('sections.sectiondashboard');


        } else {
            return redirect('/');
        }


        
    }


   public function sectionItem(){


    

       

    if (Session()->has('section-in-charge')) {

        $user_id=Session('section-in-charge');
         $user_detail=User::where('id','=',  $user_id)->pluck('section');
    


        $section_details=storearrival::where([['section', $user_detail],['sign_of_insp_officer',0]])->get();
      return   $section_details;
    } else return redirect('/');

   }






    public function logout()
    {
        if (Session()->has('section-in-charge')) {

            Session()->pull('section-in-charge');
            return redirect('/');
        }
    }
}
