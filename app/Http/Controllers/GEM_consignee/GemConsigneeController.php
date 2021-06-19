<?php

namespace App\Http\Controllers\GEM_consignee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class GemConsigneeController extends Controller
{
    

    public function index(){

return view('Gem_consignee.Gem_consignee');

    }




    public function consigneeDetails()
    {






    






            $consignee_details = DB::table('storearrivals')
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
                ->where([ ['gem_officer', 1]])
                ->get();

            return $consignee_details;
   
    }


}
