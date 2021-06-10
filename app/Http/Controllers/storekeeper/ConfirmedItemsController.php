<?php

namespace App\Http\Controllers\storekeeper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\storearrival;
use Illuminate\Support\Facades\DB;

class ConfirmedItemsController extends Controller
{
    public function index(){


        return view('storekeeper.confirmed_items');
    }

    public function confirmedItems(){



        $result=DB::table('storearrivals')
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
            ->where([['store_officer',1],['sign_of_insp_officer',1]])
            ->get();
    
    
            return    $result;


        
    }





    public function store(Request $request){

        $request->validate([

            '' => 'Required',
            '' => 'Required',
            '' => 'Required',
            '' => 'Required',
            '' => 'Required',
            '' => 'Required',
'' => 'Required',
'' => 'Required',
'' => 'Required',
'' => 'Required',
'' => 'Required',
'' => 'Required',
'' => 'Required',
'' => 'Required',










            ]);

    }

    



}
