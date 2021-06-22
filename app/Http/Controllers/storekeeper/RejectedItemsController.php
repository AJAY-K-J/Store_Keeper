<?php

namespace App\Http\Controllers\storekeeper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use App\Models\Storearrival;
use Illuminate\Support\Facades\DB;

class RejectedItemsController extends Controller
{
    

    public function index(){

    return view('storekeeper.Rejection_book');


    }

    public function rejectedItems(){

        $result = DB::table('storearrivals')
        ->join('sections', 'sections.id', '=', 'storearrivals.section')
        ->join('items', 'items.id', '=', 'storearrivals.item_name')
        ->join('suppliers', 'suppliers.id', '=', 'storearrivals.supplier')
        ->select([

            'storearrivals.id',
            'storearrivals.date',
            'storearrivals.supplier',
            'storearrivals.quantity',
            'storearrivals.approvedquantity',
             'storearrivals.rejectedquantity',
            'storearrivals.price',
            'storearrivals.invoice',
            'storearrivals.Dc_no',
            'storearrivals.Dc_date',
            'storearrivals.arrivals_page_no',
            'storearrivals.sign_of_insp_officer',
            'storearrivals.store_officer',
            'storearrivals.remarks',
            'sections.id as section_id',
            'sections.name as section_name',
            'suppliers.id as supplier_id',
            'suppliers.name as supplier_name',
            'suppliers.gst',
            'suppliers.Details',
            'items.id as item_id',
            'items.name as item_name',
            'items.category_name',
            'items.description_item',


        ])
        ->where([['rejectedquantity','!=',0]])
        ->paginate(5);


    return    $result;


    }


}