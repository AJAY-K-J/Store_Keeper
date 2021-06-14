<?php

namespace App\Http\Controllers\sections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\storearrival;
use Illuminate\Support\Facades\DB;

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


    public function sectionReturn()
    {





        if (Session()->has('section-in-charge')) {



            return   view('sections.section_return_book');
        } else {
            return redirect('/');
        }
    }












    public function sectionItem()
    {






        if (Session()->has('section-in-charge')) {

            $user_id = Session('section-in-charge');
            $user_detail = User::where('id', '=',  $user_id)->pluck('section');







            $section_details = DB::table('storearrivals')
                ->join('sections', 'sections.id', '=', 'storearrivals.section')
                ->join('items', 'items.id', '=', 'storearrivals.item_name')
                ->join('suppliers', 'suppliers.id', '=', 'storearrivals.supplier')
                ->select([

                    'storearrivals.id',
                    'storearrivals.date',
                    'storearrivals.supplier',
                    'storearrivals.quantity',
                    'storearrivals.price',
                    'storearrivals.invoice',
                    'storearrivals.Dc_no',
                    'storearrivals.Dc_date',
                    'storearrivals.arrivals_page_no',
                    'storearrivals.sign_of_insp_officer',
                    'storearrivals.store_officer',
                    'storearrivals.remarks',
                    'sections.name as section_name',
                    'suppliers.name as supplier_name',
                    'suppliers.gst',
                    'suppliers.Details',
                    'items.name as item_name',
                    'items.category_name',
                    'items.description_item',


                ])
                ->where([['sections.name', $user_detail], ['sign_of_insp_officer', 0]])
                ->get();

            return $section_details;
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
