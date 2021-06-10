<?php

namespace App\Http\Controllers\office;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\storearrival;

class OfficePageController extends Controller
{
   public function index(){

    return view('office.officedashboard');
   }

   public function indexx(){



$data=DB::table('storearrivals')
->join('sections', 'sections.id', '=', 'storearrivals.section')
    ->join('items', 'items.id', '=', 'storearrivals.item_name')
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
      'items.name as item_name',
      'items.category_name',
      'items.description_item',
   
   
   ])
    ->where('storearrivals.store_officer', '=', 0)
    ->get();

    return $data;
     
     }

}
