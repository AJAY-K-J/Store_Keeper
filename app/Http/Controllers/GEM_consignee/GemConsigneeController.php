<?php

namespace App\Http\Controllers\GEM_consignee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class GemConsigneeController extends Controller
{


    public function index()
    {

        return view('Gem_consignee.Gem_consignee');
    }




    public function consigneeDetails()
    {



        $consignee_details = DB::table('stocks')
            ->join('sections', 'sections.id', '=', 'stocks.section_id')
            ->join('items', 'items.id', '=', 'stocks.item_id')
            ->join('suppliers', 'suppliers.id', '=', 'stocks.product_supplier_id')
            ->select([

                'stocks.product_id',
                'stocks.product_date',
                'stocks.quantity',
                'stocks.approvedquantity',


                'stocks.price',
                'stocks.invoice',

                'stocks.stock_type',
                'stocks.invoice_date',


                'stocks.Dc_no',
                'stocks.Dc_date',
                'stocks.arrivals_page_no',

               
                'stocks.remarks',
                'sections.name as section_name',
                'suppliers.name as supplier_name',
                'suppliers.gst',
                'suppliers.Details',
                'items.name as item_name',
                'items.category_name',
                'items.description_item',


            ])
            ->where([['stock_type', 'Gem-consignee'],['gemstatus', 0]])
            ->get();

        return $consignee_details;
    }


    public function GemArrivalBook(){

        return view('Gem_consignee.gem_arrival_book');

    }



    public function  GemArrivalDetails(){

        $GemArrival_details = DB::table('stocks')
        ->join('sections', 'sections.id', '=', 'stocks.section_id')
        ->join('items', 'items.id', '=', 'stocks.item_id')
        ->join('suppliers', 'suppliers.id', '=', 'stocks.product_supplier_id')
        ->select([

            'stocks.product_id',
            'stocks.product_date',
            'stocks.quantity',
            'stocks.approvedquantity',


            'stocks.price',
            'stocks.invoice',

            'stocks.stock_type',
            'stocks.invoice_date',
 'stocks.gemstatus',

            'stocks.Dc_no',
            'stocks.Dc_date',
            'stocks.arrivals_page_no',

           
            'stocks.remarks',
            'sections.name as section_name',
            'suppliers.name as supplier_name',
            'suppliers.gst',
            'suppliers.Details',
            'items.name as item_name',
            'items.category_name',
            'items.description_item',


        ])
        ->where([['stock_type', 'Gem-consignee']])
        ->get();

    return $GemArrival_details;

    }












}
