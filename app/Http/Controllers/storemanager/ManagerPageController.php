<?php

namespace App\Http\Controllers\storemanager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\storearrival;
use Illuminate\Support\Facades\DB;


class ManagerPageController extends Controller
{
    
public function index(){


    return view('storemanager.storemanagerdashboard');
}



public function managerlist(){

    
    


    $manager_list=DB::table('storearrivals')
    ->join('sections', 'sections.id', '=', 'storearrivals.section')
        ->join('items', 'items.id', '=', 'storearrivals.item_name')
        ->join('suppliers', 'suppliers.id', '=', 'storearrivals.supplier')
       ->select([
          
          'storearrivals.id',
          'storearrivals.date',
          'storearrivals.supplier',
          'storearrivals.quantity',
          'storearrivals.approvedquantity',
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
        ->where([['store_officer', 0],['sign_of_insp_officer',1]])
        ->get();


        return    $manager_list;



}

public function arrivalbook(){
    return view('storemanager.arrivalbook');

}

public function storelist(){
    



$data=DB::table('storearrivals')
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
    ->where([['sign_of_ask', 1]])
    ->get();


    return    $data;

}


}
